# UserOutput

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Object&#39;s ID | [optional] 
**firstname** | **string** | User&#39;s firstname | 
**lastname** | **string** | User&#39;s lastname | 
**full_name** | **string** | User&#39;s full name | [optional] 
**title** | **string** | User&#39;s title | [optional] 
**email** | **string** | User&#39;s email address | 
**phone** | **string** | User&#39;s phone number (mobiles and landline telephones are supported). Phone number must be formatted to E164 (https://en.wikipedia.org/wiki/E.164) which includes the symbol &#39;+&#39; and the country code. For example : +33612131315. All countries are supported. | [optional] 
**status** | **string** | User&#39;s status | [optional] 
**company** | **string** | Company&#39;s ID | [optional] 
**created_at** | [**\DateTime**](\DateTime.md) | Created date of the object | [optional] 
**updated_at** | [**\DateTime**](\DateTime.md) | Updated date of the object | [optional] 
**config** | **object** |  | [optional] 
**saml_name_id** | **string** | ID of SAML | [optional] 
**default_sign_image** | **string** | ID of the default sign image. | [optional] 
**fast_sign** | **bool** | Defines if the fast signature is available for the user on the Yousign application | [optional] 
**group** | [**\YouSign\Client\Model\UserGroup**](UserGroup.md) |  | [optional] 
**notifications** | **object** | Defines if the notifications are enable ou disable for entities | [optional] 
**deleted** | **bool** | Defines if the User is deleted or not | [optional] 
**deleted_at** | [**\DateTime**](\DateTime.md) | Defines the date where the user has been deleted | [optional] 
**inwebo_user_request__internal** | [**\YouSign\Client\Model\InweboUserRequest**](InweboUserRequest.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


