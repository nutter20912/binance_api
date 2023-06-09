<?php
/**
 * IsolatedMarginAccountInfoAssetsInner
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
 * IsolatedMarginAccountInfoAssetsInner Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class IsolatedMarginAccountInfoAssetsInner implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'isolatedMarginAccountInfo_assets_inner';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'base_asset' => '\OpenAPI\Client\Model\IsolatedMarginAccountInfoAssetsInnerBaseAsset',
        'quote_asset' => '\OpenAPI\Client\Model\IsolatedMarginAccountInfoAssetsInnerQuoteAsset',
        'symbol' => 'string',
        'isolated_created' => 'bool',
        'enabled' => 'bool',
        'margin_level' => 'string',
        'margin_level_status' => 'string',
        'margin_ratio' => 'string',
        'index_price' => 'string',
        'liquidate_price' => 'string',
        'liquidate_rate' => 'string',
        'trade_enabled' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'base_asset' => null,
        'quote_asset' => null,
        'symbol' => null,
        'isolated_created' => null,
        'enabled' => null,
        'margin_level' => null,
        'margin_level_status' => null,
        'margin_ratio' => null,
        'index_price' => null,
        'liquidate_price' => null,
        'liquidate_rate' => null,
        'trade_enabled' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'base_asset' => false,
		'quote_asset' => false,
		'symbol' => false,
		'isolated_created' => false,
		'enabled' => false,
		'margin_level' => false,
		'margin_level_status' => false,
		'margin_ratio' => false,
		'index_price' => false,
		'liquidate_price' => false,
		'liquidate_rate' => false,
		'trade_enabled' => false
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
        'base_asset' => 'baseAsset',
        'quote_asset' => 'quoteAsset',
        'symbol' => 'symbol',
        'isolated_created' => 'isolatedCreated',
        'enabled' => 'enabled',
        'margin_level' => 'marginLevel',
        'margin_level_status' => 'marginLevelStatus',
        'margin_ratio' => 'marginRatio',
        'index_price' => 'indexPrice',
        'liquidate_price' => 'liquidatePrice',
        'liquidate_rate' => 'liquidateRate',
        'trade_enabled' => 'tradeEnabled'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'base_asset' => 'setBaseAsset',
        'quote_asset' => 'setQuoteAsset',
        'symbol' => 'setSymbol',
        'isolated_created' => 'setIsolatedCreated',
        'enabled' => 'setEnabled',
        'margin_level' => 'setMarginLevel',
        'margin_level_status' => 'setMarginLevelStatus',
        'margin_ratio' => 'setMarginRatio',
        'index_price' => 'setIndexPrice',
        'liquidate_price' => 'setLiquidatePrice',
        'liquidate_rate' => 'setLiquidateRate',
        'trade_enabled' => 'setTradeEnabled'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'base_asset' => 'getBaseAsset',
        'quote_asset' => 'getQuoteAsset',
        'symbol' => 'getSymbol',
        'isolated_created' => 'getIsolatedCreated',
        'enabled' => 'getEnabled',
        'margin_level' => 'getMarginLevel',
        'margin_level_status' => 'getMarginLevelStatus',
        'margin_ratio' => 'getMarginRatio',
        'index_price' => 'getIndexPrice',
        'liquidate_price' => 'getLiquidatePrice',
        'liquidate_rate' => 'getLiquidateRate',
        'trade_enabled' => 'getTradeEnabled'
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
        $this->setIfExists('base_asset', $data ?? [], null);
        $this->setIfExists('quote_asset', $data ?? [], null);
        $this->setIfExists('symbol', $data ?? [], null);
        $this->setIfExists('isolated_created', $data ?? [], null);
        $this->setIfExists('enabled', $data ?? [], null);
        $this->setIfExists('margin_level', $data ?? [], null);
        $this->setIfExists('margin_level_status', $data ?? [], null);
        $this->setIfExists('margin_ratio', $data ?? [], null);
        $this->setIfExists('index_price', $data ?? [], null);
        $this->setIfExists('liquidate_price', $data ?? [], null);
        $this->setIfExists('liquidate_rate', $data ?? [], null);
        $this->setIfExists('trade_enabled', $data ?? [], null);
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

        if ($this->container['base_asset'] === null) {
            $invalidProperties[] = "'base_asset' can't be null";
        }
        if ($this->container['quote_asset'] === null) {
            $invalidProperties[] = "'quote_asset' can't be null";
        }
        if ($this->container['symbol'] === null) {
            $invalidProperties[] = "'symbol' can't be null";
        }
        if ($this->container['isolated_created'] === null) {
            $invalidProperties[] = "'isolated_created' can't be null";
        }
        if ($this->container['enabled'] === null) {
            $invalidProperties[] = "'enabled' can't be null";
        }
        if ($this->container['margin_level'] === null) {
            $invalidProperties[] = "'margin_level' can't be null";
        }
        if ($this->container['margin_level_status'] === null) {
            $invalidProperties[] = "'margin_level_status' can't be null";
        }
        if ($this->container['margin_ratio'] === null) {
            $invalidProperties[] = "'margin_ratio' can't be null";
        }
        if ($this->container['index_price'] === null) {
            $invalidProperties[] = "'index_price' can't be null";
        }
        if ($this->container['liquidate_price'] === null) {
            $invalidProperties[] = "'liquidate_price' can't be null";
        }
        if ($this->container['liquidate_rate'] === null) {
            $invalidProperties[] = "'liquidate_rate' can't be null";
        }
        if ($this->container['trade_enabled'] === null) {
            $invalidProperties[] = "'trade_enabled' can't be null";
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
     * Gets base_asset
     *
     * @return \OpenAPI\Client\Model\IsolatedMarginAccountInfoAssetsInnerBaseAsset
     */
    public function getBaseAsset()
    {
        return $this->container['base_asset'];
    }

    /**
     * Sets base_asset
     *
     * @param \OpenAPI\Client\Model\IsolatedMarginAccountInfoAssetsInnerBaseAsset $base_asset base_asset
     *
     * @return self
     */
    public function setBaseAsset($base_asset)
    {
        if (is_null($base_asset)) {
            throw new \InvalidArgumentException('non-nullable base_asset cannot be null');
        }
        $this->container['base_asset'] = $base_asset;

        return $this;
    }

    /**
     * Gets quote_asset
     *
     * @return \OpenAPI\Client\Model\IsolatedMarginAccountInfoAssetsInnerQuoteAsset
     */
    public function getQuoteAsset()
    {
        return $this->container['quote_asset'];
    }

    /**
     * Sets quote_asset
     *
     * @param \OpenAPI\Client\Model\IsolatedMarginAccountInfoAssetsInnerQuoteAsset $quote_asset quote_asset
     *
     * @return self
     */
    public function setQuoteAsset($quote_asset)
    {
        if (is_null($quote_asset)) {
            throw new \InvalidArgumentException('non-nullable quote_asset cannot be null');
        }
        $this->container['quote_asset'] = $quote_asset;

        return $this;
    }

    /**
     * Gets symbol
     *
     * @return string
     */
    public function getSymbol()
    {
        return $this->container['symbol'];
    }

    /**
     * Sets symbol
     *
     * @param string $symbol symbol
     *
     * @return self
     */
    public function setSymbol($symbol)
    {
        if (is_null($symbol)) {
            throw new \InvalidArgumentException('non-nullable symbol cannot be null');
        }
        $this->container['symbol'] = $symbol;

        return $this;
    }

    /**
     * Gets isolated_created
     *
     * @return bool
     */
    public function getIsolatedCreated()
    {
        return $this->container['isolated_created'];
    }

    /**
     * Sets isolated_created
     *
     * @param bool $isolated_created isolated_created
     *
     * @return self
     */
    public function setIsolatedCreated($isolated_created)
    {
        if (is_null($isolated_created)) {
            throw new \InvalidArgumentException('non-nullable isolated_created cannot be null');
        }
        $this->container['isolated_created'] = $isolated_created;

        return $this;
    }

    /**
     * Gets enabled
     *
     * @return bool
     */
    public function getEnabled()
    {
        return $this->container['enabled'];
    }

    /**
     * Sets enabled
     *
     * @param bool $enabled true-enabled, false-disabled
     *
     * @return self
     */
    public function setEnabled($enabled)
    {
        if (is_null($enabled)) {
            throw new \InvalidArgumentException('non-nullable enabled cannot be null');
        }
        $this->container['enabled'] = $enabled;

        return $this;
    }

    /**
     * Gets margin_level
     *
     * @return string
     */
    public function getMarginLevel()
    {
        return $this->container['margin_level'];
    }

    /**
     * Sets margin_level
     *
     * @param string $margin_level margin_level
     *
     * @return self
     */
    public function setMarginLevel($margin_level)
    {
        if (is_null($margin_level)) {
            throw new \InvalidArgumentException('non-nullable margin_level cannot be null');
        }
        $this->container['margin_level'] = $margin_level;

        return $this;
    }

    /**
     * Gets margin_level_status
     *
     * @return string
     */
    public function getMarginLevelStatus()
    {
        return $this->container['margin_level_status'];
    }

    /**
     * Sets margin_level_status
     *
     * @param string $margin_level_status \"EXCESSIVE\", \"NORMAL\", \"MARGIN_CALL\", \"PRE_LIQUIDATION\", \"FORCE_LIQUIDATION\"
     *
     * @return self
     */
    public function setMarginLevelStatus($margin_level_status)
    {
        if (is_null($margin_level_status)) {
            throw new \InvalidArgumentException('non-nullable margin_level_status cannot be null');
        }
        $this->container['margin_level_status'] = $margin_level_status;

        return $this;
    }

    /**
     * Gets margin_ratio
     *
     * @return string
     */
    public function getMarginRatio()
    {
        return $this->container['margin_ratio'];
    }

    /**
     * Sets margin_ratio
     *
     * @param string $margin_ratio margin_ratio
     *
     * @return self
     */
    public function setMarginRatio($margin_ratio)
    {
        if (is_null($margin_ratio)) {
            throw new \InvalidArgumentException('non-nullable margin_ratio cannot be null');
        }
        $this->container['margin_ratio'] = $margin_ratio;

        return $this;
    }

    /**
     * Gets index_price
     *
     * @return string
     */
    public function getIndexPrice()
    {
        return $this->container['index_price'];
    }

    /**
     * Sets index_price
     *
     * @param string $index_price index_price
     *
     * @return self
     */
    public function setIndexPrice($index_price)
    {
        if (is_null($index_price)) {
            throw new \InvalidArgumentException('non-nullable index_price cannot be null');
        }
        $this->container['index_price'] = $index_price;

        return $this;
    }

    /**
     * Gets liquidate_price
     *
     * @return string
     */
    public function getLiquidatePrice()
    {
        return $this->container['liquidate_price'];
    }

    /**
     * Sets liquidate_price
     *
     * @param string $liquidate_price liquidate_price
     *
     * @return self
     */
    public function setLiquidatePrice($liquidate_price)
    {
        if (is_null($liquidate_price)) {
            throw new \InvalidArgumentException('non-nullable liquidate_price cannot be null');
        }
        $this->container['liquidate_price'] = $liquidate_price;

        return $this;
    }

    /**
     * Gets liquidate_rate
     *
     * @return string
     */
    public function getLiquidateRate()
    {
        return $this->container['liquidate_rate'];
    }

    /**
     * Sets liquidate_rate
     *
     * @param string $liquidate_rate liquidate_rate
     *
     * @return self
     */
    public function setLiquidateRate($liquidate_rate)
    {
        if (is_null($liquidate_rate)) {
            throw new \InvalidArgumentException('non-nullable liquidate_rate cannot be null');
        }
        $this->container['liquidate_rate'] = $liquidate_rate;

        return $this;
    }

    /**
     * Gets trade_enabled
     *
     * @return bool
     */
    public function getTradeEnabled()
    {
        return $this->container['trade_enabled'];
    }

    /**
     * Sets trade_enabled
     *
     * @param bool $trade_enabled trade_enabled
     *
     * @return self
     */
    public function setTradeEnabled($trade_enabled)
    {
        if (is_null($trade_enabled)) {
            throw new \InvalidArgumentException('non-nullable trade_enabled cannot be null');
        }
        $this->container['trade_enabled'] = $trade_enabled;

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


