/*
 * S2S api
 * # Rainbow S2S API guide  ## Preamble  ### Introduction  This guide describes a list of API services that are provided by the OT Rainbow S2S portal. This portal is dedicated to S2S features, providing a full REST API for Rainbow features.  ### Protocol  REST interface is used for sending/receiving OT rainbow API messages. HTTP verbs GET, DELETE, POST, PUT, etc. are used. Standard HTTP responses are used to provide requested information or error status. There is no session notion in OT Rainbow system, so requests could be issued according to the stateless model, without transport conservation between them. Additional data could be provided in message body. JSON is used as a main format for data encoding in message body part. Each request is started with the following pattern /{module}/{version}/ where {module} is a portal module name to address and {version} is a version of used API, e.g. “v1.0”.  ### Security considerations  Each request should contain some credential information to authenticate itself. Standard HTTP authentication with basic/bearer modes is used. JSON Web Token mechanism is used to provide authentication information. JWT has a expire timeout that is controlled by OT Rainbow portal to prevent very long token usage. Also authentication with application token is used. The token must be provided in the request HTTP header, using a custom header: APIKey. At server side, token is verified, and if it doesn’t match, 403 Not Allowed response is sent. TLS is used as a transport protocol to support message exchanges between OT Rainbow portal and an application.  
 *
 * The version of the OpenAPI document: 1.104.0
 * 
 *
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */


package com.ale.rainbow.s2s.client.s2s.models;

import java.util.Objects;
import java.util.Arrays;
import com.ale.rainbow.s2s.client.s2s.models.ApiRainbowUcsV10ConnectionsReceipt;
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
 * InlineObject3
 */
@javax.annotation.Generated(value = "org.openapitools.codegen.languages.JavaClientCodegen", date = "2020-02-21T22:52:16.052964+01:00[Europe/Paris]")
public class InlineObject3 implements Serializable {
  private static final long serialVersionUID = 1L;

  public static final String SERIALIZED_NAME_ID = "id";
  @SerializedName(SERIALIZED_NAME_ID)
  private String id;

  public static final String SERIALIZED_NAME_TIMESTAMP = "timestamp";
  @SerializedName(SERIALIZED_NAME_TIMESTAMP)
  private String timestamp;

  public static final String SERIALIZED_NAME_RECEIPT = "receipt";
  @SerializedName(SERIALIZED_NAME_RECEIPT)
  private ApiRainbowUcsV10ConnectionsReceipt receipt;


  public InlineObject3 id(String id) {
    
    this.id = id;
    return this;
  }

   /**
   * the connection Id
   * @return id
  **/
  @ApiModelProperty(example = "f8e81b4e-a7dc-11e8-a734-f894c2dba3d5", required = true, value = "the connection Id")

  public String getId() {
    return id;
  }


  public void setId(String id) {
    this.id = id;
  }


  public InlineObject3 timestamp(String timestamp) {
    
    this.timestamp = timestamp;
    return this;
  }

   /**
   * the message timestamp
   * @return timestamp
  **/
  @ApiModelProperty(example = "2018-08-23T08:52:04.001535Z", required = true, value = "the message timestamp")

  public String getTimestamp() {
    return timestamp;
  }


  public void setTimestamp(String timestamp) {
    this.timestamp = timestamp;
  }


  public InlineObject3 receipt(ApiRainbowUcsV10ConnectionsReceipt receipt) {
    
    this.receipt = receipt;
    return this;
  }

   /**
   * Get receipt
   * @return receipt
  **/
  @ApiModelProperty(required = true, value = "")

  public ApiRainbowUcsV10ConnectionsReceipt getReceipt() {
    return receipt;
  }


  public void setReceipt(ApiRainbowUcsV10ConnectionsReceipt receipt) {
    this.receipt = receipt;
  }


  @Override
  public boolean equals(java.lang.Object o) {
    if (this == o) {
      return true;
    }
    if (o == null || getClass() != o.getClass()) {
      return false;
    }
    InlineObject3 inlineObject3 = (InlineObject3) o;
    return Objects.equals(this.id, inlineObject3.id) &&
        Objects.equals(this.timestamp, inlineObject3.timestamp) &&
        Objects.equals(this.receipt, inlineObject3.receipt);
  }

  @Override
  public int hashCode() {
    return Objects.hash(id, timestamp, receipt);
  }


  @Override
  public String toString() {
    StringBuilder sb = new StringBuilder();
    sb.append("class InlineObject3 {\n");
    sb.append("    id: ").append(toIndentedString(id)).append("\n");
    sb.append("    timestamp: ").append(toIndentedString(timestamp)).append("\n");
    sb.append("    receipt: ").append(toIndentedString(receipt)).append("\n");
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

