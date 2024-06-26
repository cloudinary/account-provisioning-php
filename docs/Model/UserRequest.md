# # UserRequest

## Properties

| Name        | Type          | Description   | Notes         |
|------------ | ------------- | ------------- | ------------- |
| **name** | **string** | The user&#39;s name. | [optional] |
| **email** | **string** | A unique email address, which serves as the login name and notification address. | [optional] |
| **role** | **string** | The role to assign. | [optional] |
| **subAccountIds** | **string[]** | A list of product environment IDs that this user can access. Ignored if the role is &#x60;master_admin&#x60;.  **Default**: all product environments. | [optional] |
| **enabled** | **bool** | Whether the user is enabled. **Default**: true. | [optional] |

[[Back to Model list]](../../README.md#models)
[[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
