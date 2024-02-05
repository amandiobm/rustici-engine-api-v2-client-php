<?php
/**
 * ObjectiveSchema
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
 * ObjectiveSchema Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ObjectiveSchema implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ObjectiveSchema';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
        'primary' => 'bool',
        'score' => '\Swagger\Client\Model\ScoreSchema',
        'score_max' => 'double',
        'score_min' => 'double',
        'score_raw' => 'double',
        'previous_score_scaled' => 'double',
        'first_score_scaled' => 'double',
        'progress_measure' => 'double',
        'first_success_time_stamp' => 'string',
        'objective_completion' => 'string',
        'objective_success' => 'string',
        'previous_objective_success' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
        'primary' => null,
        'score' => null,
        'score_max' => 'double',
        'score_min' => 'double',
        'score_raw' => 'double',
        'previous_score_scaled' => 'double',
        'first_score_scaled' => 'double',
        'progress_measure' => 'double',
        'first_success_time_stamp' => null,
        'objective_completion' => null,
        'objective_success' => null,
        'previous_objective_success' => null
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
        'primary' => 'primary',
        'score' => 'score',
        'score_max' => 'scoreMax',
        'score_min' => 'scoreMin',
        'score_raw' => 'scoreRaw',
        'previous_score_scaled' => 'previousScoreScaled',
        'first_score_scaled' => 'firstScoreScaled',
        'progress_measure' => 'progressMeasure',
        'first_success_time_stamp' => 'firstSuccessTimeStamp',
        'objective_completion' => 'objectiveCompletion',
        'objective_success' => 'objectiveSuccess',
        'previous_objective_success' => 'previousObjectiveSuccess'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'primary' => 'setPrimary',
        'score' => 'setScore',
        'score_max' => 'setScoreMax',
        'score_min' => 'setScoreMin',
        'score_raw' => 'setScoreRaw',
        'previous_score_scaled' => 'setPreviousScoreScaled',
        'first_score_scaled' => 'setFirstScoreScaled',
        'progress_measure' => 'setProgressMeasure',
        'first_success_time_stamp' => 'setFirstSuccessTimeStamp',
        'objective_completion' => 'setObjectiveCompletion',
        'objective_success' => 'setObjectiveSuccess',
        'previous_objective_success' => 'setPreviousObjectiveSuccess'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'primary' => 'getPrimary',
        'score' => 'getScore',
        'score_max' => 'getScoreMax',
        'score_min' => 'getScoreMin',
        'score_raw' => 'getScoreRaw',
        'previous_score_scaled' => 'getPreviousScoreScaled',
        'first_score_scaled' => 'getFirstScoreScaled',
        'progress_measure' => 'getProgressMeasure',
        'first_success_time_stamp' => 'getFirstSuccessTimeStamp',
        'objective_completion' => 'getObjectiveCompletion',
        'objective_success' => 'getObjectiveSuccess',
        'previous_objective_success' => 'getPreviousObjectiveSuccess'
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

    const OBJECTIVE_COMPLETION_UNKNOWN = 'UNKNOWN';
    const OBJECTIVE_COMPLETION_COMPLETED = 'COMPLETED';
    const OBJECTIVE_COMPLETION_INCOMPLETE = 'INCOMPLETE';
    const OBJECTIVE_SUCCESS_UNKNOWN = 'UNKNOWN';
    const OBJECTIVE_SUCCESS_PASSED = 'PASSED';
    const OBJECTIVE_SUCCESS_FAILED = 'FAILED';
    const PREVIOUS_OBJECTIVE_SUCCESS_UNKNOWN = 'UNKNOWN';
    const PREVIOUS_OBJECTIVE_SUCCESS_PASSED = 'PASSED';
    const PREVIOUS_OBJECTIVE_SUCCESS_FAILED = 'FAILED';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getObjectiveCompletionAllowableValues()
    {
        return [
            self::OBJECTIVE_COMPLETION_UNKNOWN,
            self::OBJECTIVE_COMPLETION_COMPLETED,
            self::OBJECTIVE_COMPLETION_INCOMPLETE,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getObjectiveSuccessAllowableValues()
    {
        return [
            self::OBJECTIVE_SUCCESS_UNKNOWN,
            self::OBJECTIVE_SUCCESS_PASSED,
            self::OBJECTIVE_SUCCESS_FAILED,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getPreviousObjectiveSuccessAllowableValues()
    {
        return [
            self::PREVIOUS_OBJECTIVE_SUCCESS_UNKNOWN,
            self::PREVIOUS_OBJECTIVE_SUCCESS_PASSED,
            self::PREVIOUS_OBJECTIVE_SUCCESS_FAILED,
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['primary'] = isset($data['primary']) ? $data['primary'] : null;
        $this->container['score'] = isset($data['score']) ? $data['score'] : null;
        $this->container['score_max'] = isset($data['score_max']) ? $data['score_max'] : null;
        $this->container['score_min'] = isset($data['score_min']) ? $data['score_min'] : null;
        $this->container['score_raw'] = isset($data['score_raw']) ? $data['score_raw'] : null;
        $this->container['previous_score_scaled'] = isset($data['previous_score_scaled']) ? $data['previous_score_scaled'] : null;
        $this->container['first_score_scaled'] = isset($data['first_score_scaled']) ? $data['first_score_scaled'] : null;
        $this->container['progress_measure'] = isset($data['progress_measure']) ? $data['progress_measure'] : null;
        $this->container['first_success_time_stamp'] = isset($data['first_success_time_stamp']) ? $data['first_success_time_stamp'] : null;
        $this->container['objective_completion'] = isset($data['objective_completion']) ? $data['objective_completion'] : 'UNKNOWN';
        $this->container['objective_success'] = isset($data['objective_success']) ? $data['objective_success'] : 'UNKNOWN';
        $this->container['previous_objective_success'] = isset($data['previous_objective_success']) ? $data['previous_objective_success'] : 'UNKNOWN';
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getObjectiveCompletionAllowableValues();
        if (!is_null($this->container['objective_completion']) && !in_array($this->container['objective_completion'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'objective_completion', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getObjectiveSuccessAllowableValues();
        if (!is_null($this->container['objective_success']) && !in_array($this->container['objective_success'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'objective_success', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getPreviousObjectiveSuccessAllowableValues();
        if (!is_null($this->container['previous_objective_success']) && !in_array($this->container['previous_objective_success'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'previous_objective_success', must be one of '%s'",
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
     * Gets primary
     *
     * @return bool
     */
    public function getPrimary()
    {
        return $this->container['primary'];
    }

    /**
     * Sets primary
     *
     * @param bool $primary primary
     *
     * @return $this
     */
    public function setPrimary($primary)
    {
        $this->container['primary'] = $primary;

        return $this;
    }

    /**
     * Gets score
     *
     * @return \Swagger\Client\Model\ScoreSchema
     */
    public function getScore()
    {
        return $this->container['score'];
    }

    /**
     * Sets score
     *
     * @param \Swagger\Client\Model\ScoreSchema $score score
     *
     * @return $this
     */
    public function setScore($score)
    {
        $this->container['score'] = $score;

        return $this;
    }

    /**
     * Gets score_max
     *
     * @return double
     */
    public function getScoreMax()
    {
        return $this->container['score_max'];
    }

    /**
     * Sets score_max
     *
     * @param double $score_max score_max
     *
     * @return $this
     */
    public function setScoreMax($score_max)
    {
        $this->container['score_max'] = $score_max;

        return $this;
    }

    /**
     * Gets score_min
     *
     * @return double
     */
    public function getScoreMin()
    {
        return $this->container['score_min'];
    }

    /**
     * Sets score_min
     *
     * @param double $score_min score_min
     *
     * @return $this
     */
    public function setScoreMin($score_min)
    {
        $this->container['score_min'] = $score_min;

        return $this;
    }

    /**
     * Gets score_raw
     *
     * @return double
     */
    public function getScoreRaw()
    {
        return $this->container['score_raw'];
    }

    /**
     * Sets score_raw
     *
     * @param double $score_raw score_raw
     *
     * @return $this
     */
    public function setScoreRaw($score_raw)
    {
        $this->container['score_raw'] = $score_raw;

        return $this;
    }

    /**
     * Gets previous_score_scaled
     *
     * @return double
     */
    public function getPreviousScoreScaled()
    {
        return $this->container['previous_score_scaled'];
    }

    /**
     * Sets previous_score_scaled
     *
     * @param double $previous_score_scaled previous_score_scaled
     *
     * @return $this
     */
    public function setPreviousScoreScaled($previous_score_scaled)
    {
        $this->container['previous_score_scaled'] = $previous_score_scaled;

        return $this;
    }

    /**
     * Gets first_score_scaled
     *
     * @return double
     */
    public function getFirstScoreScaled()
    {
        return $this->container['first_score_scaled'];
    }

    /**
     * Sets first_score_scaled
     *
     * @param double $first_score_scaled first_score_scaled
     *
     * @return $this
     */
    public function setFirstScoreScaled($first_score_scaled)
    {
        $this->container['first_score_scaled'] = $first_score_scaled;

        return $this;
    }

    /**
     * Gets progress_measure
     *
     * @return double
     */
    public function getProgressMeasure()
    {
        return $this->container['progress_measure'];
    }

    /**
     * Sets progress_measure
     *
     * @param double $progress_measure progress_measure
     *
     * @return $this
     */
    public function setProgressMeasure($progress_measure)
    {
        $this->container['progress_measure'] = $progress_measure;

        return $this;
    }

    /**
     * Gets first_success_time_stamp
     *
     * @return string
     */
    public function getFirstSuccessTimeStamp()
    {
        return $this->container['first_success_time_stamp'];
    }

    /**
     * Sets first_success_time_stamp
     *
     * @param string $first_success_time_stamp first_success_time_stamp
     *
     * @return $this
     */
    public function setFirstSuccessTimeStamp($first_success_time_stamp)
    {
        $this->container['first_success_time_stamp'] = $first_success_time_stamp;

        return $this;
    }

    /**
     * Gets objective_completion
     *
     * @return string
     */
    public function getObjectiveCompletion()
    {
        return $this->container['objective_completion'];
    }

    /**
     * Sets objective_completion
     *
     * @param string $objective_completion objective_completion
     *
     * @return $this
     */
    public function setObjectiveCompletion($objective_completion)
    {
        $allowedValues = $this->getObjectiveCompletionAllowableValues();
        if (!is_null($objective_completion) && !in_array($objective_completion, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'objective_completion', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['objective_completion'] = $objective_completion;

        return $this;
    }

    /**
     * Gets objective_success
     *
     * @return string
     */
    public function getObjectiveSuccess()
    {
        return $this->container['objective_success'];
    }

    /**
     * Sets objective_success
     *
     * @param string $objective_success objective_success
     *
     * @return $this
     */
    public function setObjectiveSuccess($objective_success)
    {
        $allowedValues = $this->getObjectiveSuccessAllowableValues();
        if (!is_null($objective_success) && !in_array($objective_success, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'objective_success', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['objective_success'] = $objective_success;

        return $this;
    }

    /**
     * Gets previous_objective_success
     *
     * @return string
     */
    public function getPreviousObjectiveSuccess()
    {
        return $this->container['previous_objective_success'];
    }

    /**
     * Sets previous_objective_success
     *
     * @param string $previous_objective_success previous_objective_success
     *
     * @return $this
     */
    public function setPreviousObjectiveSuccess($previous_objective_success)
    {
        $allowedValues = $this->getPreviousObjectiveSuccessAllowableValues();
        if (!is_null($previous_objective_success) && !in_array($previous_objective_success, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'previous_objective_success', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['previous_objective_success'] = $previous_objective_success;

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


