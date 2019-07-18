<?php
/**
 * StaticPropertiesSchema
 *
 * PHP version 5
 *
 * @category Class
 * @package  RusticiSoftware\Cloud\V2
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * SCORM Cloud Rest API
 *
 * REST API used for SCORM Cloud integrations.
 *
 * OpenAPI spec version: 2.0 beta
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace RusticiSoftware\Cloud\V2\Model;

use \ArrayAccess;

/**
 * StaticPropertiesSchema Class Doc Comment
 *
 * @category    Class
 * @package     RusticiSoftware\Cloud\V2
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class StaticPropertiesSchema implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'StaticPropertiesSchema';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'completion_threshold' => 'string',
        'launch_data' => 'string',
        'max_time_allowed' => 'string',
        'scaled_passing_score' => 'double',
        'scaled_passing_score_used' => 'bool',
        'time_limit_action' => 'string'
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'completion_threshold' => 'completionThreshold',
        'launch_data' => 'launchData',
        'max_time_allowed' => 'maxTimeAllowed',
        'scaled_passing_score' => 'scaledPassingScore',
        'scaled_passing_score_used' => 'scaledPassingScoreUsed',
        'time_limit_action' => 'timeLimitAction'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'completion_threshold' => 'setCompletionThreshold',
        'launch_data' => 'setLaunchData',
        'max_time_allowed' => 'setMaxTimeAllowed',
        'scaled_passing_score' => 'setScaledPassingScore',
        'scaled_passing_score_used' => 'setScaledPassingScoreUsed',
        'time_limit_action' => 'setTimeLimitAction'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'completion_threshold' => 'getCompletionThreshold',
        'launch_data' => 'getLaunchData',
        'max_time_allowed' => 'getMaxTimeAllowed',
        'scaled_passing_score' => 'getScaledPassingScore',
        'scaled_passing_score_used' => 'getScaledPassingScoreUsed',
        'time_limit_action' => 'getTimeLimitAction'
    ];

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    public static function setters()
    {
        return self::$setters;
    }

    public static function getters()
    {
        return self::$getters;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['completion_threshold'] = isset($data['completion_threshold']) ? $data['completion_threshold'] : null;
        $this->container['launch_data'] = isset($data['launch_data']) ? $data['launch_data'] : null;
        $this->container['max_time_allowed'] = isset($data['max_time_allowed']) ? $data['max_time_allowed'] : null;
        $this->container['scaled_passing_score'] = isset($data['scaled_passing_score']) ? $data['scaled_passing_score'] : null;
        $this->container['scaled_passing_score_used'] = isset($data['scaled_passing_score_used']) ? $data['scaled_passing_score_used'] : null;
        $this->container['time_limit_action'] = isset($data['time_limit_action']) ? $data['time_limit_action'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        return true;
    }


    /**
     * Gets completion_threshold
     * @return string
     */
    public function getCompletionThreshold()
    {
        return $this->container['completion_threshold'];
    }

    /**
     * Sets completion_threshold
     * @param string $completion_threshold
     * @return $this
     */
    public function setCompletionThreshold($completion_threshold)
    {
        $this->container['completion_threshold'] = $completion_threshold;

        return $this;
    }

    /**
     * Gets launch_data
     * @return string
     */
    public function getLaunchData()
    {
        return $this->container['launch_data'];
    }

    /**
     * Sets launch_data
     * @param string $launch_data
     * @return $this
     */
    public function setLaunchData($launch_data)
    {
        $this->container['launch_data'] = $launch_data;

        return $this;
    }

    /**
     * Gets max_time_allowed
     * @return string
     */
    public function getMaxTimeAllowed()
    {
        return $this->container['max_time_allowed'];
    }

    /**
     * Sets max_time_allowed
     * @param string $max_time_allowed
     * @return $this
     */
    public function setMaxTimeAllowed($max_time_allowed)
    {
        $this->container['max_time_allowed'] = $max_time_allowed;

        return $this;
    }

    /**
     * Gets scaled_passing_score
     * @return double
     */
    public function getScaledPassingScore()
    {
        return $this->container['scaled_passing_score'];
    }

    /**
     * Sets scaled_passing_score
     * @param double $scaled_passing_score
     * @return $this
     */
    public function setScaledPassingScore($scaled_passing_score)
    {
        $this->container['scaled_passing_score'] = $scaled_passing_score;

        return $this;
    }

    /**
     * Gets scaled_passing_score_used
     * @return bool
     */
    public function getScaledPassingScoreUsed()
    {
        return $this->container['scaled_passing_score_used'];
    }

    /**
     * Sets scaled_passing_score_used
     * @param bool $scaled_passing_score_used
     * @return $this
     */
    public function setScaledPassingScoreUsed($scaled_passing_score_used)
    {
        $this->container['scaled_passing_score_used'] = $scaled_passing_score_used;

        return $this;
    }

    /**
     * Gets time_limit_action
     * @return string
     */
    public function getTimeLimitAction()
    {
        return $this->container['time_limit_action'];
    }

    /**
     * Sets time_limit_action
     * @param string $time_limit_action
     * @return $this
     */
    public function setTimeLimitAction($time_limit_action)
    {
        $this->container['time_limit_action'] = $time_limit_action;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
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
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\RusticiSoftware\Cloud\V2\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\RusticiSoftware\Cloud\V2\ObjectSerializer::sanitizeForSerialization($this));
    }
}


