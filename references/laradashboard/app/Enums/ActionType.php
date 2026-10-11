<?php

declare(strict_types=1);

namespace App\Enums;

enum ActionType: string
{
    case CREATED = 'created';
    case UPDATED = 'updated';
    case DELETED = 'deleted';
    case BULK_DELETED = 'bulk_deleted';
    case VIEWED = 'viewed';
    case APPROVED = 'approved';
    case REJECTED = 'rejected';
    case EXCEPTION = 'exception';
}
