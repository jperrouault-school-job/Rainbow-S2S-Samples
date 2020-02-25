<?php
/**
 * GetBasicLoginSuccessLoggedInApplication
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
 * GetBasicLoginSuccessLoggedInApplication Class Doc Comment
 *
 * @category Class
 * @package  Ale\Rainbow\S2S\Client\AuthPortal
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class GetBasicLoginSuccessLoggedInApplication implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'GetBasicLoginSuccess_loggedInApplication';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'activity' => 'string',
        'date_of_creation' => '\DateTime',
        'date_of_deployment' => '\DateTime',
        'date_of_deployment_request' => '\DateTime',
        'env' => 'string',
        'id' => 'string',
        'name' => 'string',
        'owner_id' => 'string',
        'platform' => 'string',
        'state' => 'string',
        'type' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'activity' => null,
        'date_of_creation' => 'date-time',
        'date_of_deployment' => 'date-time',
        'date_of_deployment_request' => 'date-time',
        'env' => null,
        'id' => null,
        'name' => null,
        'owner_id' => null,
        'platform' => null,
        'state' => null,
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
        'activity' => 'activity',
        'date_of_creation' => 'dateOfCreation',
        'date_of_deployment' => 'dateOfDeployment',
        'date_of_deployment_request' => 'dateOfDeploymentRequest',
        'env' => 'env',
        'id' => 'id',
        'name' => 'name',
        'owner_id' => 'ownerId',
        'platform' => 'platform',
        'state' => 'state',
        'type' => 'type'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'activity' => 'setActivity',
        'date_of_creation' => 'setDateOfCreation',
        'date_of_deployment' => 'setDateOfDeployment',
        'date_of_deployment_request' => 'setDateOfDeploymentRequest',
        'env' => 'setEnv',
        'id' => 'setId',
        'name' => 'setName',
        'owner_id' => 'setOwnerId',
        'platform' => 'setPlatform',
        'state' => 'setState',
        'type' => 'setType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'activity' => 'getActivity',
        'date_of_creation' => 'getDateOfCreation',
        'date_of_deployment' => 'getDateOfDeployment',
        'date_of_deployment_request' => 'getDateOfDeploymentRequest',
        'env' => 'getEnv',
        'id' => 'getId',
        'name' => 'getName',
        'owner_id' => 'getOwnerId',
        'platform' => 'getPlatform',
        'state' => 'getState',
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

    const ACTIVITY_A = 'A';
    const ACTIVITY_B = 'B';
    const ACTIVITY_C = 'C';
    const ACTIVITY_D = 'D';
    const ACTIVITY_E = 'E';
    const ACTIVITY_F = 'F';
    const ACTIVITY_G = 'G';
    const ACTIVITY_H = 'H';
    const ACTIVITY_I = 'I';
    const ACTIVITY_J = 'J';
    const ACTIVITY_K = 'K';
    const ACTIVITY_L = 'L';
    const ACTIVITY_M = 'M';
    const ACTIVITY_N = 'N';
    const ACTIVITY_O = 'O';
    const ACTIVITY_P = 'P';
    const ACTIVITY_Q = 'Q';
    const ACTIVITY_R = 'R';
    const ACTIVITY_S = 'S';
    const ACTIVITY_T = 'T';
    const ACTIVITY_U = 'U';
    const ACTIVITY_NONE = 'NONE';
    const ENV_NOT_DEPLOYED = 'not_deployed';
    const ENV_IN_DEPLOYMENT = 'in_deployment';
    const ENV_DEPLOYED = 'deployed';
    const PLATFORM_OFFICIAL = 'official';
    const PLATFORM_SANDBOX = 'sandbox';
    const STATE__NEW = 'new';
    const STATE_ACTIVE = 'active';
    const STATE_BLOCKED = 'blocked';
    const STATE_DELETED = 'deleted';
    const STATE_STOPPED = 'stopped';
    const TYPE_WEB = 'web';
    const TYPE_MOBILE = 'mobile';
    const TYPE_DESKTOP = 'desktop';
    const TYPE_SERVER = 'server';
    const TYPE_BOT = 'bot';
    const TYPE_IOT = 'iot';
    const TYPE_ADMIN = 'admin';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getActivityAllowableValues()
    {
        return [
            self::ACTIVITY_A,
            self::ACTIVITY_B,
            self::ACTIVITY_C,
            self::ACTIVITY_D,
            self::ACTIVITY_E,
            self::ACTIVITY_F,
            self::ACTIVITY_G,
            self::ACTIVITY_H,
            self::ACTIVITY_I,
            self::ACTIVITY_J,
            self::ACTIVITY_K,
            self::ACTIVITY_L,
            self::ACTIVITY_M,
            self::ACTIVITY_N,
            self::ACTIVITY_O,
            self::ACTIVITY_P,
            self::ACTIVITY_Q,
            self::ACTIVITY_R,
            self::ACTIVITY_S,
            self::ACTIVITY_T,
            self::ACTIVITY_U,
            self::ACTIVITY_NONE,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getEnvAllowableValues()
    {
        return [
            self::ENV_NOT_DEPLOYED,
            self::ENV_IN_DEPLOYMENT,
            self::ENV_DEPLOYED,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getPlatformAllowableValues()
    {
        return [
            self::PLATFORM_OFFICIAL,
            self::PLATFORM_SANDBOX,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStateAllowableValues()
    {
        return [
            self::STATE__NEW,
            self::STATE_ACTIVE,
            self::STATE_BLOCKED,
            self::STATE_DELETED,
            self::STATE_STOPPED,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_WEB,
            self::TYPE_MOBILE,
            self::TYPE_DESKTOP,
            self::TYPE_SERVER,
            self::TYPE_BOT,
            self::TYPE_IOT,
            self::TYPE_ADMIN,
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
        $this->container['activity'] = isset($data['activity']) ? $data['activity'] : null;
        $this->container['date_of_creation'] = isset($data['date_of_creation']) ? $data['date_of_creation'] : null;
        $this->container['date_of_deployment'] = isset($data['date_of_deployment']) ? $data['date_of_deployment'] : null;
        $this->container['date_of_deployment_request'] = isset($data['date_of_deployment_request']) ? $data['date_of_deployment_request'] : null;
        $this->container['env'] = isset($data['env']) ? $data['env'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['owner_id'] = isset($data['owner_id']) ? $data['owner_id'] : null;
        $this->container['platform'] = isset($data['platform']) ? $data['platform'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
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

        $allowedValues = $this->getActivityAllowableValues();
        if (!is_null($this->container['activity']) && !in_array($this->container['activity'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'activity', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['date_of_creation'] === null) {
            $invalidProperties[] = "'date_of_creation' can't be null";
        }
        if ($this->container['date_of_deployment'] === null) {
            $invalidProperties[] = "'date_of_deployment' can't be null";
        }
        if ($this->container['date_of_deployment_request'] === null) {
            $invalidProperties[] = "'date_of_deployment_request' can't be null";
        }
        if ($this->container['env'] === null) {
            $invalidProperties[] = "'env' can't be null";
        }
        $allowedValues = $this->getEnvAllowableValues();
        if (!is_null($this->container['env']) && !in_array($this->container['env'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'env', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['owner_id'] === null) {
            $invalidProperties[] = "'owner_id' can't be null";
        }
        if ($this->container['platform'] === null) {
            $invalidProperties[] = "'platform' can't be null";
        }
        $allowedValues = $this->getPlatformAllowableValues();
        if (!is_null($this->container['platform']) && !in_array($this->container['platform'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'platform', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['state'] === null) {
            $invalidProperties[] = "'state' can't be null";
        }
        $allowedValues = $this->getStateAllowableValues();
        if (!is_null($this->container['state']) && !in_array($this->container['state'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'state', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
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
     * Gets activity
     *
     * @return string|null
     */
    public function getActivity()
    {
        return $this->container['activity'];
    }

    /**
     * Sets activity
     *
     * @param string|null $activity Application activity <ul>  <li> <code>A</code>: AGRICULTURE, FORESTRY AND FISHING  <li> <code>B</code>: MINING AND QUARRYING  <li> <code>C</code>: MANUFACTURING  <li> <code>D</code>: ELECTRICITY, GAS, STEAM AND AIR CONDITIONING SUPPLY  <li> <code>E</code>: WATER SUPPLY; SEWERAGE, WASTE MANAGEMENT AND REMEDIATION ACTIVITIES  <li> <code>F</code>: CONSTRUCTION  <li> <code>G</code>: WHOLESALE AND RETAIL TRADE; REPAIR OF MOTOR VEHICLES AND MOTORCYCLES  <li> <code>H</code>: TRANSPORTATION AND STORAGE  <li> <code>I</code>: ACCOMMODATION AND FOOD SERVICE ACTIVITIES  <li> <code>J</code>: INFORMATION AND COMMUNICATION  <li> <code>K</code>: FINANCIAL AND INSURANCE ACTIVITIES  <li> <code>L</code>: REAL ESTATE ACTIVITIES  <li> <code>M</code>: PROFESSIONAL, SCIENTIFIC AND TECHNICAL ACTIVITIES  <li> <code>N</code>: ADMINISTRATIVE AND SUPPORT SERVICE ACTIVITIES  <li> <code>O</code>: PUBLIC ADMINISTRATION AND DEFENCE; COMPULSORY SOCIAL SECURITY  <li> <code>P</code>: EDUCATION  <li> <code>Q</code>: HUMAN HEALTH AND SOCIAL WORK ACTIVITIES  <li> <code>R</code>: ARTS, ENTERTAINMENT AND RECREATION  <li> <code>S</code>: OTHER SERVICE ACTIVITIES  <li> <code>T</code>: ACTIVITIES OF HOUSEHOLDS AS EMPLOYERS; UNDIFFERENTIATED GOODS- AND SERVICES-PRODUCING ACTIVITIES OF HOUSEHOLDS FOR OWN USE  <li> <code>U</code>: ACTIVITIES OF EXTRATERRITORIAL ORGANISATIONS AND BODIES  <li> <code>NONE</code>: Undefined activity </ul>
     *
     * @return $this
     */
    public function setActivity($activity)
    {
        $allowedValues = $this->getActivityAllowableValues();
        if (!is_null($activity) && !in_array($activity, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'activity', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['activity'] = $activity;

        return $this;
    }

    /**
     * Gets date_of_creation
     *
     * @return \DateTime
     */
    public function getDateOfCreation()
    {
        return $this->container['date_of_creation'];
    }

    /**
     * Sets date_of_creation
     *
     * @param \DateTime $date_of_creation Application creation date
     *
     * @return $this
     */
    public function setDateOfCreation($date_of_creation)
    {
        $this->container['date_of_creation'] = $date_of_creation;

        return $this;
    }

    /**
     * Gets date_of_deployment
     *
     * @return \DateTime
     */
    public function getDateOfDeployment()
    {
        return $this->container['date_of_deployment'];
    }

    /**
     * Sets date_of_deployment
     *
     * @param \DateTime $date_of_deployment Date of deployment of the application.
     *
     * @return $this
     */
    public function setDateOfDeployment($date_of_deployment)
    {
        $this->container['date_of_deployment'] = $date_of_deployment;

        return $this;
    }

    /**
     * Gets date_of_deployment_request
     *
     * @return \DateTime
     */
    public function getDateOfDeploymentRequest()
    {
        return $this->container['date_of_deployment_request'];
    }

    /**
     * Sets date_of_deployment_request
     *
     * @param \DateTime $date_of_deployment_request Date of deployment request of the application.
     *
     * @return $this
     */
    public function setDateOfDeploymentRequest($date_of_deployment_request)
    {
        $this->container['date_of_deployment_request'] = $date_of_deployment_request;

        return $this;
    }

    /**
     * Gets env
     *
     * @return string
     */
    public function getEnv()
    {
        return $this->container['env'];
    }

    /**
     * Sets env
     *
     * @param string $env Environment where the application is deploy
     *
     * @return $this
     */
    public function setEnv($env)
    {
        $allowedValues = $this->getEnvAllowableValues();
        if (!in_array($env, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'env', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['env'] = $env;

        return $this;
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
     * @param string $id Application unique identifier
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name Application name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets owner_id
     *
     * @return string
     */
    public function getOwnerId()
    {
        return $this->container['owner_id'];
    }

    /**
     * Sets owner_id
     *
     * @param string $owner_id Unique identifier of the application owner
     *
     * @return $this
     */
    public function setOwnerId($owner_id)
    {
        $this->container['owner_id'] = $owner_id;

        return $this;
    }

    /**
     * Gets platform
     *
     * @return string
     */
    public function getPlatform()
    {
        return $this->container['platform'];
    }

    /**
     * Sets platform
     *
     * @param string $platform Platform where the application is running
     *
     * @return $this
     */
    public function setPlatform($platform)
    {
        $allowedValues = $this->getPlatformAllowableValues();
        if (!in_array($platform, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'platform', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['platform'] = $platform;

        return $this;
    }

    /**
     * Gets state
     *
     * @return string
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param string $state State of the application
     *
     * @return $this
     */
    public function setState($state)
    {
        $allowedValues = $this->getStateAllowableValues();
        if (!in_array($state, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'state', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['state'] = $state;

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
     * @param string $type Application type
     *
     * @return $this
     */
    public function setType($type)
    {
        $allowedValues = $this->getTypeAllowableValues();
        if (!in_array($type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
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


