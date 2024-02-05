# Swagger\Client\ContentConnectorsApi

All URIs are relative to *http://localhost/api/v2/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createConnector**](ContentConnectorsApi.md#createConnector) | **POST** /contentConnectors | Create a connector
[**getConnectorContentList**](ContentConnectorsApi.md#getConnectorContentList) | **GET** /contentConnectors/availableContent | Get list of available content
[**getConnectorsList**](ContentConnectorsApi.md#getConnectorsList) | **GET** /contentConnectors | Get content connectors
[**getRefreshJobStatus**](ContentConnectorsApi.md#getRefreshJobStatus) | **GET** /contentConnectors/availableContent/refreshJobs/{refreshJobId} | Check the status of a refresh job.
[**refreshConnectorContentListJob**](ContentConnectorsApi.md#refreshConnectorContentListJob) | **POST** /contentConnectors/availableContent/refreshJobs | Start a job to refresh the list of available content
[**searchRemoteConnectorContent**](ContentConnectorsApi.md#searchRemoteConnectorContent) | **POST** /contentConnectors/remoteSearch | search remote content
[**updateConnector**](ContentConnectorsApi.md#updateConnector) | **PUT** /contentConnectors/{connectorId} | Update a connector


# **createConnector**
> \Swagger\Client\Model\StringResultSchema createConnector($connector, $engine_tenant_name)

Create a connector

Creates a connector for the specified tenant, or a system-wide connector if tenant is not specified.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

// Configure OAuth2 access token for authorization: oauth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ContentConnectorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$connector = new \Swagger\Client\Model\CreateConnectorSchema(); // \Swagger\Client\Model\CreateConnectorSchema | 
$engine_tenant_name = "engine_tenant_name_example"; // string | optional tenant for this request

try {
    $result = $apiInstance->createConnector($connector, $engine_tenant_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContentConnectorsApi->createConnector: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **connector** | [**\Swagger\Client\Model\CreateConnectorSchema**](../Model/CreateConnectorSchema.md)|  |
 **engine_tenant_name** | **string**| optional tenant for this request | [optional]

### Return type

[**\Swagger\Client\Model\StringResultSchema**](../Model/StringResultSchema.md)

### Authorization

[basic](../../README.md#basic), [oauth](../../README.md#oauth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getConnectorContentList**
> \Swagger\Client\Model\ConnectorContentListSchema getConnectorContentList($engine_tenant_name, $connector_id, $since, $more, $not_imported, $search, $include_all_metadata)

Get list of available content

Gets the list of content available, either for all connectors, or for only a specific connector if specified. If tenant is specified, this is the list of content for that tenant, if not, it is only content available through connectors configured for the whole system (not connectors configured for other tenants)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

// Configure OAuth2 access token for authorization: oauth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ContentConnectorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$engine_tenant_name = "engine_tenant_name_example"; // string | optional tenant for this request
$connector_id = "connector_id_example"; // string | the connector id
$since = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only items updated since the specified ISO 8601 TimeStamp (inclusive) are included. If a time zone is not specified, UTC time zone will be used.
$more = "more_example"; // string | Value for this parameter will be provided in the 'more' property of lists, where needed. An opaque value, construction and parsing may change without notice.
$not_imported = false; // bool | 
$search = "search_example"; // string | 
$include_all_metadata = false; // bool | 

try {
    $result = $apiInstance->getConnectorContentList($engine_tenant_name, $connector_id, $since, $more, $not_imported, $search, $include_all_metadata);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContentConnectorsApi->getConnectorContentList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **engine_tenant_name** | **string**| optional tenant for this request | [optional]
 **connector_id** | **string**| the connector id | [optional]
 **since** | **\DateTime**| Only items updated since the specified ISO 8601 TimeStamp (inclusive) are included. If a time zone is not specified, UTC time zone will be used. | [optional]
 **more** | **string**| Value for this parameter will be provided in the &#39;more&#39; property of lists, where needed. An opaque value, construction and parsing may change without notice. | [optional]
 **not_imported** | **bool**|  | [optional] [default to false]
 **search** | **string**|  | [optional]
 **include_all_metadata** | **bool**|  | [optional] [default to false]

### Return type

[**\Swagger\Client\Model\ConnectorContentListSchema**](../Model/ConnectorContentListSchema.md)

### Authorization

[basic](../../README.md#basic), [oauth](../../README.md#oauth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getConnectorsList**
> \Swagger\Client\Model\ConnectorListSchema getConnectorsList($engine_tenant_name, $include_additional_instance_information)

Get content connectors

Gets list of connectors, for the specified tenant, or connectors that apply to all tenants if tenant is not specified.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

// Configure OAuth2 access token for authorization: oauth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ContentConnectorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$engine_tenant_name = "engine_tenant_name_example"; // string | optional tenant for this request
$include_additional_instance_information = true; // bool | 

try {
    $result = $apiInstance->getConnectorsList($engine_tenant_name, $include_additional_instance_information);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContentConnectorsApi->getConnectorsList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **engine_tenant_name** | **string**| optional tenant for this request | [optional]
 **include_additional_instance_information** | **bool**|  | [optional]

### Return type

[**\Swagger\Client\Model\ConnectorListSchema**](../Model/ConnectorListSchema.md)

### Authorization

[basic](../../README.md#basic), [oauth](../../README.md#oauth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRefreshJobStatus**
> \Swagger\Client\Model\RefreshConnectorResultListSchema getRefreshJobStatus($refresh_job_id, $engine_tenant_name)

Check the status of a refresh job.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

// Configure OAuth2 access token for authorization: oauth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ContentConnectorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$refresh_job_id = "refresh_job_id_example"; // string | The Id received when the refresh job was submitted to the refreshJobs resource.
$engine_tenant_name = "engine_tenant_name_example"; // string | optional tenant for this request

try {
    $result = $apiInstance->getRefreshJobStatus($refresh_job_id, $engine_tenant_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContentConnectorsApi->getRefreshJobStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **refresh_job_id** | **string**| The Id received when the refresh job was submitted to the refreshJobs resource. |
 **engine_tenant_name** | **string**| optional tenant for this request | [optional]

### Return type

[**\Swagger\Client\Model\RefreshConnectorResultListSchema**](../Model/RefreshConnectorResultListSchema.md)

### Authorization

[basic](../../README.md#basic), [oauth](../../README.md#oauth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **refreshConnectorContentListJob**
> \Swagger\Client\Model\StringResultSchema refreshConnectorContentListJob($engine_tenant_name, $connector_id)

Start a job to refresh the list of available content

Starts a job to refresh the list of content available, either for all connectors, or for only a specific connector if specified. If a tenant is specified, then this is this list of content for that tenant. If a tenant is not specified, then the list will only contain content available through connectors configured for the whole system (not connectors configured for other tenants)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

// Configure OAuth2 access token for authorization: oauth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ContentConnectorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$engine_tenant_name = "engine_tenant_name_example"; // string | optional tenant for this request
$connector_id = "connector_id_example"; // string | the connector id

try {
    $result = $apiInstance->refreshConnectorContentListJob($engine_tenant_name, $connector_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContentConnectorsApi->refreshConnectorContentListJob: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **engine_tenant_name** | **string**| optional tenant for this request | [optional]
 **connector_id** | **string**| the connector id | [optional]

### Return type

[**\Swagger\Client\Model\StringResultSchema**](../Model/StringResultSchema.md)

### Authorization

[basic](../../README.md#basic), [oauth](../../README.md#oauth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchRemoteConnectorContent**
> \Swagger\Client\Model\ConnectorContentListSchema searchRemoteConnectorContent($search_info, $engine_tenant_name)

search remote content

Searches the remote content available, either for all connectors, or for only a specific connector if specified. If tenant is specified, this is the list of content for that tenant, if not, it is only content available through connectors configured for the whole system (not connectors configured for other tenants)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

// Configure OAuth2 access token for authorization: oauth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ContentConnectorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$search_info = new \Swagger\Client\Model\ConnectorContentSearchSchema(); // \Swagger\Client\Model\ConnectorContentSearchSchema | 
$engine_tenant_name = "engine_tenant_name_example"; // string | optional tenant for this request

try {
    $result = $apiInstance->searchRemoteConnectorContent($search_info, $engine_tenant_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContentConnectorsApi->searchRemoteConnectorContent: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **search_info** | [**\Swagger\Client\Model\ConnectorContentSearchSchema**](../Model/ConnectorContentSearchSchema.md)|  |
 **engine_tenant_name** | **string**| optional tenant for this request | [optional]

### Return type

[**\Swagger\Client\Model\ConnectorContentListSchema**](../Model/ConnectorContentListSchema.md)

### Authorization

[basic](../../README.md#basic), [oauth](../../README.md#oauth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateConnector**
> updateConnector($connector_id, $connector, $engine_tenant_name)

Update a connector

Update the specified connector.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

// Configure OAuth2 access token for authorization: oauth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ContentConnectorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$connector_id = "connector_id_example"; // string | the connector id
$connector = new \Swagger\Client\Model\UpdateConnectorSchema(); // \Swagger\Client\Model\UpdateConnectorSchema | 
$engine_tenant_name = "engine_tenant_name_example"; // string | optional tenant for this request

try {
    $apiInstance->updateConnector($connector_id, $connector, $engine_tenant_name);
} catch (Exception $e) {
    echo 'Exception when calling ContentConnectorsApi->updateConnector: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **connector_id** | **string**| the connector id |
 **connector** | [**\Swagger\Client\Model\UpdateConnectorSchema**](../Model/UpdateConnectorSchema.md)|  |
 **engine_tenant_name** | **string**| optional tenant for this request | [optional]

### Return type

void (empty response body)

### Authorization

[basic](../../README.md#basic), [oauth](../../README.md#oauth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

