# Swagger\Client\PlayerApi

All URIs are relative to *http://localhost/api/v2/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**buildPlayerConfiguration**](PlayerApi.md#buildPlayerConfiguration) | **POST** /player/configuration | Returns player configuration
[**deletePlayerZip**](PlayerApi.md#deletePlayerZip) | **DELETE** /player/zip | Deletes the current exported player zip
[**getPlayerZip**](PlayerApi.md#getPlayerZip) | **GET** /player/zip | Gets the customized player files for this system
[**postPlayerResults**](PlayerApi.md#postPlayerResults) | **POST** /player/results | Endpoint for player to send results


# **buildPlayerConfiguration**
> \Swagger\Client\Model\PlayerConfigurationResultsSchema buildPlayerConfiguration($engine_tenant_name, $player_configuration_schema)

Returns player configuration

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\PlayerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$engine_tenant_name = "engine_tenant_name_example"; // string | tenant for this request
$player_configuration_schema = new \Swagger\Client\Model\PlayerConfigurationSchema(); // \Swagger\Client\Model\PlayerConfigurationSchema | 

try {
    $result = $apiInstance->buildPlayerConfiguration($engine_tenant_name, $player_configuration_schema);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlayerApi->buildPlayerConfiguration: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **engine_tenant_name** | **string**| tenant for this request |
 **player_configuration_schema** | [**\Swagger\Client\Model\PlayerConfigurationSchema**](../Model/PlayerConfigurationSchema.md)|  |

### Return type

[**\Swagger\Client\Model\PlayerConfigurationResultsSchema**](../Model/PlayerConfigurationResultsSchema.md)

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deletePlayerZip**
> deletePlayerZip($engine_tenant_name, $player)

Deletes the current exported player zip

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\PlayerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$engine_tenant_name = "engine_tenant_name_example"; // string | optional tenant for this request
$player = "modern"; // string | 

try {
    $apiInstance->deletePlayerZip($engine_tenant_name, $player);
} catch (Exception $e) {
    echo 'Exception when calling PlayerApi->deletePlayerZip: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **engine_tenant_name** | **string**| optional tenant for this request | [optional]
 **player** | **string**|  | [optional] [default to modern]

### Return type

void (empty response body)

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPlayerZip**
> \SplFileObject getPlayerZip($engine_tenant_name, $player)

Gets the customized player files for this system

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\PlayerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$engine_tenant_name = "engine_tenant_name_example"; // string | optional tenant for this request
$player = "modern"; // string | 

try {
    $result = $apiInstance->getPlayerZip($engine_tenant_name, $player);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlayerApi->getPlayerZip: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **engine_tenant_name** | **string**| optional tenant for this request | [optional]
 **player** | **string**|  | [optional] [default to modern]

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/zip

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postPlayerResults**
> postPlayerResults($engine_tenant_name, $player_results_schema)

Endpoint for player to send results

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\PlayerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$engine_tenant_name = "engine_tenant_name_example"; // string | tenant for this request
$player_results_schema = new \Swagger\Client\Model\PlayerResultsSchema(); // \Swagger\Client\Model\PlayerResultsSchema | 

try {
    $apiInstance->postPlayerResults($engine_tenant_name, $player_results_schema);
} catch (Exception $e) {
    echo 'Exception when calling PlayerApi->postPlayerResults: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **engine_tenant_name** | **string**| tenant for this request |
 **player_results_schema** | [**\Swagger\Client\Model\PlayerResultsSchema**](../Model/PlayerResultsSchema.md)|  |

### Return type

void (empty response body)

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

