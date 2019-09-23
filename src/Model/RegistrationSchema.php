<?php
/**
 * RegistrationSchema
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
 * RegistrationSchema Class Doc Comment
 *
 * @category    Class
 * @package     RusticiSoftware\Cloud\V2
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class RegistrationSchema implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'RegistrationSchema';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
        'instance' => 'int',
        'xapi_registration_id' => 'string',
        'dispatch_id' => 'string',
        'updated' => '\DateTime',
        'registration_completion' => '\RusticiSoftware\Cloud\V2\Model\RegistrationCompletion',
        'registration_completion_amount' => 'double',
        'registration_success' => '\RusticiSoftware\Cloud\V2\Model\RegistrationSuccess',
        'score' => '\RusticiSoftware\Cloud\V2\Model\ScoreSchema',
        'total_seconds_tracked' => 'double',
        'first_access_date' => '\DateTime',
        'last_access_date' => '\DateTime',
        'completed_date' => '\DateTime',
        'created_date' => '\DateTime',
        'course' => '\RusticiSoftware\Cloud\V2\Model\CourseReferenceSchema',
        'learner' => '\RusticiSoftware\Cloud\V2\Model\LearnerSchema',
        'tags' => 'string[]',
        'global_objectives' => '\RusticiSoftware\Cloud\V2\Model\ObjectiveSchema[]',
        'shared_data' => '\RusticiSoftware\Cloud\V2\Model\SharedDataEntrySchema[]',
        'suspended_activity_id' => 'string',
        'activity_details' => '\RusticiSoftware\Cloud\V2\Model\ActivityResultSchema'
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
        'id' => 'id',
        'instance' => 'instance',
        'xapi_registration_id' => 'xapiRegistrationId',
        'dispatch_id' => 'dispatchId',
        'updated' => 'updated',
        'registration_completion' => 'registrationCompletion',
        'registration_completion_amount' => 'registrationCompletionAmount',
        'registration_success' => 'registrationSuccess',
        'score' => 'score',
        'total_seconds_tracked' => 'totalSecondsTracked',
        'first_access_date' => 'firstAccessDate',
        'last_access_date' => 'lastAccessDate',
        'completed_date' => 'completedDate',
        'created_date' => 'createdDate',
        'course' => 'course',
        'learner' => 'learner',
        'tags' => 'tags',
        'global_objectives' => 'globalObjectives',
        'shared_data' => 'sharedData',
        'suspended_activity_id' => 'suspendedActivityId',
        'activity_details' => 'activityDetails'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'instance' => 'setInstance',
        'xapi_registration_id' => 'setXapiRegistrationId',
        'dispatch_id' => 'setDispatchId',
        'updated' => 'setUpdated',
        'registration_completion' => 'setRegistrationCompletion',
        'registration_completion_amount' => 'setRegistrationCompletionAmount',
        'registration_success' => 'setRegistrationSuccess',
        'score' => 'setScore',
        'total_seconds_tracked' => 'setTotalSecondsTracked',
        'first_access_date' => 'setFirstAccessDate',
        'last_access_date' => 'setLastAccessDate',
        'completed_date' => 'setCompletedDate',
        'created_date' => 'setCreatedDate',
        'course' => 'setCourse',
        'learner' => 'setLearner',
        'tags' => 'setTags',
        'global_objectives' => 'setGlobalObjectives',
        'shared_data' => 'setSharedData',
        'suspended_activity_id' => 'setSuspendedActivityId',
        'activity_details' => 'setActivityDetails'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'instance' => 'getInstance',
        'xapi_registration_id' => 'getXapiRegistrationId',
        'dispatch_id' => 'getDispatchId',
        'updated' => 'getUpdated',
        'registration_completion' => 'getRegistrationCompletion',
        'registration_completion_amount' => 'getRegistrationCompletionAmount',
        'registration_success' => 'getRegistrationSuccess',
        'score' => 'getScore',
        'total_seconds_tracked' => 'getTotalSecondsTracked',
        'first_access_date' => 'getFirstAccessDate',
        'last_access_date' => 'getLastAccessDate',
        'completed_date' => 'getCompletedDate',
        'created_date' => 'getCreatedDate',
        'course' => 'getCourse',
        'learner' => 'getLearner',
        'tags' => 'getTags',
        'global_objectives' => 'getGlobalObjectives',
        'shared_data' => 'getSharedData',
        'suspended_activity_id' => 'getSuspendedActivityId',
        'activity_details' => 'getActivityDetails'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['instance'] = isset($data['instance']) ? $data['instance'] : null;
        $this->container['xapi_registration_id'] = isset($data['xapi_registration_id']) ? $data['xapi_registration_id'] : null;
        $this->container['dispatch_id'] = isset($data['dispatch_id']) ? $data['dispatch_id'] : null;
        $this->container['updated'] = isset($data['updated']) ? $data['updated'] : null;
        $this->container['registration_completion'] = isset($data['registration_completion']) ? $data['registration_completion'] : null;
        $this->container['registration_completion_amount'] = isset($data['registration_completion_amount']) ? $data['registration_completion_amount'] : null;
        $this->container['registration_success'] = isset($data['registration_success']) ? $data['registration_success'] : null;
        $this->container['score'] = isset($data['score']) ? $data['score'] : null;
        $this->container['total_seconds_tracked'] = isset($data['total_seconds_tracked']) ? $data['total_seconds_tracked'] : null;
        $this->container['first_access_date'] = isset($data['first_access_date']) ? $data['first_access_date'] : null;
        $this->container['last_access_date'] = isset($data['last_access_date']) ? $data['last_access_date'] : null;
        $this->container['completed_date'] = isset($data['completed_date']) ? $data['completed_date'] : null;
        $this->container['created_date'] = isset($data['created_date']) ? $data['created_date'] : null;
        $this->container['course'] = isset($data['course']) ? $data['course'] : null;
        $this->container['learner'] = isset($data['learner']) ? $data['learner'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['global_objectives'] = isset($data['global_objectives']) ? $data['global_objectives'] : null;
        $this->container['shared_data'] = isset($data['shared_data']) ? $data['shared_data'] : null;
        $this->container['suspended_activity_id'] = isset($data['suspended_activity_id']) ? $data['suspended_activity_id'] : null;
        $this->container['activity_details'] = isset($data['activity_details']) ? $data['activity_details'] : null;
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
     * Gets id
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     * @param string $id
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets instance
     * @return int
     */
    public function getInstance()
    {
        return $this->container['instance'];
    }

    /**
     * Sets instance
     * @param int $instance
     * @return $this
     */
    public function setInstance($instance)
    {
        $this->container['instance'] = $instance;

        return $this;
    }

    /**
     * Gets xapi_registration_id
     * @return string
     */
    public function getXapiRegistrationId()
    {
        return $this->container['xapi_registration_id'];
    }

    /**
     * Sets xapi_registration_id
     * @param string $xapi_registration_id xAPI registration id associated with this registration
     * @return $this
     */
    public function setXapiRegistrationId($xapi_registration_id)
    {
        $this->container['xapi_registration_id'] = $xapi_registration_id;

        return $this;
    }

    /**
     * Gets dispatch_id
     * @return string
     */
    public function getDispatchId()
    {
        return $this->container['dispatch_id'];
    }

    /**
     * Sets dispatch_id
     * @param string $dispatch_id Dispatch ID for this registration, if applicable
     * @return $this
     */
    public function setDispatchId($dispatch_id)
    {
        $this->container['dispatch_id'] = $dispatch_id;

        return $this;
    }

    /**
     * Gets updated
     * @return \DateTime
     */
    public function getUpdated()
    {
        return $this->container['updated'];
    }

    /**
     * Sets updated
     * @param \DateTime $updated
     * @return $this
     */
    public function setUpdated($updated)
    {
        $this->container['updated'] = $updated;

        return $this;
    }

    /**
     * Gets registration_completion
     * @return \RusticiSoftware\Cloud\V2\Model\RegistrationCompletion
     */
    public function getRegistrationCompletion()
    {
        return $this->container['registration_completion'];
    }

    /**
     * Sets registration_completion
     * @param \RusticiSoftware\Cloud\V2\Model\RegistrationCompletion $registration_completion
     * @return $this
     */
    public function setRegistrationCompletion($registration_completion)
    {
        $this->container['registration_completion'] = $registration_completion;

        return $this;
    }

    /**
     * Gets registration_completion_amount
     * @return double
     */
    public function getRegistrationCompletionAmount()
    {
        return $this->container['registration_completion_amount'];
    }

    /**
     * Sets registration_completion_amount
     * @param double $registration_completion_amount
     * @return $this
     */
    public function setRegistrationCompletionAmount($registration_completion_amount)
    {
        $this->container['registration_completion_amount'] = $registration_completion_amount;

        return $this;
    }

    /**
     * Gets registration_success
     * @return \RusticiSoftware\Cloud\V2\Model\RegistrationSuccess
     */
    public function getRegistrationSuccess()
    {
        return $this->container['registration_success'];
    }

    /**
     * Sets registration_success
     * @param \RusticiSoftware\Cloud\V2\Model\RegistrationSuccess $registration_success
     * @return $this
     */
    public function setRegistrationSuccess($registration_success)
    {
        $this->container['registration_success'] = $registration_success;

        return $this;
    }

    /**
     * Gets score
     * @return \RusticiSoftware\Cloud\V2\Model\ScoreSchema
     */
    public function getScore()
    {
        return $this->container['score'];
    }

    /**
     * Sets score
     * @param \RusticiSoftware\Cloud\V2\Model\ScoreSchema $score
     * @return $this
     */
    public function setScore($score)
    {
        $this->container['score'] = $score;

        return $this;
    }

    /**
     * Gets total_seconds_tracked
     * @return double
     */
    public function getTotalSecondsTracked()
    {
        return $this->container['total_seconds_tracked'];
    }

    /**
     * Sets total_seconds_tracked
     * @param double $total_seconds_tracked
     * @return $this
     */
    public function setTotalSecondsTracked($total_seconds_tracked)
    {
        $this->container['total_seconds_tracked'] = $total_seconds_tracked;

        return $this;
    }

    /**
     * Gets first_access_date
     * @return \DateTime
     */
    public function getFirstAccessDate()
    {
        return $this->container['first_access_date'];
    }

    /**
     * Sets first_access_date
     * @param \DateTime $first_access_date
     * @return $this
     */
    public function setFirstAccessDate($first_access_date)
    {
        $this->container['first_access_date'] = $first_access_date;

        return $this;
    }

    /**
     * Gets last_access_date
     * @return \DateTime
     */
    public function getLastAccessDate()
    {
        return $this->container['last_access_date'];
    }

    /**
     * Sets last_access_date
     * @param \DateTime $last_access_date
     * @return $this
     */
    public function setLastAccessDate($last_access_date)
    {
        $this->container['last_access_date'] = $last_access_date;

        return $this;
    }

    /**
     * Gets completed_date
     * @return \DateTime
     */
    public function getCompletedDate()
    {
        return $this->container['completed_date'];
    }

    /**
     * Sets completed_date
     * @param \DateTime $completed_date
     * @return $this
     */
    public function setCompletedDate($completed_date)
    {
        $this->container['completed_date'] = $completed_date;

        return $this;
    }

    /**
     * Gets created_date
     * @return \DateTime
     */
    public function getCreatedDate()
    {
        return $this->container['created_date'];
    }

    /**
     * Sets created_date
     * @param \DateTime $created_date
     * @return $this
     */
    public function setCreatedDate($created_date)
    {
        $this->container['created_date'] = $created_date;

        return $this;
    }

    /**
     * Gets course
     * @return \RusticiSoftware\Cloud\V2\Model\CourseReferenceSchema
     */
    public function getCourse()
    {
        return $this->container['course'];
    }

    /**
     * Sets course
     * @param \RusticiSoftware\Cloud\V2\Model\CourseReferenceSchema $course
     * @return $this
     */
    public function setCourse($course)
    {
        $this->container['course'] = $course;

        return $this;
    }

    /**
     * Gets learner
     * @return \RusticiSoftware\Cloud\V2\Model\LearnerSchema
     */
    public function getLearner()
    {
        return $this->container['learner'];
    }

    /**
     * Sets learner
     * @param \RusticiSoftware\Cloud\V2\Model\LearnerSchema $learner
     * @return $this
     */
    public function setLearner($learner)
    {
        $this->container['learner'] = $learner;

        return $this;
    }

    /**
     * Gets tags
     * @return string[]
     */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
     * Sets tags
     * @param string[] $tags
     * @return $this
     */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;

        return $this;
    }

    /**
     * Gets global_objectives
     * @return \RusticiSoftware\Cloud\V2\Model\ObjectiveSchema[]
     */
    public function getGlobalObjectives()
    {
        return $this->container['global_objectives'];
    }

    /**
     * Sets global_objectives
     * @param \RusticiSoftware\Cloud\V2\Model\ObjectiveSchema[] $global_objectives
     * @return $this
     */
    public function setGlobalObjectives($global_objectives)
    {
        $this->container['global_objectives'] = $global_objectives;

        return $this;
    }

    /**
     * Gets shared_data
     * @return \RusticiSoftware\Cloud\V2\Model\SharedDataEntrySchema[]
     */
    public function getSharedData()
    {
        return $this->container['shared_data'];
    }

    /**
     * Sets shared_data
     * @param \RusticiSoftware\Cloud\V2\Model\SharedDataEntrySchema[] $shared_data
     * @return $this
     */
    public function setSharedData($shared_data)
    {
        $this->container['shared_data'] = $shared_data;

        return $this;
    }

    /**
     * Gets suspended_activity_id
     * @return string
     */
    public function getSuspendedActivityId()
    {
        return $this->container['suspended_activity_id'];
    }

    /**
     * Sets suspended_activity_id
     * @param string $suspended_activity_id
     * @return $this
     */
    public function setSuspendedActivityId($suspended_activity_id)
    {
        $this->container['suspended_activity_id'] = $suspended_activity_id;

        return $this;
    }

    /**
     * Gets activity_details
     * @return \RusticiSoftware\Cloud\V2\Model\ActivityResultSchema
     */
    public function getActivityDetails()
    {
        return $this->container['activity_details'];
    }

    /**
     * Sets activity_details
     * @param \RusticiSoftware\Cloud\V2\Model\ActivityResultSchema $activity_details
     * @return $this
     */
    public function setActivityDetails($activity_details)
    {
        $this->container['activity_details'] = $activity_details;

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


