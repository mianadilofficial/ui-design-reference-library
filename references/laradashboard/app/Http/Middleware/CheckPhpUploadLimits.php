<?php

declare(strict_types=1);

namespace App\Http\Middleware;

use App\Support\Helper\MediaHelper;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckPhpUploadLimits
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Only check for POST requests that might be file uploads
        if ($request->isMethod('POST') && $request->hasHeader('Content-Type')) {
            $contentType = $request->header('Content-Type');

            // Check if this is a multipart/form-data request (file upload)
            if (str_contains($contentType, 'multipart/form-data')) {
                $phpError = MediaHelper::checkPhpUploadError();

                if ($phpError) {
                    // If it's an AJAX request, return JSON error
                    if ($request->expectsJson()) {
                        return response()->json([
                            'success' => false,
                            'message' => $phpError['message'],
                            'error_type' => 'php_upload_limit',
                            'uploaded_size' => $phpError['uploaded_size'],
                            'limit' => $phpError['limit'],
                            'limit_formatted' => $phpError['limit_formatted'],
                        ], 413); // 413 Payload Too Large
                    }

                    // For regular requests, redirect back with error
                    return redirect()->back()->withErrors([
                        'upload_error' => $phpError['message'],
                    ])->withInput();
                }
            }
        }

        return $next($request);
    }
}
