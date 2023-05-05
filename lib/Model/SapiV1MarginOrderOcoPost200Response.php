<?php
/**
 * SapiV1MarginOrderOcoPost200Response
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
 * SapiV1MarginOrderOcoPost200Response Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class SapiV1MarginOrderOcoPost200Response implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = '_sapi_v1_margin_order_oco_post_200_response';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'order_list_id' => 'int',
        'contingency_type' => 'string',
        'list_status_type' => 'string',
        'list_order_status' => 'string',
        'list_client_order_id' => 'string',
        'transaction_time' => 'int',
        'symbol' => 'string',
        'margin_buy_borrow_amount' => 'string',
        'margin_buy_borrow_asset' => 'string',
        'is_isolated' => 'bool',
        'orders' => '\OpenAPI\Client\Model\SapiV1MarginOrderOcoPost200ResponseOrdersInner[]',
        'order_reports' => '\OpenAPI\Client\Model\ApiV3OrderOcoPost200ResponseOrderReportsInner[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'order_list_id' => 'int64',
        'contingency_type' => null,
        'list_status_type' => null,
        'list_order_status' => null,
        'list_client_order_id' => null,
        'transaction_time' => 'int64',
        'symbol' => null,
        'margin_buy_borrow_amount' => null,
        'margin_buy_borrow_asset' => null,
        'is_isolated' => null,
        'orders' => null,
        'order_reports' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'order_list_id' => false,
		'contingency_type' => false,
		'list_status_type' => false,
		'list_order_status' => false,
		'list_client_order_id' => false,
		'transaction_time' => false,
		'symbol' => false,
		'margin_buy_borrow_amount' => false,
		'margin_buy_borrow_asset' => false,
		'is_isolated' => false,
		'orders' => false,
		'order_reports' => false
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
        'order_list_id' => 'orderListId',
        'contingency_type' => 'contingencyType',
        'list_status_type' => 'listStatusType',
        'list_order_status' => 'listOrderStatus',
        'list_client_order_id' => 'listClientOrderId',
        'transaction_time' => 'transactionTime',
        'symbol' => 'symbol',
        'margin_buy_borrow_amount' => 'marginBuyBorrowAmount',
        'margin_buy_borrow_asset' => 'marginBuyBorrowAsset',
        'is_isolated' => 'isIsolated',
        'orders' => 'orders',
        'order_reports' => 'orderReports'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'order_list_id' => 'setOrderListId',
        'contingency_type' => 'setContingencyType',
        'list_status_type' => 'setListStatusType',
        'list_order_status' => 'setListOrderStatus',
        'list_client_order_id' => 'setListClientOrderId',
        'transaction_time' => 'setTransactionTime',
        'symbol' => 'setSymbol',
        'margin_buy_borrow_amount' => 'setMarginBuyBorrowAmount',
        'margin_buy_borrow_asset' => 'setMarginBuyBorrowAsset',
        'is_isolated' => 'setIsIsolated',
        'orders' => 'setOrders',
        'order_reports' => 'setOrderReports'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'order_list_id' => 'getOrderListId',
        'contingency_type' => 'getContingencyType',
        'list_status_type' => 'getListStatusType',
        'list_order_status' => 'getListOrderStatus',
        'list_client_order_id' => 'getListClientOrderId',
        'transaction_time' => 'getTransactionTime',
        'symbol' => 'getSymbol',
        'margin_buy_borrow_amount' => 'getMarginBuyBorrowAmount',
        'margin_buy_borrow_asset' => 'getMarginBuyBorrowAsset',
        'is_isolated' => 'getIsIsolated',
        'orders' => 'getOrders',
        'order_reports' => 'getOrderReports'
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
        $this->setIfExists('order_list_id', $data ?? [], null);
        $this->setIfExists('contingency_type', $data ?? [], null);
        $this->setIfExists('list_status_type', $data ?? [], null);
        $this->setIfExists('list_order_status', $data ?? [], null);
        $this->setIfExists('list_client_order_id', $data ?? [], null);
        $this->setIfExists('transaction_time', $data ?? [], null);
        $this->setIfExists('symbol', $data ?? [], null);
        $this->setIfExists('margin_buy_borrow_amount', $data ?? [], null);
        $this->setIfExists('margin_buy_borrow_asset', $data ?? [], null);
        $this->setIfExists('is_isolated', $data ?? [], null);
        $this->setIfExists('orders', $data ?? [], null);
        $this->setIfExists('order_reports', $data ?? [], null);
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

        if ($this->container['order_list_id'] === null) {
            $invalidProperties[] = "'order_list_id' can't be null";
        }
        if ($this->container['contingency_type'] === null) {
            $invalidProperties[] = "'contingency_type' can't be null";
        }
        if ($this->container['list_status_type'] === null) {
            $invalidProperties[] = "'list_status_type' can't be null";
        }
        if ($this->container['list_order_status'] === null) {
            $invalidProperties[] = "'list_order_status' can't be null";
        }
        if ($this->container['list_client_order_id'] === null) {
            $invalidProperties[] = "'list_client_order_id' can't be null";
        }
        if ($this->container['transaction_time'] === null) {
            $invalidProperties[] = "'transaction_time' can't be null";
        }
        if ($this->container['symbol'] === null) {
            $invalidProperties[] = "'symbol' can't be null";
        }
        if ($this->container['margin_buy_borrow_amount'] === null) {
            $invalidProperties[] = "'margin_buy_borrow_amount' can't be null";
        }
        if ($this->container['margin_buy_borrow_asset'] === null) {
            $invalidProperties[] = "'margin_buy_borrow_asset' can't be null";
        }
        if ($this->container['is_isolated'] === null) {
            $invalidProperties[] = "'is_isolated' can't be null";
        }
        if ($this->container['orders'] === null) {
            $invalidProperties[] = "'orders' can't be null";
        }
        if ($this->container['order_reports'] === null) {
            $invalidProperties[] = "'order_reports' can't be null";
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
     * Gets order_list_id
     *
     * @return int
     */
    public function getOrderListId()
    {
        return $this->container['order_list_id'];
    }

    /**
     * Sets order_list_id
     *
     * @param int $order_list_id order_list_id
     *
     * @return self
     */
    public function setOrderListId($order_list_id)
    {
        if (is_null($order_list_id)) {
            throw new \InvalidArgumentException('non-nullable order_list_id cannot be null');
        }
        $this->container['order_list_id'] = $order_list_id;

        return $this;
    }

    /**
     * Gets contingency_type
     *
     * @return string
     */
    public function getContingencyType()
    {
        return $this->container['contingency_type'];
    }

    /**
     * Sets contingency_type
     *
     * @param string $contingency_type contingency_type
     *
     * @return self
     */
    public function setContingencyType($contingency_type)
    {
        if (is_null($contingency_type)) {
            throw new \InvalidArgumentException('non-nullable contingency_type cannot be null');
        }
        $this->container['contingency_type'] = $contingency_type;

        return $this;
    }

    /**
     * Gets list_status_type
     *
     * @return string
     */
    public function getListStatusType()
    {
        return $this->container['list_status_type'];
    }

    /**
     * Sets list_status_type
     *
     * @param string $list_status_type list_status_type
     *
     * @return self
     */
    public function setListStatusType($list_status_type)
    {
        if (is_null($list_status_type)) {
            throw new \InvalidArgumentException('non-nullable list_status_type cannot be null');
        }
        $this->container['list_status_type'] = $list_status_type;

        return $this;
    }

    /**
     * Gets list_order_status
     *
     * @return string
     */
    public function getListOrderStatus()
    {
        return $this->container['list_order_status'];
    }

    /**
     * Sets list_order_status
     *
     * @param string $list_order_status list_order_status
     *
     * @return self
     */
    public function setListOrderStatus($list_order_status)
    {
        if (is_null($list_order_status)) {
            throw new \InvalidArgumentException('non-nullable list_order_status cannot be null');
        }
        $this->container['list_order_status'] = $list_order_status;

        return $this;
    }

    /**
     * Gets list_client_order_id
     *
     * @return string
     */
    public function getListClientOrderId()
    {
        return $this->container['list_client_order_id'];
    }

    /**
     * Sets list_client_order_id
     *
     * @param string $list_client_order_id list_client_order_id
     *
     * @return self
     */
    public function setListClientOrderId($list_client_order_id)
    {
        if (is_null($list_client_order_id)) {
            throw new \InvalidArgumentException('non-nullable list_client_order_id cannot be null');
        }
        $this->container['list_client_order_id'] = $list_client_order_id;

        return $this;
    }

    /**
     * Gets transaction_time
     *
     * @return int
     */
    public function getTransactionTime()
    {
        return $this->container['transaction_time'];
    }

    /**
     * Sets transaction_time
     *
     * @param int $transaction_time transaction_time
     *
     * @return self
     */
    public function setTransactionTime($transaction_time)
    {
        if (is_null($transaction_time)) {
            throw new \InvalidArgumentException('non-nullable transaction_time cannot be null');
        }
        $this->container['transaction_time'] = $transaction_time;

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
     * Gets margin_buy_borrow_amount
     *
     * @return string
     */
    public function getMarginBuyBorrowAmount()
    {
        return $this->container['margin_buy_borrow_amount'];
    }

    /**
     * Sets margin_buy_borrow_amount
     *
     * @param string $margin_buy_borrow_amount will not return if no margin trade happens
     *
     * @return self
     */
    public function setMarginBuyBorrowAmount($margin_buy_borrow_amount)
    {
        if (is_null($margin_buy_borrow_amount)) {
            throw new \InvalidArgumentException('non-nullable margin_buy_borrow_amount cannot be null');
        }
        $this->container['margin_buy_borrow_amount'] = $margin_buy_borrow_amount;

        return $this;
    }

    /**
     * Gets margin_buy_borrow_asset
     *
     * @return string
     */
    public function getMarginBuyBorrowAsset()
    {
        return $this->container['margin_buy_borrow_asset'];
    }

    /**
     * Sets margin_buy_borrow_asset
     *
     * @param string $margin_buy_borrow_asset will not return if no margin trade happens
     *
     * @return self
     */
    public function setMarginBuyBorrowAsset($margin_buy_borrow_asset)
    {
        if (is_null($margin_buy_borrow_asset)) {
            throw new \InvalidArgumentException('non-nullable margin_buy_borrow_asset cannot be null');
        }
        $this->container['margin_buy_borrow_asset'] = $margin_buy_borrow_asset;

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
     * Gets orders
     *
     * @return \OpenAPI\Client\Model\SapiV1MarginOrderOcoPost200ResponseOrdersInner[]
     */
    public function getOrders()
    {
        return $this->container['orders'];
    }

    /**
     * Sets orders
     *
     * @param \OpenAPI\Client\Model\SapiV1MarginOrderOcoPost200ResponseOrdersInner[] $orders orders
     *
     * @return self
     */
    public function setOrders($orders)
    {
        if (is_null($orders)) {
            throw new \InvalidArgumentException('non-nullable orders cannot be null');
        }
        $this->container['orders'] = $orders;

        return $this;
    }

    /**
     * Gets order_reports
     *
     * @return \OpenAPI\Client\Model\ApiV3OrderOcoPost200ResponseOrderReportsInner[]
     */
    public function getOrderReports()
    {
        return $this->container['order_reports'];
    }

    /**
     * Sets order_reports
     *
     * @param \OpenAPI\Client\Model\ApiV3OrderOcoPost200ResponseOrderReportsInner[] $order_reports order_reports
     *
     * @return self
     */
    public function setOrderReports($order_reports)
    {
        if (is_null($order_reports)) {
            throw new \InvalidArgumentException('non-nullable order_reports cannot be null');
        }
        $this->container['order_reports'] = $order_reports;

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


