<?php
/**
 * SapiV1MarginAllAssetsGet200ResponseInner
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
 * SapiV1MarginAllAssetsGet200ResponseInner Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class SapiV1MarginAllAssetsGet200ResponseInner implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = '_sapi_v1_margin_allAssets_get_200_response_inner';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'asset_full_name' => 'string',
        'asset_name' => 'string',
        'is_borrowable' => 'bool',
        'is_mortgageable' => 'bool',
        'user_min_borrow' => 'string',
        'user_min_repay' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'asset_full_name' => null,
        'asset_name' => null,
        'is_borrowable' => null,
        'is_mortgageable' => null,
        'user_min_borrow' => null,
        'user_min_repay' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'asset_full_name' => false,
		'asset_name' => false,
		'is_borrowable' => false,
		'is_mortgageable' => false,
		'user_min_borrow' => false,
		'user_min_repay' => false
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
        'asset_full_name' => 'assetFullName',
        'asset_name' => 'assetName',
        'is_borrowable' => 'isBorrowable',
        'is_mortgageable' => 'isMortgageable',
        'user_min_borrow' => 'userMinBorrow',
        'user_min_repay' => 'userMinRepay'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'asset_full_name' => 'setAssetFullName',
        'asset_name' => 'setAssetName',
        'is_borrowable' => 'setIsBorrowable',
        'is_mortgageable' => 'setIsMortgageable',
        'user_min_borrow' => 'setUserMinBorrow',
        'user_min_repay' => 'setUserMinRepay'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'asset_full_name' => 'getAssetFullName',
        'asset_name' => 'getAssetName',
        'is_borrowable' => 'getIsBorrowable',
        'is_mortgageable' => 'getIsMortgageable',
        'user_min_borrow' => 'getUserMinBorrow',
        'user_min_repay' => 'getUserMinRepay'
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
        $this->setIfExists('asset_full_name', $data ?? [], null);
        $this->setIfExists('asset_name', $data ?? [], null);
        $this->setIfExists('is_borrowable', $data ?? [], null);
        $this->setIfExists('is_mortgageable', $data ?? [], null);
        $this->setIfExists('user_min_borrow', $data ?? [], null);
        $this->setIfExists('user_min_repay', $data ?? [], null);
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

        if ($this->container['asset_full_name'] === null) {
            $invalidProperties[] = "'asset_full_name' can't be null";
        }
        if ($this->container['asset_name'] === null) {
            $invalidProperties[] = "'asset_name' can't be null";
        }
        if ($this->container['is_borrowable'] === null) {
            $invalidProperties[] = "'is_borrowable' can't be null";
        }
        if ($this->container['is_mortgageable'] === null) {
            $invalidProperties[] = "'is_mortgageable' can't be null";
        }
        if ($this->container['user_min_borrow'] === null) {
            $invalidProperties[] = "'user_min_borrow' can't be null";
        }
        if ($this->container['user_min_repay'] === null) {
            $invalidProperties[] = "'user_min_repay' can't be null";
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
     * Gets asset_full_name
     *
     * @return string
     */
    public function getAssetFullName()
    {
        return $this->container['asset_full_name'];
    }

    /**
     * Sets asset_full_name
     *
     * @param string $asset_full_name asset_full_name
     *
     * @return self
     */
    public function setAssetFullName($asset_full_name)
    {
        if (is_null($asset_full_name)) {
            throw new \InvalidArgumentException('non-nullable asset_full_name cannot be null');
        }
        $this->container['asset_full_name'] = $asset_full_name;

        return $this;
    }

    /**
     * Gets asset_name
     *
     * @return string
     */
    public function getAssetName()
    {
        return $this->container['asset_name'];
    }

    /**
     * Sets asset_name
     *
     * @param string $asset_name asset_name
     *
     * @return self
     */
    public function setAssetName($asset_name)
    {
        if (is_null($asset_name)) {
            throw new \InvalidArgumentException('non-nullable asset_name cannot be null');
        }
        $this->container['asset_name'] = $asset_name;

        return $this;
    }

    /**
     * Gets is_borrowable
     *
     * @return bool
     */
    public function getIsBorrowable()
    {
        return $this->container['is_borrowable'];
    }

    /**
     * Sets is_borrowable
     *
     * @param bool $is_borrowable is_borrowable
     *
     * @return self
     */
    public function setIsBorrowable($is_borrowable)
    {
        if (is_null($is_borrowable)) {
            throw new \InvalidArgumentException('non-nullable is_borrowable cannot be null');
        }
        $this->container['is_borrowable'] = $is_borrowable;

        return $this;
    }

    /**
     * Gets is_mortgageable
     *
     * @return bool
     */
    public function getIsMortgageable()
    {
        return $this->container['is_mortgageable'];
    }

    /**
     * Sets is_mortgageable
     *
     * @param bool $is_mortgageable is_mortgageable
     *
     * @return self
     */
    public function setIsMortgageable($is_mortgageable)
    {
        if (is_null($is_mortgageable)) {
            throw new \InvalidArgumentException('non-nullable is_mortgageable cannot be null');
        }
        $this->container['is_mortgageable'] = $is_mortgageable;

        return $this;
    }

    /**
     * Gets user_min_borrow
     *
     * @return string
     */
    public function getUserMinBorrow()
    {
        return $this->container['user_min_borrow'];
    }

    /**
     * Sets user_min_borrow
     *
     * @param string $user_min_borrow user_min_borrow
     *
     * @return self
     */
    public function setUserMinBorrow($user_min_borrow)
    {
        if (is_null($user_min_borrow)) {
            throw new \InvalidArgumentException('non-nullable user_min_borrow cannot be null');
        }
        $this->container['user_min_borrow'] = $user_min_borrow;

        return $this;
    }

    /**
     * Gets user_min_repay
     *
     * @return string
     */
    public function getUserMinRepay()
    {
        return $this->container['user_min_repay'];
    }

    /**
     * Sets user_min_repay
     *
     * @param string $user_min_repay user_min_repay
     *
     * @return self
     */
    public function setUserMinRepay($user_min_repay)
    {
        if (is_null($user_min_repay)) {
            throw new \InvalidArgumentException('non-nullable user_min_repay cannot be null');
        }
        $this->container['user_min_repay'] = $user_min_repay;

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


