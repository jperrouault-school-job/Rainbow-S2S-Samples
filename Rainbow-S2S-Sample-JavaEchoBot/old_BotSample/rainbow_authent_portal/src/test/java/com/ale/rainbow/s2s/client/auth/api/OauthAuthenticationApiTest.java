/*
 * Rainbow authentication portal
 * # Rainbow authentication portal API guide  ## Preamble  [Download Postman collection][0]  ### Introduction  This guide describes list of API services that are provided by OT Rainbow authentication portal system. Services are used to manage OT Rainbow authentication.  ### Protocol  REST interface is used for sending/receiving OT rainbow API messages.   HTTP request GET is used. Standard HTTP responses are used to provide requested information or error status. There is no session notion in OT Rainbow system, so requests could be issued according stateless model, without transport conservation between them.   JSON is used as a main format for data encoding in message body part. Each request is started with the following pattern /{module}/{version}/ where {module} is a portal module name to address and {version} is a version of used API, par example, “v1.0”.  ### Security considerations  Each request should contain some credential information to authenticate itself. Standard HTTP authentication with basic/bearer modes is used. JSON Web Token mechanism is used to provide authentication information. JWT has a expire timeout that is controlled by OT Rainbow portal to prevent very long token usage. Also authentication with application token is used. The token must be provided in the request HTTP header, using a custom header: APIKey. At server side, token is verified, and if it doesn’t match, 403 Not Allowed response is sent. TLS is used as a transport protocol to support message exchanges between OT Rainbow portal and an application.    [0]: AuthenticationPortalServer_postman.json
 *
 * The version of the OpenAPI document: 1.104.0
 * 
 *
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */


package com.ale.rainbow.s2s.client.auth.api;

import com.ale.rainbow.s2s.client.auth.ApiException;
import com.ale.rainbow.s2s.client.auth.models.OAuthAuthorizeSuccess;
import com.ale.rainbow.s2s.client.auth.models.OAuthToken;
import com.ale.rainbow.s2s.client.auth.models.OAuthTokenSuccess;
import org.junit.Test;
import org.junit.Ignore;

import java.util.ArrayList;
import java.util.HashMap;
import java.util.List;
import java.util.Map;

/**
 * API tests for OauthAuthenticationApi
 */
@Ignore
public class OauthAuthenticationApiTest {

