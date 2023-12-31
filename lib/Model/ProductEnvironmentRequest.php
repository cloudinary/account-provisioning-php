<?php
/**
 * ProductEnvironmentRequest
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  Cloudinary\Provisioning
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Cloudinary Account Provisioning API
 *
 * Accounts with provisioning API access can create and manage their **product environments**, **users** and **user groups** using the RESTful Provisioning API.   Provisioning API access is available [upon request](https://cloudinary.com/contact?plan=enterprise) for accounts on an [Enterprise plan](https://cloudinary.com/pricing#pricing-enterprise).
 *
 * The version of the OpenAPI document: 0.0.2
 * Contact: support@cloudinary.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.0.1-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Cloudinary\Provisioning\Model;

use \ArrayAccess;
use \Cloudinary\Provisioning\ObjectSerializer;

/**
 * ProductEnvironmentRequest Class Doc Comment
 *
 * @category Class
 * @package  Cloudinary\Provisioning
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ProductEnvironmentRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ProductEnvironmentRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'name' => 'string',
        'cloud_name' => 'string',
        'base_sub_account_id' => 'string',
        'custom_attributes' => 'object'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'name' => null,
        'cloud_name' => null,
        'base_sub_account_id' => null,
        'custom_attributes' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'name' => 'name',
        'cloud_name' => 'cloud_name',
        'base_sub_account_id' => 'base_sub_account_id',
        'custom_attributes' => 'custom_attributes'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'cloud_name' => 'setCloudName',
        'base_sub_account_id' => 'setBaseSubAccountId',
        'custom_attributes' => 'setCustomAttributes'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'cloud_name' => 'getCloudName',
        'base_sub_account_id' => 'getBaseSubAccountId',
        'custom_attributes' => 'getCustomAttributes'
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
        return self::$openAPIModelName;
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
        $this->container['name'] = $data['name'] ?? null;
        $this->container['cloud_name'] = $data['cloud_name'] ?? null;
        $this->container['base_sub_account_id'] = $data['base_sub_account_id'] ?? null;
        $this->container['custom_attributes'] = $data['custom_attributes'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
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
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name The display name for the product environment.
     *
     * @return self
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets cloud_name
     *
     * @return string|null
     */
    public function getCloudName()
    {
        return $this->container['cloud_name'];
    }

    /**
     * Sets cloud_name
     *
     * @param string|null $cloud_name The Cloudinary cloud name (optional, default is auto-generated).
     *
     * @return self
     */
    public function setCloudName($cloud_name)
    {
        $this->container['cloud_name'] = $cloud_name;

        return $this;
    }

    /**
     * Gets base_sub_account_id
     *
     * @return string|null
     */
    public function getBaseSubAccountId()
    {
        return $this->container['base_sub_account_id'];
    }

    /**
     * Sets base_sub_account_id
     *
     * @param string|null $base_sub_account_id The ID of another product environment to copy settings from (optional).
     *
     * @return self
     */
    public function setBaseSubAccountId($base_sub_account_id)
    {
        $this->container['base_sub_account_id'] = $base_sub_account_id;

        return $this;
    }

    /**
     * Gets custom_attributes
     *
     * @return object|null
     */
    public function getCustomAttributes()
    {
        return $this->container['custom_attributes'];
    }

    /**
     * Sets custom_attributes
     *
     * @param object|null $custom_attributes Custom attributes associated with the product environment (optional).
     *
     * @return self
     */
    public function setCustomAttributes($custom_attributes)
    {
        $this->container['custom_attributes'] = $custom_attributes;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
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
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


