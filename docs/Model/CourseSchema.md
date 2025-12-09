# # CourseSchema

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional]
**title** | **string** |  | [optional]
**xapi_activity_id** | **string** | xAPI activity id associated with this course | [optional]
**updated** | **\DateTime** |  | [optional]
**web_path** | **string** | The web path at which the course&#39;s contents are hosted. For AICC courses, refer to the href property of the child activities as this value will not be available. | [optional]
**version** | **int** |  | [optional]
**registration_count** | **int** |  | [optional]
**activity_id** | **string** |  | [optional]
**course_learning_standard** | **string** |  | [optional]
**launchable** | **bool** | Always &#39;true&#39; except for courses created by the xAPI On-Demand Registrations process which are only there as a placeholder. If &#39;false&#39;, this course does not have the necessary information to be launched. | [optional] [default to true]
**connector** | [**\RusticiSoftware\Engine\V2\Model\CourseConnectorSchema**](CourseConnectorSchema.md) |  | [optional]
**metadata** | [**\RusticiSoftware\Engine\V2\Model\MetadataSchema**](MetadataSchema.md) |  | [optional]
**root_activity** | [**\RusticiSoftware\Engine\V2\Model\CourseActivitySchema**](CourseActivitySchema.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
