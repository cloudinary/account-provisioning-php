# Cloudinary\Provisioning\UserGroupsApi

All URIs are relative to https://api.cloudinary.com/v1_1/provisioning/accounts/ACCOUNT_ID.

Method | HTTP request | Description
------------- | ------------- | -------------
[**addUserToUserGroup()**](UserGroupsApi.md#addUserToUserGroup) | **POST** /user_groups/{group_id}/users/{user_id} | Add User to User Group
[**createUserGroup()**](UserGroupsApi.md#createUserGroup) | **POST** /user_groups | Create User Group
[**deleteUserGroup()**](UserGroupsApi.md#deleteUserGroup) | **DELETE** /user_groups/{group_id} | Delete User Group
[**getUserGroup()**](UserGroupsApi.md#getUserGroup) | **GET** /user_groups/{group_id} | Get User Group
[**getUserGroups()**](UserGroupsApi.md#getUserGroups) | **GET** /user_groups | Get User Groups
[**getUsersInUserGroup()**](UserGroupsApi.md#getUsersInUserGroup) | **GET** /user_groups/{group_id}/users | Get Users in User Group
[**removeUserFromUserGroup()**](UserGroupsApi.md#removeUserFromUserGroup) | **DELETE** /user_groups/{group_id}/users/{user_id} | Remove User from User Group
[**updateUserGroup()**](UserGroupsApi.md#updateUserGroup) | **PUT** /user_groups/{group_id} | Update User Group


## `addUserToUserGroup()`

```php
addUserToUserGroup($group_id, $user_id): \Cloudinary\Provisioning\Model\UserGroupUserResponse
```

Add User to User Group

Add a user to a group with the specified ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Cloudinary Account URL: basicAuth
$config = Cloudinary\Provisioning\Configuration::getDefaultConfiguration()
              ->setCloudinaryAccountUrl('account://provisioning_key:provisioning_secret@account_id');


$apiInstance = new Cloudinary\Provisioning\Api\UserGroupsApi(null, $config);

$group_id = 'group_id_example'; // string
$user_id = 'user_id_example'; // string

try {
    $result = $apiInstance->addUserToUserGroup($group_id, $user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserGroupsApi->addUserToUserGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **group_id** | **string**|  |
 **user_id** | **string**|  |

### Return type

[**\Cloudinary\Provisioning\Model\UserGroupUserResponse**](../Model/UserGroupUserResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createUserGroup()`

```php
createUserGroup($user_group_request): \Cloudinary\Provisioning\Model\UserGroupResponse
```

Create User Group

Create a new user group for the account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Cloudinary Account URL: basicAuth
$config = Cloudinary\Provisioning\Configuration::getDefaultConfiguration()
              ->setCloudinaryAccountUrl('account://provisioning_key:provisioning_secret@account_id');


$apiInstance = new Cloudinary\Provisioning\Api\UserGroupsApi(null, $config);

$user_group_request = new \Cloudinary\Provisioning\Model\UserGroupRequest(); // \Cloudinary\Provisioning\Model\UserGroupRequest | User group details

try {
    $result = $apiInstance->createUserGroup($user_group_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserGroupsApi->createUserGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_group_request** | [**\Cloudinary\Provisioning\Model\UserGroupRequest**](../Model/UserGroupRequest.md)| User group details | [optional]

### Return type

[**\Cloudinary\Provisioning\Model\UserGroupResponse**](../Model/UserGroupResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteUserGroup()`

```php
deleteUserGroup($group_id): \Cloudinary\Provisioning\Model\MessageResponse
```

Delete User Group

Delete a user group with the specified ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Cloudinary Account URL: basicAuth
$config = Cloudinary\Provisioning\Configuration::getDefaultConfiguration()
              ->setCloudinaryAccountUrl('account://provisioning_key:provisioning_secret@account_id');


$apiInstance = new Cloudinary\Provisioning\Api\UserGroupsApi(null, $config);

$group_id = 'group_id_example'; // string

try {
    $result = $apiInstance->deleteUserGroup($group_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserGroupsApi->deleteUserGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **group_id** | **string**|  |

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

## `getUserGroup()`

```php
getUserGroup($group_id): \Cloudinary\Provisioning\Model\UserGroupResponse
```

Get User Group

Retrieve a specific user group.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Cloudinary Account URL: basicAuth
$config = Cloudinary\Provisioning\Configuration::getDefaultConfiguration()
              ->setCloudinaryAccountUrl('account://provisioning_key:provisioning_secret@account_id');


$apiInstance = new Cloudinary\Provisioning\Api\UserGroupsApi(null, $config);

$group_id = 'group_id_example'; // string

try {
    $result = $apiInstance->getUserGroup($group_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserGroupsApi->getUserGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **group_id** | **string**|  |

### Return type

[**\Cloudinary\Provisioning\Model\UserGroupResponse**](../Model/UserGroupResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getUserGroups()`

```php
getUserGroups(): \Cloudinary\Provisioning\Model\UserGroupsResponse
```

Get User Groups

Retrieve an array of all user groups in the account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Cloudinary Account URL: basicAuth
$config = Cloudinary\Provisioning\Configuration::getDefaultConfiguration()
              ->setCloudinaryAccountUrl('account://provisioning_key:provisioning_secret@account_id');


$apiInstance = new Cloudinary\Provisioning\Api\UserGroupsApi(null, $config);


try {
    $result = $apiInstance->getUserGroups();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserGroupsApi->getUserGroups: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Cloudinary\Provisioning\Model\UserGroupsResponse**](../Model/UserGroupsResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getUsersInUserGroup()`

```php
getUsersInUserGroup($group_id): \Cloudinary\Provisioning\Model\UserGroupUsersResponse
```

Get Users in User Group

Retrieve the users in the group with the specified ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Cloudinary Account URL: basicAuth
$config = Cloudinary\Provisioning\Configuration::getDefaultConfiguration()
              ->setCloudinaryAccountUrl('account://provisioning_key:provisioning_secret@account_id');


$apiInstance = new Cloudinary\Provisioning\Api\UserGroupsApi(null, $config);

$group_id = 'group_id_example'; // string

try {
    $result = $apiInstance->getUsersInUserGroup($group_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserGroupsApi->getUsersInUserGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **group_id** | **string**|  |

### Return type

[**\Cloudinary\Provisioning\Model\UserGroupUsersResponse**](../Model/UserGroupUsersResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `removeUserFromUserGroup()`

```php
removeUserFromUserGroup($group_id, $user_id): \Cloudinary\Provisioning\Model\UserGroupUserResponse
```

Remove User from User Group

Remove a user from a group with the specified ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Cloudinary Account URL: basicAuth
$config = Cloudinary\Provisioning\Configuration::getDefaultConfiguration()
              ->setCloudinaryAccountUrl('account://provisioning_key:provisioning_secret@account_id');


$apiInstance = new Cloudinary\Provisioning\Api\UserGroupsApi(null, $config);

$group_id = 'group_id_example'; // string
$user_id = 'user_id_example'; // string

try {
    $result = $apiInstance->removeUserFromUserGroup($group_id, $user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserGroupsApi->removeUserFromUserGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **group_id** | **string**|  |
 **user_id** | **string**|  |

### Return type

[**\Cloudinary\Provisioning\Model\UserGroupUserResponse**](../Model/UserGroupUserResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateUserGroup()`

```php
updateUserGroup($group_id, $user_group_request): \Cloudinary\Provisioning\Model\UserGroupResponse
```

Update User Group

Update the name of a specified user group.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Cloudinary Account URL: basicAuth
$config = Cloudinary\Provisioning\Configuration::getDefaultConfiguration()
              ->setCloudinaryAccountUrl('account://provisioning_key:provisioning_secret@account_id');


$apiInstance = new Cloudinary\Provisioning\Api\UserGroupsApi(null, $config);

$group_id = 'group_id_example'; // string
$user_group_request = new \Cloudinary\Provisioning\Model\UserGroupRequest(); // \Cloudinary\Provisioning\Model\UserGroupRequest | Updated user group details

try {
    $result = $apiInstance->updateUserGroup($group_id, $user_group_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserGroupsApi->updateUserGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **group_id** | **string**|  |
 **user_group_request** | [**\Cloudinary\Provisioning\Model\UserGroupRequest**](../Model/UserGroupRequest.md)| Updated user group details | [optional]

### Return type

[**\Cloudinary\Provisioning\Model\UserGroupResponse**](../Model/UserGroupResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
