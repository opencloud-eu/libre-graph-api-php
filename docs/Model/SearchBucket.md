# # SearchBucket

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**key** | **string** | The discrete value of the field that was used to compute the aggregation. For terms aggregations this is the field value. For range aggregations this is a string representation of the range. | [optional]
**count** | **int** | The approximate number of search matches that share the same value specified in the &#x60;key&#x60; property. | [optional]
**aggregation_filter_token** | **string** | A token containing the encoded filter that narrows search matches to this bucket. To use it, pass it as part of the &#x60;aggregationFilters&#x60; property of a subsequent &#x60;searchRequest&#x60; in the format &#x60;{field}:{aggregationFilterToken}&#x60;. The filter matches the bucket &#x60;key&#x60; exactly and case-sensitively, so the narrowed result set is the set of matches counted in this bucket.  For terms buckets the token is the key encoded as lowercase hex of its UTF-8 bytes, prefixed with &#x60;ǂǂ&#x60; (U+01C2 twice) and wrapped in double quotes, e.g. &#x60;\&quot;ǂǂ5361786f6e\&quot;&#x60; for the key &#x60;Saxon&#x60;. For range buckets the token is &#x60;range({from}, {to})&#x60; with the bounds of the matching &#x60;bucketAggregationRange&#x60;; an open lower bound is written as &#x60;min&#x60;, an open upper bound as &#x60;max&#x60; followed by &#x60;to&#x3D;\&quot;le\&quot;&#x60;, e.g. &#x60;range(min, 1980)&#x60;, &#x60;range(1980, 1990)&#x60; and &#x60;range(2010, max, to&#x3D;\&quot;le\&quot;)&#x60;. This is the same encoding MS Graph uses. | [optional] [readonly]
**at_libre_graph_sub_aggregations** | [**\OpenAPI\Client\Model\SearchAggregation[]**](SearchAggregation.md) | Nested aggregation results, one per sub-aggregation requested on the parent &#x60;aggregationOption&#x60;. Libregraph extension not present in MS Graph. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
