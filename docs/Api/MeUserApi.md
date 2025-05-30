# OpenAPI\Client\MeUserApi

All URIs are relative to https://localhost:9200/graph, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getOwnUser()**](MeUserApi.md#getOwnUser) | **GET** /v1.0/me | Get current user |
| [**updateOwnUser()**](MeUserApi.md#updateOwnUser) | **PATCH** /v1.0/me | Update the current user |


## `getOwnUser()`

```php
getOwnUser($expand): \OpenAPI\Client\Model\User
```

Get current user

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\MeUserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$expand = array('expand_example'); // string[] | Expand related entities

try {
    $result = $apiInstance->getOwnUser($expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MeUserApi->getOwnUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **expand** | [**string[]**](../Model/string.md)| Expand related entities | [optional] |

### Return type

[**\OpenAPI\Client\Model\User**](../Model/User.md)

### Authorization

[openId](../../README.md#openId), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateOwnUser()`

```php
updateOwnUser($user_update): \OpenAPI\Client\Model\User
```

Update the current user

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\MeUserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_update = {"preferredLanguage":"en"}; // \OpenAPI\Client\Model\UserUpdate | New user values

try {
    $result = $apiInstance->updateOwnUser($user_update);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MeUserApi->updateOwnUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_update** | [**\OpenAPI\Client\Model\UserUpdate**](../Model/UserUpdate.md)| New user values | [optional] |

### Return type

[**\OpenAPI\Client\Model\User**](../Model/User.md)

### Authorization

[openId](../../README.md#openId), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
