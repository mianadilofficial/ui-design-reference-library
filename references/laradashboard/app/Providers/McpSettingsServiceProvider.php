<?php

declare(strict_types=1);

namespace App\Providers;

use App\Enums\Hooks\McpFilterHook;
use App\Enums\Hooks\SettingFilterHook;
use App\Mcp\Briefing\Providers\CoreBriefingProvider;
use App\Services\Mcp\McpRegistryService;
use App\Support\Facades\Hook;
use Illuminate\Support\ServiceProvider;

class McpSettingsServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->app->singleton(McpRegistryService::class);
    }

    public function boot(): void
    {
        $this->registerBriefingProviders();
        $this->registerSettingsTab();
    }

    protected function registerBriefingProviders(): void
    {
        Hook::addFilter(McpFilterHook::BRIEFING_PROVIDERS, function (array $providers): array {
            $providers[] = CoreBriefingProvider::class;

            return $providers;
        });
    }

    protected function registerSettingsTab(): void
    {
        Hook::addFilter(SettingFilterHook::SETTINGS_TABS, function (array $tabs): array {
            $newTabs = [];

            foreach ($tabs as $key => $tab) {
                $newTabs[$key] = $tab;

                if ($key === 'integrations') {
                    $newTabs['mcp'] = [
                        'title' => __('MCP'),
                        'icon' => 'lucide:bot',
                        'route' => route('admin.settings.mcp.index'),
                    ];
                }
            }

            return $newTabs;
        }, 10);
    }
}
