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
import java.io.Serializable;

/**
 * GetJwtSuccessPhoneNumbers
 */
@javax.annotation.Generated(value = "org.openapitools.codegen.languages.JavaClientCodegen", date = "2020-02-17T17:33:57.957423+01:00[Europe/Paris]")
public class GetJwtSuccessPhoneNumbers implements Serializable {
  private static final long serialVersionUID = 1L;

  public static final String SERIALIZED_NAME_DEVICE_TYPE = "deviceType";
  @SerializedName(SERIALIZED_NAME_DEVICE_TYPE)
  private String deviceType;

  public static final String SERIALIZED_NAME_INTERNAL_NUMBER = "internalNumber";
  @SerializedName(SERIALIZED_NAME_INTERNAL_NUMBER)
  private String internalNumber;

  public static final String SERIALIZED_NAME_IS_FROM_SYSTEM = "isFromSystem";
  @SerializedName(SERIALIZED_NAME_IS_FROM_SYSTEM)
  private Boolean isFromSystem;

  public static final String SERIALIZED_NAME_NUMBER = "number";
  @SerializedName(SERIALIZED_NAME_NUMBER)
  private String number;

  public static final String SERIALIZED_NAME_NUMBER_E164 = "numberE164";
  @SerializedName(SERIALIZED_NAME_NUMBER_E164)
  private String numberE164;

  public static final String SERIALIZED_NAME_PBX_ID = "pbxId";
  @SerializedName(SERIALIZED_NAME_PBX_ID)
  private String pbxId;

  public static final String SERIALIZED_NAME_PHONE_NUMBER_ID = "phoneNumberId";
  @SerializedName(SERIALIZED_NAME_PHONE_NUMBER_ID)
  private String phoneNumberId;

  public static final String SERIALIZED_NAME_SHORT_NUMBER = "shortNumber";
  @SerializedName(SERIALIZED_NAME_SHORT_NUMBER)
  private String shortNumber;

  public static final String SERIALIZED_NAME_SYSTEM_ID = "systemId";
  @SerializedName(SERIALIZED_NAME_SYSTEM_ID)
  private String systemId;

  public static final String SERIALIZED_NAME_TYPE = "type";
  @SerializedName(SERIALIZED_NAME_TYPE)
  private String type;


  public GetJwtSuccessPhoneNumbers deviceType(String deviceType) {
    
    this.deviceType = deviceType;
    return this;
  }

   /**
   * Phone number device type, one of &lt;code&gt;landline&lt;/code&gt;, &lt;code&gt;mobile&lt;/code&gt;, &lt;code&gt;fax&lt;/code&gt;, &lt;code&gt;other&lt;/code&gt;.
   * @return deviceType
  **/
  @ApiModelProperty(required = true, value = "Phone number device type, one of <code>landline</code>, <code>mobile</code>, <code>fax</code>, <code>other</code>.")

  public String getDeviceType() {
    return deviceType;
  }


  public void setDeviceType(String deviceType) {
    this.deviceType = deviceType;
  }


  public GetJwtSuccessPhoneNumbers internalNumber(String internalNumber) {
    
    this.internalNumber = internalNumber;
    return this;
  }

   /**
   * &lt;b&gt;[Only for phone numbers linked to a system (pbx)]&lt;/b&gt; &lt;br/&gt; If phone is linked to a system (pbx), internal phone number. &lt;br/&gt; Usable within a PBX group. &lt;br/&gt; Admins and users can modify this internalNumber field.
   * @return internalNumber
  **/
  @javax.annotation.Nullable
  @ApiModelProperty(value = "<b>[Only for phone numbers linked to a system (pbx)]</b> <br/> If phone is linked to a system (pbx), internal phone number. <br/> Usable within a PBX group. <br/> Admins and users can modify this internalNumber field.")

  public String getInternalNumber() {
    return internalNumber;
  }


