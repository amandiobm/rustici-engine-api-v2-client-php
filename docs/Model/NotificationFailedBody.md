# # NotificationFailedBody

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**subscription_definition** | [**\RusticiSoftware\Engine\V2\Model\SubscriptionDefinitionSchema**](SubscriptionDefinitionSchema.md) |  | [optional]
**message** | [**\RusticiSoftware\Engine\V2\Model\EventMessage**](EventMessage.md) |  | [optional]
**error_message** | **string** | The error in Engine which caused the failure. | [optional]
**error_reference** | **string** | A reference to the error in Engine. | [optional]
**http_response_code** | **int** | The response code Engine recieved after attempting to send. | [optional]
**response_body** | **object** | The response body Engine recieved after attempting to send. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
