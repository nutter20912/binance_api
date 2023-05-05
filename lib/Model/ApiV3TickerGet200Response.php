<?php
/**
 * ApiV3TickerGet200Response
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
 * ApiV3TickerGet200Response Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ApiV3TickerGet200Response implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = '_api_v3_ticker_get_200_response';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'symbol' => 'string',
        'price_change' => 'string',
        'price_change_percent' => 'string',
        'weighted_avg_price' => 'string',
        'open_price' => 'string',
        'high_price' => 'string',
        'low_price' => 'string',
        'last_price' => 'string',
        'volume' => 'string',
        'quote_volume' => 'string',
        'open_time' => 'int',
        'close_time' => 'int',
        'first_id' => 'int',
        'last_id' => 'int',
        'count' => 'int'
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
        'price_change' => null,
        'price_change_percent' => null,
        'weighted_avg_price' => null,
        'open_price' => null,
        'high_price' => null,
        'low_price' => null,
        'last_price' => null,
        'volume' => null,
        'quote_volume' => null,
        'open_time' => 'int64',
        'close_time' => 'int64',
        'first_id' => 'int64',
        'last_id' => 'int64',
        'count' => 'int64'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'symbol' => false,
		'price_change' => false,
		'price_change_percent' => false,
		'weighted_avg_price' => false,
		'open_price' => false,
		'high_price' => false,
		'low_price' => false,
		'last_price' => false,
		'volume' => false,
		'quote_volume' => false,
		'open_time' => false,
		'close_time' => false,
		'first_id' => false,
		'last_id' => false,
		'count' => false
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
        'price_change' => 'priceChange',
        'price_change_percent' => 'priceChangePercent',
        'weighted_avg_price' => 'weightedAvgPrice',
        'open_price' => 'openPrice',
        'high_price' => 'highPrice',
        'low_price' => 'lowPrice',
        'last_price' => 'lastPrice',
        'volume' => 'volume',
        'quote_volume' => 'quoteVolume',
        'open_time' => 'openTime',
        'close_time' => 'closeTime',
        'first_id' => 'firstId',
        'last_id' => 'lastId',
        'count' => 'count'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'symbol' => 'setSymbol',
        'price_change' => 'setPriceChange',
        'price_change_percent' => 'setPriceChangePercent',
        'weighted_avg_price' => 'setWeightedAvgPrice',
        'open_price' => 'setOpenPrice',
        'high_price' => 'setHighPrice',
        'low_price' => 'setLowPrice',
        'last_price' => 'setLastPrice',
        'volume' => 'setVolume',
        'quote_volume' => 'setQuoteVolume',
        'open_time' => 'setOpenTime',
        'close_time' => 'setCloseTime',
        'first_id' => 'setFirstId',
        'last_id' => 'setLastId',
        'count' => 'setCount'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'symbol' => 'getSymbol',
        'price_change' => 'getPriceChange',
        'price_change_percent' => 'getPriceChangePercent',
        'weighted_avg_price' => 'getWeightedAvgPrice',
        'open_price' => 'getOpenPrice',
        'high_price' => 'getHighPrice',
        'low_price' => 'getLowPrice',
        'last_price' => 'getLastPrice',
        'volume' => 'getVolume',
        'quote_volume' => 'getQuoteVolume',
        'open_time' => 'getOpenTime',
        'close_time' => 'getCloseTime',
        'first_id' => 'getFirstId',
        'last_id' => 'getLastId',
        'count' => 'getCount'
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
        $this->setIfExists('price_change', $data ?? [], null);
        $this->setIfExists('price_change_percent', $data ?? [], null);
        $this->setIfExists('weighted_avg_price', $data ?? [], null);
        $this->setIfExists('open_price', $data ?? [], null);
        $this->setIfExists('high_price', $data ?? [], null);
        $this->setIfExists('low_price', $data ?? [], null);
        $this->setIfExists('last_price', $data ?? [], null);
        $this->setIfExists('volume', $data ?? [], null);
        $this->setIfExists('quote_volume', $data ?? [], null);
        $this->setIfExists('open_time', $data ?? [], null);
        $this->setIfExists('close_time', $data ?? [], null);
        $this->setIfExists('first_id', $data ?? [], null);
        $this->setIfExists('last_id', $data ?? [], null);
        $this->setIfExists('count', $data ?? [], null);
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
        if ($this->container['price_change'] === null) {
            $invalidProperties[] = "'price_change' can't be null";
        }
        if ($this->container['price_change_percent'] === null) {
            $invalidProperties[] = "'price_change_percent' can't be null";
        }
        if ($this->container['weighted_avg_price'] === null) {
            $invalidProperties[] = "'weighted_avg_price' can't be null";
        }
        if ($this->container['open_price'] === null) {
            $invalidProperties[] = "'open_price' can't be null";
        }
        if ($this->container['high_price'] === null) {
            $invalidProperties[] = "'high_price' can't be null";
        }
        if ($this->container['low_price'] === null) {
            $invalidProperties[] = "'low_price' can't be null";
        }
        if ($this->container['last_price'] === null) {
            $invalidProperties[] = "'last_price' can't be null";
        }
        if ($this->container['volume'] === null) {
            $invalidProperties[] = "'volume' can't be null";
        }
        if ($this->container['quote_volume'] === null) {
            $invalidProperties[] = "'quote_volume' can't be null";
        }
        if ($this->container['open_time'] === null) {
            $invalidProperties[] = "'open_time' can't be null";
        }
        if ($this->container['close_time'] === null) {
            $invalidProperties[] = "'close_time' can't be null";
        }
        if ($this->container['first_id'] === null) {
            $invalidProperties[] = "'first_id' can't be null";
        }
        if ($this->container['last_id'] === null) {
            $invalidProperties[] = "'last_id' can't be null";
        }
        if ($this->container['count'] === null) {
            $invalidProperties[] = "'count' can't be null";
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
     * Gets price_change
     *
     * @return string
     */
    public function getPriceChange()
    {
        return $this->container['price_change'];
    }

    /**
     * Sets price_change
     *
     * @param string $price_change price_change
     *
     * @return self
     */
    public function setPriceChange($price_change)
    {
        if (is_null($price_change)) {
            throw new \InvalidArgumentException('non-nullable price_change cannot be null');
        }
        $this->container['price_change'] = $price_change;

        return $this;
    }

    /**
     * Gets price_change_percent
     *
     * @return string
     */
    public function getPriceChangePercent()
    {
        return $this->container['price_change_percent'];
    }

    /**
     * Sets price_change_percent
     *
     * @param string $price_change_percent price_change_percent
     *
     * @return self
     */
    public function setPriceChangePercent($price_change_percent)
    {
        if (is_null($price_change_percent)) {
            throw new \InvalidArgumentException('non-nullable price_change_percent cannot be null');
        }
        $this->container['price_change_percent'] = $price_change_percent;

        return $this;
    }

    /**
     * Gets weighted_avg_price
     *
     * @return string
     */
    public function getWeightedAvgPrice()
    {
        return $this->container['weighted_avg_price'];
    }

    /**
     * Sets weighted_avg_price
     *
     * @param string $weighted_avg_price weighted_avg_price
     *
     * @return self
     */
    public function setWeightedAvgPrice($weighted_avg_price)
    {
        if (is_null($weighted_avg_price)) {
            throw new \InvalidArgumentException('non-nullable weighted_avg_price cannot be null');
        }
        $this->container['weighted_avg_price'] = $weighted_avg_price;

        return $this;
    }

    /**
     * Gets open_price
     *
     * @return string
     */
    public function getOpenPrice()
    {
        return $this->container['open_price'];
    }

    /**
     * Sets open_price
     *
     * @param string $open_price open_price
     *
     * @return self
     */
    public function setOpenPrice($open_price)
    {
        if (is_null($open_price)) {
            throw new \InvalidArgumentException('non-nullable open_price cannot be null');
        }
        $this->container['open_price'] = $open_price;

        return $this;
    }

    /**
     * Gets high_price
     *
     * @return string
     */
    public function getHighPrice()
    {
        return $this->container['high_price'];
    }

    /**
     * Sets high_price
     *
     * @param string $high_price high_price
     *
     * @return self
     */
    public function setHighPrice($high_price)
    {
        if (is_null($high_price)) {
            throw new \InvalidArgumentException('non-nullable high_price cannot be null');
        }
        $this->container['high_price'] = $high_price;

        return $this;
    }

    /**
     * Gets low_price
     *
     * @return string
     */
    public function getLowPrice()
    {
        return $this->container['low_price'];
    }

    /**
     * Sets low_price
     *
     * @param string $low_price low_price
     *
     * @return self
     */
    public function setLowPrice($low_price)
    {
        if (is_null($low_price)) {
            throw new \InvalidArgumentException('non-nullable low_price cannot be null');
        }
        $this->container['low_price'] = $low_price;

        return $this;
    }

    /**
     * Gets last_price
     *
     * @return string
     */
    public function getLastPrice()
    {
        return $this->container['last_price'];
    }

    /**
     * Sets last_price
     *
     * @param string $last_price last_price
     *
     * @return self
     */
    public function setLastPrice($last_price)
    {
        if (is_null($last_price)) {
            throw new \InvalidArgumentException('non-nullable last_price cannot be null');
        }
        $this->container['last_price'] = $last_price;

        return $this;
    }

    /**
     * Gets volume
     *
     * @return string
     */
    public function getVolume()
    {
        return $this->container['volume'];
    }

    /**
     * Sets volume
     *
     * @param string $volume volume
     *
     * @return self
     */
    public function setVolume($volume)
    {
        if (is_null($volume)) {
            throw new \InvalidArgumentException('non-nullable volume cannot be null');
        }
        $this->container['volume'] = $volume;

        return $this;
    }

    /**
     * Gets quote_volume
     *
     * @return string
     */
    public function getQuoteVolume()
    {
        return $this->container['quote_volume'];
    }

    /**
     * Sets quote_volume
     *
     * @param string $quote_volume quote_volume
     *
     * @return self
     */
    public function setQuoteVolume($quote_volume)
    {
        if (is_null($quote_volume)) {
            throw new \InvalidArgumentException('non-nullable quote_volume cannot be null');
        }
        $this->container['quote_volume'] = $quote_volume;

        return $this;
    }

    /**
     * Gets open_time
     *
     * @return int
     */
    public function getOpenTime()
    {
        return $this->container['open_time'];
    }

    /**
     * Sets open_time
     *
     * @param int $open_time open_time
     *
     * @return self
     */
    public function setOpenTime($open_time)
    {
        if (is_null($open_time)) {
            throw new \InvalidArgumentException('non-nullable open_time cannot be null');
        }
        $this->container['open_time'] = $open_time;

        return $this;
    }

    /**
     * Gets close_time
     *
     * @return int
     */
    public function getCloseTime()
    {
        return $this->container['close_time'];
    }

    /**
     * Sets close_time
     *
     * @param int $close_time close_time
     *
     * @return self
     */
    public function setCloseTime($close_time)
    {
        if (is_null($close_time)) {
            throw new \InvalidArgumentException('non-nullable close_time cannot be null');
        }
        $this->container['close_time'] = $close_time;

        return $this;
    }

    /**
     * Gets first_id
     *
     * @return int
     */
    public function getFirstId()
    {
        return $this->container['first_id'];
    }

    /**
     * Sets first_id
     *
     * @param int $first_id first_id
     *
     * @return self
     */
    public function setFirstId($first_id)
    {
        if (is_null($first_id)) {
            throw new \InvalidArgumentException('non-nullable first_id cannot be null');
        }
        $this->container['first_id'] = $first_id;

        return $this;
    }

    /**
     * Gets last_id
     *
     * @return int
     */
    public function getLastId()
    {
        return $this->container['last_id'];
    }

    /**
     * Sets last_id
     *
     * @param int $last_id last_id
     *
     * @return self
     */
    public function setLastId($last_id)
    {
        if (is_null($last_id)) {
            throw new \InvalidArgumentException('non-nullable last_id cannot be null');
        }
        $this->container['last_id'] = $last_id;

        return $this;
    }

    /**
     * Gets count
     *
     * @return int
     */
    public function getCount()
    {
        return $this->container['count'];
    }

    /**
     * Sets count
     *
     * @param int $count count
     *
     * @return self
     */
    public function setCount($count)
    {
        if (is_null($count)) {
            throw new \InvalidArgumentException('non-nullable count cannot be null');
        }
        $this->container['count'] = $count;

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


