# YouSign\Client\UserGroupApi

All URIs are relative to *https://api.yousign.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**userGroupsGet**](UserGroupApi.md#userGroupsGet) | **GET** /user_groups | Get User Group list
[**userGroupsIdGet**](UserGroupApi.md#userGroupsIdGet) | **GET** /user_groups/{id} | Find a User Group by ID


# **userGroupsGet**
> \YouSign\Client\Model\UserGroup[] userGroupsGet($authorization)

Get User Group list

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new YouSign\Client\Api\UserGroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "\"Bearer {{access_token}}\""; // string | Authentication credentials for HTTP authentication

try {
    $result = $apiInstance->userGroupsGet($authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserGroupApi->userGroupsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Authentication credentials for HTTP authentication |

### Return type

[**\YouSign\Client\Model\UserGroup[]**](../Model/UserGroup.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **userGroupsIdGet**
> \YouSign\Client\Model\UserGroup userGroupsIdGet($id, $authorization)

Find a User Group by ID

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new YouSign\Client\Api\UserGroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 
$authorization = "\"Bearer {{access_token}}\""; // string | Authentication credentials for HTTP authentication

try {
    $result = $apiInstance->userGroupsIdGet($id, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserGroupApi->userGroupsIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **authorization** | **string**| Authentication credentials for HTTP authentication |

### Return type

[**\YouSign\Client\Model\UserGroup**](../Model/UserGroup.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

