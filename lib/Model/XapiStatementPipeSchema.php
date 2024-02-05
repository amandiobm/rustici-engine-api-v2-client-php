<?php
/**
 * XapiStatementPipeSchema
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
 * XapiStatementPipeSchema Class Doc Comment
 *
 * @category Class
 * @package  RusticiSoftware\Engine\V2
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class XapiStatementPipeSchema implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'XapiStatementPipeSchema';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
        'last_forwarded_statement_date' => 'string',
        'more_url' => 'string',
        'attempts' => 'int',
        'visible_after' => 'string',
        'source' => '\RusticiSoftware\Engine\V2\Model\XapiEndpointSchema',
        'target' => '\RusticiSoftware\Engine\V2\Model\XapiEndpointSchema',
        'local_source' => '\RusticiSoftware\Engine\V2\Model\XapiSelfSourcedPipeSchema'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
        'last_forwarded_statement_date' => null,
        'more_url' => null,
        'attempts' => 'int32',
        'visible_after' => null,
        'source' => null,
        'target' => null,
        'local_source' => null
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
        'id' => 'id',
        'last_forwarded_statement_date' => 'lastForwardedStatementDate',
        'more_url' => 'moreUrl',
        'attempts' => 'attempts',
        'visible_after' => 'visibleAfter',
        'source' => 'source',
        'target' => 'target',
        'local_source' => 'localSource'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'last_forwarded_statement_date' => 'setLastForwardedStatementDate',
        'more_url' => 'setMoreUrl',
        'attempts' => 'setAttempts',
        'visible_after' => 'setVisibleAfter',
        'source' => 'setSource',
        'target' => 'setTarget',
        'local_source' => 'setLocalSource'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'last_forwarded_statement_date' => 'getLastForwardedStatementDate',
        'more_url' => 'getMoreUrl',
        'attempts' => 'getAttempts',
        'visible_after' => 'getVisibleAfter',
        'source' => 'getSource',
        'target' => 'getTarget',
        'local_source' => 'getLocalSource'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['last_forwarded_statement_date'] = isset($data['last_forwarded_statement_date']) ? $data['last_forwarded_statement_date'] : null;
        $this->container['more_url'] = isset($data['more_url']) ? $data['more_url'] : null;
        $this->container['attempts'] = isset($data['attempts']) ? $data['attempts'] : null;
        $this->container['visible_after'] = isset($data['visible_after']) ? $data['visible_after'] : null;
        $this->container['source'] = isset($data['source']) ? $data['source'] : null;
        $this->container['target'] = isset($data['target']) ? $data['target'] : null;
        $this->container['local_source'] = isset($data['local_source']) ? $data['local_source'] : null;
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
     * @param string $id id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets last_forwarded_statement_date
     *
     * @return string
     */
    public function getLastForwardedStatementDate()
    {
        return $this->container['last_forwarded_statement_date'];
    }

    /**
     * Sets last_forwarded_statement_date
     *
     * @param string $last_forwarded_statement_date last_forwarded_statement_date
     *
     * @return $this
     */
    public function setLastForwardedStatementDate($last_forwarded_statement_date)
    {
        $this->container['last_forwarded_statement_date'] = $last_forwarded_statement_date;

        return $this;
    }

    /**
     * Gets more_url
     *
     * @return string
     */
    public function getMoreUrl()
    {
        return $this->container['more_url'];
    }

    /**
     * Sets more_url
     *
     * @param string $more_url more_url
     *
     * @return $this
     */
    public function setMoreUrl($more_url)
    {
        $this->container['more_url'] = $more_url;

        return $this;
    }

    /**
     * Gets attempts
     *
     * @return int
     */
    public function getAttempts()
    {
        return $this->container['attempts'];
    }

    /**
     * Sets attempts
     *
     * @param int $attempts attempts
     *
     * @return $this
     */
    public function setAttempts($attempts)
    {
        $this->container['attempts'] = $attempts;

        return $this;
    }

    /**
     * Gets visible_after
     *
     * @return string
     */
    public function getVisibleAfter()
    {
        return $this->container['visible_after'];
    }

    /**
     * Sets visible_after
     *
     * @param string $visible_after visible_after
     *
     * @return $this
     */
    public function setVisibleAfter($visible_after)
    {
        $this->container['visible_after'] = $visible_after;

        return $this;
    }

    /**
     * Gets source
     *
     * @return \RusticiSoftware\Engine\V2\Model\XapiEndpointSchema
     */
    public function getSource()
    {
        return $this->container['source'];
    }

    /**
     * Sets source
     *
     * @param \RusticiSoftware\Engine\V2\Model\XapiEndpointSchema $source source
     *
     * @return $this
     */
    public function setSource($source)
    {
        $this->container['source'] = $source;

        return $this;
    }

    /**
     * Gets target
     *
     * @return \RusticiSoftware\Engine\V2\Model\XapiEndpointSchema
     */
    public function getTarget()
    {
        return $this->container['target'];
    }

    /**
     * Sets target
     *
     * @param \RusticiSoftware\Engine\V2\Model\XapiEndpointSchema $target target
     *
     * @return $this
     */
    public function setTarget($target)
    {
        $this->container['target'] = $target;

        return $this;
    }

    /**
     * Gets local_source
     *
     * @return \RusticiSoftware\Engine\V2\Model\XapiSelfSourcedPipeSchema
     */
    public function getLocalSource()
    {
        return $this->container['local_source'];
    }

    /**
     * Sets local_source
     *
     * @param \RusticiSoftware\Engine\V2\Model\XapiSelfSourcedPipeSchema $local_source local_source
     *
     * @return $this
     */
    public function setLocalSource($local_source)
    {
        $this->container['local_source'] = $local_source;

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


