<?php

declare(strict_types=1);

namespace App\Enums\Hooks;

enum UserActionHook: string
{
    case USER_CREATED_BEFORE = 'action.user.created_before';
    case USER_CREATED_AFTER = 'action.user.created_after';

    case USER_UPDATED_BEFORE = 'action.user.updated_before';
    case USER_UPDATED_AFTER = 'action.user.updated_after';

    case USER_PROFILE_UPDATED_BEFORE = 'action.user.profile_updated_before';
    case USER_PROFILE_UPDATED_AFTER = 'action.user.profile_updated_after';

    case USER_DELETED_BEFORE = 'action.user.deleted_before';
    case USER_DELETED_AFTER = 'action.user.deleted_after';

    case USER_BULK_DELETED_BEFORE = 'action.user.bulk_deleted_before';
    case USER_BULK_DELETED_AFTER = 'action.user.bulk_deleted_after';

    // Profile specific actions
    case USER_PROFILE_UPDATE_AFTER = 'action.user.profile_update_after';
    case USER_PROFILE_ADDITIONAL_UPDATE_AFTER = 'action.user.profile_additional_update_after';
}
