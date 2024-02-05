<?php
/**
 * SubscriptionDefinitionSchema
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
 * SubscriptionDefinitionSchema Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SubscriptionDefinitionSchema implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'SubscriptionDefinitionSchema';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'topic' => 'string',
        'subtopics' => 'string[]',
        'enabled' => 'bool',
        'url' => 'string',
        'auth_id' => 'string',
        'timeout_ms' => 'int',
        'async_mode' => 'string',
        'strict_ordering' => 'bool',
        'expires_ms' => 'int',
        'retry_attempts' => 'int',
        'retry_delay_seconds' => 'int',
        'ignore_before_date' => '\DateTime',
        'filters' => '\Swagger\Client\Model\SubscriptionDefinitionSchemaFilters[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'topic' => null,
        'subtopics' => null,
        'enabled' => null,
        'url' => null,
        'auth_id' => null,
        'timeout_ms' => 'int32',
        'async_mode' => null,
        'strict_ordering' => null,
        'expires_ms' => 'int32',
        'retry_attempts' => 'int32',
        'retry_delay_seconds' => 'int32',
        'ignore_before_date' => 'date-time',
        'filters' => null
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
        'topic' => 'topic',
        'subtopics' => 'subtopics',
        'enabled' => 'enabled',
        'url' => 'url',
        'auth_id' => 'authId',
        'timeout_ms' => 'timeoutMS',
        'async_mode' => 'asyncMode',
        'strict_ordering' => 'strictOrdering',
        'expires_ms' => 'expiresMS',
        'retry_attempts' => 'retryAttempts',
        'retry_delay_seconds' => 'retryDelaySeconds',
        'ignore_before_date' => 'ignoreBeforeDate',
        'filters' => 'filters'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'topic' => 'setTopic',
        'subtopics' => 'setSubtopics',
        'enabled' => 'setEnabled',
        'url' => 'setUrl',
        'auth_id' => 'setAuthId',
        'timeout_ms' => 'setTimeoutMs',
        'async_mode' => 'setAsyncMode',
        'strict_ordering' => 'setStrictOrdering',
        'expires_ms' => 'setExpiresMs',
        'retry_attempts' => 'setRetryAttempts',
        'retry_delay_seconds' => 'setRetryDelaySeconds',
        'ignore_before_date' => 'setIgnoreBeforeDate',
        'filters' => 'setFilters'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'topic' => 'getTopic',
        'subtopics' => 'getSubtopics',
        'enabled' => 'getEnabled',
        'url' => 'getUrl',
        'auth_id' => 'getAuthId',
        'timeout_ms' => 'getTimeoutMs',
        'async_mode' => 'getAsyncMode',
        'strict_ordering' => 'getStrictOrdering',
        'expires_ms' => 'getExpiresMs',
        'retry_attempts' => 'getRetryAttempts',
        'retry_delay_seconds' => 'getRetryDelaySeconds',
        'ignore_before_date' => 'getIgnoreBeforeDate',
        'filters' => 'getFilters'
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

    const TOPIC_COURSE_IMPORT = 'CourseImport';
    const TOPIC_COURSE_LAUNCHED = 'CourseLaunched';
    const TOPIC_REGISTRATION_CHANGED = 'RegistrationChanged';
    const TOPIC_NOTIFICATION_FAILED = 'NotificationFailed';
    const TOPIC_XAPI_GET_AUTHORITY = 'XapiGetAuthority';
    const ASYNC_MODE_THREAD = 'Thread';
    const ASYNC_MODE_SYNC = 'Sync';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTopicAllowableValues()
    {
        return [
            self::TOPIC_COURSE_IMPORT,
            self::TOPIC_COURSE_LAUNCHED,
            self::TOPIC_REGISTRATION_CHANGED,
            self::TOPIC_NOTIFICATION_FAILED,
            self::TOPIC_XAPI_GET_AUTHORITY,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getAsyncModeAllowableValues()
    {
        return [
            self::ASYNC_MODE_THREAD,
            self::ASYNC_MODE_SYNC,
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
        $this->container['topic'] = isset($data['topic']) ? $data['topic'] : null;
        $this->container['subtopics'] = isset($data['subtopics']) ? $data['subtopics'] : null;
        $this->container['enabled'] = isset($data['enabled']) ? $data['enabled'] : null;
        $this->container['url'] = isset($data['url']) ? $data['url'] : null;
        $this->container['auth_id'] = isset($data['auth_id']) ? $data['auth_id'] : null;
        $this->container['timeout_ms'] = isset($data['timeout_ms']) ? $data['timeout_ms'] : null;
        $this->container['async_mode'] = isset($data['async_mode']) ? $data['async_mode'] : null;
        $this->container['strict_ordering'] = isset($data['strict_ordering']) ? $data['strict_ordering'] : null;
        $this->container['expires_ms'] = isset($data['expires_ms']) ? $data['expires_ms'] : null;
        $this->container['retry_attempts'] = isset($data['retry_attempts']) ? $data['retry_attempts'] : null;
        $this->container['retry_delay_seconds'] = isset($data['retry_delay_seconds']) ? $data['retry_delay_seconds'] : null;
        $this->container['ignore_before_date'] = isset($data['ignore_before_date']) ? $data['ignore_before_date'] : null;
        $this->container['filters'] = isset($data['filters']) ? $data['filters'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['topic'] === null) {
            $invalidProperties[] = "'topic' can't be null";
        }
        $allowedValues = $this->getTopicAllowableValues();
        if (!is_null($this->container['topic']) && !in_array($this->container['topic'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'topic', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['enabled'] === null) {
            $invalidProperties[] = "'enabled' can't be null";
        }
        if ($this->container['url'] === null) {
            $invalidProperties[] = "'url' can't be null";
        }
        $allowedValues = $this->getAsyncModeAllowableValues();
        if (!is_null($this->container['async_mode']) && !in_array($this->container['async_mode'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'async_mode', must be one of '%s'",
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
     * Gets topic
     *
     * @return string
     */
    public function getTopic()
    {
        return $this->container['topic'];
    }

    /**
     * Sets topic
     *
     * @param string $topic Topic to subscribe to
     *
     * @return $this
     */
    public function setTopic($topic)
    {
        $allowedValues = $this->getTopicAllowableValues();
        if (!in_array($topic, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'topic', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['topic'] = $topic;

        return $this;
    }

    /**
     * Gets subtopics
     *
     * @return string[]
     */
    public function getSubtopics()
    {
        return $this->container['subtopics'];
    }

    /**
     * Sets subtopics
     *
     * @param string[] $subtopics Topic dependent list of sub-topics for which the subscriber should be notified. Eg: 'success' or 'failed' for course import
     *
     * @return $this
     */
    public function setSubtopics($subtopics)
    {
        $this->container['subtopics'] = $subtopics;

        return $this;
    }

    /**
     * Gets enabled
     *
     * @return bool
     */
    public function getEnabled()
    {
        return $this->container['enabled'];
    }

    /**
     * Sets enabled
     *
     * @param bool $enabled enabled
     *
     * @return $this
     */
    public function setEnabled($enabled)
    {
        $this->container['enabled'] = $enabled;

        return $this;
    }

    /**
     * Gets url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
     * Sets url
     *
     * @param string $url url
     *
     * @return $this
     */
    public function setUrl($url)
    {
        $this->container['url'] = $url;

        return $this;
    }

    /**
     * Gets auth_id
     *
     * @return string
     */
    public function getAuthId()
    {
        return $this->container['auth_id'];
    }

    /**
     * Sets auth_id
     *
     * @param string $auth_id The ID for the subscription auth entry to use to authorize requests for this subscription.
     *
     * @return $this
     */
    public function setAuthId($auth_id)
    {
        $this->container['auth_id'] = $auth_id;

        return $this;
    }

    /**
     * Gets timeout_ms
     *
     * @return int
     */
    public function getTimeoutMs()
    {
        return $this->container['timeout_ms'];
    }

    /**
     * Sets timeout_ms
     *
     * @param int $timeout_ms Network timeout in milliseconds for sending subscription
     *
     * @return $this
     */
    public function setTimeoutMs($timeout_ms)
    {
        $this->container['timeout_ms'] = $timeout_ms;

        return $this;
    }

    /**
     * Gets async_mode
     *
     * @return string
     */
    public function getAsyncMode()
    {
        return $this->container['async_mode'];
    }

    /**
     * Sets async_mode
     *
     * @param string $async_mode Will this Notification be sent in a thread, or synchronously? Note: Synchronous delivery should be used sparingly as it may severely degrade performance. Has no effect on Exchanges.
     *
     * @return $this
     */
    public function setAsyncMode($async_mode)
    {
        $allowedValues = $this->getAsyncModeAllowableValues();
        if (!is_null($async_mode) && !in_array($async_mode, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'async_mode', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['async_mode'] = $async_mode;

        return $this;
    }

    /**
     * Gets strict_ordering
     *
     * @return bool
     */
    public function getStrictOrdering()
    {
        return $this->container['strict_ordering'];
    }

    /**
     * Sets strict_ordering
     *
     * @param bool $strict_ordering Should Engine keep track of notification ordering and drop out of date notifications? Note: Ordering notifications should be used sparingly as it may severly degrade performance. Has no effect on Exchanges.
     *
     * @return $this
     */
    public function setStrictOrdering($strict_ordering)
    {
        $this->container['strict_ordering'] = $strict_ordering;

        return $this;
    }

    /**
     * Gets expires_ms
     *
     * @return int
     */
    public function getExpiresMs()
    {
        return $this->container['expires_ms'];
    }

    /**
     * Sets expires_ms
     *
     * @param int $expires_ms For how long (in ms) should Engine cache the response to this Exchange. Has no effect on Notifications.
     *
     * @return $this
     */
    public function setExpiresMs($expires_ms)
    {
        $this->container['expires_ms'] = $expires_ms;

        return $this;
    }

    /**
     * Gets retry_attempts
     *
     * @return int
     */
    public function getRetryAttempts()
    {
        return $this->container['retry_attempts'];
    }

    /**
     * Sets retry_attempts
     *
     * @param int $retry_attempts The number of times Engine will attempt to send after a failure. Takes the lower value between this and the `SimpleQueueMaxRetries` configuration setting.
     *
     * @return $this
     */
    public function setRetryAttempts($retry_attempts)
    {
        $this->container['retry_attempts'] = $retry_attempts;

        return $this;
    }

    /**
     * Gets retry_delay_seconds
     *
     * @return int
     */
    public function getRetryDelaySeconds()
    {
        return $this->container['retry_delay_seconds'];
    }

    /**
     * Sets retry_delay_seconds
     *
     * @param int $retry_delay_seconds The initial length of time Engine will wait before retrying after a failure. This time will be doubled after each retry. Takes the greater value between this and the `SimpleQueueRetryInitialDelaySeconds` configuration setting.
     *
     * @return $this
     */
    public function setRetryDelaySeconds($retry_delay_seconds)
    {
        $this->container['retry_delay_seconds'] = $retry_delay_seconds;

        return $this;
    }

    /**
     * Gets ignore_before_date
     *
     * @return \DateTime
     */
    public function getIgnoreBeforeDate()
    {
        return $this->container['ignore_before_date'];
    }

    /**
     * Sets ignore_before_date
     *
     * @param \DateTime $ignore_before_date Queued messages generated before this date will be discarded.
     *
     * @return $this
     */
    public function setIgnoreBeforeDate($ignore_before_date)
    {
        $this->container['ignore_before_date'] = $ignore_before_date;

        return $this;
    }

    /**
     * Gets filters
     *
     * @return \Swagger\Client\Model\SubscriptionDefinitionSchemaFilters[]
     */
    public function getFilters()
    {
        return $this->container['filters'];
    }

    /**
     * Sets filters
     *
     * @param \Swagger\Client\Model\SubscriptionDefinitionSchemaFilters[] $filters Filters on resources such as course, registration, or tenant for which this subscriber should be notified. If multiple filters are defined, only events that match all the filters will trigger a notification.
     *
     * @return $this
     */
    public function setFilters($filters)
    {
        $this->container['filters'] = $filters;

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

