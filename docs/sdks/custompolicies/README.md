# CustomPolicies

## Overview

### Available Operations

* [list](#list) - Get custom policies
* [create](#create) - Create custom policy
* [get](#get) - Get custom policy
* [update](#update) - Update custom policy
* [delete](#delete) - Delete custom policy

## list

Retrieve all custom permission policies defined for a specific scope. The scope can be at the account level or within a specific product environment.

**Notes:**
  * If `scope_type` isn't specified as `prodenv`, the account-level policies will be returned.

  * If `scope_type` is specified as `prodenv`, `scope_id` is required.


### Example Usage

<!-- UsageSnippet language="php" operationID="getCustomPolicies" method="get" path="/v2/accounts/{account_id}/permissions/policies/custom" example="CustomPoliciesExample" -->
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

$request = new Operations\GetCustomPoliciesRequest(
    scopeType: Components\ScopeTypeEnum::Prodenv,
);

$response = $sdk->customPolicies->list(
    request: $request
);

if ($response->customPoliciesResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\GetCustomPoliciesRequest](../../Models/Operations/GetCustomPoliciesRequest.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\GetCustomPoliciesResponse](../../Models/Operations/GetCustomPoliciesResponse.md)**

### Errors

| Error Type                      | Status Code                     | Content Type                    |
| ------------------------------- | ------------------------------- | ------------------------------- |
| Errors\PermissionsErrorResponse | 401, 403                        | application/json                |
| Errors\PermissionsErrorResponse | 500                             | application/json                |
| Errors\APIException             | 4XX, 5XX                        | \*/\*                           |

## create

Create a new custom policy with a statement defined in Cedar. This policy specifies permissions for a principal, allowing a specific action on a designated resource, within a particular scope.

Learn more about creating a new custom policy
<https://cloudinary.com/documentation/permissions_api_guide#create_a_policy_statement>

### Example Usage: cedarErrorExample

<!-- UsageSnippet language="php" operationID="createCustomPolicy" method="post" path="/v2/accounts/{account_id}/permissions/policies/custom" example="cedarErrorExample" -->
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

$request = new Operations\CreateCustomPolicyRequest(
    body: new Components\CustomPolicy(
        policyStatement: 'permit(principal == Cloudinary::APIKey::\\"1234\\",action==Cloudinary::Action::\\"read\\",resource is Cloudinary::Folder ) when {resource.ancestor_ids.contains(\\"asdfjkl12347890\\")} ;\n',
        description: 'Permit read access to the Clothing folder with external ID asdfjkl12347890.',
        scopeType: Components\ScopeTypeEnum::Prodenv,
        scopeId: '975l29lz02jt0836fhwi',
        name: 'Read access to Clothing folder',
    ),
);

$response = $sdk->customPolicies->create(
    request: $request
);

if ($response->customPolicyResponse !== null) {
    // handle response
}
```
### Example Usage: createCustomPolicyExample

<!-- UsageSnippet language="php" operationID="createCustomPolicy" method="post" path="/v2/accounts/{account_id}/permissions/policies/custom" example="createCustomPolicyExample" -->
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

$request = new Operations\CreateCustomPolicyRequest(
    body: new Components\CustomPolicy(
        policyStatement: 'permit(principal == Cloudinary::APIKey::"1234",action==Cloudinary::Action::"read",resource is Cloudinary::Folder ) when {resource.ancestor_ids.contains("asdfjkl12347890")} ;',
        description: 'Permit read access to the Clothing folder with external ID asdfjkl12347890.',
        scopeType: Components\ScopeTypeEnum::Prodenv,
        scopeId: '975l29lz02jt0836fhwi',
        name: 'Read access to Clothing folder',
    ),
);

$response = $sdk->customPolicies->create(
    request: $request
);

if ($response->customPolicyResponse !== null) {
    // handle response
}
```
### Example Usage: createPolicyResponse

<!-- UsageSnippet language="php" operationID="createCustomPolicy" method="post" path="/v2/accounts/{account_id}/permissions/policies/custom" example="createPolicyResponse" -->
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

$request = new Operations\CreateCustomPolicyRequest(
    body: new Components\CustomPolicy(
        policyStatement: 'permit(principal == Cloudinary::APIKey::\\"1234\\",action==Cloudinary::Action::\\"read\\",resource is Cloudinary::Folder ) when {resource.ancestor_ids.contains(\\"asdfjkl12347890\\")} ;\n',
        description: 'Permit read access to the Clothing folder with external ID asdfjkl12347890.',
        scopeType: Components\ScopeTypeEnum::Prodenv,
        scopeId: '975l29lz02jt0836fhwi',
        name: 'Read access to Clothing folder',
    ),
);

$response = $sdk->customPolicies->create(
    request: $request
);

if ($response->customPolicyResponse !== null) {
    // handle response
}
```
### Example Usage: invalidFieldErrorExample

<!-- UsageSnippet language="php" operationID="createCustomPolicy" method="post" path="/v2/accounts/{account_id}/permissions/policies/custom" example="invalidFieldErrorExample" -->
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

$request = new Operations\CreateCustomPolicyRequest(
    body: new Components\CustomPolicy(
        policyStatement: 'permit(principal == Cloudinary::APIKey::\\"1234\\",action==Cloudinary::Action::\\"read\\",resource is Cloudinary::Folder ) when {resource.ancestor_ids.contains(\\"asdfjkl12347890\\")} ;\n',
        description: 'Permit read access to the Clothing folder with external ID asdfjkl12347890.',
        scopeType: Components\ScopeTypeEnum::Prodenv,
        scopeId: '975l29lz02jt0836fhwi',
        name: 'Read access to Clothing folder',
    ),
);

$response = $sdk->customPolicies->create(
    request: $request
);

if ($response->customPolicyResponse !== null) {
    // handle response
}
```
### Example Usage: missingFieldsErrorExample

<!-- UsageSnippet language="php" operationID="createCustomPolicy" method="post" path="/v2/accounts/{account_id}/permissions/policies/custom" example="missingFieldsErrorExample" -->
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

$request = new Operations\CreateCustomPolicyRequest(
    body: new Components\CustomPolicy(
        policyStatement: 'permit(principal == Cloudinary::APIKey::\\"1234\\",action==Cloudinary::Action::\\"read\\",resource is Cloudinary::Folder ) when {resource.ancestor_ids.contains(\\"asdfjkl12347890\\")} ;\n',
        description: 'Permit read access to the Clothing folder with external ID asdfjkl12347890.',
        scopeType: Components\ScopeTypeEnum::Prodenv,
        scopeId: '975l29lz02jt0836fhwi',
        name: 'Read access to Clothing folder',
    ),
);

$response = $sdk->customPolicies->create(
    request: $request
);

if ($response->customPolicyResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\CreateCustomPolicyRequest](../../Models/Operations/CreateCustomPolicyRequest.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\CreateCustomPolicyResponse](../../Models/Operations/CreateCustomPolicyResponse.md)**

### Errors

| Error Type                      | Status Code                     | Content Type                    |
| ------------------------------- | ------------------------------- | ------------------------------- |
| Errors\PermissionsErrorResponse | 400, 401, 403, 409              | application/json                |
| Errors\PermissionsErrorResponse | 500                             | application/json                |
| Errors\APIException             | 4XX, 5XX                        | \*/\*                           |

## get

Get a specific custom policy.

### Example Usage

<!-- UsageSnippet language="php" operationID="getCustomPolicy" method="get" path="/v2/accounts/{account_id}/permissions/policies/custom/{policy_id}" example="CustomPolicyExample" -->
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

$request = new Operations\GetCustomPolicyRequest(
    policyId: '<id>',
);

$response = $sdk->customPolicies->get(
    request: $request
);

if ($response->customPolicyResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                              | Type                                                                                   | Required                                                                               | Description                                                                            |
| -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- |
| `$request`                                                                             | [Operations\GetCustomPolicyRequest](../../Models/Operations/GetCustomPolicyRequest.md) | :heavy_check_mark:                                                                     | The request object to use for the request.                                             |

### Response

**[?Operations\GetCustomPolicyResponse](../../Models/Operations/GetCustomPolicyResponse.md)**

### Errors

| Error Type                      | Status Code                     | Content Type                    |
| ------------------------------- | ------------------------------- | ------------------------------- |
| Errors\PermissionsErrorResponse | 401, 403, 404                   | application/json                |
| Errors\APIException             | 4XX, 5XX                        | \*/\*                           |

## update

Update a specific custom policy by providing the entire policy entity in the request body. Ensure the new `policy_statement` includes modifications. Existing permissions will be replaced with the new data.

*Note:* Updating a policy with an identical `policy_statement` will trigger a 409 error.


### Example Usage: cedarErrorExample

<!-- UsageSnippet language="php" operationID="updateCustomPolicy" method="put" path="/v2/accounts/{account_id}/permissions/policies/custom/{policy_id}" example="cedarErrorExample" -->
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

$request = new Operations\UpdateCustomPolicyRequest(
    policyId: '<id>',
    body: new Components\UpdateCustomPolicy(
        policyStatement: 'permit(principal == Cloudinary::APIKey::\\"1234\\",action==Cloudinary::Action::\\"read\\",resource is Cloudinary::Folder ) when {resource.ancestor_ids.contains(\\"asdfjkl12347890\\")} ;\n',
        description: 'Permit read access to the Clothing folder with external ID asdfjkl12347890.',
        scopeType: Components\ScopeTypeEnum::Prodenv,
        scopeId: '975l29lz02jt0836fhwi',
        name: 'Read access to Clothing folder',
    ),
);

$response = $sdk->customPolicies->update(
    request: $request
);

if ($response->customPolicyResponse !== null) {
    // handle response
}
```
### Example Usage: invalidFieldErrorExample

<!-- UsageSnippet language="php" operationID="updateCustomPolicy" method="put" path="/v2/accounts/{account_id}/permissions/policies/custom/{policy_id}" example="invalidFieldErrorExample" -->
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

$request = new Operations\UpdateCustomPolicyRequest(
    policyId: '<id>',
    body: new Components\UpdateCustomPolicy(
        policyStatement: 'permit(principal == Cloudinary::APIKey::\\"1234\\",action==Cloudinary::Action::\\"read\\",resource is Cloudinary::Folder ) when {resource.ancestor_ids.contains(\\"asdfjkl12347890\\")} ;\n',
        description: 'Permit read access to the Clothing folder with external ID asdfjkl12347890.',
        scopeType: Components\ScopeTypeEnum::Prodenv,
        scopeId: '975l29lz02jt0836fhwi',
        name: 'Read access to Clothing folder',
    ),
);

$response = $sdk->customPolicies->update(
    request: $request
);

if ($response->customPolicyResponse !== null) {
    // handle response
}
```
### Example Usage: missingFieldsUpdateErrorExample

<!-- UsageSnippet language="php" operationID="updateCustomPolicy" method="put" path="/v2/accounts/{account_id}/permissions/policies/custom/{policy_id}" example="missingFieldsUpdateErrorExample" -->
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

$request = new Operations\UpdateCustomPolicyRequest(
    policyId: '<id>',
    body: new Components\UpdateCustomPolicy(
        policyStatement: 'permit(principal == Cloudinary::APIKey::\\"1234\\",action==Cloudinary::Action::\\"read\\",resource is Cloudinary::Folder ) when {resource.ancestor_ids.contains(\\"asdfjkl12347890\\")} ;\n',
        description: 'Permit read access to the Clothing folder with external ID asdfjkl12347890.',
        scopeType: Components\ScopeTypeEnum::Prodenv,
        scopeId: '975l29lz02jt0836fhwi',
        name: 'Read access to Clothing folder',
    ),
);

$response = $sdk->customPolicies->update(
    request: $request
);

if ($response->customPolicyResponse !== null) {
    // handle response
}
```
### Example Usage: updateCustomPolicyExample

<!-- UsageSnippet language="php" operationID="updateCustomPolicy" method="put" path="/v2/accounts/{account_id}/permissions/policies/custom/{policy_id}" example="updateCustomPolicyExample" -->
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

$request = new Operations\UpdateCustomPolicyRequest(
    policyId: '<id>',
    body: new Components\UpdateCustomPolicy(
        policyStatement: 'permit(principal == Cloudinary::APIKey::"1234",action==Cloudinary::Action::"read",resource is Cloudinary::Folder ) when {resource.ancestor_ids.contains("asdfjkl12347890")} ;',
        description: 'Permit read access to the Accessories folder with external ID asdfjkl12347890.',
        scopeType: Components\ScopeTypeEnum::Prodenv,
        scopeId: '975l29lz02jt0836fhwi',
        name: 'Read access to Accessories folder',
    ),
);

$response = $sdk->customPolicies->update(
    request: $request
);

if ($response->customPolicyResponse !== null) {
    // handle response
}
```
### Example Usage: updatePolicyResponse

<!-- UsageSnippet language="php" operationID="updateCustomPolicy" method="put" path="/v2/accounts/{account_id}/permissions/policies/custom/{policy_id}" example="updatePolicyResponse" -->
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

$request = new Operations\UpdateCustomPolicyRequest(
    policyId: '<id>',
    body: new Components\UpdateCustomPolicy(
        policyStatement: 'permit(principal == Cloudinary::APIKey::\\"1234\\",action==Cloudinary::Action::\\"read\\",resource is Cloudinary::Folder ) when {resource.ancestor_ids.contains(\\"asdfjkl12347890\\")} ;\n',
        description: 'Permit read access to the Clothing folder with external ID asdfjkl12347890.',
        scopeType: Components\ScopeTypeEnum::Prodenv,
        scopeId: '975l29lz02jt0836fhwi',
        name: 'Read access to Clothing folder',
    ),
);

$response = $sdk->customPolicies->update(
    request: $request
);

if ($response->customPolicyResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\UpdateCustomPolicyRequest](../../Models/Operations/UpdateCustomPolicyRequest.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\UpdateCustomPolicyResponse](../../Models/Operations/UpdateCustomPolicyResponse.md)**

### Errors

| Error Type                      | Status Code                     | Content Type                    |
| ------------------------------- | ------------------------------- | ------------------------------- |
| Errors\PermissionsErrorResponse | 400, 401, 403, 404, 409         | application/json                |
| Errors\PermissionsErrorResponse | 500                             | application/json                |
| Errors\APIException             | 4XX, 5XX                        | \*/\*                           |

## delete

Delete a specific custom policy.

### Example Usage

<!-- UsageSnippet language="php" operationID="deleteCustomPolicy" method="delete" path="/v2/accounts/{account_id}/permissions/policies/custom/{policy_id}" -->
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

$request = new Operations\DeleteCustomPolicyRequest(
    policyId: '<id>',
);

$response = $sdk->customPolicies->delete(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\DeleteCustomPolicyRequest](../../Models/Operations/DeleteCustomPolicyRequest.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\DeleteCustomPolicyResponse](../../Models/Operations/DeleteCustomPolicyResponse.md)**

### Errors

| Error Type                      | Status Code                     | Content Type                    |
| ------------------------------- | ------------------------------- | ------------------------------- |
| Errors\PermissionsErrorResponse | 401, 403, 404                   | application/json                |
| Errors\APIException             | 4XX, 5XX                        | \*/\*                           |