# TokenRequestSchema

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**permissions** | [**\RusticiSoftware\Engine\V2\Model\PermissionsSchema**](PermissionsSchema.md) |  | 
**expiry** | [**\DateTime**](\DateTime.md) | Expiration of the token. This should not be set far in the future, as there is no way to invalidate an individual token. | 
**id** | **string** | Unique ID for this token, for access logging. | [optional] 
**additional_values** | [**\RusticiSoftware\Engine\V2\Model\ItemValuePairSchema[]**](ItemValuePairSchema.md) | Additional values to be included in the token | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


