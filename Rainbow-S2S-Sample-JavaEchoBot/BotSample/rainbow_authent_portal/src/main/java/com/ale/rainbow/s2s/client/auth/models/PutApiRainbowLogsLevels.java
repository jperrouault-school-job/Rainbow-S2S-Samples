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
 * PutApiRainbowLogsLevels
 */
@javax.annotation.Generated(value = "org.openapitools.codegen.languages.JavaClientCodegen", date = "2020-02-21T22:52:11.612023+01:00[Europe/Paris]")
public class PutApiRainbowLogsLevels implements Serializable {
  private static final long serialVersionUID = 1L;

  /**
   * Level to set for &lt;strong&gt;console&lt;/strong&gt; transport
   */
  @JsonAdapter(ConsoleEnum.Adapter.class)
  public enum ConsoleEnum {
    DEBUG("debug"),
    
    INFO("info"),
    
    WARN("warn"),
    
    ERROR("error");

    private String value;

    ConsoleEnum(String value) {
      this.value = value;
    }

    public String getValue() {
      return value;
    }

    @Override
    public String toString() {
      return String.valueOf(value);
    }

    public static ConsoleEnum fromValue(String value) {
      for (ConsoleEnum b : ConsoleEnum.values()) {
        if (b.value.equals(value)) {
          return b;
        }
      }
      throw new IllegalArgumentException("Unexpected value '" + value + "'");
    }

    public static class Adapter extends TypeAdapter<ConsoleEnum> {
      @Override
      public void write(final JsonWriter jsonWriter, final ConsoleEnum enumeration) throws IOException {
        jsonWriter.value(enumeration.getValue());
      }

      @Override
      public ConsoleEnum read(final JsonReader jsonReader) throws IOException {
        String value =  jsonReader.nextString();
        return ConsoleEnum.fromValue(value);
      }
    }
  }

  public static final String SERIALIZED_NAME_CONSOLE = "console";
  @SerializedName(SERIALIZED_NAME_CONSOLE)
  private ConsoleEnum console;

  /**
   * Level to set for &lt;strong&gt;file&lt;/strong&gt; transport
   */
  @JsonAdapter(FileEnum.Adapter.class)
  public enum FileEnum {
    DEBUG("debug"),
    
    INFO("info"),
    
    WARN("warn"),
    
    ERROR("error");

    private String value;

    FileEnum(String value) {
      this.value = value;
    }

    public String getValue() {
      return value;
    }

    @Override
    public String toString() {
      return String.valueOf(value);
    }

    public static FileEnum fromValue(String value) {
      for (FileEnum b : FileEnum.values()) {
        if (b.value.equals(value)) {
          return b;
        }
      }
      throw new IllegalArgumentException("Unexpected value '" + value + "'");
    }

    public static class Adapter extends TypeAdapter<FileEnum> {
      @Override
      public void write(final JsonWriter jsonWriter, final FileEnum enumeration) throws IOException {
        jsonWriter.value(enumeration.getValue());
      }

      @Override
      public FileEnum read(final JsonReader jsonReader) throws IOException {
        String value =  jsonReader.nextString();
        return FileEnum.fromValue(value);
      }
    }
  }

  public static final String SERIALIZED_NAME_FILE = "file";
  @SerializedName(SERIALIZED_NAME_FILE)
  private FileEnum file;

  /**
   * Level to set for &lt;strong&gt;syslog&lt;/strong&gt; transport
   */
  @JsonAdapter(SyslogEnum.Adapter.class)
  public enum SyslogEnum {
    DEBUG("debug"),
    
    INFO("info"),
    
    WARNING("warning"),
    
    ERROR("error");

    private String value;

    SyslogEnum(String value) {
      this.value = value;
    }

    public String getValue() {
      return value;
    }

    @Override
    public String toString() {
      return String.valueOf(value);
    }

    public static SyslogEnum fromValue(String value) {
      for (SyslogEnum b : SyslogEnum.values()) {
        if (b.value.equals(value)) {
          return b;
        }
      }
      throw new IllegalArgumentException("Unexpected value '" + value + "'");
    }

    public static class Adapter extends TypeAdapter<SyslogEnum> {
      @Override
      public void write(final JsonWriter jsonWriter, final SyslogEnum enumeration) throws IOException {
        jsonWriter.value(enumeration.getValue());
      }

      @Override
      public SyslogEnum read(final JsonReader jsonReader) throws IOException {
        String value =  jsonReader.nextString();
        return SyslogEnum.fromValue(value);
      }
    }
  }

  public static final String SERIALIZED_NAME_SYSLOG = "syslog";
  @SerializedName(SERIALIZED_NAME_SYSLOG)
  private SyslogEnum syslog;


  public PutApiRainbowLogsLevels console(ConsoleEnum console) {
    
    this.console = console;
    return this;
  }

   /**
   * Level to set for &lt;strong&gt;console&lt;/strong&gt; transport
   * @return console
  **/
  @javax.annotation.Nullable
  @ApiModelProperty(value = "Level to set for <strong>console</strong> transport")

  public ConsoleEnum getConsole() {
    return console;
  }


  public void setConsole(ConsoleEnum console) {
    this.console = console;
  }


  public PutApiRainbowLogsLevels file(FileEnum file) {
    
    this.file = file;
    return this;
  }

   /**
   * Level to set for &lt;strong&gt;file&lt;/strong&gt; transport
   * @return file
  **/
  @javax.annotation.Nullable
  @ApiModelProperty(value = "Level to set for <strong>file</strong> transport")

  public FileEnum getFile() {
    return file;
  }


  public void setFile(FileEnum file) {
    this.file = file;
  }


  public PutApiRainbowLogsLevels syslog(SyslogEnum syslog) {
    
    this.syslog = syslog;
    return this;
  }

   /**
   * Level to set for &lt;strong&gt;syslog&lt;/strong&gt; transport
   * @return syslog
  **/
  @javax.annotation.Nullable
  @ApiModelProperty(value = "Level to set for <strong>syslog</strong> transport")

  public SyslogEnum getSyslog() {
    return syslog;
  }


  public void setSyslog(SyslogEnum syslog) {
    this.syslog = syslog;
  }


  @Override
  public boolean equals(java.lang.Object o) {
    if (this == o) {
      return true;
    }
    if (o == null || getClass() != o.getClass()) {
      return false;
    }
    PutApiRainbowLogsLevels putApiRainbowLogsLevels = (PutApiRainbowLogsLevels) o;
    return Objects.equals(this.console, putApiRainbowLogsLevels.console) &&
        Objects.equals(this.file, putApiRainbowLogsLevels.file) &&
        Objects.equals(this.syslog, putApiRainbowLogsLevels.syslog);
  }

  @Override
  public int hashCode() {
    return Objects.hash(console, file, syslog);
  }


  @Override
  public String toString() {
    StringBuilder sb = new StringBuilder();
    sb.append("class PutApiRainbowLogsLevels {\n");
    sb.append("    console: ").append(toIndentedString(console)).append("\n");
    sb.append("    file: ").append(toIndentedString(file)).append("\n");
    sb.append("    syslog: ").append(toIndentedString(syslog)).append("\n");
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

