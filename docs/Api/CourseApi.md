# RusticiSoftware\Engine\V2\CourseApi

All URIs are relative to *http://localhost/api/v2/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**buildCoursePreviewLaunchLink**](CourseApi.md#buildCoursePreviewLaunchLink) | **POST** /courses/{courseId}/preview | Returns the link to use to preview this course
[**buildCoursePreviewLaunchLinkWithVersion**](CourseApi.md#buildCoursePreviewLaunchLinkWithVersion) | **POST** /courses/{courseId}/versions/{versionId}/preview | Returns the link to use to preview this course
[**createFetchAndImportCourseJob**](CourseApi.md#createFetchAndImportCourseJob) | **POST** /courses/importJobs | Start a job to fetch and import a course.
[**createUploadAndImportCourseJob**](CourseApi.md#createUploadAndImportCourseJob) | **POST** /courses/importJobs/upload | Upload a course and start an import job for it.
[**deleteCourse**](CourseApi.md#deleteCourse) | **DELETE** /courses/{courseId} | Delete &#x60;courseId&#x60;
[**deleteCourseAsset**](CourseApi.md#deleteCourseAsset) | **DELETE** /courses/{courseId}/asset | Delete the specified asset in the current version of the specified course
[**deleteCourseConfigurationSetting**](CourseApi.md#deleteCourseConfigurationSetting) | **DELETE** /courses/{courseId}/configuration/{settingId} | Clears the &#x60;settingId&#x60; value for this course
[**deleteCourseVersion**](CourseApi.md#deleteCourseVersion) | **DELETE** /courses/{courseId}/versions/{versionId} | Delete version &#x60;versionId&#x60; of &#x60;courseId&#x60;
[**deleteCourseVersionAsset**](CourseApi.md#deleteCourseVersionAsset) | **DELETE** /courses/{courseId}/versions/{versionId}/asset | Delete the specified asset in the current version of the specified course
[**deleteCourseVersionConfigurationSetting**](CourseApi.md#deleteCourseVersionConfigurationSetting) | **DELETE** /courses/{courseId}/versions/{versionId}/configuration/{settingId} | Clears the &#x60;settingId&#x60; value for this course and version.
[**deleteCourseVersionsConfigurationSetting**](CourseApi.md#deleteCourseVersionsConfigurationSetting) | **DELETE** /courses/{courseId}/versions/configuration/{settingId} | Clears the &#x60;settingId&#x60; value for all versions of this course.
[**deleteCourseZip**](CourseApi.md#deleteCourseZip) | **DELETE** /courses/{courseId}/zip | Deletes the exported zip for the latest version of the specified course
[**deleteVersionedCourseZip**](CourseApi.md#deleteVersionedCourseZip) | **DELETE** /courses/{courseId}/versions/{versionId}/zip | Deletes the exported zip for the specified course version
[**getCourse**](CourseApi.md#getCourse) | **GET** /courses/{courseId} | Get information about &#x60;courseId&#x60;
[**getCourseAsset**](CourseApi.md#getCourseAsset) | **GET** /courses/{courseId}/asset | Get the specified asset in the current version of the specified course
[**getCourseConfiguration**](CourseApi.md#getCourseConfiguration) | **GET** /courses/{courseId}/configuration | Returns all configuration settings for this course
[**getCourseFileList**](CourseApi.md#getCourseFileList) | **GET** /courses/{courseId}/asset/list | Get the list of files in the current version of the specified course
[**getCourseStatements**](CourseApi.md#getCourseStatements) | **GET** /courses/{courseId}/xAPIStatements | Get xAPI statements for &#x60;courseId&#x60;
[**getCourseVersionAsset**](CourseApi.md#getCourseVersionAsset) | **GET** /courses/{courseId}/versions/{versionId}/asset | Get the specified asset for this course version
[**getCourseVersionConfiguration**](CourseApi.md#getCourseVersionConfiguration) | **GET** /courses/{courseId}/versions/{versionId}/configuration | Returns all configuration settings for this course and version.
[**getCourseVersionFileList**](CourseApi.md#getCourseVersionFileList) | **GET** /courses/{courseId}/versions/{versionId}/asset/list | Get the list of files in the specified version of the specified course
[**getCourseVersionInfo**](CourseApi.md#getCourseVersionInfo) | **GET** /courses/{courseId}/versions/{versionId} | Get version &#x60;versionId&#x60; of &#x60;courseId&#x60;
[**getCourseVersionStatements**](CourseApi.md#getCourseVersionStatements) | **GET** /courses/{courseId}/versions/{versionId}/xAPIStatements | Get xAPI statements for version &#x60;versionId&#x60; of &#x60;courseId&#x60;
[**getCourseVersions**](CourseApi.md#getCourseVersions) | **GET** /courses/{courseId}/versions | Get all versions of &#x60;courseId&#x60;
[**getCourseZip**](CourseApi.md#getCourseZip) | **GET** /courses/{courseId}/zip | Get the zip package for the latest course version
[**getCourses**](CourseApi.md#getCourses) | **GET** /courses | Get a list of all courses for the specified tenant
[**getImportJobStatus**](CourseApi.md#getImportJobStatus) | **GET** /courses/importJobs/{importJobId} | Check the status of an import job.
[**getVersionedCourseZip**](CourseApi.md#getVersionedCourseZip) | **GET** /courses/{courseId}/versions/{versionId}/zip | Get the zip package for the specified course version
[**importCourseAssetFile**](CourseApi.md#importCourseAssetFile) | **POST** /courses/{courseId}/asset | Import an asset file for this course.
[**importCourseVersionAssetFile**](CourseApi.md#importCourseVersionAssetFile) | **POST** /courses/{courseId}/versions/{versionId}/asset | Import an asset file for this course version.
[**importCourseWithoutUpload**](CourseApi.md#importCourseWithoutUpload) | **POST** /courses | Create a course
[**setCourseConfiguration**](CourseApi.md#setCourseConfiguration) | **POST** /courses/{courseId}/configuration | Set configuration settings for this course.
[**setCourseTitle**](CourseApi.md#setCourseTitle) | **PUT** /courses/{courseId}/title | Sets the course title for &#x60;courseId&#x60;
[**setCourseVersionConfiguration**](CourseApi.md#setCourseVersionConfiguration) | **POST** /courses/{courseId}/versions/{versionId}/configuration | Set configuration settings for this course and version.
[**setCourseVersionsConfiguration**](CourseApi.md#setCourseVersionsConfiguration) | **POST** /courses/{courseId}/versions/configuration | Set configuration settings for all versions of this course.
[**uploadAndImportCourse**](CourseApi.md#uploadAndImportCourse) | **POST** /courses/upload | Upload a course to import
[**uploadCourseAssetFile**](CourseApi.md#uploadCourseAssetFile) | **POST** /courses/{courseId}/asset/upload | Upload an asset file for this course.
[**uploadCourseVersionAssetFile**](CourseApi.md#uploadCourseVersionAssetFile) | **POST** /courses/{courseId}/versions/{versionId}/asset/upload | Upload an asset file for this course version.


# **buildCoursePreviewLaunchLink**
> \RusticiSoftware\Engine\V2\Model\LaunchLinkSchema buildCoursePreviewLaunchLink($engine_tenant_name, $course_id, $launch_link_request)

Returns the link to use to preview this course

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

$apiInstance = new RusticiSoftware\Engine\V2\Api\CourseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$engine_tenant_name = "engine_tenant_name_example"; // string | tenant for this request
$course_id = "course_id_example"; // string | 
$launch_link_request = new \RusticiSoftware\Engine\V2\Model\LaunchLinkRequestSchema(); // \RusticiSoftware\Engine\V2\Model\LaunchLinkRequestSchema | 

try {
    $result = $apiInstance->buildCoursePreviewLaunchLink($engine_tenant_name, $course_id, $launch_link_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CourseApi->buildCoursePreviewLaunchLink: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **engine_tenant_name** | **string**| tenant for this request |
 **course_id** | **string**|  |
 **launch_link_request** | [**\RusticiSoftware\Engine\V2\Model\LaunchLinkRequestSchema**](../Model/LaunchLinkRequestSchema.md)|  |

### Return type

[**\RusticiSoftware\Engine\V2\Model\LaunchLinkSchema**](../Model/LaunchLinkSchema.md)

### Authorization

[basic](../../README.md#basic), [oauth](../../README.md#oauth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **buildCoursePreviewLaunchLinkWithVersion**
> \RusticiSoftware\Engine\V2\Model\LaunchLinkSchema buildCoursePreviewLaunchLinkWithVersion($engine_tenant_name, $course_id, $version_id, $launch_link_request)

Returns the link to use to preview this course

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

$apiInstance = new RusticiSoftware\Engine\V2\Api\CourseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$engine_tenant_name = "engine_tenant_name_example"; // string | tenant for this request
$course_id = "course_id_example"; // string | 
$version_id = 56; // int | the course version
$launch_link_request = new \RusticiSoftware\Engine\V2\Model\LaunchLinkRequestSchema(); // \RusticiSoftware\Engine\V2\Model\LaunchLinkRequestSchema | 

try {
    $result = $apiInstance->buildCoursePreviewLaunchLinkWithVersion($engine_tenant_name, $course_id, $version_id, $launch_link_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CourseApi->buildCoursePreviewLaunchLinkWithVersion: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **engine_tenant_name** | **string**| tenant for this request |
 **course_id** | **string**|  |
 **version_id** | **int**| the course version |
 **launch_link_request** | [**\RusticiSoftware\Engine\V2\Model\LaunchLinkRequestSchema**](../Model/LaunchLinkRequestSchema.md)|  |

### Return type

[**\RusticiSoftware\Engine\V2\Model\LaunchLinkSchema**](../Model/LaunchLinkSchema.md)

### Authorization

[basic](../../README.md#basic), [oauth](../../README.md#oauth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createFetchAndImportCourseJob**
> \RusticiSoftware\Engine\V2\Model\StringResultSchema createFetchAndImportCourseJob($engine_tenant_name, $course_id, $import_request, $may_create_new_version)

Start a job to fetch and import a course.

An import job will be started to fetch and import the referenced file, and the import job ID will be returned. If the import is successful, the imported course will be registered using the courseId provided.

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

$apiInstance = new RusticiSoftware\Engine\V2\Api\CourseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$engine_tenant_name = "engine_tenant_name_example"; // string | tenant for this request
$course_id = "course_id_example"; // string | A unique identifier your application will use to identify the course after import. Your application is responsible both for generating this unique ID and for keeping track of the ID for later use.
$import_request = new \RusticiSoftware\Engine\V2\Model\ImportFetchRequestSchema(); // \RusticiSoftware\Engine\V2\Model\ImportFetchRequestSchema | 
$may_create_new_version = false; // bool | Is it OK to create a new version of this course? If this is set to false and the course already exists, the upload will fail. If true and the course already exists then a new version will be created. No effect if the course doesn't already exist.

try {
    $result = $apiInstance->createFetchAndImportCourseJob($engine_tenant_name, $course_id, $import_request, $may_create_new_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CourseApi->createFetchAndImportCourseJob: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **engine_tenant_name** | **string**| tenant for this request |
 **course_id** | **string**| A unique identifier your application will use to identify the course after import. Your application is responsible both for generating this unique ID and for keeping track of the ID for later use. |
 **import_request** | [**\RusticiSoftware\Engine\V2\Model\ImportFetchRequestSchema**](../Model/ImportFetchRequestSchema.md)|  |
 **may_create_new_version** | **bool**| Is it OK to create a new version of this course? If this is set to false and the course already exists, the upload will fail. If true and the course already exists then a new version will be created. No effect if the course doesn&#39;t already exist. | [optional] [default to false]

### Return type

[**\RusticiSoftware\Engine\V2\Model\StringResultSchema**](../Model/StringResultSchema.md)

### Authorization

[basic](../../README.md#basic), [oauth](../../README.md#oauth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createUploadAndImportCourseJob**
> \RusticiSoftware\Engine\V2\Model\StringResultSchema createUploadAndImportCourseJob($engine_tenant_name, $course_id, $may_create_new_version, $file, $content_metadata, $uploaded_content_type)

Upload a course and start an import job for it.

An import job will be started to import the posted file, and the import job ID will be returned. If the import is successful, the imported course will be registered using the courseId provided.

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

$apiInstance = new RusticiSoftware\Engine\V2\Api\CourseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$engine_tenant_name = "engine_tenant_name_example"; // string | tenant for this request
$course_id = "course_id_example"; // string | A unique identifier your application will use to identify the course after import. Your application is responsible both for generating this unique ID and for keeping track of the ID for later use.
$may_create_new_version = false; // bool | Is it OK to create a new version of this course? If this is set to false and the course already exists, the upload will fail. If true and the course already exists then a new version will be created. No effect if the course doesn't already exist.
$file = "/path/to/file.txt"; // \SplFileObject | The course content file to import.
$content_metadata = "content_metadata_example"; // string | Serialized 'mediaFileMetadata' schema.
$uploaded_content_type = "application/zip"; // string | The MIME type identifier for the content to be uploaded

try {
    $result = $apiInstance->createUploadAndImportCourseJob($engine_tenant_name, $course_id, $may_create_new_version, $file, $content_metadata, $uploaded_content_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CourseApi->createUploadAndImportCourseJob: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **engine_tenant_name** | **string**| tenant for this request |
 **course_id** | **string**| A unique identifier your application will use to identify the course after import. Your application is responsible both for generating this unique ID and for keeping track of the ID for later use. |
 **may_create_new_version** | **bool**| Is it OK to create a new version of this course? If this is set to false and the course already exists, the upload will fail. If true and the course already exists then a new version will be created. No effect if the course doesn&#39;t already exist. | [optional] [default to false]
 **file** | **\SplFileObject**| The course content file to import. | [optional]
 **content_metadata** | **string**| Serialized &#39;mediaFileMetadata&#39; schema. | [optional]
 **uploaded_content_type** | **string**| The MIME type identifier for the content to be uploaded | [optional] [default to application/zip]

### Return type

[**\RusticiSoftware\Engine\V2\Model\StringResultSchema**](../Model/StringResultSchema.md)

### Authorization

[basic](../../README.md#basic), [oauth](../../README.md#oauth)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteCourse**
> deleteCourse($engine_tenant_name, $course_id)

Delete `courseId`

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

$apiInstance = new RusticiSoftware\Engine\V2\Api\CourseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$engine_tenant_name = "engine_tenant_name_example"; // string | tenant for this request
$course_id = "course_id_example"; // string | 

try {
    $apiInstance->deleteCourse($engine_tenant_name, $course_id);
} catch (Exception $e) {
    echo 'Exception when calling CourseApi->deleteCourse: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **engine_tenant_name** | **string**| tenant for this request |
 **course_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

[basic](../../README.md#basic), [oauth](../../README.md#oauth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteCourseAsset**
> deleteCourseAsset($engine_tenant_name, $course_id, $relative_path)

Delete the specified asset in the current version of the specified course

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

$apiInstance = new RusticiSoftware\Engine\V2\Api\CourseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$engine_tenant_name = "engine_tenant_name_example"; // string | tenant for this request
$course_id = "course_id_example"; // string | 
$relative_path = "relative_path_example"; // string | Relative path of the asset within the course.

try {
    $apiInstance->deleteCourseAsset($engine_tenant_name, $course_id, $relative_path);
} catch (Exception $e) {
    echo 'Exception when calling CourseApi->deleteCourseAsset: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **engine_tenant_name** | **string**| tenant for this request |
 **course_id** | **string**|  |
 **relative_path** | **string**| Relative path of the asset within the course. |

### Return type

void (empty response body)

### Authorization

[basic](../../README.md#basic), [oauth](../../README.md#oauth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteCourseConfigurationSetting**
> deleteCourseConfigurationSetting($engine_tenant_name, $course_id, $setting_id)

Clears the `settingId` value for this course

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

$apiInstance = new RusticiSoftware\Engine\V2\Api\CourseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$engine_tenant_name = "engine_tenant_name_example"; // string | tenant for this request
$course_id = "course_id_example"; // string | 
$setting_id = "setting_id_example"; // string | 

try {
    $apiInstance->deleteCourseConfigurationSetting($engine_tenant_name, $course_id, $setting_id);
} catch (Exception $e) {
    echo 'Exception when calling CourseApi->deleteCourseConfigurationSetting: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **engine_tenant_name** | **string**| tenant for this request |
 **course_id** | **string**|  |
 **setting_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

[basic](../../README.md#basic), [oauth](../../README.md#oauth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteCourseVersion**
> deleteCourseVersion($engine_tenant_name, $course_id, $version_id)

Delete version `versionId` of `courseId`

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

$apiInstance = new RusticiSoftware\Engine\V2\Api\CourseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$engine_tenant_name = "engine_tenant_name_example"; // string | tenant for this request
$course_id = "course_id_example"; // string | 
$version_id = 56; // int | the course version

try {
    $apiInstance->deleteCourseVersion($engine_tenant_name, $course_id, $version_id);
} catch (Exception $e) {
    echo 'Exception when calling CourseApi->deleteCourseVersion: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **engine_tenant_name** | **string**| tenant for this request |
 **course_id** | **string**|  |
 **version_id** | **int**| the course version |

### Return type

void (empty response body)

### Authorization

[basic](../../README.md#basic), [oauth](../../README.md#oauth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteCourseVersionAsset**
> deleteCourseVersionAsset($engine_tenant_name, $course_id, $version_id, $relative_path)

Delete the specified asset in the current version of the specified course

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

$apiInstance = new RusticiSoftware\Engine\V2\Api\CourseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$engine_tenant_name = "engine_tenant_name_example"; // string | tenant for this request
$course_id = "course_id_example"; // string | 
$version_id = 56; // int | the course version
$relative_path = "relative_path_example"; // string | Relative path of the asset within the course.

try {
    $apiInstance->deleteCourseVersionAsset($engine_tenant_name, $course_id, $version_id, $relative_path);
} catch (Exception $e) {
    echo 'Exception when calling CourseApi->deleteCourseVersionAsset: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **engine_tenant_name** | **string**| tenant for this request |
 **course_id** | **string**|  |
 **version_id** | **int**| the course version |
 **relative_path** | **string**| Relative path of the asset within the course. |

### Return type

void (empty response body)

### Authorization

[basic](../../README.md#basic), [oauth](../../README.md#oauth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteCourseVersionConfigurationSetting**
> deleteCourseVersionConfigurationSetting($engine_tenant_name, $course_id, $version_id, $setting_id)

Clears the `settingId` value for this course and version.

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

$apiInstance = new RusticiSoftware\Engine\V2\Api\CourseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$engine_tenant_name = "engine_tenant_name_example"; // string | tenant for this request
$course_id = "course_id_example"; // string | 
$version_id = 56; // int | the course version
$setting_id = "setting_id_example"; // string | 

try {
    $apiInstance->deleteCourseVersionConfigurationSetting($engine_tenant_name, $course_id, $version_id, $setting_id);
} catch (Exception $e) {
    echo 'Exception when calling CourseApi->deleteCourseVersionConfigurationSetting: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **engine_tenant_name** | **string**| tenant for this request |
 **course_id** | **string**|  |
 **version_id** | **int**| the course version |
 **setting_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

[basic](../../README.md#basic), [oauth](../../README.md#oauth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteCourseVersionsConfigurationSetting**
> deleteCourseVersionsConfigurationSetting($engine_tenant_name, $course_id, $setting_id)

Clears the `settingId` value for all versions of this course.

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

$apiInstance = new RusticiSoftware\Engine\V2\Api\CourseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$engine_tenant_name = "engine_tenant_name_example"; // string | tenant for this request
$course_id = "course_id_example"; // string | 
$setting_id = "setting_id_example"; // string | 

try {
    $apiInstance->deleteCourseVersionsConfigurationSetting($engine_tenant_name, $course_id, $setting_id);
} catch (Exception $e) {
    echo 'Exception when calling CourseApi->deleteCourseVersionsConfigurationSetting: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **engine_tenant_name** | **string**| tenant for this request |
 **course_id** | **string**|  |
 **setting_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

[basic](../../README.md#basic), [oauth](../../README.md#oauth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteCourseZip**
> deleteCourseZip($engine_tenant_name, $course_id, $export_type)

Deletes the exported zip for the latest version of the specified course

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

$apiInstance = new RusticiSoftware\Engine\V2\Api\CourseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$engine_tenant_name = "engine_tenant_name_example"; // string | tenant for this request
$course_id = "course_id_example"; // string | 
$export_type = "export_type_example"; // string | 

try {
    $apiInstance->deleteCourseZip($engine_tenant_name, $course_id, $export_type);
} catch (Exception $e) {
    echo 'Exception when calling CourseApi->deleteCourseZip: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **engine_tenant_name** | **string**| tenant for this request |
 **course_id** | **string**|  |
 **export_type** | **string**|  |

### Return type

void (empty response body)

### Authorization

[basic](../../README.md#basic), [oauth](../../README.md#oauth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteVersionedCourseZip**
> deleteVersionedCourseZip($engine_tenant_name, $course_id, $version_id, $export_type)

Deletes the exported zip for the specified course version

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

$apiInstance = new RusticiSoftware\Engine\V2\Api\CourseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$engine_tenant_name = "engine_tenant_name_example"; // string | tenant for this request
$course_id = "course_id_example"; // string | 
$version_id = 56; // int | the course version
$export_type = "export_type_example"; // string | 

try {
    $apiInstance->deleteVersionedCourseZip($engine_tenant_name, $course_id, $version_id, $export_type);
} catch (Exception $e) {
    echo 'Exception when calling CourseApi->deleteVersionedCourseZip: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **engine_tenant_name** | **string**| tenant for this request |
 **course_id** | **string**|  |
 **version_id** | **int**| the course version |
 **export_type** | **string**|  |

### Return type

void (empty response body)

### Authorization

[basic](../../README.md#basic), [oauth](../../README.md#oauth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCourse**
> \RusticiSoftware\Engine\V2\Model\CourseSchema getCourse($engine_tenant_name, $course_id, $include_registration_count, $include_course_metadata)

Get information about `courseId`

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

$apiInstance = new RusticiSoftware\Engine\V2\Api\CourseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$engine_tenant_name = "engine_tenant_name_example"; // string | tenant for this request
$course_id = "course_id_example"; // string | 
$include_registration_count = false; // bool | Include the registration count in the results
$include_course_metadata = false; // bool | Include course metadata in the results

try {
    $result = $apiInstance->getCourse($engine_tenant_name, $course_id, $include_registration_count, $include_course_metadata);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CourseApi->getCourse: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **engine_tenant_name** | **string**| tenant for this request |
 **course_id** | **string**|  |
 **include_registration_count** | **bool**| Include the registration count in the results | [optional] [default to false]
 **include_course_metadata** | **bool**| Include course metadata in the results | [optional] [default to false]

### Return type

[**\RusticiSoftware\Engine\V2\Model\CourseSchema**](../Model/CourseSchema.md)

### Authorization

[basic](../../README.md#basic), [oauth](../../README.md#oauth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCourseAsset**
> \SplFileObject getCourseAsset($engine_tenant_name, $course_id, $relative_path)

Get the specified asset in the current version of the specified course

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

$apiInstance = new RusticiSoftware\Engine\V2\Api\CourseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$engine_tenant_name = "engine_tenant_name_example"; // string | tenant for this request
$course_id = "course_id_example"; // string | 
$relative_path = "relative_path_example"; // string | Relative path of the asset within the course.

try {
    $result = $apiInstance->getCourseAsset($engine_tenant_name, $course_id, $relative_path);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CourseApi->getCourseAsset: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **engine_tenant_name** | **string**| tenant for this request |
 **course_id** | **string**|  |
 **relative_path** | **string**| Relative path of the asset within the course. |

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

[basic](../../README.md#basic), [oauth](../../README.md#oauth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/octet-stream

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCourseConfiguration**
> \RusticiSoftware\Engine\V2\Model\SettingListSchema getCourseConfiguration($engine_tenant_name, $course_id, $include_metadata, $include_hidden_settings, $include_secret_settings, $process_replacement_tokens)

Returns all configuration settings for this course

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

$apiInstance = new RusticiSoftware\Engine\V2\Api\CourseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$engine_tenant_name = "engine_tenant_name_example"; // string | tenant for this request
$course_id = "course_id_example"; // string | 
$include_metadata = false; // bool | 
$include_hidden_settings = false; // bool | Should settings that are declared to be hidden be included. Note: such settings generally do not need to be modified, and may be confusing.
$include_secret_settings = false; // bool | Should settings that are stored encrypted (type 'secretString') be included. Note: if included, the decrypted value will be returned.
$process_replacement_tokens = true; // bool | Whether to process replacement tokens (false returns the raw value of each setting, without tokens or environment variable replacements)

try {
    $result = $apiInstance->getCourseConfiguration($engine_tenant_name, $course_id, $include_metadata, $include_hidden_settings, $include_secret_settings, $process_replacement_tokens);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CourseApi->getCourseConfiguration: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **engine_tenant_name** | **string**| tenant for this request |
 **course_id** | **string**|  |
 **include_metadata** | **bool**|  | [optional] [default to false]
 **include_hidden_settings** | **bool**| Should settings that are declared to be hidden be included. Note: such settings generally do not need to be modified, and may be confusing. | [optional] [default to false]
 **include_secret_settings** | **bool**| Should settings that are stored encrypted (type &#39;secretString&#39;) be included. Note: if included, the decrypted value will be returned. | [optional] [default to false]
 **process_replacement_tokens** | **bool**| Whether to process replacement tokens (false returns the raw value of each setting, without tokens or environment variable replacements) | [optional] [default to true]

### Return type

[**\RusticiSoftware\Engine\V2\Model\SettingListSchema**](../Model/SettingListSchema.md)

### Authorization

[basic](../../README.md#basic), [oauth](../../README.md#oauth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCourseFileList**
> \RusticiSoftware\Engine\V2\Model\FileListSchema getCourseFileList($engine_tenant_name, $course_id)

Get the list of files in the current version of the specified course

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

$apiInstance = new RusticiSoftware\Engine\V2\Api\CourseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$engine_tenant_name = "engine_tenant_name_example"; // string | tenant for this request
$course_id = "course_id_example"; // string | 

try {
    $result = $apiInstance->getCourseFileList($engine_tenant_name, $course_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CourseApi->getCourseFileList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **engine_tenant_name** | **string**| tenant for this request |
 **course_id** | **string**|  |

### Return type

[**\RusticiSoftware\Engine\V2\Model\FileListSchema**](../Model/FileListSchema.md)

### Authorization

[basic](../../README.md#basic), [oauth](../../README.md#oauth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCourseStatements**
> \RusticiSoftware\Engine\V2\Model\XapiStatementResult getCourseStatements($engine_tenant_name, $course_id, $learner_id, $since, $until, $more)

Get xAPI statements for `courseId`

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

$apiInstance = new RusticiSoftware\Engine\V2\Api\CourseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$engine_tenant_name = "engine_tenant_name_example"; // string | tenant for this request
$course_id = "course_id_example"; // string | 
$learner_id = "learner_id_example"; // string | Only entries for the specified learner id will be included.
$since = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only items updated since the specified ISO 8601 TimeStamp (inclusive) are included. If a time zone is not specified, UTC time zone will be used.
$until = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only items updated up until the specified ISO 8601 TimeStamp (inclusive) are included. If a time zone is not specified, UTC time zone will be used.
$more = "more_example"; // string | Value for this parameter will be provided in the 'more' property of lists, where needed. An opaque value, construction and parsing may change without notice.

try {
    $result = $apiInstance->getCourseStatements($engine_tenant_name, $course_id, $learner_id, $since, $until, $more);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CourseApi->getCourseStatements: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **engine_tenant_name** | **string**| tenant for this request |
 **course_id** | **string**|  |
 **learner_id** | **string**| Only entries for the specified learner id will be included. | [optional]
 **since** | **\DateTime**| Only items updated since the specified ISO 8601 TimeStamp (inclusive) are included. If a time zone is not specified, UTC time zone will be used. | [optional]
 **until** | **\DateTime**| Only items updated up until the specified ISO 8601 TimeStamp (inclusive) are included. If a time zone is not specified, UTC time zone will be used. | [optional]
 **more** | **string**| Value for this parameter will be provided in the &#39;more&#39; property of lists, where needed. An opaque value, construction and parsing may change without notice. | [optional]

### Return type

[**\RusticiSoftware\Engine\V2\Model\XapiStatementResult**](../Model/XapiStatementResult.md)

### Authorization

[basic](../../README.md#basic), [oauth](../../README.md#oauth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCourseVersionAsset**
> \SplFileObject getCourseVersionAsset($engine_tenant_name, $course_id, $version_id, $relative_path)

Get the specified asset for this course version

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

$apiInstance = new RusticiSoftware\Engine\V2\Api\CourseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$engine_tenant_name = "engine_tenant_name_example"; // string | tenant for this request
$course_id = "course_id_example"; // string | 
$version_id = 56; // int | the course version
$relative_path = "relative_path_example"; // string | Relative path of the asset within the course.

try {
    $result = $apiInstance->getCourseVersionAsset($engine_tenant_name, $course_id, $version_id, $relative_path);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CourseApi->getCourseVersionAsset: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **engine_tenant_name** | **string**| tenant for this request |
 **course_id** | **string**|  |
 **version_id** | **int**| the course version |
 **relative_path** | **string**| Relative path of the asset within the course. |

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

[basic](../../README.md#basic), [oauth](../../README.md#oauth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/octet-stream

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCourseVersionConfiguration**
> \RusticiSoftware\Engine\V2\Model\SettingListSchema getCourseVersionConfiguration($engine_tenant_name, $course_id, $version_id, $include_metadata, $include_hidden_settings, $include_secret_settings, $process_replacement_tokens)

Returns all configuration settings for this course and version.

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

$apiInstance = new RusticiSoftware\Engine\V2\Api\CourseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$engine_tenant_name = "engine_tenant_name_example"; // string | tenant for this request
$course_id = "course_id_example"; // string | 
$version_id = 56; // int | the course version
$include_metadata = false; // bool | 
$include_hidden_settings = false; // bool | Should settings that are declared to be hidden be included. Note: such settings generally do not need to be modified, and may be confusing.
$include_secret_settings = false; // bool | Should settings that are stored encrypted (type 'secretString') be included. Note: if included, the decrypted value will be returned.
$process_replacement_tokens = true; // bool | Whether to process replacement tokens (false returns the raw value of each setting, without tokens or environment variable replacements)

try {
    $result = $apiInstance->getCourseVersionConfiguration($engine_tenant_name, $course_id, $version_id, $include_metadata, $include_hidden_settings, $include_secret_settings, $process_replacement_tokens);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CourseApi->getCourseVersionConfiguration: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **engine_tenant_name** | **string**| tenant for this request |
 **course_id** | **string**|  |
 **version_id** | **int**| the course version |
 **include_metadata** | **bool**|  | [optional] [default to false]
 **include_hidden_settings** | **bool**| Should settings that are declared to be hidden be included. Note: such settings generally do not need to be modified, and may be confusing. | [optional] [default to false]
 **include_secret_settings** | **bool**| Should settings that are stored encrypted (type &#39;secretString&#39;) be included. Note: if included, the decrypted value will be returned. | [optional] [default to false]
 **process_replacement_tokens** | **bool**| Whether to process replacement tokens (false returns the raw value of each setting, without tokens or environment variable replacements) | [optional] [default to true]

### Return type

[**\RusticiSoftware\Engine\V2\Model\SettingListSchema**](../Model/SettingListSchema.md)

### Authorization

[basic](../../README.md#basic), [oauth](../../README.md#oauth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCourseVersionFileList**
> \RusticiSoftware\Engine\V2\Model\FileListSchema getCourseVersionFileList($engine_tenant_name, $course_id, $version_id)

Get the list of files in the specified version of the specified course

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

$apiInstance = new RusticiSoftware\Engine\V2\Api\CourseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$engine_tenant_name = "engine_tenant_name_example"; // string | tenant for this request
$course_id = "course_id_example"; // string | 
$version_id = 56; // int | the course version

try {
    $result = $apiInstance->getCourseVersionFileList($engine_tenant_name, $course_id, $version_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CourseApi->getCourseVersionFileList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **engine_tenant_name** | **string**| tenant for this request |
 **course_id** | **string**|  |
 **version_id** | **int**| the course version |

### Return type

[**\RusticiSoftware\Engine\V2\Model\FileListSchema**](../Model/FileListSchema.md)

### Authorization

[basic](../../README.md#basic), [oauth](../../README.md#oauth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCourseVersionInfo**
> \RusticiSoftware\Engine\V2\Model\CourseSchema getCourseVersionInfo($engine_tenant_name, $course_id, $version_id, $include_registration_count, $include_course_metadata)

Get version `versionId` of `courseId`

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

$apiInstance = new RusticiSoftware\Engine\V2\Api\CourseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$engine_tenant_name = "engine_tenant_name_example"; // string | tenant for this request
$course_id = "course_id_example"; // string | 
$version_id = 56; // int | the course version
$include_registration_count = false; // bool | Include the registration count in the results
$include_course_metadata = false; // bool | Include course metadata in the results

try {
    $result = $apiInstance->getCourseVersionInfo($engine_tenant_name, $course_id, $version_id, $include_registration_count, $include_course_metadata);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CourseApi->getCourseVersionInfo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **engine_tenant_name** | **string**| tenant for this request |
 **course_id** | **string**|  |
 **version_id** | **int**| the course version |
 **include_registration_count** | **bool**| Include the registration count in the results | [optional] [default to false]
 **include_course_metadata** | **bool**| Include course metadata in the results | [optional] [default to false]

### Return type

[**\RusticiSoftware\Engine\V2\Model\CourseSchema**](../Model/CourseSchema.md)

### Authorization

[basic](../../README.md#basic), [oauth](../../README.md#oauth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCourseVersionStatements**
> \RusticiSoftware\Engine\V2\Model\XapiStatementResult getCourseVersionStatements($engine_tenant_name, $course_id, $version_id, $learner_id, $since, $until, $more)

Get xAPI statements for version `versionId` of `courseId`

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

$apiInstance = new RusticiSoftware\Engine\V2\Api\CourseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$engine_tenant_name = "engine_tenant_name_example"; // string | tenant for this request
$course_id = "course_id_example"; // string | 
$version_id = 56; // int | the course version
$learner_id = "learner_id_example"; // string | Only entries for the specified learner id will be included.
$since = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only items updated since the specified ISO 8601 TimeStamp (inclusive) are included. If a time zone is not specified, UTC time zone will be used.
$until = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only items updated up until the specified ISO 8601 TimeStamp (inclusive) are included. If a time zone is not specified, UTC time zone will be used.
$more = "more_example"; // string | Value for this parameter will be provided in the 'more' property of lists, where needed. An opaque value, construction and parsing may change without notice.

try {
    $result = $apiInstance->getCourseVersionStatements($engine_tenant_name, $course_id, $version_id, $learner_id, $since, $until, $more);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CourseApi->getCourseVersionStatements: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **engine_tenant_name** | **string**| tenant for this request |
 **course_id** | **string**|  |
 **version_id** | **int**| the course version |
 **learner_id** | **string**| Only entries for the specified learner id will be included. | [optional]
 **since** | **\DateTime**| Only items updated since the specified ISO 8601 TimeStamp (inclusive) are included. If a time zone is not specified, UTC time zone will be used. | [optional]
 **until** | **\DateTime**| Only items updated up until the specified ISO 8601 TimeStamp (inclusive) are included. If a time zone is not specified, UTC time zone will be used. | [optional]
 **more** | **string**| Value for this parameter will be provided in the &#39;more&#39; property of lists, where needed. An opaque value, construction and parsing may change without notice. | [optional]

### Return type

[**\RusticiSoftware\Engine\V2\Model\XapiStatementResult**](../Model/XapiStatementResult.md)

### Authorization

[basic](../../README.md#basic), [oauth](../../README.md#oauth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCourseVersions**
> \RusticiSoftware\Engine\V2\Model\CourseListNonPagedSchema getCourseVersions($engine_tenant_name, $course_id, $since, $until, $include_registration_count, $include_course_metadata)

Get all versions of `courseId`

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

$apiInstance = new RusticiSoftware\Engine\V2\Api\CourseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$engine_tenant_name = "engine_tenant_name_example"; // string | tenant for this request
$course_id = "course_id_example"; // string | 
$since = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only items updated since the specified ISO 8601 TimeStamp (inclusive) are included. If a time zone is not specified, UTC time zone will be used.
$until = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only items updated up until the specified ISO 8601 TimeStamp (inclusive) are included. If a time zone is not specified, UTC time zone will be used.
$include_registration_count = false; // bool | Include the registration count in the results
$include_course_metadata = false; // bool | Include course metadata in the results

try {
    $result = $apiInstance->getCourseVersions($engine_tenant_name, $course_id, $since, $until, $include_registration_count, $include_course_metadata);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CourseApi->getCourseVersions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **engine_tenant_name** | **string**| tenant for this request |
 **course_id** | **string**|  |
 **since** | **\DateTime**| Only items updated since the specified ISO 8601 TimeStamp (inclusive) are included. If a time zone is not specified, UTC time zone will be used. | [optional]
 **until** | **\DateTime**| Only items updated up until the specified ISO 8601 TimeStamp (inclusive) are included. If a time zone is not specified, UTC time zone will be used. | [optional]
 **include_registration_count** | **bool**| Include the registration count in the results | [optional] [default to false]
 **include_course_metadata** | **bool**| Include course metadata in the results | [optional] [default to false]

### Return type

[**\RusticiSoftware\Engine\V2\Model\CourseListNonPagedSchema**](../Model/CourseListNonPagedSchema.md)

### Authorization

[basic](../../README.md#basic), [oauth](../../README.md#oauth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCourseZip**
> \SplFileObject getCourseZip($engine_tenant_name, $course_id, $export_type)

Get the zip package for the latest course version

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

$apiInstance = new RusticiSoftware\Engine\V2\Api\CourseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$engine_tenant_name = "engine_tenant_name_example"; // string | tenant for this request
$course_id = "course_id_example"; // string | 
$export_type = "export_type_example"; // string | 

try {
    $result = $apiInstance->getCourseZip($engine_tenant_name, $course_id, $export_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CourseApi->getCourseZip: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **engine_tenant_name** | **string**| tenant for this request |
 **course_id** | **string**|  |
 **export_type** | **string**|  |

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

[basic](../../README.md#basic), [oauth](../../README.md#oauth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/zip

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCourses**
> \RusticiSoftware\Engine\V2\Model\CourseListSchema getCourses($engine_tenant_name, $more, $since, $until, $include_registration_count, $include_course_metadata)

Get a list of all courses for the specified tenant

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

$apiInstance = new RusticiSoftware\Engine\V2\Api\CourseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$engine_tenant_name = "engine_tenant_name_example"; // string | tenant for this request
$more = "more_example"; // string | Value for this parameter will be provided in the 'more' property of lists, where needed. An opaque value, construction and parsing may change without notice.
$since = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only items updated since the specified ISO 8601 TimeStamp (inclusive) are included. If a time zone is not specified, UTC time zone will be used.
$until = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only items updated up until the specified ISO 8601 TimeStamp (inclusive) are included. If a time zone is not specified, UTC time zone will be used.
$include_registration_count = false; // bool | Include the registration count in the results
$include_course_metadata = false; // bool | Include course metadata in the results

try {
    $result = $apiInstance->getCourses($engine_tenant_name, $more, $since, $until, $include_registration_count, $include_course_metadata);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CourseApi->getCourses: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **engine_tenant_name** | **string**| tenant for this request |
 **more** | **string**| Value for this parameter will be provided in the &#39;more&#39; property of lists, where needed. An opaque value, construction and parsing may change without notice. | [optional]
 **since** | **\DateTime**| Only items updated since the specified ISO 8601 TimeStamp (inclusive) are included. If a time zone is not specified, UTC time zone will be used. | [optional]
 **until** | **\DateTime**| Only items updated up until the specified ISO 8601 TimeStamp (inclusive) are included. If a time zone is not specified, UTC time zone will be used. | [optional]
 **include_registration_count** | **bool**| Include the registration count in the results | [optional] [default to false]
 **include_course_metadata** | **bool**| Include course metadata in the results | [optional] [default to false]

### Return type

[**\RusticiSoftware\Engine\V2\Model\CourseListSchema**](../Model/CourseListSchema.md)

### Authorization

[basic](../../README.md#basic), [oauth](../../README.md#oauth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getImportJobStatus**
> \RusticiSoftware\Engine\V2\Model\ImportJobResultSchema getImportJobStatus($engine_tenant_name, $import_job_id)

Check the status of an import job.

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

$apiInstance = new RusticiSoftware\Engine\V2\Api\CourseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$engine_tenant_name = "engine_tenant_name_example"; // string | tenant for this request
$import_job_id = "import_job_id_example"; // string | Id received when the import job was submitted to the importJobs resource.

try {
    $result = $apiInstance->getImportJobStatus($engine_tenant_name, $import_job_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CourseApi->getImportJobStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **engine_tenant_name** | **string**| tenant for this request |
 **import_job_id** | **string**| Id received when the import job was submitted to the importJobs resource. |

### Return type

[**\RusticiSoftware\Engine\V2\Model\ImportJobResultSchema**](../Model/ImportJobResultSchema.md)

### Authorization

[basic](../../README.md#basic), [oauth](../../README.md#oauth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getVersionedCourseZip**
> \SplFileObject getVersionedCourseZip($engine_tenant_name, $course_id, $version_id, $export_type)

Get the zip package for the specified course version

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

$apiInstance = new RusticiSoftware\Engine\V2\Api\CourseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$engine_tenant_name = "engine_tenant_name_example"; // string | tenant for this request
$course_id = "course_id_example"; // string | 
$version_id = 56; // int | the course version
$export_type = "export_type_example"; // string | 

try {
    $result = $apiInstance->getVersionedCourseZip($engine_tenant_name, $course_id, $version_id, $export_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CourseApi->getVersionedCourseZip: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **engine_tenant_name** | **string**| tenant for this request |
 **course_id** | **string**|  |
 **version_id** | **int**| the course version |
 **export_type** | **string**|  |

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

[basic](../../README.md#basic), [oauth](../../README.md#oauth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/zip

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **importCourseAssetFile**
> \RusticiSoftware\Engine\V2\Model\AssetFileSchema importCourseAssetFile($engine_tenant_name, $course_id, $asset_schema, $update_asset_policy)

Import an asset file for this course.

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

$apiInstance = new RusticiSoftware\Engine\V2\Api\CourseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$engine_tenant_name = "engine_tenant_name_example"; // string | tenant for this request
$course_id = "course_id_example"; // string | 
$asset_schema = new \RusticiSoftware\Engine\V2\Model\ImportAssetRequestSchema(); // \RusticiSoftware\Engine\V2\Model\ImportAssetRequestSchema | 
$update_asset_policy = "lax"; // string | Describes how Engine should handle importing asset files with respect to overwriting files. Valid values are 'reject', 'strict', and 'lax'. A 'reject' policy request will fail if the asset file already exists on the system ('overwriting' not allowed). A 'strict' policy request will fail if the asset file does not already exist ('overwriting' is required). A 'lax' policy request will not consider whether the file already exists (i.e., it will attempt to import in all cases).

try {
    $result = $apiInstance->importCourseAssetFile($engine_tenant_name, $course_id, $asset_schema, $update_asset_policy);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CourseApi->importCourseAssetFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **engine_tenant_name** | **string**| tenant for this request |
 **course_id** | **string**|  |
 **asset_schema** | [**\RusticiSoftware\Engine\V2\Model\ImportAssetRequestSchema**](../Model/ImportAssetRequestSchema.md)|  |
 **update_asset_policy** | **string**| Describes how Engine should handle importing asset files with respect to overwriting files. Valid values are &#39;reject&#39;, &#39;strict&#39;, and &#39;lax&#39;. A &#39;reject&#39; policy request will fail if the asset file already exists on the system (&#39;overwriting&#39; not allowed). A &#39;strict&#39; policy request will fail if the asset file does not already exist (&#39;overwriting&#39; is required). A &#39;lax&#39; policy request will not consider whether the file already exists (i.e., it will attempt to import in all cases). | [optional] [default to lax]

### Return type

[**\RusticiSoftware\Engine\V2\Model\AssetFileSchema**](../Model/AssetFileSchema.md)

### Authorization

[basic](../../README.md#basic), [oauth](../../README.md#oauth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **importCourseVersionAssetFile**
> \RusticiSoftware\Engine\V2\Model\AssetFileSchema importCourseVersionAssetFile($engine_tenant_name, $course_id, $version_id, $asset_schema, $update_asset_policy)

Import an asset file for this course version.

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

$apiInstance = new RusticiSoftware\Engine\V2\Api\CourseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$engine_tenant_name = "engine_tenant_name_example"; // string | tenant for this request
$course_id = "course_id_example"; // string | 
$version_id = 56; // int | the course version
$asset_schema = new \RusticiSoftware\Engine\V2\Model\ImportAssetRequestSchema(); // \RusticiSoftware\Engine\V2\Model\ImportAssetRequestSchema | 
$update_asset_policy = "lax"; // string | Describes how Engine should handle importing asset files with respect to overwriting files. Valid values are 'reject', 'strict', and 'lax'. A 'reject' policy request will fail if the asset file already exists on the system ('overwriting' not allowed). A 'strict' policy request will fail if the asset file does not already exist ('overwriting' is required). A 'lax' policy request will not consider whether the file already exists (i.e., it will attempt to import in all cases).

try {
    $result = $apiInstance->importCourseVersionAssetFile($engine_tenant_name, $course_id, $version_id, $asset_schema, $update_asset_policy);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CourseApi->importCourseVersionAssetFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **engine_tenant_name** | **string**| tenant for this request |
 **course_id** | **string**|  |
 **version_id** | **int**| the course version |
 **asset_schema** | [**\RusticiSoftware\Engine\V2\Model\ImportAssetRequestSchema**](../Model/ImportAssetRequestSchema.md)|  |
 **update_asset_policy** | **string**| Describes how Engine should handle importing asset files with respect to overwriting files. Valid values are &#39;reject&#39;, &#39;strict&#39;, and &#39;lax&#39;. A &#39;reject&#39; policy request will fail if the asset file already exists on the system (&#39;overwriting&#39; not allowed). A &#39;strict&#39; policy request will fail if the asset file does not already exist (&#39;overwriting&#39; is required). A &#39;lax&#39; policy request will not consider whether the file already exists (i.e., it will attempt to import in all cases). | [optional] [default to lax]

### Return type

[**\RusticiSoftware\Engine\V2\Model\AssetFileSchema**](../Model/AssetFileSchema.md)

### Authorization

[basic](../../README.md#basic), [oauth](../../README.md#oauth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **importCourseWithoutUpload**
> \RusticiSoftware\Engine\V2\Model\ImportResultSchema importCourseWithoutUpload($engine_tenant_name, $course_id, $import_request, $may_create_new_version, $dry_run)

Create a course

Import the specified course and return the results of the import. For large imports, it may be necessary to use importJobs instead to avoid timeouts.

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

$apiInstance = new RusticiSoftware\Engine\V2\Api\CourseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$engine_tenant_name = "engine_tenant_name_example"; // string | tenant for this request
$course_id = "course_id_example"; // string | A unique identifier your application will use to identify the course after import. Your application is responsible both for generating this unique ID and for keeping track of the ID for later use.
$import_request = new \RusticiSoftware\Engine\V2\Model\ImportRequestSchema(); // \RusticiSoftware\Engine\V2\Model\ImportRequestSchema | 
$may_create_new_version = false; // bool | Is it OK to create a new version of this course? If this is set to false and the course already exists, the upload will fail. If true and the course already exists then a new version will be created. No effect if the course doesn't already exist.
$dry_run = false; // bool | Validate the course can be imported (mainly by validating the manifest), but don't actually import it.

try {
    $result = $apiInstance->importCourseWithoutUpload($engine_tenant_name, $course_id, $import_request, $may_create_new_version, $dry_run);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CourseApi->importCourseWithoutUpload: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **engine_tenant_name** | **string**| tenant for this request |
 **course_id** | **string**| A unique identifier your application will use to identify the course after import. Your application is responsible both for generating this unique ID and for keeping track of the ID for later use. |
 **import_request** | [**\RusticiSoftware\Engine\V2\Model\ImportRequestSchema**](../Model/ImportRequestSchema.md)|  |
 **may_create_new_version** | **bool**| Is it OK to create a new version of this course? If this is set to false and the course already exists, the upload will fail. If true and the course already exists then a new version will be created. No effect if the course doesn&#39;t already exist. | [optional] [default to false]
 **dry_run** | **bool**| Validate the course can be imported (mainly by validating the manifest), but don&#39;t actually import it. | [optional] [default to false]

### Return type

[**\RusticiSoftware\Engine\V2\Model\ImportResultSchema**](../Model/ImportResultSchema.md)

### Authorization

[basic](../../README.md#basic), [oauth](../../README.md#oauth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setCourseConfiguration**
> setCourseConfiguration($engine_tenant_name, $course_id, $configuration_settings)

Set configuration settings for this course.

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

$apiInstance = new RusticiSoftware\Engine\V2\Api\CourseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$engine_tenant_name = "engine_tenant_name_example"; // string | tenant for this request
$course_id = "course_id_example"; // string | 
$configuration_settings = new \RusticiSoftware\Engine\V2\Model\SettingsPostSchema(); // \RusticiSoftware\Engine\V2\Model\SettingsPostSchema | 

try {
    $apiInstance->setCourseConfiguration($engine_tenant_name, $course_id, $configuration_settings);
} catch (Exception $e) {
    echo 'Exception when calling CourseApi->setCourseConfiguration: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **engine_tenant_name** | **string**| tenant for this request |
 **course_id** | **string**|  |
 **configuration_settings** | [**\RusticiSoftware\Engine\V2\Model\SettingsPostSchema**](../Model/SettingsPostSchema.md)|  |

### Return type

void (empty response body)

### Authorization

[basic](../../README.md#basic), [oauth](../../README.md#oauth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setCourseTitle**
> setCourseTitle($engine_tenant_name, $course_id, $title)

Sets the course title for `courseId`

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

$apiInstance = new RusticiSoftware\Engine\V2\Api\CourseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$engine_tenant_name = "engine_tenant_name_example"; // string | tenant for this request
$course_id = "course_id_example"; // string | 
$title = new \RusticiSoftware\Engine\V2\Model\TitleSchema(); // \RusticiSoftware\Engine\V2\Model\TitleSchema | 

try {
    $apiInstance->setCourseTitle($engine_tenant_name, $course_id, $title);
} catch (Exception $e) {
    echo 'Exception when calling CourseApi->setCourseTitle: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **engine_tenant_name** | **string**| tenant for this request |
 **course_id** | **string**|  |
 **title** | [**\RusticiSoftware\Engine\V2\Model\TitleSchema**](../Model/TitleSchema.md)|  |

### Return type

void (empty response body)

### Authorization

[basic](../../README.md#basic), [oauth](../../README.md#oauth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setCourseVersionConfiguration**
> setCourseVersionConfiguration($engine_tenant_name, $course_id, $version_id, $configuration_settings)

Set configuration settings for this course and version.

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

$apiInstance = new RusticiSoftware\Engine\V2\Api\CourseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$engine_tenant_name = "engine_tenant_name_example"; // string | tenant for this request
$course_id = "course_id_example"; // string | 
$version_id = 56; // int | the course version
$configuration_settings = new \RusticiSoftware\Engine\V2\Model\SettingsPostSchema(); // \RusticiSoftware\Engine\V2\Model\SettingsPostSchema | 

try {
    $apiInstance->setCourseVersionConfiguration($engine_tenant_name, $course_id, $version_id, $configuration_settings);
} catch (Exception $e) {
    echo 'Exception when calling CourseApi->setCourseVersionConfiguration: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **engine_tenant_name** | **string**| tenant for this request |
 **course_id** | **string**|  |
 **version_id** | **int**| the course version |
 **configuration_settings** | [**\RusticiSoftware\Engine\V2\Model\SettingsPostSchema**](../Model/SettingsPostSchema.md)|  |

### Return type

void (empty response body)

### Authorization

[basic](../../README.md#basic), [oauth](../../README.md#oauth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setCourseVersionsConfiguration**
> setCourseVersionsConfiguration($engine_tenant_name, $course_id, $configuration_settings)

Set configuration settings for all versions of this course.

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

$apiInstance = new RusticiSoftware\Engine\V2\Api\CourseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$engine_tenant_name = "engine_tenant_name_example"; // string | tenant for this request
$course_id = "course_id_example"; // string | 
$configuration_settings = new \RusticiSoftware\Engine\V2\Model\SettingsPostSchema(); // \RusticiSoftware\Engine\V2\Model\SettingsPostSchema | 

try {
    $apiInstance->setCourseVersionsConfiguration($engine_tenant_name, $course_id, $configuration_settings);
} catch (Exception $e) {
    echo 'Exception when calling CourseApi->setCourseVersionsConfiguration: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **engine_tenant_name** | **string**| tenant for this request |
 **course_id** | **string**|  |
 **configuration_settings** | [**\RusticiSoftware\Engine\V2\Model\SettingsPostSchema**](../Model/SettingsPostSchema.md)|  |

### Return type

void (empty response body)

### Authorization

[basic](../../README.md#basic), [oauth](../../README.md#oauth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **uploadAndImportCourse**
> \RusticiSoftware\Engine\V2\Model\ImportResultSchema uploadAndImportCourse($engine_tenant_name, $course_id, $may_create_new_version, $dry_run, $file, $content_metadata, $uploaded_content_type)

Upload a course to import

Upload and import the specified course and return the results of the import. For large imports, it may be necessary to use importJobs instead to avoid timeouts.

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

$apiInstance = new RusticiSoftware\Engine\V2\Api\CourseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$engine_tenant_name = "engine_tenant_name_example"; // string | tenant for this request
$course_id = "course_id_example"; // string | A unique identifier your application will use to identify the course after import. Your application is responsible both for generating this unique ID and for keeping track of the ID for later use.
$may_create_new_version = false; // bool | Is it OK to create a new version of this course? If this is set to false and the course already exists, the upload will fail. If true and the course already exists then a new version will be created. No effect if the course doesn't already exist.
$dry_run = false; // bool | Validate the course can be imported (mainly by validating the manifest), but don't actually import it.
$file = "/path/to/file.txt"; // \SplFileObject | The course content file to import.
$content_metadata = "content_metadata_example"; // string | Serialized 'mediaFileMetadata' schema.
$uploaded_content_type = "application/zip"; // string | The MIME type identifier for the content to be uploaded

try {
    $result = $apiInstance->uploadAndImportCourse($engine_tenant_name, $course_id, $may_create_new_version, $dry_run, $file, $content_metadata, $uploaded_content_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CourseApi->uploadAndImportCourse: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **engine_tenant_name** | **string**| tenant for this request |
 **course_id** | **string**| A unique identifier your application will use to identify the course after import. Your application is responsible both for generating this unique ID and for keeping track of the ID for later use. |
 **may_create_new_version** | **bool**| Is it OK to create a new version of this course? If this is set to false and the course already exists, the upload will fail. If true and the course already exists then a new version will be created. No effect if the course doesn&#39;t already exist. | [optional] [default to false]
 **dry_run** | **bool**| Validate the course can be imported (mainly by validating the manifest), but don&#39;t actually import it. | [optional] [default to false]
 **file** | **\SplFileObject**| The course content file to import. | [optional]
 **content_metadata** | **string**| Serialized &#39;mediaFileMetadata&#39; schema. | [optional]
 **uploaded_content_type** | **string**| The MIME type identifier for the content to be uploaded | [optional] [default to application/zip]

### Return type

[**\RusticiSoftware\Engine\V2\Model\ImportResultSchema**](../Model/ImportResultSchema.md)

### Authorization

[basic](../../README.md#basic), [oauth](../../README.md#oauth)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **uploadCourseAssetFile**
> \RusticiSoftware\Engine\V2\Model\AssetFileSchema uploadCourseAssetFile($engine_tenant_name, $course_id, $destination, $file, $update_asset_policy)

Upload an asset file for this course.

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

$apiInstance = new RusticiSoftware\Engine\V2\Api\CourseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$engine_tenant_name = "engine_tenant_name_example"; // string | tenant for this request
$course_id = "course_id_example"; // string | 
$destination = "destination_example"; // string | Path, relative to the course's Content Directory, that indicates where to store the uploaded asset file.
$file = "/path/to/file.txt"; // \SplFileObject | The course content file to import.
$update_asset_policy = "lax"; // string | Describes how Engine should handle importing asset files with respect to overwriting files. Valid values are 'reject', 'strict', and 'lax'. A 'reject' policy request will fail if the asset file already exists on the system ('overwriting' not allowed). A 'strict' policy request will fail if the asset file does not already exist ('overwriting' is required). A 'lax' policy request will not consider whether the file already exists (i.e., it will attempt to import in all cases).

try {
    $result = $apiInstance->uploadCourseAssetFile($engine_tenant_name, $course_id, $destination, $file, $update_asset_policy);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CourseApi->uploadCourseAssetFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **engine_tenant_name** | **string**| tenant for this request |
 **course_id** | **string**|  |
 **destination** | **string**| Path, relative to the course&#39;s Content Directory, that indicates where to store the uploaded asset file. |
 **file** | **\SplFileObject**| The course content file to import. | [optional]
 **update_asset_policy** | **string**| Describes how Engine should handle importing asset files with respect to overwriting files. Valid values are &#39;reject&#39;, &#39;strict&#39;, and &#39;lax&#39;. A &#39;reject&#39; policy request will fail if the asset file already exists on the system (&#39;overwriting&#39; not allowed). A &#39;strict&#39; policy request will fail if the asset file does not already exist (&#39;overwriting&#39; is required). A &#39;lax&#39; policy request will not consider whether the file already exists (i.e., it will attempt to import in all cases). | [optional] [default to lax]

### Return type

[**\RusticiSoftware\Engine\V2\Model\AssetFileSchema**](../Model/AssetFileSchema.md)

### Authorization

[basic](../../README.md#basic), [oauth](../../README.md#oauth)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **uploadCourseVersionAssetFile**
> \RusticiSoftware\Engine\V2\Model\AssetFileSchema uploadCourseVersionAssetFile($engine_tenant_name, $course_id, $version_id, $destination, $file, $update_asset_policy)

Upload an asset file for this course version.

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

$apiInstance = new RusticiSoftware\Engine\V2\Api\CourseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$engine_tenant_name = "engine_tenant_name_example"; // string | tenant for this request
$course_id = "course_id_example"; // string | 
$version_id = 56; // int | the course version
$destination = "destination_example"; // string | Path, relative to the course's Content Directory, that indicates where to store the uploaded asset file.
$file = "/path/to/file.txt"; // \SplFileObject | The course content file to import.
$update_asset_policy = "lax"; // string | Describes how Engine should handle importing asset files with respect to overwriting files. Valid values are 'reject', 'strict', and 'lax'. A 'reject' policy request will fail if the asset file already exists on the system ('overwriting' not allowed). A 'strict' policy request will fail if the asset file does not already exist ('overwriting' is required). A 'lax' policy request will not consider whether the file already exists (i.e., it will attempt to import in all cases).

try {
    $result = $apiInstance->uploadCourseVersionAssetFile($engine_tenant_name, $course_id, $version_id, $destination, $file, $update_asset_policy);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CourseApi->uploadCourseVersionAssetFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **engine_tenant_name** | **string**| tenant for this request |
 **course_id** | **string**|  |
 **version_id** | **int**| the course version |
 **destination** | **string**| Path, relative to the course&#39;s Content Directory, that indicates where to store the uploaded asset file. |
 **file** | **\SplFileObject**| The course content file to import. | [optional]
 **update_asset_policy** | **string**| Describes how Engine should handle importing asset files with respect to overwriting files. Valid values are &#39;reject&#39;, &#39;strict&#39;, and &#39;lax&#39;. A &#39;reject&#39; policy request will fail if the asset file already exists on the system (&#39;overwriting&#39; not allowed). A &#39;strict&#39; policy request will fail if the asset file does not already exist (&#39;overwriting&#39; is required). A &#39;lax&#39; policy request will not consider whether the file already exists (i.e., it will attempt to import in all cases). | [optional] [default to lax]

### Return type

[**\RusticiSoftware\Engine\V2\Model\AssetFileSchema**](../Model/AssetFileSchema.md)

### Authorization

[basic](../../README.md#basic), [oauth](../../README.md#oauth)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

