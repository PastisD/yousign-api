<?php
/**
 * ProcedureConfigEmail
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
 * ProcedureConfigEmail Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ProcedureConfigEmail implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ProcedureConfigEmail';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'procedure_started' => '\Swagger\Client\Model\ConfigEmailTemplate[]',
        'procedure_finished' => '\Swagger\Client\Model\ConfigEmailTemplate[]',
        'procedure_refused' => '\Swagger\Client\Model\ConfigEmailTemplate[]',
        'procedure_expired' => '\Swagger\Client\Model\ConfigEmailTemplate[]',
        'procedure_deleted' => '\Swagger\Client\Model\ConfigEmailTemplate[]',
        'member_started' => '\Swagger\Client\Model\ConfigEmailTemplate[]',
        'member_finished' => '\Swagger\Client\Model\ConfigEmailTemplate[]',
        'comment_created' => '\Swagger\Client\Model\ConfigEmailTemplate[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'procedure_started' => null,
        'procedure_finished' => null,
        'procedure_refused' => null,
        'procedure_expired' => null,
        'procedure_deleted' => null,
        'member_started' => null,
        'member_finished' => null,
        'comment_created' => null
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
        'procedure_started' => 'procedure.started',
        'procedure_finished' => 'procedure.finished',
        'procedure_refused' => 'procedure.refused',
        'procedure_expired' => 'procedure.expired',
        'procedure_deleted' => 'procedure.deleted',
        'member_started' => 'member.started',
        'member_finished' => 'member.finished',
        'comment_created' => 'comment.created'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'procedure_started' => 'setProcedureStarted',
        'procedure_finished' => 'setProcedureFinished',
        'procedure_refused' => 'setProcedureRefused',
        'procedure_expired' => 'setProcedureExpired',
        'procedure_deleted' => 'setProcedureDeleted',
        'member_started' => 'setMemberStarted',
        'member_finished' => 'setMemberFinished',
        'comment_created' => 'setCommentCreated'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'procedure_started' => 'getProcedureStarted',
        'procedure_finished' => 'getProcedureFinished',
        'procedure_refused' => 'getProcedureRefused',
        'procedure_expired' => 'getProcedureExpired',
        'procedure_deleted' => 'getProcedureDeleted',
        'member_started' => 'getMemberStarted',
        'member_finished' => 'getMemberFinished',
        'comment_created' => 'getCommentCreated'
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
        $this->container['procedure_started'] = isset($data['procedure_started']) ? $data['procedure_started'] : null;
        $this->container['procedure_finished'] = isset($data['procedure_finished']) ? $data['procedure_finished'] : null;
        $this->container['procedure_refused'] = isset($data['procedure_refused']) ? $data['procedure_refused'] : null;
        $this->container['procedure_expired'] = isset($data['procedure_expired']) ? $data['procedure_expired'] : null;
        $this->container['procedure_deleted'] = isset($data['procedure_deleted']) ? $data['procedure_deleted'] : null;
        $this->container['member_started'] = isset($data['member_started']) ? $data['member_started'] : null;
        $this->container['member_finished'] = isset($data['member_finished']) ? $data['member_finished'] : null;
        $this->container['comment_created'] = isset($data['comment_created']) ? $data['comment_created'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

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

        return true;
    }


    /**
     * Gets procedure_started
     *
     * @return \Swagger\Client\Model\ConfigEmailTemplate[]
     */
    public function getProcedureStarted()
    {
        return $this->container['procedure_started'];
    }

    /**
     * Sets procedure_started
     *
     * @param \Swagger\Client\Model\ConfigEmailTemplate[] $procedure_started procedure_started
     *
     * @return $this
     */
    public function setProcedureStarted($procedure_started)
    {
        $this->container['procedure_started'] = $procedure_started;

        return $this;
    }

    /**
     * Gets procedure_finished
     *
     * @return \Swagger\Client\Model\ConfigEmailTemplate[]
     */
    public function getProcedureFinished()
    {
        return $this->container['procedure_finished'];
    }

    /**
     * Sets procedure_finished
     *
     * @param \Swagger\Client\Model\ConfigEmailTemplate[] $procedure_finished procedure_finished
     *
     * @return $this
     */
    public function setProcedureFinished($procedure_finished)
    {
        $this->container['procedure_finished'] = $procedure_finished;

        return $this;
    }

    /**
     * Gets procedure_refused
     *
     * @return \Swagger\Client\Model\ConfigEmailTemplate[]
     */
    public function getProcedureRefused()
    {
        return $this->container['procedure_refused'];
    }

    /**
     * Sets procedure_refused
     *
     * @param \Swagger\Client\Model\ConfigEmailTemplate[] $procedure_refused procedure_refused
     *
     * @return $this
     */
    public function setProcedureRefused($procedure_refused)
    {
        $this->container['procedure_refused'] = $procedure_refused;

        return $this;
    }

    /**
     * Gets procedure_expired
     *
     * @return \Swagger\Client\Model\ConfigEmailTemplate[]
     */
    public function getProcedureExpired()
    {
        return $this->container['procedure_expired'];
    }

    /**
     * Sets procedure_expired
     *
     * @param \Swagger\Client\Model\ConfigEmailTemplate[] $procedure_expired procedure_expired
     *
     * @return $this
     */
    public function setProcedureExpired($procedure_expired)
    {
        $this->container['procedure_expired'] = $procedure_expired;

        return $this;
    }

    /**
     * Gets procedure_deleted
     *
     * @return \Swagger\Client\Model\ConfigEmailTemplate[]
     */
    public function getProcedureDeleted()
    {
        return $this->container['procedure_deleted'];
    }

    /**
     * Sets procedure_deleted
     *
     * @param \Swagger\Client\Model\ConfigEmailTemplate[] $procedure_deleted procedure_deleted
     *
     * @return $this
     */
    public function setProcedureDeleted($procedure_deleted)
    {
        $this->container['procedure_deleted'] = $procedure_deleted;

        return $this;
    }

    /**
     * Gets member_started
     *
     * @return \Swagger\Client\Model\ConfigEmailTemplate[]
     */
    public function getMemberStarted()
    {
        return $this->container['member_started'];
    }

    /**
     * Sets member_started
     *
     * @param \Swagger\Client\Model\ConfigEmailTemplate[] $member_started member_started
     *
     * @return $this
     */
    public function setMemberStarted($member_started)
    {
        $this->container['member_started'] = $member_started;

        return $this;
    }

    /**
     * Gets member_finished
     *
     * @return \Swagger\Client\Model\ConfigEmailTemplate[]
     */
    public function getMemberFinished()
    {
        return $this->container['member_finished'];
    }

    /**
     * Sets member_finished
     *
     * @param \Swagger\Client\Model\ConfigEmailTemplate[] $member_finished member_finished
     *
     * @return $this
     */
    public function setMemberFinished($member_finished)
    {
        $this->container['member_finished'] = $member_finished;

        return $this;
    }

    /**
     * Gets comment_created
     *
     * @return \Swagger\Client\Model\ConfigEmailTemplate[]
     */
    public function getCommentCreated()
    {
        return $this->container['comment_created'];
    }

    /**
     * Sets comment_created
     *
     * @param \Swagger\Client\Model\ConfigEmailTemplate[] $comment_created comment_created
     *
     * @return $this
     */
    public function setCommentCreated($comment_created)
    {
        $this->container['comment_created'] = $comment_created;

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


