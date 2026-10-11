<?php

declare(strict_types=1);

use App\Support\Security\SafeUrlValidator;

describe('SafeUrlValidator', function () {
    beforeEach(function () {
        $this->validator = new SafeUrlValidator();
    });

    test('allows trusted git hosting domains', function () {
        expect($this->validator->validateFetchUrl('https://raw.githubusercontent.com/user/repo/main/README.md'))->toBeNull();
        expect($this->validator->validateFetchUrl('https://github.com/user/repo/blob/main/README.md'))->toBeNull();
    });

    test('blocks loopback addresses', function () {
        expect($this->validator->validateFetchUrl('http://127.0.0.1/secret.txt'))->toBe('URL host is not allowed');
    });

    test('blocks cloud metadata hostnames', function () {
        expect($this->validator->validateFetchUrl('http://169.254.169.254/latest/meta-data/'))->toBe('URL host is not allowed');
    });

    test('blocks unsupported external hosts', function () {
        expect($this->validator->validateFetchUrl('https://example.com/readme.md'))->toBe('URL host is not allowed');
    });

    test('blocks non-http schemes', function () {
        expect($this->validator->validateFetchUrl('file:///etc/passwd'))->toBe('Only HTTP and HTTPS URLs are allowed');
    });
});
