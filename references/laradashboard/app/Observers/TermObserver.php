<?php

declare(strict_types=1);

namespace App\Observers;

use App\Enums\ActionType;
use App\Models\Term;
use App\Concerns\HasActionLogTrait;

class TermObserver
{
    use HasActionLogTrait;

    public function created(Term $term): void
    {
        $this->storeActionLog(ActionType::CREATED, ['term' => $term]);
    }

    public function updated(Term $term): void
    {
        $this->storeActionLog(ActionType::UPDATED, ['term' => $term]);
    }

    public function deleted(Term $term): void
    {
        $this->storeActionLog(ActionType::DELETED, ['term' => $term]);
    }
}
