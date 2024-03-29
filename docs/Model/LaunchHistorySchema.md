# LaunchHistorySchema

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Identifier for the registration associated with this record | [optional] 
**instance** | **int** |  | [optional] 
**score** | [**\RusticiSoftware\Engine\V2\Model\ScoreSchema**](ScoreSchema.md) |  | [optional] 
**completion_status** | **string** |  | [optional] [default to 'UNKNOWN']
**success_status** | **string** |  | [optional] [default to 'UNKNOWN']
**history_log** | **string** |  | [optional] 
**total_seconds_tracked** | **double** |  | [optional] 
**launch_time** | [**\DateTime**](\DateTime.md) | The time of the launch in UTC | [optional] 
**exit_time** | [**\DateTime**](\DateTime.md) | The time of the exit in UTC | [optional] 
**last_runtime_update** | [**\DateTime**](\DateTime.md) | The time of the last runtime update in UTC | [optional] 
**launch_history_id** | **string** | A unique identifier for this launch history record | [optional] 
**forced_exit** | **bool** | Was the previous exit forced due to a concurrent launch | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


