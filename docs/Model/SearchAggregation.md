# # SearchAggregation

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**field** | **string** | Defines the field in the request on which the aggregation was computed. | [optional]
**buckets** | [**\OpenAPI\Client\Model\SearchBucket[]**](SearchBucket.md) | Defines the computed buckets for this aggregation. For bucket aggregations they are sorted according to the &#x60;sortBy&#x60; and &#x60;isDescending&#x60; specified in the &#x60;bucketDefinition&#x60; of the corresponding &#x60;aggregationOption&#x60;; for geohash aggregations they are ordered by &#x60;count&#x60;, descending. | [optional]
**at_libre_graph_metric** | [**\OpenAPI\Client\Model\SearchMetric**](SearchMetric.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
