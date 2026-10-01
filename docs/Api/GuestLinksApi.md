# OpenAPI\Client\GuestLinksApi

All URIs are relative to https://localhost:9200/graph, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**redeemGuestLink()**](GuestLinksApi.md#redeemGuestLink) | **POST** /v1beta1/extensions/org.libregraph/guestLinks/redeem | Redeem a guest link token |


## `redeemGuestLink()`

```php
redeemGuestLink($guest_link_redeem_request): \OpenAPI\Client\Model\GuestLinkRedeemResponse
```

Redeem a guest link token

Redeem a guest link token to obtain a guest session.

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
$guest_link_redeem_request = {"token":"v1.5d41402abc4b2a76b9719d911017c5923c3a5a1e1f4e5d6c"}; // \OpenAPI\Client\Model\GuestLinkRedeemRequest

try {
    $result = $apiInstance->redeemGuestLink($guest_link_redeem_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GuestLinksApi->redeemGuestLink: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **guest_link_redeem_request** | [**\OpenAPI\Client\Model\GuestLinkRedeemRequest**](../Model/GuestLinkRedeemRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\GuestLinkRedeemResponse**](../Model/GuestLinkRedeemResponse.md)

### Authorization

[openId](../../README.md#openId), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
