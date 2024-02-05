# NotificationFailedBody

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**subscription_definition** | [**\Swagger\Client\Model\SubscriptionDefinitionSchema**](SubscriptionDefinitionSchema.md) | The subscription whose message failed. | [optional] 
**message** | [**\Swagger\Client\Model\EventMessage**](EventMessage.md) | The contents of the message which failed. | [optional] 
**error_message** | **string** | The error in Engine which caused the failure. | [optional] 
**error_reference** | **string** | A reference to the error in Engine. | [optional] 
**http_response_code** | **int** | The response code Engine recieved after attempting to send. | [optional] 
**response_body** | **object** | The response body Engine recieved after attempting to send. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


