# RusticiSoftware\Engine\V2\AboutApi



All URIs are relative to http://localhost/api/v2, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getAbout()**](AboutApi.md#getAbout) | **GET** /about | Get back the version and platform of the running instance of Engine |
| [**getRegistrationCount()**](AboutApi.md#getRegistrationCount) | **GET** /about/registrationCount | Gets the number of created or launched registrations for the specified tenant or across all tenants when none is specified |
| [**getUserCount()**](AboutApi.md#getUserCount) | **GET** /about/userCount | Gets the number of users for the specified tenant or across all tenants when none is specified |


## `getAbout()`

```php
getAbout($engine_tenant_name): \RusticiSoftware\Engine\V2\Model\AboutSchema
```

Get back the version and platform of the running instance of Engine

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


$apiInstance = new RusticiSoftware\Engine\V2\Api\AboutApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$engine_tenant_name = 'engine_tenant_name_example'; // string | optional tenant for this request

try {
    $result = $apiInstance->getAbout($engine_tenant_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AboutApi->getAbout: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **engine_tenant_name** | **string**| optional tenant for this request | [optional] |

### Return type

[**\RusticiSoftware\Engine\V2\Model\AboutSchema**](../Model/AboutSchema.md)

### Authorization

[basic](../../README.md#basic), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getRegistrationCount()`

```php
getRegistrationCount($engine_tenant_name, $since, $until): \RusticiSoftware\Engine\V2\Model\RegistrationCountSummarySchema
```

Gets the number of created or launched registrations for the specified tenant or across all tenants when none is specified

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


$apiInstance = new RusticiSoftware\Engine\V2\Api\AboutApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$engine_tenant_name = 'engine_tenant_name_example'; // string | optional tenant for this request
$since = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Only items updated since the specified ISO 8601 TimeStamp (inclusive) are included. If a time zone is not specified, UTC time zone will be used.
$until = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Only items updated up until the specified ISO 8601 TimeStamp (inclusive) are included. If a time zone is not specified, UTC time zone will be used.

try {
    $result = $apiInstance->getRegistrationCount($engine_tenant_name, $since, $until);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AboutApi->getRegistrationCount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **engine_tenant_name** | **string**| optional tenant for this request | [optional] |
| **since** | **\DateTime**| Only items updated since the specified ISO 8601 TimeStamp (inclusive) are included. If a time zone is not specified, UTC time zone will be used. | [optional] |
| **until** | **\DateTime**| Only items updated up until the specified ISO 8601 TimeStamp (inclusive) are included. If a time zone is not specified, UTC time zone will be used. | [optional] |

### Return type

[**\RusticiSoftware\Engine\V2\Model\RegistrationCountSummarySchema**](../Model/RegistrationCountSummarySchema.md)

### Authorization

[basic](../../README.md#basic), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getUserCount()`

```php
getUserCount($engine_tenant_name, $since, $until, $use_usage_statistics): \RusticiSoftware\Engine\V2\Model\UserCountSummarySchema
```

Gets the number of users for the specified tenant or across all tenants when none is specified

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


$apiInstance = new RusticiSoftware\Engine\V2\Api\AboutApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$engine_tenant_name = 'engine_tenant_name_example'; // string | optional tenant for this request
$since = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Only items updated since the specified ISO 8601 TimeStamp (inclusive) are included. If a time zone is not specified, UTC time zone will be used.
$until = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Only items updated up until the specified ISO 8601 TimeStamp (inclusive) are included. If a time zone is not specified, UTC time zone will be used.
$use_usage_statistics = false; // bool

try {
    $result = $apiInstance->getUserCount($engine_tenant_name, $since, $until, $use_usage_statistics);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AboutApi->getUserCount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **engine_tenant_name** | **string**| optional tenant for this request | [optional] |
| **since** | **\DateTime**| Only items updated since the specified ISO 8601 TimeStamp (inclusive) are included. If a time zone is not specified, UTC time zone will be used. | [optional] |
| **until** | **\DateTime**| Only items updated up until the specified ISO 8601 TimeStamp (inclusive) are included. If a time zone is not specified, UTC time zone will be used. | [optional] |
| **use_usage_statistics** | **bool**|  | [optional] [default to false] |

### Return type

[**\RusticiSoftware\Engine\V2\Model\UserCountSummarySchema**](../Model/UserCountSummarySchema.md)

### Authorization

[basic](../../README.md#basic), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
