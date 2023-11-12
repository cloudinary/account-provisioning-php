# Cloudinary\Provisioning\AccessKeysApi

All URIs are relative to https://api.cloudinary.com/v1_1/provisioning/accounts/ACCOUNT_ID.

Method | HTTP request | Description
------------- | ------------- | -------------
[**generateAccessKey()**](AccessKeysApi.md#generateAccessKey) | **POST** /sub_accounts/{sub_account_id}/access_keys | Generate an access key
[**getAccessKeys()**](AccessKeysApi.md#getAccessKeys) | **GET** /sub_accounts/{sub_account_id}/access_keys | Get access keys
[**updateAccessKey()**](AccessKeysApi.md#updateAccessKey) | **PUT** /sub_accounts/{sub_account_id}/access_keys/{key} | Update an access key


## `generateAccessKey()`

```php
generateAccessKey($sub_account_id, $access_key_request): \Cloudinary\Provisioning\Model\AccessKeyResponse
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

$sub_account_id = 'sub_account_id_example'; // string
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
 **sub_account_id** | **string**|  |
 **access_key_request** | [**\Cloudinary\Provisioning\Model\AccessKeyRequest**](../Model/AccessKeyRequest.md)| Access key details | [optional]

### Return type

[**\Cloudinary\Provisioning\Model\AccessKeyResponse**](../Model/AccessKeyResponse.md)

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

$sub_account_id = 'sub_account_id_example'; // string
$page_size = 56; // int | How many entries to display on each page.
$page = 56; // int | Which page to return (maximum pages 100). Default All pages are returned.
$sort_by = 'sort_by_example'; // string | Which response parameter to sort by. Possible values api_key, created_at, name, enabled.
$sort_order = 'sort_order_example'; // string | Control the order of returned keys. Possible values desc (default), asc.

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
 **sub_account_id** | **string**|  |
 **page_size** | **int**| How many entries to display on each page. | [optional]
 **page** | **int**| Which page to return (maximum pages 100). Default All pages are returned. | [optional]
 **sort_by** | **string**| Which response parameter to sort by. Possible values api_key, created_at, name, enabled. | [optional]
 **sort_order** | **string**| Control the order of returned keys. Possible values desc (default), asc. | [optional]

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
updateAccessKey($sub_account_id, $key, $access_key_update_request): \Cloudinary\Provisioning\Model\AccessKeyResponse
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

$sub_account_id = 'sub_account_id_example'; // string
$key = 'key_example'; // string
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
 **sub_account_id** | **string**|  |
 **key** | **string**|  |
 **access_key_update_request** | [**\Cloudinary\Provisioning\Model\AccessKeyUpdateRequest**](../Model/AccessKeyUpdateRequest.md)| Access key details for update | [optional]

### Return type

[**\Cloudinary\Provisioning\Model\AccessKeyResponse**](../Model/AccessKeyResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
