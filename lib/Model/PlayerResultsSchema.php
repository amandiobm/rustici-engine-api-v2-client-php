<?php
/**
 * PlayerResultsSchema
 *
 * PHP version 5
 *
 * @category Class
 * @package  RusticiSoftware\Engine\V2
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

namespace RusticiSoftware\Engine\V2\Model;

use \ArrayAccess;
use \RusticiSoftware\Engine\V2\ObjectSerializer;

/**
 * PlayerResultsSchema Class Doc Comment
 *
 * @category Class
 * @package  RusticiSoftware\Engine\V2
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PlayerResultsSchema implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'PlayerResultsSchema';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'is_exit_player' => 'bool',
        'registration_id' => 'string',
        'instance' => 'int',
        'sequence' => 'int',
        'legacy_data' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'is_exit_player' => null,
        'registration_id' => null,
        'instance' => 'int32',
        'sequence' => 'int32',
        'legacy_data' => null
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
        'is_exit_player' => 'isExitPlayer',
        'registration_id' => 'registrationId',
        'instance' => 'instance',
        'sequence' => 'sequence',
        'legacy_data' => 'legacyData'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'is_exit_player' => 'setIsExitPlayer',
        'registration_id' => 'setRegistrationId',
        'instance' => 'setInstance',
        'sequence' => 'setSequence',
        'legacy_data' => 'setLegacyData'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'is_exit_player' => 'getIsExitPlayer',
        'registration_id' => 'getRegistrationId',
        'instance' => 'getInstance',
        'sequence' => 'getSequence',
        'legacy_data' => 'getLegacyData'
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
        $this->container['is_exit_player'] = isset($data['is_exit_player']) ? $data['is_exit_player'] : null;
        $this->container['registration_id'] = isset($data['registration_id']) ? $data['registration_id'] : null;
        $this->container['instance'] = isset($data['instance']) ? $data['instance'] : null;
        $this->container['sequence'] = isset($data['sequence']) ? $data['sequence'] : null;
        $this->container['legacy_data'] = isset($data['legacy_data']) ? $data['legacy_data'] : null;
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
     * Gets is_exit_player
     *
     * @return bool
     */
    public function getIsExitPlayer()
    {
        return $this->container['is_exit_player'];
    }

    /**
     * Sets is_exit_player
     *
     * @param bool $is_exit_player is_exit_player
     *
     * @return $this
     */
    public function setIsExitPlayer($is_exit_player)
    {
        $this->container['is_exit_player'] = $is_exit_player;

        return $this;
    }

    /**
     * Gets registration_id
     *
     * @return string
     */
    public function getRegistrationId()
    {
        return $this->container['registration_id'];
    }

    /**
     * Sets registration_id
     *
     * @param string $registration_id registration_id
     *
     * @return $this
     */
    public function setRegistrationId($registration_id)
    {
        $this->container['registration_id'] = $registration_id;

        return $this;
    }

    /**
     * Gets instance
     *
     * @return int
     */
    public function getInstance()
    {
        return $this->container['instance'];
    }

    /**
     * Sets instance
     *
     * @param int $instance instance
     *
     * @return $this
     */
    public function setInstance($instance)
    {
        $this->container['instance'] = $instance;

        return $this;
    }

    /**
     * Gets sequence
     *
     * @return int
     */
    public function getSequence()
    {
        return $this->container['sequence'];
    }

    /**
     * Sets sequence
     *
     * @param int $sequence sequence
     *
     * @return $this
     */
    public function setSequence($sequence)
    {
        $this->container['sequence'] = $sequence;

        return $this;
    }

    /**
     * Gets legacy_data
     *
     * @return string
     */
    public function getLegacyData()
    {
        return $this->container['legacy_data'];
    }

    /**
     * Sets legacy_data
     *
     * @param string $legacy_data legacy_data
     *
     * @return $this
     */
    public function setLegacyData($legacy_data)
    {
        $this->container['legacy_data'] = $legacy_data;

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


