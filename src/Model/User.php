<?php
/**
 * User
 *
 * PHP version 8.1
 *
 * @package  Cloudinary\Provisioning
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Cloudinary Account Provisioning API
 *
 * Accounts with provisioning API access can create and manage their **product environments**, **users** and **user groups** using the RESTful Provisioning API.   Provisioning API access is available [upon request](https://cloudinary.com/contact?plan=enterprise) for accounts on an [Enterprise plan](https://cloudinary.com/pricing#pricing-enterprise).
 *
 * The version of the OpenAPI document: 0.0.3
 * Contact: support@cloudinary.com
 * @generated Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 7.2.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Cloudinary\Provisioning\Model;

use ArrayAccess;
use JsonSerializable;
use InvalidArgumentException;
use ReturnTypeWillChange;
use Cloudinary\Provisioning\ObjectSerializer;

/**
 * User Class Doc Comment
 *
 * @description User details.
 * @package  Cloudinary\Provisioning
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class User implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'User';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'id' => 'string',
        'name' => 'string',
        'role' => 'string',
        'email' => 'string',
        'pending' => 'bool',
        'enabled' => 'bool',
        'createdAt' => '\DateTime',
        'lastLogin' => '\DateTime',
        'allSubAccounts' => 'bool',
        'groups' => 'string[]',
        'subAccountIds' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'id' => null,
        'name' => null,
        'role' => null,
        'email' => 'email',
        'pending' => null,
        'enabled' => null,
        'createdAt' => 'date-time',
        'lastLogin' => 'date-time',
        'allSubAccounts' => null,
        'groups' => null,
        'subAccountIds' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var array<string, bool>
      */
    protected static array $openAPINullables = [
        'id' => false,
        'name' => false,
        'role' => false,
        'email' => false,
        'pending' => false,
        'enabled' => false,
        'createdAt' => false,
        'lastLogin' => false,
        'allSubAccounts' => false,
        'groups' => false,
        'subAccountIds' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var array<string, bool>
      */
    protected array $openAPINullablesSetToNull = [];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array<string, string>
     */
    public static function openAPITypes(): array
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array<string, string>
     */
    public static function openAPIFormats(): array
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of nullable properties
     *
     * @return array<string, bool>
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return array<string, bool>
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param array<string, bool> $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var array<string, string>
     */
    protected static array $attributeMap = [
        'id' => 'id',
        'name' => 'name',
        'role' => 'role',
        'email' => 'email',
        'pending' => 'pending',
        'enabled' => 'enabled',
        'createdAt' => 'created_at',
        'lastLogin' => 'last_login',
        'allSubAccounts' => 'all_sub_accounts',
        'groups' => 'groups',
        'subAccountIds' => 'sub_account_ids'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var array<string, string>
     */
    protected static array $setters = [
        'id' => 'setId',
        'name' => 'setName',
        'role' => 'setRole',
        'email' => 'setEmail',
        'pending' => 'setPending',
        'enabled' => 'setEnabled',
        'createdAt' => 'setCreatedAt',
        'lastLogin' => 'setLastLogin',
        'allSubAccounts' => 'setAllSubAccounts',
        'groups' => 'setGroups',
        'subAccountIds' => 'setSubAccountIds'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var array<string, string>
     */
    protected static array $getters = [
        'id' => 'getId',
        'name' => 'getName',
        'role' => 'getRole',
        'email' => 'getEmail',
        'pending' => 'getPending',
        'enabled' => 'getEnabled',
        'createdAt' => 'getCreatedAt',
        'lastLogin' => 'getLastLogin',
        'allSubAccounts' => 'getAllSubAccounts',
        'groups' => 'getGroups',
        'subAccountIds' => 'getSubAccountIds'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array<string, string>
     */
    public static function attributeMap(): array
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array<string, string>
     */
    public static function setters(): array
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array<string, string>
     */
    public static function getters(): array
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName(): string
    {
        return self::$openAPIModelName;
    }


    /**
     * Associative array for storing property values
     *
     * @var array
     */
    protected array $container = [];

    /**
     * Constructor
     *
     * @param array $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('role', $data ?? [], null);
        $this->setIfExists('email', $data ?? [], null);
        $this->setIfExists('pending', $data ?? [], null);
        $this->setIfExists('enabled', $data ?? [], null);
        $this->setIfExists('createdAt', $data ?? [], null);
        $this->setIfExists('lastLogin', $data ?? [], null);
        $this->setIfExists('allSubAccounts', $data ?? [], null);
        $this->setIfExists('groups', $data ?? [], null);
        $this->setIfExists('subAccountIds', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, mixed $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return string[] invalid properties with reasons
     */
    public function listInvalidProperties(): array
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
    public function valid(): bool
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets id
     *
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string|null $id The user's ID.
     *
     * @return $this
     */
    public function setId(?string $id): static
    {
        if (is_null($id)) {
            throw new InvalidArgumentException('non-nullable id cannot be null');
        }
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name The user's name.
     *
     * @return $this
     */
    public function setName(?string $name): static
    {
        if (is_null($name)) {
            throw new InvalidArgumentException('non-nullable name cannot be null');
        }
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets role
     *
     * @return string|null
     */
    public function getRole(): ?string
    {
        return $this->container['role'];
    }

    /**
     * Sets role
     *
     * @param string|null $role The user's role.
     *
     * @return $this
     */
    public function setRole(?string $role): static
    {
        if (is_null($role)) {
            throw new InvalidArgumentException('non-nullable role cannot be null');
        }
        $this->container['role'] = $role;

        return $this;
    }

    /**
     * Gets email
     *
     * @return string|null
     */
    public function getEmail(): ?string
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string|null $email The user's email.
     *
     * @return $this
     */
    public function setEmail(?string $email): static
    {
        if (is_null($email)) {
            throw new InvalidArgumentException('non-nullable email cannot be null');
        }
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets pending
     *
     * @return bool|null
     */
    public function getPending(): ?bool
    {
        return $this->container['pending'];
    }

    /**
     * Sets pending
     *
     * @param bool|null $pending Whether the user is pending.
     *
     * @return $this
     */
    public function setPending(?bool $pending): static
    {
        if (is_null($pending)) {
            throw new InvalidArgumentException('non-nullable pending cannot be null');
        }
        $this->container['pending'] = $pending;

        return $this;
    }

    /**
     * Gets enabled
     *
     * @return bool|null
     */
    public function getEnabled(): ?bool
    {
        return $this->container['enabled'];
    }

    /**
     * Sets enabled
     *
     * @param bool|null $enabled Whether the user is enabled.
     *
     * @return $this
     */
    public function setEnabled(?bool $enabled): static
    {
        if (is_null($enabled)) {
            throw new InvalidArgumentException('non-nullable enabled cannot be null');
        }
        $this->container['enabled'] = $enabled;

        return $this;
    }

    /**
     * Gets createdAt
     *
     * @return \DateTime|null
     */
    public function getCreatedAt(): ?\DateTime
    {
        return $this->container['createdAt'];
    }

    /**
     * Sets createdAt
     *
     * @param \DateTime|null $createdAt The date when the user was created.
     *
     * @return $this
     */
    public function setCreatedAt(?\DateTime $createdAt): static
    {
        if (is_null($createdAt)) {
            throw new InvalidArgumentException('non-nullable createdAt cannot be null');
        }
        $this->container['createdAt'] = $createdAt;

        return $this;
    }

    /**
     * Gets lastLogin
     *
     * @return \DateTime|null
     */
    public function getLastLogin(): ?\DateTime
    {
        return $this->container['lastLogin'];
    }

    /**
     * Sets lastLogin
     *
     * @param \DateTime|null $lastLogin The date when the user was last logged in.
     *
     * @return $this
     */
    public function setLastLogin(?\DateTime $lastLogin): static
    {
        if (is_null($lastLogin)) {
            throw new InvalidArgumentException('non-nullable lastLogin cannot be null');
        }
        $this->container['lastLogin'] = $lastLogin;

        return $this;
    }

    /**
     * Gets allSubAccounts
     *
     * @return bool|null
     */
    public function getAllSubAccounts(): ?bool
    {
        return $this->container['allSubAccounts'];
    }

    /**
     * Sets allSubAccounts
     *
     * @param bool|null $allSubAccounts allSubAccounts
     *
     * @return $this
     */
    public function setAllSubAccounts(?bool $allSubAccounts): static
    {
        if (is_null($allSubAccounts)) {
            throw new InvalidArgumentException('non-nullable allSubAccounts cannot be null');
        }
        $this->container['allSubAccounts'] = $allSubAccounts;

        return $this;
    }

    /**
     * Gets groups
     *
     * @return string[]|null
     */
    public function getGroups(): ?array
    {
        return $this->container['groups'];
    }

    /**
     * Sets groups
     *
     * @param string[]|null $groups The list of user groups.
     *
     * @return $this
     */
    public function setGroups(?array $groups): static
    {
        if (is_null($groups)) {
            throw new InvalidArgumentException('non-nullable groups cannot be null');
        }
        $this->container['groups'] = $groups;

        return $this;
    }

    /**
     * Gets subAccountIds
     *
     * @return string|null
     */
    public function getSubAccountIds(): ?string
    {
        return $this->container['subAccountIds'];
    }

    /**
     * Sets subAccountIds
     *
     * @param string|null $subAccountIds The list of the product environments IDs.
     *
     * @return $this
     */
    public function setSubAccountIds(?string $subAccountIds): static
    {
        if (is_null($subAccountIds)) {
            throw new InvalidArgumentException('non-nullable subAccountIds cannot be null');
        }
        $this->container['subAccountIds'] = $subAccountIds;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists(mixed $offset): bool
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
    #[ReturnTypeWillChange]
    public function offsetGet(mixed $offset): mixed
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
    public function offsetSet(mixed $offset, mixed $value): void
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
    public function offsetUnset(mixed $offset): void
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
    #[ReturnTypeWillChange]
    public function jsonSerialize(): mixed
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString(): string
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
    public function toHeaderValue(): string
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}

