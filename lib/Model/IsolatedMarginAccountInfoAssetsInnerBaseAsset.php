<?php
/**
 * IsolatedMarginAccountInfoAssetsInnerBaseAsset
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
 * IsolatedMarginAccountInfoAssetsInnerBaseAsset Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class IsolatedMarginAccountInfoAssetsInnerBaseAsset implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'isolatedMarginAccountInfo_assets_inner_baseAsset';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'asset' => 'string',
        'borrow_enabled' => 'bool',
        'borrowed' => 'string',
        'free' => 'string',
        'interest' => 'string',
        'locked' => 'string',
        'net_asset' => 'string',
        'net_asset_of_btc' => 'string',
        'repay_enabled' => 'bool',
        'total_asset' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'asset' => null,
        'borrow_enabled' => null,
        'borrowed' => null,
        'free' => null,
        'interest' => null,
        'locked' => null,
        'net_asset' => null,
        'net_asset_of_btc' => null,
        'repay_enabled' => null,
        'total_asset' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'asset' => false,
		'borrow_enabled' => false,
		'borrowed' => false,
		'free' => false,
		'interest' => false,
		'locked' => false,
		'net_asset' => false,
		'net_asset_of_btc' => false,
		'repay_enabled' => false,
		'total_asset' => false
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
        'asset' => 'asset',
        'borrow_enabled' => 'borrowEnabled',
        'borrowed' => 'borrowed',
        'free' => 'free',
        'interest' => 'interest',
        'locked' => 'locked',
        'net_asset' => 'netAsset',
        'net_asset_of_btc' => 'netAssetOfBtc',
        'repay_enabled' => 'repayEnabled',
        'total_asset' => 'totalAsset'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'asset' => 'setAsset',
        'borrow_enabled' => 'setBorrowEnabled',
        'borrowed' => 'setBorrowed',
        'free' => 'setFree',
        'interest' => 'setInterest',
        'locked' => 'setLocked',
        'net_asset' => 'setNetAsset',
        'net_asset_of_btc' => 'setNetAssetOfBtc',
        'repay_enabled' => 'setRepayEnabled',
        'total_asset' => 'setTotalAsset'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'asset' => 'getAsset',
        'borrow_enabled' => 'getBorrowEnabled',
        'borrowed' => 'getBorrowed',
        'free' => 'getFree',
        'interest' => 'getInterest',
        'locked' => 'getLocked',
        'net_asset' => 'getNetAsset',
        'net_asset_of_btc' => 'getNetAssetOfBtc',
        'repay_enabled' => 'getRepayEnabled',
        'total_asset' => 'getTotalAsset'
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
        $this->setIfExists('asset', $data ?? [], null);
        $this->setIfExists('borrow_enabled', $data ?? [], null);
        $this->setIfExists('borrowed', $data ?? [], null);
        $this->setIfExists('free', $data ?? [], null);
        $this->setIfExists('interest', $data ?? [], null);
        $this->setIfExists('locked', $data ?? [], null);
        $this->setIfExists('net_asset', $data ?? [], null);
        $this->setIfExists('net_asset_of_btc', $data ?? [], null);
        $this->setIfExists('repay_enabled', $data ?? [], null);
        $this->setIfExists('total_asset', $data ?? [], null);
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

        if ($this->container['asset'] === null) {
            $invalidProperties[] = "'asset' can't be null";
        }
        if ($this->container['borrow_enabled'] === null) {
            $invalidProperties[] = "'borrow_enabled' can't be null";
        }
        if ($this->container['borrowed'] === null) {
            $invalidProperties[] = "'borrowed' can't be null";
        }
        if ($this->container['free'] === null) {
            $invalidProperties[] = "'free' can't be null";
        }
        if ($this->container['interest'] === null) {
            $invalidProperties[] = "'interest' can't be null";
        }
        if ($this->container['locked'] === null) {
            $invalidProperties[] = "'locked' can't be null";
        }
        if ($this->container['net_asset'] === null) {
            $invalidProperties[] = "'net_asset' can't be null";
        }
        if ($this->container['net_asset_of_btc'] === null) {
            $invalidProperties[] = "'net_asset_of_btc' can't be null";
        }
        if ($this->container['repay_enabled'] === null) {
            $invalidProperties[] = "'repay_enabled' can't be null";
        }
        if ($this->container['total_asset'] === null) {
            $invalidProperties[] = "'total_asset' can't be null";
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
     * Gets asset
     *
     * @return string
     */
    public function getAsset()
    {
        return $this->container['asset'];
    }

    /**
     * Sets asset
     *
     * @param string $asset asset
     *
     * @return self
     */
    public function setAsset($asset)
    {
        if (is_null($asset)) {
            throw new \InvalidArgumentException('non-nullable asset cannot be null');
        }
        $this->container['asset'] = $asset;

        return $this;
    }

    /**
     * Gets borrow_enabled
     *
     * @return bool
     */
    public function getBorrowEnabled()
    {
        return $this->container['borrow_enabled'];
    }

    /**
     * Sets borrow_enabled
     *
     * @param bool $borrow_enabled borrow_enabled
     *
     * @return self
     */
    public function setBorrowEnabled($borrow_enabled)
    {
        if (is_null($borrow_enabled)) {
            throw new \InvalidArgumentException('non-nullable borrow_enabled cannot be null');
        }
        $this->container['borrow_enabled'] = $borrow_enabled;

        return $this;
    }

    /**
     * Gets borrowed
     *
     * @return string
     */
    public function getBorrowed()
    {
        return $this->container['borrowed'];
    }

    /**
     * Sets borrowed
     *
     * @param string $borrowed borrowed
     *
     * @return self
     */
    public function setBorrowed($borrowed)
    {
        if (is_null($borrowed)) {
            throw new \InvalidArgumentException('non-nullable borrowed cannot be null');
        }
        $this->container['borrowed'] = $borrowed;

        return $this;
    }

    /**
     * Gets free
     *
     * @return string
     */
    public function getFree()
    {
        return $this->container['free'];
    }

    /**
     * Sets free
     *
     * @param string $free free
     *
     * @return self
     */
    public function setFree($free)
    {
        if (is_null($free)) {
            throw new \InvalidArgumentException('non-nullable free cannot be null');
        }
        $this->container['free'] = $free;

        return $this;
    }

    /**
     * Gets interest
     *
     * @return string
     */
    public function getInterest()
    {
        return $this->container['interest'];
    }

    /**
     * Sets interest
     *
     * @param string $interest interest
     *
     * @return self
     */
    public function setInterest($interest)
    {
        if (is_null($interest)) {
            throw new \InvalidArgumentException('non-nullable interest cannot be null');
        }
        $this->container['interest'] = $interest;

        return $this;
    }

    /**
     * Gets locked
     *
     * @return string
     */
    public function getLocked()
    {
        return $this->container['locked'];
    }

    /**
     * Sets locked
     *
     * @param string $locked locked
     *
     * @return self
     */
    public function setLocked($locked)
    {
        if (is_null($locked)) {
            throw new \InvalidArgumentException('non-nullable locked cannot be null');
        }
        $this->container['locked'] = $locked;

        return $this;
    }

    /**
     * Gets net_asset
     *
     * @return string
     */
    public function getNetAsset()
    {
        return $this->container['net_asset'];
    }

    /**
     * Sets net_asset
     *
     * @param string $net_asset net_asset
     *
     * @return self
     */
    public function setNetAsset($net_asset)
    {
        if (is_null($net_asset)) {
            throw new \InvalidArgumentException('non-nullable net_asset cannot be null');
        }
        $this->container['net_asset'] = $net_asset;

        return $this;
    }

    /**
     * Gets net_asset_of_btc
     *
     * @return string
     */
    public function getNetAssetOfBtc()
    {
        return $this->container['net_asset_of_btc'];
    }

    /**
     * Sets net_asset_of_btc
     *
     * @param string $net_asset_of_btc net_asset_of_btc
     *
     * @return self
     */
    public function setNetAssetOfBtc($net_asset_of_btc)
    {
        if (is_null($net_asset_of_btc)) {
            throw new \InvalidArgumentException('non-nullable net_asset_of_btc cannot be null');
        }
        $this->container['net_asset_of_btc'] = $net_asset_of_btc;

        return $this;
    }

    /**
     * Gets repay_enabled
     *
     * @return bool
     */
    public function getRepayEnabled()
    {
        return $this->container['repay_enabled'];
    }

    /**
     * Sets repay_enabled
     *
     * @param bool $repay_enabled repay_enabled
     *
     * @return self
     */
    public function setRepayEnabled($repay_enabled)
    {
        if (is_null($repay_enabled)) {
            throw new \InvalidArgumentException('non-nullable repay_enabled cannot be null');
        }
        $this->container['repay_enabled'] = $repay_enabled;

        return $this;
    }

    /**
     * Gets total_asset
     *
     * @return string
     */
    public function getTotalAsset()
    {
        return $this->container['total_asset'];
    }

    /**
     * Sets total_asset
     *
     * @param string $total_asset total_asset
     *
     * @return self
     */
    public function setTotalAsset($total_asset)
    {
        if (is_null($total_asset)) {
            throw new \InvalidArgumentException('non-nullable total_asset cannot be null');
        }
        $this->container['total_asset'] = $total_asset;

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


