# Cloudinary Account Provisioning API PHP SDK

Accounts with provisioning API access can create and manage their **product environments**, **users** and **user groups** using the RESTful Provisioning API. 

Provisioning API access is available [upon request](https://cloudinary.com/contact?plan=enterprise) for accounts on an [Enterprise plan](https://cloudinary.com/pricing#pricing-enterprise).


For more information, please visit [https://support.cloudinary.com](https://support.cloudinary.com).

## Installation & Usage

### Requirements

PHP 8.1 and later.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "git",
      "url": "git@github.com:cloudinary/account-provisioning-php.git"
    }
  ],
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



// Configure Cloudinary Account URL
$config = Cloudinary\Provisioning\Configuration::getDefaultConfiguration()
              ->setCloudinaryAccountUrl('account://provisioning_key:provisioning_secret@account_id');


$apiInstance = new Cloudinary\Provisioning\Api\AccessKeysApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$subAccountId = "abcde1fghij2klmno3pqrst4uvwxy5z"; // string | The ID of the product environment.
$key = "814814814814814"; // string | The access key (api key).

try {
    $result = $apiInstance->deleteAccessKey($subAccountId, $key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccessKeysApi->deleteAccessKey: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to https://api.cloudinary.com/v1_1/provisioning/accounts/ACCOUNT_ID, except if the operation defines another base path.

| Class | Method | HTTP request | Description |
| ------------ | ------------- | ------------- | ------------- |
| *AccessKeysApi* | [**deleteAccessKey**](docs/Api/AccessKeysApi.md#deleteaccesskey) | **DELETE** /sub_accounts/{sub_account_id}/access_keys/{key} | Delete access key |
| *AccessKeysApi* | [**deleteAccessKeyByName**](docs/Api/AccessKeysApi.md#deleteaccesskeybyname) | **DELETE** /sub_accounts/{sub_account_id}/access_keys | Delete access key by name |
| *AccessKeysApi* | [**generateAccessKey**](docs/Api/AccessKeysApi.md#generateaccesskey) | **POST** /sub_accounts/{sub_account_id}/access_keys | Generate an access key |
| *AccessKeysApi* | [**getAccessKeys**](docs/Api/AccessKeysApi.md#getaccesskeys) | **GET** /sub_accounts/{sub_account_id}/access_keys | Get access keys |
| *AccessKeysApi* | [**updateAccessKey**](docs/Api/AccessKeysApi.md#updateaccesskey) | **PUT** /sub_accounts/{sub_account_id}/access_keys/{key} | Update an access key |
| *ProductEnvironmentsApi* | [**createProductEnvironment**](docs/Api/ProductEnvironmentsApi.md#createproductenvironment) | **POST** /sub_accounts | Create product environment |
| *ProductEnvironmentsApi* | [**deleteProductEnvironment**](docs/Api/ProductEnvironmentsApi.md#deleteproductenvironment) | **DELETE** /sub_accounts/{sub_account_id} | Delete product environment |
| *ProductEnvironmentsApi* | [**getProductEnvironment**](docs/Api/ProductEnvironmentsApi.md#getproductenvironment) | **GET** /sub_accounts/{sub_account_id} | Get product environment |
| *ProductEnvironmentsApi* | [**getProductEnvironments**](docs/Api/ProductEnvironmentsApi.md#getproductenvironments) | **GET** /sub_accounts | Get product environments |
| *ProductEnvironmentsApi* | [**updateProductEnvironment**](docs/Api/ProductEnvironmentsApi.md#updateproductenvironment) | **PUT** /sub_accounts/{sub_account_id} | Update product environment |
| *UserGroupsApi* | [**addUserToUserGroup**](docs/Api/UserGroupsApi.md#addusertousergroup) | **POST** /user_groups/{group_id}/users/{user_id} | Add User to User Group |
| *UserGroupsApi* | [**createUserGroup**](docs/Api/UserGroupsApi.md#createusergroup) | **POST** /user_groups | Create User Group |
| *UserGroupsApi* | [**deleteUserGroup**](docs/Api/UserGroupsApi.md#deleteusergroup) | **DELETE** /user_groups/{group_id} | Delete User Group |
| *UserGroupsApi* | [**getUserGroup**](docs/Api/UserGroupsApi.md#getusergroup) | **GET** /user_groups/{group_id} | Get User Group |
| *UserGroupsApi* | [**getUserGroups**](docs/Api/UserGroupsApi.md#getusergroups) | **GET** /user_groups | Get User Groups |
| *UserGroupsApi* | [**getUsersInUserGroup**](docs/Api/UserGroupsApi.md#getusersinusergroup) | **GET** /user_groups/{group_id}/users | Get Users in User Group |
| *UserGroupsApi* | [**removeUserFromUserGroup**](docs/Api/UserGroupsApi.md#removeuserfromusergroup) | **DELETE** /user_groups/{group_id}/users/{user_id} | Remove User from User Group |
| *UserGroupsApi* | [**updateUserGroup**](docs/Api/UserGroupsApi.md#updateusergroup) | **PUT** /user_groups/{group_id} | Update User Group |
| *UsersApi* | [**createUser**](docs/Api/UsersApi.md#createuser) | **POST** /users | Create user |
| *UsersApi* | [**deleteUser**](docs/Api/UsersApi.md#deleteuser) | **DELETE** /users/{user_id} | Delete user |
| *UsersApi* | [**getUser**](docs/Api/UsersApi.md#getuser) | **GET** /users/{user_id} | Get user |
| *UsersApi* | [**getUsers**](docs/Api/UsersApi.md#getusers) | **GET** /users | Get users |
| *UsersApi* | [**updateUser**](docs/Api/UsersApi.md#updateuser) | **PUT** /users/{user_id} | Update user |

## Models

- [AccessKey](docs/Model/AccessKey.md)
- [AccessKeyRequest](docs/Model/AccessKeyRequest.md)
- [AccessKeyUpdateRequest](docs/Model/AccessKeyUpdateRequest.md)
- [AccessKeysResponse](docs/Model/AccessKeysResponse.md)
- [ApiAccessKey](docs/Model/ApiAccessKey.md)
- [ErrorResponse](docs/Model/ErrorResponse.md)
- [ErrorResponseError](docs/Model/ErrorResponseError.md)
- [ProductEnvironment](docs/Model/ProductEnvironment.md)
- [ProductEnvironmentRequest](docs/Model/ProductEnvironmentRequest.md)
- [ProductEnvironmentUpdateRequest](docs/Model/ProductEnvironmentUpdateRequest.md)
- [ProductEnvironmentsResponse](docs/Model/ProductEnvironmentsResponse.md)
- [SuccessResponse](docs/Model/SuccessResponse.md)
- [User](docs/Model/User.md)
- [UserGroup](docs/Model/UserGroup.md)
- [UserGroupRequest](docs/Model/UserGroupRequest.md)
- [UserGroupUser](docs/Model/UserGroupUser.md)
- [UserGroupUsersResponse](docs/Model/UserGroupUsersResponse.md)
- [UserGroupsResponse](docs/Model/UserGroupsResponse.md)
- [UserRequest](docs/Model/UserRequest.md)
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

This Cloudinary Account Provisioning API PHP package is automatically generated.

- Package version: `0.0.4`

- API version: `0.0.3`

- Build package: `org.openapitools.codegen.languages.PhpNextgenClientCodegen`
