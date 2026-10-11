<?php

declare(strict_types=1);

namespace App\Http\Middleware;

use App\Services\Mcp\McpTokenService;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AuthenticateMcpAgent
{
    public function __construct(
        protected McpTokenService $mcpTokenService
    ) {
    }

    public function handle(Request $request, Closure $next): Response
    {
        $user = $request->user();

        if ($user === null) {
            abort(401, __('MCP authentication required.'));
        }

        $token = $user->currentAccessToken();

        if (! $this->mcpTokenService->isMcpToken($token)) {
            abort(403, __('A LaraDashboard MCP agent token is required.'));
        }

        if ($token !== null && ! $token->can('mcp:access')) {
            abort(403, __('This token is not authorized for MCP access.'));
        }

        return $next($request);
    }
}
