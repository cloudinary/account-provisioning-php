# UserGroup

User group.


## Fields

| Field                                                                              | Type                                                                               | Required                                                                           | Description                                                                        |
| ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- |
| `id`                                                                               | *?string*                                                                          | :heavy_minus_sign:                                                                 | The user group's ID.                                                               |
| `name`                                                                             | *?string*                                                                          | :heavy_minus_sign:                                                                 | The user group's name.                                                             |
| `users`                                                                            | array<[Components\UserGroupUser](../../Models/Components/UserGroupUser.md)>        | :heavy_minus_sign:                                                                 | A list of user group users.<br/>Only returned in extended_details.<br/>            |
| `createdAt`                                                                        | [\DateTime](https://www.php.net/manual/en/class.datetime.php)                      | :heavy_minus_sign:                                                                 | The date when the user group was created.<br/>Only returned in extended_details.<br/> |
| `updatedAt`                                                                        | [\DateTime](https://www.php.net/manual/en/class.datetime.php)                      | :heavy_minus_sign:                                                                 | The date when the user group was last updated.<br/>Only returned in extended_details.<br/> |