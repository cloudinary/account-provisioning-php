# Principals

## Overview

View roles associated with a specified principal, and add or remove a role associated with a principal.


### Available Operations

* [listRoles](#listroles) - Get a principal's roles
* [updateRoles](#updateroles) - Assign roles to a principal
* [inspect](#inspect) - Inspect
* [inspectMultiple](#inspectmultiple) - Inspect multiple

## listRoles

Retrieve all roles associated with a specific principal.

### Example Usage: GetPrincipalRolesExample

<!-- UsageSnippet language="php" operationID="getPrincipalRoles" method="get" path="/v2/accounts/{account_id}/permissions/principal_roles" example="GetPrincipalRolesExample" -->
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

$request = new Operations\GetPrincipalRolesRequest(
    principalType: Components\PrincipalTypeEnum::User,
    principalId: '<id>',
    permissionType: Components\PermissionTypeEnum::Global,
    managementType: Components\ManagementTypeEnum::System,
    scopeType: Components\ScopeTypeEnum::Prodenv,
    paramKey: [
        'folder_id',
    ],
    paramValue: [
        'asdfjkl12347890',
    ],
);

$response = $sdk->principals->listRoles(
    request: $request
);

if ($response->principalRolesResponse !== null) {
    // handle response
}
```
### Example Usage: GetPrincipalRolesWithParamKeyValueExample

<!-- UsageSnippet language="php" operationID="getPrincipalRoles" method="get" path="/v2/accounts/{account_id}/permissions/principal_roles" example="GetPrincipalRolesWithParamKeyValueExample" -->
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

$request = new Operations\GetPrincipalRolesRequest(
    principalType: Components\PrincipalTypeEnum::User,
    principalId: '<id>',
    permissionType: Components\PermissionTypeEnum::Global,
    managementType: Components\ManagementTypeEnum::System,
    scopeType: Components\ScopeTypeEnum::Prodenv,
    paramKey: [
        'folder_id',
    ],
    paramValue: [
        'asdfjkl12347890',
    ],
);

$response = $sdk->principals->listRoles(
    request: $request
);

if ($response->principalRolesResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\GetPrincipalRolesRequest](../../Models/Operations/GetPrincipalRolesRequest.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\GetPrincipalRolesResponse](../../Models/Operations/GetPrincipalRolesResponse.md)**

### Errors

| Error Type                      | Status Code                     | Content Type                    |
| ------------------------------- | ------------------------------- | ------------------------------- |
| Errors\PermissionsErrorResponse | 400, 401, 404                   | application/json                |
| Errors\PermissionsErrorResponse | 500                             | application/json                |
| Errors\APIException             | 4XX, 5XX                        | \*/\*                           |

## updateRoles

Add or remove roles associated with a principal.

### Example Usage: InvalidOperationFieldErrorExample

<!-- UsageSnippet language="php" operationID="updatePrincipalRoles" method="put" path="/v2/accounts/{account_id}/permissions/principal_roles" example="InvalidOperationFieldErrorExample" -->
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

$request = new Operations\UpdatePrincipalRolesRequest(
    body: new Components\UpdatePrincipalRolesRequest(
        operation: Components\OperationEnum::Add,
        principal: new Components\Principal(
            type: Components\PrincipalTypeEnum::User,
            id: '1234abc',
        ),
        roles: [
            new Components\RoleToManage(
                id: 'marketing_content_contributor_1357fhe',
                scopeId: '975l29lz02jt0836fhwi',
                policyParameters: new Components\RoleToManagePolicyParameters(),
            ),
        ],
    ),
);

$response = $sdk->principals->updateRoles(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```
### Example Usage: missingPrincipalFieldsErrorExample

<!-- UsageSnippet language="php" operationID="updatePrincipalRoles" method="put" path="/v2/accounts/{account_id}/permissions/principal_roles" example="missingPrincipalFieldsErrorExample" -->
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

$request = new Operations\UpdatePrincipalRolesRequest(
    body: new Components\UpdatePrincipalRolesRequest(
        operation: Components\OperationEnum::Add,
        principal: new Components\Principal(
            type: Components\PrincipalTypeEnum::User,
            id: '1234abc',
        ),
        roles: [
            new Components\RoleToManage(
                id: 'marketing_content_contributor_1357fhe',
                scopeId: '975l29lz02jt0836fhwi',
                policyParameters: new Components\RoleToManagePolicyParameters(),
            ),
        ],
    ),
);

$response = $sdk->principals->updateRoles(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                        | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `$request`                                                                                       | [Operations\UpdatePrincipalRolesRequest](../../Models/Operations/UpdatePrincipalRolesRequest.md) | :heavy_check_mark:                                                                               | The request object to use for the request.                                                       |

### Response

**[?Operations\UpdatePrincipalRolesResponse](../../Models/Operations/UpdatePrincipalRolesResponse.md)**

### Errors

| Error Type                      | Status Code                     | Content Type                    |
| ------------------------------- | ------------------------------- | ------------------------------- |
| Errors\PermissionsErrorResponse | 400, 401, 403, 404              | application/json                |
| Errors\APIException             | 4XX, 5XX                        | \*/\*                           |

## inspect

Retrieves principals and their assigned roles within a specified scope, based on query filters.

Use this endpoint to determine which users, groups, API keys, or account API keys have roles applied at:
* A specific `scope_type` ("account" or "prodenv")
* A specific `scope_id` (for product environments)
* Optional content filters (such as `folder_id`, `collection_id`, or `param_key` / `param_value`)
* Optional `principal_type` (and `principal_id`)

The response includes all principals that match the specified filters, along with the roles applied to them within that context.

This endpoint is useful when you want to:
* Audit who has access within a given scope
* Identify all principals assigned to roles for a specific folder, collection, asset, or product environment
* Retrieve role assignments dynamically based on filtering criteria


### Example Usage: InspectExampleAllFolders

<!-- UsageSnippet language="php" operationID="inspect" method="get" path="/v2/accounts/{account_id}/permissions/principal_roles/inspect" example="InspectExampleAllFolders" -->
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

$request = new Operations\InspectRequest(
    scopeType: Components\ScopeTypeEnum::Prodenv,
    principalType: Components\PrincipalTypeEnum::User,
    paramKey: [
        'folder_id',
    ],
    paramValue: [
        'asdfjkl12347890',
    ],
);

$response = $sdk->principals->inspect(
    request: $request
);

if ($response->principalRolesInspectResponse !== null) {
    // handle response
}
```
### Example Usage: InspectExampleFolder

<!-- UsageSnippet language="php" operationID="inspect" method="get" path="/v2/accounts/{account_id}/permissions/principal_roles/inspect" example="InspectExampleFolder" -->
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

$request = new Operations\InspectRequest(
    scopeType: Components\ScopeTypeEnum::Prodenv,
    principalType: Components\PrincipalTypeEnum::User,
    paramKey: [
        'folder_id',
    ],
    paramValue: [
        'asdfjkl12347890',
    ],
);

$response = $sdk->principals->inspect(
    request: $request
);

if ($response->principalRolesInspectResponse !== null) {
    // handle response
}
```
### Example Usage: InspectExampleProdEnv

<!-- UsageSnippet language="php" operationID="inspect" method="get" path="/v2/accounts/{account_id}/permissions/principal_roles/inspect" example="InspectExampleProdEnv" -->
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

$request = new Operations\InspectRequest(
    scopeType: Components\ScopeTypeEnum::Prodenv,
    principalType: Components\PrincipalTypeEnum::User,
    paramKey: [
        'folder_id',
    ],
    paramValue: [
        'asdfjkl12347890',
    ],
);

$response = $sdk->principals->inspect(
    request: $request
);

if ($response->principalRolesInspectResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                              | Type                                                                   | Required                                                               | Description                                                            |
| ---------------------------------------------------------------------- | ---------------------------------------------------------------------- | ---------------------------------------------------------------------- | ---------------------------------------------------------------------- |
| `$request`                                                             | [Operations\InspectRequest](../../Models/Operations/InspectRequest.md) | :heavy_check_mark:                                                     | The request object to use for the request.                             |

### Response

**[?Operations\InspectResponse](../../Models/Operations/InspectResponse.md)**

### Errors

| Error Type                      | Status Code                     | Content Type                    |
| ------------------------------- | ------------------------------- | ------------------------------- |
| Errors\PermissionsErrorResponse | 400, 401, 404                   | application/json                |
| Errors\PermissionsErrorResponse | 500                             | application/json                |
| Errors\APIException             | 4XX, 5XX                        | \*/\*                           |

## inspectMultiple

Retrieves role assignments for a specified list of principals within a shared scope and optional policy parameters.

Use this endpoint when you already know which principals you want to evaluate and want to check their role assignments in a single request.

In this request:
* You explicitly provide the `principals` array in the request body.
* All principals are evaluated against the same `scope_type`, optional `scope_id`, and optional `policy_parameters`.
* Unlike `Inspect`, this endpoint doesn't search for matching principals. It evaluates only the principals you provide.

This endpoint is useful for:
* Verify role assignments for multiple specified principals at once
* Comparing role assignments across specific users, groups, or keys
* Reducing multiple per-principal `Inspect` calls into a single request


### Example Usage: InspectMultipleRequestExample

<!-- UsageSnippet language="php" operationID="inspectMultiple" method="post" path="/v2/accounts/{account_id}/permissions/principal_roles/inspect" example="InspectMultipleRequestExample" -->
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

$request = new Operations\InspectMultipleRequest(
    body: new Components\InspectRequest(
        scopeType: Components\ScopeTypeEnum::Prodenv,
        scopeId: '975l29lz02jt0836fhwi',
        principals: [
            new Components\Principal(
                type: Components\PrincipalTypeEnum::User,
                id: '1234abc',
            ),
            new Components\Principal(
                type: Components\PrincipalTypeEnum::User,
                id: '4567xyz',
            ),
            new Components\Principal(
                type: Components\PrincipalTypeEnum::ApiKey,
                id: 'a382ltieo893jhioqpg8urp',
            ),
        ],
        policyParameters: new Components\InspectRequestPolicyParameters(),
    ),
);

$response = $sdk->principals->inspectMultiple(
    request: $request
);

if ($response->principalRolesInspectResponse !== null) {
    // handle response
}
```
### Example Usage: InspectMultipleResponseExample

<!-- UsageSnippet language="php" operationID="inspectMultiple" method="post" path="/v2/accounts/{account_id}/permissions/principal_roles/inspect" example="InspectMultipleResponseExample" -->
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

$request = new Operations\InspectMultipleRequest(
    body: new Components\InspectRequest(
        scopeType: Components\ScopeTypeEnum::Prodenv,
        principals: [
            new Components\Principal(
                type: Components\PrincipalTypeEnum::User,
                id: '1234abc',
            ),
        ],
    ),
);

$response = $sdk->principals->inspectMultiple(
    request: $request
);

if ($response->principalRolesInspectResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                              | Type                                                                                   | Required                                                                               | Description                                                                            |
| -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- |
| `$request`                                                                             | [Operations\InspectMultipleRequest](../../Models/Operations/InspectMultipleRequest.md) | :heavy_check_mark:                                                                     | The request object to use for the request.                                             |

### Response

**[?Operations\InspectMultipleResponse](../../Models/Operations/InspectMultipleResponse.md)**

### Errors

| Error Type                      | Status Code                     | Content Type                    |
| ------------------------------- | ------------------------------- | ------------------------------- |
| Errors\PermissionsErrorResponse | 400, 401, 404                   | application/json                |
| Errors\PermissionsErrorResponse | 500                             | application/json                |
| Errors\APIException             | 4XX, 5XX                        | \*/\*                           |