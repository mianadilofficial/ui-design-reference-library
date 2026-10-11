<?php

declare(strict_types=1);

namespace App\Http\Middleware;

use App\Services\Mcp\McpSettingsService;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class EnsureMcpEnabled
{
    public function __construct(
        protected McpSettingsService $mcpSettings
    ) {
    }

    public function handle(Request $request, Closure $next): Response
    {
        if (! $this->mcpSettings->isEnabled()) {
            abort(404);
        }

        return $next($request);
    }
}
