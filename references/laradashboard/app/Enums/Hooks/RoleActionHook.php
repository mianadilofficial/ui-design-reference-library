<?php

declare(strict_types=1);

namespace App\Enums\Hooks;

enum RoleActionHook: string
{
    case ROLE_CREATED_BEFORE = 'action.role.created_before';
    case ROLE_CREATED_AFTER = 'action.role.created_after';

    case ROLE_UPDATED_BEFORE = 'action.role.updated_before';
    case ROLE_UPDATED_AFTER = 'action.role.updated_after';

    case ROLE_DELETED_BEFORE = 'action.role.deleted_before';
    case ROLE_DELETED_AFTER = 'action.role.deleted_after';

    case ROLE_BULK_DELETED_BEFORE = 'action.role.bulk_deleted_before';
    case ROLE_BULK_DELETED_AFTER = 'action.role.bulk_deleted_after';
}
