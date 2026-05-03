<?php

declare(strict_types=1);

namespace Cloudinary\Account\Provisioning\Hooks;

use Cloudinary\Account\Provisioning\Models\Components\Security;
use Cloudinary\Account\Provisioning\SDKConfiguration;
use Psr\Http\Message\RequestInterface;

final class CloudinaryAccountHook implements SDKInitHook, BeforeRequestHook
{
    private AccountConfig $config;

    public function __construct(AccountConfig $config)
    {
        $this->config = $config;
    }

    public function sdkInit(SDKConfiguration $sdkConfig): SDKConfiguration
    {
        if ($this->config->accountId() !== '') {
            $params = $sdkConfig->globals['parameters'] ?? [];
            $pathParams = $params['pathParam'] ?? [];
            if (empty($pathParams['accountId'])) {
                $sdkConfig->globals['parameters']['pathParam']['accountId'] = $this->config->accountId();
            }
        }

        return $sdkConfig;
    }

    public function beforeRequest(BeforeRequestContext $context, RequestInterface $request): RequestInterface
    {
        $key = $this->config->provisioningApiKey();
        $secret = $this->config->provisioningApiSecret();

        $securitySource = $context->securitySource;
        if ($securitySource instanceof \Closure) {
            $security = $securitySource();
            if ($security instanceof Security) {
                if ($security->provisioningApiKey !== '') {
                    $key = $security->provisioningApiKey;
                }
                if ($security->provisioningApiSecret !== '') {
                    $secret = $security->provisioningApiSecret;
                }
            }
        }

        if ($key === '' || $secret === '') {
            throw new \RuntimeException('Provisioning API key and secret are required');
        }

        $encoded = base64_encode("{$key}:{$secret}");

        return $request->withHeader('Authorization', "Basic {$encoded}");
    }
}
