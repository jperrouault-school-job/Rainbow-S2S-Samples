# AuthenticationUrlsApi

All URIs are relative to *http://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getLoginUrl**](AuthenticationUrlsApi.md#getLoginUrl) | **GET** /api/rainbow/authentication/v1.0/urls | Get user authentication URLs


<a name="getLoginUrl"></a>
# **getLoginUrl**
> GetLoginUrlSuccess getLoginUrl(uid)

Get user authentication URLs

This API allows Rainbow users to know that URL they can use to perform a login.

### Example
```java
// Import classes:
import com.ale.rainbow.s2s.client.auth.ApiClient;
import com.ale.rainbow.s2s.client.auth.ApiException;
import com.ale.rainbow.s2s.client.auth.Configuration;
import com.ale.rainbow.s2s.client.auth.models.*;
import com.ale.rainbow.s2s.client.auth.api.AuthenticationUrlsApi;

public class Example {
  public static void main(String[] args) {
    ApiClient defaultClient = Configuration.getDefaultApiClient();
    defaultClient.setBasePath("http://localhost");

    AuthenticationUrlsApi apiInstance = new AuthenticationUrlsApi(defaultClient);
    String uid = "uid_example"; // String | Rainbow user unique identifier: typically his login email
    try {
      GetLoginUrlSuccess result = apiInstance.getLoginUrl(uid);
      System.out.println(result);
    } catch (ApiException e) {
      System.err.println("Exception when calling AuthenticationUrlsApi#getLoginUrl");
      System.err.println("Status code: " + e.getCode());
      System.err.println("Reason: " + e.getResponseBody());
      System.err.println("Response headers: " + e.getResponseHeaders());
      e.printStackTrace();
    }
  }
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **uid** | **String**| Rainbow user unique identifier: typically his login email |

### Return type

[**GetLoginUrlSuccess**](GetLoginUrlSuccess.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

### HTTP response details
| Status code | Description | Response headers |
|-------------|-------------|------------------|
**200** | successful operation |  -  |
**400** | Bad request |  -  |
**500** | Server error |  -  |

