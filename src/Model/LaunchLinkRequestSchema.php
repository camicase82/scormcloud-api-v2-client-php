<?php
/**
 * LaunchLinkRequestSchema
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
 * OpenAPI spec version: 2.0
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
 * LaunchLinkRequestSchema Class Doc Comment
 *
 * @category    Class
 * @package     RusticiSoftware\Cloud\V2
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class LaunchLinkRequestSchema implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'LaunchLinkRequestSchema';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'expiry' => 'int',
        'redirect_on_exit_url' => 'string',
        'tracking' => 'bool',
        'start_sco' => 'string',
        'culture' => 'string',
        'css_url' => 'string',
        'learner_tags' => 'string[]',
        'course_tags' => 'string[]',
        'registration_tags' => 'string[]',
        'additionalvalues' => '\RusticiSoftware\Cloud\V2\Model\ItemValuePairSchema[]'
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
        'expiry' => 'expiry',
        'redirect_on_exit_url' => 'redirectOnExitUrl',
        'tracking' => 'tracking',
        'start_sco' => 'startSco',
        'culture' => 'culture',
        'css_url' => 'cssUrl',
        'learner_tags' => 'learnerTags',
        'course_tags' => 'courseTags',
        'registration_tags' => 'registrationTags',
        'additionalvalues' => 'additionalvalues'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'expiry' => 'setExpiry',
        'redirect_on_exit_url' => 'setRedirectOnExitUrl',
        'tracking' => 'setTracking',
        'start_sco' => 'setStartSco',
        'culture' => 'setCulture',
        'css_url' => 'setCssUrl',
        'learner_tags' => 'setLearnerTags',
        'course_tags' => 'setCourseTags',
        'registration_tags' => 'setRegistrationTags',
        'additionalvalues' => 'setAdditionalvalues'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'expiry' => 'getExpiry',
        'redirect_on_exit_url' => 'getRedirectOnExitUrl',
        'tracking' => 'getTracking',
        'start_sco' => 'getStartSco',
        'culture' => 'getCulture',
        'css_url' => 'getCssUrl',
        'learner_tags' => 'getLearnerTags',
        'course_tags' => 'getCourseTags',
        'registration_tags' => 'getRegistrationTags',
        'additionalvalues' => 'getAdditionalvalues'
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
        $this->container['expiry'] = isset($data['expiry']) ? $data['expiry'] : 120;
        $this->container['redirect_on_exit_url'] = isset($data['redirect_on_exit_url']) ? $data['redirect_on_exit_url'] : null;
        $this->container['tracking'] = isset($data['tracking']) ? $data['tracking'] : true;
        $this->container['start_sco'] = isset($data['start_sco']) ? $data['start_sco'] : null;
        $this->container['culture'] = isset($data['culture']) ? $data['culture'] : null;
        $this->container['css_url'] = isset($data['css_url']) ? $data['css_url'] : null;
        $this->container['learner_tags'] = isset($data['learner_tags']) ? $data['learner_tags'] : null;
        $this->container['course_tags'] = isset($data['course_tags']) ? $data['course_tags'] : null;
        $this->container['registration_tags'] = isset($data['registration_tags']) ? $data['registration_tags'] : null;
        $this->container['additionalvalues'] = isset($data['additionalvalues']) ? $data['additionalvalues'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['redirect_on_exit_url'] === null) {
            $invalid_properties[] = "'redirect_on_exit_url' can't be null";
        }
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

        if ($this->container['redirect_on_exit_url'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets expiry
     * @return int
     */
    public function getExpiry()
    {
        return $this->container['expiry'];
    }

    /**
     * Sets expiry
     * @param int $expiry Number of seconds from now this link will expire in. Defaults to 120s. Range 10s:300s
     * @return $this
     */
    public function setExpiry($expiry)
    {
        $this->container['expiry'] = $expiry;

        return $this;
    }

    /**
     * Gets redirect_on_exit_url
     * @return string
     */
    public function getRedirectOnExitUrl()
    {
        return $this->container['redirect_on_exit_url'];
    }

    /**
     * Sets redirect_on_exit_url
     * @param string $redirect_on_exit_url The URL the application should redirect to when the learner exits a course. If not specified, configured value will be used.
     * @return $this
     */
    public function setRedirectOnExitUrl($redirect_on_exit_url)
    {
        $this->container['redirect_on_exit_url'] = $redirect_on_exit_url;

        return $this;
    }

    /**
     * Gets tracking
     * @return bool
     */
    public function getTracking()
    {
        return $this->container['tracking'];
    }

    /**
     * Sets tracking
     * @param bool $tracking Should this launch be tracked? If false, Engine will avoid tracking to the extent possible for the standard being used.
     * @return $this
     */
    public function setTracking($tracking)
    {
        $this->container['tracking'] = $tracking;

        return $this;
    }

    /**
     * Gets start_sco
     * @return string
     */
    public function getStartSco()
    {
        return $this->container['start_sco'];
    }

    /**
     * Sets start_sco
     * @param string $start_sco For SCORM, SCO identifier to override launch, overriding the normal sequencing.
     * @return $this
     */
    public function setStartSco($start_sco)
    {
        $this->container['start_sco'] = $start_sco;

        return $this;
    }

    /**
     * Gets culture
     * @return string
     */
    public function getCulture()
    {
        return $this->container['culture'];
    }

    /**
     * Sets culture
     * @param string $culture This parameter should specify a culture code. If specified, and supported, the navigation and alerts in the player will be displayed in the associated language. If not specified, the locale of the user’s browser will be used.
     * @return $this
     */
    public function setCulture($culture)
    {
        $this->container['culture'] = $culture;

        return $this;
    }

    /**
     * Gets css_url
     * @return string
     */
    public function getCssUrl()
    {
        return $this->container['css_url'];
    }

    /**
     * Sets css_url
     * @param string $css_url A Url pointing to custom css for the player to use.
     * @return $this
     */
    public function setCssUrl($css_url)
    {
        $this->container['css_url'] = $css_url;

        return $this;
    }

    /**
     * Gets learner_tags
     * @return string[]
     */
    public function getLearnerTags()
    {
        return $this->container['learner_tags'];
    }

    /**
     * Sets learner_tags
     * @param string[] $learner_tags
     * @return $this
     */
    public function setLearnerTags($learner_tags)
    {
        $this->container['learner_tags'] = $learner_tags;

        return $this;
    }

    /**
     * Gets course_tags
     * @return string[]
     */
    public function getCourseTags()
    {
        return $this->container['course_tags'];
    }

    /**
     * Sets course_tags
     * @param string[] $course_tags
     * @return $this
     */
    public function setCourseTags($course_tags)
    {
        $this->container['course_tags'] = $course_tags;

        return $this;
    }

    /**
     * Gets registration_tags
     * @return string[]
     */
    public function getRegistrationTags()
    {
        return $this->container['registration_tags'];
    }

    /**
     * Sets registration_tags
     * @param string[] $registration_tags
     * @return $this
     */
    public function setRegistrationTags($registration_tags)
    {
        $this->container['registration_tags'] = $registration_tags;

        return $this;
    }

    /**
     * Gets additionalvalues
     * @return \RusticiSoftware\Cloud\V2\Model\ItemValuePairSchema[]
     */
    public function getAdditionalvalues()
    {
        return $this->container['additionalvalues'];
    }

    /**
     * Sets additionalvalues
     * @param \RusticiSoftware\Cloud\V2\Model\ItemValuePairSchema[] $additionalvalues
     * @return $this
     */
    public function setAdditionalvalues($additionalvalues)
    {
        $this->container['additionalvalues'] = $additionalvalues;

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


