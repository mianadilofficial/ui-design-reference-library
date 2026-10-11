<?php

declare(strict_types=1);

namespace App\Mcp\Briefing;

final class BriefingItem
{
    /**
     * @param  array<int, array<string, mixed>>  $samples
     */
    public function __construct(
        public readonly string $id,
        public readonly string $section,
        public readonly string $priority,
        public readonly string $title,
        public readonly int $count = 0,
        public readonly ?string $summary = null,
        public readonly ?string $actionUrl = null,
        public readonly ?string $permission = null,
        public readonly array $samples = [],
    ) {
    }

    /**
     * @return array<string, mixed>
     */
    public function toArray(bool $includeSamples = true): array
    {
        $payload = [
            'id' => $this->id,
            'section' => $this->section,
            'priority' => $this->priority,
            'title' => $this->title,
            'count' => $this->count,
            'summary' => $this->summary,
            'action_url' => $this->actionUrl,
        ];

        if ($includeSamples && $this->samples !== []) {
            $payload['samples'] = $this->samples;
        }

        return $payload;
    }

    public function isActionable(): bool
    {
        return $this->count > 0;
    }
}
