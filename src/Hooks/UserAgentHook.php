<?php

declare(strict_types=1);

namespace Cloudinary\Account\Provisioning\Hooks;

use Cloudinary\Account\Provisioning\SDKConfiguration;

final class UserAgentHook implements SDKInitHook
{
    public function sdkInit(SDKConfiguration $config): SDKConfiguration
    {
        $original = $config->userAgent;
        if (str_starts_with($original, 'speakeasy-sdk/')) {
            $parts = explode(' ', $original);
            if (count($parts) >= 5) {
                $sdkVersion = $parts[1];
                $genVersion = $parts[2];
                $schemaVersion = $parts[3];
                $packageName = $parts[4];

                $config->userAgent = self::buildUserAgent($sdkVersion, $genVersion, $schemaVersion, $packageName);
            }
        }

        return $config;
    }

    private static function buildUserAgent(
        string $sdkVersion,
        string $genVersion,
        string $schemaVersion,
        string $packageName,
    ): string {
        $productName = self::getProductName($packageName);
        $systemInfo = self::getSystemInfo();

        return "Cloudinary/{$productName} PHP/{$sdkVersion} Gen/{$genVersion} Schema/{$schemaVersion} ({$systemInfo})";
    }

    private static function getProductName(string $packageName): string
    {
        if (preg_match('/cloudinary[\/\-_](.+)/', $packageName, $matches)) {
            $words = preg_split('/[\-_]/', $matches[1]);
            if ($words !== false) {
                return implode('', array_map('ucfirst', $words));
            }
        }

        return 'Unknown';
    }

    private static function getSystemInfo(): string
    {
        $phpVersion = PHP_MAJOR_VERSION.'.'.PHP_MINOR_VERSION.'.'.PHP_RELEASE_VERSION;
        $os = PHP_OS;
        $arch = php_uname('m');

        return "PHP {$phpVersion}; {$os} {$arch}";
    }
}
