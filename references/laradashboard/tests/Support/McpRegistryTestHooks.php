<?php

declare(strict_types=1);

namespace Tests\Support;

use Tests\Fixtures\Mcp\SampleModuleTool;

final class McpRegistryTestHooks
{
    /**
     * @param  array<int, class-string<\Laravel\Mcp\Server\Tool>>  $tools
     * @return array<int, class-string<\Laravel\Mcp\Server\Tool>>
     */
    public static function registerSampleTool(array $tools): array
    {
        $tools[] = SampleModuleTool::class;

        return $tools;
    }

    /**
     * @param  array<string, string>  $map
     * @return array<string, string>
     */
    public static function registerSampleAbility(array $map): array
    {
        $map['mcp:sample.read'] = 'sample.view';

        return $map;
    }
}
