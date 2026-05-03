# Roles

## Overview

All roles include one or more predefined **system policies**, and can be applied to principals to enforce these policies.

You can **manage custom roles**, where you select the system policies.

You can **view system roles**, which contain a fixed set of system policies and are provided by Cloudinary.


### Available Operations

* [list](#list) - Get roles
* [create](#create) - Create custom role
* [get](#get) - Get role
* [update](#update) - Update custom role
* [delete](#delete) - Delete custom role
* [listPrincipals](#listprincipals) - Get a role's principals
* [updatePrincipals](#updateprincipals) - Assign principals to a role

## list

Retrieve all system and custom roles of a specific `permission_type` (global or content-specific). Optionally filter by `scope_type`, `management_type`, and `policy_parameters`.


### Example Usage

<!-- UsageSnippet language="php" operationID="getRoles" method="get" path="/v2/accounts/{account_id}/permissions/roles" example="GetRolesExample" -->
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

$request = new Operations\GetRolesRequest(
    scopeType: Components\ScopeTypeEnum::Prodenv,
    permissionType: Components\PermissionTypeEnum::Global,
    managementType: Components\ManagementTypeEnum::System,
);

$response = $sdk->roles->list(
    request: $request
);

if ($response->rolesResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                | Type                                                                     | Required                                                                 | Description                                                              |
| ------------------------------------------------------------------------ | ------------------------------------------------------------------------ | ------------------------------------------------------------------------ | ------------------------------------------------------------------------ |
| `$request`                                                               | [Operations\GetRolesRequest](../../Models/Operations/GetRolesRequest.md) | :heavy_check_mark:                                                       | The request object to use for the request.                               |

### Response

**[?Operations\GetRolesResponse](../../Models/Operations/GetRolesResponse.md)**

### Errors

| Error Type                      | Status Code                     | Content Type                    |
| ------------------------------- | ------------------------------- | ------------------------------- |
| Errors\PermissionsErrorResponse | 401, 403                        | application/json                |
| Errors\PermissionsErrorResponse | 500                             | application/json                |
| Errors\APIException             | 4XX, 5XX                        | \*/\*                           |

## create

Create a new custom role.

### Example Usage: createAcctRoleExample

<!-- UsageSnippet language="php" operationID="createRole" method="post" path="/v2/accounts/{account_id}/permissions/roles" example="createAcctRoleExample" -->
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

$request = new Operations\CreateRoleRequest(
    body: new Components\CreateRole(
        id: 'sensitive_account_details_manager_88825hl',
        permissionType: 'global',
        scopeType: Components\ScopeTypeEnum::Account,
        name: 'Sensitive account details manager',
        description: 'Responsible for managing users and account security.',
        systemPolicyIds: [
            'cld::global::users_and_groups::manage',
            'cld::policy::global::account_security::manage',
        ],
    ),
);

$response = $sdk->roles->create(
    request: $request
);

if ($response->roleResponse !== null) {
    // handle response
}
```
### Example Usage: createAcctRoleResponseExample

<!-- UsageSnippet language="php" operationID="createRole" method="post" path="/v2/accounts/{account_id}/permissions/roles" example="createAcctRoleResponseExample" -->
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

$request = new Operations\CreateRoleRequest(
    body: new Components\CreateRole(
        id: 'upload_manager_12334565',
        permissionType: 'global',
        scopeType: Components\ScopeTypeEnum::Prodenv,
        name: 'Upload manager',
        description: 'Responsible for managing upload presets and uploading new assets.',
        systemPolicyIds: [
            'cld::policy::global::upload_presets::manage',
            'cld::policy::global::folder_and_asset_management::create_asset',
        ],
    ),
);

$response = $sdk->roles->create(
    request: $request
);

if ($response->roleResponse !== null) {
    // handle response
}
```
### Example Usage: createContentRoleExample

<!-- UsageSnippet language="php" operationID="createRole" method="post" path="/v2/accounts/{account_id}/permissions/roles" example="createContentRoleExample" -->
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

$request = new Operations\CreateRoleRequest(
    body: new Components\CreateRole(
        id: 'marketing_content_contributor_1357fhe',
        permissionType: 'content',
        scopeType: Components\ScopeTypeEnum::Prodenv,
        name: 'Marketing content contributor',
        description: 'View all assets in selected folders and contribute to those folders, without permission to download.',
        systemPolicyIds: [
            'cld::policy::content::folder::view_download',
            'cld::policy::content::folder::add_assets',
        ],
    ),
);

$response = $sdk->roles->create(
    request: $request
);

if ($response->roleResponse !== null) {
    // handle response
}
```
### Example Usage: createContentRoleResponseExample

<!-- UsageSnippet language="php" operationID="createRole" method="post" path="/v2/accounts/{account_id}/permissions/roles" example="createContentRoleResponseExample" -->
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

$request = new Operations\CreateRoleRequest(
    body: new Components\CreateRole(
        id: 'upload_manager_12334565',
        permissionType: 'global',
        scopeType: Components\ScopeTypeEnum::Prodenv,
        name: 'Upload manager',
        description: 'Responsible for managing upload presets and uploading new assets.',
        systemPolicyIds: [
            'cld::policy::global::upload_presets::manage',
            'cld::policy::global::folder_and_asset_management::create_asset',
        ],
    ),
);

$response = $sdk->roles->create(
    request: $request
);

if ($response->roleResponse !== null) {
    // handle response
}
```
### Example Usage: createGlobalRoleExample

<!-- UsageSnippet language="php" operationID="createRole" method="post" path="/v2/accounts/{account_id}/permissions/roles" example="createGlobalRoleExample" -->
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

$request = new Operations\CreateRoleRequest(
    body: new Components\CreateRole(
        id: 'upload_manager_12334565',
        permissionType: 'global',
        scopeType: Components\ScopeTypeEnum::Prodenv,
        name: 'Upload manager',
        description: 'Responsible for managing uploads and uploading new assets.',
        systemPolicyIds: [
            'cld::policy::global::upload_presets::manage',
            'cld::policy::global::folder_and_asset_management::create_asset',
        ],
    ),
);

$response = $sdk->roles->create(
    request: $request
);

if ($response->roleResponse !== null) {
    // handle response
}
```
### Example Usage: createGlobalRoleResponseExample

<!-- UsageSnippet language="php" operationID="createRole" method="post" path="/v2/accounts/{account_id}/permissions/roles" example="createGlobalRoleResponseExample" -->
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

$request = new Operations\CreateRoleRequest(
    body: new Components\CreateRole(
        id: 'upload_manager_12334565',
        permissionType: 'global',
        scopeType: Components\ScopeTypeEnum::Prodenv,
        name: 'Upload manager',
        description: 'Responsible for managing upload presets and uploading new assets.',
        systemPolicyIds: [
            'cld::policy::global::upload_presets::manage',
            'cld::policy::global::folder_and_asset_management::create_asset',
        ],
    ),
);

$response = $sdk->roles->create(
    request: $request
);

if ($response->roleResponse !== null) {
    // handle response
}
```
### Example Usage: invalidFieldErrorExample

<!-- UsageSnippet language="php" operationID="createRole" method="post" path="/v2/accounts/{account_id}/permissions/roles" example="invalidFieldErrorExample" -->
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

$request = new Operations\CreateRoleRequest(
    body: new Components\CreateRole(
        id: 'upload_manager_12334565',
        permissionType: 'global',
        scopeType: Components\ScopeTypeEnum::Prodenv,
        name: 'Upload manager',
        description: 'Responsible for managing upload presets and uploading new assets.',
        systemPolicyIds: [
            'cld::policy::global::upload_presets::manage',
            'cld::policy::global::folder_and_asset_management::create_asset',
        ],
    ),
);

$response = $sdk->roles->create(
    request: $request
);

if ($response->roleResponse !== null) {
    // handle response
}
```
### Example Usage: missingFieldsErrorExample

<!-- UsageSnippet language="php" operationID="createRole" method="post" path="/v2/accounts/{account_id}/permissions/roles" example="missingFieldsErrorExample" -->
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

$request = new Operations\CreateRoleRequest(
    body: new Components\CreateRole(
        id: 'upload_manager_12334565',
        permissionType: 'global',
        scopeType: Components\ScopeTypeEnum::Prodenv,
        name: 'Upload manager',
        description: 'Responsible for managing upload presets and uploading new assets.',
        systemPolicyIds: [
            'cld::policy::global::upload_presets::manage',
            'cld::policy::global::folder_and_asset_management::create_asset',
        ],
    ),
);

$response = $sdk->roles->create(
    request: $request
);

if ($response->roleResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                    | Type                                                                         | Required                                                                     | Description                                                                  |
| ---------------------------------------------------------------------------- | ---------------------------------------------------------------------------- | ---------------------------------------------------------------------------- | ---------------------------------------------------------------------------- |
| `$request`                                                                   | [Operations\CreateRoleRequest](../../Models/Operations/CreateRoleRequest.md) | :heavy_check_mark:                                                           | The request object to use for the request.                                   |

### Response

**[?Operations\CreateRoleResponse](../../Models/Operations/CreateRoleResponse.md)**

### Errors

| Error Type                      | Status Code                     | Content Type                    |
| ------------------------------- | ------------------------------- | ------------------------------- |
| Errors\PermissionsErrorResponse | 400, 401, 403, 409              | application/json                |
| Errors\PermissionsErrorResponse | 500                             | application/json                |
| Errors\APIException             | 4XX, 5XX                        | \*/\*                           |

## get

Get a specific system or custom role.

### Example Usage

<!-- UsageSnippet language="php" operationID="getRole" method="get" path="/v2/accounts/{account_id}/permissions/roles/{role_id}" example="GetRoleExample" -->
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

$request = new Operations\GetRoleRequest(
    roleId: '<id>',
    paramKey: [
        'folder_id',
    ],
    paramValue: [
        'asdfjkl12347890',
    ],
);

$response = $sdk->roles->get(
    request: $request
);

if ($response->roleResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                              | Type                                                                   | Required                                                               | Description                                                            |
| ---------------------------------------------------------------------- | ---------------------------------------------------------------------- | ---------------------------------------------------------------------- | ---------------------------------------------------------------------- |
| `$request`                                                             | [Operations\GetRoleRequest](../../Models/Operations/GetRoleRequest.md) | :heavy_check_mark:                                                     | The request object to use for the request.                             |

### Response

**[?Operations\GetRoleResponse](../../Models/Operations/GetRoleResponse.md)**

### Errors

| Error Type                      | Status Code                     | Content Type                    |
| ------------------------------- | ------------------------------- | ------------------------------- |
| Errors\PermissionsErrorResponse | 401, 403, 404                   | application/json                |
| Errors\APIException             | 4XX, 5XX                        | \*/\*                           |

## update

Update a specific custom role by providing all relevant details, including those you want to keep as-is.

*Note:* Updating a role with a name that already exists will trigger a 409 error.


### Example Usage: invalidPolicyIDFieldErrorExample

<!-- UsageSnippet language="php" operationID="updateRole" method="put" path="/v2/accounts/{account_id}/permissions/roles/{role_id}" example="invalidPolicyIDFieldErrorExample" -->
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

$request = new Operations\UpdateRoleRequest(
    roleId: '<id>',
    body: new Components\Role(
        name: 'Upload manager',
        description: 'Responsible for managing upload presets and uploading new assets.',
        systemPolicyIds: [
            'cld::policy::global::upload_presets::manage',
            'cld::policy::global::folder_and_asset_management::create_asset',
        ],
    ),
);

$response = $sdk->roles->update(
    request: $request
);

if ($response->roleResponse !== null) {
    // handle response
}
```
### Example Usage: missingFieldsErrorExample

<!-- UsageSnippet language="php" operationID="updateRole" method="put" path="/v2/accounts/{account_id}/permissions/roles/{role_id}" example="missingFieldsErrorExample" -->
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

$request = new Operations\UpdateRoleRequest(
    roleId: '<id>',
    body: new Components\Role(
        name: 'Upload manager',
        description: 'Responsible for managing upload presets and uploading new assets.',
        systemPolicyIds: [
            'cld::policy::global::upload_presets::manage',
            'cld::policy::global::folder_and_asset_management::create_asset',
        ],
    ),
);

$response = $sdk->roles->update(
    request: $request
);

if ($response->roleResponse !== null) {
    // handle response
}
```
### Example Usage: updatePolicyResponse

<!-- UsageSnippet language="php" operationID="updateRole" method="put" path="/v2/accounts/{account_id}/permissions/roles/{role_id}" example="updatePolicyResponse" -->
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

$request = new Operations\UpdateRoleRequest(
    roleId: '<id>',
    body: new Components\Role(
        name: 'Upload manager',
        description: 'Responsible for managing upload presets and uploading new assets.',
        systemPolicyIds: [
            'cld::policy::global::upload_presets::manage',
            'cld::policy::global::folder_and_asset_management::create_asset',
        ],
    ),
);

$response = $sdk->roles->update(
    request: $request
);

if ($response->roleResponse !== null) {
    // handle response
}
```
### Example Usage: updateRoleExample

<!-- UsageSnippet language="php" operationID="updateRole" method="put" path="/v2/accounts/{account_id}/permissions/roles/{role_id}" example="updateRoleExample" -->
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

$request = new Operations\UpdateRoleRequest(
    roleId: '<id>',
    body: new Components\Role(
        name: 'Upload manager',
        description: 'Responsible for managing uploads and uploading new assets.',
        systemPolicyIds: [
            'cld::policy::global::upload_presets::manage',
            'cld::policy::global::folder_and_asset_management::create_asset',
        ],
    ),
);

$response = $sdk->roles->update(
    request: $request
);

if ($response->roleResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                    | Type                                                                         | Required                                                                     | Description                                                                  |
| ---------------------------------------------------------------------------- | ---------------------------------------------------------------------------- | ---------------------------------------------------------------------------- | ---------------------------------------------------------------------------- |
| `$request`                                                                   | [Operations\UpdateRoleRequest](../../Models/Operations/UpdateRoleRequest.md) | :heavy_check_mark:                                                           | The request object to use for the request.                                   |

### Response

**[?Operations\UpdateRoleResponse](../../Models/Operations/UpdateRoleResponse.md)**

### Errors

| Error Type                      | Status Code                     | Content Type                    |
| ------------------------------- | ------------------------------- | ------------------------------- |
| Errors\PermissionsErrorResponse | 400, 401, 403, 404, 409         | application/json                |
| Errors\PermissionsErrorResponse | 500                             | application/json                |
| Errors\APIException             | 4XX, 5XX                        | \*/\*                           |

## delete

Delete a specific custom role.

### Example Usage

<!-- UsageSnippet language="php" operationID="deleteRole" method="delete" path="/v2/accounts/{account_id}/permissions/roles/{role_id}" -->
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

$request = new Operations\DeleteRoleRequest(
    roleId: '<id>',
);

$response = $sdk->roles->delete(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                    | Type                                                                         | Required                                                                     | Description                                                                  |
| ---------------------------------------------------------------------------- | ---------------------------------------------------------------------------- | ---------------------------------------------------------------------------- | ---------------------------------------------------------------------------- |
| `$request`                                                                   | [Operations\DeleteRoleRequest](../../Models/Operations/DeleteRoleRequest.md) | :heavy_check_mark:                                                           | The request object to use for the request.                                   |

### Response

**[?Operations\DeleteRoleResponse](../../Models/Operations/DeleteRoleResponse.md)**

### Errors

| Error Type                      | Status Code                     | Content Type                    |
| ------------------------------- | ------------------------------- | ------------------------------- |
| Errors\PermissionsErrorResponse | 401, 403, 404                   | application/json                |
| Errors\APIException             | 4XX, 5XX                        | \*/\*                           |

## listPrincipals

Retrieve all principals associated with a specific role.

### Example Usage: GetRolePrincipalsExample

<!-- UsageSnippet language="php" operationID="getRolePrincipals" method="get" path="/v2/accounts/{account_id}/permissions/roles/{role_id}/principals" example="GetRolePrincipalsExample" -->
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

$request = new Operations\GetRolePrincipalsRequest(
    roleId: '<id>',
    scopeType: Components\ScopeTypeEnum::Prodenv,
    paramKey: [
        'folder_id',
    ],
    paramValue: [
        'asdfjkl12347890',
    ],
);

$response = $sdk->roles->listPrincipals(
    request: $request
);

if ($response->principalsResponse !== null) {
    // handle response
}
```
### Example Usage: GetRolePrincipalsWithParamKeyValueExample

<!-- UsageSnippet language="php" operationID="getRolePrincipals" method="get" path="/v2/accounts/{account_id}/permissions/roles/{role_id}/principals" example="GetRolePrincipalsWithParamKeyValueExample" -->
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

$request = new Operations\GetRolePrincipalsRequest(
    roleId: '<id>',
    scopeType: Components\ScopeTypeEnum::Prodenv,
    paramKey: [
        'folder_id',
    ],
    paramValue: [
        'asdfjkl12347890',
    ],
);

$response = $sdk->roles->listPrincipals(
    request: $request
);

if ($response->principalsResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\GetRolePrincipalsRequest](../../Models/Operations/GetRolePrincipalsRequest.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\GetRolePrincipalsResponse](../../Models/Operations/GetRolePrincipalsResponse.md)**

### Errors

| Error Type                      | Status Code                     | Content Type                    |
| ------------------------------- | ------------------------------- | ------------------------------- |
| Errors\PermissionsErrorResponse | 401, 403, 404                   | application/json                |
| Errors\APIException             | 4XX, 5XX                        | \*/\*                           |

## updatePrincipals

Add or remove principals associated with a role.

### Example Usage: invalidOperationFieldErrorExample

<!-- UsageSnippet language="php" operationID="updateRolePrincipals" method="put" path="/v2/accounts/{account_id}/permissions/roles/{role_id}/principals" example="invalidOperationFieldErrorExample" -->
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

$request = new Operations\UpdateRolePrincipalsRequest(
    roleId: '<id>',
    body: new Components\UpdateRolePrincipalsRequest(
        operation: Components\OperationEnum::Add,
        principals: [
            new Components\UpdateRolePrincipal(
                principalType: Components\PrincipalTypeEnum::User,
                principalId: '1234abc',
                scopeId: '975l29lz02jt0836fhwi',
                policyParameters: new Components\UpdateRolePrincipalPolicyParameters(),
            ),
        ],
    ),
);

$response = $sdk->roles->updatePrincipals(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```
### Example Usage: missingFieldsErrorExample

<!-- UsageSnippet language="php" operationID="updateRolePrincipals" method="put" path="/v2/accounts/{account_id}/permissions/roles/{role_id}/principals" example="missingFieldsErrorExample" -->
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

$request = new Operations\UpdateRolePrincipalsRequest(
    roleId: '<id>',
    body: new Components\UpdateRolePrincipalsRequest(
        operation: Components\OperationEnum::Add,
        principals: [
            new Components\UpdateRolePrincipal(
                principalType: Components\PrincipalTypeEnum::User,
                principalId: '1234abc',
                scopeId: '975l29lz02jt0836fhwi',
                policyParameters: new Components\UpdateRolePrincipalPolicyParameters(),
            ),
        ],
    ),
);

$response = $sdk->roles->updatePrincipals(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                        | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `$request`                                                                                       | [Operations\UpdateRolePrincipalsRequest](../../Models/Operations/UpdateRolePrincipalsRequest.md) | :heavy_check_mark:                                                                               | The request object to use for the request.                                                       |

### Response

**[?Operations\UpdateRolePrincipalsResponse](../../Models/Operations/UpdateRolePrincipalsResponse.md)**

### Errors

| Error Type                      | Status Code                     | Content Type                    |
| ------------------------------- | ------------------------------- | ------------------------------- |
| Errors\PermissionsErrorResponse | 400, 401, 403, 404              | application/json                |
| Errors\APIException             | 4XX, 5XX                        | \*/\*                           |