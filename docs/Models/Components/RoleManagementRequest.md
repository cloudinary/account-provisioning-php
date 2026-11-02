# RoleManagementRequest

A role management operation and the roles it applies to.


## Fields

| Field                                                                         | Type                                                                          | Required                                                                      | Description                                                                   | Example                                                                       |
| ----------------------------------------------------------------------------- | ----------------------------------------------------------------------------- | ----------------------------------------------------------------------------- | ----------------------------------------------------------------------------- | ----------------------------------------------------------------------------- |
| `operation`                                                                   | [Components\Operation](../../Models/Components/Operation.md)                  | :heavy_check_mark:                                                            | Whether to add or remove the listed roles.                                    | add                                                                           |
| `roles`                                                                       | array<[Components\RoleAssignment](../../Models/Components/RoleAssignment.md)> | :heavy_check_mark:                                                            | The roles to add or remove.                                                   |                                                                               |