<?php

declare(strict_types=1);

namespace App\Services;

use App\Helpers\FileHelper;
use Illuminate\Support\Facades\File;
use SplFileInfo;

class StorageLogService
{
    /**
     * @return list<array{relative_path: string, name: string, size: int, size_formatted: string, modified_at: string}>
     */
    public function listLogFiles(): array
    {
        $storageRoot = realpath(storage_path());

        if ($storageRoot === false || ! is_dir($storageRoot)) {
            return [];
        }

        $files = File::allFiles($storageRoot);
        $logFiles = [];

        foreach ($files as $file) {
            if (! $this->isLogFile($file)) {
                continue;
            }

            $relativePath = $this->relativePathFromStorage($file->getPathname(), $storageRoot);

            if ($relativePath === null) {
                continue;
            }

            $logFiles[] = [
                'relative_path' => $relativePath,
                'name' => $file->getFilename(),
                'size' => $file->getSize(),
                'size_formatted' => FileHelper::formatBytes($file->getSize()),
                'modified_at' => date('M d, Y H:i:s', $file->getMTime()),
            ];
        }

        usort($logFiles, fn (array $left, array $right): int => strcmp($left['relative_path'], $right['relative_path']));

        return $logFiles;
    }

    /**
     * Read the last N lines from a storage-relative log file.
     *
     * @return array{relative_path: string, lines: list<string>, line_count: int, truncated: bool}|null
     */
    public function getLogTail(string $relativePath, int $lines = 100): ?array
    {
        $absolutePath = $this->resolveLogFile($relativePath);

        if ($absolutePath === null) {
            return null;
        }

        $lines = max(1, min($lines, 1000));
        $content = @file($absolutePath, FILE_IGNORE_NEW_LINES);

        if ($content === false) {
            return null;
        }

        $totalLines = count($content);
        $truncated = $totalLines > $lines;
        $tailLines = $truncated ? array_slice($content, -$lines) : $content;

        return [
            'relative_path' => str_replace('\\', '/', trim(str_replace('\\', '/', $relativePath), '/')),
            'lines' => array_values($tailLines),
            'line_count' => count($tailLines),
            'truncated' => $truncated,
        ];
    }

    /**
     * Resolve a storage-relative log path to a canonical absolute file path.
     */
    public function resolveLogFile(string $relativePath): ?string
    {
        if (! $this->isSafeRelativeLogPath($relativePath)) {
            return null;
        }

        $storageRoot = realpath(storage_path());

        if ($storageRoot === false) {
            return null;
        }

        $candidatePath = $storageRoot.DIRECTORY_SEPARATOR.str_replace('/', DIRECTORY_SEPARATOR, $relativePath);

        return $this->resolvePathInsideStorageDirectory($candidatePath, $storageRoot);
    }

    protected function isLogFile(SplFileInfo $file): bool
    {
        if (! $file->isFile() || ! $file->isReadable()) {
            return false;
        }

        return str_ends_with(strtolower($file->getFilename()), '.log');
    }

    protected function relativePathFromStorage(string $absolutePath, string $storageRoot): ?string
    {
        $resolved = realpath($absolutePath);

        if ($resolved === false || ! $this->resolvedPathIsInsideDirectory($resolved, $storageRoot)) {
            return null;
        }

        $relativePath = ltrim(substr($resolved, strlen($storageRoot)), DIRECTORY_SEPARATOR);

        return str_replace(DIRECTORY_SEPARATOR, '/', $relativePath);
    }

    protected function isSafeRelativeLogPath(string $relativePath): bool
    {
        $relativePath = trim(str_replace('\\', '/', $relativePath));

        if ($relativePath === '' || str_starts_with($relativePath, '/')) {
            return false;
        }

        if (
            str_contains($relativePath, "\0")
            || str_contains($relativePath, ':')
            || str_contains($relativePath, '..')
        ) {
            return false;
        }

        return str_ends_with(strtolower($relativePath), '.log');
    }

    protected function resolvePathInsideStorageDirectory(string $candidatePath, string $storageRoot): ?string
    {
        $real = realpath($candidatePath);

        if ($real === false || ! is_file($real) || ! is_readable($real)) {
            return null;
        }

        return $this->resolvedPathIsInsideDirectory($real, $storageRoot) ? $real : null;
    }

    protected function resolvedPathIsInsideDirectory(string $resolvedPath, string $resolvedDirectory): bool
    {
        $directory = rtrim(str_replace(['/', '\\'], DIRECTORY_SEPARATOR, $resolvedDirectory), DIRECTORY_SEPARATOR);
        $path = str_replace(['/', '\\'], DIRECTORY_SEPARATOR, $resolvedPath);

        if ($path === $directory) {
            return false;
        }

        $prefix = $directory.DIRECTORY_SEPARATOR;

        if (PHP_OS_FAMILY === 'Windows') {
            return strncasecmp($path, $prefix, strlen($prefix)) === 0;
        }

        return str_starts_with($path, $prefix);
    }
}
