# s2s-client-s2s

S2S api
- API version: 1.104.0
  - Build date: 2020-03-13T09:48:10.776010+01:00[Europe/Paris]

# Rainbow S2S API guide  ## Preamble  ### Introduction  This guide describes a list of API services that are provided by the OT Rainbow S2S portal. This portal is dedicated to S2S features, providing a full REST API for Rainbow features.  ### Protocol  REST interface is used for sending/receiving OT rainbow API messages. HTTP verbs GET, DELETE, POST, PUT, etc. are used. Standard HTTP responses are used to provide requested information or error status. There is no session notion in OT Rainbow system, so requests could be issued according to the stateless model, without transport conservation between them. Additional data could be provided in message body. JSON is used as a main format for data encoding in message body part. Each request is started with the following pattern /{module}/{version}/ where {module} is a portal module name to address and {version} is a version of used API, e.g. “v1.0”.  ### Security considerations  Each request should contain some credential information to authenticate itself. Standard HTTP authentication with basic/bearer modes is used. JSON Web Token mechanism is used to provide authentication information. JWT has a expire timeout that is controlled by OT Rainbow portal to prevent very long token usage. Also authentication with application token is used. The token must be provided in the request HTTP header, using a custom header: APIKey. At server side, token is verified, and if it doesn’t match, 403 Not Allowed response is sent. TLS is used as a transport protocol to support message exchanges between OT Rainbow portal and an application.  


