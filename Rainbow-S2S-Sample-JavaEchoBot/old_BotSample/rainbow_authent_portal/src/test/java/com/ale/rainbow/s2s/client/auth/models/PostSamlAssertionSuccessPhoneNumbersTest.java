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

import com.google.gson.TypeAdapter;
import com.google.gson.annotations.JsonAdapter;
import com.google.gson.annotations.SerializedName;
import com.google.gson.stream.JsonReader;
import com.google.gson.stream.JsonWriter;
import io.swagger.annotations.ApiModel;
import io.swagger.annotations.ApiModelProperty;
import java.io.IOException;
import org.junit.Assert;
import org.junit.Ignore;
import org.junit.Test;


/**
 * Model tests for PostSamlAssertionSuccessPhoneNumbers
 */
public class PostSamlAssertionSuccessPhoneNumbersTest {
    private final PostSamlAssertionSuccessPhoneNumbers model = new PostSamlAssertionSuccessPhoneNumbers();

    /**
     * Model tests for PostSamlAssertionSuccessPhoneNumbers
     */
    @Test
    public void testPostSamlAssertionSuccessPhoneNumbers() {
        // TODO: test PostSamlAssertionSuccessPhoneNumbers
    }

    /**
     * Test the property 'deviceType'
     */
    @Test
    public void deviceTypeTest() {
        // TODO: test deviceType
    }

    /**
     * Test the property 'internalNumber'
     */
    @Test
    public void internalNumberTest() {
        // TODO: test internalNumber
    }

    /**
     * Test the property 'isFromSystem'
     */
    @Test
    public void isFromSystemTest() {
        // TODO: test isFromSystem
    }

    /**
     * Test the property 'number'
     */
    @Test
    public void numberTest() {
        // TODO: test number
    }

    /**
     * Test the property 'numberE164'
     */
    @Test
    public void numberE164Test() {
        // TODO: test numberE164
    }

    /**
     * Test the property 'pbxId'
     */
    @Test
    public void pbxIdTest() {
        // TODO: test pbxId
    }

    /**
     * Test the property 'phoneNumberId'
     */
    @Test
    public void phoneNumberIdTest() {
        // TODO: test phoneNumberId
    }

    /**
     * Test the property 'shortNumber'
     */
    @Test
    public void shortNumberTest() {
        // TODO: test shortNumber
    }

    /**
     * Test the property 'systemId'
     */
    @Test
    public void systemIdTest() {
        // TODO: test systemId
    }

    /**
     * Test the property 'type'
     */
    @Test
    public void typeTest() {
        // TODO: test type
    }

}
