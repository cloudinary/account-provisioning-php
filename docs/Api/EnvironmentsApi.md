# Cloudinary\Provisioning\EnvironmentsApi

All URIs are relative to https://api.cloudinary.com/v1_1/provisioning/accounts/ACCOUNT_ID.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createProductEnvironment()**](EnvironmentsApi.md#createProductEnvironment) | **POST** /sub_accounts | Create product environment
[**deleteProductEnvironment()**](EnvironmentsApi.md#deleteProductEnvironment) | **DELETE** /sub_accounts/{sub_account_id} | Delete product environment
[**getProductEnvironment()**](EnvironmentsApi.md#getProductEnvironment) | **GET** /sub_accounts/{sub_account_id} | Get product environment
[**getProductEnvironments()**](EnvironmentsApi.md#getProductEnvironments) | **GET** /sub_accounts | Get product environments
[**updateProductEnvironment()**](EnvironmentsApi.md#updateProductEnvironment) | **PUT** /sub_accounts/{sub_account_id} | Update product environment


## `createProductEnvironment()`

```php
createProductEnvironment($product_environment_request): \Cloudinary\Provisioning\Model\ProductEnvironmentResponse
```

Create product environment

Create a new product environment.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Cloudinary Account URL: basicAuth
$config = Cloudinary\Provisioning\Configuration::getDefaultConfiguration()
              ->setCloudinaryAccountUrl('account://provisioning_key:provisioning_secret@account_id');


$apiInstance = new Cloudinary\Provisioning\Api\EnvironmentsApi(null, $config);

$product_environment_request = new \Cloudinary\Provisioning\Model\ProductEnvironmentRequest(); // \Cloudinary\Provisioning\Model\ProductEnvironmentRequest | Product environment details

try {
    $result = $apiInstance->createProductEnvironment($product_environment_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvironmentsApi->createProductEnvironment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **product_environment_request** | [**\Cloudinary\Provisioning\Model\ProductEnvironmentRequest**](../Model/ProductEnvironmentRequest.md)| Product environment details | [optional]

### Return type

[**\Cloudinary\Provisioning\Model\ProductEnvironmentResponse**](../Model/ProductEnvironmentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteProductEnvironment()`

```php
deleteProductEnvironment($sub_account_id): \Cloudinary\Provisioning\Model\MessageResponse
```

Delete product environment

Delete a specific product environment.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Cloudinary Account URL: basicAuth
$config = Cloudinary\Provisioning\Configuration::getDefaultConfiguration()
              ->setCloudinaryAccountUrl('account://provisioning_key:provisioning_secret@account_id');


$apiInstance = new Cloudinary\Provisioning\Api\EnvironmentsApi(null, $config);

$sub_account_id = 'sub_account_id_example'; // string

try {
    $result = $apiInstance->deleteProductEnvironment($sub_account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvironmentsApi->deleteProductEnvironment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sub_account_id** | **string**|  |

### Return type

[**\Cloudinary\Provisioning\Model\MessageResponse**](../Model/MessageResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getProductEnvironment()`

```php
getProductEnvironment($sub_account_id): \Cloudinary\Provisioning\Model\ProductEnvironmentResponse
```

Get product environment

Retrieve a specific product environment.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Cloudinary Account URL: basicAuth
$config = Cloudinary\Provisioning\Configuration::getDefaultConfiguration()
              ->setCloudinaryAccountUrl('account://provisioning_key:provisioning_secret@account_id');


$apiInstance = new Cloudinary\Provisioning\Api\EnvironmentsApi(null, $config);

$sub_account_id = 'sub_account_id_example'; // string

try {
    $result = $apiInstance->getProductEnvironment($sub_account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvironmentsApi->getProductEnvironment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sub_account_id** | **string**|  |

### Return type

[**\Cloudinary\Provisioning\Model\ProductEnvironmentResponse**](../Model/ProductEnvironmentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getProductEnvironments()`

```php
getProductEnvironments($enabled, $ids, $prefix): \Cloudinary\Provisioning\Model\ProductEnvironmentsResponse
```

Get product environments

Retrieve an array of product environments.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Cloudinary Account URL: basicAuth
$config = Cloudinary\Provisioning\Configuration::getDefaultConfiguration()
              ->setCloudinaryAccountUrl('account://provisioning_key:provisioning_secret@account_id');


$apiInstance = new Cloudinary\Provisioning\Api\EnvironmentsApi(null, $config);

$enabled = true; // bool | Whether to return enabled (true) or disabled (false) product environments. Default all environments.
$ids = array('ids_example'); // string[] | A list of up to 100 product environment IDs.
$prefix = product; // string | Returns product environments where the name begins with the specified case-insensitive string.

try {
    $result = $apiInstance->getProductEnvironments($enabled, $ids, $prefix);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvironmentsApi->getProductEnvironments: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enabled** | **bool**| Whether to return enabled (true) or disabled (false) product environments. Default all environments. | [optional]
 **ids** | [**string[]**](../Model/string.md)| A list of up to 100 product environment IDs. | [optional]
 **prefix** | **string**| Returns product environments where the name begins with the specified case-insensitive string. | [optional]

### Return type

[**\Cloudinary\Provisioning\Model\ProductEnvironmentsResponse**](../Model/ProductEnvironmentsResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateProductEnvironment()`

```php
updateProductEnvironment($sub_account_id, $product_environment_request): \Cloudinary\Provisioning\Model\ProductEnvironmentResponse
```

Update product environment

Update the details of a product environment.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Cloudinary Account URL: basicAuth
$config = Cloudinary\Provisioning\Configuration::getDefaultConfiguration()
              ->setCloudinaryAccountUrl('account://provisioning_key:provisioning_secret@account_id');


$apiInstance = new Cloudinary\Provisioning\Api\EnvironmentsApi(null, $config);

$sub_account_id = 'sub_account_id_example'; // string
$product_environment_request = new \Cloudinary\Provisioning\Model\ProductEnvironmentRequest(); // \Cloudinary\Provisioning\Model\ProductEnvironmentRequest | Updated product environment details

try {
    $result = $apiInstance->updateProductEnvironment($sub_account_id, $product_environment_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvironmentsApi->updateProductEnvironment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sub_account_id** | **string**|  |
 **product_environment_request** | [**\Cloudinary\Provisioning\Model\ProductEnvironmentRequest**](../Model/ProductEnvironmentRequest.md)| Updated product environment details | [optional]

### Return type

[**\Cloudinary\Provisioning\Model\ProductEnvironmentResponse**](../Model/ProductEnvironmentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
