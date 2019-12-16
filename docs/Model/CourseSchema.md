# CourseSchema

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional] 
**title** | **string** |  | [optional] 
**xapi_activity_id** | **string** | xAPI activity id associated with this course | [optional] 
**updated** | [**\DateTime**](\DateTime.md) |  | [optional] 
**web_path** | **string** | The web path at which the course&#39;s contents are hosted. For AICC courses, refer to the href property of the child activities as this value will not be available. | [optional] 
**version** | **int** |  | [optional] 
**registration_count** | **int** |  | [optional] 
**activity_id** | **string** |  | [optional] 
**course_learning_standard** | **string** |  | [optional] 
**connector** | [**\RusticiSoftware\Engine\V2\Model\CourseConnectorSchema**](CourseConnectorSchema.md) |  | [optional] 
**metadata** | [**\RusticiSoftware\Engine\V2\Model\MetadataSchema**](MetadataSchema.md) |  | [optional] 
**root_activity** | [**\RusticiSoftware\Engine\V2\Model\CourseActivitySchema**](CourseActivitySchema.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


