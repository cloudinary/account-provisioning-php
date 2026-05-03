# EffectivePolicies

## Overview

### Available Operations

* [list](#list) - Get effective policies

## list

Retrieve all roles (along with their system permission policies) associated with principals, and all custom permission policies directly added to principals, all within a specified scope.

Optionally specify a principal to only include roles and policies associated with that principal.


### Example Usage

<!-- UsageSnippet language="php" operationID="getEffectivePolicies" method="get" path="/v2/accounts/{account_id}/permissions/policies/effective" example="EffectivePoliciesExample" -->
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

$request = new Operations\GetEffectivePoliciesRequest(
    scopeType: Components\ScopeTypeEnum::Prodenv,
    principalType: Components\PrincipalTypeEnum::User,
);

$response = $sdk->effectivePolicies->list(
    request: $request
);

if ($response->effectivePoliciesResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                        | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `$request`                                                                                       | [Operations\GetEffectivePoliciesRequest](../../Models/Operations/GetEffectivePoliciesRequest.md) | :heavy_check_mark:                                                                               | The request object to use for the request.                                                       |

### Response

**[?Operations\GetEffectivePoliciesResponse](../../Models/Operations/GetEffectivePoliciesResponse.md)**

### Errors

| Error Type                      | Status Code                     | Content Type                    |
| ------------------------------- | ------------------------------- | ------------------------------- |
| Errors\PermissionsErrorResponse | 400, 401, 403, 404              | application/json                |
| Errors\PermissionsErrorResponse | 500                             | application/json                |
| Errors\APIException             | 4XX, 5XX                        | \*/\*                           |