# MetricUsage


## Fields

| Field                                                                        | Type                                                                         | Required                                                                     | Description                                                                  |
| ---------------------------------------------------------------------------- | ---------------------------------------------------------------------------- | ---------------------------------------------------------------------------- | ---------------------------------------------------------------------------- |
| `metric`                                                                     | *?string*                                                                    | :heavy_minus_sign:                                                           | The type of metric being measured (e.g., "credit").                          |
| `limit`                                                                      | *?float*                                                                     | :heavy_minus_sign:                                                           | The limit for this metric in the plan.                                       |
| `cycles`                                                                     | array<[Components\Cycles](../../Models/Components/Cycles.md)>                | :heavy_minus_sign:                                                           | Full usage details per billing cycle (monthly or annual, depending on plan). |
| `monthlyCycles`                                                              | array<[Components\MonthlyCycles](../../Models/Components/MonthlyCycles.md)>  | :heavy_minus_sign:                                                           | Monthly-level breakdown within a single annual cycle.                        |