# # SearchHitsContainer

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**hits** | [**\OpenAPI\Client\Model\SearchHit[]**](SearchHit.md) | A collection of the search results. | [optional]
**total** | **int** | The total number of results. Note this is not the number of results on the page, but the total number of results satisfying the query. | [optional] [readonly]
**more_results_available** | **bool** | Provides information if more results are available. Based on this information, you can adjust the &#x60;from&#x60; and &#x60;size&#x60; properties of the &#x60;searchRequest&#x60; accordingly. | [optional] [readonly]
**aggregations** | [**\OpenAPI\Client\Model\SearchAggregation[]**](SearchAggregation.md) | Contains the collection of aggregations computed based on the provided &#x60;aggregationOption&#x60; definitions in the request. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
