# SwaggerClient-php
No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)

This PHP package is automatically generated by the [Swagger Codegen](https://github.com/swagger-api/swagger-codegen) project:

- API version: 2.1
- Build package: io.swagger.codegen.languages.PhpClientCodegen

## Requirements

PHP 5.5 and later

## Installation & Usage
### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```
{
  "repositories": [
    {
      "type": "git",
      "url": "https://github.com/GIT_USER_ID/GIT_REPO_ID.git"
    }
  ],
  "require": {
    "GIT_USER_ID/GIT_REPO_ID": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/SwaggerClient-php/vendor/autoload.php');
```

## Tests

To run the unit tests:

```
composer install
./vendor/bin/phpunit
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AuthenticationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 
$authorization = "\"Bearer {{access_token}}\""; // string | Authentication credentials for HTTP authentication

try {
    $result = $apiInstance->authenticationsEmailIdGet($id, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationsApi->authenticationsEmailIdGet: ', $e->getMessage(), PHP_EOL;
}

?>
```

## Documentation for API Endpoints

All URIs are relative to *https://api.yousign.com*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AuthenticationsApi* | [**authenticationsEmailIdGet**](docs/Api/AuthenticationsApi.md#authenticationsemailidget) | **GET** /authentications/email/{id} | Find an Authentication by ID
*AuthenticationsApi* | [**authenticationsEmailIdPut**](docs/Api/AuthenticationsApi.md#authenticationsemailidput) | **PUT** /authentications/email/{id} | Update an Email Authentication
*AuthenticationsApi* | [**authenticationsInweboIdGet**](docs/Api/AuthenticationsApi.md#authenticationsinweboidget) | **GET** /authentications/inwebo/{id} | Get an Authentication
*AuthenticationsApi* | [**authenticationsInweboIdPut**](docs/Api/AuthenticationsApi.md#authenticationsinweboidput) | **PUT** /authentications/inwebo/{id} | Update an inwebo Authentication
*AuthenticationsApi* | [**authenticationsSmsIdGet**](docs/Api/AuthenticationsApi.md#authenticationssmsidget) | **GET** /authentications/sms/{id} | Find an Authentication by ID
*AuthenticationsApi* | [**authenticationsSmsIdPut**](docs/Api/AuthenticationsApi.md#authenticationssmsidput) | **PUT** /authentications/sms/{id} | Update an SMS Authentication
*CheckDocumentApi* | [**checkDocumentBankAccountsIdGet**](docs/Api/CheckDocumentApi.md#checkdocumentbankaccountsidget) | **GET** /check-document/bank_accounts/{id} | Get informations about a bank document (RIB)
*CheckDocumentApi* | [**checkDocumentBankAccountsPost**](docs/Api/CheckDocumentApi.md#checkdocumentbankaccountspost) | **POST** /check-document/bank_accounts | Verify a bank document (RIB)
*CheckDocumentApi* | [**checkDocumentIdentitiesIdGet**](docs/Api/CheckDocumentApi.md#checkdocumentidentitiesidget) | **GET** /check-document/identities/{id} | Get informations about an identity document (passport, id cards)
*CheckDocumentApi* | [**checkDocumentIdentitiesPost**](docs/Api/CheckDocumentApi.md#checkdocumentidentitiespost) | **POST** /check-document/identities | Verify an identity document (passport, id cards)
*FileApi* | [**filesIdDownloadGet**](docs/Api/FileApi.md#filesiddownloadget) | **GET** /files/{id}/download | Download a File
*FileApi* | [**filesIdDuplicatePost**](docs/Api/FileApi.md#filesidduplicatepost) | **POST** /files/{id}/duplicate | Duplicate a File
*FileApi* | [**filesIdGet**](docs/Api/FileApi.md#filesidget) | **GET** /files/{id} | Find a File by ID
*FileApi* | [**filesPost**](docs/Api/FileApi.md#filespost) | **POST** /files | Create a new File
*FileObjectApi* | [**fileObjectsIdDelete**](docs/Api/FileObjectApi.md#fileobjectsiddelete) | **DELETE** /file_objects/{id} | Delete a File Object
*FileObjectApi* | [**fileObjectsIdGet**](docs/Api/FileObjectApi.md#fileobjectsidget) | **GET** /file_objects/{id} | Find a File Object by ID
*FileObjectApi* | [**fileObjectsIdPut**](docs/Api/FileObjectApi.md#fileobjectsidput) | **PUT** /file_objects/{id} | Update a File Object
*FileObjectApi* | [**fileObjectsPost**](docs/Api/FileObjectApi.md#fileobjectspost) | **POST** /file_objects | Create a new File Object
*MembersApi* | [**membersGet**](docs/Api/MembersApi.md#membersget) | **GET** /members | Get all Members
*MembersApi* | [**membersIdDelete**](docs/Api/MembersApi.md#membersiddelete) | **DELETE** /members/{id} | Delete a Member
*MembersApi* | [**membersIdProofGet**](docs/Api/MembersApi.md#membersidproofget) | **GET** /members/{id}/proof | Get a proof file of a Member
*MembersApi* | [**membersIdPut**](docs/Api/MembersApi.md#membersidput) | **PUT** /members/{id} | Edit a Member
*MembersApi* | [**membersPost**](docs/Api/MembersApi.md#memberspost) | **POST** /members | Create a new Member
*OperationsApi* | [**operationsIdGet**](docs/Api/OperationsApi.md#operationsidget) | **GET** /operations/{id} | Find an Operation by ID
*OperationsApi* | [**operationsPost**](docs/Api/OperationsApi.md#operationspost) | **POST** /operations | Create a new Operation
*ProceduresApi* | [**exportProceduresGet**](docs/Api/ProceduresApi.md#exportproceduresget) | **GET** /export/procedures | Export Procedure list
*ProceduresApi* | [**proceduresGet**](docs/Api/ProceduresApi.md#proceduresget) | **GET** /procedures | Get Procedure list
*ProceduresApi* | [**proceduresIdDelete**](docs/Api/ProceduresApi.md#proceduresiddelete) | **DELETE** /procedures/{id} | Delete a Procedure
*ProceduresApi* | [**proceduresIdDuplicatePost**](docs/Api/ProceduresApi.md#proceduresidduplicatepost) | **POST** /procedures/{id}/duplicate | Duplicate a Procedure
*ProceduresApi* | [**proceduresIdGet**](docs/Api/ProceduresApi.md#proceduresidget) | **GET** /procedures/{id} | Find a Procedure by ID
*ProceduresApi* | [**proceduresIdProofGet**](docs/Api/ProceduresApi.md#proceduresidproofget) | **GET** /procedures/{id}/proof | Get a Procedure proof file
*ProceduresApi* | [**proceduresIdPut**](docs/Api/ProceduresApi.md#proceduresidput) | **PUT** /procedures/{id} | Update a Procedure
*ProceduresApi* | [**proceduresIdRemindPost**](docs/Api/ProceduresApi.md#proceduresidremindpost) | **POST** /procedures/{id}/remind | Remind a Procedure
*ProceduresApi* | [**proceduresPost**](docs/Api/ProceduresApi.md#procedurespost) | **POST** /procedures | Create a new Procedure
*ServerStampApi* | [**serverStampsIdGet**](docs/Api/ServerStampApi.md#serverstampsidget) | **GET** /server_stamps/{id} | 
*ServerStampApi* | [**serverStampsPost**](docs/Api/ServerStampApi.md#serverstampspost) | **POST** /server_stamps | 
*SignatureUIApi* | [**signatureUiLabelsGet**](docs/Api/SignatureUIApi.md#signatureuilabelsget) | **GET** /signature_ui_labels | Get Signature UI Labels
*SignatureUIApi* | [**signatureUiLabelsIdDelete**](docs/Api/SignatureUIApi.md#signatureuilabelsiddelete) | **DELETE** /signature_ui_labels/{id} | Delete a Signature UI Label
*SignatureUIApi* | [**signatureUiLabelsIdGet**](docs/Api/SignatureUIApi.md#signatureuilabelsidget) | **GET** /signature_ui_labels/{id} | Find a Signature UI Label by ID
*SignatureUIApi* | [**signatureUiLabelsIdPut**](docs/Api/SignatureUIApi.md#signatureuilabelsidput) | **PUT** /signature_ui_labels/{id} | Update a Signature UI Label
*SignatureUIApi* | [**signatureUiLabelsPost**](docs/Api/SignatureUIApi.md#signatureuilabelspost) | **POST** /signature_ui_labels | Create a new Signature UI Label
*SignatureUIApi* | [**signatureUisGet**](docs/Api/SignatureUIApi.md#signatureuisget) | **GET** /signature_uis | Get Signature UI list
*SignatureUIApi* | [**signatureUisIdDelete**](docs/Api/SignatureUIApi.md#signatureuisiddelete) | **DELETE** /signature_uis/{id} | Delete a Signature UI
*SignatureUIApi* | [**signatureUisIdGet**](docs/Api/SignatureUIApi.md#signatureuisidget) | **GET** /signature_uis/{id} | Find a Signature UI by ID
*SignatureUIApi* | [**signatureUisIdPut**](docs/Api/SignatureUIApi.md#signatureuisidput) | **PUT** /signature_uis/{id} | Update a Signature UI
*SignatureUIApi* | [**signatureUisPost**](docs/Api/SignatureUIApi.md#signatureuispost) | **POST** /signature_uis | Create a new Signature UI
*UserApi* | [**usersGet**](docs/Api/UserApi.md#usersget) | **GET** /users | List all Users
*UserApi* | [**usersIdDelete**](docs/Api/UserApi.md#usersiddelete) | **DELETE** /users/{id} | Delete a User
*UserApi* | [**usersIdGet**](docs/Api/UserApi.md#usersidget) | **GET** /users/{id} | Find a User by ID
*UserApi* | [**usersIdPut**](docs/Api/UserApi.md#usersidput) | **PUT** /users/{id} | Update a User
*UserApi* | [**usersPost**](docs/Api/UserApi.md#userspost) | **POST** /users | Create a new User on Yousign application
*UserGroupApi* | [**userGroupsGet**](docs/Api/UserGroupApi.md#usergroupsget) | **GET** /user_groups | Get User Group list
*UserGroupApi* | [**userGroupsIdGet**](docs/Api/UserGroupApi.md#usergroupsidget) | **GET** /user_groups/{id} | Find a User Group by ID


## Documentation For Models

 - [AuthenticationEmailOutput](docs/Model/AuthenticationEmailOutput.md)
 - [AuthenticationInweboOutput](docs/Model/AuthenticationInweboOutput.md)
 - [AuthenticationSmsOutput](docs/Model/AuthenticationSmsOutput.md)
 - [Body](docs/Model/Body.md)
 - [Body1](docs/Model/Body1.md)
 - [Body2](docs/Model/Body2.md)
 - [Body3](docs/Model/Body3.md)
 - [CheckDocumentBankAccountsInput](docs/Model/CheckDocumentBankAccountsInput.md)
 - [CheckDocumentBankAccountsOutput](docs/Model/CheckDocumentBankAccountsOutput.md)
 - [CheckDocumentIdentitiesInput](docs/Model/CheckDocumentIdentitiesInput.md)
 - [CheckDocumentIdentitiesOutput](docs/Model/CheckDocumentIdentitiesOutput.md)
 - [Company](docs/Model/Company.md)
 - [CompanyConfig](docs/Model/CompanyConfig.md)
 - [ConfigEmailTemplate](docs/Model/ConfigEmailTemplate.md)
 - [ConfigWebhookTemplate](docs/Model/ConfigWebhookTemplate.md)
 - [FileInput](docs/Model/FileInput.md)
 - [FileObjectInput](docs/Model/FileObjectInput.md)
 - [FileObjectInputWithoutFileReference](docs/Model/FileObjectInputWithoutFileReference.md)
 - [FileObjectOutput](docs/Model/FileObjectOutput.md)
 - [FileObjectOutputWithoutFileReference](docs/Model/FileObjectOutputWithoutFileReference.md)
 - [FileOutput](docs/Model/FileOutput.md)
 - [InlineResponse400](docs/Model/InlineResponse400.md)
 - [InweboUserRequest](docs/Model/InweboUserRequest.md)
 - [MemberInput](docs/Model/MemberInput.md)
 - [MemberOutput](docs/Model/MemberOutput.md)
 - [ModeSmsConfiguration](docs/Model/ModeSmsConfiguration.md)
 - [OperationOutput](docs/Model/OperationOutput.md)
 - [ProcedureConfig](docs/Model/ProcedureConfig.md)
 - [ProcedureConfigEmail](docs/Model/ProcedureConfigEmail.md)
 - [ProcedureConfigReminder](docs/Model/ProcedureConfigReminder.md)
 - [ProcedureConfigReminderConfig](docs/Model/ProcedureConfigReminderConfig.md)
 - [ProcedureConfigReminderConfigEmail](docs/Model/ProcedureConfigReminderConfigEmail.md)
 - [ProcedureConfigWebhook](docs/Model/ProcedureConfigWebhook.md)
 - [ProcedureDuplicateInput](docs/Model/ProcedureDuplicateInput.md)
 - [ProcedureInput](docs/Model/ProcedureInput.md)
 - [ProcedureOutput](docs/Model/ProcedureOutput.md)
 - [ProcedureRemindConfig](docs/Model/ProcedureRemindConfig.md)
 - [ProcedureRemindConfigEmail](docs/Model/ProcedureRemindConfigEmail.md)
 - [ProcedureRemindInput](docs/Model/ProcedureRemindInput.md)
 - [ServerStampConfig](docs/Model/ServerStampConfig.md)
 - [ServerStampConfigWebhook](docs/Model/ServerStampConfigWebhook.md)
 - [ServerStampInput](docs/Model/ServerStampInput.md)
 - [ServerStampOutput](docs/Model/ServerStampOutput.md)
 - [SignatureUiInput](docs/Model/SignatureUiInput.md)
 - [SignatureUiInputRedirectCancel](docs/Model/SignatureUiInputRedirectCancel.md)
 - [SignatureUiInputRedirectError](docs/Model/SignatureUiInputRedirectError.md)
 - [SignatureUiInputRedirectSuccess](docs/Model/SignatureUiInputRedirectSuccess.md)
 - [SignatureUiInputUpdate](docs/Model/SignatureUiInputUpdate.md)
 - [SignatureUiLabelInput](docs/Model/SignatureUiLabelInput.md)
 - [SignatureUiLabelInputIncluded](docs/Model/SignatureUiLabelInputIncluded.md)
 - [SignatureUiLabelOutput](docs/Model/SignatureUiLabelOutput.md)
 - [SignatureUiOutput](docs/Model/SignatureUiOutput.md)
 - [SignatureUiOutputRedirectCancel](docs/Model/SignatureUiOutputRedirectCancel.md)
 - [SignatureUiOutputRedirectError](docs/Model/SignatureUiOutputRedirectError.md)
 - [SignatureUiOutputRedirectSuccess](docs/Model/SignatureUiOutputRedirectSuccess.md)
 - [UserGroup](docs/Model/UserGroup.md)
 - [UserInput](docs/Model/UserInput.md)
 - [UserOutput](docs/Model/UserOutput.md)
 - [UserUpdateInput](docs/Model/UserUpdateInput.md)


## Documentation For Authorization


## ApiKey

- **Type**: API key
- **API key parameter name**: Authorization
- **Location**: HTTP header


## Author

support@yousign.fr


