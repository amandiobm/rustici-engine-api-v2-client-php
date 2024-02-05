# SettingMetadata

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**default** | **string** | Default value of this setting | [optional] 
**data_type** | **string** | The data type of this setting | [optional] 
**setting_description** | **string** | description of this setting | [optional] 
**level** | **string** | The level this setting will be applied at, which limits where it can be set. For example, WebPathToContentRoot is applied at the tenant level, so it&#39;s not valid to set it for a registration. | [optional] 
**learning_standards** | **string[]** | The list of learning standards this setting applies to. If not present, this setting is not limited to certain learning standards. | [optional] 
**fallback** | **string** | A setting that will be used instead of this setting if no value is provided for this setting (This is similar to a default, except that the the value of another setting is being used instead of a fixed default value) | [optional] 
**valid_values** | [**\Swagger\Client\Model\SettingValidValue[]**](SettingValidValue.md) | For settings with a fixed list of valid values, the list of those values | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


