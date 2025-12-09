# # SubscriptionAuthDefinitionSchema

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**subscription_auth_type** | **string** |  |
**key** | **string** | key / username / client ID depending on auth mode | [optional]
**secret** | **string** | password or secret depending on auth mode. For HMAC, this is the base64 of the secret | [optional]
**scope** | **string** | OAuth2 scope | [optional]
**token_url** | **string** | OAuth2 authorization endpoint | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
