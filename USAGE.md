<!-- Start SDK Example Usage [usage] -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Cloudinary\Account\Provisioning;
use Cloudinary\Account\Provisioning\Models\Components;
use Cloudinary\Account\Provisioning\Models\Operations;

$sdk = Provisioning\CldProvisioning::builder()
    ->setAccountId('<id>')
    ->setSecurity(
        new Components\Security(
            provisioningApiKey: 'CLOUDINARY_PROVISIONING_API_KEY',
            provisioningApiSecret: 'CLOUDINARY_PROVISIONING_API_SECRET',
        )
    )
    ->build();

$request = new Operations\GetProductEnvironmentsRequest(
    enabled: true,
    prefix: 'product',
);

$response = $sdk->productEnvironments->list(
    request: $request
);

if ($response->productEnvironmentsResponse !== null) {
    // handle response
}
```
<!-- End SDK Example Usage [usage] -->