<div class="mt-6">
    <x-card>
        <x-slot name="header">
            <div class="flex items-center gap-2">
                <iconify-icon icon="lucide:file-text" width="20" height="20" class="text-gray-500" aria-hidden="true"></iconify-icon>
                {{ __('Logs') }}
            </div>
        </x-slot>

        <div class="space-y-4">
            <p class="text-sm text-gray-600 dark:text-gray-400">
                {{ __('Download Laravel and other log files from the storage directory.') }}
            </p>

            @if (count($logFiles) === 0)
                <div class="p-4 rounded-lg bg-gray-50 dark:bg-gray-800/50 border border-gray-200 dark:border-gray-700">
                    <div class="flex items-center gap-2 text-sm text-gray-600 dark:text-gray-400">
                        <iconify-icon icon="lucide:info" aria-hidden="true"></iconify-icon>
                        {{ __('No log files were found in storage.') }}
                    </div>
                </div>
            @else
                <div class="overflow-x-auto rounded-lg border border-gray-200 dark:border-gray-700">
                    <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                        <thead class="bg-gray-50 dark:bg-gray-800/50">
                            <tr>
                                <th scope="col" class="px-4 py-3 text-left text-xs font-medium uppercase tracking-wide text-gray-500 dark:text-gray-400">
                                    {{ __('File') }}
                                </th>
                                <th scope="col" class="px-4 py-3 text-left text-xs font-medium uppercase tracking-wide text-gray-500 dark:text-gray-400">
                                    {{ __('Size') }}
                                </th>
                                <th scope="col" class="px-4 py-3 text-left text-xs font-medium uppercase tracking-wide text-gray-500 dark:text-gray-400">
                                    {{ __('Last Modified') }}
                                </th>
                                <th scope="col" class="px-4 py-3 text-right text-xs font-medium uppercase tracking-wide text-gray-500 dark:text-gray-400">
                                    {{ __('Action') }}
                                </th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200 dark:divide-gray-700 bg-white dark:bg-gray-900">
                            @foreach ($logFiles as $logFile)
                                <tr>
                                    <td class="px-4 py-3 text-sm text-gray-900 dark:text-white">
                                        <div class="font-medium">{{ $logFile['name'] }}</div>
                                        <div class="text-xs text-gray-500 dark:text-gray-400">{{ $logFile['relative_path'] }}</div>
                                    </td>
                                    <td class="px-4 py-3 text-sm text-gray-600 dark:text-gray-400">
                                        {{ $logFile['size_formatted'] }}
                                    </td>
                                    <td class="px-4 py-3 text-sm text-gray-600 dark:text-gray-400">
                                        {{ $logFile['modified_at'] }}
                                    </td>
                                    <td class="px-4 py-3 text-right">
                                        @if (config('app.demo_mode', false))
                                            <span class="text-xs text-gray-500 dark:text-gray-400">
                                                {{ __('Disabled in demo mode') }}
                                            </span>
                                        @else
                                            <a
                                                href="{{ route('admin.settings.logs.download', ['file' => $logFile['relative_path']]) }}"
                                                class="btn btn-sm btn-secondary inline-flex items-center gap-1"
                                                aria-label="{{ __('Download :file', ['file' => $logFile['name']]) }}"
                                            >
                                                <iconify-icon icon="lucide:download" aria-hidden="true"></iconify-icon>
                                                {{ __('Download') }}
                                            </a>
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            @endif

            <div class="p-4 rounded-lg bg-amber-50 dark:bg-amber-900/20 border border-amber-200 dark:border-amber-800">
                <div class="flex items-start gap-2">
                    <iconify-icon icon="lucide:alert-triangle" class="text-amber-600 dark:text-amber-400 mt-0.5" aria-hidden="true"></iconify-icon>
                    <p class="text-sm text-amber-800 dark:text-amber-200">
                        {{ __('Log files may contain sensitive information such as stack traces, request data, and credentials. Handle downloaded files securely.') }}
                    </p>
                </div>
            </div>
        </div>
    </x-card>
</div>
