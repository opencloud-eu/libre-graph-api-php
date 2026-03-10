# OpenAPI\Client\InvitationsApi

All URIs are relative to https://localhost:9200/graph, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createInvitation()**](InvitationsApi.md#createInvitation) | **POST** /v1.0/invitations | Create a new invitation |
| [**getInvitation()**](InvitationsApi.md#getInvitation) | **GET** /v1.0/invitations/{invitation-id} | Get an invitation by key |
| [**listInvitations()**](InvitationsApi.md#listInvitations) | **GET** /v1.0/invitations | Get a list of invitations |


## `createInvitation()`

```php
createInvitation($invitation): \OpenAPI\Client\Model\Invitation
```

Create a new invitation

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\InvitationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$invitation = new \OpenAPI\Client\Model\Invitation(); // \OpenAPI\Client\Model\Invitation | New invitation

try {
    $result = $apiInstance->createInvitation($invitation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvitationsApi->createInvitation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **invitation** | [**\OpenAPI\Client\Model\Invitation**](../Model/Invitation.md)| New invitation | [optional] |

### Return type

[**\OpenAPI\Client\Model\Invitation**](../Model/Invitation.md)

### Authorization

[openId](../../README.md#openId), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getInvitation()`

```php
getInvitation($invitation_id): \OpenAPI\Client\Model\Invitation
```

Get an invitation by key

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\InvitationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$invitation_id = 'invitation_id_example'; // string | key: id of invitation

try {
    $result = $apiInstance->getInvitation($invitation_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvitationsApi->getInvitation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **invitation_id** | **string**| key: id of invitation | |

### Return type

[**\OpenAPI\Client\Model\Invitation**](../Model/Invitation.md)

### Authorization

[openId](../../README.md#openId), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listInvitations()`

```php
listInvitations(): \OpenAPI\Client\Model\CollectionOfInvitations
```

Get a list of invitations

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\InvitationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listInvitations();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvitationsApi->listInvitations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\CollectionOfInvitations**](../Model/CollectionOfInvitations.md)

### Authorization

[openId](../../README.md#openId), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
