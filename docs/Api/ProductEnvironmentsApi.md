# Cloudinary\Provisioning\ProductEnvironmentsApi

All URIs are relative to https://api.cloudinary.com/v1_1/provisioning/accounts/ACCOUNT_ID, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createProductEnvironment()**](ProductEnvironmentsApi.md#createProductEnvironment) | **POST** /sub_accounts | Create product environment |
| [**deleteProductEnvironment()**](ProductEnvironmentsApi.md#deleteProductEnvironment) | **DELETE** /sub_accounts/{sub_account_id} | Delete product environment |
| [**getProductEnvironment()**](ProductEnvironmentsApi.md#getProductEnvironment) | **GET** /sub_accounts/{sub_account_id} | Get product environment |
| [**getProductEnvironments()**](ProductEnvironmentsApi.md#getProductEnvironments) | **GET** /sub_accounts | Get product environments |
| [**updateProductEnvironment()**](ProductEnvironmentsApi.md#updateProductEnvironment) | **PUT** /sub_accounts/{sub_account_id} | Update product environment |


## `createProductEnvironment()`

```php
createProductEnvironment($productEnvironmentRequest): \Cloudinary\Provisioning\Model\ProductEnvironment
```

Create product environment

Create a new product environment. Any users that have access to all product environments will also automatically have access to the new product environment.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Cloudinary\Provisioning\Api\ProductEnvironmentsApi();

$productEnvironmentRequest = new \Cloudinary\Provisioning\Model\ProductEnvironmentRequest(); // \Cloudinary\Provisioning\Model\ProductEnvironmentRequest | Product environment details

try {
    $result = $apiInstance->createProductEnvironment($productEnvironmentRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductEnvironmentsApi->createProductEnvironment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **productEnvironmentRequest** | [**\Cloudinary\Provisioning\Model\ProductEnvironmentRequest**](../Model/ProductEnvironmentRequest.md)| Product environment details | |

### Return type

[**\Cloudinary\Provisioning\Model\ProductEnvironment**](../Model/ProductEnvironment.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#)
[[Back to API list]](../../README.md#api-endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteProductEnvironment()`

```php
deleteProductEnvironment($subAccountId): \Cloudinary\Provisioning\Model\SuccessResponse
```

Delete product environment

Delete a specific product environment.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Cloudinary\Provisioning\Api\ProductEnvironmentsApi();

$subAccountId = "abcde1fghij2klmno3pqrst4uvwxy5z"; // string | The ID of the product environment.

try {
    $result = $apiInstance->deleteProductEnvironment($subAccountId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductEnvironmentsApi->deleteProductEnvironment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **subAccountId** | **string**| The ID of the product environment. | |

### Return type

[**\Cloudinary\Provisioning\Model\SuccessResponse**](../Model/SuccessResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#)
[[Back to API list]](../../README.md#api-endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getProductEnvironment()`

```php
getProductEnvironment($subAccountId): \Cloudinary\Provisioning\Model\ProductEnvironment
```

Get product environment

Retrieve a specific product environment.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Cloudinary\Provisioning\Api\ProductEnvironmentsApi();

$subAccountId = "abcde1fghij2klmno3pqrst4uvwxy5z"; // string | The ID of the product environment.

try {
    $result = $apiInstance->getProductEnvironment($subAccountId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductEnvironmentsApi->getProductEnvironment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **subAccountId** | **string**| The ID of the product environment. | |

### Return type

[**\Cloudinary\Provisioning\Model\ProductEnvironment**](../Model/ProductEnvironment.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#)
[[Back to API list]](../../README.md#api-endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getProductEnvironments()`

```php
getProductEnvironments($enabled, $ids, $cloudNames, $prefix): \Cloudinary\Provisioning\Model\ProductEnvironmentsResponse
```

Get product environments

Return an array of all product environments, or if conditions are specified,  return the relevant product environments.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Cloudinary\Provisioning\Api\ProductEnvironmentsApi();

$enabled = true; // bool | Whether to only return enabled product environments (true) or disabled product environments (false).  **Default**: all product environments are returned (both enabled and disabled).
$ids = array('ids_example'); // string[] | A list of up to 100 product environment IDs. When provided, other parameters are ignored.
$cloudNames = array('cloudNames_example'); // string[] | A list of up to 100 product environment cloud names.
$prefix = "product"; // string | Returns product environments where the name begins with the specified case-insensitive string.

try {
    $result = $apiInstance->getProductEnvironments($enabled, $ids, $cloudNames, $prefix);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductEnvironmentsApi->getProductEnvironments: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **enabled** | **bool**| Whether to only return enabled product environments (true) or disabled product environments (false).  **Default**: all product environments are returned (both enabled and disabled). | [optional] |
| **ids** | [**string[]**](../Model/string.md)| A list of up to 100 product environment IDs. When provided, other parameters are ignored. | [optional] |
| **cloudNames** | [**string[]**](../Model/string.md)| A list of up to 100 product environment cloud names. | [optional] |
| **prefix** | **string**| Returns product environments where the name begins with the specified case-insensitive string. | [optional] |

### Return type

[**\Cloudinary\Provisioning\Model\ProductEnvironmentsResponse**](../Model/ProductEnvironmentsResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#)
[[Back to API list]](../../README.md#api-endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateProductEnvironment()`

```php
updateProductEnvironment($subAccountId, $productEnvironmentUpdateRequest): \Cloudinary\Provisioning\Model\ProductEnvironment
```

Update product environment

Update the details of a product environment.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Cloudinary\Provisioning\Api\ProductEnvironmentsApi();

$subAccountId = "abcde1fghij2klmno3pqrst4uvwxy5z"; // string | The ID of the product environment.
$productEnvironmentUpdateRequest = new \Cloudinary\Provisioning\Model\ProductEnvironmentUpdateRequest(); // \Cloudinary\Provisioning\Model\ProductEnvironmentUpdateRequest | Updated product environment details

try {
    $result = $apiInstance->updateProductEnvironment($subAccountId, $productEnvironmentUpdateRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductEnvironmentsApi->updateProductEnvironment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **subAccountId** | **string**| The ID of the product environment. | |
| **productEnvironmentUpdateRequest** | [**\Cloudinary\Provisioning\Model\ProductEnvironmentUpdateRequest**](../Model/ProductEnvironmentUpdateRequest.md)| Updated product environment details | [optional] |

### Return type

[**\Cloudinary\Provisioning\Model\ProductEnvironment**](../Model/ProductEnvironment.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#)
[[Back to API list]](../../README.md#api-endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
