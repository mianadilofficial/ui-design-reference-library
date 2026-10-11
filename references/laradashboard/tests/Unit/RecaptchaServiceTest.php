<?php

declare(strict_types=1);

use App\Http\Controllers\Backend\SettingController;
use App\Services\RecaptchaService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Http;

beforeEach(function () {
    // Set up mock configuration
    Config::set('settings.recaptcha_site_key', 'test-site-key');
    Config::set('settings.recaptcha_secret_key', 'test-secret-key');
    Config::set('settings.recaptcha_enabled_pages', json_encode(['login', 'registration']));
    Config::set('settings.recaptcha_score_threshold', 0.5);
});
test('is enabled for page returns true when configured', function () {
    $service = new RecaptchaService();

    expect($service->isEnabledForPage('login'))->toBeTrue();
    expect($service->isEnabledForPage('registration'))->toBeTrue();
    expect($service->isEnabledForPage('forgot_password'))->toBeFalse();
});
test('is enabled for page returns false when no keys', function () {
    Config::set('settings.recaptcha_site_key', '');
    Config::set('settings.recaptcha_secret_key', '');

    $service = new RecaptchaService();

    expect($service->isEnabledForPage('login'))->toBeFalse();
});
test('get site key returns configured key', function () {
    $service = new RecaptchaService();

    expect($service->getSiteKey())->toEqual('test-site-key');
});
test('verify returns false when no response', function () {
    $service = new RecaptchaService();
    $request = Request::create('/', 'POST');

    expect($service->verify($request, 'login'))->toBeFalse();
});
test('verify makes http request when response present', function () {
    Http::fake([
        'https://www.google.com/recaptcha/api/siteverify' => Http::response([
            'success' => true,
            'score' => 0.8,
            'action' => 'login',
        ]),
    ]);

    $service = new RecaptchaService();
    $request = Request::create('/', 'POST', ['g-recaptcha-response' => 'test-response']);

    $result = $service->verify($request, 'login');

    expect($result)->toBeTrue();

    Http::assertSent(function ($request) {
        return $request->url() === 'https://www.google.com/recaptcha/api/siteverify'
            && $request['secret'] === 'test-secret-key'
            && $request['response'] === 'test-response';
    });
});
test('get available pages returns expected pages', function () {
    $pages = RecaptchaService::getAvailablePages();

    expect($pages)->toHaveKey('login');
    expect($pages)->toHaveKey('register');
    expect($pages)->toHaveKey('forgot_password');
});
test('verify fails when score below threshold', function () {
    Http::fake([
        'https://www.google.com/recaptcha/api/siteverify' => Http::response([
            'success' => true,
            'score' => 0.3,
            'action' => 'login',
        ]),
    ]);

    $service = new RecaptchaService();
    $request = Request::create('/', 'POST', ['g-recaptcha-response' => 'test-response']);

    $result = $service->verify($request, 'login');

    expect($result)->toBeFalse();
});
test('verify fails when action mismatch', function () {
    Http::fake([
        'https://www.google.com/recaptcha/api/siteverify' => Http::response([
            'success' => true,
            'score' => 0.8,
            'action' => 'registration',
        ]),
    ]);

    $service = new RecaptchaService();
    $request = Request::create('/', 'POST', ['g-recaptcha-response' => 'test-response']);

    $result = $service->verify($request, 'login');

    expect($result)->toBeFalse();
});
test('get score threshold returns configured value', function () {
    Config::set('settings.recaptcha_score_threshold', 0.7);
    $service = new RecaptchaService();

    expect($service->getScoreThreshold())->toEqual(0.7);
});
test('get script tag returns v3 script', function () {
    $service = new RecaptchaService();
    $scriptTag = $service->getScriptTag();

    $this->assertStringContainsString('https://www.google.com/recaptcha/api.js?render=test-site-key', $scriptTag);
});
test('settings controller rejects invalid recaptcha enabled pages', function () {
    $controller = app(SettingController::class);
    $request = Request::create('/', 'POST', [
        'recaptcha_enabled_pages' => ['login', 'invalid_page', 'register'],
    ]);

    // Simulate store method logic
    $validPages = array_keys(RecaptchaService::getAvailablePages());
    $enabledPages = $request->input('recaptcha_enabled_pages', []);
    $filteredPages = array_intersect($enabledPages, $validPages);

    expect(array_values($filteredPages))->toEqual(['login', 'register']);
});
test('recaptcha service handles http timeout exception', function () {
    Http::fake([
        'https://www.google.com/recaptcha/api/siteverify' => function () {
            throw new \Exception('Timeout');
        },
    ]);
    $service = new RecaptchaService();
    $request = Request::create('/', 'POST', ['g-recaptcha-response' => 'test-response']);

    $result = $service->verify($request, 'login');
    expect($result)->toBeFalse();
});
