<?php
/**
 * XapiActivityDefinition
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
 * XapiActivityDefinition Class Doc Comment
 *
 * @category    Class
 * @description https://github.com/adlnet/xAPI-Spec/blob/1.0.2/xAPI.md#activity-definition
 * @package     RusticiSoftware\Cloud\V2
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class XapiActivityDefinition implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'XapiActivityDefinition';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'name' => 'map[string,string]',
        'description' => 'map[string,string]',
        'type' => 'string',
        'more_info' => 'string',
        'interaction_type' => 'string',
        'correct_responses_pattern' => 'string[]',
        'choices' => '\RusticiSoftware\Cloud\V2\Model\XapiInteractionComponent[]',
        'scale' => '\RusticiSoftware\Cloud\V2\Model\XapiInteractionComponent[]',
        'source' => '\RusticiSoftware\Cloud\V2\Model\XapiInteractionComponent[]',
        'target' => '\RusticiSoftware\Cloud\V2\Model\XapiInteractionComponent[]',
        'steps' => '\RusticiSoftware\Cloud\V2\Model\XapiInteractionComponent[]',
        'extensions' => 'map[string,object]'
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
        'name' => 'name',
        'description' => 'description',
        'type' => 'type',
        'more_info' => 'moreInfo',
        'interaction_type' => 'interactionType',
        'correct_responses_pattern' => 'correctResponsesPattern',
        'choices' => 'choices',
        'scale' => 'scale',
        'source' => 'source',
        'target' => 'target',
        'steps' => 'steps',
        'extensions' => 'extensions'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'description' => 'setDescription',
        'type' => 'setType',
        'more_info' => 'setMoreInfo',
        'interaction_type' => 'setInteractionType',
        'correct_responses_pattern' => 'setCorrectResponsesPattern',
        'choices' => 'setChoices',
        'scale' => 'setScale',
        'source' => 'setSource',
        'target' => 'setTarget',
        'steps' => 'setSteps',
        'extensions' => 'setExtensions'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'description' => 'getDescription',
        'type' => 'getType',
        'more_info' => 'getMoreInfo',
        'interaction_type' => 'getInteractionType',
        'correct_responses_pattern' => 'getCorrectResponsesPattern',
        'choices' => 'getChoices',
        'scale' => 'getScale',
        'source' => 'getSource',
        'target' => 'getTarget',
        'steps' => 'getSteps',
        'extensions' => 'getExtensions'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['more_info'] = isset($data['more_info']) ? $data['more_info'] : null;
        $this->container['interaction_type'] = isset($data['interaction_type']) ? $data['interaction_type'] : null;
        $this->container['correct_responses_pattern'] = isset($data['correct_responses_pattern']) ? $data['correct_responses_pattern'] : null;
        $this->container['choices'] = isset($data['choices']) ? $data['choices'] : null;
        $this->container['scale'] = isset($data['scale']) ? $data['scale'] : null;
        $this->container['source'] = isset($data['source']) ? $data['source'] : null;
        $this->container['target'] = isset($data['target']) ? $data['target'] : null;
        $this->container['steps'] = isset($data['steps']) ? $data['steps'] : null;
        $this->container['extensions'] = isset($data['extensions']) ? $data['extensions'] : null;
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
     * Gets name
     * @return map[string,string]
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     * @param map[string,string] $name
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets description
     * @return map[string,string]
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     * @param map[string,string] $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets type
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     * @param string $type
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets more_info
     * @return string
     */
    public function getMoreInfo()
    {
        return $this->container['more_info'];
    }

    /**
     * Sets more_info
     * @param string $more_info
     * @return $this
     */
    public function setMoreInfo($more_info)
    {
        $this->container['more_info'] = $more_info;

        return $this;
    }

    /**
     * Gets interaction_type
     * @return string
     */
    public function getInteractionType()
    {
        return $this->container['interaction_type'];
    }

    /**
     * Sets interaction_type
     * @param string $interaction_type
     * @return $this
     */
    public function setInteractionType($interaction_type)
    {
        $this->container['interaction_type'] = $interaction_type;

        return $this;
    }

    /**
     * Gets correct_responses_pattern
     * @return string[]
     */
    public function getCorrectResponsesPattern()
    {
        return $this->container['correct_responses_pattern'];
    }

    /**
     * Sets correct_responses_pattern
     * @param string[] $correct_responses_pattern
     * @return $this
     */
    public function setCorrectResponsesPattern($correct_responses_pattern)
    {
        $this->container['correct_responses_pattern'] = $correct_responses_pattern;

        return $this;
    }

    /**
     * Gets choices
     * @return \RusticiSoftware\Cloud\V2\Model\XapiInteractionComponent[]
     */
    public function getChoices()
    {
        return $this->container['choices'];
    }

    /**
     * Sets choices
     * @param \RusticiSoftware\Cloud\V2\Model\XapiInteractionComponent[] $choices
     * @return $this
     */
    public function setChoices($choices)
    {
        $this->container['choices'] = $choices;

        return $this;
    }

    /**
     * Gets scale
     * @return \RusticiSoftware\Cloud\V2\Model\XapiInteractionComponent[]
     */
    public function getScale()
    {
        return $this->container['scale'];
    }

    /**
     * Sets scale
     * @param \RusticiSoftware\Cloud\V2\Model\XapiInteractionComponent[] $scale
     * @return $this
     */
    public function setScale($scale)
    {
        $this->container['scale'] = $scale;

        return $this;
    }

    /**
     * Gets source
     * @return \RusticiSoftware\Cloud\V2\Model\XapiInteractionComponent[]
     */
    public function getSource()
    {
        return $this->container['source'];
    }

    /**
     * Sets source
     * @param \RusticiSoftware\Cloud\V2\Model\XapiInteractionComponent[] $source
     * @return $this
     */
    public function setSource($source)
    {
        $this->container['source'] = $source;

        return $this;
    }

    /**
     * Gets target
     * @return \RusticiSoftware\Cloud\V2\Model\XapiInteractionComponent[]
     */
    public function getTarget()
    {
        return $this->container['target'];
    }

    /**
     * Sets target
     * @param \RusticiSoftware\Cloud\V2\Model\XapiInteractionComponent[] $target
     * @return $this
     */
    public function setTarget($target)
    {
        $this->container['target'] = $target;

        return $this;
    }

    /**
     * Gets steps
     * @return \RusticiSoftware\Cloud\V2\Model\XapiInteractionComponent[]
     */
    public function getSteps()
    {
        return $this->container['steps'];
    }

    /**
     * Sets steps
     * @param \RusticiSoftware\Cloud\V2\Model\XapiInteractionComponent[] $steps
     * @return $this
     */
    public function setSteps($steps)
    {
        $this->container['steps'] = $steps;

        return $this;
    }

    /**
     * Gets extensions
     * @return map[string,object]
     */
    public function getExtensions()
    {
        return $this->container['extensions'];
    }

    /**
     * Sets extensions
     * @param map[string,object] $extensions
     * @return $this
     */
    public function setExtensions($extensions)
    {
        $this->container['extensions'] = $extensions;

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


