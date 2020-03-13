# # OAuthTokenSuccess

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**access_token** | **string** | The access token generated by Rainbow authentication server. &lt;br/&gt; To be used to call Rainbow APIs (header Authorization: Bearer &lt;access_token&gt;, see related Rainbow API documentation). &lt;br/&gt; &lt;br/&gt; For more information, details are available in the &lt;a href&#x3D;\&quot;https://tools.ietf.org/html/rfc6749#section-5.1\&quot;&gt;OAuth 2.0 RFC, section 5.1&lt;/a&gt;. | 
**expires_in** | **string** | The access token lifetime. &lt;br/&gt; &lt;br/&gt; For more information, details are available in the &lt;a href&#x3D;\&quot;https://tools.ietf.org/html/rfc6749#section-5.1\&quot;&gt;OAuth 2.0 RFC, section 5.1&lt;/a&gt;. | 
**refresh_token** | **string** | The refresh token generated by Rainbow authentication server. &lt;br/&gt; To be used to refresh an access token using this POST /api/rainbow/authentication/v1.0/oauth/token endpoint. &lt;br/&gt; Generated refresh_token has a lifetime of 90 days. &lt;br/&gt; Note that a new refresh token is generated during \&quot;&lt;b&gt;Refresh an Access Token&lt;/b&gt;\&quot; flow, overwriting the one used to refresh the access token       (this previous one is revoked). This new refresh token is regenerated with a lifetime of 90 days.       Therefore, as long as the application refreshes its access token during the refresh token lifetime period,       it can continue to use Rainbow APIs without redoing the whole OAuth authorization code flow. &lt;br/&gt; &lt;br/&gt; For more information, details are available in the &lt;a href&#x3D;\&quot;https://tools.ietf.org/html/rfc6749#section-5.1\&quot;&gt;OAuth 2.0 RFC, section 5.1&lt;/a&gt;. | 
**token_type** | **string** | The type of the access token issued. &lt;br/&gt; Should always be &lt;strong&gt;Bearer&lt;/strong&gt; for access tokens generated by Rainbow authentication server. &lt;br/&gt; &lt;br/&gt; For more information, details are available in the &lt;a href&#x3D;\&quot;https://tools.ietf.org/html/rfc6749#section-5.1\&quot;&gt;OAuth 2.0 RFC, section 5.1&lt;/a&gt;. | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

