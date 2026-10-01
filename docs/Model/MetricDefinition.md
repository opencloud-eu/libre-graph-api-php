# # MetricDefinition

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**kind** | **string** | The reducer applied to the field values of all matches. Required.  &#x60;avg&#x60; is not a simple reducer (averages of averages are not averages): the backend carries &#x60;(sum, count)&#x60; internally and emits only the final value on the outermost merge. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
