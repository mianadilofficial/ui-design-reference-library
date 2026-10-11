<?php

declare(strict_types=1);

namespace App\Services;

use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;

class ImageService
{
    public function getSvgIcon(string $name, string $classes = '', string $fallback = ''): string
    {
        // if name includes .svg, remove it
        $name = Str::replaceLast('.svg', '', $name);

        $path = public_path("images/icons/{$name}.svg");

        if (file_exists($path)) {
            $svg = file_get_contents($path);

            return Str::replaceFirst(
                '<svg',
                '<svg class="' . e($classes) . '"',
                $svg
            );
        }

        // Fallback: Iconify icon
        if ($fallback) {
            return '<iconify-icon icon="lucide:' . e($fallback) . '" class="' . e($classes) . '"></iconify-icon>';
        }

        // If no SVG and no fallback.
        return '';
    }

    public function storeImageAndGetUrl($input, string $fileKey, string $path): ?string
    {
        $file = null;

        if ($input instanceof \Illuminate\Http\Request && $input->hasFile($fileKey)) {
            $file = $input->file($fileKey);
        } elseif (is_array($input) && isset($input[$fileKey]) && $input[$fileKey] instanceof \Illuminate\Http\UploadedFile) {
            $file = $input[$fileKey];
        }

        if ($file) {
            $fileName = uniqid($fileKey . '_') . '.' . $file->getClientOriginalExtension();
            $targetPath = public_path($path);

            if (! file_exists($targetPath)) {
                mkdir($targetPath, 0777, true);
            }

            $file->move($targetPath, $fileName);

            return asset($path . '/' . $fileName);
        }

        return null;
    }

    public function deleteImageFromPublic(string $imageUrl)
    {
        $urlParts = parse_url($imageUrl);
        $filePath = ltrim($urlParts['path'], '/');

        if (! File::exists(public_path($filePath))) {
            Log::warning('File does not exist: ' . $filePath);
            return false;
        }

        try {
            $fileDeleted = File::delete(public_path($filePath));
            if (! $fileDeleted) {
                Log::error('Failed to delete file: ' . $filePath);
            }

            return $fileDeleted;
        } catch (\Throwable $th) {
            Log::error('Error deleting file: ' . $filePath . ' - ' . $th->getMessage());
            return false;
        }
    }
}
