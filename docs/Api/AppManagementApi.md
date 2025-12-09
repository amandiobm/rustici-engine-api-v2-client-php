# RusticiSoftware\Engine\V2\AppManagementApi

All URIs are relative to http://localhost/api/v2.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createCredential()**](AppManagementApi.md#createCredential) | **POST** /appManagement/credentials | Create credential
[**createOrUpdateTenant()**](AppManagementApi.md#createOrUpdateTenant) | **PUT** /appManagement/tenants/{tenantName} | Create or update tenant
[**createSubscription()**](AppManagementApi.md#createSubscription) | **POST** /appManagement/subscriptions | Create subscription
[**createSubscriptionAuth()**](AppManagementApi.md#createSubscriptionAuth) | **POST** /appManagement/subscriptions/authConfigurations | Create subscription authentication configurations
[**createToken()**](AppManagementApi.md#createToken) | **POST** /appManagement/token | Create token
[**deleteApplicationConfigurationSetting()**](AppManagementApi.md#deleteApplicationConfigurationSetting) | **DELETE** /appManagement/configuration/{settingId} | Clears the &#x60;settingId&#x60; value for this level
[**deleteCredential()**](AppManagementApi.md#deleteCredential) | **DELETE** /appManagement/credentials/{credentialId} | Removes &#x60;credentialId&#x60; credentials
[**deleteSubscription()**](AppManagementApi.md#deleteSubscription) | **DELETE** /appManagement/subscriptions/{subscriptionId} | Delete subscription
[**deleteSubscriptionAuth()**](AppManagementApi.md#deleteSubscriptionAuth) | **DELETE** /appManagement/subscriptions/authConfigurations/{subscriptionAuthId} | Delete subscription authentication configuration. Any subscription using this authentication configuration will be disabled.
[**deleteTenant()**](AppManagementApi.md#deleteTenant) | **DELETE** /appManagement/tenants/{tenantName} | Delete a tenant. Warning: If tenant data is not deleted first, this will leave orphaned rows that can only be deleted manually. Does not remove any data, but does remove mapping between name and key used to store data. Consider deactivating instead.
[**deleteTenantData()**](AppManagementApi.md#deleteTenantData) | **DELETE** /appManagement/tenants/{tenantName}/data | Delete all of a tenant&#39;s data.
[**getApplicationConfiguration()**](AppManagementApi.md#getApplicationConfiguration) | **GET** /appManagement/configuration | Returns all configuration settings for this level
[**getAuthenticatedCredential()**](AppManagementApi.md#getAuthenticatedCredential) | **GET** /appManagement/authenticatedCredential | Get information about the credential used to authenticate this request.
[**getCredential()**](AppManagementApi.md#getCredential) | **GET** /appManagement/credentials/{credentialId} | Get information on &#x60;credentialId&#x60; credential
[**getCredentials()**](AppManagementApi.md#getCredentials) | **GET** /appManagement/credentials | List of credentials
[**getPIIDeletionJob()**](AppManagementApi.md#getPIIDeletionJob) | **GET** /appManagement/PII/deletionJob/{jobId} | Check the status of a PII deletion job with the provided job id.
[**getSubscription()**](AppManagementApi.md#getSubscription) | **GET** /appManagement/subscriptions/{subscriptionId} | Returns a specific subscription
[**getSubscriptionAuth()**](AppManagementApi.md#getSubscriptionAuth) | **GET** /appManagement/subscriptions/authConfigurations/{subscriptionAuthId} | Returns a specific subscription authentication configuration.
[**getSubscriptionAuths()**](AppManagementApi.md#getSubscriptionAuths) | **GET** /appManagement/subscriptions/authConfigurations | Returns list of subscription authentication configurations
[**getSubscriptions()**](AppManagementApi.md#getSubscriptions) | **GET** /appManagement/subscriptions | Returns list of subscriptions
[**getTenantList()**](AppManagementApi.md#getTenantList) | **GET** /appManagement/tenants | Get list of all tenants
[**inspectToken()**](AppManagementApi.md#inspectToken) | **GET** /appManagement/token | Inspect token
[**postPIIDeletionJob()**](AppManagementApi.md#postPIIDeletionJob) | **POST** /appManagement/PII/deletionJob | Initiate a job to delete a user&#39;s Personal Identifying Information from the system.
[**postUpdateEncryptedSetting()**](AppManagementApi.md#postUpdateEncryptedSetting) | **POST** /appManagement/configuration/updateEncryptedSettings | Re-write settings, and statement pipe passwords using the current encryption settings. For password rotation.
[**resetCredentialSecret()**](AppManagementApi.md#resetCredentialSecret) | **POST** /appManagement/credentials/{credentialId}/resetSecret | Reset credential secret
[**setApplicationConfiguration()**](AppManagementApi.md#setApplicationConfiguration) | **POST** /appManagement/configuration | Set configuration settings for this level.
[**updateCredential()**](AppManagementApi.md#updateCredential) | **PUT** /appManagement/credentials/{credentialId} | Update &#x60;credentialId&#x60; credentials
[**updateSubscription()**](AppManagementApi.md#updateSubscription) | **PUT** /appManagement/subscriptions/{subscriptionId} | Update subscription. Partial updates not supported.
[**updateSubscriptionAuth()**](AppManagementApi.md#updateSubscriptionAuth) | **PUT** /appManagement/subscriptions/authConfigurations/{subscriptionAuthId} | Update subscription authentication configuration. Partial updates not supported.


## `createCredential()`

```php
createCredential($credential_request, $engine_tenant_name): \RusticiSoftware\Engine\V2\Model\CredentialCreatedSchema
```

Create credential

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


$apiInstance = new RusticiSoftware\Engine\V2\Api\AppManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$credential_request = new \RusticiSoftware\Engine\V2\Model\CredentialRequestSchema(); // \RusticiSoftware\Engine\V2\Model\CredentialRequestSchema
$engine_tenant_name = 'engine_tenant_name_example'; // string | If specified, the tenant that will be used to store or validate the credentials or token. If not specified, the system data store / settings will be used. Note that PermissionsSchema contains 'tenantName' which should be used for any permissions that need to be scoped to a particular tenant.

try {
    $result = $apiInstance->createCredential($credential_request, $engine_tenant_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppManagementApi->createCredential: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **credential_request** | [**\RusticiSoftware\Engine\V2\Model\CredentialRequestSchema**](../Model/CredentialRequestSchema.md)|  |
 **engine_tenant_name** | **string**| If specified, the tenant that will be used to store or validate the credentials or token. If not specified, the system data store / settings will be used. Note that PermissionsSchema contains &#39;tenantName&#39; which should be used for any permissions that need to be scoped to a particular tenant. | [optional]

### Return type

[**\RusticiSoftware\Engine\V2\Model\CredentialCreatedSchema**](../Model/CredentialCreatedSchema.md)

### Authorization

[basic](../../README.md#basic), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createOrUpdateTenant()`

```php
createOrUpdateTenant($tenant_name, $tenant_properties)
```

Create or update tenant

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


$apiInstance = new RusticiSoftware\Engine\V2\Api\AppManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_name = 'tenant_name_example'; // string
$tenant_properties = new \RusticiSoftware\Engine\V2\Model\TenantProperties(); // \RusticiSoftware\Engine\V2\Model\TenantProperties

try {
    $apiInstance->createOrUpdateTenant($tenant_name, $tenant_properties);
} catch (Exception $e) {
    echo 'Exception when calling AppManagementApi->createOrUpdateTenant: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tenant_name** | **string**|  |
 **tenant_properties** | [**\RusticiSoftware\Engine\V2\Model\TenantProperties**](../Model/TenantProperties.md)|  |

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

## `createSubscription()`

```php
createSubscription($subscription_definition, $engine_tenant_name): \RusticiSoftware\Engine\V2\Model\StringResultSchema
```

Create subscription

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


$apiInstance = new RusticiSoftware\Engine\V2\Api\AppManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$subscription_definition = new \RusticiSoftware\Engine\V2\Model\SubscriptionDefinitionSchema(); // \RusticiSoftware\Engine\V2\Model\SubscriptionDefinitionSchema
$engine_tenant_name = 'engine_tenant_name_example'; // string | optional tenant for this request

try {
    $result = $apiInstance->createSubscription($subscription_definition, $engine_tenant_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppManagementApi->createSubscription: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **subscription_definition** | [**\RusticiSoftware\Engine\V2\Model\SubscriptionDefinitionSchema**](../Model/SubscriptionDefinitionSchema.md)|  |
 **engine_tenant_name** | **string**| optional tenant for this request | [optional]

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

## `createSubscriptionAuth()`

```php
createSubscriptionAuth($subscription_auth_definition, $engine_tenant_name): \RusticiSoftware\Engine\V2\Model\StringResultSchema
```

Create subscription authentication configurations

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


$apiInstance = new RusticiSoftware\Engine\V2\Api\AppManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$subscription_auth_definition = new \RusticiSoftware\Engine\V2\Model\SubscriptionAuthDefinitionSchema(); // \RusticiSoftware\Engine\V2\Model\SubscriptionAuthDefinitionSchema
$engine_tenant_name = 'engine_tenant_name_example'; // string | optional tenant for this request

try {
    $result = $apiInstance->createSubscriptionAuth($subscription_auth_definition, $engine_tenant_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppManagementApi->createSubscriptionAuth: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **subscription_auth_definition** | [**\RusticiSoftware\Engine\V2\Model\SubscriptionAuthDefinitionSchema**](../Model/SubscriptionAuthDefinitionSchema.md)|  |
 **engine_tenant_name** | **string**| optional tenant for this request | [optional]

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

## `createToken()`

```php
createToken($token_request, $engine_tenant_name): \RusticiSoftware\Engine\V2\Model\StringResultSchema
```

Create token

Creates, signs and returns a token based on the provided permissions, if the credentials used to request the token have the permissions being requested. Note: the token is not stored and therefore can not be modified or deleted. The requested permissions are encoded in the token which is then signed. As long as the secret used to create it is not changed the token will be valid until it expires.

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


$apiInstance = new RusticiSoftware\Engine\V2\Api\AppManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token_request = new \RusticiSoftware\Engine\V2\Model\TokenRequestSchema(); // \RusticiSoftware\Engine\V2\Model\TokenRequestSchema
$engine_tenant_name = 'engine_tenant_name_example'; // string | If specified, the tenant that will be used to store or validate the credentials or token. If not specified, the system data store / settings will be used. Note that PermissionsSchema contains 'tenantName' which should be used for any permissions that need to be scoped to a particular tenant.

try {
    $result = $apiInstance->createToken($token_request, $engine_tenant_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppManagementApi->createToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token_request** | [**\RusticiSoftware\Engine\V2\Model\TokenRequestSchema**](../Model/TokenRequestSchema.md)|  |
 **engine_tenant_name** | **string**| If specified, the tenant that will be used to store or validate the credentials or token. If not specified, the system data store / settings will be used. Note that PermissionsSchema contains &#39;tenantName&#39; which should be used for any permissions that need to be scoped to a particular tenant. | [optional]

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

## `deleteApplicationConfigurationSetting()`

```php
deleteApplicationConfigurationSetting($setting_id, $engine_tenant_name, $learning_standard, $single_sco)
```

Clears the `settingId` value for this level

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


$apiInstance = new RusticiSoftware\Engine\V2\Api\AppManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$setting_id = 'setting_id_example'; // string
$engine_tenant_name = 'engine_tenant_name_example'; // string | optional tenant for this request
$learning_standard = 'learning_standard_example'; // string | Required if singleSco is specified. Scopes the request to the provided learning standard.
$single_sco = True; // bool | Required if learningStandard is specified. Scopes settings to whether a package has only one SCO or assignable unit within it or not. To apply a configuration setting to a learning standard for single and multi-SCO content, it must be set for both scopes.

try {
    $apiInstance->deleteApplicationConfigurationSetting($setting_id, $engine_tenant_name, $learning_standard, $single_sco);
} catch (Exception $e) {
    echo 'Exception when calling AppManagementApi->deleteApplicationConfigurationSetting: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **setting_id** | **string**|  |
 **engine_tenant_name** | **string**| optional tenant for this request | [optional]
 **learning_standard** | **string**| Required if singleSco is specified. Scopes the request to the provided learning standard. | [optional]
 **single_sco** | **bool**| Required if learningStandard is specified. Scopes settings to whether a package has only one SCO or assignable unit within it or not. To apply a configuration setting to a learning standard for single and multi-SCO content, it must be set for both scopes. | [optional]

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

## `deleteCredential()`

```php
deleteCredential($credential_id, $engine_tenant_name)
```

Removes `credentialId` credentials

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


$apiInstance = new RusticiSoftware\Engine\V2\Api\AppManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$credential_id = 'credential_id_example'; // string
$engine_tenant_name = 'engine_tenant_name_example'; // string | If specified, the tenant that will be used to store or validate the credentials or token. If not specified, the system data store / settings will be used. Note that PermissionsSchema contains 'tenantName' which should be used for any permissions that need to be scoped to a particular tenant.

try {
    $apiInstance->deleteCredential($credential_id, $engine_tenant_name);
} catch (Exception $e) {
    echo 'Exception when calling AppManagementApi->deleteCredential: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **credential_id** | **string**|  |
 **engine_tenant_name** | **string**| If specified, the tenant that will be used to store or validate the credentials or token. If not specified, the system data store / settings will be used. Note that PermissionsSchema contains &#39;tenantName&#39; which should be used for any permissions that need to be scoped to a particular tenant. | [optional]

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

## `deleteSubscription()`

```php
deleteSubscription($subscription_id, $engine_tenant_name)
```

Delete subscription

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


$apiInstance = new RusticiSoftware\Engine\V2\Api\AppManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$subscription_id = 'subscription_id_example'; // string
$engine_tenant_name = 'engine_tenant_name_example'; // string | optional tenant for this request

try {
    $apiInstance->deleteSubscription($subscription_id, $engine_tenant_name);
} catch (Exception $e) {
    echo 'Exception when calling AppManagementApi->deleteSubscription: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **subscription_id** | **string**|  |
 **engine_tenant_name** | **string**| optional tenant for this request | [optional]

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

## `deleteSubscriptionAuth()`

```php
deleteSubscriptionAuth($subscription_auth_id, $engine_tenant_name)
```

Delete subscription authentication configuration. Any subscription using this authentication configuration will be disabled.

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


$apiInstance = new RusticiSoftware\Engine\V2\Api\AppManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$subscription_auth_id = 'subscription_auth_id_example'; // string
$engine_tenant_name = 'engine_tenant_name_example'; // string | optional tenant for this request

try {
    $apiInstance->deleteSubscriptionAuth($subscription_auth_id, $engine_tenant_name);
} catch (Exception $e) {
    echo 'Exception when calling AppManagementApi->deleteSubscriptionAuth: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **subscription_auth_id** | **string**|  |
 **engine_tenant_name** | **string**| optional tenant for this request | [optional]

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

## `deleteTenant()`

```php
deleteTenant($tenant_name)
```

Delete a tenant. Warning: If tenant data is not deleted first, this will leave orphaned rows that can only be deleted manually. Does not remove any data, but does remove mapping between name and key used to store data. Consider deactivating instead.

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


$apiInstance = new RusticiSoftware\Engine\V2\Api\AppManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_name = 'tenant_name_example'; // string

try {
    $apiInstance->deleteTenant($tenant_name);
} catch (Exception $e) {
    echo 'Exception when calling AppManagementApi->deleteTenant: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tenant_name** | **string**|  |

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

## `deleteTenantData()`

```php
deleteTenantData($tenant_name, $system_schema_only)
```

Delete all of a tenant's data.

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


$apiInstance = new RusticiSoftware\Engine\V2\Api\AppManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_name = 'tenant_name_example'; // string
$system_schema_only = false; // bool | Deletes tenant data from the system schema only. This does not remove the mapping between the tenant name and key.

try {
    $apiInstance->deleteTenantData($tenant_name, $system_schema_only);
} catch (Exception $e) {
    echo 'Exception when calling AppManagementApi->deleteTenantData: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tenant_name** | **string**|  |
 **system_schema_only** | **bool**| Deletes tenant data from the system schema only. This does not remove the mapping between the tenant name and key. | [optional] [default to false]

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

## `getApplicationConfiguration()`

```php
getApplicationConfiguration($engine_tenant_name, $learning_standard, $single_sco, $include_metadata, $include_hidden_settings, $include_secret_settings, $process_replacement_tokens): \RusticiSoftware\Engine\V2\Model\SettingListSchema
```

Returns all configuration settings for this level

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


$apiInstance = new RusticiSoftware\Engine\V2\Api\AppManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$engine_tenant_name = 'engine_tenant_name_example'; // string | optional tenant for this request
$learning_standard = 'learning_standard_example'; // string | Required if singleSco is specified. Scopes the request to the provided learning standard.
$single_sco = True; // bool | Required if learningStandard is specified. Scopes settings to whether a package has only one SCO or assignable unit within it or not. To apply a configuration setting to a learning standard for single and multi-SCO content, it must be set for both scopes.
$include_metadata = false; // bool
$include_hidden_settings = false; // bool | Should settings that are declared to be hidden be included. Note: such settings generally do not need to be modified, and may be confusing.
$include_secret_settings = false; // bool | Should settings that are stored encrypted (type 'secretString') be included. Note: if included, the decrypted value will be returned.
$process_replacement_tokens = true; // bool | Whether to process replacement tokens (false returns the raw value of each setting, without tokens or environment variable replacements)

try {
    $result = $apiInstance->getApplicationConfiguration($engine_tenant_name, $learning_standard, $single_sco, $include_metadata, $include_hidden_settings, $include_secret_settings, $process_replacement_tokens);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppManagementApi->getApplicationConfiguration: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **engine_tenant_name** | **string**| optional tenant for this request | [optional]
 **learning_standard** | **string**| Required if singleSco is specified. Scopes the request to the provided learning standard. | [optional]
 **single_sco** | **bool**| Required if learningStandard is specified. Scopes settings to whether a package has only one SCO or assignable unit within it or not. To apply a configuration setting to a learning standard for single and multi-SCO content, it must be set for both scopes. | [optional]
 **include_metadata** | **bool**|  | [optional] [default to false]
 **include_hidden_settings** | **bool**| Should settings that are declared to be hidden be included. Note: such settings generally do not need to be modified, and may be confusing. | [optional] [default to false]
 **include_secret_settings** | **bool**| Should settings that are stored encrypted (type &#39;secretString&#39;) be included. Note: if included, the decrypted value will be returned. | [optional] [default to false]
 **process_replacement_tokens** | **bool**| Whether to process replacement tokens (false returns the raw value of each setting, without tokens or environment variable replacements) | [optional] [default to true]

### Return type

[**\RusticiSoftware\Engine\V2\Model\SettingListSchema**](../Model/SettingListSchema.md)

### Authorization

[basic](../../README.md#basic), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAuthenticatedCredential()`

```php
getAuthenticatedCredential($engine_tenant_name): \RusticiSoftware\Engine\V2\Model\CredentialSchema
```

Get information about the credential used to authenticate this request.

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


$apiInstance = new RusticiSoftware\Engine\V2\Api\AppManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$engine_tenant_name = 'engine_tenant_name_example'; // string | If specified, the tenant that will be used to store or validate the credentials or token. If not specified, the system data store / settings will be used. Note that PermissionsSchema contains 'tenantName' which should be used for any permissions that need to be scoped to a particular tenant.

try {
    $result = $apiInstance->getAuthenticatedCredential($engine_tenant_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppManagementApi->getAuthenticatedCredential: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **engine_tenant_name** | **string**| If specified, the tenant that will be used to store or validate the credentials or token. If not specified, the system data store / settings will be used. Note that PermissionsSchema contains &#39;tenantName&#39; which should be used for any permissions that need to be scoped to a particular tenant. | [optional]

### Return type

[**\RusticiSoftware\Engine\V2\Model\CredentialSchema**](../Model/CredentialSchema.md)

### Authorization

[basic](../../README.md#basic), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCredential()`

```php
getCredential($credential_id, $engine_tenant_name): \RusticiSoftware\Engine\V2\Model\CredentialSchema
```

Get information on `credentialId` credential

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


$apiInstance = new RusticiSoftware\Engine\V2\Api\AppManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$credential_id = 'credential_id_example'; // string
$engine_tenant_name = 'engine_tenant_name_example'; // string | If specified, the tenant that will be used to store or validate the credentials or token. If not specified, the system data store / settings will be used. Note that PermissionsSchema contains 'tenantName' which should be used for any permissions that need to be scoped to a particular tenant.

try {
    $result = $apiInstance->getCredential($credential_id, $engine_tenant_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppManagementApi->getCredential: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **credential_id** | **string**|  |
 **engine_tenant_name** | **string**| If specified, the tenant that will be used to store or validate the credentials or token. If not specified, the system data store / settings will be used. Note that PermissionsSchema contains &#39;tenantName&#39; which should be used for any permissions that need to be scoped to a particular tenant. | [optional]

### Return type

[**\RusticiSoftware\Engine\V2\Model\CredentialSchema**](../Model/CredentialSchema.md)

### Authorization

[basic](../../README.md#basic), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCredentials()`

```php
getCredentials($engine_tenant_name): \RusticiSoftware\Engine\V2\Model\CredentialSchema[]
```

List of credentials

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


$apiInstance = new RusticiSoftware\Engine\V2\Api\AppManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$engine_tenant_name = 'engine_tenant_name_example'; // string | If specified, the tenant that will be used to store or validate the credentials or token. If not specified, the system data store / settings will be used. Note that PermissionsSchema contains 'tenantName' which should be used for any permissions that need to be scoped to a particular tenant.

try {
    $result = $apiInstance->getCredentials($engine_tenant_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppManagementApi->getCredentials: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **engine_tenant_name** | **string**| If specified, the tenant that will be used to store or validate the credentials or token. If not specified, the system data store / settings will be used. Note that PermissionsSchema contains &#39;tenantName&#39; which should be used for any permissions that need to be scoped to a particular tenant. | [optional]

### Return type

[**\RusticiSoftware\Engine\V2\Model\CredentialSchema[]**](../Model/CredentialSchema.md)

### Authorization

[basic](../../README.md#basic), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPIIDeletionJob()`

```php
getPIIDeletionJob($engine_tenant_name, $job_id): \RusticiSoftware\Engine\V2\Model\PIIDeletionResultSchema
```

Check the status of a PII deletion job with the provided job id.

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


$apiInstance = new RusticiSoftware\Engine\V2\Api\AppManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$engine_tenant_name = 'engine_tenant_name_example'; // string | tenant for this request
$job_id = 'job_id_example'; // string

try {
    $result = $apiInstance->getPIIDeletionJob($engine_tenant_name, $job_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppManagementApi->getPIIDeletionJob: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **engine_tenant_name** | **string**| tenant for this request |
 **job_id** | **string**|  |

### Return type

[**\RusticiSoftware\Engine\V2\Model\PIIDeletionResultSchema**](../Model/PIIDeletionResultSchema.md)

### Authorization

[basic](../../README.md#basic), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSubscription()`

```php
getSubscription($subscription_id, $engine_tenant_name): \RusticiSoftware\Engine\V2\Model\SubscriptionEntrySchema
```

Returns a specific subscription

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


$apiInstance = new RusticiSoftware\Engine\V2\Api\AppManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$subscription_id = 'subscription_id_example'; // string
$engine_tenant_name = 'engine_tenant_name_example'; // string | optional tenant for this request

try {
    $result = $apiInstance->getSubscription($subscription_id, $engine_tenant_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppManagementApi->getSubscription: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **subscription_id** | **string**|  |
 **engine_tenant_name** | **string**| optional tenant for this request | [optional]

### Return type

[**\RusticiSoftware\Engine\V2\Model\SubscriptionEntrySchema**](../Model/SubscriptionEntrySchema.md)

### Authorization

[basic](../../README.md#basic), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSubscriptionAuth()`

```php
getSubscriptionAuth($subscription_auth_id, $engine_tenant_name): \RusticiSoftware\Engine\V2\Model\SubscriptionAuthDefinitionSchema
```

Returns a specific subscription authentication configuration.

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


$apiInstance = new RusticiSoftware\Engine\V2\Api\AppManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$subscription_auth_id = 'subscription_auth_id_example'; // string
$engine_tenant_name = 'engine_tenant_name_example'; // string | optional tenant for this request

try {
    $result = $apiInstance->getSubscriptionAuth($subscription_auth_id, $engine_tenant_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppManagementApi->getSubscriptionAuth: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **subscription_auth_id** | **string**|  |
 **engine_tenant_name** | **string**| optional tenant for this request | [optional]

### Return type

[**\RusticiSoftware\Engine\V2\Model\SubscriptionAuthDefinitionSchema**](../Model/SubscriptionAuthDefinitionSchema.md)

### Authorization

[basic](../../README.md#basic), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSubscriptionAuths()`

```php
getSubscriptionAuths($engine_tenant_name, $more): \RusticiSoftware\Engine\V2\Model\SubscriptionAuthListSchema
```

Returns list of subscription authentication configurations

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


$apiInstance = new RusticiSoftware\Engine\V2\Api\AppManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$engine_tenant_name = 'engine_tenant_name_example'; // string | optional tenant for this request
$more = 'more_example'; // string | Value for this parameter will be provided in the 'more' property of lists, where needed. An opaque value, construction and parsing may change without notice.

try {
    $result = $apiInstance->getSubscriptionAuths($engine_tenant_name, $more);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppManagementApi->getSubscriptionAuths: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **engine_tenant_name** | **string**| optional tenant for this request | [optional]
 **more** | **string**| Value for this parameter will be provided in the &#39;more&#39; property of lists, where needed. An opaque value, construction and parsing may change without notice. | [optional]

### Return type

[**\RusticiSoftware\Engine\V2\Model\SubscriptionAuthListSchema**](../Model/SubscriptionAuthListSchema.md)

### Authorization

[basic](../../README.md#basic), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSubscriptions()`

```php
getSubscriptions($engine_tenant_name, $more, $topic, $subtopic): \RusticiSoftware\Engine\V2\Model\SubscriptionListSchema
```

Returns list of subscriptions

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


$apiInstance = new RusticiSoftware\Engine\V2\Api\AppManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$engine_tenant_name = 'engine_tenant_name_example'; // string | optional tenant for this request
$more = 'more_example'; // string | Value for this parameter will be provided in the 'more' property of lists, where needed. An opaque value, construction and parsing may change without notice.
$topic = 'topic_example'; // string | Only subscriptions for the provided topic will be included
$subtopic = 'subtopic_example'; // string | Only subscriptions which specify the provided sub-topic will be included

try {
    $result = $apiInstance->getSubscriptions($engine_tenant_name, $more, $topic, $subtopic);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppManagementApi->getSubscriptions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **engine_tenant_name** | **string**| optional tenant for this request | [optional]
 **more** | **string**| Value for this parameter will be provided in the &#39;more&#39; property of lists, where needed. An opaque value, construction and parsing may change without notice. | [optional]
 **topic** | **string**| Only subscriptions for the provided topic will be included | [optional]
 **subtopic** | **string**| Only subscriptions which specify the provided sub-topic will be included | [optional]

### Return type

[**\RusticiSoftware\Engine\V2\Model\SubscriptionListSchema**](../Model/SubscriptionListSchema.md)

### Authorization

[basic](../../README.md#basic), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTenantList()`

```php
getTenantList($include_deactivated): \RusticiSoftware\Engine\V2\Model\TenantListSchema
```

Get list of all tenants

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


$apiInstance = new RusticiSoftware\Engine\V2\Api\AppManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$include_deactivated = false; // bool

try {
    $result = $apiInstance->getTenantList($include_deactivated);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppManagementApi->getTenantList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **include_deactivated** | **bool**|  | [optional] [default to false]

### Return type

[**\RusticiSoftware\Engine\V2\Model\TenantListSchema**](../Model/TenantListSchema.md)

### Authorization

[basic](../../README.md#basic), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `inspectToken()`

```php
inspectToken($token, $engine_tenant_name): \RusticiSoftware\Engine\V2\Model\TokenInfoSchema
```

Inspect token

Verifies the signature of the provided token, and if valid returns information about the token

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


$apiInstance = new RusticiSoftware\Engine\V2\Api\AppManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token = 'token_example'; // string
$engine_tenant_name = 'engine_tenant_name_example'; // string | If specified, the tenant that will be used to store or validate the credentials or token. If not specified, the system data store / settings will be used. Note that PermissionsSchema contains 'tenantName' which should be used for any permissions that need to be scoped to a particular tenant.

try {
    $result = $apiInstance->inspectToken($token, $engine_tenant_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppManagementApi->inspectToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**|  |
 **engine_tenant_name** | **string**| If specified, the tenant that will be used to store or validate the credentials or token. If not specified, the system data store / settings will be used. Note that PermissionsSchema contains &#39;tenantName&#39; which should be used for any permissions that need to be scoped to a particular tenant. | [optional]

### Return type

[**\RusticiSoftware\Engine\V2\Model\TokenInfoSchema**](../Model/TokenInfoSchema.md)

### Authorization

[basic](../../README.md#basic), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postPIIDeletionJob()`

```php
postPIIDeletionJob($engine_tenant_name, $entities): \RusticiSoftware\Engine\V2\Model\PIIDeletionRequestResultSchema
```

Initiate a job to delete a user's Personal Identifying Information from the system.

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


$apiInstance = new RusticiSoftware\Engine\V2\Api\AppManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$engine_tenant_name = 'engine_tenant_name_example'; // string | tenant for this request
$entities = new \RusticiSoftware\Engine\V2\Model\PIIDeletionRequestSchema(); // \RusticiSoftware\Engine\V2\Model\PIIDeletionRequestSchema

try {
    $result = $apiInstance->postPIIDeletionJob($engine_tenant_name, $entities);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppManagementApi->postPIIDeletionJob: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **engine_tenant_name** | **string**| tenant for this request |
 **entities** | [**\RusticiSoftware\Engine\V2\Model\PIIDeletionRequestSchema**](../Model/PIIDeletionRequestSchema.md)|  |

### Return type

[**\RusticiSoftware\Engine\V2\Model\PIIDeletionRequestResultSchema**](../Model/PIIDeletionRequestResultSchema.md)

### Authorization

[basic](../../README.md#basic), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postUpdateEncryptedSetting()`

```php
postUpdateEncryptedSetting($engine_tenant_name)
```

Re-write settings, and statement pipe passwords using the current encryption settings. For password rotation.

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


$apiInstance = new RusticiSoftware\Engine\V2\Api\AppManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$engine_tenant_name = 'engine_tenant_name_example'; // string | tenant for this request

try {
    $apiInstance->postUpdateEncryptedSetting($engine_tenant_name);
} catch (Exception $e) {
    echo 'Exception when calling AppManagementApi->postUpdateEncryptedSetting: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **engine_tenant_name** | **string**| tenant for this request |

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

## `resetCredentialSecret()`

```php
resetCredentialSecret($credential_id, $engine_tenant_name): \RusticiSoftware\Engine\V2\Model\StringResultSchema
```

Reset credential secret

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


$apiInstance = new RusticiSoftware\Engine\V2\Api\AppManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$credential_id = 'credential_id_example'; // string
$engine_tenant_name = 'engine_tenant_name_example'; // string | If specified, the tenant that will be used to store or validate the credentials or token. If not specified, the system data store / settings will be used. Note that PermissionsSchema contains 'tenantName' which should be used for any permissions that need to be scoped to a particular tenant.

try {
    $result = $apiInstance->resetCredentialSecret($credential_id, $engine_tenant_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppManagementApi->resetCredentialSecret: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **credential_id** | **string**|  |
 **engine_tenant_name** | **string**| If specified, the tenant that will be used to store or validate the credentials or token. If not specified, the system data store / settings will be used. Note that PermissionsSchema contains &#39;tenantName&#39; which should be used for any permissions that need to be scoped to a particular tenant. | [optional]

### Return type

[**\RusticiSoftware\Engine\V2\Model\StringResultSchema**](../Model/StringResultSchema.md)

### Authorization

[basic](../../README.md#basic), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `setApplicationConfiguration()`

```php
setApplicationConfiguration($configuration_settings, $engine_tenant_name, $learning_standard, $single_sco)
```

Set configuration settings for this level.

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


$apiInstance = new RusticiSoftware\Engine\V2\Api\AppManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$configuration_settings = new \RusticiSoftware\Engine\V2\Model\SettingsPostSchema(); // \RusticiSoftware\Engine\V2\Model\SettingsPostSchema
$engine_tenant_name = 'engine_tenant_name_example'; // string | optional tenant for this request
$learning_standard = 'learning_standard_example'; // string | Required if singleSco is specified. Scopes the request to the provided learning standard.
$single_sco = True; // bool | Required if learningStandard is specified. Scopes settings to whether a package has only one SCO or assignable unit within it or not. To apply a configuration setting to a learning standard for single and multi-SCO content, it must be set for both scopes.

try {
    $apiInstance->setApplicationConfiguration($configuration_settings, $engine_tenant_name, $learning_standard, $single_sco);
} catch (Exception $e) {
    echo 'Exception when calling AppManagementApi->setApplicationConfiguration: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **configuration_settings** | [**\RusticiSoftware\Engine\V2\Model\SettingsPostSchema**](../Model/SettingsPostSchema.md)|  |
 **engine_tenant_name** | **string**| optional tenant for this request | [optional]
 **learning_standard** | **string**| Required if singleSco is specified. Scopes the request to the provided learning standard. | [optional]
 **single_sco** | **bool**| Required if learningStandard is specified. Scopes settings to whether a package has only one SCO or assignable unit within it or not. To apply a configuration setting to a learning standard for single and multi-SCO content, it must be set for both scopes. | [optional]

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

## `updateCredential()`

```php
updateCredential($credential_id, $credential_update, $engine_tenant_name)
```

Update `credentialId` credentials

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


$apiInstance = new RusticiSoftware\Engine\V2\Api\AppManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$credential_id = 'credential_id_example'; // string
$credential_update = new \RusticiSoftware\Engine\V2\Model\CredentialRequestSchema(); // \RusticiSoftware\Engine\V2\Model\CredentialRequestSchema
$engine_tenant_name = 'engine_tenant_name_example'; // string | If specified, the tenant that will be used to store or validate the credentials or token. If not specified, the system data store / settings will be used. Note that PermissionsSchema contains 'tenantName' which should be used for any permissions that need to be scoped to a particular tenant.

try {
    $apiInstance->updateCredential($credential_id, $credential_update, $engine_tenant_name);
} catch (Exception $e) {
    echo 'Exception when calling AppManagementApi->updateCredential: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **credential_id** | **string**|  |
 **credential_update** | [**\RusticiSoftware\Engine\V2\Model\CredentialRequestSchema**](../Model/CredentialRequestSchema.md)|  |
 **engine_tenant_name** | **string**| If specified, the tenant that will be used to store or validate the credentials or token. If not specified, the system data store / settings will be used. Note that PermissionsSchema contains &#39;tenantName&#39; which should be used for any permissions that need to be scoped to a particular tenant. | [optional]

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

## `updateSubscription()`

```php
updateSubscription($subscription_id, $subscription_definition, $engine_tenant_name)
```

Update subscription. Partial updates not supported.

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


$apiInstance = new RusticiSoftware\Engine\V2\Api\AppManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$subscription_id = 'subscription_id_example'; // string
$subscription_definition = new \RusticiSoftware\Engine\V2\Model\SubscriptionDefinitionSchema(); // \RusticiSoftware\Engine\V2\Model\SubscriptionDefinitionSchema
$engine_tenant_name = 'engine_tenant_name_example'; // string | optional tenant for this request

try {
    $apiInstance->updateSubscription($subscription_id, $subscription_definition, $engine_tenant_name);
} catch (Exception $e) {
    echo 'Exception when calling AppManagementApi->updateSubscription: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **subscription_id** | **string**|  |
 **subscription_definition** | [**\RusticiSoftware\Engine\V2\Model\SubscriptionDefinitionSchema**](../Model/SubscriptionDefinitionSchema.md)|  |
 **engine_tenant_name** | **string**| optional tenant for this request | [optional]

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

## `updateSubscriptionAuth()`

```php
updateSubscriptionAuth($subscription_auth_id, $subscription_auth_definition, $engine_tenant_name)
```

Update subscription authentication configuration. Partial updates not supported.

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


$apiInstance = new RusticiSoftware\Engine\V2\Api\AppManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$subscription_auth_id = 'subscription_auth_id_example'; // string
$subscription_auth_definition = new \RusticiSoftware\Engine\V2\Model\SubscriptionAuthDefinitionSchema(); // \RusticiSoftware\Engine\V2\Model\SubscriptionAuthDefinitionSchema
$engine_tenant_name = 'engine_tenant_name_example'; // string | optional tenant for this request

try {
    $apiInstance->updateSubscriptionAuth($subscription_auth_id, $subscription_auth_definition, $engine_tenant_name);
} catch (Exception $e) {
    echo 'Exception when calling AppManagementApi->updateSubscriptionAuth: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **subscription_auth_id** | **string**|  |
 **subscription_auth_definition** | [**\RusticiSoftware\Engine\V2\Model\SubscriptionAuthDefinitionSchema**](../Model/SubscriptionAuthDefinitionSchema.md)|  |
 **engine_tenant_name** | **string**| optional tenant for this request | [optional]

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
