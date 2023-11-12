# Cloudinary\Provisioning\UsersApi

All URIs are relative to https://api.cloudinary.com/v1_1/provisioning/accounts/ACCOUNT_ID.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createUser()**](UsersApi.md#createUser) | **POST** /users | Create user
[**deleteUser()**](UsersApi.md#deleteUser) | **DELETE** /users/{user_id} | Delete user
[**getUser()**](UsersApi.md#getUser) | **GET** /users/{user_id} | Get user
[**getUsers()**](UsersApi.md#getUsers) | **GET** /users | Get users
[**updateUser()**](UsersApi.md#updateUser) | **PUT** /users/{user_id} | Update user


## `createUser()`

```php
createUser($user_request): \Cloudinary\Provisioning\Model\UserResponse
```

Create user

Create a new user.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Cloudinary Account URL: basicAuth
$config = Cloudinary\Provisioning\Configuration::getDefaultConfiguration()
              ->setCloudinaryAccountUrl('account://provisioning_key:provisioning_secret@account_id');


$apiInstance = new Cloudinary\Provisioning\Api\UsersApi(null, $config);

$user_request = new \Cloudinary\Provisioning\Model\UserRequest(); // \Cloudinary\Provisioning\Model\UserRequest | User details

try {
    $result = $apiInstance->createUser($user_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->createUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_request** | [**\Cloudinary\Provisioning\Model\UserRequest**](../Model/UserRequest.md)| User details | [optional]

### Return type

[**\Cloudinary\Provisioning\Model\UserResponse**](../Model/UserResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteUser()`

```php
deleteUser($user_id): \Cloudinary\Provisioning\Model\MessageResponse
```

Delete user

Delete a specific user.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Cloudinary Account URL: basicAuth
$config = Cloudinary\Provisioning\Configuration::getDefaultConfiguration()
              ->setCloudinaryAccountUrl('account://provisioning_key:provisioning_secret@account_id');


$apiInstance = new Cloudinary\Provisioning\Api\UsersApi(null, $config);

$user_id = 'user_id_example'; // string

try {
    $result = $apiInstance->deleteUser($user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->deleteUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **string**|  |

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

## `getUser()`

```php
getUser($user_id): \Cloudinary\Provisioning\Model\UserResponse
```

Get user

Retrieve a specific user.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Cloudinary Account URL: basicAuth
$config = Cloudinary\Provisioning\Configuration::getDefaultConfiguration()
              ->setCloudinaryAccountUrl('account://provisioning_key:provisioning_secret@account_id');


$apiInstance = new Cloudinary\Provisioning\Api\UsersApi(null, $config);

$user_id = 'user_id_example'; // string

try {
    $result = $apiInstance->getUser($user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->getUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **string**|  |

### Return type

[**\Cloudinary\Provisioning\Model\UserResponse**](../Model/UserResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getUsers()`

```php
getUsers($pending, $ids, $prefix, $sub_account_id): \Cloudinary\Provisioning\Model\UsersResponse
```

Get users

Retrieve an array of users.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Cloudinary Account URL: basicAuth
$config = Cloudinary\Provisioning\Configuration::getDefaultConfiguration()
              ->setCloudinaryAccountUrl('account://provisioning_key:provisioning_secret@account_id');


$apiInstance = new Cloudinary\Provisioning\Api\UsersApi(null, $config);

$pending = True; // bool | Whether to return pending users. Default false (all users)
$ids = array('ids_example'); // string[] | A list of up to 100 user IDs.
$prefix = 'prefix_example'; // string | Returns users where the name begins with the specified case-insensitive string.
$sub_account_id = 'sub_account_id_example'; // string | Only returns users who have access to the specified account.

try {
    $result = $apiInstance->getUsers($pending, $ids, $prefix, $sub_account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->getUsers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pending** | **bool**| Whether to return pending users. Default false (all users) | [optional]
 **ids** | [**string[]**](../Model/string.md)| A list of up to 100 user IDs. | [optional]
 **prefix** | **string**| Returns users where the name begins with the specified case-insensitive string. | [optional]
 **sub_account_id** | **string**| Only returns users who have access to the specified account. | [optional]

### Return type

[**\Cloudinary\Provisioning\Model\UsersResponse**](../Model/UsersResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateUser()`

```php
updateUser($user_id, $user_request): \Cloudinary\Provisioning\Model\UserResponse
```

Update user

Update the details of a user.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Cloudinary Account URL: basicAuth
$config = Cloudinary\Provisioning\Configuration::getDefaultConfiguration()
              ->setCloudinaryAccountUrl('account://provisioning_key:provisioning_secret@account_id');


$apiInstance = new Cloudinary\Provisioning\Api\UsersApi(null, $config);

$user_id = 'user_id_example'; // string
$user_request = new \Cloudinary\Provisioning\Model\UserRequest(); // \Cloudinary\Provisioning\Model\UserRequest | Updated user details

try {
    $result = $apiInstance->updateUser($user_id, $user_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->updateUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **string**|  |
 **user_request** | [**\Cloudinary\Provisioning\Model\UserRequest**](../Model/UserRequest.md)| Updated user details | [optional]

### Return type

[**\Cloudinary\Provisioning\Model\UserResponse**](../Model/UserResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
