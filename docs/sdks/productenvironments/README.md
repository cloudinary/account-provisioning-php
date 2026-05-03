# ProductEnvironments

## Overview

### Available Operations

* [list](#list) - Get product environments
* [create](#create) - Create product environment
* [get](#get) - Get product environment
* [update](#update) - Update product environment
* [delete](#delete) - Delete product environment

## list

Return an array of all product environments, or if conditions are specified,
return the relevant product environments.


Learn more about getting product environments.
<https://cloudinary.com/documentation/provisioning_api#get_product_environments>

### Example Usage

<!-- UsageSnippet language="php" operationID="getProductEnvironments" method="get" path="/v1_1/provisioning/accounts/{account_id}/sub_accounts" example="ProductEnvironments" -->
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

### Parameters

| Parameter                                                                                            | Type                                                                                                 | Required                                                                                             | Description                                                                                          |
| ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- |
| `$request`                                                                                           | [Operations\GetProductEnvironmentsRequest](../../Models/Operations/GetProductEnvironmentsRequest.md) | :heavy_check_mark:                                                                                   | The request object to use for the request.                                                           |

### Response

**[?Operations\GetProductEnvironmentsResponse](../../Models/Operations/GetProductEnvironmentsResponse.md)**

### Errors

| Error Type                        | Status Code                       | Content Type                      |
| --------------------------------- | --------------------------------- | --------------------------------- |
| Errors\ErrorResponse              | 400, 401, 403, 404, 409, 420, 429 | application/json                  |
| Errors\APIException               | 4XX, 5XX                          | \*/\*                             |

## create

Create a new product environment. Any users that have access to all product environments will also automatically
have access to the new product environment.


Learn more about creating product environments.
<https://cloudinary.com/documentation/provisioning_api#create_product_environment>

### Example Usage

<!-- UsageSnippet language="php" operationID="createProductEnvironment" method="post" path="/v1_1/provisioning/accounts/{account_id}/sub_accounts" example="ProductEnvironment3" -->
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

$request = new Operations\CreateProductEnvironmentRequest(
    body: new Components\ProductEnvironmentRequest(
        name: 'Product3 Application',
        cloudName: 'product3',
        baseSubAccountId: '0aaaaa1bbbbb2ccccc3ddddd4eeeee5f',
    ),
);

$response = $sdk->productEnvironments->create(
    request: $request
);

if ($response->productEnvironment !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                | Type                                                                                                     | Required                                                                                                 | Description                                                                                              |
| -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                               | [Operations\CreateProductEnvironmentRequest](../../Models/Operations/CreateProductEnvironmentRequest.md) | :heavy_check_mark:                                                                                       | The request object to use for the request.                                                               |

### Response

**[?Operations\CreateProductEnvironmentResponse](../../Models/Operations/CreateProductEnvironmentResponse.md)**

### Errors

| Error Type                   | Status Code                  | Content Type                 |
| ---------------------------- | ---------------------------- | ---------------------------- |
| Errors\ErrorResponse         | 400, 401, 403, 409, 420, 429 | application/json             |
| Errors\APIException          | 4XX, 5XX                     | \*/\*                        |

## get

Retrieve a specific product environment.

Learn more about retrieving specific product environments.
<https://cloudinary.com/documentation/provisioning_api#get_product_environment>

### Example Usage: ProductEnvironment1

<!-- UsageSnippet language="php" operationID="getProductEnvironment" method="get" path="/v1_1/provisioning/accounts/{account_id}/sub_accounts/{sub_account_id}" example="ProductEnvironment1" -->
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

$request = new Operations\GetProductEnvironmentRequest(
    subAccountId: 'abcde1fghij2klmno3pqrst4uvwxy5z',
);

$response = $sdk->productEnvironments->get(
    request: $request
);

if ($response->productEnvironment !== null) {
    // handle response
}
```
### Example Usage: ProductEnvironment2

<!-- UsageSnippet language="php" operationID="getProductEnvironment" method="get" path="/v1_1/provisioning/accounts/{account_id}/sub_accounts/{sub_account_id}" example="ProductEnvironment2" -->
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

$request = new Operations\GetProductEnvironmentRequest(
    subAccountId: 'abcde1fghij2klmno3pqrst4uvwxy5z',
);

$response = $sdk->productEnvironments->get(
    request: $request
);

if ($response->productEnvironment !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                          | Type                                                                                               | Required                                                                                           | Description                                                                                        |
| -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- |
| `$request`                                                                                         | [Operations\GetProductEnvironmentRequest](../../Models/Operations/GetProductEnvironmentRequest.md) | :heavy_check_mark:                                                                                 | The request object to use for the request.                                                         |

### Response

**[?Operations\GetProductEnvironmentResponse](../../Models/Operations/GetProductEnvironmentResponse.md)**

### Errors

| Error Type              | Status Code             | Content Type            |
| ----------------------- | ----------------------- | ----------------------- |
| Errors\ErrorResponse    | 400, 401, 404, 420, 429 | application/json        |
| Errors\APIException     | 4XX, 5XX                | \*/\*                   |

## update

Update the details of a product environment.

Learn more about updating product environments.
<https://cloudinary.com/documentation/provisioning_api#update_product_environment>

### Example Usage

<!-- UsageSnippet language="php" operationID="updateProductEnvironment" method="put" path="/v1_1/provisioning/accounts/{account_id}/sub_accounts/{sub_account_id}" example="ProductEnvironment1" -->
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

$request = new Operations\UpdateProductEnvironmentRequest(
    subAccountId: 'abcde1fghij2klmno3pqrst4uvwxy5z',
    body: new Components\ProductEnvironmentUpdateRequest(
        name: 'Product3 Application',
        cloudName: 'product3',
    ),
);

$response = $sdk->productEnvironments->update(
    request: $request
);

if ($response->productEnvironment !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                | Type                                                                                                     | Required                                                                                                 | Description                                                                                              |
| -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                               | [Operations\UpdateProductEnvironmentRequest](../../Models/Operations/UpdateProductEnvironmentRequest.md) | :heavy_check_mark:                                                                                       | The request object to use for the request.                                                               |

### Response

**[?Operations\UpdateProductEnvironmentResponse](../../Models/Operations/UpdateProductEnvironmentResponse.md)**

### Errors

| Error Type                        | Status Code                       | Content Type                      |
| --------------------------------- | --------------------------------- | --------------------------------- |
| Errors\ErrorResponse              | 400, 401, 403, 404, 409, 420, 429 | application/json                  |
| Errors\APIException               | 4XX, 5XX                          | \*/\*                             |

## delete

Delete a specific product environment.

Learn more about deleting product environments.
<https://cloudinary.com/documentation/provisioning_api#delete_product_environment>

### Example Usage

<!-- UsageSnippet language="php" operationID="deleteProductEnvironment" method="delete" path="/v1_1/provisioning/accounts/{account_id}/sub_accounts/{sub_account_id}" -->
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

$request = new Operations\DeleteProductEnvironmentRequest(
    subAccountId: 'abcde1fghij2klmno3pqrst4uvwxy5z',
);

$response = $sdk->productEnvironments->delete(
    request: $request
);

if ($response->successResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                | Type                                                                                                     | Required                                                                                                 | Description                                                                                              |
| -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                               | [Operations\DeleteProductEnvironmentRequest](../../Models/Operations/DeleteProductEnvironmentRequest.md) | :heavy_check_mark:                                                                                       | The request object to use for the request.                                                               |

### Response

**[?Operations\DeleteProductEnvironmentResponse](../../Models/Operations/DeleteProductEnvironmentResponse.md)**

### Errors

| Error Type                   | Status Code                  | Content Type                 |
| ---------------------------- | ---------------------------- | ---------------------------- |
| Errors\ErrorResponse         | 400, 401, 403, 404, 420, 429 | application/json             |
| Errors\APIException          | 4XX, 5XX                     | \*/\*                        |