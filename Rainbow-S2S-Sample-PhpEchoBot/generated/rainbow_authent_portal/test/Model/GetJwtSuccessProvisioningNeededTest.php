<?php
/**
 * GetJwtSuccessProvisioningNeededTest
 *
 * PHP version 5
 *
 * @category Class
 * @package  Ale\Rainbow\S2S\Client\AuthPortal
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Rainbow authentication portal
 *
 * # Rainbow authentication portal API guide  ## Preamble  [Download Postman collection][0]  ### Introduction  This guide describes list of API services that are provided by OT Rainbow authentication portal system. Services are used to manage OT Rainbow authentication.  ### Protocol  REST interface is used for sending/receiving OT rainbow API messages.   HTTP request GET is used. Standard HTTP responses are used to provide requested information or error status. There is no session notion in OT Rainbow system, so requests could be issued according stateless model, without transport conservation between them.   JSON is used as a main format for data encoding in message body part. Each request is started with the following pattern /{module}/{version}/ where {module} is a portal module name to address and {version} is a version of used API, par example, “v1.0”.  ### Security considerations  Each request should contain some credential information to authenticate itself. Standard HTTP authentication with basic/bearer modes is used. JSON Web Token mechanism is used to provide authentication information. JWT has a expire timeout that is controlled by OT Rainbow portal to prevent very long token usage. Also authentication with application token is used. The token must be provided in the request HTTP header, using a custom header: APIKey. At server side, token is verified, and if it doesn’t match, 403 Not Allowed response is sent. TLS is used as a transport protocol to support message exchanges between OT Rainbow portal and an application.    [0]: AuthenticationPortalServer_postman.json
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

namespace Ale\Rainbow\S2S\Client\AuthPortal;

use PHPUnit\Framework\TestCase;

/**
 * GetJwtSuccessProvisioningNeededTest Class Doc Comment
 *
 * @category    Class
 * @description GetJwtSuccessProvisioningNeeded
 * @package     Ale\Rainbow\S2S\Client\AuthPortal
 * @author      OpenAPI Generator team
 * @link        https://openapi-generator.tech
 */
class GetJwtSuccessProvisioningNeededTest extends TestCase
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
     * Test "GetJwtSuccessProvisioningNeeded"
     */
    public function testGetJwtSuccessProvisioningNeeded()
    {
    }

    /**
     * Test attribute "media_type"
     */
    public function testPropertyMediaType()
    {
    }

    /**
     * Test attribute "pgi_enterprise_id"
     */
    public function testPropertyPgiEnterpriseId()
    {
    }

    /**
     * Test attribute "provider_type"
     */
    public function testPropertyProviderType()
    {
    }
}
