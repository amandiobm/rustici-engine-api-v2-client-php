# MediaFileMetadataSchema

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**title** | **string** | Title for the referenced course content | [optional] 
**description** | **string** | Description of the referenced course content | [optional] 
**content_language** | **string** | Language code that specifies the content&#39;s language. The default value is &#39;en&#39;. | [optional] 
**move_on** | **string** | Value of the cmi5 &#39;moveOn&#39; property for the referenced course content. The default value is &#39;Completed&#39;. | [optional] 
**estimated_duration** | **int** | Estimated number of seconds required to complete the course. | [optional] 
**activity_type** | **string** | The IRI activity type of the media content. If not provided, reasonable default values will be assumed based on the content&#39;s &#39;contentType&#39;. | [optional] 
**cmi5_publisher_id** | **string** | The publisher ID for a cmi5 course. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


