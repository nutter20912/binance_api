<?php
/**
 * SapiV1AlgoFuturesSubOrdersGet200ResponseSubOrdersInner
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
 * SapiV1AlgoFuturesSubOrdersGet200ResponseSubOrdersInner Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class SapiV1AlgoFuturesSubOrdersGet200ResponseSubOrdersInner implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = '_sapi_v1_algo_futures_subOrders_get_200_response_subOrders_inner';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'algo_id' => 'int',
        'order_id' => 'int',
        'order_status' => 'string',
        'executed_qty' => 'string',
        'executed_amt' => 'string',
        'fee_amt' => 'string',
        'fee_asset' => 'string',
        'book_time' => 'int',
        'avg_price' => 'string',
        'side' => 'string',
        'symbol' => 'string',
        'sub_id' => 'int',
        'time_in_force' => 'string',
        'orig_qty' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'algo_id' => 'int64',
        'order_id' => 'int64',
        'order_status' => null,
        'executed_qty' => null,
        'executed_amt' => null,
        'fee_amt' => null,
        'fee_asset' => null,
        'book_time' => 'int64',
        'avg_price' => null,
        'side' => null,
        'symbol' => null,
        'sub_id' => 'int64',
        'time_in_force' => null,
        'orig_qty' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'algo_id' => false,
		'order_id' => false,
		'order_status' => false,
		'executed_qty' => false,
		'executed_amt' => false,
		'fee_amt' => false,
		'fee_asset' => false,
		'book_time' => false,
		'avg_price' => false,
		'side' => false,
		'symbol' => false,
		'sub_id' => false,
		'time_in_force' => false,
		'orig_qty' => false
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
        'algo_id' => 'algoId',
        'order_id' => 'orderId',
        'order_status' => 'orderStatus',
        'executed_qty' => 'executedQty',
        'executed_amt' => 'executedAmt',
        'fee_amt' => 'feeAmt',
        'fee_asset' => 'feeAsset',
        'book_time' => 'bookTime',
        'avg_price' => 'avgPrice',
        'side' => 'side',
        'symbol' => 'symbol',
        'sub_id' => 'subId',
        'time_in_force' => 'timeInForce',
        'orig_qty' => 'origQty'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'algo_id' => 'setAlgoId',
        'order_id' => 'setOrderId',
        'order_status' => 'setOrderStatus',
        'executed_qty' => 'setExecutedQty',
        'executed_amt' => 'setExecutedAmt',
        'fee_amt' => 'setFeeAmt',
        'fee_asset' => 'setFeeAsset',
        'book_time' => 'setBookTime',
        'avg_price' => 'setAvgPrice',
        'side' => 'setSide',
        'symbol' => 'setSymbol',
        'sub_id' => 'setSubId',
        'time_in_force' => 'setTimeInForce',
        'orig_qty' => 'setOrigQty'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'algo_id' => 'getAlgoId',
        'order_id' => 'getOrderId',
        'order_status' => 'getOrderStatus',
        'executed_qty' => 'getExecutedQty',
        'executed_amt' => 'getExecutedAmt',
        'fee_amt' => 'getFeeAmt',
        'fee_asset' => 'getFeeAsset',
        'book_time' => 'getBookTime',
        'avg_price' => 'getAvgPrice',
        'side' => 'getSide',
        'symbol' => 'getSymbol',
        'sub_id' => 'getSubId',
        'time_in_force' => 'getTimeInForce',
        'orig_qty' => 'getOrigQty'
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
        $this->setIfExists('algo_id', $data ?? [], null);
        $this->setIfExists('order_id', $data ?? [], null);
        $this->setIfExists('order_status', $data ?? [], null);
        $this->setIfExists('executed_qty', $data ?? [], null);
        $this->setIfExists('executed_amt', $data ?? [], null);
        $this->setIfExists('fee_amt', $data ?? [], null);
        $this->setIfExists('fee_asset', $data ?? [], null);
        $this->setIfExists('book_time', $data ?? [], null);
        $this->setIfExists('avg_price', $data ?? [], null);
        $this->setIfExists('side', $data ?? [], null);
        $this->setIfExists('symbol', $data ?? [], null);
        $this->setIfExists('sub_id', $data ?? [], null);
        $this->setIfExists('time_in_force', $data ?? [], null);
        $this->setIfExists('orig_qty', $data ?? [], null);
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

        if ($this->container['algo_id'] === null) {
            $invalidProperties[] = "'algo_id' can't be null";
        }
        if ($this->container['order_id'] === null) {
            $invalidProperties[] = "'order_id' can't be null";
        }
        if ($this->container['order_status'] === null) {
            $invalidProperties[] = "'order_status' can't be null";
        }
        if ($this->container['executed_amt'] === null) {
            $invalidProperties[] = "'executed_amt' can't be null";
        }
        if ($this->container['fee_amt'] === null) {
            $invalidProperties[] = "'fee_amt' can't be null";
        }
        if ($this->container['fee_asset'] === null) {
            $invalidProperties[] = "'fee_asset' can't be null";
        }
        if ($this->container['book_time'] === null) {
            $invalidProperties[] = "'book_time' can't be null";
        }
        if ($this->container['avg_price'] === null) {
            $invalidProperties[] = "'avg_price' can't be null";
        }
        if ($this->container['side'] === null) {
            $invalidProperties[] = "'side' can't be null";
        }
        if ($this->container['symbol'] === null) {
            $invalidProperties[] = "'symbol' can't be null";
        }
        if ($this->container['sub_id'] === null) {
            $invalidProperties[] = "'sub_id' can't be null";
        }
        if ($this->container['time_in_force'] === null) {
            $invalidProperties[] = "'time_in_force' can't be null";
        }
        if ($this->container['orig_qty'] === null) {
            $invalidProperties[] = "'orig_qty' can't be null";
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
     * Gets algo_id
     *
     * @return int
     */
    public function getAlgoId()
    {
        return $this->container['algo_id'];
    }

    /**
     * Sets algo_id
     *
     * @param int $algo_id algo_id
     *
     * @return self
     */
    public function setAlgoId($algo_id)
    {
        if (is_null($algo_id)) {
            throw new \InvalidArgumentException('non-nullable algo_id cannot be null');
        }
        $this->container['algo_id'] = $algo_id;

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
     * Gets order_status
     *
     * @return string
     */
    public function getOrderStatus()
    {
        return $this->container['order_status'];
    }

    /**
     * Sets order_status
     *
     * @param string $order_status order_status
     *
     * @return self
     */
    public function setOrderStatus($order_status)
    {
        if (is_null($order_status)) {
            throw new \InvalidArgumentException('non-nullable order_status cannot be null');
        }
        $this->container['order_status'] = $order_status;

        return $this;
    }

    /**
     * Gets executed_qty
     *
     * @return string|null
     */
    public function getExecutedQty()
    {
        return $this->container['executed_qty'];
    }

    /**
     * Sets executed_qty
     *
     * @param string|null $executed_qty executed_qty
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
     * Gets executed_amt
     *
     * @return string
     */
    public function getExecutedAmt()
    {
        return $this->container['executed_amt'];
    }

    /**
     * Sets executed_amt
     *
     * @param string $executed_amt executed_amt
     *
     * @return self
     */
    public function setExecutedAmt($executed_amt)
    {
        if (is_null($executed_amt)) {
            throw new \InvalidArgumentException('non-nullable executed_amt cannot be null');
        }
        $this->container['executed_amt'] = $executed_amt;

        return $this;
    }

    /**
     * Gets fee_amt
     *
     * @return string
     */
    public function getFeeAmt()
    {
        return $this->container['fee_amt'];
    }

    /**
     * Sets fee_amt
     *
     * @param string $fee_amt fee_amt
     *
     * @return self
     */
    public function setFeeAmt($fee_amt)
    {
        if (is_null($fee_amt)) {
            throw new \InvalidArgumentException('non-nullable fee_amt cannot be null');
        }
        $this->container['fee_amt'] = $fee_amt;

        return $this;
    }

    /**
     * Gets fee_asset
     *
     * @return string
     */
    public function getFeeAsset()
    {
        return $this->container['fee_asset'];
    }

    /**
     * Sets fee_asset
     *
     * @param string $fee_asset fee_asset
     *
     * @return self
     */
    public function setFeeAsset($fee_asset)
    {
        if (is_null($fee_asset)) {
            throw new \InvalidArgumentException('non-nullable fee_asset cannot be null');
        }
        $this->container['fee_asset'] = $fee_asset;

        return $this;
    }

    /**
     * Gets book_time
     *
     * @return int
     */
    public function getBookTime()
    {
        return $this->container['book_time'];
    }

    /**
     * Sets book_time
     *
     * @param int $book_time book_time
     *
     * @return self
     */
    public function setBookTime($book_time)
    {
        if (is_null($book_time)) {
            throw new \InvalidArgumentException('non-nullable book_time cannot be null');
        }
        $this->container['book_time'] = $book_time;

        return $this;
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
     * Gets sub_id
     *
     * @return int
     */
    public function getSubId()
    {
        return $this->container['sub_id'];
    }

    /**
     * Sets sub_id
     *
     * @param int $sub_id sub_id
     *
     * @return self
     */
    public function setSubId($sub_id)
    {
        if (is_null($sub_id)) {
            throw new \InvalidArgumentException('non-nullable sub_id cannot be null');
        }
        $this->container['sub_id'] = $sub_id;

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
     * Gets orig_qty
     *
     * @return string
     */
    public function getOrigQty()
    {
        return $this->container['orig_qty'];
    }

    /**
     * Sets orig_qty
     *
     * @param string $orig_qty orig_qty
     *
     * @return self
     */
    public function setOrigQty($orig_qty)
    {
        if (is_null($orig_qty)) {
            throw new \InvalidArgumentException('non-nullable orig_qty cannot be null');
        }
        $this->container['orig_qty'] = $orig_qty;

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


