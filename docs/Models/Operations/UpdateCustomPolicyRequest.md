# UpdateCustomPolicyRequest


## Fields

| Field                                                                          | Type                                                                           | Required                                                                       | Description                                                                    |
| ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ |
| `accountId`                                                                    | *?string*                                                                      | :heavy_minus_sign:                                                             | Account ID                                                                     |
| `policyId`                                                                     | *string*                                                                       | :heavy_check_mark:                                                             | A unique identifier for the custom permission policy.                          |
| `body`                                                                         | [Components\UpdateCustomPolicy](../../Models/Components/UpdateCustomPolicy.md) | :heavy_check_mark:                                                             | Policy details                                                                 |