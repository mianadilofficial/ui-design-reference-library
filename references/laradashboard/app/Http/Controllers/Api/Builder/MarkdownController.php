<?php

declare(strict_types=1);

namespace App\Http\Controllers\Api\Builder;

use App\Http\Controllers\Controller;
use App\Http\Requests\Builder\MarkdownConvertRequest;
use App\Http\Requests\Builder\MarkdownConvertUrlRequest;
use App\Http\Requests\Builder\MarkdownFetchRequest;
use App\Services\Builder\MarkdownFetchService;
use Illuminate\Http\JsonResponse;

class MarkdownController extends Controller
{
    public function __construct(
        private readonly MarkdownFetchService $markdownService
    ) {
    }

    /**
     * Fetch markdown from URL and return HTML.
     */
    public function fetch(MarkdownFetchRequest $request): JsonResponse
    {
        $url = $request->validated('url');
        $refresh = $request->boolean('refresh', false);

        // Clear cache if refresh requested
        if ($refresh) {
            $this->markdownService->clearCache($url);
        }

        $result = $this->markdownService->fetchAndConvert($url, useCache: ! $refresh);

        if (! $result['success']) {
            return response()->json([
                'success' => false,
                'error' => $result['error'],
            ], 422);
        }

        return response()->json([
            'success' => true,
            'html' => $result['html'],
            'markdown' => $result['markdown'] ?? '',
            'cached' => $result['cached'] ?? false,
            'source_url' => $result['source_url'] ?? $url,
        ]);
    }

    /**
     * Convert markdown content to HTML.
     */
    public function convert(MarkdownConvertRequest $request): JsonResponse
    {
        $content = $request->validated('content');
        $result = $this->markdownService->convertMarkdown($content);

        if (! $result['success']) {
            return response()->json([
                'success' => false,
                'error' => $result['error'],
            ], 422);
        }

        return response()->json([
            'success' => true,
            'html' => $result['html'],
        ]);
    }

    /**
     * Convert a repository URL to raw content URL (for preview).
     */
    public function convertUrl(MarkdownConvertUrlRequest $request): JsonResponse
    {
        $url = $request->validated('url');
        $rawUrl = $this->markdownService->toRawUrl($url);
        $isSupported = $this->markdownService->isSupportedSource($url);

        return response()->json([
            'success' => true,
            'original_url' => $url,
            'raw_url' => $rawUrl,
            'is_supported' => $isSupported,
        ]);
    }
}
