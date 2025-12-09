# # FinalizeRegistrationProgressSchema

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**is_completed** | **bool** | If provided, sets final completion status to completed (true) or incomplete (false) | [optional]
**is_passed** | **bool** | If provided, sets final success status to passed (true) or failed (false) | [optional]
**score** | [**\RusticiSoftware\Engine\V2\Model\ScoreSchema**](ScoreSchema.md) |  | [optional]
**total_seconds_tracked** | **float** | If provided, sets final tracked time (how long the course or activity took to complete) | [optional]
**update_reason** | **string** | The reason why this was finalized. Possible reasons are: tested out (TestOut), or completed an equivalent activity within this course (Equivalent), or completed an equivalent activity outside of this course (ExternalEquivalent), or an administrator has marked this as complete (Administrative), or another reason (Other). Note that Other is not a valid reason for cmi5 because cmi5 requires the waived reason to be one of the four reasons defined in the cmi5 specification. Otherwise, the Other reason may be used with the other learning standards. | [optional] [default to 'Administrative']

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
