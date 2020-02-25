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
import com.ale.rainbow.s2s.client.s2s.models.ApiRainbowUcsV10ConnectionsMessageAttachment;
import com.ale.rainbow.s2s.client.s2s.models.Content;
import com.google.gson.TypeAdapter;
import com.google.gson.annotations.JsonAdapter;
import com.google.gson.annotations.SerializedName;
import com.google.gson.stream.JsonReader;
import com.google.gson.stream.JsonWriter;
import io.swagger.annotations.ApiModel;
import io.swagger.annotations.ApiModelProperty;
import java.io.IOException;
import java.util.ArrayList;
import java.util.List;
import java.io.Serializable;

/**
 * ApiRainbowUcsV10ConnectionsMessage
 */
@javax.annotation.Generated(value = "org.openapitools.codegen.languages.JavaClientCodegen", date = "2020-02-17T17:34:01.533013+01:00[Europe/Paris]")
public class ApiRainbowUcsV10ConnectionsMessage implements Serializable {
  private static final long serialVersionUID = 1L;

  public static final String SERIALIZED_NAME_ID = "id";
  @SerializedName(SERIALIZED_NAME_ID)
  private String id;

  public static final String SERIALIZED_NAME_CONVERSATION_ID = "conversation_id";
  @SerializedName(SERIALIZED_NAME_CONVERSATION_ID)
  private String conversationId;

  public static final String SERIALIZED_NAME_FROM = "from";
  @SerializedName(SERIALIZED_NAME_FROM)
  private String from;

  public static final String SERIALIZED_NAME_IS_GROUP = "is_group";
  @SerializedName(SERIALIZED_NAME_IS_GROUP)
  private Boolean isGroup;

  public static final String SERIALIZED_NAME_SUBJECT = "subject";
  @SerializedName(SERIALIZED_NAME_SUBJECT)
  private String subject;

  public static final String SERIALIZED_NAME_BODY = "body";
  @SerializedName(SERIALIZED_NAME_BODY)
  private String body;

  public static final String SERIALIZED_NAME_LANG = "lang";
  @SerializedName(SERIALIZED_NAME_LANG)
  private String lang;

  public static final String SERIALIZED_NAME_ATTACHMENT = "attachment";
  @SerializedName(SERIALIZED_NAME_ATTACHMENT)
  private ApiRainbowUcsV10ConnectionsMessageAttachment attachment;

  public static final String SERIALIZED_NAME_CONTENTS = "contents";
  @SerializedName(SERIALIZED_NAME_CONTENTS)
  private List<Content> contents = null;


  public ApiRainbowUcsV10ConnectionsMessage id(String id) {
    
    this.id = id;
    return this;
  }

   /**
   * the message Id
   * @return id
  **/
  @ApiModelProperty(example = "cf05daec-c32e-11e8-affe-309c2364ed11", required = true, value = "the message Id")

  public String getId() {
    return id;
  }


  public void setId(String id) {
    this.id = id;
  }


  public ApiRainbowUcsV10ConnectionsMessage conversationId(String conversationId) {
    
    this.conversationId = conversationId;
    return this;
  }

   /**
   * Get conversationId
   * @return conversationId
  **/
  @ApiModelProperty(example = "1555081424877876", required = true, value = "")

  public String getConversationId() {
    return conversationId;
  }


  public void setConversationId(String conversationId) {
    this.conversationId = conversationId;
  }


  public ApiRainbowUcsV10ConnectionsMessage from(String from) {
    
    this.from = from;
    return this;
  }

   /**
   * the sender Id
   * @return from
  **/
  @ApiModelProperty(example = "59f1ecc4ea84f9b5c339958d", required = true, value = "the sender Id")

  public String getFrom() {
    return from;
  }


  public void setFrom(String from) {
    this.from = from;
  }


  public ApiRainbowUcsV10ConnectionsMessage isGroup(Boolean isGroup) {
    
    this.isGroup = isGroup;
    return this;
  }

   /**
   * is a multi-user message
   * @return isGroup
  **/
  @javax.annotation.Nullable
  @ApiModelProperty(example = "true", value = "is a multi-user message")

  public Boolean getIsGroup() {
    return isGroup;
  }


  public void setIsGroup(Boolean isGroup) {
    this.isGroup = isGroup;
  }


  public ApiRainbowUcsV10ConnectionsMessage subject(String subject) {
    
    this.subject = subject;
    return this;
  }

   /**
   * the subject
   * @return subject
  **/
  @javax.annotation.Nullable
  @ApiModelProperty(example = "this is the subject", value = "the subject")

