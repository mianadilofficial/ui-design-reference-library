<?php

declare(strict_types=1);

namespace App\Enums\Hooks;

enum DatatableHook: string
{
    case BEFORE_SEARCHBOX = 'datatable_before_searchbox';
    case AFTER_SEARCHBOX = 'datatable_after_searchbox';

    // Lifecycle hooks
    case POST_DATATABLE_MOUNTED = 'post_datatable_mounted';
    case USER_DATATABLE_MOUNTED = 'user_datatable_mounted';
    case DATATABLE_MOUNTED = 'datatable_mounted';

    // Delete
    case BEFORE_DELETE_ACTION = 'datatable_action_before_delete';
    case BEFORE_DELETE_FILTER = 'datatable_filter_before_delete';

    case AFTER_DELETE_ACTION = 'datatable_action_after_delete';
    case AFTER_DELETE_FILTER = 'datatable_filter_after_delete';

    case BEFORE_BULK_DELETE_ACTION = 'datatable_action_before_bulk_delete';
    case BEFORE_BULK_DELETE_FILTER = 'datatable_filter_before_bulk_delete';

    case AFTER_BULK_DELETE_ACTION = 'datatable_action_after_bulk_delete';
    case AFTER_BULK_DELETE_FILTER = 'datatable_filter_after_bulk_delete';
}