    private final OauthAuthenticationApi api = new OauthAuthenticationApi();

    
    /**
     * 1 - OAuth Authorization Request
     *
     * This endpoints allows applications to get authorization from Rainbow users to use Rainbow APIs with their account. This delegation of access can be performed using OAuth 2.0 **Authorization code** grant or **Implicit** grant.  While both OAuth 2.0 Authorization Code grant and Implicit grant are supported by Rainbow, Authorization Code grant is **recommended** as it is more secure.  Implicit grant is recommended for browser applications implemented in JavaScript that can&#39;t provide a backend server handling the token exchange flow of OAuth Authorization Code grant. Indeed, such applications should not embed appSecret in their source code for security reasons, and Implicit grant allow them to retrieve the OAuth access token without sending the appSecret to Rainbow server (redirect_uri is the only security available with this flow). The limitation of implicit grant is that only an access token is returned, which has a limited lifetime and can&#39;t be renewed. Application has to execute again the whole Implicit grant flow to retrieve a new access token.  To enable Implicit grant for an application, the application&#39;s setting &#x60;enableOAuthImplicitGrant&#x60; has to be set to true (it is disabled by default).  For more information, see the OAuth 2.0 RFC related to authorization endpoint: - &lt;a href&#x3D;\&quot;https://tools.ietf.org/html/rfc6749#section-4.1.1\&quot;&gt;section 4.1.1&lt;/a&gt; for Authorization Code grant, - &lt;a href&#x3D;\&quot;https://tools.ietf.org/html/rfc6749#section-4.2.1\&quot;&gt;section 4.2.1&lt;/a&gt; for Implicit grant.  Note that Rainbow applications are named **client** in OAuth 2.0 RFC.   ### 1. Authorize request for Authorization code grant   The OAuth **Authorization Code** Grant flow is detailed in the following sequence diagram.  This GET /api/rainbow/authentication/v1.0/oauth/authorize endpoint addresses points 1 to 7 of this diagram for Authorization code grant flow (points 8 to 9 are addressed by POST /api/rainbow/authentication/v1.0/oauth/token endpoint, see related &lt;a href&#x3D;\&quot;#api-OAuth_Authentication-OAuthToken\&quot;&gt;documentation&lt;/a&gt;). ![Failed to load diagram :-(](img/oauth_authorization_code_flow_sd.png \&quot;OAuth Authorization Code Grant sequence diagram\&quot;)  Details about the sequence diagram: - (1) User is on application website - (1) User accesses to application content that needs data from Rainbow, or application allows to login with Rainbow,    … (use case depends of the application needs) - (2) Application redirects to OAuth authorize endpoint on Rainbow authentication server.       Some query string parameters are provided in the query (defined by &lt;a href&#x3D;\&quot;https://tools.ietf.org/html/rfc6749#section-4.1.1\&quot;&gt;OAuth 2.0 RFC&lt;/a&gt;):      - &#x60;response_type&#x60;: \&quot;**code**\&quot; for requesting an authorization code (authorization code grant)      - &#x60;client_id&#x60;: the application identifier (appId)      - &#x60;redirect_uri&#x60;: application\\&#39;s backend endpoint where the authorization code will be sent.        &lt;br/&gt; It has to use TLS for security reasons, as the authorization code is exchanged between Rainbow and the application\\&#39;s backend through the browser.      - &#x60;scope&#x60;: scope of the access requested by the application.        &lt;br/&gt; Currently, only \&quot;all\&quot; is supported (meaning that the application will have full access on all the Rainbow APIs).        &lt;br/&gt; In a next step, scopes will be defined so that the application can request restricted scopes (filestorage, bubble management, channels, …)      - &#x60;state&#x60;: a \&quot;random\&quot; value sent by the client to maintain a state between the request and the callback.        Can be used to protect against cross-site request forgery attacks (CSRF). - (3) Rainbow authentication server checks that the &#x60;client_id&#x60; sent in query parameter in (2) corresponds to a valid application in the database.      - If so, Rainbow authentication server redirects user\\&#39;s browser to Rainbow login page      - Otherwise, an error is returned (if redirect_uri is provided, user\\&#39;s browser is redirected to this uri and the error is sent in query parameters) - (4) User enters his credentials on login page and submit the form. Rainbow authentication server checks in the database if user credentials are valid.      - (5) If so, Rainbow authentication server redirects user\\&#39;s browser to consent page      - Otherwise, Rainbow authentication server redirects again user\\&#39;s browser to login page with an error which is displayed for the user - (6) User authorize the application to access Rainbow APIs in his name. The form is submitted on Rainbow authentication server.      - (7) If the user authorized, Rainbow authentication server generates an authorization code and redirects user\\&#39;s browser to application backend\\&#39;s &#x60;redirect_uri&#x60; (the one provided in query parameters in (2)).       Note that &#x60;redirect_uri&#x60; must be one of the configured &#x60;oauthRedirectUris&#x60; in the application, otherwise an error is returned.       The following data are returned in query parameters of the redirection uri (defined by &lt;a href&#x3D;\&quot;https://tools.ietf.org/html/rfc6749#section-4.1.2\&quot;&gt;OAuth 2.0 RFC&lt;/a&gt;):       - &#x60;code&#x60;: the authorization code that can be exchanged against an access token and a refresh token using &lt;a href&#x3D;\&quot;#api-OAuth_Authentication-OAuthToken\&quot;&gt;token endpoint&lt;/a&gt;.            Authorization code has a short lifetime (10 minutes) and can only be used once.       - &#x60;state&#x60;: if state was provided in (2), this value is returned (otherwise a random value is returned).      - If the user declined, Rainbow authentication server redirects user\\&#39;s browser to application backend\\&#39;s &#x60;redirect_uri&#x60; with an error in query parameters.  Once the application has the authorization code, it has to exchange it against an access token and a refresh token using POST /api/rainbow/authentication/v1.0/oauth/token endpoint, points 8 and 9 of the sequence diagram (see &lt;a href&#x3D;\&quot;#api-OAuth_Authentication-OAuthToken\&quot;&gt;documentation&lt;/a&gt; of this endpoint for more information).  ### 2. Authorize request for Implicit grant  The OAuth **Implicit** Grant flow is detailed in the following sequence diagram.  Unlike Authorization Code grant flow, this GET /api/rainbow/authentication/v1.0/oauth/authorize endpoint is the only one to be used by the application to retrieve the OAuth access token.  ![Failed to load diagram :-(](img/oauth_implicit_flow_sd.png \&quot;OAuth Implicit Grant sequence diagram\&quot;)  Details about the sequence diagram: - (1) User uses the web application on his browser - (1) User accesses to web application content that needs data from Rainbow, or web application allows to login with Rainbow, … (use case depends of the application needs) - (2) Application redirects to OAuth authorize endpoint on Rainbow authentication server.       Some query string parameters are provided in the query (defined by &lt;a href&#x3D;\&quot;https://tools.ietf.org/html/rfc6749#section-4.2.1\&quot;&gt;OAuth 2.0 RFC&lt;/a&gt;):      - &#x60;response_type&#x60;: \&quot;**token**\&quot; for requesting an access token (implicit grant)      - &#x60;client_id&#x60;: the application identifier (appId)      - &#x60;redirect_uri&#x60;: web application\\&#39;s endpoint where the authorization code will be sent.      - &#x60;scope&#x60;: scope of the access requested by the application.        &lt;br/&gt; Currently, only \&quot;all\&quot; is supported (meaning that the application will have full access on all the Rainbow APIs).        &lt;br/&gt; In a next step, scopes will be defined so that the application can request restricted scopes (filestorage, bubble management, channels, …)      - &#x60;state&#x60;: a \&quot;random\&quot; value sent by the client to maintain a state between the request and the callback.        Can be used to protect against cross-site request forgery attacks (CSRF). - (3) Rainbow authentication server checks that the &#x60;client_id&#x60; sent in query parameter in (2) corresponds to a valid application in the database.      - If so, Rainbow authentication server redirects user\\&#39;s browser to Rainbow login page      - Otherwise, an error is returned (if redirect_uri is provided, user\\&#39;s browser is redirected to this uri and the error is sent in fragment component of        this redirection uri) - (4) User enters his credentials on login page and submit the form. Rainbow authentication server checks in the database if user credentials are valid.      - (5) If so, Rainbow authentication server redirects user\\&#39;s browser to consent page      - Otherwise, Rainbow authentication server redirects again user\\&#39;s browser to login page with an error which is displayed for the user - (6) User authorize the application to access Rainbow APIs in his name. The form is submitted on Rainbow authentication server.      - (7) If the user authorized, Rainbow authentication server generates an access token and redirects user\\&#39;s browser to web application\\&#39;s &#x60;redirect_uri&#x60; (the one provided in query parameters in (2)).      Note that &#x60;redirect_uri&#x60; must be one of the configured &#x60;oauthRedirectUris&#x60; in the application, otherwise an error is returned.         The following data are returned in **fragment** component of the redirection uri (defined by &lt;a href&#x3D;\&quot;https://tools.ietf.org/html/rfc6749#section-4.2.2\&quot;&gt;OAuth 2.0 RFC&lt;/a&gt;):          - &#x60;access_token&#x60;: the access token that can be used by the application to use Rainbow APIs,          - &#x60;token_type&#x60;: the type of token returned (\&quot;**access_token**\&quot;),          - &#x60;expires_in&#x60;: the lifetime of the access token (in seconds),          - &#x60;state&#x60;: if state was provided in (2), this value is returned (otherwise a random value is returned).      - If the user declined, Rainbow authentication server redirects user\\&#39;s browser to application\\&#39;s &#x60;redirect_uri&#x60; with an error in fragment component.  &gt; Once the application has the access token, it can use it to use Rainbow APIs with the account of the related Rainbow user.
     *
     * @throws ApiException
     *          if the Api call fails
     */
    @Test
    public void oAuthAuthorizeTest() throws ApiException {
        String contentType = null;
        String responseType = null;
        String clientId = null;
        String redirectUri = null;
        String scope = null;
        String state = null;
        OAuthAuthorizeSuccess response = api.oAuthAuthorize(contentType, responseType, clientId, redirectUri, scope, state);

        // TODO: test validations
    }
    
