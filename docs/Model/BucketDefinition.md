# # BucketDefinition

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**sort_by** | **string** | The possible values are &#x60;count&#x60; to sort by the number of matches in the aggregation, &#x60;keyAsString&#x60; to sort alphabetically based on the key in the aggregation, and &#x60;keyAsNumber&#x60; to sort numerically based on the key in the aggregation. Required. |
**is_descending** | **bool** | Set to &#x60;true&#x60; to specify the sort order as descending. Optional, defaults to &#x60;false&#x60; (ascending). | [optional] [default to false]
**minimum_count** | **int** | The minimum number of items that should be present in the aggregation for the bucket to be returned in the response. Optional, default is 0. | [optional] [default to 0]
**ranges** | [**\OpenAPI\Client\Model\BucketAggregationRange[]**](BucketAggregationRange.md) | Specifies the manual ranges to compute the aggregation buckets. This is only valid for non-string facets of date or numeric type. Optional. Follows the [MS Graph bucketAggregationRange](https://learn.microsoft.com/en-us/graph/api/resources/bucketaggregationrange) resource type. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
