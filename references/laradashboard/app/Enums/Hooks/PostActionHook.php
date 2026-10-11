<?php

declare(strict_types=1);

namespace App\Enums\Hooks;

enum PostActionHook: string
{
    case POST_CREATED_BEFORE = 'action.post.created_before';
    case POST_CREATED_AFTER = 'action.post.created_after';

    case POST_UPDATED_BEFORE = 'action.post.updated_before';
    case POST_UPDATED_AFTER = 'action.post.updated_after';

    case POST_DELETED_BEFORE = 'action.post.deleted_before';
    case POST_DELETED_AFTER = 'action.post.deleted_after';

    case POST_BULK_DELETED_BEFORE = 'action.post.bulk_deleted_before';
    case POST_BULK_DELETED_AFTER = 'action.post.bulk_deleted_after';

    case POST_PUBLISHED_BEFORE = 'action.post.published_before';
    case POST_PUBLISHED_AFTER = 'action.post.published_after';

    case POST_TAXONOMIES_UPDATED = 'action.post.taxonomies_updated';
    case POST_META_UPDATED = 'action.post.meta_updated';
}
