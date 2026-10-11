<?php

declare(strict_types=1);

namespace App\Support\Security;

class SafeUrlValidator
{
    /**
     * Hosts permitted for server-side markdown fetches.
     *
     * @var list<string>
     */
    public const ALLOWED_HOSTS = [
        'github.com',
        'raw.githubusercontent.com',
        'gitlab.com',
        'bitbucket.org',
        'gist.github.com',
        'gist.githubusercontent.com',
    ];

    /**
     * @var list<string>
     */
    private const BLOCKED_HOSTNAMES = [
        'localhost',
        'metadata.google.internal',
        'metadata.goog',
    ];

    /**
     * Validate a URL before issuing a server-side fetch.
     *
     * @return string|null Error message when invalid, null when safe.
     */
    public function validateFetchUrl(string $url): ?string
    {
        if (! filter_var($url, FILTER_VALIDATE_URL)) {
            return 'Invalid URL format';
        }

        $parts = parse_url($url);

        if ($parts === false) {
            return 'Invalid URL format';
        }

        $scheme = strtolower((string) ($parts['scheme'] ?? ''));

        if (! in_array($scheme, ['http', 'https'], true)) {
            return 'Only HTTP and HTTPS URLs are allowed';
        }

        $host = strtolower((string) ($parts['host'] ?? ''));

        if ($host === '') {
            return 'Invalid URL host';
        }

        if (in_array($host, self::BLOCKED_HOSTNAMES, true)) {
            return 'URL host is not allowed';
        }

        if (! $this->isAllowedHost($host)) {
            return 'URL host is not allowed';
        }

        if ($this->hostResolvesToBlockedAddress($host)) {
            return 'URL resolves to a restricted address';
        }

        return null;
    }

    public function isAllowedHost(string $host): bool
    {
        $host = strtolower($host);

        foreach (self::ALLOWED_HOSTS as $allowedHost) {
            if ($host === $allowedHost || str_ends_with($host, '.'.$allowedHost)) {
                return true;
            }
        }

        return false;
    }

    private function hostResolvesToBlockedAddress(string $host): bool
    {
        if (filter_var($host, FILTER_VALIDATE_IP)) {
            return $this->isBlockedIp($host);
        }

        $records = @dns_get_record($host, DNS_A + DNS_AAAA);

        if ($records === false || $records === []) {
            return true;
        }

        foreach ($records as $record) {
            $ip = $record['ip'] ?? $record['ipv6'] ?? null;

            if (is_string($ip) && $this->isBlockedIp($ip)) {
                return true;
            }
        }

        return false;
    }

    private function isBlockedIp(string $ip): bool
    {
        if (filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_IPV4)) {
            return filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_NO_PRIV_RANGE | FILTER_FLAG_NO_RES_RANGE) === false;
        }

        if (filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_IPV6)) {
            $normalized = strtolower($ip);

            if ($normalized === '::1') {
                return true;
            }

            if (str_starts_with($normalized, 'fe80:')) {
                return true;
            }

            if (str_starts_with($normalized, 'fc') || str_starts_with($normalized, 'fd')) {
                return true;
            }

            return filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_NO_PRIV_RANGE | FILTER_FLAG_NO_RES_RANGE) === false;
        }

        return true;
    }
}
