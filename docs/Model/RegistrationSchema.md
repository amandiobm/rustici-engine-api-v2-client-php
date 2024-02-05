# RegistrationSchema

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional] 
**instance** | **int** |  | [optional] 
**xapi_registration_id** | **string** | xAPI registration id associated with this registration | [optional] 
**lti13_subject_identifier** | **string** | Identifier for the registration that will be sent to the LTI 1.3 tool during launch in the &#39;sub&#39; claim. Corresponds to the &#39;userId&#39; parameter in the Assignment and Grade Service endpoints | [optional] 
**lti13_custom_claims** | **object** |  | [optional] 
**dispatch_id** | **string** | Dispatch ID for this registration, if applicable | [optional] 
**updated** | [**\DateTime**](\DateTime.md) |  | [optional] 
**registration_completion** | **string** |  | [optional] [default to 'UNKNOWN']
**registration_success** | **string** |  | [optional] [default to 'UNKNOWN']
**score** | [**\Swagger\Client\Model\ScoreSchema**](ScoreSchema.md) |  | [optional] 
**total_seconds_tracked** | **double** |  | [optional] 
**first_access_date** | [**\DateTime**](\DateTime.md) |  | [optional] 
**last_access_date** | [**\DateTime**](\DateTime.md) |  | [optional] 
**completed_date** | [**\DateTime**](\DateTime.md) |  | [optional] 
**created_date** | [**\DateTime**](\DateTime.md) |  | [optional] 
**course** | [**\Swagger\Client\Model\CourseReferenceSchema**](CourseReferenceSchema.md) |  | [optional] 
**learner** | [**\Swagger\Client\Model\LearnerSchema**](LearnerSchema.md) |  | [optional] 
**global_objectives** | [**\Swagger\Client\Model\ObjectiveSchema[]**](ObjectiveSchema.md) |  | [optional] 
**activity_details** | [**\Swagger\Client\Model\ActivityResultSchema**](ActivityResultSchema.md) |  | [optional] 
**shared_data** | [**\Swagger\Client\Model\SharedDataEntrySchema[]**](SharedDataEntrySchema.md) |  | [optional] 
**suspended_activity_id** | **string** |  | [optional] 
**registration_completion_amount** | **double** | A decimal value between 0 and 1 representing the percentage of this course that the learner has completed so far, if known. Note: for learning standards other than SCORM 2004 4th Edition, this value is based on the percentage of activities completed/passed. This means that single-activity courses in those standards will always return either 0 or 1. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


