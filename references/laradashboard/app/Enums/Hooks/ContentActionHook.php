<?php

declare(strict_types=1);

namespace App\Enums\Hooks;

enum ContentActionHook: string
{
    case REGISTER_POST_TYPES = 'action.register_post_types';
    case REGISTER_TAXONOMIES = 'action.register_taxonomies';
}
