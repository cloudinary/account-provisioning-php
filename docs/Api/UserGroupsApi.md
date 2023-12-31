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
addUserToUserGroup($groupId, $userId): \Cloudinary\Provisioning\Model\UserGroupUser
```

Add User to User Group

Add a user to a group with the specified ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Cloudinary Account URL
$config = Cloudinary\Provisioning\Configuration::getDefaultConfiguration()
              ->setCloudinaryAccountUrl('account://provisioning_key:provisioning_secret@account_id');


$apiInstance = new Cloudinary\Provisioning\Api\UserGroupsApi(null, $config);

$groupId = 7f08f1f1fc910bf1f25274aef11d27; // string | The ID of the user group.
$userId = 0abed8dfcc039ea05e2a1d494fd442; // string | The ID of the user.

try {
    $result = $apiInstance->addUserToUserGroup($groupId, $userId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserGroupsApi->addUserToUserGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **groupId** | **string**| The ID of the user group. |
 **userId** | **string**| The ID of the user. |

### Return type

[**\Cloudinary\Provisioning\Model\UserGroupUser**](../Model/UserGroupUser.md)

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
createUserGroup($userGroupRequest): \Cloudinary\Provisioning\Model\UserGroup
```

Create User Group

Create a new user group for the account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Cloudinary Account URL
$config = Cloudinary\Provisioning\Configuration::getDefaultConfiguration()
              ->setCloudinaryAccountUrl('account://provisioning_key:provisioning_secret@account_id');


$apiInstance = new Cloudinary\Provisioning\Api\UserGroupsApi(null, $config);

$userGroupRequest = new \Cloudinary\Provisioning\Model\UserGroupRequest(); // \Cloudinary\Provisioning\Model\UserGroupRequest | User group details

try {
    $result = $apiInstance->createUserGroup($userGroupRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserGroupsApi->createUserGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userGroupRequest** | [**\Cloudinary\Provisioning\Model\UserGroupRequest**](../Model/UserGroupRequest.md)| User group details | [optional]

### Return type

[**\Cloudinary\Provisioning\Model\UserGroup**](../Model/UserGroup.md)

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
deleteUserGroup($groupId): \Cloudinary\Provisioning\Model\SuccessResponse
```

Delete User Group

Delete a user group with the specified ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Cloudinary Account URL
$config = Cloudinary\Provisioning\Configuration::getDefaultConfiguration()
              ->setCloudinaryAccountUrl('account://provisioning_key:provisioning_secret@account_id');


$apiInstance = new Cloudinary\Provisioning\Api\UserGroupsApi(null, $config);

$groupId = 7f08f1f1fc910bf1f25274aef11d27; // string | The ID of the user group.

try {
    $result = $apiInstance->deleteUserGroup($groupId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserGroupsApi->deleteUserGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **groupId** | **string**| The ID of the user group. |

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

## `getUserGroup()`

```php
getUserGroup($groupId): \Cloudinary\Provisioning\Model\UserGroup
```

Get User Group

Retrieve a specific user group.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Cloudinary Account URL
$config = Cloudinary\Provisioning\Configuration::getDefaultConfiguration()
              ->setCloudinaryAccountUrl('account://provisioning_key:provisioning_secret@account_id');


$apiInstance = new Cloudinary\Provisioning\Api\UserGroupsApi(null, $config);

$groupId = 7f08f1f1fc910bf1f25274aef11d27; // string | The ID of the user group.

try {
    $result = $apiInstance->getUserGroup($groupId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserGroupsApi->getUserGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **groupId** | **string**| The ID of the user group. |

### Return type

[**\Cloudinary\Provisioning\Model\UserGroup**](../Model/UserGroup.md)

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


// Configure Cloudinary Account URL
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
getUsersInUserGroup($groupId): \Cloudinary\Provisioning\Model\UserGroupUsersResponse
```

Get Users in User Group

Retrieve the users in the group with the specified ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Cloudinary Account URL
$config = Cloudinary\Provisioning\Configuration::getDefaultConfiguration()
              ->setCloudinaryAccountUrl('account://provisioning_key:provisioning_secret@account_id');


$apiInstance = new Cloudinary\Provisioning\Api\UserGroupsApi(null, $config);

$groupId = 7f08f1f1fc910bf1f25274aef11d27; // string | The ID of the user group.

try {
    $result = $apiInstance->getUsersInUserGroup($groupId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserGroupsApi->getUsersInUserGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **groupId** | **string**| The ID of the user group. |

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
removeUserFromUserGroup($groupId, $userId): \Cloudinary\Provisioning\Model\UserGroupUsersResponse
```

Remove User from User Group

Remove a user from a group with the specified ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Cloudinary Account URL
$config = Cloudinary\Provisioning\Configuration::getDefaultConfiguration()
              ->setCloudinaryAccountUrl('account://provisioning_key:provisioning_secret@account_id');


$apiInstance = new Cloudinary\Provisioning\Api\UserGroupsApi(null, $config);

$groupId = 7f08f1f1fc910bf1f25274aef11d27; // string | The ID of the user group.
$userId = 0abed8dfcc039ea05e2a1d494fd442; // string | The ID of the user.

try {
    $result = $apiInstance->removeUserFromUserGroup($groupId, $userId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserGroupsApi->removeUserFromUserGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **groupId** | **string**| The ID of the user group. |
 **userId** | **string**| The ID of the user. |

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

## `updateUserGroup()`

```php
updateUserGroup($groupId, $userGroupRequest): \Cloudinary\Provisioning\Model\UserGroup
```

Update User Group

Update the name of a specified user group.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Cloudinary Account URL
$config = Cloudinary\Provisioning\Configuration::getDefaultConfiguration()
              ->setCloudinaryAccountUrl('account://provisioning_key:provisioning_secret@account_id');


$apiInstance = new Cloudinary\Provisioning\Api\UserGroupsApi(null, $config);

$groupId = 7f08f1f1fc910bf1f25274aef11d27; // string | The ID of the user group.
$userGroupRequest = new \Cloudinary\Provisioning\Model\UserGroupRequest(); // \Cloudinary\Provisioning\Model\UserGroupRequest | Updated user group details

try {
    $result = $apiInstance->updateUserGroup($groupId, $userGroupRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserGroupsApi->updateUserGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **groupId** | **string**| The ID of the user group. |
 **userGroupRequest** | [**\Cloudinary\Provisioning\Model\UserGroupRequest**](../Model/UserGroupRequest.md)| Updated user group details | [optional]

### Return type

[**\Cloudinary\Provisioning\Model\UserGroup**](../Model/UserGroup.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