    /**
     * 2 - OAuth Access Token Request
     *
     * This endpoints allows applications to get an access token allowing them to use Rainbow APIs with the account of the related Rainbow user.  Access token has a short lifetime (1 hour). A refresh token is issued as well, allowing applications to refresh their access token (and such avoiding the application to request user authorization again with GET /api/rainbow/authentication/v1.0/oauth/authorize).  The token endpoint can be used: 1. To exchange the authorization code against an access token and a refresh token, 2. To get a new access token using the refresh token (to be used when the access token has expired).   ## 1. Exchange the authorization code against an access token and a refresh token  For more information, see the &lt;a href&#x3D;\&quot;https://tools.ietf.org/html/rfc6749#section-4.1.3\&quot;&gt;OAuth 2.0 RFC, section 4.1.3&lt;/a&gt; related to the use of this endpoint to exchange the authorization code against an access token and a refresh token.  The OAuth Access Token Request flow is detailed in the following sequence diagram.  This POST /api/rainbow/authentication/v1.0/oauth/token endpoint addresses points 8 to 9 of this diagram (points 1 to 7 are addressed by GET /api/rainbow/authentication/v1.0/oauth/authorize endpoint, see related &lt;a href&#x3D;\&quot;#api-OAuth_Authentication-OAuthAuthorize\&quot;&gt;documentation&lt;/a&gt;). ![Failed to load diagram :-(](img/oauth_authorization_code_flow_sd.png \&quot;OAuth Authorization Code Grant sequence diagram\&quot;)  Details about the sequence diagram: - (8) application\\&#39;s backend exchanges the authorization code it retrieved in (7) against an access token and a refresh token.    For that, it calls the OAuth token endpoint on Rainbow authentication server. It has to provide:     - The header Authorization with Basic &amp;lt;base64encode(&#x60;client_id&#x60;:&#x60;client_secret&#x60;)&amp;gt;.      This request has to be done from the application&#39;&#39;s backend so that the client_secret (appSecret) remains confidential.      Example of base64 calculation:      &#x60;&#x60;&#x60;      base64(\&quot;78e98ee09bad11e8b8edebb50d679df6:2UrOcs3agk34zaV3Jsf01vM54iLyqwBEpnv5vJr72D9cE5wMVQeEe3BM7IxzyyJD\&quot;) &#x3D;         &lt;i&gt;NzhlOThlZTA5YmFkMTFlOGI4ZWRlYmI1MGQ2NzlkZjY6MlVyT2NzM2FnazM0emFWM0pzZjAxdk01NGlMeXF3QkVwbnY1dkpyNzJEOWNFNXdNVlFlRWUzQk03SXh6eXlKRA&#x3D;&#x3D;&lt;/i&gt;      &#x60;&#x60;&#x60;     - In the body the parameters (x-www-form-urlencoded):   - &#x60;grant_type&#x60;: must be set to \&quot;**authorization_code**\&quot; for an exchange of an authorization code against an access token and a refresh token   - &#x60;code&#x60;: the authorization code sent by Rainbow authentication server in (7)   - &#x60;redirect_uri&#x60;: the redirect_uri parameter, must be the same than the one used to retrieve the authorization code (the one sent in (2)) - (9) Rainbow authentication server checks that the application\\&#39;s credentials are valid by extracting client_id and client_secret from the Authorization header and comparing them to the appId and appSecret stored in the database. Then it checks that the provided authorization code is valid, has well been generated for this application and redirect_uri matches the one sent in (2). Provided authorization code is revoked, as it can only be used once.     - If everything is valid, Rainbow authentication server generates an access token and a refresh token that it stores in the database and returns in the body of       the HTTP response to the application\\&#39;s backend.     - Otherwise, a body with an error message is returned to the application\\&#39;s backend. - (10) With the access token received from the Rainbow authentication server in (9), the application can use it to call Rainbow APIs in the name of the user.    For that, it calls the Rainbow APIs with the header Authorization Bearer &lt;access_token&gt;.   ### 2. Refresh an access token  Access token has a short lifetime (1 hour). If the application tries to use an expired access token for a request on Rainbow API, an error 401 Unauthorized is returned. Access token can be renewed using the refresh token, this avoids the application to redo the whole OAuth authorization code flow.  For more information, see the &lt;a href&#x3D;\&quot;https://tools.ietf.org/html/rfc6749#section-6\&quot;&gt;OAuth 2.0 RFC, section 6&lt;/a&gt; related to the refresh of an access token.  The OAuth Refresh Access Token flow is detailed in the following sequence diagram. ![Failed to load diagram :-(](img/oauth_refresh_token_flow_sd.png \&quot;OAuth Refresh Access Token sequence diagram\&quot;) Details about the sequence diagram: -  (1) User is on application website -  (1) User accesses to application content that needs data from Rainbow (use case depends of the application needs).   The application has already an OAuth access token and a refresh token retrieved using the authorization code grant  described in \&quot;*OAuth Authorization Code Grant sequence diagram*\&quot;. -  (1) Application calls the Rainbow API (whatever the portal is) to access Rainbow user data.    It provides the header &#x60;Authorization: Bearer &amp;lt;access_token&amp;gt;&#x60; in the request. -  (2) Rainbow API portal checks the validity of the access token (existing, not expired). -  (2) If the access token is expired, an error 401 Unauthorized is returned. The application needs to renew the access token. -  (3) [optional, depends of the application implementation] If the application is executed in the browser (JavaScript), it needs to request its backend to get a new access token.   If the request to Rainbow API is already performed in the application\\&#39;s backend, the backend itself can renew the access token. -  (4) Application\\&#39;s backend calls the OAuth token endpoint on Rainbow authentication server. It has to provide:     -  The header Authorization with Basic &amp;lt;base64(&#x60;client_id&#x60;:&#x60;client_secret&#x60;)&amp;gt;.        This request has to be done from the application\\&#39;s backend so that the client_secret (appSecret) remains confidential.     Example of base64 calculation:  &#x60;&#x60;&#x60;  base64(\&quot;78e98ee09bad11e8b8edebb50d679df6:2UrOcs3agk34zaV3Jsf01vM54iLyqwBEpnv5vJr72D9cE5wMVQeEe3BM7IxzyyJD\&quot;) &#x3D;         &lt;i&gt;NzhlOThlZTA5YmFkMTFlOGI4ZWRlYmI1MGQ2NzlkZjY6MlVyT2NzM2FnazM0emFWM0pzZjAxdk01NGlMeXF3QkVwbnY1dkpyNzJEOWNFNXdNVlFlRWUzQk03SXh6eXlKRA&#x3D;&#x3D;&lt;/i&gt;  &#x60;&#x60;&#x60;     -  In the body the parameters (x-www-form-urlencoded)         - &#x60;grant_type&#x60;: must be set to \&quot;**refresh_token**\&quot; to request a new access token using the refresh token         - &#x60;refresh_token&#x60;: the refresh token sent by Rainbow authentication server -  (5) Rainbow authentication server checks that the client credentials are valid by extracting client_id and client_secret from the Authorization header        and comparing them to the appId and appSecret stored in the database.        Then it checks that the provided refresh token is valid, not expired, and has well been generated for this application.     -  If everything is valid, Rainbow authentication server generates a new access token and a new refresh token        and return them in the body of the HTTP response to the application\\&#39;s backend.     -  Otherwise, a body with an error message is returned to the application\\&#39;s backend. -  (6) The application updates its access token and refresh token in its own storage.        In the case the applicationD is running in the browser, the backend returns the new access token to its frontend. -  (7) The application redo the same API request to Rainbow portal done in (1), with the newly generated access token. -  (8) Rainbow API portal checks the validity of the access token. As the access token is now valid,        the Rainbow API performs the requested operation / returns the requested data.
     *
     * @throws ApiException
     *          if the Api call fails
     */
    @Test
    public void oAuthTokenTest() throws ApiException {
        OAuthToken body = null;
        OAuthTokenSuccess response = api.oAuthToken(body);

        // TODO: test validations
    }
    
}
