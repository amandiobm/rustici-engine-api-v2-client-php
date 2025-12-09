# RusticiSoftware\Engine\V2\PingApi



All URIs are relative to http://localhost/api/v2, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**ping()**](PingApi.md#ping) | **GET** /ping | Get back a message indicating that the API is working. |


## `ping()`

```php
ping($engine_tenant_name): \RusticiSoftware\Engine\V2\Model\PingSchema
```

Get back a message indicating that the API is working.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RusticiSoftware\Engine\V2\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

// Configure OAuth2 access token for authorization: oauth
$config = RusticiSoftware\Engine\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new RusticiSoftware\Engine\V2\Api\PingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$engine_tenant_name = 'engine_tenant_name_example'; // string | optional tenant for this request

try {
    $result = $apiInstance->ping($engine_tenant_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PingApi->ping: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **engine_tenant_name** | **string**| optional tenant for this request | [optional] |

### Return type

[**\RusticiSoftware\Engine\V2\Model\PingSchema**](../Model/PingSchema.md)

### Authorization

[basic](../../README.md#basic), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