  public void setInternalNumber(String internalNumber) {
    this.internalNumber = internalNumber;
  }


  public GetJwtSuccessPhoneNumbers isFromSystem(Boolean isFromSystem) {
    
    this.isFromSystem = isFromSystem;
    return this;
  }

   /**
   * Boolean indicating if phone is linked to a system (pbx).
   * @return isFromSystem
  **/
  @ApiModelProperty(required = true, value = "Boolean indicating if phone is linked to a system (pbx).")

  public Boolean getIsFromSystem() {
    return isFromSystem;
  }


  public void setIsFromSystem(Boolean isFromSystem) {
    this.isFromSystem = isFromSystem;
  }


  public GetJwtSuccessPhoneNumbers number(String number) {
    
    this.number = number;
    return this;
  }

   /**
   * User phone number (as entered by user)
   * @return number
  **/
  @javax.annotation.Nullable
  @ApiModelProperty(value = "User phone number (as entered by user)")

  public String getNumber() {
    return number;
  }


  public void setNumber(String number) {
    this.number = number;
  }


  public GetJwtSuccessPhoneNumbers numberE164(String numberE164) {
    
    this.numberE164 = numberE164;
    return this;
  }

   /**
   * User E.164 phone number, computed by server from &#x60;number&#x60; and &#x60;country&#x60; fields
   * @return numberE164
  **/
  @javax.annotation.Nullable
  @ApiModelProperty(value = "User E.164 phone number, computed by server from `number` and `country` fields")

  public String getNumberE164() {
    return numberE164;
  }


  public void setNumberE164(String numberE164) {
    this.numberE164 = numberE164;
  }


  public GetJwtSuccessPhoneNumbers pbxId(String pbxId) {
    
    this.pbxId = pbxId;
    return this;
  }

   /**
   * &lt;b&gt;[Only for phone numbers linked to a system (pbx)]&lt;/b&gt; &lt;br/&gt; If phone is linked to a system (pbx), unique identifier of that pbx.
   * @return pbxId
  **/
  @javax.annotation.Nullable
  @ApiModelProperty(value = "<b>[Only for phone numbers linked to a system (pbx)]</b> <br/> If phone is linked to a system (pbx), unique identifier of that pbx.")

  public String getPbxId() {
    return pbxId;
  }


  public void setPbxId(String pbxId) {
    this.pbxId = pbxId;
  }


  public GetJwtSuccessPhoneNumbers phoneNumberId(String phoneNumberId) {
    
    this.phoneNumberId = phoneNumberId;
    return this;
  }

   /**
   * Phone number unique id in phone-numbers directory collection.
   * @return phoneNumberId
  **/
  @ApiModelProperty(required = true, value = "Phone number unique id in phone-numbers directory collection.")

  public String getPhoneNumberId() {
    return phoneNumberId;
  }


  public void setPhoneNumberId(String phoneNumberId) {
    this.phoneNumberId = phoneNumberId;
  }


  public GetJwtSuccessPhoneNumbers shortNumber(String shortNumber) {
    
    this.shortNumber = shortNumber;
    return this;
  }

   /**
   * &lt;b&gt;[Only for phone numbers linked to a system (pbx)]&lt;/b&gt; &lt;br/&gt; If phone is linked to a system (pbx), short phone number (corresponds to the number monitored by PCG). &lt;br/&gt; Only usable within the same PBX. &lt;br/&gt; Only PCG can set this field.
   * @return shortNumber
  **/
  @javax.annotation.Nullable
  @ApiModelProperty(value = "<b>[Only for phone numbers linked to a system (pbx)]</b> <br/> If phone is linked to a system (pbx), short phone number (corresponds to the number monitored by PCG). <br/> Only usable within the same PBX. <br/> Only PCG can set this field.")

  public String getShortNumber() {
    return shortNumber;
  }


  public void setShortNumber(String shortNumber) {
    this.shortNumber = shortNumber;
  }


