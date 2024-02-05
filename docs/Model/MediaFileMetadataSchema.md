# MediaFileMetadataSchema

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**title** | **string** | Title for the referenced course content. | [optional] 
**description** | **string** | Description of the referenced course content. For media file content, the default value is an empty string. | [optional] 
**content_language** | **string** | An RFC 5646 compliant language code that specifies the content&#39;s language. For media file content, the default value is &#39;en&#39;. | [optional] 
**move_on** | **string** | Value of the cmi5 &#39;moveOn&#39; property for the referenced course content. Possible values are: Passed, Completed, CompletedAndPassed, CompletedOrPassed, and NotApplicable. For media file content, the default value is &#39;Completed&#39;. This property is only applicable with the following learning standards: cmi5, MediaFile. | [optional] 
**estimated_duration** | **int** | Estimated number of seconds required to complete the course. | [optional] 
**activity_type** | **string** | The IRI activity type of the media content. If not provided, reasonable default values will be assumed based on the content&#39;s &#39;contentType&#39;. This property is only applicable with the following learning standards: MediaFile. | [optional] 
**x_api_activity_id** | **string** | The xAPI activity ID associated with this course. This property is only applicable with the following learning standards: SCORM, AICC, MediaFile. | [optional] 
**cmi5_publisher_id** | **string** | The publisher ID for a cmi5 course. This property is only applicable with the following learning standards: cmi5, MediaFile. | [optional] 
**additional_metadata** | **object** | Additional arbitrary metadata associated with this course. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


