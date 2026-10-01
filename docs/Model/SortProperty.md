# # SortProperty

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | The name of the property to sort the search results by. Required.  Sortable are the scalar search fields of the search hit&#39;s resource: &#x60;name&#x60;, &#x60;size&#x60;, &#x60;lastModifiedDateTime&#x60;, &#x60;mimeType&#x60; and the scalar facet properties such as &#x60;photo.takenDateTime&#x60;, &#x60;photo.iso&#x60;, &#x60;audio.artist&#x60;, &#x60;audio.year&#x60; or &#x60;image.width&#x60;. Strings sort lexicographically, numbers and dates by value. Multivalued properties (e.g. &#x60;@libre.graph.tags&#x60;) and unknown properties are rejected with &#x60;invalidRequest&#x60;. |
**is_descending** | **bool** | Set to &#x60;true&#x60; to specify the sort order as descending. Optional, defaults to &#x60;false&#x60; (ascending). | [optional] [default to false]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