  public GetJwtSuccessPhoneNumbers systemId(String systemId) {
    
    this.systemId = systemId;
    return this;
  }

   /**
   * &lt;b&gt;[Only for phone numbers linked to a system (pbx)]&lt;/b&gt; &lt;br/&gt; If phone is linked to a system (pbx), unique identifier of that system in Rainbow database.
   * @return systemId
  **/
  @javax.annotation.Nullable
  @ApiModelProperty(value = "<b>[Only for phone numbers linked to a system (pbx)]</b> <br/> If phone is linked to a system (pbx), unique identifier of that system in Rainbow database.")

  public String getSystemId() {
    return systemId;
  }


  public void setSystemId(String systemId) {
    this.systemId = systemId;
  }


  public GetJwtSuccessPhoneNumbers type(String type) {
    
    this.type = type;
    return this;
  }

   /**
   * Phone number type, one of &lt;code&gt;home&lt;/code&gt;, &lt;code&gt;work&lt;/code&gt;, &lt;code&gt;other&lt;/code&gt;.
   * @return type
  **/
  @ApiModelProperty(required = true, value = "Phone number type, one of <code>home</code>, <code>work</code>, <code>other</code>.")

  public String getType() {
    return type;
  }


  public void setType(String type) {
    this.type = type;
  }


  @Override
  public boolean equals(java.lang.Object o) {
    if (this == o) {
      return true;
    }
    if (o == null || getClass() != o.getClass()) {
      return false;
    }
    GetJwtSuccessPhoneNumbers getJwtSuccessPhoneNumbers = (GetJwtSuccessPhoneNumbers) o;
    return Objects.equals(this.deviceType, getJwtSuccessPhoneNumbers.deviceType) &&
        Objects.equals(this.internalNumber, getJwtSuccessPhoneNumbers.internalNumber) &&
        Objects.equals(this.isFromSystem, getJwtSuccessPhoneNumbers.isFromSystem) &&
        Objects.equals(this.number, getJwtSuccessPhoneNumbers.number) &&
        Objects.equals(this.numberE164, getJwtSuccessPhoneNumbers.numberE164) &&
        Objects.equals(this.pbxId, getJwtSuccessPhoneNumbers.pbxId) &&
        Objects.equals(this.phoneNumberId, getJwtSuccessPhoneNumbers.phoneNumberId) &&
        Objects.equals(this.shortNumber, getJwtSuccessPhoneNumbers.shortNumber) &&
        Objects.equals(this.systemId, getJwtSuccessPhoneNumbers.systemId) &&
        Objects.equals(this.type, getJwtSuccessPhoneNumbers.type);
  }

  @Override
  public int hashCode() {
    return Objects.hash(deviceType, internalNumber, isFromSystem, number, numberE164, pbxId, phoneNumberId, shortNumber, systemId, type);
  }


  @Override
  public String toString() {
    StringBuilder sb = new StringBuilder();
    sb.append("class GetJwtSuccessPhoneNumbers {\n");
    sb.append("    deviceType: ").append(toIndentedString(deviceType)).append("\n");
    sb.append("    internalNumber: ").append(toIndentedString(internalNumber)).append("\n");
    sb.append("    isFromSystem: ").append(toIndentedString(isFromSystem)).append("\n");
    sb.append("    number: ").append(toIndentedString(number)).append("\n");
    sb.append("    numberE164: ").append(toIndentedString(numberE164)).append("\n");
    sb.append("    pbxId: ").append(toIndentedString(pbxId)).append("\n");
    sb.append("    phoneNumberId: ").append(toIndentedString(phoneNumberId)).append("\n");
    sb.append("    shortNumber: ").append(toIndentedString(shortNumber)).append("\n");
    sb.append("    systemId: ").append(toIndentedString(systemId)).append("\n");
    sb.append("    type: ").append(toIndentedString(type)).append("\n");
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

