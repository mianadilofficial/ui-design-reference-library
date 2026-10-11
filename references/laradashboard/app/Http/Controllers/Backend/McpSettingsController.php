<?php

declare(strict_types=1);

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Contracts\Support\Renderable;

class McpSettingsController extends Controller
{
    public function index(): Renderable
    {
        $this->authorize('manage', Setting::class);

        $this->setBreadcrumbTitle(__('MCP'))
            ->setBreadcrumbIcon('lucide:bot');

        return $this->renderViewWithBreadcrumbs('backend.pages.settings.mcp.index');
    }
}
