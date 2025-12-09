# RusticiSoftware\Engine\V2\XapiApi



All URIs are relative to http://localhost/api/v2, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createStatementPipe()**](XapiApi.md#createStatementPipe) | **POST** /xapi/statementPipes | Create an xAPI statement pipe. |
| [**createXapiCredential()**](XapiApi.md#createXapiCredential) | **POST** /xapi/credentials | Create an xAPI credential |
| [**deleteStatementPipe()**](XapiApi.md#deleteStatementPipe) | **DELETE** /xapi/statementPipes/{statementPipeId} | Deletes the xAPI statement pipe specified with the id &#x60;statementPipeId&#x60; |
| [**deleteXapiCredential()**](XapiApi.md#deleteXapiCredential) | **DELETE** /xapi/credentials/{xapiCredentialId} | Deletes the xAPI credential specified with the id &#x60;xapiCredentialId&#x60; |
| [**getStatementPipe()**](XapiApi.md#getStatementPipe) | **GET** /xapi/statementPipes/{statementPipeId} | Retrieves xAPI statement pipe specified by id &#x60;statementPipeId.&#x60; |
| [**getStatementPipes()**](XapiApi.md#getStatementPipes) | **GET** /xapi/statementPipes | Get a list of all xAPI statement pipes |
| [**getXapiCredential()**](XapiApi.md#getXapiCredential) | **GET** /xapi/credentials/{xapiCredentialId} | Retrieves the xAPI credential specified by id &#x60;xapiCredentialId&#x60; |
| [**getXapiCredentials()**](XapiApi.md#getXapiCredentials) | **GET** /xapi/credentials | Get a list of all xAPI credentials |
| [**setStatementPipe()**](XapiApi.md#setStatementPipe) | **PUT** /xapi/statementPipes/{statementPipeId} | Either edits an existing xAPI statement pipe or creates a new one, specified by id &#x60;statementPipeId&#x60; |
| [**setXapiCredential()**](XapiApi.md#setXapiCredential) | **PUT** /xapi/credentials/{xapiCredentialId} | Either edits an existing xAPI credential or creates a new one, specified by id &#x60;xapiCredentialId&#x60; |


## `createStatementPipe()`

```php
createStatementPipe($engine_tenant_name, $xapi_statement_pipe): \RusticiSoftware\Engine\V2\Model\StringResultSchema
```

Create an xAPI statement pipe.

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


$apiInstance = new RusticiSoftware\Engine\V2\Api\XapiApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$engine_tenant_name = 'engine_tenant_name_example'; // string | tenant for this request
$xapi_statement_pipe = new \RusticiSoftware\Engine\V2\Model\XapiStatementPipePostSchema(); // \RusticiSoftware\Engine\V2\Model\XapiStatementPipePostSchema

try {
    $result = $apiInstance->createStatementPipe($engine_tenant_name, $xapi_statement_pipe);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling XapiApi->createStatementPipe: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **engine_tenant_name** | **string**| tenant for this request | |
| **xapi_statement_pipe** | [**\RusticiSoftware\Engine\V2\Model\XapiStatementPipePostSchema**](../Model/XapiStatementPipePostSchema.md)|  | |

### Return type

[**\RusticiSoftware\Engine\V2\Model\StringResultSchema**](../Model/StringResultSchema.md)

### Authorization

[basic](../../README.md#basic), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createXapiCredential()`

```php
createXapiCredential($engine_tenant_name, $xapi_credential): \RusticiSoftware\Engine\V2\Model\StringResultSchema
```

Create an xAPI credential

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


$apiInstance = new RusticiSoftware\Engine\V2\Api\XapiApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$engine_tenant_name = 'engine_tenant_name_example'; // string | tenant for this request
$xapi_credential = new \RusticiSoftware\Engine\V2\Model\XapiCredentialPostSchema(); // \RusticiSoftware\Engine\V2\Model\XapiCredentialPostSchema

try {
    $result = $apiInstance->createXapiCredential($engine_tenant_name, $xapi_credential);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling XapiApi->createXapiCredential: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **engine_tenant_name** | **string**| tenant for this request | |
| **xapi_credential** | [**\RusticiSoftware\Engine\V2\Model\XapiCredentialPostSchema**](../Model/XapiCredentialPostSchema.md)|  | |

### Return type

[**\RusticiSoftware\Engine\V2\Model\StringResultSchema**](../Model/StringResultSchema.md)

### Authorization

[basic](../../README.md#basic), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteStatementPipe()`

```php
deleteStatementPipe($engine_tenant_name, $statement_pipe_id)
```

Deletes the xAPI statement pipe specified with the id `statementPipeId`

Caution: avoid re-creating a statement pipe with the same ID quickly after a delete. The old version could still be processing, in which case the new pipe could be updated improperly by the processor.

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


$apiInstance = new RusticiSoftware\Engine\V2\Api\XapiApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$engine_tenant_name = 'engine_tenant_name_example'; // string | tenant for this request
$statement_pipe_id = 'statement_pipe_id_example'; // string | id for this xAPI statement pipe

try {
    $apiInstance->deleteStatementPipe($engine_tenant_name, $statement_pipe_id);
} catch (Exception $e) {
    echo 'Exception when calling XapiApi->deleteStatementPipe: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **engine_tenant_name** | **string**| tenant for this request | |
| **statement_pipe_id** | **string**| id for this xAPI statement pipe | |

### Return type

void (empty response body)

### Authorization

[basic](../../README.md#basic), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteXapiCredential()`

```php
deleteXapiCredential($engine_tenant_name, $xapi_credential_id)
```

Deletes the xAPI credential specified with the id `xapiCredentialId`

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


$apiInstance = new RusticiSoftware\Engine\V2\Api\XapiApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$engine_tenant_name = 'engine_tenant_name_example'; // string | tenant for this request
$xapi_credential_id = 'xapi_credential_id_example'; // string | id for this xAPI credential

try {
    $apiInstance->deleteXapiCredential($engine_tenant_name, $xapi_credential_id);
} catch (Exception $e) {
    echo 'Exception when calling XapiApi->deleteXapiCredential: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **engine_tenant_name** | **string**| tenant for this request | |
| **xapi_credential_id** | **string**| id for this xAPI credential | |

### Return type

void (empty response body)

### Authorization

[basic](../../README.md#basic), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getStatementPipe()`

```php
getStatementPipe($engine_tenant_name, $statement_pipe_id): \RusticiSoftware\Engine\V2\Model\XapiStatementPipeSchema
```

Retrieves xAPI statement pipe specified by id `statementPipeId.`

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


$apiInstance = new RusticiSoftware\Engine\V2\Api\XapiApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$engine_tenant_name = 'engine_tenant_name_example'; // string | tenant for this request
$statement_pipe_id = 'statement_pipe_id_example'; // string | id for this xAPI statement pipe

try {
    $result = $apiInstance->getStatementPipe($engine_tenant_name, $statement_pipe_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling XapiApi->getStatementPipe: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **engine_tenant_name** | **string**| tenant for this request | |
| **statement_pipe_id** | **string**| id for this xAPI statement pipe | |

### Return type

[**\RusticiSoftware\Engine\V2\Model\XapiStatementPipeSchema**](../Model/XapiStatementPipeSchema.md)

### Authorization

[basic](../../README.md#basic), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getStatementPipes()`

```php
getStatementPipes($engine_tenant_name): \RusticiSoftware\Engine\V2\Model\XapiStatementPipeListSchema
```

Get a list of all xAPI statement pipes

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


$apiInstance = new RusticiSoftware\Engine\V2\Api\XapiApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$engine_tenant_name = 'engine_tenant_name_example'; // string | tenant for this request

try {
    $result = $apiInstance->getStatementPipes($engine_tenant_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling XapiApi->getStatementPipes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **engine_tenant_name** | **string**| tenant for this request | |

### Return type

[**\RusticiSoftware\Engine\V2\Model\XapiStatementPipeListSchema**](../Model/XapiStatementPipeListSchema.md)

### Authorization

[basic](../../README.md#basic), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getXapiCredential()`

```php
getXapiCredential($engine_tenant_name, $xapi_credential_id): \RusticiSoftware\Engine\V2\Model\XapiCredentialSchema
```

Retrieves the xAPI credential specified by id `xapiCredentialId`

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


$apiInstance = new RusticiSoftware\Engine\V2\Api\XapiApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$engine_tenant_name = 'engine_tenant_name_example'; // string | tenant for this request
$xapi_credential_id = 'xapi_credential_id_example'; // string | id for this xAPI credential

try {
    $result = $apiInstance->getXapiCredential($engine_tenant_name, $xapi_credential_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling XapiApi->getXapiCredential: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **engine_tenant_name** | **string**| tenant for this request | |
| **xapi_credential_id** | **string**| id for this xAPI credential | |

### Return type

[**\RusticiSoftware\Engine\V2\Model\XapiCredentialSchema**](../Model/XapiCredentialSchema.md)

### Authorization

[basic](../../README.md#basic), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getXapiCredentials()`

```php
getXapiCredentials($engine_tenant_name, $more): \RusticiSoftware\Engine\V2\Model\XapiCredentialsListSchema
```

Get a list of all xAPI credentials

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


$apiInstance = new RusticiSoftware\Engine\V2\Api\XapiApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$engine_tenant_name = 'engine_tenant_name_example'; // string | tenant for this request
$more = 'more_example'; // string | Value for this parameter will be provided in the 'more' property of lists, where needed. An opaque value, construction and parsing may change without notice.

try {
    $result = $apiInstance->getXapiCredentials($engine_tenant_name, $more);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling XapiApi->getXapiCredentials: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **engine_tenant_name** | **string**| tenant for this request | |
| **more** | **string**| Value for this parameter will be provided in the &#39;more&#39; property of lists, where needed. An opaque value, construction and parsing may change without notice. | [optional] |

### Return type

[**\RusticiSoftware\Engine\V2\Model\XapiCredentialsListSchema**](../Model/XapiCredentialsListSchema.md)

### Authorization

[basic](../../README.md#basic), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `setStatementPipe()`

```php
setStatementPipe($engine_tenant_name, $statement_pipe_id, $xapi_statement_pipe)
```

Either edits an existing xAPI statement pipe or creates a new one, specified by id `statementPipeId`

Editing a statement pipe's url will cause it to start over and forward any statements it finds, even if the prior version of the pipe had already forwarded those statements.

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


$apiInstance = new RusticiSoftware\Engine\V2\Api\XapiApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$engine_tenant_name = 'engine_tenant_name_example'; // string | tenant for this request
$statement_pipe_id = 'statement_pipe_id_example'; // string | id for this xAPI statement pipe
$xapi_statement_pipe = new \RusticiSoftware\Engine\V2\Model\XapiStatementPipePutSchema(); // \RusticiSoftware\Engine\V2\Model\XapiStatementPipePutSchema

try {
    $apiInstance->setStatementPipe($engine_tenant_name, $statement_pipe_id, $xapi_statement_pipe);
} catch (Exception $e) {
    echo 'Exception when calling XapiApi->setStatementPipe: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **engine_tenant_name** | **string**| tenant for this request | |
| **statement_pipe_id** | **string**| id for this xAPI statement pipe | |
| **xapi_statement_pipe** | [**\RusticiSoftware\Engine\V2\Model\XapiStatementPipePutSchema**](../Model/XapiStatementPipePutSchema.md)|  | |

### Return type

void (empty response body)

### Authorization

[basic](../../README.md#basic), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `setXapiCredential()`

```php
setXapiCredential($engine_tenant_name, $xapi_credential_id, $xapi_credential)
```

Either edits an existing xAPI credential or creates a new one, specified by id `xapiCredentialId`

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


$apiInstance = new RusticiSoftware\Engine\V2\Api\XapiApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$engine_tenant_name = 'engine_tenant_name_example'; // string | tenant for this request
$xapi_credential_id = 'xapi_credential_id_example'; // string | id for this xAPI credential
$xapi_credential = new \RusticiSoftware\Engine\V2\Model\XapiCredentialPutSchema(); // \RusticiSoftware\Engine\V2\Model\XapiCredentialPutSchema

try {
    $apiInstance->setXapiCredential($engine_tenant_name, $xapi_credential_id, $xapi_credential);
} catch (Exception $e) {
    echo 'Exception when calling XapiApi->setXapiCredential: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **engine_tenant_name** | **string**| tenant for this request | |
| **xapi_credential_id** | **string**| id for this xAPI credential | |
| **xapi_credential** | [**\RusticiSoftware\Engine\V2\Model\XapiCredentialPutSchema**](../Model/XapiCredentialPutSchema.md)|  | |

### Return type

void (empty response body)

### Authorization

[basic](../../README.md#basic), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
