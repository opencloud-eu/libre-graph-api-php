# OpenAPI\Client\SearchApi

All URIs are relative to https://localhost:9200/graph, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**searchQuery()**](SearchApi.md#searchQuery) | **POST** /v1beta1/search/query | Search for resources |


## `searchQuery()`

```php
searchQuery($search_query_request, $expand): \OpenAPI\Client\Model\SearchQuery200Response
```

Search for resources

Run a specified search query. Search results are provided in the response.  The search endpoint allows clients to search for resources across all accessible spaces and retrieve aggregated metadata (facets) about the result set.  Aggregations can be used to group results by properties such as file type, author, or any indexed metadata field. This is useful for building faceted search UIs or computing statistics about the result set.  The query string uses KQL (Keyword Query Language) syntax for filtering.  Modeled on the MS Graph search query endpoint (https://learn.microsoft.com/en-us/graph/api/search-query). Request and response follow the MS Graph resource types; Libregraph additions carry the `@libre.graph.` prefix.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\SearchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$search_query_request = {"requests":[{"entityTypes":["driveItem"],"query":{"queryString":"budget report"},"from":0,"size":25}]}; // \OpenAPI\Client\Model\SearchQueryRequest
$expand = array('expand_example'); // string[] | Relationships to expand inline on each hit's driveItem. Only `thumbnails` is supported, attaching a preview thumbnail set for thumbnailable mime types. Libregraph extension: MS Graph search has no $expand and returns no thumbnails on search hits.

try {
    $result = $apiInstance->searchQuery($search_query_request, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SearchApi->searchQuery: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **search_query_request** | [**\OpenAPI\Client\Model\SearchQueryRequest**](../Model/SearchQueryRequest.md)|  | |
| **expand** | [**string[]**](../Model/string.md)| Relationships to expand inline on each hit&#39;s driveItem. Only &#x60;thumbnails&#x60; is supported, attaching a preview thumbnail set for thumbnailable mime types. Libregraph extension: MS Graph search has no $expand and returns no thumbnails on search hits. | [optional] |

### Return type

[**\OpenAPI\Client\Model\SearchQuery200Response**](../Model/SearchQuery200Response.md)

### Authorization

[openId](../../README.md#openId), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
