<?php

declare(strict_types=1);

namespace App\View\Components\Settings;

use App\Services\StorageLogService;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class LogsSection extends Component
{
    /**
     * @var list<array{relative_path: string, name: string, size: int, size_formatted: string, modified_at: string}>
     */
    public array $logFiles;

    public function __construct(
        StorageLogService $storageLogService,
    ) {
        $this->logFiles = $storageLogService->listLogFiles();
    }

    public function render(): View
    {
        return view('components.settings.logs-section');
    }
}
