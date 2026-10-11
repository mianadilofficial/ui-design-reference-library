<?php

declare(strict_types=1);

namespace App\Mcp\Briefing\Providers;

use App\Enums\PostStatus;
use App\Mcp\Briefing\BriefingItem;
use App\Mcp\Briefing\BriefingProviderInterface;
use App\Models\ErrorNotificationLog;
use App\Models\InboundEmail;
use App\Models\Post;
use App\Models\User;
use App\Services\ErrorLogNotificationService;
use Illuminate\Support\Facades\Schema;

class CoreBriefingProvider implements BriefingProviderInterface
{
    public function __construct(
        protected ErrorLogNotificationService $errorLogNotificationService
    ) {
    }

    public function key(): string
    {
        return 'core';
    }

    public function label(): string
    {
        return __('Core');
    }

    public function order(): int
    {
        return 10;
    }

    public function isAvailable(): bool
    {
        return true;
    }

    public function items(User $user): array
    {
        $items = [];

        if ($user->can('post.view') && Schema::hasTable('posts')) {
            $items[] = $this->pendingPostsItem();
        }

        if ($user->can('settings.edit')) {
            $items[] = $this->unnotifiedErrorsItem();
            $items[] = $this->failedInboundEmailsItem();
            $items[] = $this->pendingInboundEmailsItem();
        }

        return $items;
    }

    protected function pendingPostsItem(): BriefingItem
    {
        $query = Post::query()->where('status', PostStatus::PENDING->value);
        $count = (clone $query)->count();

        $samples = (clone $query)
            ->latest()
            ->limit(5)
            ->get(['id', 'title', 'created_at'])
            ->map(fn (Post $post) => [
                'id' => $post->id,
                'label' => $post->title,
                'created_at' => optional($post->created_at)?->toIso8601String(),
            ])
            ->values()
            ->all();

        return new BriefingItem(
            id: 'core_posts_pending_review',
            section: $this->label(),
            priority: $count > 0 ? 'medium' : 'low',
            title: trans_choice(':count post pending review|:count posts pending review', $count, ['count' => $count]),
            count: $count,
            summary: $count > 0
                ? __('Review and publish or reject submitted content.')
                : __('No posts are waiting for review.'),
            actionUrl: route('admin.posts.index', ['postType' => 'post', 'status' => PostStatus::PENDING->value]),
            permission: 'post.view',
            samples: $samples,
        );
    }

    protected function unnotifiedErrorsItem(): BriefingItem
    {
        $errors = $this->errorLogNotificationService->collectUnnotifiedErrors(windowHours: 24);
        $count = $errors->count();

        $samples = $errors
            ->take(5)
            ->map(fn (ErrorNotificationLog $log) => [
                'id' => $log->id,
                'label' => str($log->message)->limit(120)->toString(),
                'level' => $log->level,
                'occurrences' => $log->occurrences,
                'last_seen_at' => optional($log->last_seen_at)?->toIso8601String(),
            ])
            ->values()
            ->all();

        return new BriefingItem(
            id: 'core_unnotified_errors',
            section: $this->label(),
            priority: $count > 0 ? 'high' : 'low',
            title: trans_choice(':count new application error|:count new application errors', $count, ['count' => $count]),
            count: $count,
            summary: $count > 0
                ? __('Unique errors detected in the application log during the last 24 hours.')
                : __('No new application errors were detected today.'),
            actionUrl: route('admin.settings.index', ['tab' => 'notifications']),
            permission: 'settings.edit',
            samples: $samples,
        );
    }

    protected function failedInboundEmailsItem(): BriefingItem
    {
        if (! Schema::hasTable('inbound_emails')) {
            return $this->emptyItem(
                id: 'core_inbound_email_failures',
                title: __('Inbound email failures'),
                permission: 'settings.edit',
            );
        }

        $query = InboundEmail::query()->failed();
        $count = (clone $query)->count();

        $samples = (clone $query)
            ->latest()
            ->limit(5)
            ->get(['id', 'subject', 'from_email', 'created_at', 'processing_error'])
            ->map(fn (InboundEmail $email) => [
                'id' => $email->id,
                'label' => $email->subject ?: __('No subject'),
                'from_email' => $email->from_email,
                'error' => str($email->processing_error)->limit(120)->toString(),
                'created_at' => optional($email->created_at)?->toIso8601String(),
            ])
            ->values()
            ->all();

        return new BriefingItem(
            id: 'core_inbound_email_failures',
            section: $this->label(),
            priority: $count > 0 ? 'high' : 'low',
            title: trans_choice(':count inbound email failed to process|:count inbound emails failed to process', $count, ['count' => $count]),
            count: $count,
            summary: $count > 0
                ? __('Failed inbound messages may need manual review or connection fixes.')
                : __('No inbound email processing failures are waiting.'),
            actionUrl: route('admin.inbound-email-connections.index'),
            permission: 'settings.edit',
            samples: $samples,
        );
    }

    protected function pendingInboundEmailsItem(): BriefingItem
    {
        if (! Schema::hasTable('inbound_emails')) {
            return $this->emptyItem(
                id: 'core_inbound_email_pending',
                title: __('Inbound emails pending processing'),
                permission: 'settings.edit',
            );
        }

        $query = InboundEmail::query()->pending();
        $count = (clone $query)->count();

        $samples = (clone $query)
            ->latest()
            ->limit(5)
            ->get(['id', 'subject', 'from_email', 'created_at'])
            ->map(fn (InboundEmail $email) => [
                'id' => $email->id,
                'label' => $email->subject ?: __('No subject'),
                'from_email' => $email->from_email,
                'created_at' => optional($email->created_at)?->toIso8601String(),
            ])
            ->values()
            ->all();

        return new BriefingItem(
            id: 'core_inbound_email_pending',
            section: $this->label(),
            priority: $count > 0 ? 'medium' : 'low',
            title: trans_choice(':count inbound email waiting to process|:count inbound emails waiting to process', $count, ['count' => $count]),
            count: $count,
            summary: $count > 0
                ? __('These messages are queued and have not been processed yet.')
                : __('Inbound email processing is up to date.'),
            actionUrl: route('admin.inbound-email-connections.index'),
            permission: 'settings.edit',
            samples: $samples,
        );
    }

    protected function emptyItem(string $id, string $title, string $permission): BriefingItem
    {
        return new BriefingItem(
            id: $id,
            section: $this->label(),
            priority: 'low',
            title: $title,
            count: 0,
            summary: __('Not available on this installation.'),
            permission: $permission,
        );
    }
}
