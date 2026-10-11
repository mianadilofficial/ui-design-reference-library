<?php

declare(strict_types=1);

namespace App\Services\Mcp;

use App\Enums\Hooks\McpFilterHook;
use App\Mcp\Briefing\BriefingItem;
use App\Mcp\Briefing\BriefingProviderInterface;
use App\Models\User;
use App\Support\Facades\Hook;
use Illuminate\Support\Collection;

class McpBriefingService
{
    /**
     * @param  array{
     *     include_samples?: bool,
     *     sections?: array<int, string>|null,
     *     priority_min?: string|null
     * }  $options
     * @return array<string, mixed>
     */
    public function generateForUser(User $user, array $options = []): array
    {
        $includeSamples = $options['include_samples'] ?? true;
        $sectionFilter = $options['sections'] ?? null;
        $priorityMin = $options['priority_min'] ?? null;

        $items = $this->collectItems($user, $sectionFilter, $priorityMin);
        $actionableItems = $items->filter(fn (BriefingItem $item) => $item->isActionable())->values();
        $groupedSections = $this->groupItemsBySection($items, $includeSamples);
        $summary = $this->buildSummary($actionableItems);

        return [
            'greeting' => $this->buildGreeting($actionableItems),
            'generated_at' => now()->toIso8601String(),
            'summary' => $summary,
            'sections' => $groupedSections,
            'all_clear' => $actionableItems->isEmpty(),
        ];
    }

    /**
     * @return Collection<int, BriefingItem>
     */
    protected function collectItems(User $user, ?array $sectionFilter, ?string $priorityMin): Collection
    {
        $items = collect();

        foreach ($this->providerClasses() as $providerClass) {
            /** @var BriefingProviderInterface $provider */
            $provider = app($providerClass);

            if (! $provider->isAvailable()) {
                continue;
            }

            if ($sectionFilter !== null && ! in_array($provider->key(), $sectionFilter, true)) {
                continue;
            }

            foreach ($provider->items($user) as $item) {
                if ($item->permission !== null && ! $user->can($item->permission)) {
                    continue;
                }

                if ($priorityMin !== null && ! $this->meetsPriorityMinimum($item->priority, $priorityMin)) {
                    continue;
                }

                $items->push($item);
            }
        }

        return $items
            ->sortBy([
                fn (BriefingItem $item) => $this->priorityWeight($item->priority),
                fn (BriefingItem $item) => $this->sectionOrder($item->section),
                fn (BriefingItem $item) => $item->title,
            ])
            ->values();
    }

    /**
     * @return array<int, class-string<BriefingProviderInterface>>
     */
    public function providerClasses(): array
    {
        /** @var array<int, class-string<BriefingProviderInterface>> $providers */
        $providers = Hook::applyFilters(McpFilterHook::BRIEFING_PROVIDERS, []);

        return array_values(array_unique(array_filter($providers, function (string $providerClass): bool {
            return class_exists($providerClass)
                && is_subclass_of($providerClass, BriefingProviderInterface::class);
        })));
    }

    /**
     * @param  Collection<int, BriefingItem>  $items
     * @return array<int, array<string, mixed>>
     */
    protected function groupItemsBySection(Collection $items, bool $includeSamples): array
    {
        if ($items->isEmpty()) {
            return [];
        }

        return $items
            ->groupBy(fn (BriefingItem $item) => $item->section)
            ->map(function (Collection $sectionItems, string $sectionLabel) use ($includeSamples) {
                return [
                    'key' => (string) str($sectionLabel)->slug(),
                    'label' => $sectionLabel,
                    'items' => $sectionItems
                        ->map(fn (BriefingItem $item) => $item->toArray($includeSamples))
                        ->values()
                        ->all(),
                ];
            })
            ->values()
            ->all();
    }

    /**
     * @param  Collection<int, BriefingItem>  $actionableItems
     * @return array<string, int>
     */
    protected function buildSummary(Collection $actionableItems): array
    {
        return [
            'total_items' => $actionableItems->count(),
            'high_priority' => $actionableItems->where('priority', 'high')->count(),
            'medium_priority' => $actionableItems->where('priority', 'medium')->count(),
            'low_priority' => $actionableItems->where('priority', 'low')->count(),
        ];
    }

    /**
     * @param  Collection<int, BriefingItem>  $actionableItems
     */
    protected function buildGreeting(Collection $actionableItems): string
    {
        $timeGreeting = match (true) {
            now()->hour < 12 => __('Good morning.'),
            now()->hour < 17 => __('Good afternoon.'),
            default => __('Good evening.'),
        };

        if ($actionableItems->isEmpty()) {
            return trim($timeGreeting.' '.__('You are all caught up for today.'));
        }

        $highPriority = $actionableItems->where('priority', 'high')->count();
        $total = $actionableItems->count();

        if ($highPriority > 0) {
            return trim($timeGreeting.' '.trans_choice(
                'You have :count urgent item needing attention today.|You have :count urgent items needing attention today.',
                $highPriority,
                ['count' => $highPriority]
            ));
        }

        return trim($timeGreeting.' '.trans_choice(
            'You have :count item to review today.|You have :count items to review today.',
            $total,
            ['count' => $total]
        ));
    }

    protected function priorityWeight(string $priority): int
    {
        return match ($priority) {
            'high' => 0,
            'medium' => 1,
            default => 2,
        };
    }

    protected function sectionOrder(string $section): int
    {
        return match ($section) {
            __('Core') => 10,
            __('CRM') => 20,
            __('Marketplace') => 30,
            __('Forms') => 40,
            default => 100,
        };
    }

    protected function meetsPriorityMinimum(string $priority, string $minimum): bool
    {
        return $this->priorityWeight($priority) <= $this->priorityWeight($minimum);
    }
}
