<?php
/**
 * UserUpdateInput
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
 * UserUpdateInput Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class UserUpdateInput implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'UserUpdateInput';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'firstname' => 'string',
        'lastname' => 'string',
        'title' => 'string',
        'phone' => 'string',
        'company' => 'string',
        'config' => 'object',
        'group' => 'string',
        'default_sign_image' => 'string',
        'notifications' => 'object'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'firstname' => null,
        'lastname' => null,
        'title' => null,
        'phone' => null,
        'company' => null,
        'config' => null,
        'group' => null,
        'default_sign_image' => null,
        'notifications' => null
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
        'firstname' => 'firstname',
        'lastname' => 'lastname',
        'title' => 'title',
        'phone' => 'phone',
        'company' => 'company',
        'config' => 'config',
        'group' => 'group',
        'default_sign_image' => 'defaultSignImage',
        'notifications' => 'notifications'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'firstname' => 'setFirstname',
        'lastname' => 'setLastname',
        'title' => 'setTitle',
        'phone' => 'setPhone',
        'company' => 'setCompany',
        'config' => 'setConfig',
        'group' => 'setGroup',
        'default_sign_image' => 'setDefaultSignImage',
        'notifications' => 'setNotifications'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'firstname' => 'getFirstname',
        'lastname' => 'getLastname',
        'title' => 'getTitle',
        'phone' => 'getPhone',
        'company' => 'getCompany',
        'config' => 'getConfig',
        'group' => 'getGroup',
        'default_sign_image' => 'getDefaultSignImage',
        'notifications' => 'getNotifications'
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
        $this->container['firstname'] = isset($data['firstname']) ? $data['firstname'] : null;
        $this->container['lastname'] = isset($data['lastname']) ? $data['lastname'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['phone'] = isset($data['phone']) ? $data['phone'] : null;
        $this->container['company'] = isset($data['company']) ? $data['company'] : null;
        $this->container['config'] = isset($data['config']) ? $data['config'] : null;
        $this->container['group'] = isset($data['group']) ? $data['group'] : null;
        $this->container['default_sign_image'] = isset($data['default_sign_image']) ? $data['default_sign_image'] : null;
        $this->container['notifications'] = isset($data['notifications']) ? $data['notifications'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['firstname'] === null) {
            $invalidProperties[] = "'firstname' can't be null";
        }
        if ($this->container['lastname'] === null) {
            $invalidProperties[] = "'lastname' can't be null";
        }
        if ($this->container['company'] === null) {
            $invalidProperties[] = "'company' can't be null";
        }
        if (!preg_match("/^\/companies\/[0-9a-f]{8}-([0-9a-f]{4}-){3}[0-9a-f]{12}$/", $this->container['company'])) {
            $invalidProperties[] = "invalid value for 'company', must be conform to the pattern /^\/companies\/[0-9a-f]{8}-([0-9a-f]{4}-){3}[0-9a-f]{12}$/.";
        }

        if (!is_null($this->container['group']) && !preg_match("/^\/user_groups\/[0-9a-f]{8}-([0-9a-f]{4}-){3}[0-9a-f]{12}$/", $this->container['group'])) {
            $invalidProperties[] = "invalid value for 'group', must be conform to the pattern /^\/user_groups\/[0-9a-f]{8}-([0-9a-f]{4}-){3}[0-9a-f]{12}$/.";
        }

        if (!is_null($this->container['default_sign_image']) && !preg_match("/^\/files\/[0-9a-f]{8}-([0-9a-f]{4}-){3}[0-9a-f]{12}$/", $this->container['default_sign_image'])) {
            $invalidProperties[] = "invalid value for 'default_sign_image', must be conform to the pattern /^\/files\/[0-9a-f]{8}-([0-9a-f]{4}-){3}[0-9a-f]{12}$/.";
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

        if ($this->container['firstname'] === null) {
            return false;
        }
        if ($this->container['lastname'] === null) {
            return false;
        }
        if ($this->container['company'] === null) {
            return false;
        }
        if (!preg_match("/^\/companies\/[0-9a-f]{8}-([0-9a-f]{4}-){3}[0-9a-f]{12}$/", $this->container['company'])) {
            return false;
        }
        if (!preg_match("/^\/user_groups\/[0-9a-f]{8}-([0-9a-f]{4}-){3}[0-9a-f]{12}$/", $this->container['group'])) {
            return false;
        }
        if (!preg_match("/^\/files\/[0-9a-f]{8}-([0-9a-f]{4}-){3}[0-9a-f]{12}$/", $this->container['default_sign_image'])) {
            return false;
        }
        return true;
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
     * @param string $firstname User's firstname
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
     * @param string $lastname User's lastname
     *
     * @return $this
     */
    public function setLastname($lastname)
    {
        $this->container['lastname'] = $lastname;

        return $this;
    }

    /**
     * Gets title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string $title User's job title
     *
     * @return $this
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

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
     * @param string $phone User's phone number (mobiles and landline telephones are supported). Phone number must be formatted to E164 (https://en.wikipedia.org/wiki/E.164) which includes the symbol '+' and the country code. For example : +33612131315. All countries are supported.
     *
     * @return $this
     */
    public function setPhone($phone)
    {
        $this->container['phone'] = $phone;

        return $this;
    }

    /**
     * Gets company
     *
     * @return string
     */
    public function getCompany()
    {
        return $this->container['company'];
    }

    /**
     * Sets company
     *
     * @param string $company User's company ID
     *
     * @return $this
     */
    public function setCompany($company)
    {

        if ((!preg_match("/^\/companies\/[0-9a-f]{8}-([0-9a-f]{4}-){3}[0-9a-f]{12}$/", $company))) {
            throw new \InvalidArgumentException("invalid value for $company when calling UserUpdateInput., must conform to the pattern /^\/companies\/[0-9a-f]{8}-([0-9a-f]{4}-){3}[0-9a-f]{12}$/.");
        }

        $this->container['company'] = $company;

        return $this;
    }

    /**
     * Gets config
     *
     * @return object
     */
    public function getConfig()
    {
        return $this->container['config'];
    }

    /**
     * Sets config
     *
     * @param object $config config
     *
     * @return $this
     */
    public function setConfig($config)
    {
        $this->container['config'] = $config;

        return $this;
    }

    /**
     * Gets group
     *
     * @return string
     */
    public function getGroup()
    {
        return $this->container['group'];
    }

    /**
     * Sets group
     *
     * @param string $group User's UserGroup
     *
     * @return $this
     */
    public function setGroup($group)
    {

        if (!is_null($group) && (!preg_match("/^\/user_groups\/[0-9a-f]{8}-([0-9a-f]{4}-){3}[0-9a-f]{12}$/", $group))) {
            throw new \InvalidArgumentException("invalid value for $group when calling UserUpdateInput., must conform to the pattern /^\/user_groups\/[0-9a-f]{8}-([0-9a-f]{4}-){3}[0-9a-f]{12}$/.");
        }

        $this->container['group'] = $group;

        return $this;
    }

    /**
     * Gets default_sign_image
     *
     * @return string
     */
    public function getDefaultSignImage()
    {
        return $this->container['default_sign_image'];
    }

    /**
     * Sets default_sign_image
     *
     * @param string $default_sign_image ID of file Image
     *
     * @return $this
     */
    public function setDefaultSignImage($default_sign_image)
    {

        if (!is_null($default_sign_image) && (!preg_match("/^\/files\/[0-9a-f]{8}-([0-9a-f]{4}-){3}[0-9a-f]{12}$/", $default_sign_image))) {
            throw new \InvalidArgumentException("invalid value for $default_sign_image when calling UserUpdateInput., must conform to the pattern /^\/files\/[0-9a-f]{8}-([0-9a-f]{4}-){3}[0-9a-f]{12}$/.");
        }

        $this->container['default_sign_image'] = $default_sign_image;

        return $this;
    }

    /**
     * Gets notifications
     *
     * @return object
     */
    public function getNotifications()
    {
        return $this->container['notifications'];
    }

    /**
     * Sets notifications
     *
     * @param object $notifications Defines if the notifications are enable ou disable for entities
     *
     * @return $this
     */
    public function setNotifications($notifications)
    {
        $this->container['notifications'] = $notifications;

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


