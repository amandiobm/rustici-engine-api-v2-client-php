<?php
/**
 * LaunchLinkRequestSchema
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Rustici Engine API
 *
 * Rustici Engine API
 *
 * OpenAPI spec version: 2.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.39
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * LaunchLinkRequestSchema Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class LaunchLinkRequestSchema implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'LaunchLinkRequestSchema';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'expiry' => 'int',
        'redirect_on_exit_url' => 'string',
        'tracking' => 'bool',
        'start_sco' => 'string',
        'additional_values' => '\Swagger\Client\Model\ItemValuePairSchema[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'expiry' => 'int32',
        'redirect_on_exit_url' => null,
        'tracking' => null,
        'start_sco' => null,
        'additional_values' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'expiry' => 'expiry',
        'redirect_on_exit_url' => 'redirectOnExitUrl',
        'tracking' => 'tracking',
        'start_sco' => 'startSco',
        'additional_values' => 'additionalValues'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'expiry' => 'setExpiry',
        'redirect_on_exit_url' => 'setRedirectOnExitUrl',
        'tracking' => 'setTracking',
        'start_sco' => 'setStartSco',
        'additional_values' => 'setAdditionalValues'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'expiry' => 'getExpiry',
        'redirect_on_exit_url' => 'getRedirectOnExitUrl',
        'tracking' => 'getTracking',
        'start_sco' => 'getStartSco',
        'additional_values' => 'getAdditionalValues'
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
        return self::$swaggerModelName;
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
        $this->container['expiry'] = isset($data['expiry']) ? $data['expiry'] : 120;
        $this->container['redirect_on_exit_url'] = isset($data['redirect_on_exit_url']) ? $data['redirect_on_exit_url'] : null;
        $this->container['tracking'] = isset($data['tracking']) ? $data['tracking'] : true;
        $this->container['start_sco'] = isset($data['start_sco']) ? $data['start_sco'] : null;
        $this->container['additional_values'] = isset($data['additional_values']) ? $data['additional_values'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

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
     * Gets expiry
     *
     * @return int
     */
    public function getExpiry()
    {
        return $this->container['expiry'];
    }

    /**
     * Sets expiry
     *
     * @param int $expiry The number of seconds from now that this link will expire in. This parameter should only be specified if the setting 'ApiUseSignedLaunchLinks' is configured with a value of 'true'.
     *
     * @return $this
     */
    public function setExpiry($expiry)
    {
        $this->container['expiry'] = $expiry;

        return $this;
    }

    /**
     * Gets redirect_on_exit_url
     *
     * @return string
     */
    public function getRedirectOnExitUrl()
    {
        return $this->container['redirect_on_exit_url'];
    }

    /**
     * Sets redirect_on_exit_url
     *
     * @param string $redirect_on_exit_url The URL the application should redirect to when the learner exits a course. If not specified, configured value will be used.
     *
     * @return $this
     */
    public function setRedirectOnExitUrl($redirect_on_exit_url)
    {
        $this->container['redirect_on_exit_url'] = $redirect_on_exit_url;

        return $this;
    }

    /**
     * Gets tracking
     *
     * @return bool
     */
    public function getTracking()
    {
        return $this->container['tracking'];
    }

    /**
     * Sets tracking
     *
     * @param bool $tracking Should this launch be tracked? If false, Engine will avoid tracking to the extent possible for the standard being used.
     *
     * @return $this
     */
    public function setTracking($tracking)
    {
        $this->container['tracking'] = $tracking;

        return $this;
    }

    /**
     * Gets start_sco
     *
     * @return string
     */
    public function getStartSco()
    {
        return $this->container['start_sco'];
    }

    /**
     * Sets start_sco
     *
     * @param string $start_sco For SCORM, SCO identifier to override launch, overriding the normal sequencing.
     *
     * @return $this
     */
    public function setStartSco($start_sco)
    {
        $this->container['start_sco'] = $start_sco;

        return $this;
    }

    /**
     * Gets additional_values
     *
     * @return \Swagger\Client\Model\ItemValuePairSchema[]
     */
    public function getAdditionalValues()
    {
        return $this->container['additional_values'];
    }

    /**
     * Sets additional_values
     *
     * @param \Swagger\Client\Model\ItemValuePairSchema[] $additional_values additional_values
     *
     * @return $this
     */
    public function setAdditionalValues($additional_values)
    {
        $this->container['additional_values'] = $additional_values;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
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
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


