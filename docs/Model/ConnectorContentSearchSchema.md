# ConnectorContentSearchSchema

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**connector_id** | **string** | only search using the specified connector | [optional] 
**search** | **string** |  | [optional] 
**since** | [**\DateTime**](\DateTime.md) | Only items updated since the specified ISO 8601 TimeStamp (inclusive) are included. If a time zone is not specified, UTC time zone will be used. | [optional] 
**context** | [**\Swagger\Client\Model\ConnectorContentSearchContextSchema**](ConnectorContentSearchContextSchema.md) |  | [optional] 
**more** | **string** | Token for getting the next set of results, from the prior set of results. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


