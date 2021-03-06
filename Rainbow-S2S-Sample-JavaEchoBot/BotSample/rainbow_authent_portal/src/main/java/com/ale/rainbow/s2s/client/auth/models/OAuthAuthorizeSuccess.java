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


package com.ale.rainbow.s2s.client.auth.models;

import java.util.Objects;
import java.util.Arrays;
import com.google.gson.TypeAdapter;
import com.google.gson.annotations.JsonAdapter;
import com.google.gson.annotations.SerializedName;
import com.google.gson.stream.JsonReader;
import com.google.gson.stream.JsonWriter;
import io.swagger.annotations.ApiModel;
import io.swagger.annotations.ApiModelProperty;
import java.io.IOException;
import java.math.BigDecimal;
import java.io.Serializable;

/**
 * OAuthAuthorizeSuccess
 */
@javax.annotation.Generated(value = "org.openapitools.codegen.languages.JavaClientCodegen", date = "2020-03-13T09:48:07.123237+01:00[Europe/Paris]")
public class OAuthAuthorizeSuccess implements Serializable {
  private static final long serialVersionUID = 1L;

  public static final String SERIALIZED_NAME_ACCESS_TOKEN = "access_token";
  @SerializedName(SERIALIZED_NAME_ACCESS_TOKEN)
  private String accessToken;

  public static final String SERIALIZED_NAME_CODE = "code";
  @SerializedName(SERIALIZED_NAME_CODE)
  private String code;

  public static final String SERIALIZED_NAME_EXPIRES_IN = "expires_in";
  @SerializedName(SERIALIZED_NAME_EXPIRES_IN)
  private BigDecimal expiresIn;

  public static final String SERIALIZED_NAME_STATE = "state";
  @SerializedName(SERIALIZED_NAME_STATE)
  private String state;

  public static final String SERIALIZED_NAME_TOKEN_TYPE = "token_type";
  @SerializedName(SERIALIZED_NAME_TOKEN_TYPE)
  private String tokenType;


  public OAuthAuthorizeSuccess accessToken(String accessToken) {
    
    this.accessToken = accessToken;
    return this;
  }

   /**
   * The access token generated by Rainbow authentication server. &lt;br/&gt; Only returned if &#x60;&#x60;&#x60;Implicit&#x60;&#x60;&#x60; grant is used. &lt;br/&gt; &lt;br/&gt; The access token can be used by the application to use Rainbow APIs.
   * @return accessToken
  **/
  @javax.annotation.Nullable
  @ApiModelProperty(value = "The access token generated by Rainbow authentication server. <br/> Only returned if ```Implicit``` grant is used. <br/> <br/> The access token can be used by the application to use Rainbow APIs.")

  public String getAccessToken() {
    return accessToken;
  }


  public void setAccessToken(String accessToken) {
    this.accessToken = accessToken;
  }


  public OAuthAuthorizeSuccess code(String code) {
    
    this.code = code;
    return this;
  }

   /**
   * The authorization code generated by Rainbow authentication server. &lt;br/&gt; Only returned if &#x60;&#x60;&#x60;Authorization Code&#x60;&#x60;&#x60; grant is used.
   * @return code
  **/
  @ApiModelProperty(required = true, value = "The authorization code generated by Rainbow authentication server. <br/> Only returned if ```Authorization Code``` grant is used.")

  public String getCode() {
    return code;
  }


  public void setCode(String code) {
    this.code = code;
  }


  public OAuthAuthorizeSuccess expiresIn(BigDecimal expiresIn) {
    
    this.expiresIn = expiresIn;
    return this;
  }

   /**
   * Lifetime in seconds of the access token. &lt;br/&gt; Only returned if &#x60;&#x60;&#x60;Implicit&#x60;&#x60;&#x60; grant is used. &lt;br/&gt; &lt;br/&gt; Once the access token has expired, the application can no longer use it to use Rainbow APIs (it has to request again user authorization with Implicit grant to retrieve a new access token)
   * @return expiresIn
  **/
  @javax.annotation.Nullable
  @ApiModelProperty(value = "Lifetime in seconds of the access token. <br/> Only returned if ```Implicit``` grant is used. <br/> <br/> Once the access token has expired, the application can no longer use it to use Rainbow APIs (it has to request again user authorization with Implicit grant to retrieve a new access token)")

