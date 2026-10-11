<?php

declare(strict_types=1);

namespace App\Enums\Hooks;

/**
 * MCP Filter Hooks
 *
 * Modules extend LaraDashboard MCP by registering tool classes and ability mappings.
 *
 * @example Register a module MCP tool
 * Hook::addFilter(McpFilterHook::TOOLS, function (array $tools): array {
 *     $tools[] = \Modules\Crm\Mcp\Tools\ListContactsTool::class;
 *     return $tools;
 * });
 *
 * @example Map a permission to an MCP token ability
 * Hook::addFilter(McpFilterHook::ABILITY_PERMISSION_MAP, function (array $map): array {
 *     $map['mcp:crm.read'] = 'crm.contact.view';
 *     $map['mcp:crm.write'] = 'crm.contact.create';
 *     return $map;
 * });
 */
enum McpFilterHook: string
{
    /**
     * Filter registered MCP tool classes.
     *
     * @param array<int, class-string<\Laravel\Mcp\Server\Tool>> $tools
     * @return array<int, class-string<\Laravel\Mcp\Server\Tool>>
     */
    case TOOLS = 'filter.mcp.tools';

    /**
     * Filter resolved MCP tool definitions shown in Settings > MCP.
     *
     * @param array<int, array<string, mixed>> $definitions
     * @return array<int, array<string, mixed>>
     */
    case TOOL_DEFINITIONS = 'filter.mcp.tool_definitions';

    /**
     * Filter permission-to-ability mappings used when generating MCP tokens.
     *
     * @param array<string, string> $map ability => permission
     * @return array<string, string>
     */
    case ABILITY_PERMISSION_MAP = 'filter.mcp.ability_permission_map';

    /**
     * Filter final MCP token abilities for a user.
     *
     * @param array<int, string> $abilities
     * @return array<int, string>
     */
    case TOKEN_ABILITIES = 'filter.mcp.token_abilities';

    /**
     * Filter daily briefing provider classes for the get-daily-briefing MCP tool.
     *
     * @param array<int, class-string<\App\Mcp\Briefing\BriefingProviderInterface>> $providers
     * @return array<int, class-string<\App\Mcp\Briefing\BriefingProviderInterface>>
     */
    case BRIEFING_PROVIDERS = 'filter.mcp.briefing_providers';
}
