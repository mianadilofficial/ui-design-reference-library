<?php

declare(strict_types=1);

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use App\Services\StorageLogService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\BinaryFileResponse;

class StorageLogController extends Controller
{
    public function __construct(
        private readonly StorageLogService $storageLogService,
    ) {
    }

    public function download(Request $request): BinaryFileResponse|RedirectResponse
    {
        $this->authorize('manage', Setting::class);

        if (config('app.demo_mode', false)) {
            return back()->with('error', __('Downloading log files is restricted in demo mode.'));
        }

        $validated = $request->validate([
            'file' => ['required', 'string', 'max:255'],
        ]);

        $logPath = $this->storageLogService->resolveLogFile($validated['file']);

        if ($logPath === null) {
            return back()->with('error', __('Log file not found.'));
        }

        return response()->download($logPath, basename($logPath));
    }
}
