<?php

declare(strict_types=1);

use App\Services\StorageLogService;
use Illuminate\Support\Facades\File;

function storageLogServiceTestPath(string $relative): string
{
    return storage_path($relative);
}

function recordStorageLogTestPath(string $path): string
{
    $paths = test()->storageLogTestPaths ?? [];
    $paths[] = $path;
    test()->storageLogTestPaths = $paths;

    return $path;
}

beforeEach(function () {
    $this->storageLogTestPaths = [];
    File::ensureDirectoryExists(storage_path('logs'));
    $this->storageLogService = app(StorageLogService::class);
});

afterEach(function () {
    foreach ($this->storageLogTestPaths ?? [] as $path) {
        if (is_link($path) || File::exists($path)) {
            File::delete($path);
        }
    }
});

test('listLogFiles returns log files from storage', function () {
    $logPath = recordStorageLogTestPath(storageLogServiceTestPath('logs/test-list.log'));
    File::put($logPath, 'sample log content');

    $files = $this->storageLogService->listLogFiles();

    expect(collect($files)->pluck('relative_path'))->toContain('logs/test-list.log');
});

test('listLogFiles ignores non-log files', function () {
    $txtPath = recordStorageLogTestPath(storageLogServiceTestPath('logs/readme.txt'));
    File::put($txtPath, 'not a log');

    $files = $this->storageLogService->listLogFiles();

    expect(collect($files)->pluck('relative_path'))->not->toContain('logs/readme.txt');
});

test('resolveLogFile returns canonical path for valid log file', function () {
    $logPath = recordStorageLogTestPath(storageLogServiceTestPath('logs/test-resolve.log'));
    File::put($logPath, 'sample log content');

    $resolved = $this->storageLogService->resolveLogFile('logs/test-resolve.log');

    expect($resolved)->toBe(realpath($logPath));
});

test('resolveLogFile rejects path traversal attempts', function () {
    expect($this->storageLogService->resolveLogFile('../.env'))->toBeNull()
        ->and($this->storageLogService->resolveLogFile('logs/../../.env'))->toBeNull()
        ->and($this->storageLogService->resolveLogFile('/etc/passwd'))->toBeNull();
});

test('resolveLogFile rejects non-log extensions', function () {
    $txtPath = recordStorageLogTestPath(storageLogServiceTestPath('logs/not-a-log.txt'));
    File::put($txtPath, 'plain text');

    expect($this->storageLogService->resolveLogFile('logs/not-a-log.txt'))->toBeNull();
});

test('resolveLogFile rejects symlink escape attempts', function () {
    if (PHP_OS_FAMILY === 'Windows') {
        $this->markTestSkipped('Symlink traversal test is not portable on Windows.');
    }

    $outsideTarget = recordStorageLogTestPath(sys_get_temp_dir().'/ld-cwe22-outside.log');
    File::put($outsideTarget, 'outside storage tree');

    $linkPath = recordStorageLogTestPath(storageLogServiceTestPath('logs/evil-link.log'));
    if (File::exists($linkPath)) {
        File::delete($linkPath);
    }

    $created = @symlink($outsideTarget, $linkPath);
    if ($created === false) {
        test()->markTestSkipped('Symlinks are not supported in this environment.');
    }

    expect($this->storageLogService->resolveLogFile('logs/evil-link.log'))->toBeNull();
});
