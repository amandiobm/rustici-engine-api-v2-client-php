<?php
/**
 * NotificationFailedBody
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
 * NotificationFailedBody Class Doc Comment
 *
 * @category Class
 * @package  RusticiSoftware\Engine\V2
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class NotificationFailedBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'NotificationFailedBody';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'subscription_definition' => '\RusticiSoftware\Engine\V2\Model\SubscriptionDefinitionSchema',
        'message' => '\RusticiSoftware\Engine\V2\Model\EventMessage',
        'error_message' => 'string',
        'error_reference' => 'string',
        'http_response_code' => 'int',
        'response_body' => 'object'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'subscription_definition' => null,
        'message' => null,
        'error_message' => null,
        'error_reference' => null,
        'http_response_code' => null,
        'response_body' => null
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
        'subscription_definition' => 'subscriptionDefinition',
        'message' => 'message',
        'error_message' => 'errorMessage',
        'error_reference' => 'errorReference',
        'http_response_code' => 'httpResponseCode',
        'response_body' => 'responseBody'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'subscription_definition' => 'setSubscriptionDefinition',
        'message' => 'setMessage',
        'error_message' => 'setErrorMessage',
        'error_reference' => 'setErrorReference',
        'http_response_code' => 'setHttpResponseCode',
        'response_body' => 'setResponseBody'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'subscription_definition' => 'getSubscriptionDefinition',
        'message' => 'getMessage',
        'error_message' => 'getErrorMessage',
        'error_reference' => 'getErrorReference',
        'http_response_code' => 'getHttpResponseCode',
        'response_body' => 'getResponseBody'
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
        $this->container['subscription_definition'] = isset($data['subscription_definition']) ? $data['subscription_definition'] : null;
        $this->container['message'] = isset($data['message']) ? $data['message'] : null;
        $this->container['error_message'] = isset($data['error_message']) ? $data['error_message'] : null;
        $this->container['error_reference'] = isset($data['error_reference']) ? $data['error_reference'] : null;
        $this->container['http_response_code'] = isset($data['http_response_code']) ? $data['http_response_code'] : null;
        $this->container['response_body'] = isset($data['response_body']) ? $data['response_body'] : null;
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
     * Gets subscription_definition
     *
     * @return \RusticiSoftware\Engine\V2\Model\SubscriptionDefinitionSchema
     */
    public function getSubscriptionDefinition()
    {
        return $this->container['subscription_definition'];
    }

    /**
     * Sets subscription_definition
     *
     * @param \RusticiSoftware\Engine\V2\Model\SubscriptionDefinitionSchema $subscription_definition The subscription whose message failed.
     *
     * @return $this
     */
    public function setSubscriptionDefinition($subscription_definition)
    {
        $this->container['subscription_definition'] = $subscription_definition;

        return $this;
    }

    /**
     * Gets message
     *
     * @return \RusticiSoftware\Engine\V2\Model\EventMessage
     */
    public function getMessage()
    {
        return $this->container['message'];
    }

    /**
     * Sets message
     *
     * @param \RusticiSoftware\Engine\V2\Model\EventMessage $message The contents of the message which failed.
     *
     * @return $this
     */
    public function setMessage($message)
    {
        $this->container['message'] = $message;

        return $this;
    }

    /**
     * Gets error_message
     *
     * @return string
     */
    public function getErrorMessage()
    {
        return $this->container['error_message'];
    }

    /**
     * Sets error_message
     *
     * @param string $error_message The error in Engine which caused the failure.
     *
     * @return $this
     */
    public function setErrorMessage($error_message)
    {
        $this->container['error_message'] = $error_message;

        return $this;
    }

    /**
     * Gets error_reference
     *
     * @return string
     */
    public function getErrorReference()
    {
        return $this->container['error_reference'];
    }

    /**
     * Sets error_reference
     *
     * @param string $error_reference A reference to the error in Engine.
     *
     * @return $this
     */
    public function setErrorReference($error_reference)
    {
        $this->container['error_reference'] = $error_reference;

        return $this;
    }

    /**
     * Gets http_response_code
     *
     * @return int
     */
    public function getHttpResponseCode()
    {
        return $this->container['http_response_code'];
    }

    /**
     * Sets http_response_code
     *
     * @param int $http_response_code The response code Engine recieved after attempting to send.
     *
     * @return $this
     */
    public function setHttpResponseCode($http_response_code)
    {
        $this->container['http_response_code'] = $http_response_code;

        return $this;
    }

    /**
     * Gets response_body
     *
     * @return object
     */
    public function getResponseBody()
    {
        return $this->container['response_body'];
    }

    /**
     * Sets response_body
     *
     * @param object $response_body The response body Engine recieved after attempting to send.
     *
     * @return $this
     */
    public function setResponseBody($response_body)
    {
        $this->container['response_body'] = $response_body;

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


