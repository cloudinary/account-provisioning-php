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
createUser($create_user_request): \Cloudinary\Provisioning\Model\User
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

$create_user_request = new \Cloudinary\Provisioning\Model\CreateUserRequest(); // \Cloudinary\Provisioning\Model\CreateUserRequest | User details

try {
    $result = $apiInstance->createUser($create_user_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->createUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **create_user_request** | [**\Cloudinary\Provisioning\Model\CreateUserRequest**](../Model/CreateUserRequest.md)| User details | [optional]

### Return type

[**\Cloudinary\Provisioning\Model\User**](../Model/User.md)

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
deleteUser($user_id): \Cloudinary\Provisioning\Model\SuccessResponse
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

$user_id = 0abed8dfcc039ea05e2a1d494fd442; // string | The ID of the user.

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
 **user_id** | **string**| The ID of the user. |

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

## `getUser()`

```php
getUser($user_id): \Cloudinary\Provisioning\Model\User
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

$user_id = 0abed8dfcc039ea05e2a1d494fd442; // string | The ID of the user.

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
 **user_id** | **string**| The ID of the user. |

### Return type

[**\Cloudinary\Provisioning\Model\User**](../Model/User.md)

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
getUsers($pending, $ids, $prefix, $sub_account_id, $last_login, $from, $to, $union_type): \Cloudinary\Provisioning\Model\UsersResponse
```

Get users

Returns an array of all users in the account, or if conditions are specified, returns the relevant users.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Cloudinary Account URL: basicAuth
$config = Cloudinary\Provisioning\Configuration::getDefaultConfiguration()
              ->setCloudinaryAccountUrl('account://provisioning_key:provisioning_secret@account_id');


$apiInstance = new Cloudinary\Provisioning\Api\UsersApi(null, $config);

$pending = false; // bool | Whether to return pending users. **Default**: `false` (all users)
$ids = array('ids_example'); // string[] | A list of up to 100 user IDs.  When provided, other parameters are ignored.
$prefix = john; // string | Returns users where the name begins with the specified case-insensitive string.
$sub_account_id = 'sub_account_id_example'; // string | Only returns users who have access to the specified account.
$last_login = True; // bool | Specifies a date range for last login.
$from = 2023-01-01; // \DateTime | All last logins after this date, given in the format: yyyy-mm-dd.
$to = 2024-12-31; // \DateTime | All last logins before this date, given in the format: yyyy-mm-dd.
$union_type = 'union_type_example'; // string | Whether to return users who last logged in within the specified date range (include) or those who didn't last log in within the range (exclude). **Possible values**: `include`, `exclude`. **Default**: `include`.

try {
    $result = $apiInstance->getUsers($pending, $ids, $prefix, $sub_account_id, $last_login, $from, $to, $union_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->getUsers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pending** | **bool**| Whether to return pending users. **Default**: &#x60;false&#x60; (all users) | [optional]
 **ids** | [**string[]**](../Model/string.md)| A list of up to 100 user IDs.  When provided, other parameters are ignored. | [optional]
 **prefix** | **string**| Returns users where the name begins with the specified case-insensitive string. | [optional]
 **sub_account_id** | **string**| Only returns users who have access to the specified account. | [optional]
 **last_login** | **bool**| Specifies a date range for last login. | [optional]
 **from** | **\DateTime**| All last logins after this date, given in the format: yyyy-mm-dd. | [optional]
 **to** | **\DateTime**| All last logins before this date, given in the format: yyyy-mm-dd. | [optional]
 **union_type** | **string**| Whether to return users who last logged in within the specified date range (include) or those who didn&#39;t last log in within the range (exclude). **Possible values**: &#x60;include&#x60;, &#x60;exclude&#x60;. **Default**: &#x60;include&#x60;. | [optional]

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
updateUser($user_id, $user_request): \Cloudinary\Provisioning\Model\User
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

$user_id = 0abed8dfcc039ea05e2a1d494fd442; // string | The ID of the user.
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
 **user_id** | **string**| The ID of the user. |
 **user_request** | [**\Cloudinary\Provisioning\Model\UserRequest**](../Model/UserRequest.md)| Updated user details | [optional]

### Return type

[**\Cloudinary\Provisioning\Model\User**](../Model/User.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
