<?php
/**
 * SapiV1MarginPairGet200Response
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
 * SapiV1MarginPairGet200Response Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class SapiV1MarginPairGet200Response implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = '_sapi_v1_margin_pair_get_200_response';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'int',
        'symbol' => 'string',
        'base' => 'string',
        'quote' => 'string',
        'is_margin_trade' => 'bool',
        'is_buy_allowed' => 'bool',
        'is_sell_allowed' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id' => 'int64',
        'symbol' => null,
        'base' => null,
        'quote' => null,
        'is_margin_trade' => null,
        'is_buy_allowed' => null,
        'is_sell_allowed' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
		'symbol' => false,
		'base' => false,
		'quote' => false,
		'is_margin_trade' => false,
		'is_buy_allowed' => false,
		'is_sell_allowed' => false
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
        'id' => 'id',
        'symbol' => 'symbol',
        'base' => 'base',
        'quote' => 'quote',
        'is_margin_trade' => 'isMarginTrade',
        'is_buy_allowed' => 'isBuyAllowed',
        'is_sell_allowed' => 'isSellAllowed'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'symbol' => 'setSymbol',
        'base' => 'setBase',
        'quote' => 'setQuote',
        'is_margin_trade' => 'setIsMarginTrade',
        'is_buy_allowed' => 'setIsBuyAllowed',
        'is_sell_allowed' => 'setIsSellAllowed'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'symbol' => 'getSymbol',
        'base' => 'getBase',
        'quote' => 'getQuote',
        'is_margin_trade' => 'getIsMarginTrade',
        'is_buy_allowed' => 'getIsBuyAllowed',
        'is_sell_allowed' => 'getIsSellAllowed'
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
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('symbol', $data ?? [], null);
        $this->setIfExists('base', $data ?? [], null);
        $this->setIfExists('quote', $data ?? [], null);
        $this->setIfExists('is_margin_trade', $data ?? [], null);
        $this->setIfExists('is_buy_allowed', $data ?? [], null);
        $this->setIfExists('is_sell_allowed', $data ?? [], null);
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

        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['symbol'] === null) {
            $invalidProperties[] = "'symbol' can't be null";
        }
        if ($this->container['base'] === null) {
            $invalidProperties[] = "'base' can't be null";
        }
        if ($this->container['quote'] === null) {
            $invalidProperties[] = "'quote' can't be null";
        }
        if ($this->container['is_margin_trade'] === null) {
            $invalidProperties[] = "'is_margin_trade' can't be null";
        }
        if ($this->container['is_buy_allowed'] === null) {
            $invalidProperties[] = "'is_buy_allowed' can't be null";
        }
        if ($this->container['is_sell_allowed'] === null) {
            $invalidProperties[] = "'is_sell_allowed' can't be null";
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
     * Gets id
     *
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int $id id
     *
     * @return self
     */
    public function setId($id)
    {
        if (is_null($id)) {
            throw new \InvalidArgumentException('non-nullable id cannot be null');
        }
        $this->container['id'] = $id;

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
     * Gets base
     *
     * @return string
     */
    public function getBase()
    {
        return $this->container['base'];
    }

    /**
     * Sets base
     *
     * @param string $base base
     *
     * @return self
     */
    public function setBase($base)
    {
        if (is_null($base)) {
            throw new \InvalidArgumentException('non-nullable base cannot be null');
        }
        $this->container['base'] = $base;

        return $this;
    }

    /**
     * Gets quote
     *
     * @return string
     */
    public function getQuote()
    {
        return $this->container['quote'];
    }

    /**
     * Sets quote
     *
     * @param string $quote quote
     *
     * @return self
     */
    public function setQuote($quote)
    {
        if (is_null($quote)) {
            throw new \InvalidArgumentException('non-nullable quote cannot be null');
        }
        $this->container['quote'] = $quote;

        return $this;
    }

    /**
     * Gets is_margin_trade
     *
     * @return bool
     */
    public function getIsMarginTrade()
    {
        return $this->container['is_margin_trade'];
    }

    /**
     * Sets is_margin_trade
     *
     * @param bool $is_margin_trade is_margin_trade
     *
     * @return self
     */
    public function setIsMarginTrade($is_margin_trade)
    {
        if (is_null($is_margin_trade)) {
            throw new \InvalidArgumentException('non-nullable is_margin_trade cannot be null');
        }
        $this->container['is_margin_trade'] = $is_margin_trade;

        return $this;
    }

    /**
     * Gets is_buy_allowed
     *
     * @return bool
     */
    public function getIsBuyAllowed()
    {
        return $this->container['is_buy_allowed'];
    }

    /**
     * Sets is_buy_allowed
     *
     * @param bool $is_buy_allowed is_buy_allowed
     *
     * @return self
     */
    public function setIsBuyAllowed($is_buy_allowed)
    {
        if (is_null($is_buy_allowed)) {
            throw new \InvalidArgumentException('non-nullable is_buy_allowed cannot be null');
        }
        $this->container['is_buy_allowed'] = $is_buy_allowed;

        return $this;
    }

    /**
     * Gets is_sell_allowed
     *
     * @return bool
     */
    public function getIsSellAllowed()
    {
        return $this->container['is_sell_allowed'];
    }

    /**
     * Sets is_sell_allowed
     *
     * @param bool $is_sell_allowed is_sell_allowed
     *
     * @return self
     */
    public function setIsSellAllowed($is_sell_allowed)
    {
        if (is_null($is_sell_allowed)) {
            throw new \InvalidArgumentException('non-nullable is_sell_allowed cannot be null');
        }
        $this->container['is_sell_allowed'] = $is_sell_allowed;

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


