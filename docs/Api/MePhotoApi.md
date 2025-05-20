# OpenAPI\Client\MePhotoApi

All URIs are relative to https://localhost:9200/graph, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteOwnUserPhoto()**](MePhotoApi.md#deleteOwnUserPhoto) | **DELETE** /v1.0/me/photo/$value | Delete the current user&#39;s profile photo |
| [**getOwnUserPhoto()**](MePhotoApi.md#getOwnUserPhoto) | **GET** /v1.0/me/photo/$value | Get the current user&#39;s profile photo |
| [**updateOwnUserPhotoPatch()**](MePhotoApi.md#updateOwnUserPhotoPatch) | **PATCH** /v1.0/me/photo/$value | Update the current user&#39;s profile photo |
| [**updateOwnUserPhotoPut()**](MePhotoApi.md#updateOwnUserPhotoPut) | **PUT** /v1.0/me/photo/$value | Update the current user&#39;s profile photo |


## `deleteOwnUserPhoto()`

```php
deleteOwnUserPhoto()
```

Delete the current user's profile photo

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\MePhotoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->deleteOwnUserPhoto();
} catch (Exception $e) {
    echo 'Exception when calling MePhotoApi->deleteOwnUserPhoto: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

void (empty response body)

### Authorization

[openId](../../README.md#openId), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOwnUserPhoto()`

```php
getOwnUserPhoto(): \SplFileObject
```

Get the current user's profile photo

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\MePhotoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getOwnUserPhoto();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MePhotoApi->getOwnUserPhoto: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\SplFileObject**

### Authorization

[openId](../../README.md#openId), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `image/jpeg`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateOwnUserPhotoPatch()`

```php
updateOwnUserPhotoPatch($body)
```

Update the current user's profile photo

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\MePhotoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = '/path/to/file.txt'; // \SplFileObject | New user photo

try {
    $apiInstance->updateOwnUserPhotoPatch($body);
} catch (Exception $e) {
    echo 'Exception when calling MePhotoApi->updateOwnUserPhotoPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | **\SplFileObject****\SplFileObject**| New user photo | [optional] |

### Return type

void (empty response body)

### Authorization

[openId](../../README.md#openId), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `image/jpeg`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateOwnUserPhotoPut()`

```php
updateOwnUserPhotoPut($body)
```

Update the current user's profile photo

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\MePhotoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = '/path/to/file.txt'; // \SplFileObject | New user photo

try {
    $apiInstance->updateOwnUserPhotoPut($body);
} catch (Exception $e) {
    echo 'Exception when calling MePhotoApi->updateOwnUserPhotoPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | **\SplFileObject****\SplFileObject**| New user photo | [optional] |

### Return type

void (empty response body)

### Authorization

[openId](../../README.md#openId), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `image/jpeg`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
