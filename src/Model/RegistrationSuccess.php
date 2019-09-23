<?php
/**
 * RegistrationSuccess
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
 * RegistrationSuccess Class Doc Comment
 *
 * @category    Class
 * @package     RusticiSoftware\Cloud\V2
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class RegistrationSuccess {

    const DISCRIMINATOR = null;

    const UNKNOWN = 'UNKNOWN';
    const PASSED = 'PASSED';
    const FAILED = 'FAILED';
    

    /**
    * Array of property to type mappings. Used for (de)serialization
    * @var string[]
    */
    protected static $swaggerTypes = [
        
    ];

    public static function swaggerTypes() {
        return self::$swaggerTypes;
    }

    
}

