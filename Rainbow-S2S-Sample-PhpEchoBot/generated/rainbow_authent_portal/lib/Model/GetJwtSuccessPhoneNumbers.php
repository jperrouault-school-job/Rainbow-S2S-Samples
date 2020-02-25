<?php
/**
 * GetJwtSuccessPhoneNumbers
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
 * OpenAPI Generator version: 4.2.2
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Ale\Rainbow\S2S\Client\AuthPortal\Model;

use \ArrayAccess;
use \Ale\Rainbow\S2S\Client\AuthPortal\ObjectSerializer;

/**
 * GetJwtSuccessPhoneNumbers Class Doc Comment
 *
 * @category Class
 * @package  Ale\Rainbow\S2S\Client\AuthPortal
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class GetJwtSuccessPhoneNumbers implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'GetJwtSuccess_phoneNumbers';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'device_type' => 'string',
        'internal_number' => 'string',
        'is_from_system' => 'bool',
        'number' => 'string',
        'number_e164' => 'string',
        'pbx_id' => 'string',
        'phone_number_id' => 'string',
        'short_number' => 'string',
        'system_id' => 'string',
        'type' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'device_type' => null,
        'internal_number' => null,
        'is_from_system' => null,
        'number' => null,
        'number_e164' => null,
        'pbx_id' => null,
        'phone_number_id' => null,
        'short_number' => null,
        'system_id' => null,
        'type' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'device_type' => 'deviceType',
        'internal_number' => 'internalNumber',
        'is_from_system' => 'isFromSystem',
        'number' => 'number',
        'number_e164' => 'numberE164',
        'pbx_id' => 'pbxId',
        'phone_number_id' => 'phoneNumberId',
        'short_number' => 'shortNumber',
        'system_id' => 'systemId',
        'type' => 'type'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'device_type' => 'setDeviceType',
        'internal_number' => 'setInternalNumber',
        'is_from_system' => 'setIsFromSystem',
        'number' => 'setNumber',
        'number_e164' => 'setNumberE164',
        'pbx_id' => 'setPbxId',
        'phone_number_id' => 'setPhoneNumberId',
        'short_number' => 'setShortNumber',
        'system_id' => 'setSystemId',
        'type' => 'setType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'device_type' => 'getDeviceType',
        'internal_number' => 'getInternalNumber',
        'is_from_system' => 'getIsFromSystem',
        'number' => 'getNumber',
        'number_e164' => 'getNumberE164',
        'pbx_id' => 'getPbxId',
        'phone_number_id' => 'getPhoneNumberId',
        'short_number' => 'getShortNumber',
        'system_id' => 'getSystemId',
        'type' => 'getType'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }

    

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['device_type'] = isset($data['device_type']) ? $data['device_type'] : null;
        $this->container['internal_number'] = isset($data['internal_number']) ? $data['internal_number'] : null;
        $this->container['is_from_system'] = isset($data['is_from_system']) ? $data['is_from_system'] : null;
        $this->container['number'] = isset($data['number']) ? $data['number'] : null;
        $this->container['number_e164'] = isset($data['number_e164']) ? $data['number_e164'] : null;
        $this->container['pbx_id'] = isset($data['pbx_id']) ? $data['pbx_id'] : null;
        $this->container['phone_number_id'] = isset($data['phone_number_id']) ? $data['phone_number_id'] : null;
        $this->container['short_number'] = isset($data['short_number']) ? $data['short_number'] : null;
        $this->container['system_id'] = isset($data['system_id']) ? $data['system_id'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['device_type'] === null) {
            $invalidProperties[] = "'device_type' can't be null";
        }
        if ($this->container['is_from_system'] === null) {
            $invalidProperties[] = "'is_from_system' can't be null";
        }
        if ($this->container['phone_number_id'] === null) {
            $invalidProperties[] = "'phone_number_id' can't be null";
        }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets device_type
     *
     * @return string
     */
    public function getDeviceType()
    {
        return $this->container['device_type'];
    }

    /**
     * Sets device_type
     *
     * @param string $device_type Phone number device type, one of <code>landline</code>, <code>mobile</code>, <code>fax</code>, <code>other</code>.
     *
     * @return $this
     */
    public function setDeviceType($device_type)
    {
        $this->container['device_type'] = $device_type;

        return $this;
    }

    /**
     * Gets internal_number
     *
     * @return string|null
     */
    public function getInternalNumber()
    {
        return $this->container['internal_number'];
    }

    /**
     * Sets internal_number
     *
     * @param string|null $internal_number <b>[Only for phone numbers linked to a system (pbx)]</b> <br/> If phone is linked to a system (pbx), internal phone number. <br/> Usable within a PBX group. <br/> Admins and users can modify this internalNumber field.
     *
     * @return $this
     */
    public function setInternalNumber($internal_number)
    {
        $this->container['internal_number'] = $internal_number;

        return $this;
    }

    /**
     * Gets is_from_system
     *
     * @return bool
     */
    public function getIsFromSystem()
    {
        return $this->container['is_from_system'];
    }

    /**
     * Sets is_from_system
     *
     * @param bool $is_from_system Boolean indicating if phone is linked to a system (pbx).
     *
     * @return $this
     */
    public function setIsFromSystem($is_from_system)
    {
        $this->container['is_from_system'] = $is_from_system;

        return $this;
    }

    /**
     * Gets number
     *
     * @return string|null
     */
    public function getNumber()
    {
        return $this->container['number'];
    }

    /**
     * Sets number
     *
     * @param string|null $number User phone number (as entered by user)
     *
     * @return $this
     */
    public function setNumber($number)
    {
        $this->container['number'] = $number;

        return $this;
    }

    /**
     * Gets number_e164
     *
     * @return string|null
     */
    public function getNumberE164()
    {
        return $this->container['number_e164'];
    }

    /**
     * Sets number_e164
     *
     * @param string|null $number_e164 User E.164 phone number, computed by server from `number` and `country` fields
     *
     * @return $this
     */
    public function setNumberE164($number_e164)
    {
        $this->container['number_e164'] = $number_e164;

        return $this;
    }

    /**
     * Gets pbx_id
     *
     * @return string|null
     */
    public function getPbxId()
    {
        return $this->container['pbx_id'];
    }

    /**
     * Sets pbx_id
     *
     * @param string|null $pbx_id <b>[Only for phone numbers linked to a system (pbx)]</b> <br/> If phone is linked to a system (pbx), unique identifier of that pbx.
     *
     * @return $this
     */
    public function setPbxId($pbx_id)
    {
        $this->container['pbx_id'] = $pbx_id;

        return $this;
    }

    /**
     * Gets phone_number_id
     *
     * @return string
     */
    public function getPhoneNumberId()
    {
        return $this->container['phone_number_id'];
    }

    /**
     * Sets phone_number_id
     *
     * @param string $phone_number_id Phone number unique id in phone-numbers directory collection.
     *
     * @return $this
     */
    public function setPhoneNumberId($phone_number_id)
    {
        $this->container['phone_number_id'] = $phone_number_id;

        return $this;
    }

    /**
     * Gets short_number
     *
     * @return string|null
     */
    public function getShortNumber()
    {
        return $this->container['short_number'];
    }

    /**
     * Sets short_number
     *
     * @param string|null $short_number <b>[Only for phone numbers linked to a system (pbx)]</b> <br/> If phone is linked to a system (pbx), short phone number (corresponds to the number monitored by PCG). <br/> Only usable within the same PBX. <br/> Only PCG can set this field.
     *
     * @return $this
     */
    public function setShortNumber($short_number)
    {
        $this->container['short_number'] = $short_number;

        return $this;
    }

    /**
     * Gets system_id
     *
     * @return string|null
     */
    public function getSystemId()
    {
        return $this->container['system_id'];
    }

    /**
     * Sets system_id
     *
     * @param string|null $system_id <b>[Only for phone numbers linked to a system (pbx)]</b> <br/> If phone is linked to a system (pbx), unique identifier of that system in Rainbow database.
     *
     * @return $this
     */
    public function setSystemId($system_id)
    {
        $this->container['system_id'] = $system_id;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string $type Phone number type, one of <code>home</code>, <code>work</code>, <code>other</code>.
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


