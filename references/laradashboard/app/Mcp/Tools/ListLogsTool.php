<?php

declare(strict_types=1);

namespace App\Mcp\Tools;

use App\Mcp\Attributes\McpToolMeta;
use App\Mcp\Tools\Concerns\InteractsWithMcpAuthorization;
use App\Services\StorageLogService;
use Illuminate\Contracts\JsonSchema\JsonSchema;
use Laravel\Mcp\Request;
use Laravel\Mcp\Response;
use Laravel\Mcp\Server\Attributes\Description;
use Laravel\Mcp\Server\Attributes\Name;
use Laravel\Mcp\Server\Tool;

#[Name('list-logs')]
#[Description('List log files available under storage. Use before downloading logs from Settings > Security.')]
#[McpToolMeta(ability: 'mcp:ops.logs.read', permission: 'settings.edit', group: 'Operations')]
class ListLogsTool extends Tool
{
    use InteractsWithMcpAuthorization;

    public function __construct(
        protected StorageLogService $storageLogService,
    ) {
    }

    public function handle(Request $request): Response
    {
        if ($response = $this->authorizeMcpAbility('mcp:ops.logs.read', 'settings.edit')) {
            return $response;
        }

        $request->validate([
            'search' => ['nullable', 'string', 'max:255'],
        ]);

        $search = strtolower(trim((string) ($request->get('search') ?? '')));

        $logs = collect($this->storageLogService->listLogFiles())
            ->when($search !== '', fn ($collection) => $collection->filter(
                fn (array $log): bool => str_contains(strtolower($log['relative_path']), $search)
                    || str_contains(strtolower($log['name']), $search)
            ))
            ->values()
            ->map(fn (array $log): array => array_merge($log, [
                'download_url' => route('admin.settings.logs.download', ['file' => $log['relative_path']]),
            ]))
            ->all();

        return Response::json([
            'data' => $logs,
            'meta' => [
                'total' => count($logs),
            ],
        ]);
    }

    public function schema(JsonSchema $schema): array
    {
        return [
            'search' => $schema->string()
                ->description('Optional filter by log file name or path.'),
        ];
    }
}
