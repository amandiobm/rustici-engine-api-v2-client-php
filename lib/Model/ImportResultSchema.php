<?php
/**
 * ImportResultSchema
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
 * ImportResultSchema Class Doc Comment
 *
 * @category Class
 * @package  RusticiSoftware\Engine\V2
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ImportResultSchema implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ImportResultSchema';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'web_path_to_course' => 'string',
        'parser_warnings' => 'string[]',
        'course_languages' => 'string[]',
        'course' => '\RusticiSoftware\Engine\V2\Model\CourseSchema'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'web_path_to_course' => null,
        'parser_warnings' => null,
        'course_languages' => null,
        'course' => null
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
        'web_path_to_course' => 'webPathToCourse',
        'parser_warnings' => 'parserWarnings',
        'course_languages' => 'courseLanguages',
        'course' => 'course'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'web_path_to_course' => 'setWebPathToCourse',
        'parser_warnings' => 'setParserWarnings',
        'course_languages' => 'setCourseLanguages',
        'course' => 'setCourse'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'web_path_to_course' => 'getWebPathToCourse',
        'parser_warnings' => 'getParserWarnings',
        'course_languages' => 'getCourseLanguages',
        'course' => 'getCourse'
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
        $this->container['web_path_to_course'] = isset($data['web_path_to_course']) ? $data['web_path_to_course'] : null;
        $this->container['parser_warnings'] = isset($data['parser_warnings']) ? $data['parser_warnings'] : null;
        $this->container['course_languages'] = isset($data['course_languages']) ? $data['course_languages'] : null;
        $this->container['course'] = isset($data['course']) ? $data['course'] : null;
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
     * Gets web_path_to_course
     *
     * @return string
     */
    public function getWebPathToCourse()
    {
        return $this->container['web_path_to_course'];
    }

    /**
     * Sets web_path_to_course
     *
     * @param string $web_path_to_course web path to this course
     *
     * @return $this
     */
    public function setWebPathToCourse($web_path_to_course)
    {
        $this->container['web_path_to_course'] = $web_path_to_course;

        return $this;
    }

    /**
     * Gets parser_warnings
     *
     * @return string[]
     */
    public function getParserWarnings()
    {
        return $this->container['parser_warnings'];
    }

    /**
     * Sets parser_warnings
     *
     * @param string[] $parser_warnings parser_warnings
     *
     * @return $this
     */
    public function setParserWarnings($parser_warnings)
    {
        $this->container['parser_warnings'] = $parser_warnings;

        return $this;
    }

    /**
     * Gets course_languages
     *
     * @return string[]
     */
    public function getCourseLanguages()
    {
        return $this->container['course_languages'];
    }

    /**
     * Sets course_languages
     *
     * @param string[] $course_languages course_languages
     *
     * @return $this
     */
    public function setCourseLanguages($course_languages)
    {
        $this->container['course_languages'] = $course_languages;

        return $this;
    }

    /**
     * Gets course
     *
     * @return \RusticiSoftware\Engine\V2\Model\CourseSchema
     */
    public function getCourse()
    {
        return $this->container['course'];
    }

    /**
     * Sets course
     *
     * @param \RusticiSoftware\Engine\V2\Model\CourseSchema $course course
     *
     * @return $this
     */
    public function setCourse($course)
    {
        $this->container['course'] = $course;

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


