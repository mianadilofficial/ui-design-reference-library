<?php

declare(strict_types=1);

namespace App\Http\Middleware;

use App\Services\RecaptchaService;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class VerifyRecaptcha
{
    public function __construct(
        private readonly RecaptchaService $recaptchaService
    ) {
    }

    /**
     * Handle an incoming request.
     */
    public function handle(Request $request, Closure $next, string $page): Response
    {
        // Skip verification if reCAPTCHA is not enabled for this page
        if (! $this->recaptchaService->isEnabledForPage($page)) {
            return $next($request);
        }

        // Skip verification for GET requests
        if ($request->isMethod('GET')) {
            return $next($request);
        }

        // Skip verification in demo mode if configured
        if (config('app.demo_mode', false) && config('app.skip_recaptcha_in_demo', true)) {
            return $next($request);
        }

        // Verify reCAPTCHA with action based on page.
        if (! $this->recaptchaService->verify($request, $page)) {
            return back()->withErrors([
                'recaptcha' => __('reCAPTCHA verification failed. Please try again.'),
            ])->withInput();
        }

        return $next($request);
    }
}
