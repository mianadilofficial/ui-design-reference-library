<?php

declare(strict_types=1);

namespace App\Observers;

use App\Enums\ActionType;
use App\Concerns\HasActionLogTrait;
use App\Models\Role;

class RoleObserver
{
    use HasActionLogTrait;

    public function created(Role $role): void
    {
        $this->storeActionLog(ActionType::CREATED, ['role' => $role]);
    }

    public function updated(Role $role): void
    {
        $this->storeActionLog(ActionType::UPDATED, ['role' => $role]);
    }

    public function deleted(Role $role): void
    {
        $this->storeActionLog(ActionType::DELETED, ['role' => $role]);
    }
}
