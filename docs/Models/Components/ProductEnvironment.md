# ProductEnvironment

Product Environment


## Fields

| Field                                                                     | Type                                                                      | Required                                                                  | Description                                                               |
| ------------------------------------------------------------------------- | ------------------------------------------------------------------------- | ------------------------------------------------------------------------- | ------------------------------------------------------------------------- |
| `cloudName`                                                               | *?string*                                                                 | :heavy_minus_sign:                                                        | N/A                                                                       |
| `name`                                                                    | *?string*                                                                 | :heavy_minus_sign:                                                        | The cloud name of the product environment.                                |
| `enabled`                                                                 | *?bool*                                                                   | :heavy_minus_sign:                                                        | Whether the product environment is enabled or disabled.                   |
| `id`                                                                      | *?string*                                                                 | :heavy_minus_sign:                                                        | The ID of the product environment.                                        |
| `apiAccessKeys`                                                           | array<[Components\ApiAccessKey](../../Models/Components/ApiAccessKey.md)> | :heavy_minus_sign:                                                        | The list of the product environment's access keys.                        |
| `createdAt`                                                               | [\DateTime](https://www.php.net/manual/en/class.datetime.php)             | :heavy_minus_sign:                                                        | The date when the product environment was created.                        |
| `updatedAt`                                                               | [\DateTime](https://www.php.net/manual/en/class.datetime.php)             | :heavy_minus_sign:                                                        | The date when the product environment was last updated.                   |