# Cloudinary\Provisioning\UsersApi

All URIs are relative to https://api.cloudinary.com/v1_1/provisioning/accounts/ACCOUNT_ID, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createUser()**](UsersApi.md#createUser) | **POST** /users | Create user |
| [**deleteUser()**](UsersApi.md#deleteUser) | **DELETE** /users/{user_id} | Delete user |
| [**getUser()**](UsersApi.md#getUser) | **GET** /users/{user_id} | Get user |
| [**getUsers()**](UsersApi.md#getUsers) | **GET** /users | Get users |
| [**updateUser()**](UsersApi.md#updateUser) | **PUT** /users/{user_id} | Update user |


## `createUser()`

```php
createUser($userRequest): \Cloudinary\Provisioning\Model\User
```

Create user

Create a new user.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Cloudinary\Provisioning\Api\UsersApi();

$userRequest = new \Cloudinary\Provisioning\Model\UserRequest(); // \Cloudinary\Provisioning\Model\UserRequest | User details

try {
    $result = $apiInstance->createUser($userRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->createUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **userRequest** | [**\Cloudinary\Provisioning\Model\UserRequest**](../Model/UserRequest.md)| User details | [optional] |

### Return type

[**\Cloudinary\Provisioning\Model\User**](../Model/User.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#)
[[Back to API list]](../../README.md#api-endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteUser()`

```php
deleteUser($userId): \Cloudinary\Provisioning\Model\SuccessResponse
```

Delete user

Delete a specific user.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Cloudinary\Provisioning\Api\UsersApi();

$userId = "0abed8dfcc039ea05e2a1d494fd442"; // string | The ID of the user.

try {
    $result = $apiInstance->deleteUser($userId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->deleteUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **userId** | **string**| The ID of the user. | |

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

## `getUser()`

```php
getUser($userId): \Cloudinary\Provisioning\Model\User
```

Get user

Retrieve a specific user.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Cloudinary\Provisioning\Api\UsersApi();

$userId = "0abed8dfcc039ea05e2a1d494fd442"; // string | The ID of the user.

try {
    $result = $apiInstance->getUser($userId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->getUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **userId** | **string**| The ID of the user. | |

### Return type

[**\Cloudinary\Provisioning\Model\User**](../Model/User.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#)
[[Back to API list]](../../README.md#api-endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getUsers()`

```php
getUsers($pending, $ids, $prefix, $subAccountId, $lastLogin, $from, $to, $unionType): \Cloudinary\Provisioning\Model\UsersResponse
```

Get users

Returns an array of all users in the account, or if conditions are specified, returns the relevant users.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Cloudinary\Provisioning\Api\UsersApi();

$pending = false; // bool | Whether to return pending users. **Default**: `false` (all users)
$ids = array('ids_example'); // string[] | A list of up to 100 user IDs.  When provided, other parameters are ignored.
$prefix = "john"; // string | Returns users where the name begins with the specified case-insensitive string.
$subAccountId = "&#39;subAccountId_example&#39;"; // string | Only returns users who have access to the specified account.
$lastLogin = True; // bool | Specifies a date range for last login.
$from = 2023-01-01; // \DateTime | All last logins after this date, given in the format: yyyy-mm-dd.
$to = 2024-12-31; // \DateTime | All last logins before this date, given in the format: yyyy-mm-dd.
$unionType = "&#39;unionType_example&#39;"; // string | Whether to return users who last logged in within the specified date range (include) or those who didn't last log in within the range (exclude). **Possible values**: `include`, `exclude`. **Default**: `include`.

try {
    $result = $apiInstance->getUsers($pending, $ids, $prefix, $subAccountId, $lastLogin, $from, $to, $unionType);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->getUsers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pending** | **bool**| Whether to return pending users. **Default**: &#x60;false&#x60; (all users) | [optional] |
| **ids** | [**string[]**](../Model/string.md)| A list of up to 100 user IDs.  When provided, other parameters are ignored. | [optional] |
| **prefix** | **string**| Returns users where the name begins with the specified case-insensitive string. | [optional] |
| **subAccountId** | **string**| Only returns users who have access to the specified account. | [optional] |
| **lastLogin** | **bool**| Specifies a date range for last login. | [optional] |
| **from** | **\DateTime**| All last logins after this date, given in the format: yyyy-mm-dd. | [optional] |
| **to** | **\DateTime**| All last logins before this date, given in the format: yyyy-mm-dd. | [optional] |
| **unionType** | **string**| Whether to return users who last logged in within the specified date range (include) or those who didn&#39;t last log in within the range (exclude). **Possible values**: &#x60;include&#x60;, &#x60;exclude&#x60;. **Default**: &#x60;include&#x60;. | [optional] |

### Return type

[**\Cloudinary\Provisioning\Model\UsersResponse**](../Model/UsersResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#)
[[Back to API list]](../../README.md#api-endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateUser()`

```php
updateUser($userId, $userRequest): \Cloudinary\Provisioning\Model\User
```

Update user

Update the details of a user.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Cloudinary\Provisioning\Api\UsersApi();

$userId = "0abed8dfcc039ea05e2a1d494fd442"; // string | The ID of the user.
$userRequest = new \Cloudinary\Provisioning\Model\UserRequest(); // \Cloudinary\Provisioning\Model\UserRequest | Updated user details

try {
    $result = $apiInstance->updateUser($userId, $userRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->updateUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **userId** | **string**| The ID of the user. | |
| **userRequest** | [**\Cloudinary\Provisioning\Model\UserRequest**](../Model/UserRequest.md)| Updated user details | [optional] |

### Return type

[**\Cloudinary\Provisioning\Model\User**](../Model/User.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#)
[[Back to API list]](../../README.md#api-endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
