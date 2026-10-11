<?php

declare(strict_types=1);

namespace App\Mcp\Briefing;

use App\Models\User;

interface BriefingProviderInterface
{
    public function key(): string;

    public function label(): string;

    public function order(): int;

    public function isAvailable(): bool;

    /**
     * @return array<int, BriefingItem>
     */
    public function items(User $user): array;
}
