<?php
/**
 * ApiV3ExchangeInfoGet200ResponseSymbolsInner
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
 * ApiV3ExchangeInfoGet200ResponseSymbolsInner Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ApiV3ExchangeInfoGet200ResponseSymbolsInner implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = '_api_v3_exchangeInfo_get_200_response_symbols_inner';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'symbol' => 'string',
        'status' => 'string',
        'base_asset' => 'string',
        'base_asset_precision' => 'int',
        'quote_asset' => 'string',
        'quote_asset_precision' => 'int',
        'base_commission_precision' => 'int',
        'quote_commission_precision' => 'int',
        'order_types' => 'string[]',
        'iceberg_allowed' => 'bool',
        'oco_allowed' => 'bool',
        'quote_order_qty_market_allowed' => 'bool',
        'allow_trailing_stop' => 'bool',
        'is_spot_trading_allowed' => 'bool',
        'is_margin_trading_allowed' => 'bool',
        'filters' => '\OpenAPI\Client\Model\ApiV3ExchangeInfoGet200ResponseSymbolsInnerFiltersInner[]',
        'permissions' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'symbol' => null,
        'status' => null,
        'base_asset' => null,
        'base_asset_precision' => 'int32',
        'quote_asset' => null,
        'quote_asset_precision' => 'int32',
        'base_commission_precision' => 'int32',
        'quote_commission_precision' => 'int32',
        'order_types' => null,
        'iceberg_allowed' => null,
        'oco_allowed' => null,
        'quote_order_qty_market_allowed' => null,
        'allow_trailing_stop' => null,
        'is_spot_trading_allowed' => null,
        'is_margin_trading_allowed' => null,
        'filters' => null,
        'permissions' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'symbol' => false,
		'status' => false,
		'base_asset' => false,
		'base_asset_precision' => false,
		'quote_asset' => false,
		'quote_asset_precision' => false,
		'base_commission_precision' => false,
		'quote_commission_precision' => false,
		'order_types' => false,
		'iceberg_allowed' => false,
		'oco_allowed' => false,
		'quote_order_qty_market_allowed' => false,
		'allow_trailing_stop' => false,
		'is_spot_trading_allowed' => false,
		'is_margin_trading_allowed' => false,
		'filters' => false,
		'permissions' => false
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
        'symbol' => 'symbol',
        'status' => 'status',
        'base_asset' => 'baseAsset',
        'base_asset_precision' => 'baseAssetPrecision',
        'quote_asset' => 'quoteAsset',
        'quote_asset_precision' => 'quoteAssetPrecision',
        'base_commission_precision' => 'baseCommissionPrecision',
        'quote_commission_precision' => 'quoteCommissionPrecision',
        'order_types' => 'orderTypes',
        'iceberg_allowed' => 'icebergAllowed',
        'oco_allowed' => 'ocoAllowed',
        'quote_order_qty_market_allowed' => 'quoteOrderQtyMarketAllowed',
        'allow_trailing_stop' => 'allowTrailingStop',
        'is_spot_trading_allowed' => 'isSpotTradingAllowed',
        'is_margin_trading_allowed' => 'isMarginTradingAllowed',
        'filters' => 'filters',
        'permissions' => 'permissions'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'symbol' => 'setSymbol',
        'status' => 'setStatus',
        'base_asset' => 'setBaseAsset',
        'base_asset_precision' => 'setBaseAssetPrecision',
        'quote_asset' => 'setQuoteAsset',
        'quote_asset_precision' => 'setQuoteAssetPrecision',
        'base_commission_precision' => 'setBaseCommissionPrecision',
        'quote_commission_precision' => 'setQuoteCommissionPrecision',
        'order_types' => 'setOrderTypes',
        'iceberg_allowed' => 'setIcebergAllowed',
        'oco_allowed' => 'setOcoAllowed',
        'quote_order_qty_market_allowed' => 'setQuoteOrderQtyMarketAllowed',
        'allow_trailing_stop' => 'setAllowTrailingStop',
        'is_spot_trading_allowed' => 'setIsSpotTradingAllowed',
        'is_margin_trading_allowed' => 'setIsMarginTradingAllowed',
        'filters' => 'setFilters',
        'permissions' => 'setPermissions'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'symbol' => 'getSymbol',
        'status' => 'getStatus',
        'base_asset' => 'getBaseAsset',
        'base_asset_precision' => 'getBaseAssetPrecision',
        'quote_asset' => 'getQuoteAsset',
        'quote_asset_precision' => 'getQuoteAssetPrecision',
        'base_commission_precision' => 'getBaseCommissionPrecision',
        'quote_commission_precision' => 'getQuoteCommissionPrecision',
        'order_types' => 'getOrderTypes',
        'iceberg_allowed' => 'getIcebergAllowed',
        'oco_allowed' => 'getOcoAllowed',
        'quote_order_qty_market_allowed' => 'getQuoteOrderQtyMarketAllowed',
        'allow_trailing_stop' => 'getAllowTrailingStop',
        'is_spot_trading_allowed' => 'getIsSpotTradingAllowed',
        'is_margin_trading_allowed' => 'getIsMarginTradingAllowed',
        'filters' => 'getFilters',
        'permissions' => 'getPermissions'
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
        $this->setIfExists('symbol', $data ?? [], null);
        $this->setIfExists('status', $data ?? [], null);
        $this->setIfExists('base_asset', $data ?? [], null);
        $this->setIfExists('base_asset_precision', $data ?? [], null);
        $this->setIfExists('quote_asset', $data ?? [], null);
        $this->setIfExists('quote_asset_precision', $data ?? [], null);
        $this->setIfExists('base_commission_precision', $data ?? [], null);
        $this->setIfExists('quote_commission_precision', $data ?? [], null);
        $this->setIfExists('order_types', $data ?? [], null);
        $this->setIfExists('iceberg_allowed', $data ?? [], null);
        $this->setIfExists('oco_allowed', $data ?? [], null);
        $this->setIfExists('quote_order_qty_market_allowed', $data ?? [], null);
        $this->setIfExists('allow_trailing_stop', $data ?? [], null);
        $this->setIfExists('is_spot_trading_allowed', $data ?? [], null);
        $this->setIfExists('is_margin_trading_allowed', $data ?? [], null);
        $this->setIfExists('filters', $data ?? [], null);
        $this->setIfExists('permissions', $data ?? [], null);
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

        if ($this->container['symbol'] === null) {
            $invalidProperties[] = "'symbol' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        if ($this->container['base_asset'] === null) {
            $invalidProperties[] = "'base_asset' can't be null";
        }
        if ($this->container['base_asset_precision'] === null) {
            $invalidProperties[] = "'base_asset_precision' can't be null";
        }
        if ($this->container['quote_asset'] === null) {
            $invalidProperties[] = "'quote_asset' can't be null";
        }
        if ($this->container['quote_asset_precision'] === null) {
            $invalidProperties[] = "'quote_asset_precision' can't be null";
        }
        if ($this->container['base_commission_precision'] === null) {
            $invalidProperties[] = "'base_commission_precision' can't be null";
        }
        if ($this->container['quote_commission_precision'] === null) {
            $invalidProperties[] = "'quote_commission_precision' can't be null";
        }
        if ($this->container['order_types'] === null) {
            $invalidProperties[] = "'order_types' can't be null";
        }
        if ($this->container['iceberg_allowed'] === null) {
            $invalidProperties[] = "'iceberg_allowed' can't be null";
        }
        if ($this->container['oco_allowed'] === null) {
            $invalidProperties[] = "'oco_allowed' can't be null";
        }
        if ($this->container['quote_order_qty_market_allowed'] === null) {
            $invalidProperties[] = "'quote_order_qty_market_allowed' can't be null";
        }
        if ($this->container['allow_trailing_stop'] === null) {
            $invalidProperties[] = "'allow_trailing_stop' can't be null";
        }
        if ($this->container['is_spot_trading_allowed'] === null) {
            $invalidProperties[] = "'is_spot_trading_allowed' can't be null";
        }
        if ($this->container['is_margin_trading_allowed'] === null) {
            $invalidProperties[] = "'is_margin_trading_allowed' can't be null";
        }
        if ($this->container['filters'] === null) {
            $invalidProperties[] = "'filters' can't be null";
        }
        if ($this->container['permissions'] === null) {
            $invalidProperties[] = "'permissions' can't be null";
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
     * Gets status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string $status status
     *
     * @return self
     */
    public function setStatus($status)
    {
        if (is_null($status)) {
            throw new \InvalidArgumentException('non-nullable status cannot be null');
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets base_asset
     *
     * @return string
     */
    public function getBaseAsset()
    {
        return $this->container['base_asset'];
    }

    /**
     * Sets base_asset
     *
     * @param string $base_asset base_asset
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
     * Gets base_asset_precision
     *
     * @return int
     */
    public function getBaseAssetPrecision()
    {
        return $this->container['base_asset_precision'];
    }

    /**
     * Sets base_asset_precision
     *
     * @param int $base_asset_precision base_asset_precision
     *
     * @return self
     */
    public function setBaseAssetPrecision($base_asset_precision)
    {
        if (is_null($base_asset_precision)) {
            throw new \InvalidArgumentException('non-nullable base_asset_precision cannot be null');
        }
        $this->container['base_asset_precision'] = $base_asset_precision;

        return $this;
    }

    /**
     * Gets quote_asset
     *
     * @return string
     */
    public function getQuoteAsset()
    {
        return $this->container['quote_asset'];
    }

    /**
     * Sets quote_asset
     *
     * @param string $quote_asset quote_asset
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
     * Gets quote_asset_precision
     *
     * @return int
     */
    public function getQuoteAssetPrecision()
    {
        return $this->container['quote_asset_precision'];
    }

    /**
     * Sets quote_asset_precision
     *
     * @param int $quote_asset_precision quote_asset_precision
     *
     * @return self
     */
    public function setQuoteAssetPrecision($quote_asset_precision)
    {
        if (is_null($quote_asset_precision)) {
            throw new \InvalidArgumentException('non-nullable quote_asset_precision cannot be null');
        }
        $this->container['quote_asset_precision'] = $quote_asset_precision;

        return $this;
    }

    /**
     * Gets base_commission_precision
     *
     * @return int
     */
    public function getBaseCommissionPrecision()
    {
        return $this->container['base_commission_precision'];
    }

    /**
     * Sets base_commission_precision
     *
     * @param int $base_commission_precision base_commission_precision
     *
     * @return self
     */
    public function setBaseCommissionPrecision($base_commission_precision)
    {
        if (is_null($base_commission_precision)) {
            throw new \InvalidArgumentException('non-nullable base_commission_precision cannot be null');
        }
        $this->container['base_commission_precision'] = $base_commission_precision;

        return $this;
    }

    /**
     * Gets quote_commission_precision
     *
     * @return int
     */
    public function getQuoteCommissionPrecision()
    {
        return $this->container['quote_commission_precision'];
    }

    /**
     * Sets quote_commission_precision
     *
     * @param int $quote_commission_precision quote_commission_precision
     *
     * @return self
     */
    public function setQuoteCommissionPrecision($quote_commission_precision)
    {
        if (is_null($quote_commission_precision)) {
            throw new \InvalidArgumentException('non-nullable quote_commission_precision cannot be null');
        }
        $this->container['quote_commission_precision'] = $quote_commission_precision;

        return $this;
    }

    /**
     * Gets order_types
     *
     * @return string[]
     */
    public function getOrderTypes()
    {
        return $this->container['order_types'];
    }

    /**
     * Sets order_types
     *
     * @param string[] $order_types order_types
     *
     * @return self
     */
    public function setOrderTypes($order_types)
    {
        if (is_null($order_types)) {
            throw new \InvalidArgumentException('non-nullable order_types cannot be null');
        }
        $this->container['order_types'] = $order_types;

        return $this;
    }

    /**
     * Gets iceberg_allowed
     *
     * @return bool
     */
    public function getIcebergAllowed()
    {
        return $this->container['iceberg_allowed'];
    }

    /**
     * Sets iceberg_allowed
     *
     * @param bool $iceberg_allowed iceberg_allowed
     *
     * @return self
     */
    public function setIcebergAllowed($iceberg_allowed)
    {
        if (is_null($iceberg_allowed)) {
            throw new \InvalidArgumentException('non-nullable iceberg_allowed cannot be null');
        }
        $this->container['iceberg_allowed'] = $iceberg_allowed;

        return $this;
    }

    /**
     * Gets oco_allowed
     *
     * @return bool
     */
    public function getOcoAllowed()
    {
        return $this->container['oco_allowed'];
    }

    /**
     * Sets oco_allowed
     *
     * @param bool $oco_allowed oco_allowed
     *
     * @return self
     */
    public function setOcoAllowed($oco_allowed)
    {
        if (is_null($oco_allowed)) {
            throw new \InvalidArgumentException('non-nullable oco_allowed cannot be null');
        }
        $this->container['oco_allowed'] = $oco_allowed;

        return $this;
    }

    /**
     * Gets quote_order_qty_market_allowed
     *
     * @return bool
     */
    public function getQuoteOrderQtyMarketAllowed()
    {
        return $this->container['quote_order_qty_market_allowed'];
    }

    /**
     * Sets quote_order_qty_market_allowed
     *
     * @param bool $quote_order_qty_market_allowed quote_order_qty_market_allowed
     *
     * @return self
     */
    public function setQuoteOrderQtyMarketAllowed($quote_order_qty_market_allowed)
    {
        if (is_null($quote_order_qty_market_allowed)) {
            throw new \InvalidArgumentException('non-nullable quote_order_qty_market_allowed cannot be null');
        }
        $this->container['quote_order_qty_market_allowed'] = $quote_order_qty_market_allowed;

        return $this;
    }

    /**
     * Gets allow_trailing_stop
     *
     * @return bool
     */
    public function getAllowTrailingStop()
    {
        return $this->container['allow_trailing_stop'];
    }

    /**
     * Sets allow_trailing_stop
     *
     * @param bool $allow_trailing_stop allow_trailing_stop
     *
     * @return self
     */
    public function setAllowTrailingStop($allow_trailing_stop)
    {
        if (is_null($allow_trailing_stop)) {
            throw new \InvalidArgumentException('non-nullable allow_trailing_stop cannot be null');
        }
        $this->container['allow_trailing_stop'] = $allow_trailing_stop;

        return $this;
    }

    /**
     * Gets is_spot_trading_allowed
     *
     * @return bool
     */
    public function getIsSpotTradingAllowed()
    {
        return $this->container['is_spot_trading_allowed'];
    }

    /**
     * Sets is_spot_trading_allowed
     *
     * @param bool $is_spot_trading_allowed is_spot_trading_allowed
     *
     * @return self
     */
    public function setIsSpotTradingAllowed($is_spot_trading_allowed)
    {
        if (is_null($is_spot_trading_allowed)) {
            throw new \InvalidArgumentException('non-nullable is_spot_trading_allowed cannot be null');
        }
        $this->container['is_spot_trading_allowed'] = $is_spot_trading_allowed;

        return $this;
    }

    /**
     * Gets is_margin_trading_allowed
     *
     * @return bool
     */
    public function getIsMarginTradingAllowed()
    {
        return $this->container['is_margin_trading_allowed'];
    }

    /**
     * Sets is_margin_trading_allowed
     *
     * @param bool $is_margin_trading_allowed is_margin_trading_allowed
     *
     * @return self
     */
    public function setIsMarginTradingAllowed($is_margin_trading_allowed)
    {
        if (is_null($is_margin_trading_allowed)) {
            throw new \InvalidArgumentException('non-nullable is_margin_trading_allowed cannot be null');
        }
        $this->container['is_margin_trading_allowed'] = $is_margin_trading_allowed;

        return $this;
    }

    /**
     * Gets filters
     *
     * @return \OpenAPI\Client\Model\ApiV3ExchangeInfoGet200ResponseSymbolsInnerFiltersInner[]
     */
    public function getFilters()
    {
        return $this->container['filters'];
    }

    /**
     * Sets filters
     *
     * @param \OpenAPI\Client\Model\ApiV3ExchangeInfoGet200ResponseSymbolsInnerFiltersInner[] $filters filters
     *
     * @return self
     */
    public function setFilters($filters)
    {
        if (is_null($filters)) {
            throw new \InvalidArgumentException('non-nullable filters cannot be null');
        }
        $this->container['filters'] = $filters;

        return $this;
    }

    /**
     * Gets permissions
     *
     * @return string[]
     */
    public function getPermissions()
    {
        return $this->container['permissions'];
    }

    /**
     * Sets permissions
     *
     * @param string[] $permissions permissions
     *
     * @return self
     */
    public function setPermissions($permissions)
    {
        if (is_null($permissions)) {
            throw new \InvalidArgumentException('non-nullable permissions cannot be null');
        }
        $this->container['permissions'] = $permissions;

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