*Automatically generated by the [OpenAPI Generator](https://openapi-generator.tech)*


## Requirements

Building the API client library requires:
1. Java 1.7+
2. Maven/Gradle

## Installation

To install the API client library to your local Maven repository, simply execute:

```shell
mvn clean install
```

To deploy it to a remote Maven repository instead, configure the settings of the repository and execute:

```shell
mvn clean deploy
```

Refer to the [OSSRH Guide](http://central.sonatype.org/pages/ossrh-guide.html) for more information.

### Maven users

Add this dependency to your project's POM:

```xml
<dependency>
  <groupId>com.ale.rainbow.s2s</groupId>
  <artifactId>s2s-client-s2s</artifactId>
  <version>1.0.0</version>
  <scope>compile</scope>
</dependency>
```

### Gradle users

Add this dependency to your project's build file:

```groovy
compile "com.ale.rainbow.s2s:s2s-client-s2s:1.0.0"
```

### Others

At first generate the JAR by executing:

```shell
mvn clean package
```

Then manually install the following JARs:

* `target/s2s-client-s2s-1.0.0.jar`
* `target/lib/*.jar`

## Getting Started

Please follow the [installation](#installation) instruction and execute the following Java code:

```java

// Import classes:
import com.ale.rainbow.s2s.client.s2s.ApiClient;
import com.ale.rainbow.s2s.client.s2s.ApiException;
import com.ale.rainbow.s2s.client.s2s.Configuration;
import com.ale.rainbow.s2s.client.s2s.auth.*;
import com.ale.rainbow.s2s.client.s2s.models.*;
import com.ale.rainbow.s2s.client.s2s.api.ConnectionApi;

public class Example {
  public static void main(String[] args) {
    ApiClient defaultClient = Configuration.getDefaultApiClient();
    defaultClient.setBasePath("http://openrainbow.com:443");
    
    // Configure API key authorization: Bearer
    ApiKeyAuth Bearer = (ApiKeyAuth) defaultClient.getAuthentication("Bearer");
    Bearer.setApiKey("YOUR API KEY");
    // Uncomment the following line to set a prefix for the API key, e.g. "Token" (defaults to null)
    //Bearer.setApiKeyPrefix("Token");

    ConnectionApi apiInstance = new ConnectionApi(defaultClient);
    ConnectionCreate connectionCreate = new ConnectionCreate(); // ConnectionCreate | Connection creation data
    try {
      ConnectionCreateResponse result = apiInstance.connectionCreate(connectionCreate);
      System.out.println(result);
    } catch (ApiException e) {
      System.err.println("Exception when calling ConnectionApi#connectionCreate");
      System.err.println("Status code: " + e.getCode());
      System.err.println("Reason: " + e.getResponseBody());
      System.err.println("Response headers: " + e.getResponseHeaders());
      e.printStackTrace();
    }
  }
}

```

## Documentation for API Endpoints

All URIs are relative to *http://openrainbow.com:443*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*ConnectionApi* | [**connectionCreate**](docs/ConnectionApi.md#connectionCreate) | **POST** /api/rainbow/ucs/v1.0/connections | Create a new user connection
*ConnectionApi* | [**connectionDelete**](docs/ConnectionApi.md#connectionDelete) | **DELETE** /api/rainbow/ucs/v1.0/connections/{id} | Delete a connection
*ConnectionApi* | [**connectionIndex**](docs/ConnectionApi.md#connectionIndex) | **GET** /api/rainbow/ucs/v1.0/connections | List all user connections
*ConnectionApi* | [**connectionShow**](docs/ConnectionApi.md#connectionShow) | **GET** /api/rainbow/ucs/v1.0/connections/{id} | Get the data of a connection
*ConversationApi* | [**conversationChatstate**](docs/ConversationApi.md#conversationChatstate) | **PUT** /api/rainbow/ucs/v1.0/connections/{cnxId}/conversations/{cvId}/chatstate/{state} | Send a chat state
*ConversationApi* | [**conversationCreate**](docs/ConversationApi.md#conversationCreate) | **POST** /api/rainbow/ucs/v1.0/connections/{cnxId}/conversations | Create a conversation
*ConversationApi* | [**conversationDelete**](docs/ConversationApi.md#conversationDelete) | **DELETE** /api/rainbow/ucs/v1.0/connections/{cnxId}/conversations/{id} | Delete a conversation
*ConversationApi* | [**conversationIndex**](docs/ConversationApi.md#conversationIndex) | **GET** /api/rainbow/ucs/v1.0/connections/{cnxId}/conversations | Get all conversations
*ConversationApi* | [**conversationShow**](docs/ConversationApi.md#conversationShow) | **GET** /api/rainbow/ucs/v1.0/connections/{cnxId}/conversations/{id} | Get a conversation
*MessageApi* | [**messageCreate**](docs/MessageApi.md#messageCreate) | **POST** /api/rainbow/ucs/v1.0/connections/{cnxId}/conversations/{cvId}/messages | Send a new message
*MessageApi* | [**messageDeleteAll**](docs/MessageApi.md#messageDeleteAll) | **DELETE** /api/rainbow/ucs/v1.0/connections/{cnxId}/conversations/{cvId}/messages | Delete all conversation messages
*MessageApi* | [**messageIndex**](docs/MessageApi.md#messageIndex) | **GET** /api/rainbow/ucs/v1.0/connections/{cnxId}/conversations/{cvId}/messages | List the messages of a conversation
*MessageApi* | [**messageReadReceipt**](docs/MessageApi.md#messageReadReceipt) | **PUT** /api/rainbow/ucs/v1.0/connections/{cnxId}/conversations/{cvId}/messages/{id}/read | Send a read receipt
*MessageApi* | [**messageReceivedReceipt**](docs/MessageApi.md#messageReceivedReceipt) | **PUT** /api/rainbow/ucs/v1.0/connections/{cnxId}/conversations/{cvId}/messages/{id}/received | Send a received receipt
*PresenceApi* | [**presenceShow**](docs/PresenceApi.md#presenceShow) | **GET** /api/rainbow/ucs/v1.0/connections/{cnxId}/presences/{userId} | Probe a user&#39;s presence
*PresenceApi* | [**presenceUpdate**](docs/PresenceApi.md#presenceUpdate) | **PUT** /api/rainbow/ucs/v1.0/connections/{cnxId}/presences | Set the user&#39;s presence
*RoomApi* | [**roomJoin**](docs/RoomApi.md#roomJoin) | **POST** /api/rainbow/ucs/v1.0/connections/{cnxId}/rooms/{roomId}/join | Join a room


## Documentation for Models

 - [ApiRainbowUcsV10ConnectionsAllDeleted](docs/ApiRainbowUcsV10ConnectionsAllDeleted.md)
 - [ApiRainbowUcsV10ConnectionsAllReceipt](docs/ApiRainbowUcsV10ConnectionsAllReceipt.md)
 - [ApiRainbowUcsV10ConnectionsChatstate](docs/ApiRainbowUcsV10ConnectionsChatstate.md)
 - [ApiRainbowUcsV10ConnectionsConnection](docs/ApiRainbowUcsV10ConnectionsConnection.md)
 - [ApiRainbowUcsV10ConnectionsConversation](docs/ApiRainbowUcsV10ConnectionsConversation.md)
 - [ApiRainbowUcsV10ConnectionsError](docs/ApiRainbowUcsV10ConnectionsError.md)
 - [ApiRainbowUcsV10ConnectionsMessage](docs/ApiRainbowUcsV10ConnectionsMessage.md)
 - [ApiRainbowUcsV10ConnectionsMessageAttachment](docs/ApiRainbowUcsV10ConnectionsMessageAttachment.md)
 - [ApiRainbowUcsV10ConnectionsPresence](docs/ApiRainbowUcsV10ConnectionsPresence.md)
 - [ApiRainbowUcsV10ConnectionsReceipt](docs/ApiRainbowUcsV10ConnectionsReceipt.md)
 - [ApiRainbowUcsV10ConnectionsRoomInvite](docs/ApiRainbowUcsV10ConnectionsRoomInvite.md)
 - [ApiRainbowUcsV10ConnectionsRoomMember](docs/ApiRainbowUcsV10ConnectionsRoomMember.md)
 - [ApiRainbowUcsV10ConnectionsRoomState](docs/ApiRainbowUcsV10ConnectionsRoomState.md)
 - [Attachment](docs/Attachment.md)
 - [Connection](docs/Connection.md)
 - [ConnectionCreate](docs/ConnectionCreate.md)
 - [ConnectionCreateConnection](docs/ConnectionCreateConnection.md)
 - [ConnectionCreateResponse](docs/ConnectionCreateResponse.md)
 - [Connections](docs/Connections.md)
 - [Content](docs/Content.md)
 - [Conversation](docs/Conversation.md)
 - [ConversationCreate](docs/ConversationCreate.md)
 - [ConversationCreateConversation](docs/ConversationCreateConversation.md)
 - [Conversations](docs/Conversations.md)
 - [DeleteAllResponse](docs/DeleteAllResponse.md)
 - [DeleteAllResponseData](docs/DeleteAllResponseData.md)
 - [InlineObject](docs/InlineObject.md)
 - [InlineObject1](docs/InlineObject1.md)
 - [InlineObject10](docs/InlineObject10.md)
 - [InlineObject11](docs/InlineObject11.md)
 - [InlineObject2](docs/InlineObject2.md)
 - [InlineObject3](docs/InlineObject3.md)
 - [InlineObject4](docs/InlineObject4.md)
 - [InlineObject5](docs/InlineObject5.md)
 - [InlineObject6](docs/InlineObject6.md)
 - [InlineObject7](docs/InlineObject7.md)
 - [InlineObject8](docs/InlineObject8.md)
 - [InlineObject9](docs/InlineObject9.md)
 - [Message](docs/Message.md)
 - [MessageCreate](docs/MessageCreate.md)
 - [MessageCreateMessage](docs/MessageCreateMessage.md)
 - [MessageCreateResponse](docs/MessageCreateResponse.md)
 - [MessageCreateResponseData](docs/MessageCreateResponseData.md)
 - [Presence](docs/Presence.md)
 - [PresenceUpdate](docs/PresenceUpdate.md)
 - [ReceiptStatus](docs/ReceiptStatus.md)
 - [RoomStatus](docs/RoomStatus.md)


## Documentation for Authorization

Authentication schemes defined for the API:
### Bearer

- **Type**: API key
- **API key parameter name**: Authorization
- **Location**: HTTP header


## Recommendation

It's recommended to create an instance of `ApiClient` per thread in a multithreaded environment to avoid any potential issues.

## Author


