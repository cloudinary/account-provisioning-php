<?php

declare(strict_types=1);

namespace Cloudinary\Account\Provisioning\Hooks;

final class AccountConfig
{
    private string $accountId = '';
    private string $provisioningApiKey = '';
    private string $provisioningApiSecret = '';

    public function __construct()
    {
        $url = getenv('CLOUDINARY_ACCOUNT_URL');
        if ($url !== false && $url !== '') {
            $this->loadFromUrl($url);
        } else {
            $this->loadFromEnvVariables();
        }
    }

    private function loadFromUrl(string $rawUrl): void
    {
        $parsed = parse_url($rawUrl);
        if ($parsed === false || ($parsed['scheme'] ?? '') !== 'account') {
            throw new \InvalidArgumentException(
                "Invalid CLOUDINARY_ACCOUNT_URL scheme, expecting 'account://'"
            );
        }

        $this->accountId = $parsed['host'] ?? '';
        $this->provisioningApiKey = $parsed['user'] ?? '';
        $this->provisioningApiSecret = $parsed['pass'] ?? '';
    }

    private function loadFromEnvVariables(): void
    {
        $val = getenv('CLOUDINARY_ACCOUNT_ID');
        if ($val !== false) {
            $this->accountId = $val;
        }
        $val = getenv('CLOUDINARY_PROVISIONING_API_KEY');
        if ($val !== false) {
            $this->provisioningApiKey = $val;
        }
        $val = getenv('CLOUDINARY_PROVISIONING_API_SECRET');
        if ($val !== false) {
            $this->provisioningApiSecret = $val;
        }
    }

    public function accountId(): string
    {
        return $this->accountId;
    }

    public function provisioningApiKey(): string
    {
        return $this->provisioningApiKey;
    }

    public function provisioningApiSecret(): string
    {
        return $this->provisioningApiSecret;
    }
}
