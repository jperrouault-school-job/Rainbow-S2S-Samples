<?php
/**
 * ApiRainbowUcsV10ConnectionsAllreceipt
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
 * Do not edit the class manually.
 */

namespace Ale\Rainbow\S2S\Client\S2S\Model;

use \ArrayAccess;
use \Ale\Rainbow\S2S\Client\S2S\ObjectSerializer;

/**
 * ApiRainbowUcsV10ConnectionsAllreceipt Class Doc Comment
 *
 * @category Class
 * @package  Ale\Rainbow\S2S\Client\S2S
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ApiRainbowUcsV10ConnectionsAllreceipt implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = '_api_rainbow_ucs_v1_0_connections_allreceipt';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'conversation_id' => 'string',
        'with' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'id' => null,
        'conversation_id' => null,
        'with' => null
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
        'id' => 'id',
        'conversation_id' => 'conversation_id',
        'with' => 'with'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'conversation_id' => 'setConversationId',
        'with' => 'setWith'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'conversation_id' => 'getConversationId',
        'with' => 'getWith'
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

    const ID_RECEIVED = 'all-received';
    const ID_SENT = 'all-sent';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getIdAllowableValues()
    {
        return [
            self::ID_RECEIVED,
            self::ID_SENT,
        ];
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['conversation_id'] = isset($data['conversation_id']) ? $data['conversation_id'] : null;
        $this->container['with'] = isset($data['with']) ? $data['with'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        $allowedValues = $this->getIdAllowableValues();
        if (!is_null($this->container['id']) && !in_array($this->container['id'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'id', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['conversation_id'] === null) {
            $invalidProperties[] = "'conversation_id' can't be null";
        }
        if ($this->container['with'] === null) {
            $invalidProperties[] = "'with' can't be null";
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
     * Gets id
     *
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id Receipt applies to 'sent' or 'received' messages
     *
     * @return $this
     */
    public function setId($id)
    {
        $allowedValues = $this->getIdAllowableValues();
        if (!in_array($id, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'id', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets conversation_id
     *
     * @return string
     */
    public function getConversationId()
    {
        return $this->container['conversation_id'];
    }

    /**
     * Sets conversation_id
     *
     * @param string $conversation_id conversation_id
     *
     * @return $this
     */
    public function setConversationId($conversation_id)
    {
        $this->container['conversation_id'] = $conversation_id;

        return $this;
    }

    /**
     * Gets with
     *
     * @return string
     */
    public function getWith()
    {
        return $this->container['with'];
    }

    /**
     * Sets with
     *
     * @param string $with with
     *
     * @return $this
     */
    public function setWith($with)
    {
        $this->container['with'] = $with;

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
}


