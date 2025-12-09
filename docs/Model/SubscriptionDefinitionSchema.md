# # SubscriptionDefinitionSchema

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**topic** | **string** | Topic to subscribe to |
**subtopics** | **string[]** | Topic dependent list of sub-topics for which the subscriber should be notified. Eg: &#39;success&#39; or &#39;failed&#39; for course import | [optional]
**enabled** | **bool** |  |
**url** | **string** |  |
**auth_id** | **string** | The ID for the subscription auth entry to use to authorize requests for this subscription. | [optional]
**timeout_ms** | **int** | Network timeout in milliseconds for sending subscription | [optional]
**async_mode** | **string** | Will this Notification be sent in a thread, or synchronously? Note: Synchronous delivery should be used sparingly as it may severely degrade performance. Has no effect on Exchanges. | [optional]
**strict_ordering** | **bool** | Should Engine keep track of notification ordering and drop out of date notifications? Note: Ordering notifications should be used sparingly as it may severly degrade performance. Has no effect on Exchanges. | [optional]
**expires_ms** | **int** | For how long (in ms) should Engine cache the response to this Exchange. Has no effect on Notifications. | [optional]
**retry_attempts** | **int** | The number of times Engine will attempt to send after a failure. Takes the lower value between this and the &#x60;SimpleQueueMaxRetries&#x60; configuration setting. | [optional]
**retry_delay_seconds** | **int** | The initial length of time Engine will wait before retrying after a failure. This time will be doubled after each retry. Takes the greater value between this and the &#x60;SimpleQueueRetryInitialDelaySeconds&#x60; configuration setting. | [optional]
**ignore_before_date** | **\DateTime** | Queued messages generated before this date will be discarded. | [optional]
**filters** | [**\RusticiSoftware\Engine\V2\Model\SubscriptionDefinitionSchemaFiltersInner[]**](SubscriptionDefinitionSchemaFiltersInner.md) | Filters on resources such as course, registration, or tenant for which this subscriber should be notified. If multiple filters are defined, only events that match all the filters will trigger a notification. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
