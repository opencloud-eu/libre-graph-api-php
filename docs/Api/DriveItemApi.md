# OpenAPI\Client\DriveItemApi

All URIs are relative to https://localhost:9200/graph, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createChildDriveItem()**](DriveItemApi.md#createChildDriveItem) | **POST** /v1beta1/drives/{drive-id}/items/{item-id}/children | Create a new DriveItem under a parent item |
| [**deleteDriveItem()**](DriveItemApi.md#deleteDriveItem) | **DELETE** /v1beta1/drives/{drive-id}/items/{item-id} | Delete a DriveItem. |
| [**getDriveItem()**](DriveItemApi.md#getDriveItem) | **GET** /v1beta1/drives/{drive-id}/items/{item-id} | Get a DriveItem. |
| [**getDriveItemChildren()**](DriveItemApi.md#getDriveItemChildren) | **GET** /v1.0/drives/{drive-id}/items/{item-id}/children | List children of a DriveItem |
| [**getDriveItemContent()**](DriveItemApi.md#getDriveItemContent) | **GET** /v1beta1/drives/{drive-id}/items/{item-id}/content | Download the content of a DriveItem |
| [**updateDriveItem()**](DriveItemApi.md#updateDriveItem) | **PATCH** /v1beta1/drives/{drive-id}/items/{item-id} | Update a DriveItem. |


## `createChildDriveItem()`

```php
createChildDriveItem($drive_id, $item_id, $drive_item, $at_libre_graph_conflict_behavior, $at_libre_graph_missing_parents_behavior): \OpenAPI\Client\Model\DriveItem
```

Create a new DriveItem under a parent item

Create a new folder or DriveItem in a Drive with the specified parent item. The parent must exist and be a folder.  Modeled on the MS Graph create driveItem endpoint (https://learn.microsoft.com/en-us/graph/api/driveitem-post-children). Identical request and response shape to the [drive-root variant](#/drives.root/CreateDriveItem), just with an explicit parent item id rather than the drive root.  The request body must specify exactly one of `folder` (set to `{}` to create a folder) or `file` (to create a file item). Requests with none of these, or with both, return 400. The `@libre.graph.conflictBehavior` query parameter controls what happens if a child with the same name already exists.  This endpoint also accepts the MS Graph colon-syntax URL form:      POST /v1beta1/drives/{drive-id}/items/{item-id}:/{path}:/children  OpenAPI cannot express the colon-delimited path segment, so this URL form is not represented as a separate operation in this specification. The server still accepts it, resolves `:/{path}:` as the parent of the new item (relative to `item-id`), and applies `@libre.graph.missingParentsBehavior` to decide whether to create missing intermediate folders.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\DriveItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$drive_id = a0ca6a90-a365-4782-871e-d44447bbc668$a0ca6a90-a365-4782-871e-d44447bbc668; // string | key: id of drive
$item_id = a0ca6a90-a365-4782-871e-d44447bbc668$a0ca6a90-a365-4782-871e-d44447bbc668!share-id; // string | key: id of item
$drive_item = new \OpenAPI\Client\Model\DriveItem(); // \OpenAPI\Client\Model\DriveItem | In the request body, provide a JSON object describing the new driveItem. Must specify exactly one of `folder` or `file`.
$at_libre_graph_conflict_behavior = 'fail'; // string | Controls what happens when a child with the same name already exists. `fail` (default) returns 409; `replace` overwrites the existing item. MS Graph's `rename` value is not supported.
$at_libre_graph_missing_parents_behavior = 'fail'; // string | Controls what happens when a colon-syntax URL refers to a path whose intermediate folders don't all exist yet. `fail` (default) returns 404; `create` creates the missing intermediate folders before creating the final item. Only meaningful for colon-syntax URLs; ignored otherwise.

try {
    $result = $apiInstance->createChildDriveItem($drive_id, $item_id, $drive_item, $at_libre_graph_conflict_behavior, $at_libre_graph_missing_parents_behavior);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DriveItemApi->createChildDriveItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **drive_id** | **string**| key: id of drive | |
| **item_id** | **string**| key: id of item | |
| **drive_item** | [**\OpenAPI\Client\Model\DriveItem**](../Model/DriveItem.md)| In the request body, provide a JSON object describing the new driveItem. Must specify exactly one of &#x60;folder&#x60; or &#x60;file&#x60;. | |
| **at_libre_graph_conflict_behavior** | **string**| Controls what happens when a child with the same name already exists. &#x60;fail&#x60; (default) returns 409; &#x60;replace&#x60; overwrites the existing item. MS Graph&#39;s &#x60;rename&#x60; value is not supported. | [optional] [default to &#39;fail&#39;] |
| **at_libre_graph_missing_parents_behavior** | **string**| Controls what happens when a colon-syntax URL refers to a path whose intermediate folders don&#39;t all exist yet. &#x60;fail&#x60; (default) returns 404; &#x60;create&#x60; creates the missing intermediate folders before creating the final item. Only meaningful for colon-syntax URLs; ignored otherwise. | [optional] [default to &#39;fail&#39;] |

### Return type

[**\OpenAPI\Client\Model\DriveItem**](../Model/DriveItem.md)

### Authorization

[openId](../../README.md#openId), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteDriveItem()`

```php
deleteDriveItem($drive_id, $item_id)
```

Delete a DriveItem.

Delete a DriveItem by using its ID.  Deleting items using this method moves the items to the recycle bin instead of permanently deleting the item.  Mounted shares in the share jail are unmounted. The `@client.synchronize` property of the `driveItem` in the [sharedWithMe](#/me.drive/ListSharedWithMe) endpoint will change to false.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\DriveItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$drive_id = a0ca6a90-a365-4782-871e-d44447bbc668$a0ca6a90-a365-4782-871e-d44447bbc668; // string | key: id of drive
$item_id = a0ca6a90-a365-4782-871e-d44447bbc668$a0ca6a90-a365-4782-871e-d44447bbc668!share-id; // string | key: id of item

try {
    $apiInstance->deleteDriveItem($drive_id, $item_id);
} catch (Exception $e) {
    echo 'Exception when calling DriveItemApi->deleteDriveItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **drive_id** | **string**| key: id of drive | |
| **item_id** | **string**| key: id of item | |

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

## `getDriveItem()`

```php
getDriveItem($drive_id, $item_id, $select): \OpenAPI\Client\Model\DriveItem
```

Get a DriveItem.

Get a DriveItem by using its ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\DriveItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$drive_id = a0ca6a90-a365-4782-871e-d44447bbc668$a0ca6a90-a365-4782-871e-d44447bbc668; // string | key: id of drive
$item_id = a0ca6a90-a365-4782-871e-d44447bbc668$a0ca6a90-a365-4782-871e-d44447bbc668!share-id; // string | key: id of item
$select = ["@microsoft.graph.downloadUrl"]; // string[] | Select additional properties to be returned.

try {
    $result = $apiInstance->getDriveItem($drive_id, $item_id, $select);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DriveItemApi->getDriveItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **drive_id** | **string**| key: id of drive | |
| **item_id** | **string**| key: id of item | |
| **select** | [**string[]**](../Model/string.md)| Select additional properties to be returned. | [optional] |

### Return type

[**\OpenAPI\Client\Model\DriveItem**](../Model/DriveItem.md)

### Authorization

[openId](../../README.md#openId), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDriveItemChildren()`

```php
getDriveItemChildren($drive_id, $item_id): \OpenAPI\Client\Model\CollectionOfDriveItems
```

List children of a DriveItem

List the children of the item identified by `item-id` in the drive identified by `drive-id`. The item must exist and be a folder.  Modeled on the MS Graph list driveItem children endpoint (https://learn.microsoft.com/en-us/graph/api/driveitem-list-children).  This endpoint also accepts the MS Graph colon-syntax URL forms:      GET /v1.0/drives/{drive-id}/root:/{path}:/children     GET /v1.0/drives/{drive-id}/items/{item-id}:/{path}:/children  OpenAPI cannot express the colon-delimited path segment, so these URL forms are not represented as separate operations in this specification. The server still accepts them, resolves `:/{path}:` as the parent item, and lists its children.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\DriveItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$drive_id = a0ca6a90-a365-4782-871e-d44447bbc668$a0ca6a90-a365-4782-871e-d44447bbc668; // string | key: id of drive
$item_id = a0ca6a90-a365-4782-871e-d44447bbc668$a0ca6a90-a365-4782-871e-d44447bbc668!share-id; // string | key: id of item

try {
    $result = $apiInstance->getDriveItemChildren($drive_id, $item_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DriveItemApi->getDriveItemChildren: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **drive_id** | **string**| key: id of drive | |
| **item_id** | **string**| key: id of item | |

### Return type

[**\OpenAPI\Client\Model\CollectionOfDriveItems**](../Model/CollectionOfDriveItems.md)

### Authorization

[openId](../../README.md#openId), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDriveItemContent()`

```php
getDriveItemContent($drive_id, $item_id): \OpenAPI\Client\Model\OdataError
```

Download the content of a DriveItem

Download the contents of the primary stream (file) of a driveItem. Only driveItem objects with a `file` facet can be downloaded.  The response is a `302 Found` redirecting to a pre-authenticated download URL for the file. This is the same URL that is returned via the `@microsoft.graph.downloadUrl` instance annotation on the driveItem when requested via `$select`. Choose between the two based on whether you want to call the redirecting `/content` endpoint directly (for example, with a client that follows redirects automatically) or you want to inspect / schedule / prefetch the URL yourself via the annotation.  The pre-authenticated URL is short-lived and does not require an `Authorization` header.  To download a partial range of bytes, apply the `Range` header to the redirect target (the pre-authenticated URL), not to the `/content` request.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\DriveItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$drive_id = 'drive_id_example'; // string | key: id of drive
$item_id = 'item_id_example'; // string | key: id of item

try {
    $result = $apiInstance->getDriveItemContent($drive_id, $item_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DriveItemApi->getDriveItemContent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **drive_id** | **string**| key: id of drive | |
| **item_id** | **string**| key: id of item | |

### Return type

[**\OpenAPI\Client\Model\OdataError**](../Model/OdataError.md)

### Authorization

[openId](../../README.md#openId), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateDriveItem()`

```php
updateDriveItem($drive_id, $item_id, $drive_item): \OpenAPI\Client\Model\DriveItem
```

Update a DriveItem.

Update a DriveItem.  The request body must include a JSON object with the properties to update. Only the properties that are provided will be updated.  Currently it supports updating the following properties:  * `@UI.Hidden` - Hides the item from the UI.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\DriveItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$drive_id = a0ca6a90-a365-4782-871e-d44447bbc668$a0ca6a90-a365-4782-871e-d44447bbc668; // string | key: id of drive
$item_id = a0ca6a90-a365-4782-871e-d44447bbc668$a0ca6a90-a365-4782-871e-d44447bbc668!share-id; // string | key: id of item
$drive_item = {"@UI.Hidden":true}; // \OpenAPI\Client\Model\DriveItem | DriveItem properties to update

try {
    $result = $apiInstance->updateDriveItem($drive_id, $item_id, $drive_item);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DriveItemApi->updateDriveItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **drive_id** | **string**| key: id of drive | |
| **item_id** | **string**| key: id of item | |
| **drive_item** | [**\OpenAPI\Client\Model\DriveItem**](../Model/DriveItem.md)| DriveItem properties to update | |

### Return type

[**\OpenAPI\Client\Model\DriveItem**](../Model/DriveItem.md)

### Authorization

[openId](../../README.md#openId), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
