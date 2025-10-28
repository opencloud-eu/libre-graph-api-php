# OpenAPI\Client\EducationUserApi

All URIs are relative to https://localhost:9200/graph, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createEducationUser()**](EducationUserApi.md#createEducationUser) | **POST** /v1.0/education/users | Add new education user |
| [**deleteEducationUser()**](EducationUserApi.md#deleteEducationUser) | **DELETE** /v1.0/education/users/{user-id} | Delete educationUser |
| [**getEducationUser()**](EducationUserApi.md#getEducationUser) | **GET** /v1.0/education/users/{user-id} | Get properties of educationUser |
| [**listEducationUsers()**](EducationUserApi.md#listEducationUsers) | **GET** /v1.0/education/users | Get entities from education users |
| [**updateEducationUser()**](EducationUserApi.md#updateEducationUser) | **PATCH** /v1.0/education/users/{user-id} | Update properties of educationUser |


## `createEducationUser()`

```php
createEducationUser($education_user): \OpenAPI\Client\Model\EducationUser
```

Add new education user

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (plain) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\EducationUserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$education_user = new \OpenAPI\Client\Model\EducationUser(); // \OpenAPI\Client\Model\EducationUser | New entity

try {
    $result = $apiInstance->createEducationUser($education_user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EducationUserApi->createEducationUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **education_user** | [**\OpenAPI\Client\Model\EducationUser**](../Model/EducationUser.md)| New entity | |

### Return type

[**\OpenAPI\Client\Model\EducationUser**](../Model/EducationUser.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteEducationUser()`

```php
deleteEducationUser($user_id)
```

Delete educationUser

Deletes an education user by their internal ID.  **To delete by external ID:** If you only have an external ID, you must first retrieve the user's internal ID: 1. Call `GET /graph/v1.0/education/users?$filter=externalId eq '{value}'` 2. Extract the `id` from the response 3. Use that `id` in this DELETE endpoint  See the [ListEducationUsers](#/educationUser/ListEducationUsers) operation for query details.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (plain) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\EducationUserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = 90eedea1-dea1-90ee-a1de-ee90a1deee90; // string | key: internal user id (UUID format) or username of user.  **Note:** If you only have an external ID, first query the user  with `GET /graph/v1.0/education/users?$filter=externalId eq '{value}'`  to retrieve the internal ID.

try {
    $apiInstance->deleteEducationUser($user_id);
} catch (Exception $e) {
    echo 'Exception when calling EducationUserApi->deleteEducationUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_id** | **string**| key: internal user id (UUID format) or username of user.  **Note:** If you only have an external ID, first query the user  with &#x60;GET /graph/v1.0/education/users?$filter&#x3D;externalId eq &#39;{value}&#39;&#x60;  to retrieve the internal ID. | |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEducationUser()`

```php
getEducationUser($user_id, $expand): \OpenAPI\Client\Model\EducationUser
```

Get properties of educationUser

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (plain) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\EducationUserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = 90eedea1-dea1-90ee-a1de-ee90a1deee90; // string | key: id or username of user
$expand = array('expand_example'); // string[] | Expand related entities

try {
    $result = $apiInstance->getEducationUser($user_id, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EducationUserApi->getEducationUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_id** | **string**| key: id or username of user | |
| **expand** | [**string[]**](../Model/string.md)| Expand related entities | [optional] |

### Return type

[**\OpenAPI\Client\Model\EducationUser**](../Model/EducationUser.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listEducationUsers()`

```php
listEducationUsers($filter, $orderby, $expand): \OpenAPI\Client\Model\CollectionOfEducationUser
```

Get entities from education users

Retrieves a collection of education users with optional filtering, ordering, and expansion.  **Filtering by external ID:** Use `$filter` to query users by their external identifier, for example: `$filter=externalId eq 'EX12345'`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (plain) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\EducationUserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$filter = externalId eq 'ext_12345'; // string | Filter items by property values. Supports a subset of OData filter expressions.  **Supported filters:** - By external ID: `externalId eq 'ext_12345'`
$orderby = array('orderby_example'); // string[] | Order items by property values
$expand = array('expand_example'); // string[] | Expand related entities

try {
    $result = $apiInstance->listEducationUsers($filter, $orderby, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EducationUserApi->listEducationUsers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **filter** | **string**| Filter items by property values. Supports a subset of OData filter expressions.  **Supported filters:** - By external ID: &#x60;externalId eq &#39;ext_12345&#39;&#x60; | [optional] |
| **orderby** | [**string[]**](../Model/string.md)| Order items by property values | [optional] |
| **expand** | [**string[]**](../Model/string.md)| Expand related entities | [optional] |

### Return type

[**\OpenAPI\Client\Model\CollectionOfEducationUser**](../Model/CollectionOfEducationUser.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateEducationUser()`

```php
updateEducationUser($user_id, $education_user): \OpenAPI\Client\Model\EducationUser
```

Update properties of educationUser

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (plain) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\EducationUserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = 90eedea1-dea1-90ee-a1de-ee90a1deee90; // string | key: id or username of user
$education_user = {"mail":"max.mustermann@new.domain"}; // \OpenAPI\Client\Model\EducationUser | New property values

try {
    $result = $apiInstance->updateEducationUser($user_id, $education_user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EducationUserApi->updateEducationUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_id** | **string**| key: id or username of user | |
| **education_user** | [**\OpenAPI\Client\Model\EducationUser**](../Model/EducationUser.md)| New property values | |

### Return type

[**\OpenAPI\Client\Model\EducationUser**](../Model/EducationUser.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
