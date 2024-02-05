<?php
/**
 * PlayerConfigurationSchema
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
 * PlayerConfigurationSchema Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PlayerConfigurationSchema implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'PlayerConfigurationSchema';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'registration_id' => 'string',
        'instance' => 'int',
        'course_id' => 'string',
        'is_tracking' => 'bool',
        'force_frameset' => 'bool',
        'force_review' => 'bool',
        'start_sco' => 'string',
        'web_path' => 'string',
        'manifest_dir_path' => 'string',
        'redirect_on_exit_url' => 'string',
        'remote_url_key' => 'string',
        'width' => 'int',
        'height' => 'int',
        'left' => 'int',
        'top' => 'int',
        'player' => 'string',
        'for_offline' => 'bool',
        'culture_code' => 'string',
        'include_registration' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'registration_id' => null,
        'instance' => 'int32',
        'course_id' => null,
        'is_tracking' => null,
        'force_frameset' => null,
        'force_review' => null,
        'start_sco' => null,
        'web_path' => null,
        'manifest_dir_path' => null,
        'redirect_on_exit_url' => null,
        'remote_url_key' => null,
        'width' => 'int32',
        'height' => 'int32',
        'left' => 'int32',
        'top' => 'int32',
        'player' => null,
        'for_offline' => null,
        'culture_code' => null,
        'include_registration' => null
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
        'registration_id' => 'registrationId',
        'instance' => 'instance',
        'course_id' => 'courseId',
        'is_tracking' => 'isTracking',
        'force_frameset' => 'forceFrameset',
        'force_review' => 'forceReview',
        'start_sco' => 'startSco',
        'web_path' => 'webPath',
        'manifest_dir_path' => 'manifestDirPath',
        'redirect_on_exit_url' => 'redirectOnExitUrl',
        'remote_url_key' => 'remoteUrlKey',
        'width' => 'width',
        'height' => 'height',
        'left' => 'left',
        'top' => 'top',
        'player' => 'player',
        'for_offline' => 'forOffline',
        'culture_code' => 'cultureCode',
        'include_registration' => 'includeRegistration'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'registration_id' => 'setRegistrationId',
        'instance' => 'setInstance',
        'course_id' => 'setCourseId',
        'is_tracking' => 'setIsTracking',
        'force_frameset' => 'setForceFrameset',
        'force_review' => 'setForceReview',
        'start_sco' => 'setStartSco',
        'web_path' => 'setWebPath',
        'manifest_dir_path' => 'setManifestDirPath',
        'redirect_on_exit_url' => 'setRedirectOnExitUrl',
        'remote_url_key' => 'setRemoteUrlKey',
        'width' => 'setWidth',
        'height' => 'setHeight',
        'left' => 'setLeft',
        'top' => 'setTop',
        'player' => 'setPlayer',
        'for_offline' => 'setForOffline',
        'culture_code' => 'setCultureCode',
        'include_registration' => 'setIncludeRegistration'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'registration_id' => 'getRegistrationId',
        'instance' => 'getInstance',
        'course_id' => 'getCourseId',
        'is_tracking' => 'getIsTracking',
        'force_frameset' => 'getForceFrameset',
        'force_review' => 'getForceReview',
        'start_sco' => 'getStartSco',
        'web_path' => 'getWebPath',
        'manifest_dir_path' => 'getManifestDirPath',
        'redirect_on_exit_url' => 'getRedirectOnExitUrl',
        'remote_url_key' => 'getRemoteUrlKey',
        'width' => 'getWidth',
        'height' => 'getHeight',
        'left' => 'getLeft',
        'top' => 'getTop',
        'player' => 'getPlayer',
        'for_offline' => 'getForOffline',
        'culture_code' => 'getCultureCode',
        'include_registration' => 'getIncludeRegistration'
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
        $this->container['registration_id'] = isset($data['registration_id']) ? $data['registration_id'] : null;
        $this->container['instance'] = isset($data['instance']) ? $data['instance'] : null;
        $this->container['course_id'] = isset($data['course_id']) ? $data['course_id'] : null;
        $this->container['is_tracking'] = isset($data['is_tracking']) ? $data['is_tracking'] : null;
        $this->container['force_frameset'] = isset($data['force_frameset']) ? $data['force_frameset'] : null;
        $this->container['force_review'] = isset($data['force_review']) ? $data['force_review'] : null;
        $this->container['start_sco'] = isset($data['start_sco']) ? $data['start_sco'] : null;
        $this->container['web_path'] = isset($data['web_path']) ? $data['web_path'] : null;
        $this->container['manifest_dir_path'] = isset($data['manifest_dir_path']) ? $data['manifest_dir_path'] : null;
        $this->container['redirect_on_exit_url'] = isset($data['redirect_on_exit_url']) ? $data['redirect_on_exit_url'] : null;
        $this->container['remote_url_key'] = isset($data['remote_url_key']) ? $data['remote_url_key'] : null;
        $this->container['width'] = isset($data['width']) ? $data['width'] : null;
        $this->container['height'] = isset($data['height']) ? $data['height'] : null;
        $this->container['left'] = isset($data['left']) ? $data['left'] : null;
        $this->container['top'] = isset($data['top']) ? $data['top'] : null;
        $this->container['player'] = isset($data['player']) ? $data['player'] : 'modern';
        $this->container['for_offline'] = isset($data['for_offline']) ? $data['for_offline'] : false;
        $this->container['culture_code'] = isset($data['culture_code']) ? $data['culture_code'] : null;
        $this->container['include_registration'] = isset($data['include_registration']) ? $data['include_registration'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['registration_id'] === null) {
            $invalidProperties[] = "'registration_id' can't be null";
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
     * Gets course_id
     *
     * @return string
     */
    public function getCourseId()
    {
        return $this->container['course_id'];
    }

    /**
     * Sets course_id
     *
     * @param string $course_id course_id
     *
     * @return $this
     */
    public function setCourseId($course_id)
    {
        $this->container['course_id'] = $course_id;

        return $this;
    }

    /**
     * Gets is_tracking
     *
     * @return bool
     */
    public function getIsTracking()
    {
        return $this->container['is_tracking'];
    }

    /**
     * Sets is_tracking
     *
     * @param bool $is_tracking is_tracking
     *
     * @return $this
     */
    public function setIsTracking($is_tracking)
    {
        $this->container['is_tracking'] = $is_tracking;

        return $this;
    }

    /**
     * Gets force_frameset
     *
     * @return bool
     */
    public function getForceFrameset()
    {
        return $this->container['force_frameset'];
    }

    /**
     * Sets force_frameset
     *
     * @param bool $force_frameset force_frameset
     *
     * @return $this
     */
    public function setForceFrameset($force_frameset)
    {
        $this->container['force_frameset'] = $force_frameset;

        return $this;
    }

    /**
     * Gets force_review
     *
     * @return bool
     */
    public function getForceReview()
    {
        return $this->container['force_review'];
    }

    /**
     * Sets force_review
     *
     * @param bool $force_review force_review
     *
     * @return $this
     */
    public function setForceReview($force_review)
    {
        $this->container['force_review'] = $force_review;

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
     * @param string $start_sco start_sco
     *
     * @return $this
     */
    public function setStartSco($start_sco)
    {
        $this->container['start_sco'] = $start_sco;

        return $this;
    }

    /**
     * Gets web_path
     *
     * @return string
     */
    public function getWebPath()
    {
        return $this->container['web_path'];
    }

    /**
     * Sets web_path
     *
     * @param string $web_path web_path
     *
     * @return $this
     */
    public function setWebPath($web_path)
    {
        $this->container['web_path'] = $web_path;

        return $this;
    }

    /**
     * Gets manifest_dir_path
     *
     * @return string
     */
    public function getManifestDirPath()
    {
        return $this->container['manifest_dir_path'];
    }

    /**
     * Sets manifest_dir_path
     *
     * @param string $manifest_dir_path manifest_dir_path
     *
     * @return $this
     */
    public function setManifestDirPath($manifest_dir_path)
    {
        $this->container['manifest_dir_path'] = $manifest_dir_path;

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
     * @param string $redirect_on_exit_url redirect_on_exit_url
     *
     * @return $this
     */
    public function setRedirectOnExitUrl($redirect_on_exit_url)
    {
        $this->container['redirect_on_exit_url'] = $redirect_on_exit_url;

        return $this;
    }

    /**
     * Gets remote_url_key
     *
     * @return string
     */
    public function getRemoteUrlKey()
    {
        return $this->container['remote_url_key'];
    }

    /**
     * Sets remote_url_key
     *
     * @param string $remote_url_key Key to look up in RemoteDeliverPageUrlMap. If a match is found it will be used to set RemoteDeliverPageUrl for this request.
     *
     * @return $this
     */
    public function setRemoteUrlKey($remote_url_key)
    {
        $this->container['remote_url_key'] = $remote_url_key;

        return $this;
    }

    /**
     * Gets width
     *
     * @return int
     */
    public function getWidth()
    {
        return $this->container['width'];
    }

    /**
     * Sets width
     *
     * @param int $width width
     *
     * @return $this
     */
    public function setWidth($width)
    {
        $this->container['width'] = $width;

        return $this;
    }

    /**
     * Gets height
     *
     * @return int
     */
    public function getHeight()
    {
        return $this->container['height'];
    }

    /**
     * Sets height
     *
     * @param int $height height
     *
     * @return $this
     */
    public function setHeight($height)
    {
        $this->container['height'] = $height;

        return $this;
    }

    /**
     * Gets left
     *
     * @return int
     */
    public function getLeft()
    {
        return $this->container['left'];
    }

    /**
     * Sets left
     *
     * @param int $left left
     *
     * @return $this
     */
    public function setLeft($left)
    {
        $this->container['left'] = $left;

        return $this;
    }

    /**
     * Gets top
     *
     * @return int
     */
    public function getTop()
    {
        return $this->container['top'];
    }

    /**
     * Sets top
     *
     * @param int $top top
     *
     * @return $this
     */
    public function setTop($top)
    {
        $this->container['top'] = $top;

        return $this;
    }

    /**
     * Gets player
     *
     * @return string
     */
    public function getPlayer()
    {
        return $this->container['player'];
    }

    /**
     * Sets player
     *
     * @param string $player player
     *
     * @return $this
     */
    public function setPlayer($player)
    {
        $this->container['player'] = $player;

        return $this;
    }

    /**
     * Gets for_offline
     *
     * @return bool
     */
    public function getForOffline()
    {
        return $this->container['for_offline'];
    }

    /**
     * Sets for_offline
     *
     * @param bool $for_offline for_offline
     *
     * @return $this
     */
    public function setForOffline($for_offline)
    {
        $this->container['for_offline'] = $for_offline;

        return $this;
    }

    /**
     * Gets culture_code
     *
     * @return string
     */
    public function getCultureCode()
    {
        return $this->container['culture_code'];
    }

    /**
     * Sets culture_code
     *
     * @param string $culture_code culture_code
     *
     * @return $this
     */
    public function setCultureCode($culture_code)
    {
        $this->container['culture_code'] = $culture_code;

        return $this;
    }

    /**
     * Gets include_registration
     *
     * @return bool
     */
    public function getIncludeRegistration()
    {
        return $this->container['include_registration'];
    }

    /**
     * Sets include_registration
     *
     * @param bool $include_registration include_registration
     *
     * @return $this
     */
    public function setIncludeRegistration($include_registration)
    {
        $this->container['include_registration'] = $include_registration;

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


