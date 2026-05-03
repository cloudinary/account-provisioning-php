# AccessKeys

## Overview

### Available Operations

* [list](#list) - Get access keys
* [generate](#generate) - Generate an access key
* [deleteByName](#deletebyname) - Delete access key by name
* [update](#update) - Update an access key
* [delete](#delete) - Delete access key

## list

Retrieve an array of all access keys for a product environment.

Learn more about retrieving access keys.
<https://cloudinary.com/documentation/provisioning_api#get_access_keys>

### Example Usage

<!-- UsageSnippet language="php" operationID="getAccessKeys" method="get" path="/v1_1/provisioning/accounts/{account_id}/sub_accounts/{sub_account_id}/access_keys" example="AccessKeys" -->
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

$request = new Operations\GetAccessKeysRequest(
    subAccountId: 'abcde1fghij2klmno3pqrst4uvwxy5z',
    sortBy: Operations\SortBy::CreatedAt,
    sortOrder: Operations\SortOrder::Asc,
);

$response = $sdk->accessKeys->list(
    request: $request
);

if ($response->accessKeysResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                          | Type                                                                               | Required                                                                           | Description                                                                        |
| ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- |
| `$request`                                                                         | [Operations\GetAccessKeysRequest](../../Models/Operations/GetAccessKeysRequest.md) | :heavy_check_mark:                                                                 | The request object to use for the request.                                         |

### Response

**[?Operations\GetAccessKeysResponse](../../Models/Operations/GetAccessKeysResponse.md)**

### Errors

| Error Type           | Status Code          | Content Type         |
| -------------------- | -------------------- | -------------------- |
| Errors\ErrorResponse | 401, 404, 420, 429   | application/json     |
| Errors\APIException  | 4XX, 5XX             | \*/\*                |

## generate

Generate a new access key.

Learn more about generating access keys.
<https://cloudinary.com/documentation/provisioning_api#generate_an_access_key>

### Example Usage

<!-- UsageSnippet language="php" operationID="generateAccessKey" method="post" path="/v1_1/provisioning/accounts/{account_id}/sub_accounts/{sub_account_id}/access_keys" example="MainAccessKey" -->
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

$request = new Operations\GenerateAccessKeyRequest(
    subAccountId: 'abcde1fghij2klmno3pqrst4uvwxy5z',
    body: new Components\AccessKeyRequest(
        name: 'main_key',
        enabled: true,
    ),
);

$response = $sdk->accessKeys->generate(
    request: $request
);

if ($response->accessKey !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\GenerateAccessKeyRequest](../../Models/Operations/GenerateAccessKeyRequest.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\GenerateAccessKeyResponse](../../Models/Operations/GenerateAccessKeyResponse.md)**

### Errors

| Error Type                        | Status Code                       | Content Type                      |
| --------------------------------- | --------------------------------- | --------------------------------- |
| Errors\ErrorResponse              | 400, 401, 403, 404, 409, 420, 429 | application/json                  |
| Errors\APIException               | 4XX, 5XX                          | \*/\*                             |

## deleteByName

Delete a specific access key by name.

Learn more about deleting access keys.
<https://cloudinary.com/documentation/provisioning_api#delete_an_access_key>

### Example Usage

<!-- UsageSnippet language="php" operationID="deleteAccessKeyByName" method="delete" path="/v1_1/provisioning/accounts/{account_id}/sub_accounts/{sub_account_id}/access_keys" -->
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

$request = new Operations\DeleteAccessKeyByNameRequest(
    subAccountId: 'abcde1fghij2klmno3pqrst4uvwxy5z',
    name: 'main_key',
);

$response = $sdk->accessKeys->deleteByName(
    request: $request
);

if ($response->successResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                          | Type                                                                                               | Required                                                                                           | Description                                                                                        |
| -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- |
| `$request`                                                                                         | [Operations\DeleteAccessKeyByNameRequest](../../Models/Operations/DeleteAccessKeyByNameRequest.md) | :heavy_check_mark:                                                                                 | The request object to use for the request.                                                         |

### Response

**[?Operations\DeleteAccessKeyByNameResponse](../../Models/Operations/DeleteAccessKeyByNameResponse.md)**

### Errors

| Error Type                   | Status Code                  | Content Type                 |
| ---------------------------- | ---------------------------- | ---------------------------- |
| Errors\ErrorResponse         | 400, 401, 403, 404, 420, 429 | application/json             |
| Errors\APIException          | 4XX, 5XX                     | \*/\*                        |

## update

Update the name and/or status of an existing access key.

Learn more about updating access keys.
<https://cloudinary.com/documentation/provisioning_api#update_an_access_key>

### Example Usage

<!-- UsageSnippet language="php" operationID="updateAccessKey" method="put" path="/v1_1/provisioning/accounts/{account_id}/sub_accounts/{sub_account_id}/access_keys/{key}" example="MainAccessKey" -->
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

$request = new Operations\UpdateAccessKeyRequest(
    subAccountId: 'abcde1fghij2klmno3pqrst4uvwxy5z',
    key: '814814814814814',
    body: new Components\AccessKeyUpdateRequest(
        name: 'main_key',
        enabled: true,
        dedicatedFor: Components\DedicatedFor::Webhooks,
    ),
);

$response = $sdk->accessKeys->update(
    request: $request
);

if ($response->accessKey !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                              | Type                                                                                   | Required                                                                               | Description                                                                            |
| -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- |
| `$request`                                                                             | [Operations\UpdateAccessKeyRequest](../../Models/Operations/UpdateAccessKeyRequest.md) | :heavy_check_mark:                                                                     | The request object to use for the request.                                             |

### Response

**[?Operations\UpdateAccessKeyResponse](../../Models/Operations/UpdateAccessKeyResponse.md)**

### Errors

| Error Type                        | Status Code                       | Content Type                      |
| --------------------------------- | --------------------------------- | --------------------------------- |
| Errors\ErrorResponse              | 400, 401, 403, 404, 409, 420, 429 | application/json                  |
| Errors\APIException               | 4XX, 5XX                          | \*/\*                             |

## delete

Delete a specific access key.

Learn more about deleting access keys.
<https://cloudinary.com/documentation/provisioning_api#delete_an_access_key>

### Example Usage

<!-- UsageSnippet language="php" operationID="deleteAccessKey" method="delete" path="/v1_1/provisioning/accounts/{account_id}/sub_accounts/{sub_account_id}/access_keys/{key}" -->
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

$request = new Operations\DeleteAccessKeyRequest(
    subAccountId: 'abcde1fghij2klmno3pqrst4uvwxy5z',
    key: '814814814814814',
);

$response = $sdk->accessKeys->delete(
    request: $request
);

if ($response->successResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                              | Type                                                                                   | Required                                                                               | Description                                                                            |
| -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- |
| `$request`                                                                             | [Operations\DeleteAccessKeyRequest](../../Models/Operations/DeleteAccessKeyRequest.md) | :heavy_check_mark:                                                                     | The request object to use for the request.                                             |

### Response

**[?Operations\DeleteAccessKeyResponse](../../Models/Operations/DeleteAccessKeyResponse.md)**

### Errors

| Error Type                   | Status Code                  | Content Type                 |
| ---------------------------- | ---------------------------- | ---------------------------- |
| Errors\ErrorResponse         | 400, 401, 403, 404, 420, 429 | application/json             |
| Errors\APIException          | 4XX, 5XX                     | \*/\*                        |