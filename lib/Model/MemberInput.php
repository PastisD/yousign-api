<?php
/**
 * MemberInput
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Yousign API Swagger
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: 2.1
 * Contact: support@yousign.fr
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.3.1
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
 * MemberInput Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class MemberInput implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'MemberInput';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'user' => 'string',
        'type' => 'string',
        'firstname' => 'string',
        'lastname' => 'string',
        'email' => 'string',
        'phone' => 'string',
        'position' => 'int',
        'file_objects' => '\Swagger\Client\Model\FileObjectInput[]',
        'procedure' => 'string',
        'operation_level' => 'string',
        'operation_custom_modes' => 'string[]',
        'mode_sms_configuration' => '\Swagger\Client\Model\ModeSmsConfiguration'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'user' => null,
        'type' => null,
        'firstname' => null,
        'lastname' => null,
        'email' => null,
        'phone' => null,
        'position' => 'int32',
        'file_objects' => null,
        'procedure' => null,
        'operation_level' => null,
        'operation_custom_modes' => null,
        'mode_sms_configuration' => null
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
        'user' => 'user',
        'type' => 'type',
        'firstname' => 'firstname',
        'lastname' => 'lastname',
        'email' => 'email',
        'phone' => 'phone',
        'position' => 'position',
        'file_objects' => 'fileObjects',
        'procedure' => 'procedure',
        'operation_level' => 'operationLevel',
        'operation_custom_modes' => 'operationCustomModes',
        'mode_sms_configuration' => 'modeSmsConfiguration'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'user' => 'setUser',
        'type' => 'setType',
        'firstname' => 'setFirstname',
        'lastname' => 'setLastname',
        'email' => 'setEmail',
        'phone' => 'setPhone',
        'position' => 'setPosition',
        'file_objects' => 'setFileObjects',
        'procedure' => 'setProcedure',
        'operation_level' => 'setOperationLevel',
        'operation_custom_modes' => 'setOperationCustomModes',
        'mode_sms_configuration' => 'setModeSmsConfiguration'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'user' => 'getUser',
        'type' => 'getType',
        'firstname' => 'getFirstname',
        'lastname' => 'getLastname',
        'email' => 'getEmail',
        'phone' => 'getPhone',
        'position' => 'getPosition',
        'file_objects' => 'getFileObjects',
        'procedure' => 'getProcedure',
        'operation_level' => 'getOperationLevel',
        'operation_custom_modes' => 'getOperationCustomModes',
        'mode_sms_configuration' => 'getModeSmsConfiguration'
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

    const TYPE_SIGNER = 'signer';
    const TYPE_VALIDATOR = 'validator';
    const OPERATION_LEVEL_NONE = 'none';
    const OPERATION_LEVEL_CUSTOM = 'custom';
    const OPERATION_CUSTOM_MODES_SMS = 'sms';
    const OPERATION_CUSTOM_MODES_INWEBO = 'inwebo';
    const OPERATION_CUSTOM_MODES_EMAIL = 'email';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_SIGNER,
            self::TYPE_VALIDATOR,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getOperationLevelAllowableValues()
    {
        return [
            self::OPERATION_LEVEL_NONE,
            self::OPERATION_LEVEL_CUSTOM,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getOperationCustomModesAllowableValues()
    {
        return [
            self::OPERATION_CUSTOM_MODES_SMS,
            self::OPERATION_CUSTOM_MODES_INWEBO,
            self::OPERATION_CUSTOM_MODES_EMAIL,
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
        $this->container['user'] = isset($data['user']) ? $data['user'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : 'signer';
        $this->container['firstname'] = isset($data['firstname']) ? $data['firstname'] : null;
        $this->container['lastname'] = isset($data['lastname']) ? $data['lastname'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['phone'] = isset($data['phone']) ? $data['phone'] : null;
        $this->container['position'] = isset($data['position']) ? $data['position'] : null;
        $this->container['file_objects'] = isset($data['file_objects']) ? $data['file_objects'] : null;
        $this->container['procedure'] = isset($data['procedure']) ? $data['procedure'] : null;
        $this->container['operation_level'] = isset($data['operation_level']) ? $data['operation_level'] : null;
        $this->container['operation_custom_modes'] = isset($data['operation_custom_modes']) ? $data['operation_custom_modes'] : null;
        $this->container['mode_sms_configuration'] = isset($data['mode_sms_configuration']) ? $data['mode_sms_configuration'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getTypeAllowableValues();
        if (!in_array($this->container['type'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getOperationLevelAllowableValues();
        if (!in_array($this->container['operation_level'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'operation_level', must be one of '%s'",
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

        $allowedValues = $this->getTypeAllowableValues();
        if (!in_array($this->container['type'], $allowedValues)) {
            return false;
        }
        $allowedValues = $this->getOperationLevelAllowableValues();
        if (!in_array($this->container['operation_level'], $allowedValues)) {
            return false;
        }
        return true;
    }


    /**
     * Gets user
     *
     * @return string
     */
    public function getUser()
    {
        return $this->container['user'];
    }

    /**
     * Sets user
     *
     * @param string $user ID of the user in your companies. Informations about the member will be duplicate (first name, last name, email and phone number).  Required if none of fields above are specified.
     *
     * @return $this
     */
    public function setUser($user)
    {
        $this->container['user'] = $user;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string $type Type of a member. \"signer\" to sign documents (legally) and \"validator\" to validate documents.
     *
     * @return $this
     */
    public function setType($type)
    {
        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($type) && !in_array($type, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets firstname
     *
     * @return string
     */
    public function getFirstname()
    {
        return $this->container['firstname'];
    }

    /**
     * Sets firstname
     *
     * @param string $firstname Firstname of an external member. Required if user field is blank
     *
     * @return $this
     */
    public function setFirstname($firstname)
    {
        $this->container['firstname'] = $firstname;

        return $this;
    }

    /**
     * Gets lastname
     *
     * @return string
     */
    public function getLastname()
    {
        return $this->container['lastname'];
    }

    /**
     * Sets lastname
     *
     * @param string $lastname Lastname of an external member. Required if user field is blank
     *
     * @return $this
     */
    public function setLastname($lastname)
    {
        $this->container['lastname'] = $lastname;

        return $this;
    }

    /**
     * Gets email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string $email Email of an external member. Required if user field is blank
     *
     * @return $this
     */
    public function setEmail($email)
    {
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets phone
     *
     * @return string
     */
    public function getPhone()
    {
        return $this->container['phone'];
    }

    /**
     * Sets phone
     *
     * @param string $phone Phone of an external member. Required if user field is blank
     *
     * @return $this
     */
    public function setPhone($phone)
    {
        $this->container['phone'] = $phone;

        return $this;
    }

    /**
     * Gets position
     *
     * @return int
     */
    public function getPosition()
    {
        return $this->container['position'];
    }

    /**
     * Sets position
     *
     * @param int $position If the procedure have the boolean \"ordered\" at true, you can define position of the order to invite your members to sign. Only the first member will be invited to sign.  When the first member have signed, the second will be invited, etc...
     *
     * @return $this
     */
    public function setPosition($position)
    {
        $this->container['position'] = $position;

        return $this;
    }

    /**
     * Gets file_objects
     *
     * @return \Swagger\Client\Model\FileObjectInput[]
     */
    public function getFileObjects()
    {
        return $this->container['file_objects'];
    }

    /**
     * Sets file_objects
     *
     * @param \Swagger\Client\Model\FileObjectInput[] $file_objects file_objects
     *
     * @return $this
     */
    public function setFileObjects($file_objects)
    {
        $this->container['file_objects'] = $file_objects;

        return $this;
    }

    /**
     * Gets procedure
     *
     * @return string
     */
    public function getProcedure()
    {
        return $this->container['procedure'];
    }

    /**
     * Sets procedure
     *
     * @param string $procedure Procedure id reference
     *
     * @return $this
     */
    public function setProcedure($procedure)
    {
        $this->container['procedure'] = $procedure;

        return $this;
    }

    /**
     * Gets operation_level
     *
     * @return string
     */
    public function getOperationLevel()
    {
        return $this->container['operation_level'];
    }

    /**
     * Sets operation_level
     *
     * @param string $operation_level operation_level
     *
     * @return $this
     */
    public function setOperationLevel($operation_level)
    {
        $allowedValues = $this->getOperationLevelAllowableValues();
        if (!is_null($operation_level) && !in_array($operation_level, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'operation_level', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['operation_level'] = $operation_level;

        return $this;
    }

    /**
     * Gets operation_custom_modes
     *
     * @return string[]
     */
    public function getOperationCustomModes()
    {
        return $this->container['operation_custom_modes'];
    }

    /**
     * Sets operation_custom_modes
     *
     * @param string[] $operation_custom_modes operation_custom_modes
     *
     * @return $this
     */
    public function setOperationCustomModes($operation_custom_modes)
    {
        $allowedValues = $this->getOperationCustomModesAllowableValues();
        if (!is_null($operation_custom_modes) && array_diff($operation_custom_modes, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'operation_custom_modes', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['operation_custom_modes'] = $operation_custom_modes;

        return $this;
    }

    /**
     * Gets mode_sms_configuration
     *
     * @return \Swagger\Client\Model\ModeSmsConfiguration
     */
    public function getModeSmsConfiguration()
    {
        return $this->container['mode_sms_configuration'];
    }

    /**
     * Sets mode_sms_configuration
     *
     * @param \Swagger\Client\Model\ModeSmsConfiguration $mode_sms_configuration mode_sms_configuration
     *
     * @return $this
     */
    public function setModeSmsConfiguration($mode_sms_configuration)
    {
        $this->container['mode_sms_configuration'] = $mode_sms_configuration;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
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


