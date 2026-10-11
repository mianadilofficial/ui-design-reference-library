<?php

declare(strict_types=1);

namespace App\Mcp\Attributes;

use Attribute;

#[Attribute(Attribute::TARGET_CLASS)]
class McpToolMeta
{
    public function __construct(
        public string $ability,
        public ?string $permission = null,
        public ?string $group = null,
    ) {
    }
}
