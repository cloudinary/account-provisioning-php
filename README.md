# Cloudinary Account Provisioning PHP SDK

[![Packagist Version](https://img.shields.io/packagist/v/cloudinary/account-provisioning.svg)](https://packagist.org/packages/cloudinary/account-provisioning)
[![Packagist Downloads](https://img.shields.io/packagist/dm/cloudinary/account-provisioning.svg)](https://packagist.org/packages/cloudinary/account-provisioning)
[![License](https://img.shields.io/github/license/cloudinary/account-provisioning-php.svg)](https://github.com/cloudinary/account-provisioning-php/blob/main/LICENSE)

Developer-friendly & type-safe PHP SDK for the [Cloudinary Account Provisioning](https://cloudinary.com/documentation/provisioning_api_1) and Permissions APIs.

<!-- Start Summary [summary] -->
## Summary

Cloudinary Account Provisioning API: Accounts with provisioning API access can create and manage their **product environments**, **users** and **user groups** using the RESTful Provisioning API.

Provisioning API access is available [upon request](https://cloudinary.com/contact?plan=enterprise) for accounts on an [Enterprise plan](https://cloudinary.com/pricing#pricing-enterprise).

The API uses **Basic Authentication** over HTTPS. Your **Account API Key** and **Account API Secret** (previously referred to as **Provisioning API keys**) are used for the authentication. These credentials (as well as your ACCOUNT_ID) are located in the [Cloudinary Console](https://console.cloudinary.com/pm) under **Settings > Account API Keys**.

The Provisioning API has dedicated SDKs for the following languages:

* [JavaScript](https://github.com/cloudinary/account-provisioning-js)
* [PHP](https://github.com/cloudinary/account-provisioning-php)
* [Java](https://github.com/cloudinary/account-provisioning-java)

Useful links:
* [Provisioning API reference (Classic)](https://cloudinary.com/documentation/provisioning_api_1) (includes SDKs for additional languages)

Accounts with Permissions API access can assign roles, made up of system policies, to control what principals (users, groups, and API keys) can do across the Cloudinary account and product environments. For more information about Cloudinary roles and permissions, see the [Role-based permissions](permissions_overview) guide.

Permissions API access is available [upon request](https://cloudinary.com/contact?plan=enterprise) for accounts on an [Enterprise plan](https://cloudinary.com/pricing#pricing-enterprise).

The API uses **Basic Authentication** over HTTPS. Your **Account API Key** and **Account API Secret** (previously referred to as **Provisioning API keys**) are used for the authentication. These credentials (as well as your ACCOUNT_ID) are located in the [Cloudinary Console](https://console.cloudinary.com/app/settings/account-api-keys) under **Settings > Account API Keys**.

_**Important:**_

_Cloudinary's **Roles and Permissions Management** is now available as a **Beta**. This is an early stage release, and while it's functional and ready for real-world testing, it's subject to change as we continue refining the experience based on what we learn, including your feedback.
During the Beta period, core functionality is considered stable, though some APIs, scopes, or response formats may evolve._

_**How you can help:**_

* _Use Roles and Permissions Management in real projects, prototypes, or tests._
* _Share feedback, issues, or ideas with our support team._

_Thank you for exploring this early release and helping us shape these tools to best meet your needs._
<!-- End Summary [summary] -->

<!-- Start Table of Contents [toc] -->
## Table of Contents
<!-- $toc-max-depth=2 -->
* [Cloudinary Account Provisioning PHP SDK](#cloudinary-account-provisioning-php-sdk)
  * [SDK Installation](#sdk-installation)
  * [SDK Example Usage](#sdk-example-usage)
  * [Authentication](#authentication)
  * [Available Resources and Operations](#available-resources-and-operations)
  * [Global Parameters](#global-parameters)
  * [Error Handling](#error-handling)
  * [Server Selection](#server-selection)
* [Development](#development)
  * [Maturity](#maturity)
  * [Contributions](#contributions)

<!-- End Table of Contents [toc] -->

<!-- Start SDK Installation [installation] -->
## SDK Installation

The SDK relies on [Composer](https://getcomposer.org/) to manage its dependencies.

To install the SDK and add it as a dependency to an existing `composer.json` file:
```bash
composer require "cloudinary/account-provisioning"
```
<!-- End SDK Installation [installation] -->

<!-- Start SDK Example Usage [usage] -->
## SDK Example Usage

### Example

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Cloudinary\Account\Provisioning;
use Cloudinary\Account\Provisioning\Models\Components;
use Cloudinary\Account\Provisioning\Models\Operations;

$sdk = Provisioning\CldProvisioning::builder()
    ->setAccountId('<id>')
    ->setSecurity(
        new Components\Security(
            provisioningApiKey: 'CLOUDINARY_PROVISIONING_API_KEY',
            provisioningApiSecret: 'CLOUDINARY_PROVISIONING_API_SECRET',
        )
    )
    ->build();

$request = new Operations\GetProductEnvironmentsRequest(
    enabled: true,
    prefix: 'product',
);

$response = $sdk->productEnvironments->list(
    request: $request
);

if ($response->productEnvironmentsResponse !== null) {
    // handle response
}
```
<!-- End SDK Example Usage [usage] -->

<!-- Start Authentication [security] -->
## Authentication

### Per-Client Security Schemes

This SDK supports the following security scheme globally:

| Name                                             | Type | Scheme      | Environment Variable                                                       |
| ------------------------------------------------ | ---- | ----------- | -------------------------------------------------------------------------- |
| `provisioningApiKey`<br/>`provisioningApiSecret` | http | Custom HTTP | `CLOUDINARY_PROVISIONING_API_KEY`<br/>`CLOUDINARY_PROVISIONING_API_SECRET` |

You can set the security parameters through the `setSecurity` function on the `SDKBuilder` when initializing the SDK. For example:
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Cloudinary\Account\Provisioning;
use Cloudinary\Account\Provisioning\Models\Components;
use Cloudinary\Account\Provisioning\Models\Operations;

$sdk = Provisioning\CldProvisioning::builder()
    ->setSecurity(
        new Components\Security(
            provisioningApiKey: 'CLOUDINARY_PROVISIONING_API_KEY',
            provisioningApiSecret: 'CLOUDINARY_PROVISIONING_API_SECRET',
        )
    )
    ->setAccountId('<id>')
    ->build();

$request = new Operations\GetProductEnvironmentsRequest(
    enabled: true,
    prefix: 'product',
);

$response = $sdk->productEnvironments->list(
    request: $request
);

if ($response->productEnvironmentsResponse !== null) {
    // handle response
}
```
<!-- End Authentication [security] -->

<!-- Start Available Resources and Operations [operations] -->
## Available Resources and Operations

<details open>
<summary>Available methods</summary>

### [AccessKeys](docs/sdks/accesskeys/README.md)

* [list](docs/sdks/accesskeys/README.md#list) - Get access keys
* [generate](docs/sdks/accesskeys/README.md#generate) - Generate an access key
* [deleteByName](docs/sdks/accesskeys/README.md#deletebyname) - Delete access key by name
* [update](docs/sdks/accesskeys/README.md#update) - Update an access key
* [delete](docs/sdks/accesskeys/README.md#delete) - Delete access key

### [BillingUsage](docs/sdks/billingusage/README.md)

* [get](docs/sdks/billingusage/README.md#get) - Get billing usage information

### [CustomPolicies](docs/sdks/custompolicies/README.md)

* [list](docs/sdks/custompolicies/README.md#list) - Get custom policies
* [create](docs/sdks/custompolicies/README.md#create) - Create custom policy
* [get](docs/sdks/custompolicies/README.md#get) - Get custom policy
* [update](docs/sdks/custompolicies/README.md#update) - Update custom policy
* [delete](docs/sdks/custompolicies/README.md#delete) - Delete custom policy

### [EffectivePolicies](docs/sdks/effectivepolicies/README.md)

* [list](docs/sdks/effectivepolicies/README.md#list) - Get effective policies

### [Principals](docs/sdks/principals/README.md)

* [listRoles](docs/sdks/principals/README.md#listroles) - Get a principal's roles
* [updateRoles](docs/sdks/principals/README.md#updateroles) - Assign roles to a principal
* [inspect](docs/sdks/principals/README.md#inspect) - Inspect
* [inspectMultiple](docs/sdks/principals/README.md#inspectmultiple) - Inspect multiple

### [ProductEnvironments](docs/sdks/productenvironments/README.md)

* [list](docs/sdks/productenvironments/README.md#list) - Get product environments
* [create](docs/sdks/productenvironments/README.md#create) - Create product environment
* [get](docs/sdks/productenvironments/README.md#get) - Get product environment
* [update](docs/sdks/productenvironments/README.md#update) - Update product environment
* [delete](docs/sdks/productenvironments/README.md#delete) - Delete product environment

### [Public](docs/sdks/public/README.md)

* [getCatalog](docs/sdks/public/README.md#getcatalog) - Get system roles and policies catalog
* [validatePolicy](docs/sdks/public/README.md#validatepolicy) - Validate a Cedar policy
* [getSchema](docs/sdks/public/README.md#getschema) - Get Cedar schema

### [Roles](docs/sdks/roles/README.md)

* [list](docs/sdks/roles/README.md#list) - Get roles
* [create](docs/sdks/roles/README.md#create) - Create custom role
* [get](docs/sdks/roles/README.md#get) - Get role
* [update](docs/sdks/roles/README.md#update) - Update custom role
* [delete](docs/sdks/roles/README.md#delete) - Delete custom role
* [listPrincipals](docs/sdks/roles/README.md#listprincipals) - Get a role's principals
* [updatePrincipals](docs/sdks/roles/README.md#updateprincipals) - Assign principals to a role

### [SystemPolicies](docs/sdks/systempolicies/README.md)

* [list](docs/sdks/systempolicies/README.md#list) - Get system policies

### [UserGroups](docs/sdks/usergroups/README.md)

* [list](docs/sdks/usergroups/README.md#list) - Get User Groups
* [create](docs/sdks/usergroups/README.md#create) - Create User Group
* [get](docs/sdks/usergroups/README.md#get) - Get User Group
* [update](docs/sdks/usergroups/README.md#update) - Update User Group
* [delete](docs/sdks/usergroups/README.md#delete) - Delete User Group
* [listUsers](docs/sdks/usergroups/README.md#listusers) - Get Users in User Group
* [addUser](docs/sdks/usergroups/README.md#adduser) - Add User to User Group
* [removeUser](docs/sdks/usergroups/README.md#removeuser) - Remove User from User Group

### [Users](docs/sdks/users/README.md)

* [list](docs/sdks/users/README.md#list) - Get users
* [create](docs/sdks/users/README.md#create) - Create user
* [get](docs/sdks/users/README.md#get) - Get user
* [update](docs/sdks/users/README.md#update) - Update user
* [delete](docs/sdks/users/README.md#delete) - Delete user
* [getGroups](docs/sdks/users/README.md#getgroups) - Get user groups
* [listSubAccounts](docs/sdks/users/README.md#listsubaccounts) - Get user sub-accounts

</details>
<!-- End Available Resources and Operations [operations] -->

<!-- Start Global Parameters [global-parameters] -->
## Global Parameters

A parameter is configured globally. This parameter may be set on the SDK client instance itself during initialization. When configured as an option during SDK initialization, This global value will be used as the default on the operations that use it. When such operations are called, there is a place in each to override the global value, if needed.

For example, you can set `account_id` to `'<id>'` at SDK initialization and then you do not have to pass the same value on calls to operations like `list`. But if you want to do so you may, which will locally override the global setting. See the example code below for a demonstration.


### Available Globals

The following global parameter is available.
Global parameters can also be set via environment variable.

| Name      | Type   | Description | Environment           |
| --------- | ------ | ----------- | --------------------- |
| accountId | string | Account ID  | CLOUDINARY_ACCOUNT_ID |

### Example

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Cloudinary\Account\Provisioning;
use Cloudinary\Account\Provisioning\Models\Components;
use Cloudinary\Account\Provisioning\Models\Operations;

$sdk = Provisioning\CldProvisioning::builder()
    ->setAccountId('<id>')
    ->setSecurity(
        new Components\Security(
            provisioningApiKey: 'CLOUDINARY_PROVISIONING_API_KEY',
            provisioningApiSecret: 'CLOUDINARY_PROVISIONING_API_SECRET',
        )
    )
    ->build();

$request = new Operations\GetProductEnvironmentsRequest(
    enabled: true,
    prefix: 'product',
);

$response = $sdk->productEnvironments->list(
    request: $request
);

if ($response->productEnvironmentsResponse !== null) {
    // handle response
}
```
<!-- End Global Parameters [global-parameters] -->

<!-- Start Error Handling [errors] -->
## Error Handling

Handling errors in this SDK should largely match your expectations. All operations return a response object or throw an exception.

By default an API error will raise a `Errors\APIException` exception, which has the following properties:

| Property       | Type                                    | Description           |
|----------------|-----------------------------------------|-----------------------|
| `$message`     | *string*                                | The error message     |
| `$statusCode`  | *int*                                   | The HTTP status code  |
| `$rawResponse` | *?\Psr\Http\Message\ResponseInterface*  | The raw HTTP response |
| `$body`        | *string*                                | The response content  |

When custom error responses are specified for an operation, the SDK may also throw their associated exception. You can refer to respective *Errors* tables in SDK docs for more details on possible exception types for each operation. For example, the `list` method throws the following exceptions:

| Error Type           | Status Code                       | Content Type     |
| -------------------- | --------------------------------- | ---------------- |
| Errors\ErrorResponse | 400, 401, 403, 404, 409, 420, 429 | application/json |
| Errors\APIException  | 4XX, 5XX                          | \*/\*            |

### Example

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Cloudinary\Account\Provisioning;
use Cloudinary\Account\Provisioning\Models\Components;
use Cloudinary\Account\Provisioning\Models\Errors;
use Cloudinary\Account\Provisioning\Models\Operations;

$sdk = Provisioning\CldProvisioning::builder()
    ->setAccountId('<id>')
    ->setSecurity(
        new Components\Security(
            provisioningApiKey: 'CLOUDINARY_PROVISIONING_API_KEY',
            provisioningApiSecret: 'CLOUDINARY_PROVISIONING_API_SECRET',
        )
    )
    ->build();

try {
    $request = new Operations\GetProductEnvironmentsRequest(
        enabled: true,
        prefix: 'product',
    );

    $response = $sdk->productEnvironments->list(
        request: $request
    );

    if ($response->productEnvironmentsResponse !== null) {
        // handle response
    }
} catch (Errors\ErrorResponseThrowable $e) {
    // handle $e->$container data
    throw $e;
} catch (Errors\APIException $e) {
    // handle default exception
    throw $e;
}
```
<!-- End Error Handling [errors] -->

<!-- Start Server Selection [server] -->
## Server Selection

### Select Server by Index

You can override the default server globally using the `setServerIndex(int $serverIdx)` builder method when initializing the SDK client instance. The selected server will then be used as the default on the operations that use it. This table lists the indexes associated with the available servers:

| #   | Server                            | Variables | Description                                     |
| --- | --------------------------------- | --------- | ----------------------------------------------- |
| 0   | `https://{region}.cloudinary.com` | `region`  | Regional API endpoints for optimal performance. |
| 1   | `https://{host}`                  | `host`    | Custom domains for enterprise deployments.      |

If the selected server has variables, you may override its default values using the associated builder method(s):

| Variable | BuilderMethod                                 | Supported Values                            | Default                | Description                 |
| -------- | --------------------------------------------- | ------------------------------------------- | ---------------------- | --------------------------- |
| `region` | `setRegion(Provisioning\ServerRegion region)` | - `"api"`<br/>- `"api-eu"`<br/>- `"api-ap"` | `"api"`                | Regional endpoint selection |
| `host`   | `setHost(string host)`                        | string                                      | `"api.cloudinary.com"` | API host domain.            |

#### Example

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Cloudinary\Account\Provisioning;
use Cloudinary\Account\Provisioning\Models\Components;
use Cloudinary\Account\Provisioning\Models\Operations;

$sdk = Provisioning\CldProvisioning::builder()
    ->setServerIndex(0)
    ->setRegion('api-ap')
    ->setAccountId('<id>')
    ->setSecurity(
        new Components\Security(
            provisioningApiKey: 'CLOUDINARY_PROVISIONING_API_KEY',
            provisioningApiSecret: 'CLOUDINARY_PROVISIONING_API_SECRET',
        )
    )
    ->build();

$request = new Operations\GetProductEnvironmentsRequest(
    enabled: true,
    prefix: 'product',
);

$response = $sdk->productEnvironments->list(
    request: $request
);

if ($response->productEnvironmentsResponse !== null) {
    // handle response
}
```

### Override Server URL Per-Client

The default server can also be overridden globally using the `setServerUrl(string $serverUrl)` builder method when initializing the SDK client instance. For example:
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Cloudinary\Account\Provisioning;
use Cloudinary\Account\Provisioning\Models\Components;
use Cloudinary\Account\Provisioning\Models\Operations;

$sdk = Provisioning\CldProvisioning::builder()
    ->setServerURL('https://api.cloudinary.com')
    ->setAccountId('<id>')
    ->setSecurity(
        new Components\Security(
            provisioningApiKey: 'CLOUDINARY_PROVISIONING_API_KEY',
            provisioningApiSecret: 'CLOUDINARY_PROVISIONING_API_SECRET',
        )
    )
    ->build();

$request = new Operations\GetProductEnvironmentsRequest(
    enabled: true,
    prefix: 'product',
);

$response = $sdk->productEnvironments->list(
    request: $request
);

if ($response->productEnvironmentsResponse !== null) {
    // handle response
}
```
<!-- End Server Selection [server] -->

<!-- Placeholder for Future Speakeasy SDK Sections -->

# Development

## Maturity

This SDK is in beta, and there may be breaking changes between versions without a major version update. Therefore, we recommend pinning usage
to a specific package version. This way, you can install the same version each time without breaking changes unless you are intentionally
looking for the latest version.

## Contributions

While we value open-source contributions to this SDK, this library is generated programmatically. Any manual changes added to internal files will be overwritten on the next generation. 
We look forward to hearing your feedback. Feel free to open a PR or an issue with a proof of concept and we'll do our best to include it in a future release. 

### SDK Created by [Speakeasy](https://www.speakeasy.com/?utm_source=cloudinary/account-provisioning&utm_campaign=php)
