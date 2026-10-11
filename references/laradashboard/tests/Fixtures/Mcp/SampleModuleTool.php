<?php

declare(strict_types=1);

namespace Tests\Fixtures\Mcp;

use Laravel\Mcp\Request;
use Laravel\Mcp\Response;
use Laravel\Mcp\Server\Attributes\Description;
use Laravel\Mcp\Server\Attributes\Name;
use Laravel\Mcp\Server\Tool;
use App\Mcp\Attributes\McpToolMeta;

#[Name('sample-module-tool')]
#[Description('Sample module MCP tool used in tests.')]
#[McpToolMeta(ability: 'mcp:sample.read', permission: 'sample.view', group: 'Sample Module')]
class SampleModuleTool extends Tool
{
    public function handle(Request $request): Response
    {
        return Response::json(['ok' => true]);
    }
}
