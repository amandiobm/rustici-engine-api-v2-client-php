# LtiLinkMetadataSchemaContext

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**context_id** | **string** | Unique, opaque identifier for the context. For LTI 1.3, this identifier must not exceed 255 ASCII characters and must be provided if any other context claims are also provided. | [optional] 
**context_title** | **string** | Title for the context | [optional] 
**context_label** | **string** | Short identifier for the context, such as a course code | [optional] 
**context_type** | **string[]** | The type of context the referenced link belongs to. Per LTI specifications, if this parameter is present the array must include at least one known context type for that LTI version. It may include other context types but by best practice they should be fully-qualified URNs (for LTI 1.1) or fully-qualified URIs (for LTI 1.3). Valid context type values for LTI 1.1 are: urn:lti:context-type:ims/lis/CourseOffering, CourseOffering, urn:lti:context-type:ims/lis/CourseSection, CourseSection, urn:lti:context-type:ims/lis/CourseTemplate, CourseTemplate, urn:lti:context-type:ims/lis/Group, Group. Valid context type values for LTI 1.3 are http://purl.imsglobal.org/vocab/lis/v2/course#CourseOffering, http://purl.imsglobal.org/vocab/lis/v2/course#CourseSection, http://purl.imsglobal.org/vocab/lis/v2/course#CourseTemplate, http://purl.imsglobal.org/vocab/lis/v2/course#Group. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


