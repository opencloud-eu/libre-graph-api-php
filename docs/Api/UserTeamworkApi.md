# OpenAPI\Client\UserTeamworkApi

All URIs are relative to https://localhost:9200/graph, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**sendActivityNotification()**](UserTeamworkApi.md#sendActivityNotification) | **POST** /v1.0/users/{user-id}/teamwork/sendActivityNotification | Send an activity notification to a user |


## `sendActivityNotification()`

```php
sendActivityNotification($user_id, $activity_notification)
```

Send an activity notification to a user

Sends a notification about an activity to a user. The sender is the caller, the recipient is the user in the path, `activityType` says what happened and `topic` says what it happened on.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\UserTeamworkApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = 'user_id_example'; // string | key: id or name of user
$activity_notification = {"topic":{"source":"text","value":"a0ca6a90-a365-4782-871e-d44447bbc668$a0ca6a90-a365-4782-871e-d44447bbc668!item-id"},"activityType":"mentioned","teamsAppId":"8d1c9c88-9e2c-4d0b-9a1e-6a9de1cb9d3c"}; // \OpenAPI\Client\Model\ActivityNotification | The activity the user is notified about.

try {
    $apiInstance->sendActivityNotification($user_id, $activity_notification);
} catch (Exception $e) {
    echo 'Exception when calling UserTeamworkApi->sendActivityNotification: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_id** | **string**| key: id or name of user | |
| **activity_notification** | [**\OpenAPI\Client\Model\ActivityNotification**](../Model/ActivityNotification.md)| The activity the user is notified about. | |

### Return type

void (empty response body)

### Authorization

[openId](../../README.md#openId), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
