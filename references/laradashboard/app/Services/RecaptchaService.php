<?php

declare(strict_types=1);

namespace App\Services;

use App\Enums\Hooks\CommonFilterHook;
use App\Support\Facades\Hook;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class RecaptchaService
{
    /**
     * Legacy page keys that should be treated as equivalent.
     *
     * @var array<string, string>
     */
    private const PAGE_ALIASES = [
        'registration' => 'register',
        'register' => 'registration',
    ];

    private string $siteKey;
    private string $secretKey;
    private array $enabledPages;
    private float $scoreThreshold;

    public function __construct()
    {
        $this->siteKey = config('settings.recaptcha_site_key', '');
        $this->secretKey = config('settings.recaptcha_secret_key', '');
        $this->enabledPages = json_decode(config('settings.recaptcha_enabled_pages', '[]'), true) ?: [];
        $this->scoreThreshold = (float) config('settings.recaptcha_score_threshold', 0.5);
    }

    /**
     * Check if reCAPTCHA is enabled for a specific page
     */
    public function isEnabledForPage(string $page): bool
    {
        if (empty($this->siteKey) || empty($this->secretKey)) {
            return false;
        }

        $isEnabled = ! empty(array_intersect(
            $this->pageKeysToCheck($page),
            $this->enabledPages
        ));

        // Apply filter hook to allow modifications
        return Hook::applyFilters(CommonFilterHook::RECAPTCHA_IS_ENABLED_FOR_PAGE, $isEnabled, $page);
    }

    /**
     * Get the reCAPTCHA site key
     */
    public function getSiteKey(): string
    {
        return $this->siteKey;
    }

    /**
     * Verify reCAPTCHA v3 response.
     */
    public function verify(Request $request, string $action = 'general'): bool
    {
        $recaptchaResponse = $request->input('g-recaptcha-response');

        if (empty($recaptchaResponse)) {
            return false;
        }

        // Apply filter hook to allow custom verification logic
        $preVerificationResult = Hook::applyFilters(CommonFilterHook::RECAPTCHA_PRE_VERIFICATION, null, $request);
        if ($preVerificationResult !== null && $preVerificationResult !== '') {
            return (bool) $preVerificationResult;
        }

        try {
            $verifyUrl = Hook::applyFilters(CommonFilterHook::RECAPTCHA_VERIFY_URL, 'https://www.google.com/recaptcha/api/siteverify');

            $response = Http::timeout(10)->asForm()->post($verifyUrl, [
                'secret' => $this->secretKey,
                'response' => $recaptchaResponse,
                'remoteip' => $request->ip(),
            ]);

            $result = $response->json();
            $isValid = $result['success'] ?? false;

            // For v3, check the score and action.
            if ($isValid) {
                $score = $result['score'] ?? 0;
                $resultAction = $result['action'] ?? '';

                // Verify the action matches (allow legacy register/registration aliases).
                if (! in_array($resultAction, $this->pageKeysToCheck($action), true)) {
                    $isValid = false;
                }

                // Verify the score meets threshold.
                if ($score < $this->scoreThreshold) {
                    $isValid = false;
                }
            }

            // Apply filter hook to allow custom post-verification logic
            $filteredResult = Hook::applyFilters(CommonFilterHook::RECAPTCHA_POST_VERIFICATION, $isValid, $result);
            return (bool) $filteredResult;
        } catch (\Exception $e) {
            \Log::error('Recaptcha verification failed', [
                'exception' => $e,
                'ip' => $request->ip(),
                'action' => $action,
            ]);
            $exceptionResult = Hook::applyFilters(CommonFilterHook::RECAPTCHA_VERIFICATION_EXCEPTION, false, $e);
            return (bool) $exceptionResult;
        }
    }

    /**
     * Get reCAPTCHA v3 script tag
     */
    public function getScriptTag(): string
    {
        if (empty($this->siteKey)) {
            return '';
        }

        return sprintf(
            '<script src="https://www.google.com/recaptcha/api.js?render=%s"></script>',
            htmlspecialchars($this->siteKey)
        );
    }

    /**
     * Get the score threshold
     */
    public function getScoreThreshold(): float
    {
        return $this->scoreThreshold;
    }

    /**
     * Get available pages for reCAPTCHA
     */
    public static function getAvailablePages(): array
    {
        return Hook::applyFilters(CommonFilterHook::RECAPTCHA_AVAILABLE_PAGES, [
            'login' => __('Login'),
            'register' => __('Register'),
            'forgot_password' => __('Forgot Password'),
        ]);
    }

    /**
     * @return list<string>
     */
    private function pageKeysToCheck(string $page): array
    {
        $keys = [$page];

        if (isset(self::PAGE_ALIASES[$page])) {
            $keys[] = self::PAGE_ALIASES[$page];
        }

        return array_values(array_unique($keys));
    }
}
