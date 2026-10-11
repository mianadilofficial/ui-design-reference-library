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

#[Name('get-log-tail')]
#[Description('Read the last N lines from a storage log file. Use list-logs first to discover available log paths.')]
#[McpToolMeta(ability: 'mcp:ops.logs.read', permission: 'settings.edit', group: 'Operations')]
class GetLogTailTool extends Tool
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

        $validated = $request->validate([
            'file' => ['required', 'string', 'max:512'],
            'lines' => ['nullable', 'integer', 'min:1', 'max:1000'],
        ]);

        $tail = $this->storageLogService->getLogTail(
            $validated['file'],
            (int) ($validated['lines'] ?? 100),
        );

        if ($tail === null) {
            return Response::error(__('Log file not found or not readable.'));
        }

        return Response::json([
            'file' => $tail['relative_path'],
            'lines' => $tail['lines'],
            'line_count' => $tail['line_count'],
            'truncated' => $tail['truncated'],
            'content' => implode("\n", $tail['lines']),
        ]);
    }

    public function schema(JsonSchema $schema): array
    {
        return [
            'file' => $schema->string()
                ->description('Storage-relative log path from list-logs (e.g. logs/laravel.log).')
                ->required(),
            'lines' => $schema->integer()
                ->description('Number of lines to read from the end of the file (max 1000).')
                ->default(100),
        ];
    }
}
