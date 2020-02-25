<?php
/**
 * ApiRainbowUcsV10ConnectionsRoommemberTest
 *
 * PHP version 5
 *
 * @category Class
 * @package  Ale\Rainbow\S2S\Client\S2S
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * S2S api
 *
 * # Rainbow S2S API guide  ## Preamble  ### Introduction  This guide describes a list of API services that are provided by the OT Rainbow S2S portal. This portal is dedicated to S2S features, providing a full REST API for Rainbow features.  ### Protocol  REST interface is used for sending/receiving OT rainbow API messages. HTTP verbs GET, DELETE, POST, PUT, etc. are used. Standard HTTP responses are used to provide requested information or error status. There is no session notion in OT Rainbow system, so requests could be issued according to the stateless model, without transport conservation between them. Additional data could be provided in message body. JSON is used as a main format for data encoding in message body part. Each request is started with the following pattern /{module}/{version}/ where {module} is a portal module name to address and {version} is a version of used API, e.g. “v1.0”.  ### Security considerations  Each request should contain some credential information to authenticate itself. Standard HTTP authentication with basic/bearer modes is used. JSON Web Token mechanism is used to provide authentication information. JWT has a expire timeout that is controlled by OT Rainbow portal to prevent very long token usage. Also authentication with application token is used. The token must be provided in the request HTTP header, using a custom header: APIKey. At server side, token is verified, and if it doesn’t match, 403 Not Allowed response is sent. TLS is used as a transport protocol to support message exchanges between OT Rainbow portal and an application.
 *
 * The version of the OpenAPI document: 1.104.0
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.1.2
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Please update the test case below to test the model.
 */

namespace Ale\Rainbow\S2S\Client\S2S;

use PHPUnit\Framework\TestCase;

/**
 * ApiRainbowUcsV10ConnectionsRoommemberTest Class Doc Comment
 *
 * @category    Class
 * @description ApiRainbowUcsV10ConnectionsRoommember
 * @package     Ale\Rainbow\S2S\Client\S2S
 * @author      OpenAPI Generator team
 * @link        https://openapi-generator.tech
 */
class ApiRainbowUcsV10ConnectionsRoommemberTest extends TestCase
{

    /**
     * Setup before running any test case
     */
    public static function setUpBeforeClass()
    {
    }

    /**
     * Setup before running each test case
     */
    public function setUp()
    {
    }

    /**
     * Clean up after running each test case
     */
    public function tearDown()
    {
    }

    /**
     * Clean up after running all test cases
     */
    public static function tearDownAfterClass()
    {
    }

    /**
     * Test "ApiRainbowUcsV10ConnectionsRoommember"
     */
    public function testApiRainbowUcsV10ConnectionsRoommember()
    {
    }

    /**
     * Test attribute "id"
     */
    public function testPropertyId()
    {
    }

    /**
     * Test attribute "user"
     */
    public function testPropertyUser()
    {
    }

    /**
     * Test attribute "status"
     */
    public function testPropertyStatus()
    {
    }
}
