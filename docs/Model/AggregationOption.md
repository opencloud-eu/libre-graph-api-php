# # AggregationOption

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**field** | **string** | Specifies the field in the schema of the specified entity type that the aggregation should be computed on. Required.  Examples: &#x60;audio.artist&#x60;, &#x60;audio.genre&#x60;, &#x60;audio.year&#x60;, &#x60;mimeType&#x60;. |
**size** | **int** | The number of &#x60;searchBucket&#x60; resources to be returned. This is optional and only applies to terms aggregations. Combined with &#x60;bucketDefinition.sortBy&#x60; and &#x60;bucketDefinition.isDescending&#x60; to produce the top N results by count or key. When not specified, all buckets are returned. | [optional]
**bucket_definition** | [**\OpenAPI\Client\Model\BucketDefinition**](BucketDefinition.md) |  | [optional]
**at_libre_graph_sub_aggregations** | [**\OpenAPI\Client\Model\AggregationOption[]**](AggregationOption.md) | Nested aggregations computed within each bucket of this aggregation. Libregraph extension not present in MS Graph.  Backends that don&#39;t support native composite aggregations (e.g. bleve) emulate them by walking the matched result set; OpenSearch translates them to native composite aggregations. | [optional]
**at_libre_graph_metric_definition** | [**\OpenAPI\Client\Model\MetricDefinition**](MetricDefinition.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
