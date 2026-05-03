# UserGroups

## Overview

### Available Operations

* [list](#list) - Get User Groups
* [create](#create) - Create User Group
* [get](#get) - Get User Group
* [update](#update) - Update User Group
* [delete](#delete) - Delete User Group
* [listUsers](#listusers) - Get Users in User Group
* [addUser](#adduser) - Add User to User Group
* [removeUser](#removeuser) - Remove User from User Group

## list

Retrieve an array of all user groups in the account.

Learn more about retrieving user groups.
<https://cloudinary.com/documentation/provisioning_api#get_user_groups>

### Example Usage: UserGroups

<!-- UsageSnippet language="php" operationID="getUserGroups" method="get" path="/v1_1/provisioning/accounts/{account_id}/user_groups" example="UserGroups" -->
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

$request = new Operations\GetUserGroupsRequest(
    extendedDetails: true,
);

$response = $sdk->userGroups->list(
    request: $request
);

if ($response->userGroupsResponse !== null) {
    // handle response
}
```
### Example Usage: UserGroupsExtendedDetails

<!-- UsageSnippet language="php" operationID="getUserGroups" method="get" path="/v1_1/provisioning/accounts/{account_id}/user_groups" example="UserGroupsExtendedDetails" -->
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

$request = new Operations\GetUserGroupsRequest(
    extendedDetails: true,
);

$response = $sdk->userGroups->list(
    request: $request
);

if ($response->userGroupsResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                          | Type                                                                               | Required                                                                           | Description                                                                        |
| ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- |
| `$request`                                                                         | [Operations\GetUserGroupsRequest](../../Models/Operations/GetUserGroupsRequest.md) | :heavy_check_mark:                                                                 | The request object to use for the request.                                         |

### Response

**[?Operations\GetUserGroupsResponse](../../Models/Operations/GetUserGroupsResponse.md)**

### Errors

| Error Type           | Status Code          | Content Type         |
| -------------------- | -------------------- | -------------------- |
| Errors\ErrorResponse | 401, 404, 420, 429   | application/json     |
| Errors\APIException  | 4XX, 5XX             | \*/\*                |

## create

Create a new user group for the account.

Learn more about creating user groups.
<https://cloudinary.com/documentation/provisioning_api#create_user_group>

### Example Usage

<!-- UsageSnippet language="php" operationID="createUserGroup" method="post" path="/v1_1/provisioning/accounts/{account_id}/user_groups" example="UserGroupDesigners" -->
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

$request = new Operations\CreateUserGroupRequest(
    body: new Components\UserGroupRequest(
        name: 'Designers',
        extendedDetails: false,
    ),
);

$response = $sdk->userGroups->create(
    request: $request
);

if ($response->userGroup !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                              | Type                                                                                   | Required                                                                               | Description                                                                            |
| -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- |
| `$request`                                                                             | [Operations\CreateUserGroupRequest](../../Models/Operations/CreateUserGroupRequest.md) | :heavy_check_mark:                                                                     | The request object to use for the request.                                             |

### Response

**[?Operations\CreateUserGroupResponse](../../Models/Operations/CreateUserGroupResponse.md)**

### Errors

| Error Type                        | Status Code                       | Content Type                      |
| --------------------------------- | --------------------------------- | --------------------------------- |
| Errors\ErrorResponse              | 400, 401, 403, 404, 409, 420, 429 | application/json                  |
| Errors\APIException               | 4XX, 5XX                          | \*/\*                             |

## get

Retrieve a specific user group.

Learn more about retrieving a specific user group.
<https://cloudinary.com/documentation/provisioning_api#get_user_group>

### Example Usage: UserGroupDesigners

<!-- UsageSnippet language="php" operationID="getUserGroup" method="get" path="/v1_1/provisioning/accounts/{account_id}/user_groups/{group_id}" example="UserGroupDesigners" -->
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

$request = new Operations\GetUserGroupRequest(
    groupId: '7f08f1f1fc910bf1f25274aef11d27',
    extendedDetails: true,
);

$response = $sdk->userGroups->get(
    request: $request
);

if ($response->userGroup !== null) {
    // handle response
}
```
### Example Usage: UserGroupDesignersExtendedDetails

<!-- UsageSnippet language="php" operationID="getUserGroup" method="get" path="/v1_1/provisioning/accounts/{account_id}/user_groups/{group_id}" example="UserGroupDesignersExtendedDetails" -->
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

$request = new Operations\GetUserGroupRequest(
    groupId: '7f08f1f1fc910bf1f25274aef11d27',
    extendedDetails: true,
);

$response = $sdk->userGroups->get(
    request: $request
);

if ($response->userGroup !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                        | Type                                                                             | Required                                                                         | Description                                                                      |
| -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- |
| `$request`                                                                       | [Operations\GetUserGroupRequest](../../Models/Operations/GetUserGroupRequest.md) | :heavy_check_mark:                                                               | The request object to use for the request.                                       |

### Response

**[?Operations\GetUserGroupResponse](../../Models/Operations/GetUserGroupResponse.md)**

### Errors

| Error Type           | Status Code          | Content Type         |
| -------------------- | -------------------- | -------------------- |
| Errors\ErrorResponse | 401, 404, 420, 429   | application/json     |
| Errors\APIException  | 4XX, 5XX             | \*/\*                |

## update

Update the name of a specified user group.

Learn more about updating a specific user group.
<https://cloudinary.com/documentation/provisioning_api#update_user_group>

### Example Usage: UserGroupDesignersRequest

<!-- UsageSnippet language="php" operationID="updateUserGroup" method="put" path="/v1_1/provisioning/accounts/{account_id}/user_groups/{group_id}" example="UserGroupDesignersRequest" -->
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

$request = new Operations\UpdateUserGroupRequest(
    groupId: '7f08f1f1fc910bf1f25274aef11d27',
    body: new Components\UserGroupRequest(
        name: 'Designers and Creatives',
    ),
);

$response = $sdk->userGroups->update(
    request: $request
);

if ($response->userGroup !== null) {
    // handle response
}
```
### Example Usage: UserGroupUpdate

<!-- UsageSnippet language="php" operationID="updateUserGroup" method="put" path="/v1_1/provisioning/accounts/{account_id}/user_groups/{group_id}" example="UserGroupUpdate" -->
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

$request = new Operations\UpdateUserGroupRequest(
    groupId: '7f08f1f1fc910bf1f25274aef11d27',
    body: new Components\UserGroupRequest(
        name: 'Designers',
        extendedDetails: false,
    ),
);

$response = $sdk->userGroups->update(
    request: $request
);

if ($response->userGroup !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                              | Type                                                                                   | Required                                                                               | Description                                                                            |
| -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- |
| `$request`                                                                             | [Operations\UpdateUserGroupRequest](../../Models/Operations/UpdateUserGroupRequest.md) | :heavy_check_mark:                                                                     | The request object to use for the request.                                             |

### Response

**[?Operations\UpdateUserGroupResponse](../../Models/Operations/UpdateUserGroupResponse.md)**

### Errors

| Error Type                        | Status Code                       | Content Type                      |
| --------------------------------- | --------------------------------- | --------------------------------- |
| Errors\ErrorResponse              | 400, 401, 403, 404, 409, 420, 429 | application/json                  |
| Errors\APIException               | 4XX, 5XX                          | \*/\*                             |

## delete

Delete a user group with the specified ID.

Learn more about deleting a specific user group.
<https://cloudinary.com/documentation/provisioning_api#delete_user_group>

### Example Usage

<!-- UsageSnippet language="php" operationID="deleteUserGroup" method="delete" path="/v1_1/provisioning/accounts/{account_id}/user_groups/{group_id}" -->
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

$request = new Operations\DeleteUserGroupRequest(
    groupId: '7f08f1f1fc910bf1f25274aef11d27',
);

$response = $sdk->userGroups->delete(
    request: $request
);

if ($response->successResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                              | Type                                                                                   | Required                                                                               | Description                                                                            |
| -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- |
| `$request`                                                                             | [Operations\DeleteUserGroupRequest](../../Models/Operations/DeleteUserGroupRequest.md) | :heavy_check_mark:                                                                     | The request object to use for the request.                                             |

### Response

**[?Operations\DeleteUserGroupResponse](../../Models/Operations/DeleteUserGroupResponse.md)**

### Errors

| Error Type                   | Status Code                  | Content Type                 |
| ---------------------------- | ---------------------------- | ---------------------------- |
| Errors\ErrorResponse         | 400, 401, 403, 404, 420, 429 | application/json             |
| Errors\APIException          | 4XX, 5XX                     | \*/\*                        |

## listUsers

Retrieve the users in the group with the specified ID.

Learn more about retrieving users in a specific user group.
<https://cloudinary.com/documentation/provisioning_api#get_user_group_users>

### Example Usage

<!-- UsageSnippet language="php" operationID="getUsersInUserGroup" method="get" path="/v1_1/provisioning/accounts/{account_id}/user_groups/{group_id}/users" example="UserGroupUsers" -->
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

$request = new Operations\GetUsersInUserGroupRequest(
    groupId: '7f08f1f1fc910bf1f25274aef11d27',
);

$response = $sdk->userGroups->listUsers(
    request: $request
);

if ($response->userGroupUsersResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [Operations\GetUsersInUserGroupRequest](../../Models/Operations/GetUsersInUserGroupRequest.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |

### Response

**[?Operations\GetUsersInUserGroupResponse](../../Models/Operations/GetUsersInUserGroupResponse.md)**

### Errors

| Error Type           | Status Code          | Content Type         |
| -------------------- | -------------------- | -------------------- |
| Errors\ErrorResponse | 401, 404, 420, 429   | application/json     |
| Errors\APIException  | 4XX, 5XX             | \*/\*                |

## addUser

Add a user to a group with the specified ID.

Learn more about adding users to a specific user group.
<https://cloudinary.com/documentation/provisioning_api#add_user_to_group>

### Example Usage

<!-- UsageSnippet language="php" operationID="addUserToUserGroup" method="post" path="/v1_1/provisioning/accounts/{account_id}/user_groups/{group_id}/users/{user_id}" example="UserGroupUserJohn" -->
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

$request = new Operations\AddUserToUserGroupRequest(
    groupId: '7f08f1f1fc910bf1f25274aef11d27',
    userId: '0abed8dfcc039ea05e2a1d494fd442',
);

$response = $sdk->userGroups->addUser(
    request: $request
);

if ($response->userGroupUser !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\AddUserToUserGroupRequest](../../Models/Operations/AddUserToUserGroupRequest.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\AddUserToUserGroupResponse](../../Models/Operations/AddUserToUserGroupResponse.md)**

### Errors

| Error Type                        | Status Code                       | Content Type                      |
| --------------------------------- | --------------------------------- | --------------------------------- |
| Errors\ErrorResponse              | 400, 401, 403, 404, 409, 420, 429 | application/json                  |
| Errors\APIException               | 4XX, 5XX                          | \*/\*                             |

## removeUser

Remove a user from a group with the specified ID.

Learn more about removing users from a specific user group.
<https://cloudinary.com/documentation/provisioning_api#remove_user_from_group>

### Example Usage

<!-- UsageSnippet language="php" operationID="removeUserFromUserGroup" method="delete" path="/v1_1/provisioning/accounts/{account_id}/user_groups/{group_id}/users/{user_id}" example="UserGroupUsers" -->
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

$request = new Operations\RemoveUserFromUserGroupRequest(
    groupId: '7f08f1f1fc910bf1f25274aef11d27',
    userId: '0abed8dfcc039ea05e2a1d494fd442',
);

$response = $sdk->userGroups->removeUser(
    request: $request
);

if ($response->userGroupUsersResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                              | Type                                                                                                   | Required                                                                                               | Description                                                                                            |
| ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                             | [Operations\RemoveUserFromUserGroupRequest](../../Models/Operations/RemoveUserFromUserGroupRequest.md) | :heavy_check_mark:                                                                                     | The request object to use for the request.                                                             |

### Response

**[?Operations\RemoveUserFromUserGroupResponse](../../Models/Operations/RemoveUserFromUserGroupResponse.md)**

### Errors

| Error Type                   | Status Code                  | Content Type                 |
| ---------------------------- | ---------------------------- | ---------------------------- |
| Errors\ErrorResponse         | 400, 401, 403, 404, 420, 429 | application/json             |
| Errors\APIException          | 4XX, 5XX                     | \*/\*                        |