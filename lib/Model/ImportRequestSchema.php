<?php
/**
 * ImportRequestSchema
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

namespace RusticiSoftware\Engine\V2\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * ImportRequestSchema Class Doc Comment
 *
 * @category Class
 * @description Request to import a new course. Exactly one of fetchRequest, referenceRequest, mediaFileReferenceRequest, connectorReferenceRequest, adHocReferenceRequest, or lti11LinkReferenceRequest must be supplied, depending on the desired import behavior.
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ImportRequestSchema implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ImportRequestSchema';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'fetch_request' => '\Swagger\Client\Model\ImportFetchRequestSchema',
        'reference_request' => '\Swagger\Client\Model\ImportReferenceRequestSchema',
        'media_file_reference_request' => '\Swagger\Client\Model\ImportMediaFileReferenceRequestSchema',
        'connector_reference_request' => '\Swagger\Client\Model\ImportConnectorRequestSchema',
        'ad_hoc_reference_request' => '\Swagger\Client\Model\ImportAdHocReferenceRequestSchema',
        'lti11_link_reference_request' => '\Swagger\Client\Model\ImportLti11LinkReferenceRequestSchema'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'fetch_request' => null,
        'reference_request' => null,
        'media_file_reference_request' => null,
        'connector_reference_request' => null,
        'ad_hoc_reference_request' => null,
        'lti11_link_reference_request' => null
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
        'fetch_request' => 'fetchRequest',
        'reference_request' => 'referenceRequest',
        'media_file_reference_request' => 'mediaFileReferenceRequest',
        'connector_reference_request' => 'connectorReferenceRequest',
        'ad_hoc_reference_request' => 'adHocReferenceRequest',
        'lti11_link_reference_request' => 'lti11LinkReferenceRequest'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'fetch_request' => 'setFetchRequest',
        'reference_request' => 'setReferenceRequest',
        'media_file_reference_request' => 'setMediaFileReferenceRequest',
        'connector_reference_request' => 'setConnectorReferenceRequest',
        'ad_hoc_reference_request' => 'setAdHocReferenceRequest',
        'lti11_link_reference_request' => 'setLti11LinkReferenceRequest'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'fetch_request' => 'getFetchRequest',
        'reference_request' => 'getReferenceRequest',
        'media_file_reference_request' => 'getMediaFileReferenceRequest',
        'connector_reference_request' => 'getConnectorReferenceRequest',
        'ad_hoc_reference_request' => 'getAdHocReferenceRequest',
        'lti11_link_reference_request' => 'getLti11LinkReferenceRequest'
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
        $this->container['fetch_request'] = isset($data['fetch_request']) ? $data['fetch_request'] : null;
        $this->container['reference_request'] = isset($data['reference_request']) ? $data['reference_request'] : null;
        $this->container['media_file_reference_request'] = isset($data['media_file_reference_request']) ? $data['media_file_reference_request'] : null;
        $this->container['connector_reference_request'] = isset($data['connector_reference_request']) ? $data['connector_reference_request'] : null;
        $this->container['ad_hoc_reference_request'] = isset($data['ad_hoc_reference_request']) ? $data['ad_hoc_reference_request'] : null;
        $this->container['lti11_link_reference_request'] = isset($data['lti11_link_reference_request']) ? $data['lti11_link_reference_request'] : null;
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
     * Gets fetch_request
     *
     * @return \Swagger\Client\Model\ImportFetchRequestSchema
     */
    public function getFetchRequest()
    {
        return $this->container['fetch_request'];
    }

    /**
     * Sets fetch_request
     *
     * @param \Swagger\Client\Model\ImportFetchRequestSchema $fetch_request fetch_request
     *
     * @return $this
     */
    public function setFetchRequest($fetch_request)
    {
        $this->container['fetch_request'] = $fetch_request;

        return $this;
    }

    /**
     * Gets reference_request
     *
     * @return \Swagger\Client\Model\ImportReferenceRequestSchema
     */
    public function getReferenceRequest()
    {
        return $this->container['reference_request'];
    }

    /**
     * Sets reference_request
     *
     * @param \Swagger\Client\Model\ImportReferenceRequestSchema $reference_request reference_request
     *
     * @return $this
     */
    public function setReferenceRequest($reference_request)
    {
        $this->container['reference_request'] = $reference_request;

        return $this;
    }

    /**
     * Gets media_file_reference_request
     *
     * @return \Swagger\Client\Model\ImportMediaFileReferenceRequestSchema
     */
    public function getMediaFileReferenceRequest()
    {
        return $this->container['media_file_reference_request'];
    }

    /**
     * Sets media_file_reference_request
     *
     * @param \Swagger\Client\Model\ImportMediaFileReferenceRequestSchema $media_file_reference_request media_file_reference_request
     *
     * @return $this
     */
    public function setMediaFileReferenceRequest($media_file_reference_request)
    {
        $this->container['media_file_reference_request'] = $media_file_reference_request;

        return $this;
    }

    /**
     * Gets connector_reference_request
     *
     * @return \Swagger\Client\Model\ImportConnectorRequestSchema
     */
    public function getConnectorReferenceRequest()
    {
        return $this->container['connector_reference_request'];
    }

    /**
     * Sets connector_reference_request
     *
     * @param \Swagger\Client\Model\ImportConnectorRequestSchema $connector_reference_request connector_reference_request
     *
     * @return $this
     */
    public function setConnectorReferenceRequest($connector_reference_request)
    {
        $this->container['connector_reference_request'] = $connector_reference_request;

        return $this;
    }

    /**
     * Gets ad_hoc_reference_request
     *
     * @return \Swagger\Client\Model\ImportAdHocReferenceRequestSchema
     */
    public function getAdHocReferenceRequest()
    {
        return $this->container['ad_hoc_reference_request'];
    }

    /**
     * Sets ad_hoc_reference_request
     *
     * @param \Swagger\Client\Model\ImportAdHocReferenceRequestSchema $ad_hoc_reference_request ad_hoc_reference_request
     *
     * @return $this
     */
    public function setAdHocReferenceRequest($ad_hoc_reference_request)
    {
        $this->container['ad_hoc_reference_request'] = $ad_hoc_reference_request;

        return $this;
    }

    /**
     * Gets lti11_link_reference_request
     *
     * @return \Swagger\Client\Model\ImportLti11LinkReferenceRequestSchema
     */
    public function getLti11LinkReferenceRequest()
    {
        return $this->container['lti11_link_reference_request'];
    }

    /**
     * Sets lti11_link_reference_request
     *
     * @param \Swagger\Client\Model\ImportLti11LinkReferenceRequestSchema $lti11_link_reference_request lti11_link_reference_request
     *
     * @return $this
     */
    public function setLti11LinkReferenceRequest($lti11_link_reference_request)
    {
        $this->container['lti11_link_reference_request'] = $lti11_link_reference_request;

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


