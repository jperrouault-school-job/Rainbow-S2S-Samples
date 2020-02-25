<?php
/**
 * GetRenewSuccessProfiles
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
 * GetRenewSuccessProfiles Class Doc Comment
 *
 * @category Class
 * @package  Ale\Rainbow\S2S\Client\AuthPortal
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class GetRenewSuccessProfiles implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'GetRenewSuccess_profiles';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'assignation_date' => 'string',
        'business_model' => 'string',
        'business_specific' => 'string[]',
        'can_be_sold' => 'bool',
        'has_conference' => 'bool',
        'is_default' => 'bool',
        'is_demo' => 'bool',
        'is_exclusive' => 'bool',
        'is_prepaid' => 'bool',
        'offer_id' => 'string',
        'offer_name' => 'string',
        'offer_technical_description' => 'string',
        'prepaid_duration' => 'float',
        'profile_id' => 'string',
        'profile_name' => 'string',
        'provisioning_needed' => '\Ale\Rainbow\S2S\Client\AuthPortal\Model\GetRenewSuccessProvisioningNeeded[]',
        'status' => 'string',
        'subscription_id' => 'string',
        'zuora_offer_id' => 'string',
        'zuora_product_rate_plan_charge_id' => 'string',
        'zuora_product_rate_plan_id' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'assignation_date' => null,
        'business_model' => null,
        'business_specific' => null,
        'can_be_sold' => null,
        'has_conference' => null,
        'is_default' => null,
        'is_demo' => null,
        'is_exclusive' => null,
        'is_prepaid' => null,
        'offer_id' => null,
        'offer_name' => null,
        'offer_technical_description' => null,
        'prepaid_duration' => null,
        'profile_id' => null,
        'profile_name' => null,
        'provisioning_needed' => null,
        'status' => null,
        'subscription_id' => null,
        'zuora_offer_id' => null,
        'zuora_product_rate_plan_charge_id' => null,
        'zuora_product_rate_plan_id' => null
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
        'assignation_date' => 'assignationDate',
        'business_model' => 'businessModel',
        'business_specific' => 'businessSpecific',
        'can_be_sold' => 'canBeSold',
        'has_conference' => 'hasConference',
        'is_default' => 'isDefault',
        'is_demo' => 'isDemo',
        'is_exclusive' => 'isExclusive',
        'is_prepaid' => 'isPrepaid',
        'offer_id' => 'offerId',
        'offer_name' => 'offerName',
        'offer_technical_description' => 'offerTechnicalDescription',
        'prepaid_duration' => 'prepaidDuration',
        'profile_id' => 'profileId',
        'profile_name' => 'profileName',
        'provisioning_needed' => 'provisioningNeeded',
        'status' => 'status',
        'subscription_id' => 'subscriptionId',
        'zuora_offer_id' => 'zuoraOfferId',
        'zuora_product_rate_plan_charge_id' => 'zuoraProductRatePlanChargeId',
        'zuora_product_rate_plan_id' => 'zuoraProductRatePlanId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'assignation_date' => 'setAssignationDate',
        'business_model' => 'setBusinessModel',
        'business_specific' => 'setBusinessSpecific',
        'can_be_sold' => 'setCanBeSold',
        'has_conference' => 'setHasConference',
        'is_default' => 'setIsDefault',
        'is_demo' => 'setIsDemo',
        'is_exclusive' => 'setIsExclusive',
        'is_prepaid' => 'setIsPrepaid',
        'offer_id' => 'setOfferId',
        'offer_name' => 'setOfferName',
        'offer_technical_description' => 'setOfferTechnicalDescription',
        'prepaid_duration' => 'setPrepaidDuration',
        'profile_id' => 'setProfileId',
        'profile_name' => 'setProfileName',
        'provisioning_needed' => 'setProvisioningNeeded',
        'status' => 'setStatus',
        'subscription_id' => 'setSubscriptionId',
        'zuora_offer_id' => 'setZuoraOfferId',
        'zuora_product_rate_plan_charge_id' => 'setZuoraProductRatePlanChargeId',
        'zuora_product_rate_plan_id' => 'setZuoraProductRatePlanId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'assignation_date' => 'getAssignationDate',
        'business_model' => 'getBusinessModel',
        'business_specific' => 'getBusinessSpecific',
        'can_be_sold' => 'getCanBeSold',
        'has_conference' => 'getHasConference',
        'is_default' => 'getIsDefault',
        'is_demo' => 'getIsDemo',
        'is_exclusive' => 'getIsExclusive',
        'is_prepaid' => 'getIsPrepaid',
        'offer_id' => 'getOfferId',
        'offer_name' => 'getOfferName',
        'offer_technical_description' => 'getOfferTechnicalDescription',
        'prepaid_duration' => 'getPrepaidDuration',
        'profile_id' => 'getProfileId',
        'profile_name' => 'getProfileName',
        'provisioning_needed' => 'getProvisioningNeeded',
        'status' => 'getStatus',
        'subscription_id' => 'getSubscriptionId',
        'zuora_offer_id' => 'getZuoraOfferId',
        'zuora_product_rate_plan_charge_id' => 'getZuoraProductRatePlanChargeId',
        'zuora_product_rate_plan_id' => 'getZuoraProductRatePlanId'
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

    const BUSINESS_MODEL_NB_USERS = 'nb_users';
    const BUSINESS_MODEL_USAGE = 'usage';
    const BUSINESS_MODEL_FLAT_FEE = 'flat_fee';
    const BUSINESS_MODEL_NONE = 'none';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getBusinessModelAllowableValues()
    {
        return [
            self::BUSINESS_MODEL_NB_USERS,
            self::BUSINESS_MODEL_USAGE,
            self::BUSINESS_MODEL_FLAT_FEE,
            self::BUSINESS_MODEL_NONE,
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
        $this->container['assignation_date'] = isset($data['assignation_date']) ? $data['assignation_date'] : null;
        $this->container['business_model'] = isset($data['business_model']) ? $data['business_model'] : 'none';
        $this->container['business_specific'] = isset($data['business_specific']) ? $data['business_specific'] : null;
        $this->container['can_be_sold'] = isset($data['can_be_sold']) ? $data['can_be_sold'] : null;
        $this->container['has_conference'] = isset($data['has_conference']) ? $data['has_conference'] : null;
        $this->container['is_default'] = isset($data['is_default']) ? $data['is_default'] : null;
        $this->container['is_demo'] = isset($data['is_demo']) ? $data['is_demo'] : null;
        $this->container['is_exclusive'] = isset($data['is_exclusive']) ? $data['is_exclusive'] : null;
        $this->container['is_prepaid'] = isset($data['is_prepaid']) ? $data['is_prepaid'] : null;
        $this->container['offer_id'] = isset($data['offer_id']) ? $data['offer_id'] : null;
        $this->container['offer_name'] = isset($data['offer_name']) ? $data['offer_name'] : null;
        $this->container['offer_technical_description'] = isset($data['offer_technical_description']) ? $data['offer_technical_description'] : null;
        $this->container['prepaid_duration'] = isset($data['prepaid_duration']) ? $data['prepaid_duration'] : null;
        $this->container['profile_id'] = isset($data['profile_id']) ? $data['profile_id'] : null;
        $this->container['profile_name'] = isset($data['profile_name']) ? $data['profile_name'] : null;
        $this->container['provisioning_needed'] = isset($data['provisioning_needed']) ? $data['provisioning_needed'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['subscription_id'] = isset($data['subscription_id']) ? $data['subscription_id'] : null;
        $this->container['zuora_offer_id'] = isset($data['zuora_offer_id']) ? $data['zuora_offer_id'] : null;
        $this->container['zuora_product_rate_plan_charge_id'] = isset($data['zuora_product_rate_plan_charge_id']) ? $data['zuora_product_rate_plan_charge_id'] : null;
        $this->container['zuora_product_rate_plan_id'] = isset($data['zuora_product_rate_plan_id']) ? $data['zuora_product_rate_plan_id'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['assignation_date'] === null) {
            $invalidProperties[] = "'assignation_date' can't be null";
        }
        $allowedValues = $this->getBusinessModelAllowableValues();
        if (!is_null($this->container['business_model']) && !in_array($this->container['business_model'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'business_model', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['can_be_sold'] === null) {
            $invalidProperties[] = "'can_be_sold' can't be null";
        }
        if ($this->container['is_default'] === null) {
            $invalidProperties[] = "'is_default' can't be null";
        }
        if ($this->container['offer_id'] === null) {
            $invalidProperties[] = "'offer_id' can't be null";
        }
        if ($this->container['offer_name'] === null) {
            $invalidProperties[] = "'offer_name' can't be null";
        }
        if (!is_null($this->container['offer_technical_description']) && (mb_strlen($this->container['offer_technical_description']) > 512)) {
            $invalidProperties[] = "invalid value for 'offer_technical_description', the character length must be smaller than or equal to 512.";
        }

        if (!is_null($this->container['offer_technical_description']) && (mb_strlen($this->container['offer_technical_description']) < 1)) {
            $invalidProperties[] = "invalid value for 'offer_technical_description', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['profile_id'] === null) {
            $invalidProperties[] = "'profile_id' can't be null";
        }
        if ($this->container['profile_name'] === null) {
            $invalidProperties[] = "'profile_name' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        if ($this->container['subscription_id'] === null) {
            $invalidProperties[] = "'subscription_id' can't be null";
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
     * Gets assignation_date
     *
     * @return string
     */
    public function getAssignationDate()
    {
        return $this->container['assignation_date'];
    }

    /**
     * Sets assignation_date
     *
     * @param string $assignation_date Date when the subscription was attached to user profile
     *
     * @return $this
     */
    public function setAssignationDate($assignation_date)
    {
        $this->container['assignation_date'] = $assignation_date;

        return $this;
    }

    /**
     * Gets business_model
     *
     * @return string|null
     */
    public function getBusinessModel()
    {
        return $this->container['business_model'];
    }

    /**
     * Sets business_model
     *
     * @param string|null $business_model Indicates the business model associated to this offer (number of users, usage, ...) - `nb_users`: Licencing business model. Subscriptions having this business model are billed according to the number of users bought for it. - `usage`: Subscriptions having this business model are billed based on service consumption (whatever the number of users assigned to the subscription of this offer). - `flat_fee`: Subscriptions having this business model are billed based on a flat fee (same price each month for the company which subscribe to this offer). - `none`: no business model. Should be used for offers which are not sold (like Essential...).
     *
     * @return $this
     */
    public function setBusinessModel($business_model)
    {
        $allowedValues = $this->getBusinessModelAllowableValues();
        if (!is_null($business_model) && !in_array($business_model, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'business_model', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['business_model'] = $business_model;

        return $this;
    }

    /**
     * Gets business_specific
     *
     * @return string[]|null
     */
    public function getBusinessSpecific()
    {
        return $this->container['business_specific'];
    }

    /**
     * Sets business_specific
     *
     * @param string[]|null $business_specific Indicates if the subscription is related to specific(s) business (for verticals like HDS) - `NONE`: This subscription is used if the company does not have a businessSpecific field. - `HDS`: This subscription is used if the company have a businessSpecific HDS (HealthCare).
     *
     * @return $this
     */
    public function setBusinessSpecific($business_specific)
    {
        $this->container['business_specific'] = $business_specific;

        return $this;
    }

    /**
     * Gets can_be_sold
     *
     * @return bool
     */
    public function getCanBeSold()
    {
        return $this->container['can_be_sold'];
    }

    /**
     * Sets can_be_sold
     *
     * @param bool $can_be_sold Indicates if the offer is billed. <br/> Some offers will not be billed (Essential, Demo, ...).
     *
     * @return $this
     */
    public function setCanBeSold($can_be_sold)
    {
        $this->container['can_be_sold'] = $can_be_sold;

        return $this;
    }

    /**
     * Gets has_conference
     *
     * @return bool|null
     */
    public function getHasConference()
    {
        return $this->container['has_conference'];
    }

    /**
     * Sets has_conference
     *
     * @param bool|null $has_conference Indicates if the profile contains conference services
     *
     * @return $this
     */
    public function setHasConference($has_conference)
    {
        $this->container['has_conference'] = $has_conference;

        return $this;
    }

    /**
     * Gets is_default
     *
     * @return bool
     */
    public function getIsDefault()
    {
        return $this->container['is_default'];
    }

    /**
     * Sets is_default
     *
     * @param bool $is_default Indicates if this profile is linked to user's company's subscription to default offer (i.e. Essential)
     *
     * @return $this
     */
    public function setIsDefault($is_default)
    {
        $this->container['is_default'] = $is_default;

        return $this;
    }

    /**
     * Gets is_demo
     *
     * @return bool|null
     */
    public function getIsDemo()
    {
        return $this->container['is_demo'];
    }

    /**
     * Sets is_demo
     *
     * @param bool|null $is_demo Indicates if the profile is linked to a demo subscription
     *
     * @return $this
     */
    public function setIsDemo($is_demo)
    {
        $this->container['is_demo'] = $is_demo;

        return $this;
    }

    /**
     * Gets is_exclusive
     *
     * @return bool|null
     */
    public function getIsExclusive()
    {
        return $this->container['is_exclusive'];
    }

    /**
     * Sets is_exclusive
     *
     * @param bool|null $is_exclusive Indicates if the offer is exclusive for assignation to a user profile (if the user has already an exclusive offer assigned, it won't be possible to assign a second exclusive offer).
     *
     * @return $this
     */
    public function setIsExclusive($is_exclusive)
    {
        $this->container['is_exclusive'] = $is_exclusive;

        return $this;
    }

    /**
     * Gets is_prepaid
     *
     * @return bool|null
     */
    public function getIsPrepaid()
    {
        return $this->container['is_prepaid'];
    }

    /**
     * Sets is_prepaid
     *
     * @param bool|null $is_prepaid Indicates if the profile is linked to a prepaid subscription
     *
     * @return $this
     */
    public function setIsPrepaid($is_prepaid)
    {
        $this->container['is_prepaid'] = $is_prepaid;

        return $this;
    }

    /**
     * Gets offer_id
     *
     * @return string
     */
    public function getOfferId()
    {
        return $this->container['offer_id'];
    }

    /**
     * Sets offer_id
     *
     * @param string $offer_id Id of the Rainbow offer to which company subscription is attached
     *
     * @return $this
     */
    public function setOfferId($offer_id)
    {
        $this->container['offer_id'] = $offer_id;

        return $this;
    }

    /**
     * Gets offer_name
     *
     * @return string
     */
    public function getOfferName()
    {
        return $this->container['offer_name'];
    }

    /**
     * Sets offer_name
     *
     * @param string $offer_name Name of the Rainbow offer to which company subscription is attached
     *
     * @return $this
     */
    public function setOfferName($offer_name)
    {
        $this->container['offer_name'] = $offer_name;

        return $this;
    }

    /**
     * Gets offer_technical_description
     *
     * @return string|null
     */
    public function getOfferTechnicalDescription()
    {
        return $this->container['offer_technical_description'];
    }

    /**
     * Sets offer_technical_description
     *
     * @param string|null $offer_technical_description Offer technical description.
     *
     * @return $this
     */
    public function setOfferTechnicalDescription($offer_technical_description)
    {
        if (!is_null($offer_technical_description) && (mb_strlen($offer_technical_description) > 512)) {
            throw new \InvalidArgumentException('invalid length for $offer_technical_description when calling GetRenewSuccessProfiles., must be smaller than or equal to 512.');
        }
        if (!is_null($offer_technical_description) && (mb_strlen($offer_technical_description) < 1)) {
            throw new \InvalidArgumentException('invalid length for $offer_technical_description when calling GetRenewSuccessProfiles., must be bigger than or equal to 1.');
        }

        $this->container['offer_technical_description'] = $offer_technical_description;

        return $this;
    }

    /**
     * Gets prepaid_duration
     *
     * @return float|null
     */
    public function getPrepaidDuration()
    {
        return $this->container['prepaid_duration'];
    }

    /**
     * Sets prepaid_duration
     *
     * @param float|null $prepaid_duration Prepaid subscription duration (in month). <br/>Only set if `isPrepaid` is true.
     *
     * @return $this
     */
    public function setPrepaidDuration($prepaid_duration)
    {
        $this->container['prepaid_duration'] = $prepaid_duration;

        return $this;
    }

    /**
     * Gets profile_id
     *
     * @return string
     */
    public function getProfileId()
    {
        return $this->container['profile_id'];
    }

    /**
     * Sets profile_id
     *
     * @param string $profile_id Id of the Rainbow profile to which company subscription is attached
     *
     * @return $this
     */
    public function setProfileId($profile_id)
    {
        $this->container['profile_id'] = $profile_id;

        return $this;
    }

    /**
     * Gets profile_name
     *
     * @return string
     */
    public function getProfileName()
    {
        return $this->container['profile_name'];
    }

    /**
     * Sets profile_name
     *
     * @param string $profile_name Name of the Rainbow profile to which company subscription is attached
     *
     * @return $this
     */
    public function setProfileName($profile_name)
    {
        $this->container['profile_name'] = $profile_name;

        return $this;
    }

    /**
     * Gets provisioning_needed
     *
     * @return \Ale\Rainbow\S2S\Client\AuthPortal\Model\GetRenewSuccessProvisioningNeeded[]|null
     */
    public function getProvisioningNeeded()
    {
        return $this->container['provisioning_needed'];
    }

    /**
     * Sets provisioning_needed
     *
     * @param \Ale\Rainbow\S2S\Client\AuthPortal\Model\GetRenewSuccessProvisioningNeeded[]|null $provisioning_needed Array of Objects which indicates if account must be provisioned on other internal components when subscribing to this offer.
     *
     * @return $this
     */
    public function setProvisioningNeeded($provisioning_needed)
    {
        $this->container['provisioning_needed'] = $provisioning_needed;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string $status Status of the company subscription to which user profile is assigned <br/> <br/> Possible values: <code>active</code>, <code>alerting</code>, <code>hold</code>, <code>terminated</code>
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets subscription_id
     *
     * @return string
     */
    public function getSubscriptionId()
    {
        return $this->container['subscription_id'];
    }

    /**
     * Sets subscription_id
     *
     * @param string $subscription_id Id of company subscription to which user profile is assigned (one of the subscriptions available to user's company)
     *
     * @return $this
     */
    public function setSubscriptionId($subscription_id)
    {
        $this->container['subscription_id'] = $subscription_id;

        return $this;
    }

    /**
     * Gets zuora_offer_id
     *
     * @return string|null
     */
    public function getZuoraOfferId()
    {
        return $this->container['zuora_offer_id'];
    }

    /**
     * Sets zuora_offer_id
     *
     * @param string|null $zuora_offer_id ID of the related offer in Zuora (if offer can be sold)
     *
     * @return $this
     */
    public function setZuoraOfferId($zuora_offer_id)
    {
        $this->container['zuora_offer_id'] = $zuora_offer_id;

        return $this;
    }

    /**
     * Gets zuora_product_rate_plan_charge_id
     *
     * @return string|null
     */
    public function getZuoraProductRatePlanChargeId()
    {
        return $this->container['zuora_product_rate_plan_charge_id'];
    }

    /**
     * Sets zuora_product_rate_plan_charge_id
     *
     * @param string|null $zuora_product_rate_plan_charge_id ID of the ProductRatePlanChargeId used in Zuora (if offer can be sold)
     *
     * @return $this
     */
    public function setZuoraProductRatePlanChargeId($zuora_product_rate_plan_charge_id)
    {
        $this->container['zuora_product_rate_plan_charge_id'] = $zuora_product_rate_plan_charge_id;

        return $this;
    }

    /**
     * Gets zuora_product_rate_plan_id
     *
     * @return string|null
     */
    public function getZuoraProductRatePlanId()
    {
        return $this->container['zuora_product_rate_plan_id'];
    }

    /**
     * Sets zuora_product_rate_plan_id
     *
     * @param string|null $zuora_product_rate_plan_id ID of the ProductRatePlanId to used in Zuora (if offer can be sold)
     *
     * @return $this
     */
    public function setZuoraProductRatePlanId($zuora_product_rate_plan_id)
    {
        $this->container['zuora_product_rate_plan_id'] = $zuora_product_rate_plan_id;

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


