# OpenAPI\Client\GuestLinksApi

All URIs are relative to https://localhost:9200/graph, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**renewGuestLink()**](GuestLinksApi.md#renewGuestLink) | **POST** /v1beta1/extensions/org.libregraph/guestLinks/renew | Renew a guest link |
| [**verifyGuestLinkPin()**](GuestLinksApi.md#verifyGuestLinkPin) | **POST** /v1beta1/extensions/org.libregraph/guestLinks/verify/pin | Verify a guest link PIN |
| [**verifyGuestLinkToken()**](GuestLinksApi.md#verifyGuestLinkToken) | **POST** /v1beta1/extensions/org.libregraph/guestLinks/verify/token | Verify a guest link token |


## `renewGuestLink()`

```php
renewGuestLink($guest_link_renew_request)
```

Renew a guest link

Generate a new guest link token and PIN for an existing guest link and publish the renewal event so the guest can be notified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\GuestLinksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$guest_link_renew_request = {"permissionId":"d14f9f65-2e9b-4fd6-bf6b-6748f229f2a2","token":"v1.5d41402abc4b2a76b9719d911017c5923c3a5a1e1f4e5d6c"}; // \OpenAPI\Client\Model\GuestLinkRenewRequest

try {
    $apiInstance->renewGuestLink($guest_link_renew_request);
} catch (Exception $e) {
    echo 'Exception when calling GuestLinksApi->renewGuestLink: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **guest_link_renew_request** | [**\OpenAPI\Client\Model\GuestLinkRenewRequest**](../Model/GuestLinkRenewRequest.md)|  | |

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

## `verifyGuestLinkPin()`

```php
verifyGuestLinkPin($guest_link_verify_pin_request): \OpenAPI\Client\Model\GuestLinkSessionResponse
```

Verify a guest link PIN

Exchange a PIN and a share id for a guest session.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\GuestLinksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$guest_link_verify_pin_request = {"pin":"123456","permissionId":"d14f9f65-2e9b-4fd6-bf6b-6748f229f2a2"}; // \OpenAPI\Client\Model\GuestLinkVerifyPinRequest

try {
    $result = $apiInstance->verifyGuestLinkPin($guest_link_verify_pin_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GuestLinksApi->verifyGuestLinkPin: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **guest_link_verify_pin_request** | [**\OpenAPI\Client\Model\GuestLinkVerifyPinRequest**](../Model/GuestLinkVerifyPinRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\GuestLinkSessionResponse**](../Model/GuestLinkSessionResponse.md)

### Authorization

[openId](../../README.md#openId), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `verifyGuestLinkToken()`

```php
verifyGuestLinkToken($guest_link_verify_token_request): \OpenAPI\Client\Model\GuestLinkSessionResponse
```

Verify a guest link token

Verify a guest link token to obtain a guest session.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\GuestLinksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$guest_link_verify_token_request = {"token":"v1.5d41402abc4b2a76b9719d911017c5923c3a5a1e1f4e5d6c"}; // \OpenAPI\Client\Model\GuestLinkVerifyTokenRequest

try {
    $result = $apiInstance->verifyGuestLinkToken($guest_link_verify_token_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GuestLinksApi->verifyGuestLinkToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **guest_link_verify_token_request** | [**\OpenAPI\Client\Model\GuestLinkVerifyTokenRequest**](../Model/GuestLinkVerifyTokenRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\GuestLinkSessionResponse**](../Model/GuestLinkSessionResponse.md)

### Authorization

[openId](../../README.md#openId), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
