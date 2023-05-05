<?php
/**
 * SapiV1MarginForceLiquidationRecGet200ResponseRowsInner
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
 * SapiV1MarginForceLiquidationRecGet200ResponseRowsInner Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class SapiV1MarginForceLiquidationRecGet200ResponseRowsInner implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = '_sapi_v1_margin_forceLiquidationRec_get_200_response_rows_inner';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'avg_price' => 'string',
        'executed_qty' => 'string',
        'order_id' => 'int',
        'price' => 'string',
        'qty' => 'string',
        'side' => 'string',
        'symbol' => 'string',
        'time_in_force' => 'string',
        'is_isolated' => 'bool',
        'updated_time' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'avg_price' => null,
        'executed_qty' => null,
        'order_id' => 'int64',
        'price' => null,
        'qty' => null,
        'side' => null,
        'symbol' => null,
        'time_in_force' => null,
        'is_isolated' => null,
        'updated_time' => 'int64'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'avg_price' => false,
		'executed_qty' => false,
		'order_id' => false,
		'price' => false,
		'qty' => false,
		'side' => false,
		'symbol' => false,
		'time_in_force' => false,
		'is_isolated' => false,
		'updated_time' => false
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
        'avg_price' => 'avgPrice',
        'executed_qty' => 'executedQty',
        'order_id' => 'orderId',
        'price' => 'price',
        'qty' => 'qty',
        'side' => 'side',
        'symbol' => 'symbol',
        'time_in_force' => 'timeInForce',
        'is_isolated' => 'isIsolated',
        'updated_time' => 'updatedTime'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'avg_price' => 'setAvgPrice',
        'executed_qty' => 'setExecutedQty',
        'order_id' => 'setOrderId',
        'price' => 'setPrice',
        'qty' => 'setQty',
        'side' => 'setSide',
        'symbol' => 'setSymbol',
        'time_in_force' => 'setTimeInForce',
        'is_isolated' => 'setIsIsolated',
        'updated_time' => 'setUpdatedTime'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'avg_price' => 'getAvgPrice',
        'executed_qty' => 'getExecutedQty',
        'order_id' => 'getOrderId',
        'price' => 'getPrice',
        'qty' => 'getQty',
        'side' => 'getSide',
        'symbol' => 'getSymbol',
        'time_in_force' => 'getTimeInForce',
        'is_isolated' => 'getIsIsolated',
        'updated_time' => 'getUpdatedTime'
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
        $this->setIfExists('avg_price', $data ?? [], null);
        $this->setIfExists('executed_qty', $data ?? [], null);
        $this->setIfExists('order_id', $data ?? [], null);
        $this->setIfExists('price', $data ?? [], null);
        $this->setIfExists('qty', $data ?? [], null);
        $this->setIfExists('side', $data ?? [], null);
        $this->setIfExists('symbol', $data ?? [], null);
        $this->setIfExists('time_in_force', $data ?? [], null);
        $this->setIfExists('is_isolated', $data ?? [], null);
        $this->setIfExists('updated_time', $data ?? [], null);
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

        if ($this->container['avg_price'] === null) {
            $invalidProperties[] = "'avg_price' can't be null";
        }
        if ($this->container['executed_qty'] === null) {
            $invalidProperties[] = "'executed_qty' can't be null";
        }
        if ($this->container['order_id'] === null) {
            $invalidProperties[] = "'order_id' can't be null";
        }
        if ($this->container['price'] === null) {
            $invalidProperties[] = "'price' can't be null";
        }
        if ($this->container['qty'] === null) {
            $invalidProperties[] = "'qty' can't be null";
        }
        if ($this->container['side'] === null) {
            $invalidProperties[] = "'side' can't be null";
        }
        if ($this->container['symbol'] === null) {
            $invalidProperties[] = "'symbol' can't be null";
        }
        if ($this->container['time_in_force'] === null) {
            $invalidProperties[] = "'time_in_force' can't be null";
        }
        if ($this->container['is_isolated'] === null) {
            $invalidProperties[] = "'is_isolated' can't be null";
        }
        if ($this->container['updated_time'] === null) {
            $invalidProperties[] = "'updated_time' can't be null";
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
     * Gets avg_price
     *
     * @return string
     */
    public function getAvgPrice()
    {
        return $this->container['avg_price'];
    }

    /**
     * Sets avg_price
     *
     * @param string $avg_price avg_price
     *
     * @return self
     */
    public function setAvgPrice($avg_price)
    {
        if (is_null($avg_price)) {
            throw new \InvalidArgumentException('non-nullable avg_price cannot be null');
        }
        $this->container['avg_price'] = $avg_price;

        return $this;
    }

    /**
     * Gets executed_qty
     *
     * @return string
     */
    public function getExecutedQty()
    {
        return $this->container['executed_qty'];
    }

    /**
     * Sets executed_qty
     *
     * @param string $executed_qty executed_qty
     *
     * @return self
     */
    public function setExecutedQty($executed_qty)
    {
        if (is_null($executed_qty)) {
            throw new \InvalidArgumentException('non-nullable executed_qty cannot be null');
        }
        $this->container['executed_qty'] = $executed_qty;

        return $this;
    }

    /**
     * Gets order_id
     *
     * @return int
     */
    public function getOrderId()
    {
        return $this->container['order_id'];
    }

    /**
     * Sets order_id
     *
     * @param int $order_id order_id
     *
     * @return self
     */
    public function setOrderId($order_id)
    {
        if (is_null($order_id)) {
            throw new \InvalidArgumentException('non-nullable order_id cannot be null');
        }
        $this->container['order_id'] = $order_id;

        return $this;
    }

    /**
     * Gets price
     *
     * @return string
     */
    public function getPrice()
    {
        return $this->container['price'];
    }

    /**
     * Sets price
     *
     * @param string $price price
     *
     * @return self
     */
    public function setPrice($price)
    {
        if (is_null($price)) {
            throw new \InvalidArgumentException('non-nullable price cannot be null');
        }
        $this->container['price'] = $price;

        return $this;
    }

    /**
     * Gets qty
     *
     * @return string
     */
    public function getQty()
    {
        return $this->container['qty'];
    }

    /**
     * Sets qty
     *
     * @param string $qty qty
     *
     * @return self
     */
    public function setQty($qty)
    {
        if (is_null($qty)) {
            throw new \InvalidArgumentException('non-nullable qty cannot be null');
        }
        $this->container['qty'] = $qty;

        return $this;
    }

    /**
     * Gets side
     *
     * @return string
     */
    public function getSide()
    {
        return $this->container['side'];
    }

    /**
     * Sets side
     *
     * @param string $side side
     *
     * @return self
     */
    public function setSide($side)
    {
        if (is_null($side)) {
            throw new \InvalidArgumentException('non-nullable side cannot be null');
        }
        $this->container['side'] = $side;

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
     * Gets time_in_force
     *
     * @return string
     */
    public function getTimeInForce()
    {
        return $this->container['time_in_force'];
    }

    /**
     * Sets time_in_force
     *
     * @param string $time_in_force time_in_force
     *
     * @return self
     */
    public function setTimeInForce($time_in_force)
    {
        if (is_null($time_in_force)) {
            throw new \InvalidArgumentException('non-nullable time_in_force cannot be null');
        }
        $this->container['time_in_force'] = $time_in_force;

        return $this;
    }

    /**
     * Gets is_isolated
     *
     * @return bool
     */
    public function getIsIsolated()
    {
        return $this->container['is_isolated'];
    }

    /**
     * Sets is_isolated
     *
     * @param bool $is_isolated is_isolated
     *
     * @return self
     */
    public function setIsIsolated($is_isolated)
    {
        if (is_null($is_isolated)) {
            throw new \InvalidArgumentException('non-nullable is_isolated cannot be null');
        }
        $this->container['is_isolated'] = $is_isolated;

        return $this;
    }

    /**
     * Gets updated_time
     *
     * @return int
     */
    public function getUpdatedTime()
    {
        return $this->container['updated_time'];
    }

    /**
     * Sets updated_time
     *
     * @param int $updated_time updated_time
     *
     * @return self
     */
    public function setUpdatedTime($updated_time)
    {
        if (is_null($updated_time)) {
            throw new \InvalidArgumentException('non-nullable updated_time cannot be null');
        }
        $this->container['updated_time'] = $updated_time;

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

