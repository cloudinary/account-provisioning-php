# SystemPolicies

## Overview

### Available Operations

* [list](#list) - Get system policies

## list

Retrieve all system-defined permission policies. Optionally filter the results by `scope_type` (account or product environment) and/or `permission_type` (global or content-specific).

**Note:** If `scope_type` isn't specified as `prodenv`, the account-level policies will be returned.


### Example Usage

<!-- UsageSnippet language="php" operationID="getSystemPolicies" method="get" path="/v2/accounts/{account_id}/permissions/policies/system" example="SystemPoliciesExample" -->
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

$request = new Operations\GetSystemPoliciesRequest(
    permissionType: Components\PermissionTypeEnum::Global,
    scopeType: Components\ScopeTypeEnum::Prodenv,
);

$response = $sdk->systemPolicies->list(
    request: $request
);

if ($response->systemPoliciesResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\GetSystemPoliciesRequest](../../Models/Operations/GetSystemPoliciesRequest.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\GetSystemPoliciesResponse](../../Models/Operations/GetSystemPoliciesResponse.md)**

### Errors

| Error Type                      | Status Code                     | Content Type                    |
| ------------------------------- | ------------------------------- | ------------------------------- |
| Errors\PermissionsErrorResponse | 401, 403                        | application/json                |
| Errors\PermissionsErrorResponse | 500                             | application/json                |
| Errors\APIException             | 4XX, 5XX                        | \*/\*                           |