  public BigDecimal getExpiresIn() {
    return expiresIn;
  }


  public void setExpiresIn(BigDecimal expiresIn) {
    this.expiresIn = expiresIn;
  }


  public OAuthAuthorizeSuccess state(String state) {
    
    this.state = state;
    return this;
  }

   /**
   * The state provided by the application to GET /api/rainbow/authentication/v1.0/oauth/authorize endpoint. &lt;br/&gt; Only returned if &#x60;&#x60;&#x60;Authorization Code&#x60;&#x60;&#x60; grant is used. &lt;br/&gt; &lt;br/&gt; To be exchanged against an access token and a refresh token using /oauth/token endpoint (see related &lt;a href&#x3D;\&quot;#api-OAuth_Authentication-OAuthToken\&quot;&gt;documentation&lt;/a&gt;). &lt;br/&gt; Authorization code lifetime is 10 minutes and it can be used only once.
   * @return state
  **/
  @ApiModelProperty(required = true, value = "The state provided by the application to GET /api/rainbow/authentication/v1.0/oauth/authorize endpoint. <br/> Only returned if ```Authorization Code``` grant is used. <br/> <br/> To be exchanged against an access token and a refresh token using /oauth/token endpoint (see related <a href=\"#api-OAuth_Authentication-OAuthToken\">documentation</a>). <br/> Authorization code lifetime is 10 minutes and it can be used only once.")

  public String getState() {
    return state;
  }


  public void setState(String state) {
    this.state = state;
  }


  public OAuthAuthorizeSuccess tokenType(String tokenType) {
    
    this.tokenType = tokenType;
    return this;
  }

   /**
   * Type of the token returned by Rainbow authentication server. &lt;br/&gt; Only returned if &#x60;&#x60;&#x60;Implicit&#x60;&#x60;&#x60; grant is used. &lt;br/&gt; &lt;br/&gt; It will always be \&quot;access_token\&quot; for Implicit grant. (it has to request again user authorization with Implicit grant to retrieve a new access token)
   * @return tokenType
  **/
  @javax.annotation.Nullable
  @ApiModelProperty(value = "Type of the token returned by Rainbow authentication server. <br/> Only returned if ```Implicit``` grant is used. <br/> <br/> It will always be \"access_token\" for Implicit grant. (it has to request again user authorization with Implicit grant to retrieve a new access token)")

  public String getTokenType() {
    return tokenType;
  }


  public void setTokenType(String tokenType) {
    this.tokenType = tokenType;
  }


  @Override
  public boolean equals(java.lang.Object o) {
    if (this == o) {
      return true;
    }
    if (o == null || getClass() != o.getClass()) {
      return false;
    }
    OAuthAuthorizeSuccess oauthAuthorizeSuccess = (OAuthAuthorizeSuccess) o;
    return Objects.equals(this.accessToken, oauthAuthorizeSuccess.accessToken) &&
        Objects.equals(this.code, oauthAuthorizeSuccess.code) &&
        Objects.equals(this.expiresIn, oauthAuthorizeSuccess.expiresIn) &&
        Objects.equals(this.state, oauthAuthorizeSuccess.state) &&
        Objects.equals(this.tokenType, oauthAuthorizeSuccess.tokenType);
  }

  @Override
  public int hashCode() {
    return Objects.hash(accessToken, code, expiresIn, state, tokenType);
  }


  @Override
  public String toString() {
    StringBuilder sb = new StringBuilder();
    sb.append("class OAuthAuthorizeSuccess {\n");
    sb.append("    accessToken: ").append(toIndentedString(accessToken)).append("\n");
    sb.append("    code: ").append(toIndentedString(code)).append("\n");
    sb.append("    expiresIn: ").append(toIndentedString(expiresIn)).append("\n");
    sb.append("    state: ").append(toIndentedString(state)).append("\n");
    sb.append("    tokenType: ").append(toIndentedString(tokenType)).append("\n");
    sb.append("}");
    return sb.toString();
  }

  /**
   * Convert the given object to string with each line indented by 4 spaces
   * (except the first line).
   */
  private String toIndentedString(java.lang.Object o) {
    if (o == null) {
      return "null";
    }
    return o.toString().replace("\n", "\n    ");
  }

}

