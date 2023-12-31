# Cloudinary\Provisioning\AccessKeysApi

All URIs are relative to https://api.cloudinary.com/v1_1/provisioning/accounts/ACCOUNT_ID.

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteAccessKey()**](AccessKeysApi.md#deleteAccessKey) | **DELETE** /sub_accounts/{sub_account_id}/access_keys/{key} | Delete access key
[**deleteAccessKeyByName()**](AccessKeysApi.md#deleteAccessKeyByName) | **DELETE** /sub_accounts/{sub_account_id}/access_keys | Delete access key by name
[**generateAccessKey()**](AccessKeysApi.md#generateAccessKey) | **POST** /sub_accounts/{sub_account_id}/access_keys | Generate an access key
[**getAccessKeys()**](AccessKeysApi.md#getAccessKeys) | **GET** /sub_accounts/{sub_account_id}/access_keys | Get access keys
[**updateAccessKey()**](AccessKeysApi.md#updateAccessKey) | **PUT** /sub_accounts/{sub_account_id}/access_keys/{key} | Update an access key


## `deleteAccessKey()`

```php
deleteAccessKey($sub_account_id, $key): \Cloudinary\Provisioning\Model\SuccessResponse
```

Delete access key

Delete a specific access key.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Cloudinary Account URL: basicAuth
$config = Cloudinary\Provisioning\Configuration::getDefaultConfiguration()
              ->setCloudinaryAccountUrl('account://provisioning_key:provisioning_secret@account_id');


$apiInstance = new Cloudinary\Provisioning\Api\AccessKeysApi(null, $config);

$sub_account_id = abcde1fghij2klmno3pqrst4uvwxy5z; // string | The ID of the product environment.
$key = 814814814814814; // string | The access key (api key).

try {
    $result = $apiInstance->deleteAccessKey($sub_account_id, $key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccessKeysApi->deleteAccessKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sub_account_id** | **string**| The ID of the product environment. |
 **key** | **string**| The access key (api key). |

### Return type

[**\Cloudinary\Provisioning\Model\SuccessResponse**](../Model/SuccessResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteAccessKeyByName()`

```php
deleteAccessKeyByName($sub_account_id, $name): \Cloudinary\Provisioning\Model\SuccessResponse
```

Delete access key by name

Delete a specific access key by name.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Cloudinary Account URL: basicAuth
$config = Cloudinary\Provisioning\Configuration::getDefaultConfiguration()
              ->setCloudinaryAccountUrl('account://provisioning_key:provisioning_secret@account_id');


$apiInstance = new Cloudinary\Provisioning\Api\AccessKeysApi(null, $config);

$sub_account_id = abcde1fghij2klmno3pqrst4uvwxy5z; // string | The ID of the product environment.
$name = main_key; // string | The access key name.

try {
    $result = $apiInstance->deleteAccessKeyByName($sub_account_id, $name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccessKeysApi->deleteAccessKeyByName: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sub_account_id** | **string**| The ID of the product environment. |
 **name** | **string**| The access key name. |

### Return type

[**\Cloudinary\Provisioning\Model\SuccessResponse**](../Model/SuccessResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `generateAccessKey()`

```php
generateAccessKey($sub_account_id, $access_key_request): \Cloudinary\Provisioning\Model\AccessKey
```

Generate an access key

Generate a new access key.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Cloudinary Account URL: basicAuth
$config = Cloudinary\Provisioning\Configuration::getDefaultConfiguration()
              ->setCloudinaryAccountUrl('account://provisioning_key:provisioning_secret@account_id');


$apiInstance = new Cloudinary\Provisioning\Api\AccessKeysApi(null, $config);

$sub_account_id = abcde1fghij2klmno3pqrst4uvwxy5z; // string | The ID of the product environment.
$access_key_request = new \Cloudinary\Provisioning\Model\AccessKeyRequest(); // \Cloudinary\Provisioning\Model\AccessKeyRequest | Access key details

try {
    $result = $apiInstance->generateAccessKey($sub_account_id, $access_key_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccessKeysApi->generateAccessKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sub_account_id** | **string**| The ID of the product environment. |
 **access_key_request** | [**\Cloudinary\Provisioning\Model\AccessKeyRequest**](../Model/AccessKeyRequest.md)| Access key details | [optional]

### Return type

[**\Cloudinary\Provisioning\Model\AccessKey**](../Model/AccessKey.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAccessKeys()`

```php
getAccessKeys($sub_account_id, $page_size, $page, $sort_by, $sort_order): \Cloudinary\Provisioning\Model\AccessKeysResponse
```

Get access keys

Retrieve an array of all access keys for a product environment.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Cloudinary Account URL: basicAuth
$config = Cloudinary\Provisioning\Configuration::getDefaultConfiguration()
              ->setCloudinaryAccountUrl('account://provisioning_key:provisioning_secret@account_id');


$apiInstance = new Cloudinary\Provisioning\Api\AccessKeysApi(null, $config);

$sub_account_id = abcde1fghij2klmno3pqrst4uvwxy5z; // string | The ID of the product environment.
$page_size = 56; // int | How many entries to display on each page.
$page = 56; // int | Which page to return (maximum pages 100). **Default**: All pages are returned.
$sort_by = created_at; // string | Which response parameter to sort by. **Possible values**: `api_key`, `created_at`, `name`, `enabled`.
$sort_order = asc; // string | Control the order of returned keys. **Possible values**: `desc` (default), `asc`.

try {
    $result = $apiInstance->getAccessKeys($sub_account_id, $page_size, $page, $sort_by, $sort_order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccessKeysApi->getAccessKeys: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sub_account_id** | **string**| The ID of the product environment. |
 **page_size** | **int**| How many entries to display on each page. | [optional]
 **page** | **int**| Which page to return (maximum pages 100). **Default**: All pages are returned. | [optional]
 **sort_by** | **string**| Which response parameter to sort by. **Possible values**: &#x60;api_key&#x60;, &#x60;created_at&#x60;, &#x60;name&#x60;, &#x60;enabled&#x60;. | [optional]
 **sort_order** | **string**| Control the order of returned keys. **Possible values**: &#x60;desc&#x60; (default), &#x60;asc&#x60;. | [optional]

### Return type

[**\Cloudinary\Provisioning\Model\AccessKeysResponse**](../Model/AccessKeysResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateAccessKey()`

```php
updateAccessKey($sub_account_id, $key, $access_key_update_request): \Cloudinary\Provisioning\Model\AccessKey
```

Update an access key

Update the name and/or status of an existing access key.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Cloudinary Account URL: basicAuth
$config = Cloudinary\Provisioning\Configuration::getDefaultConfiguration()
              ->setCloudinaryAccountUrl('account://provisioning_key:provisioning_secret@account_id');


$apiInstance = new Cloudinary\Provisioning\Api\AccessKeysApi(null, $config);

$sub_account_id = abcde1fghij2klmno3pqrst4uvwxy5z; // string | The ID of the product environment.
$key = 814814814814814; // string | The access key (api key).
$access_key_update_request = new \Cloudinary\Provisioning\Model\AccessKeyUpdateRequest(); // \Cloudinary\Provisioning\Model\AccessKeyUpdateRequest | Access key details for update

try {
    $result = $apiInstance->updateAccessKey($sub_account_id, $key, $access_key_update_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccessKeysApi->updateAccessKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sub_account_id** | **string**| The ID of the product environment. |
 **key** | **string**| The access key (api key). |
 **access_key_update_request** | [**\Cloudinary\Provisioning\Model\AccessKeyUpdateRequest**](../Model/AccessKeyUpdateRequest.md)| Access key details for update | [optional]

### Return type

[**\Cloudinary\Provisioning\Model\AccessKey**](../Model/AccessKey.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
