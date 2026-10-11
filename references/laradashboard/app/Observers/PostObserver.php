<?php

declare(strict_types=1);

namespace App\Observers;

use App\Enums\ActionType;
use App\Models\Post;
use App\Concerns\HasActionLogTrait;

class PostObserver
{
    use HasActionLogTrait;

    public function created(Post $post): void
    {
        $this->storeActionLog(ActionType::CREATED, ['post' => $post]);
    }

    public function updated(Post $post): void
    {
        $this->storeActionLog(ActionType::UPDATED, ['post' => $post]);
    }

    public function deleted(Post $post): void
    {
        $this->storeActionLog(ActionType::DELETED, ['post' => $post]);
    }
}
