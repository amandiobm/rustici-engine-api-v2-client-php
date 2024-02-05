# LaunchLinkRequestSchema

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**expiry** | **int** | The number of seconds from now that this link will expire in. This parameter should only be specified if the setting &#39;ApiUseSignedLaunchLinks&#39; is configured with a value of &#39;true&#39;. | [optional] [default to 120]
**redirect_on_exit_url** | **string** | The URL the application should redirect to when the learner exits a course. If not specified, configured value will be used. | [optional] 
**tracking** | **bool** | Should this launch be tracked? If false, Engine will avoid tracking to the extent possible for the standard being used. | [optional] [default to true]
**start_sco** | **string** | For SCORM, SCO identifier to override launch, overriding the normal sequencing. | [optional] 
**additional_values** | [**\Swagger\Client\Model\ItemValuePairSchema[]**](ItemValuePairSchema.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


