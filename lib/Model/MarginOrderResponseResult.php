<?php
/**
 * MarginOrderResponseResult
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
 * MarginOrderResponseResult Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class MarginOrderResponseResult implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'marginOrderResponseResult';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'symbol' => 'string',
        'order_id' => 'int',
        'client_order_id' => 'string',
        'transact_time' => 'int',
        'price' => 'string',
        'orig_qty' => 'string',
        'executed_qty' => 'string',
        'cummulative_quote_qty' => 'string',
        'status' => 'string',
        'time_in_force' => 'string',
        'type' => 'string',
        'is_isolated' => 'bool',
        'side' => 'string'
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
        'order_id' => 'int64',
        'client_order_id' => null,
        'transact_time' => 'int64',
        'price' => null,
        'orig_qty' => null,
        'executed_qty' => null,
        'cummulative_quote_qty' => null,
        'status' => null,
        'time_in_force' => null,
        'type' => null,
        'is_isolated' => null,
        'side' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'symbol' => false,
		'order_id' => false,
		'client_order_id' => false,
		'transact_time' => false,
		'price' => false,
		'orig_qty' => false,
		'executed_qty' => false,
		'cummulative_quote_qty' => false,
		'status' => false,
		'time_in_force' => false,
		'type' => false,
		'is_isolated' => false,
		'side' => false
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
        'order_id' => 'orderId',
        'client_order_id' => 'clientOrderId',
        'transact_time' => 'transactTime',
        'price' => 'price',
        'orig_qty' => 'origQty',
        'executed_qty' => 'executedQty',
        'cummulative_quote_qty' => 'cummulativeQuoteQty',
        'status' => 'status',
        'time_in_force' => 'timeInForce',
        'type' => 'type',
        'is_isolated' => 'isIsolated',
        'side' => 'side'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'symbol' => 'setSymbol',
        'order_id' => 'setOrderId',
        'client_order_id' => 'setClientOrderId',
        'transact_time' => 'setTransactTime',
        'price' => 'setPrice',
        'orig_qty' => 'setOrigQty',
        'executed_qty' => 'setExecutedQty',
        'cummulative_quote_qty' => 'setCummulativeQuoteQty',
        'status' => 'setStatus',
        'time_in_force' => 'setTimeInForce',
        'type' => 'setType',
        'is_isolated' => 'setIsIsolated',
        'side' => 'setSide'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'symbol' => 'getSymbol',
        'order_id' => 'getOrderId',
        'client_order_id' => 'getClientOrderId',
        'transact_time' => 'getTransactTime',
        'price' => 'getPrice',
        'orig_qty' => 'getOrigQty',
        'executed_qty' => 'getExecutedQty',
        'cummulative_quote_qty' => 'getCummulativeQuoteQty',
        'status' => 'getStatus',
        'time_in_force' => 'getTimeInForce',
        'type' => 'getType',
        'is_isolated' => 'getIsIsolated',
        'side' => 'getSide'
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
        $this->setIfExists('order_id', $data ?? [], null);
        $this->setIfExists('client_order_id', $data ?? [], null);
        $this->setIfExists('transact_time', $data ?? [], null);
        $this->setIfExists('price', $data ?? [], null);
        $this->setIfExists('orig_qty', $data ?? [], null);
        $this->setIfExists('executed_qty', $data ?? [], null);
        $this->setIfExists('cummulative_quote_qty', $data ?? [], null);
        $this->setIfExists('status', $data ?? [], null);
        $this->setIfExists('time_in_force', $data ?? [], null);
        $this->setIfExists('type', $data ?? [], null);
        $this->setIfExists('is_isolated', $data ?? [], null);
        $this->setIfExists('side', $data ?? [], null);
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
        if ($this->container['order_id'] === null) {
            $invalidProperties[] = "'order_id' can't be null";
        }
        if ($this->container['client_order_id'] === null) {
            $invalidProperties[] = "'client_order_id' can't be null";
        }
        if ($this->container['transact_time'] === null) {
            $invalidProperties[] = "'transact_time' can't be null";
        }
        if ($this->container['price'] === null) {
            $invalidProperties[] = "'price' can't be null";
        }
        if ($this->container['orig_qty'] === null) {
            $invalidProperties[] = "'orig_qty' can't be null";
        }
        if ($this->container['executed_qty'] === null) {
            $invalidProperties[] = "'executed_qty' can't be null";
        }
        if ($this->container['cummulative_quote_qty'] === null) {
            $invalidProperties[] = "'cummulative_quote_qty' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        if ($this->container['time_in_force'] === null) {
            $invalidProperties[] = "'time_in_force' can't be null";
        }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        if ($this->container['is_isolated'] === null) {
            $invalidProperties[] = "'is_isolated' can't be null";
        }
        if ($this->container['side'] === null) {
            $invalidProperties[] = "'side' can't be null";
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
     * Gets client_order_id
     *
     * @return string
     */
    public function getClientOrderId()
    {
        return $this->container['client_order_id'];
    }

    /**
     * Sets client_order_id
     *
     * @param string $client_order_id client_order_id
     *
     * @return self
     */
    public function setClientOrderId($client_order_id)
    {
        if (is_null($client_order_id)) {
            throw new \InvalidArgumentException('non-nullable client_order_id cannot be null');
        }
        $this->container['client_order_id'] = $client_order_id;

        return $this;
    }

    /**
     * Gets transact_time
     *
     * @return int
     */
    public function getTransactTime()
    {
        return $this->container['transact_time'];
    }

    /**
     * Sets transact_time
     *
     * @param int $transact_time transact_time
     *
     * @return self
     */
    public function setTransactTime($transact_time)
    {
        if (is_null($transact_time)) {
            throw new \InvalidArgumentException('non-nullable transact_time cannot be null');
        }
        $this->container['transact_time'] = $transact_time;

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
     * Gets cummulative_quote_qty
     *
     * @return string
     */
    public function getCummulativeQuoteQty()
    {
        return $this->container['cummulative_quote_qty'];
    }

    /**
     * Sets cummulative_quote_qty
     *
     * @param string $cummulative_quote_qty cummulative_quote_qty
     *
     * @return self
     */
    public function setCummulativeQuoteQty($cummulative_quote_qty)
    {
        if (is_null($cummulative_quote_qty)) {
            throw new \InvalidArgumentException('non-nullable cummulative_quote_qty cannot be null');
        }
        $this->container['cummulative_quote_qty'] = $cummulative_quote_qty;

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
     * Gets type
     *
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string $type type
     *
     * @return self
     */
    public function setType($type)
    {
        if (is_null($type)) {
            throw new \InvalidArgumentException('non-nullable type cannot be null');
        }
        $this->container['type'] = $type;

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


