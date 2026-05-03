# Public

## Overview

View shared Permissions system utilities, including the system roles and policies catalog, Cedar policy validation, and the Cedar schema. These endpoints are publicly accessible and don't require authentication.


### Available Operations

* [getCatalog](#getcatalog) - Get system roles and policies catalog
* [validatePolicy](#validatepolicy) - Validate a Cedar policy
* [getSchema](#getschema) - Get Cedar schema

## getCatalog

Retrieves the catalog of predefined system roles and their associated policies.

### Example Usage

<!-- UsageSnippet language="php" operationID="getSystemRolesAndPoliciesCatalog" method="get" path="/v2/accounts/permissions/public/catalog" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Cloudinary\Account\Provisioning;
use Cloudinary\Account\Provisioning\Models\Components;

$sdk = Provisioning\CldProvisioning::builder()
    ->setSecurity(
        new Components\Security(
            provisioningApiKey: 'CLOUDINARY_PROVISIONING_API_KEY',
            provisioningApiSecret: 'CLOUDINARY_PROVISIONING_API_SECRET',
        )
    )
    ->build();



$response = $sdk->public->getCatalog(

);

if ($response->systemRolesAndPoliciesCatalogResponse !== null) {
    // handle response
}
```

### Response

**[?Operations\GetSystemRolesAndPoliciesCatalogResponse](../../Models/Operations/GetSystemRolesAndPoliciesCatalogResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\APIException | 4XX, 5XX            | \*/\*               |

## validatePolicy

Validate a Cedar policy

### Example Usage

<!-- UsageSnippet language="php" operationID="validateCedarPolicy" method="post" path="/v2/accounts/permissions/public/validate" example="ValidateCedarPolicyResponseExample" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Cloudinary\Account\Provisioning;
use Cloudinary\Account\Provisioning\Models\Components;

$sdk = Provisioning\CldProvisioning::builder()
    ->setSecurity(
        new Components\Security(
            provisioningApiKey: 'CLOUDINARY_PROVISIONING_API_KEY',
            provisioningApiSecret: 'CLOUDINARY_PROVISIONING_API_SECRET',
        )
    )
    ->build();

$request = new Components\ValidateCedarPolicyRequest(
    policy: 'permit(principal == Cloudinary::APIKy::"1234", action == Cloudinary::Action::"read", resource is Cloudinary::Folder ) when {resource.ancestor_ids.contains("asdfjkl12347890")} ;',
);

$response = $sdk->public->validatePolicy(
    request: $request
);

if ($response->validateCedarPolicyResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [Components\ValidateCedarPolicyRequest](../../Models/Components/ValidateCedarPolicyRequest.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |

### Response

**[?Operations\ValidateCedarPolicyResponse](../../Models/Operations/ValidateCedarPolicyResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\APIException | 4XX, 5XX            | \*/\*               |

## getSchema

Get Cedar schema

### Example Usage

<!-- UsageSnippet language="php" operationID="getCedarSchema" method="get" path="/v2/accounts/permissions/public/schema" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Cloudinary\Account\Provisioning;
use Cloudinary\Account\Provisioning\Models\Components;

$sdk = Provisioning\CldProvisioning::builder()
    ->setSecurity(
        new Components\Security(
            provisioningApiKey: 'CLOUDINARY_PROVISIONING_API_KEY',
            provisioningApiSecret: 'CLOUDINARY_PROVISIONING_API_SECRET',
        )
    )
    ->build();



$response = $sdk->public->getSchema(

);

if ($response->cedarSchemaResponse !== null) {
    // handle response
}
```

### Response

**[?Operations\GetCedarSchemaResponse](../../Models/Operations/GetCedarSchemaResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\APIException | 4XX, 5XX            | \*/\*               |