  public String getSubject() {
    return subject;
  }


  public void setSubject(String subject) {
    this.subject = subject;
  }


  public ApiRainbowUcsV10ConnectionsMessage body(String body) {
    
    this.body = body;
    return this;
  }

   /**
   * the content
   * @return body
  **/
  @ApiModelProperty(example = "this is the body", required = true, value = "the content")

  public String getBody() {
    return body;
  }


  public void setBody(String body) {
    this.body = body;
  }


  public ApiRainbowUcsV10ConnectionsMessage lang(String lang) {
    
    this.lang = lang;
    return this;
  }

   /**
   * the text language
   * @return lang
  **/
  @javax.annotation.Nullable
  @ApiModelProperty(example = "en", value = "the text language")

  public String getLang() {
    return lang;
  }


  public void setLang(String lang) {
    this.lang = lang;
  }


  public ApiRainbowUcsV10ConnectionsMessage attachment(ApiRainbowUcsV10ConnectionsMessageAttachment attachment) {
    
    this.attachment = attachment;
    return this;
  }

   /**
   * Get attachment
   * @return attachment
  **/
  @javax.annotation.Nullable
  @ApiModelProperty(value = "")

  public ApiRainbowUcsV10ConnectionsMessageAttachment getAttachment() {
    return attachment;
  }


  public void setAttachment(ApiRainbowUcsV10ConnectionsMessageAttachment attachment) {
    this.attachment = attachment;
  }


  public ApiRainbowUcsV10ConnectionsMessage contents(List<Content> contents) {
    
    this.contents = contents;
    return this;
  }

  public ApiRainbowUcsV10ConnectionsMessage addContentsItem(Content contentsItem) {
    if (this.contents == null) {
      this.contents = new ArrayList<Content>();
    }
    this.contents.add(contentsItem);
    return this;
  }

   /**
   * list of alternative content
   * @return contents
  **/
  @javax.annotation.Nullable
  @ApiModelProperty(example = "[{\"type\":\"application/json\",\"data\":\"{\\\"isTest\\\": true}\"},{\"type\":\"text/markdown\",\"data\":\"# Title\"}]", value = "list of alternative content")

  public List<Content> getContents() {
    return contents;
  }


  public void setContents(List<Content> contents) {
    this.contents = contents;
  }


  @Override
  public boolean equals(java.lang.Object o) {
    if (this == o) {
      return true;
    }
    if (o == null || getClass() != o.getClass()) {
      return false;
    }
    ApiRainbowUcsV10ConnectionsMessage apiRainbowUcsV10ConnectionsMessage = (ApiRainbowUcsV10ConnectionsMessage) o;
    return Objects.equals(this.id, apiRainbowUcsV10ConnectionsMessage.id) &&
        Objects.equals(this.conversationId, apiRainbowUcsV10ConnectionsMessage.conversationId) &&
        Objects.equals(this.from, apiRainbowUcsV10ConnectionsMessage.from) &&
        Objects.equals(this.isGroup, apiRainbowUcsV10ConnectionsMessage.isGroup) &&
        Objects.equals(this.subject, apiRainbowUcsV10ConnectionsMessage.subject) &&
        Objects.equals(this.body, apiRainbowUcsV10ConnectionsMessage.body) &&
        Objects.equals(this.lang, apiRainbowUcsV10ConnectionsMessage.lang) &&
        Objects.equals(this.attachment, apiRainbowUcsV10ConnectionsMessage.attachment) &&
        Objects.equals(this.contents, apiRainbowUcsV10ConnectionsMessage.contents);
  }

  @Override
  public int hashCode() {
    return Objects.hash(id, conversationId, from, isGroup, subject, body, lang, attachment, contents);
  }


  @Override
  public String toString() {
    StringBuilder sb = new StringBuilder();
    sb.append("class ApiRainbowUcsV10ConnectionsMessage {\n");
    sb.append("    id: ").append(toIndentedString(id)).append("\n");
    sb.append("    conversationId: ").append(toIndentedString(conversationId)).append("\n");
    sb.append("    from: ").append(toIndentedString(from)).append("\n");
    sb.append("    isGroup: ").append(toIndentedString(isGroup)).append("\n");
    sb.append("    subject: ").append(toIndentedString(subject)).append("\n");
    sb.append("    body: ").append(toIndentedString(body)).append("\n");
    sb.append("    lang: ").append(toIndentedString(lang)).append("\n");
    sb.append("    attachment: ").append(toIndentedString(attachment)).append("\n");
    sb.append("    contents: ").append(toIndentedString(contents)).append("\n");
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

