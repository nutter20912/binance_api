<?php
/**
 * SapiV1SubAccountStatusGet200ResponseInner
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Binance Public Spot API
 *
 * OpenAPI Specifications for the Binance Public Spot API  API documents:   - [https://github.com/binance/binance-spot-api-docs](https://github.com/binance/binance-spot-api-docs)   - [https://binance-docs.github.io/apidocs/spot/en](https://binance-docs.github.io/apidocs/spot/en)
 *
 * The version of the OpenAPI document: 1.0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.5.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Model;

use \ArrayAccess;
use \OpenAPI\Client\ObjectSerializer;

/**
 * SapiV1SubAccountStatusGet200ResponseInner Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class SapiV1SubAccountStatusGet200ResponseInner implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = '_sapi_v1_sub_account_status_get_200_response_inner';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'email' => 'string',
        'is_sub_user_enabled' => 'bool',
        'is_user_active' => 'bool',
        'insert_time' => 'int',
        'is_margin_enabled' => 'bool',
        'is_future_enabled' => 'bool',
        'mobile' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'email' => null,
        'is_sub_user_enabled' => null,
        'is_user_active' => null,
        'insert_time' => 'int64',
        'is_margin_enabled' => null,
        'is_future_enabled' => null,
        'mobile' => 'int64'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'email' => false,
		'is_sub_user_enabled' => false,
		'is_user_active' => false,
		'insert_time' => false,
		'is_margin_enabled' => false,
		'is_future_enabled' => false,
		'mobile' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

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
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
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
     * @var string[]
     */
    protected static $attributeMap = [
        'email' => 'email',
        'is_sub_user_enabled' => 'isSubUserEnabled',
        'is_user_active' => 'isUserActive',
        'insert_time' => 'insertTime',
        'is_margin_enabled' => 'isMarginEnabled',
        'is_future_enabled' => 'isFutureEnabled',
        'mobile' => 'mobile'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'email' => 'setEmail',
        'is_sub_user_enabled' => 'setIsSubUserEnabled',
        'is_user_active' => 'setIsUserActive',
        'insert_time' => 'setInsertTime',
        'is_margin_enabled' => 'setIsMarginEnabled',
        'is_future_enabled' => 'setIsFutureEnabled',
        'mobile' => 'setMobile'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'email' => 'getEmail',
        'is_sub_user_enabled' => 'getIsSubUserEnabled',
        'is_user_active' => 'getIsUserActive',
        'insert_time' => 'getInsertTime',
        'is_margin_enabled' => 'getIsMarginEnabled',
        'is_future_enabled' => 'getIsFutureEnabled',
        'mobile' => 'getMobile'
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
        $this->setIfExists('email', $data ?? [], null);
        $this->setIfExists('is_sub_user_enabled', $data ?? [], null);
        $this->setIfExists('is_user_active', $data ?? [], null);
        $this->setIfExists('insert_time', $data ?? [], null);
        $this->setIfExists('is_margin_enabled', $data ?? [], null);
        $this->setIfExists('is_future_enabled', $data ?? [], null);
        $this->setIfExists('mobile', $data ?? [], null);
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
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['email'] === null) {
            $invalidProperties[] = "'email' can't be null";
        }
        if ($this->container['is_sub_user_enabled'] === null) {
            $invalidProperties[] = "'is_sub_user_enabled' can't be null";
        }
        if ($this->container['is_user_active'] === null) {
            $invalidProperties[] = "'is_user_active' can't be null";
        }
        if ($this->container['insert_time'] === null) {
            $invalidProperties[] = "'insert_time' can't be null";
        }
        if ($this->container['is_margin_enabled'] === null) {
            $invalidProperties[] = "'is_margin_enabled' can't be null";
        }
        if ($this->container['is_future_enabled'] === null) {
            $invalidProperties[] = "'is_future_enabled' can't be null";
        }
        if ($this->container['mobile'] === null) {
            $invalidProperties[] = "'mobile' can't be null";
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
     * @param string $email email
     *
     * @return self
     */
    public function setEmail($email)
    {
        if (is_null($email)) {
            throw new \InvalidArgumentException('non-nullable email cannot be null');
        }
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets is_sub_user_enabled
     *
     * @return bool
     */
    public function getIsSubUserEnabled()
    {
        return $this->container['is_sub_user_enabled'];
    }

    /**
     * Sets is_sub_user_enabled
     *
     * @param bool $is_sub_user_enabled is_sub_user_enabled
     *
     * @return self
     */
    public function setIsSubUserEnabled($is_sub_user_enabled)
    {
        if (is_null($is_sub_user_enabled)) {
            throw new \InvalidArgumentException('non-nullable is_sub_user_enabled cannot be null');
        }
        $this->container['is_sub_user_enabled'] = $is_sub_user_enabled;

        return $this;
    }

    /**
     * Gets is_user_active
     *
     * @return bool
     */
    public function getIsUserActive()
    {
        return $this->container['is_user_active'];
    }

    /**
     * Sets is_user_active
     *
     * @param bool $is_user_active is_user_active
     *
     * @return self
     */
    public function setIsUserActive($is_user_active)
    {
        if (is_null($is_user_active)) {
            throw new \InvalidArgumentException('non-nullable is_user_active cannot be null');
        }
        $this->container['is_user_active'] = $is_user_active;

        return $this;
    }

    /**
     * Gets insert_time
     *
     * @return int
     */
    public function getInsertTime()
    {
        return $this->container['insert_time'];
    }

    /**
     * Sets insert_time
     *
     * @param int $insert_time sub account create time
     *
     * @return self
     */
    public function setInsertTime($insert_time)
    {
        if (is_null($insert_time)) {
            throw new \InvalidArgumentException('non-nullable insert_time cannot be null');
        }
        $this->container['insert_time'] = $insert_time;

        return $this;
    }

    /**
     * Gets is_margin_enabled
     *
     * @return bool
     */
    public function getIsMarginEnabled()
    {
        return $this->container['is_margin_enabled'];
    }

    /**
     * Sets is_margin_enabled
     *
     * @param bool $is_margin_enabled is_margin_enabled
     *
     * @return self
     */
    public function setIsMarginEnabled($is_margin_enabled)
    {
        if (is_null($is_margin_enabled)) {
            throw new \InvalidArgumentException('non-nullable is_margin_enabled cannot be null');
        }
        $this->container['is_margin_enabled'] = $is_margin_enabled;

        return $this;
    }

    /**
     * Gets is_future_enabled
     *
     * @return bool
     */
    public function getIsFutureEnabled()
    {
        return $this->container['is_future_enabled'];
    }

    /**
     * Sets is_future_enabled
     *
     * @param bool $is_future_enabled is_future_enabled
     *
     * @return self
     */
    public function setIsFutureEnabled($is_future_enabled)
    {
        if (is_null($is_future_enabled)) {
            throw new \InvalidArgumentException('non-nullable is_future_enabled cannot be null');
        }
        $this->container['is_future_enabled'] = $is_future_enabled;

        return $this;
    }

    /**
     * Gets mobile
     *
     * @return int
     */
    public function getMobile()
    {
        return $this->container['mobile'];
    }

    /**
     * Sets mobile
     *
     * @param int $mobile user mobile number
     *
     * @return self
     */
    public function setMobile($mobile)
    {
        if (is_null($mobile)) {
            throw new \InvalidArgumentException('non-nullable mobile cannot be null');
        }
        $this->container['mobile'] = $mobile;

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


