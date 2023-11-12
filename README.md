# Cloudinary Provisioning API PHP SDK

Accounts with provisioning API access can create and manage their **product environments**, **users** and **user groups** using the RESTful Provisioning API. 

Provisioning API access is available [upon request](https://cloudinary.com/contact?plan=enterprise) for accounts on an [Enterprise plan](https://cloudinary.com/pricing#pricing-enterprise).


For more information, please visit [https://support.cloudinary.com](https://support.cloudinary.com).

## Installation & Usage

### Requirements

PHP 7.3 and later.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "require": {
    "cloudinary/account-provisioning": "*"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/account-provisioning/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

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

## API Endpoints

All URIs are relative to *https://api.cloudinary.com/v1_1/provisioning/accounts/ACCOUNT_ID*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AccessKeysApi* | [**generateAccessKey**](docs/Api/AccessKeysApi.md#generateaccesskey) | **POST** /sub_accounts/{sub_account_id}/access_keys | Generate an access key
*AccessKeysApi* | [**getAccessKeys**](docs/Api/AccessKeysApi.md#getaccesskeys) | **GET** /sub_accounts/{sub_account_id}/access_keys | Get access keys
*AccessKeysApi* | [**updateAccessKey**](docs/Api/AccessKeysApi.md#updateaccesskey) | **PUT** /sub_accounts/{sub_account_id}/access_keys/{key} | Update an access key
*EnvironmentsApi* | [**createProductEnvironment**](docs/Api/EnvironmentsApi.md#createproductenvironment) | **POST** /sub_accounts | Create product environment
*EnvironmentsApi* | [**deleteProductEnvironment**](docs/Api/EnvironmentsApi.md#deleteproductenvironment) | **DELETE** /sub_accounts/{sub_account_id} | Delete product environment
*EnvironmentsApi* | [**getProductEnvironment**](docs/Api/EnvironmentsApi.md#getproductenvironment) | **GET** /sub_accounts/{sub_account_id} | Get product environment
*EnvironmentsApi* | [**getProductEnvironments**](docs/Api/EnvironmentsApi.md#getproductenvironments) | **GET** /sub_accounts | Get product environments
*EnvironmentsApi* | [**updateProductEnvironment**](docs/Api/EnvironmentsApi.md#updateproductenvironment) | **PUT** /sub_accounts/{sub_account_id} | Update product environment
*UserGroupsApi* | [**addUserToUserGroup**](docs/Api/UserGroupsApi.md#addusertousergroup) | **POST** /user_groups/{group_id}/users/{user_id} | Add User to User Group
*UserGroupsApi* | [**createUserGroup**](docs/Api/UserGroupsApi.md#createusergroup) | **POST** /user_groups | Create User Group
*UserGroupsApi* | [**deleteUserGroup**](docs/Api/UserGroupsApi.md#deleteusergroup) | **DELETE** /user_groups/{group_id} | Delete User Group
*UserGroupsApi* | [**getUserGroup**](docs/Api/UserGroupsApi.md#getusergroup) | **GET** /user_groups/{group_id} | Get User Group
*UserGroupsApi* | [**getUserGroups**](docs/Api/UserGroupsApi.md#getusergroups) | **GET** /user_groups | Get User Groups
*UserGroupsApi* | [**getUsersInUserGroup**](docs/Api/UserGroupsApi.md#getusersinusergroup) | **GET** /user_groups/{group_id}/users | Get Users in User Group
*UserGroupsApi* | [**removeUserFromUserGroup**](docs/Api/UserGroupsApi.md#removeuserfromusergroup) | **DELETE** /user_groups/{group_id}/users/{user_id} | Remove User from User Group
*UserGroupsApi* | [**updateUserGroup**](docs/Api/UserGroupsApi.md#updateusergroup) | **PUT** /user_groups/{group_id} | Update User Group
*UsersApi* | [**createUser**](docs/Api/UsersApi.md#createuser) | **POST** /users | Create user
*UsersApi* | [**deleteUser**](docs/Api/UsersApi.md#deleteuser) | **DELETE** /users/{user_id} | Delete user
*UsersApi* | [**getUser**](docs/Api/UsersApi.md#getuser) | **GET** /users/{user_id} | Get user
*UsersApi* | [**getUsers**](docs/Api/UsersApi.md#getusers) | **GET** /users | Get users
*UsersApi* | [**updateUser**](docs/Api/UsersApi.md#updateuser) | **PUT** /users/{user_id} | Update user

## Models

- [AccessKeyRequest](docs/Model/AccessKeyRequest.md)
- [AccessKeyResponse](docs/Model/AccessKeyResponse.md)
- [AccessKeyUpdateRequest](docs/Model/AccessKeyUpdateRequest.md)
- [AccessKeysResponse](docs/Model/AccessKeysResponse.md)
- [MessageResponse](docs/Model/MessageResponse.md)
- [ProductEnvironmentRequest](docs/Model/ProductEnvironmentRequest.md)
- [ProductEnvironmentResponse](docs/Model/ProductEnvironmentResponse.md)
- [ProductEnvironmentsResponse](docs/Model/ProductEnvironmentsResponse.md)
- [User](docs/Model/User.md)
- [UserGroup](docs/Model/UserGroup.md)
- [UserGroupRequest](docs/Model/UserGroupRequest.md)
- [UserGroupResponse](docs/Model/UserGroupResponse.md)
- [UserGroupUserRequest](docs/Model/UserGroupUserRequest.md)
- [UserGroupUserResponse](docs/Model/UserGroupUserResponse.md)
- [UserGroupUsersResponse](docs/Model/UserGroupUsersResponse.md)
- [UserGroupsResponse](docs/Model/UserGroupsResponse.md)
- [UserRequest](docs/Model/UserRequest.md)
- [UserResponse](docs/Model/UserResponse.md)
- [UsersResponse](docs/Model/UsersResponse.md)

## Authorization

### basicAuth

- **Type**: HTTP basic authentication

## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author

support@cloudinary.com

## About this package

This Cloudinary PHP package is automatically generated.

- API version: `0.0.1`
    - Package version: `0.0.1`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
