# # GuestLinkError

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**error_type** | **string** | Machine-readable error identifier. |
**message** | **string** | Human-readable error message. |
**permission_id** | **string** | Permission (share) identifier related to the error, when known. |
**retry_after** | **int** | Number of seconds the client should wait before retrying. Present on rate-limited (429) responses and mirrored in the Retry-After response header. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
