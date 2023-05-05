<?php
/**
 * SapiV1CapitalWithdrawHistoryGet200ResponseInner
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
 * SapiV1CapitalWithdrawHistoryGet200ResponseInner Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class SapiV1CapitalWithdrawHistoryGet200ResponseInner implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = '_sapi_v1_capital_withdraw_history_get_200_response_inner';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'address' => 'string',
        'amount' => 'string',
        'apply_time' => 'string',
        'coin' => 'string',
        'id' => 'string',
        'withdraw_order_id' => 'string',
        'network' => 'string',
        'transfer_type' => 'int',
        'status' => 'int',
        'transaction_fee' => 'string',
        'confirm_no' => 'int',
        'info' => 'string',
        'tx_id' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'address' => null,
        'amount' => null,
        'apply_time' => null,
        'coin' => null,
        'id' => null,
        'withdraw_order_id' => null,
        'network' => null,
        'transfer_type' => 'int32',
        'status' => 'int32',
        'transaction_fee' => null,
        'confirm_no' => 'int32',
        'info' => null,
        'tx_id' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'address' => false,
		'amount' => false,
		'apply_time' => false,
		'coin' => false,
		'id' => false,
		'withdraw_order_id' => false,
		'network' => false,
		'transfer_type' => false,
		'status' => false,
		'transaction_fee' => false,
		'confirm_no' => false,
		'info' => false,
		'tx_id' => false
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
        'address' => 'address',
        'amount' => 'amount',
        'apply_time' => 'applyTime',
        'coin' => 'coin',
        'id' => 'id',
        'withdraw_order_id' => 'withdrawOrderId',
        'network' => 'network',
        'transfer_type' => 'transferType',
        'status' => 'status',
        'transaction_fee' => 'transactionFee',
        'confirm_no' => 'confirmNo',
        'info' => 'info',
        'tx_id' => 'txId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'address' => 'setAddress',
        'amount' => 'setAmount',
        'apply_time' => 'setApplyTime',
        'coin' => 'setCoin',
        'id' => 'setId',
        'withdraw_order_id' => 'setWithdrawOrderId',
        'network' => 'setNetwork',
        'transfer_type' => 'setTransferType',
        'status' => 'setStatus',
        'transaction_fee' => 'setTransactionFee',
        'confirm_no' => 'setConfirmNo',
        'info' => 'setInfo',
        'tx_id' => 'setTxId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'address' => 'getAddress',
        'amount' => 'getAmount',
        'apply_time' => 'getApplyTime',
        'coin' => 'getCoin',
        'id' => 'getId',
        'withdraw_order_id' => 'getWithdrawOrderId',
        'network' => 'getNetwork',
        'transfer_type' => 'getTransferType',
        'status' => 'getStatus',
        'transaction_fee' => 'getTransactionFee',
        'confirm_no' => 'getConfirmNo',
        'info' => 'getInfo',
        'tx_id' => 'getTxId'
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
        $this->setIfExists('address', $data ?? [], null);
        $this->setIfExists('amount', $data ?? [], null);
        $this->setIfExists('apply_time', $data ?? [], null);
        $this->setIfExists('coin', $data ?? [], null);
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('withdraw_order_id', $data ?? [], null);
        $this->setIfExists('network', $data ?? [], null);
        $this->setIfExists('transfer_type', $data ?? [], null);
        $this->setIfExists('status', $data ?? [], null);
        $this->setIfExists('transaction_fee', $data ?? [], null);
        $this->setIfExists('confirm_no', $data ?? [], null);
        $this->setIfExists('info', $data ?? [], null);
        $this->setIfExists('tx_id', $data ?? [], null);
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

        if ($this->container['address'] === null) {
            $invalidProperties[] = "'address' can't be null";
        }
        if ($this->container['amount'] === null) {
            $invalidProperties[] = "'amount' can't be null";
        }
        if ($this->container['apply_time'] === null) {
            $invalidProperties[] = "'apply_time' can't be null";
        }
        if ($this->container['coin'] === null) {
            $invalidProperties[] = "'coin' can't be null";
        }
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['withdraw_order_id'] === null) {
            $invalidProperties[] = "'withdraw_order_id' can't be null";
        }
        if ($this->container['network'] === null) {
            $invalidProperties[] = "'network' can't be null";
        }
        if ($this->container['transfer_type'] === null) {
            $invalidProperties[] = "'transfer_type' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        if ($this->container['transaction_fee'] === null) {
            $invalidProperties[] = "'transaction_fee' can't be null";
        }
        if ($this->container['tx_id'] === null) {
            $invalidProperties[] = "'tx_id' can't be null";
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
     * Gets address
     *
     * @return string
     */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
     * Sets address
     *
     * @param string $address address
     *
     * @return self
     */
    public function setAddress($address)
    {
        if (is_null($address)) {
            throw new \InvalidArgumentException('non-nullable address cannot be null');
        }
        $this->container['address'] = $address;

        return $this;
    }

    /**
     * Gets amount
     *
     * @return string
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param string $amount amount
     *
     * @return self
     */
    public function setAmount($amount)
    {
        if (is_null($amount)) {
            throw new \InvalidArgumentException('non-nullable amount cannot be null');
        }
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets apply_time
     *
     * @return string
     */
    public function getApplyTime()
    {
        return $this->container['apply_time'];
    }

    /**
     * Sets apply_time
     *
     * @param string $apply_time apply_time
     *
     * @return self
     */
    public function setApplyTime($apply_time)
    {
        if (is_null($apply_time)) {
            throw new \InvalidArgumentException('non-nullable apply_time cannot be null');
        }
        $this->container['apply_time'] = $apply_time;

        return $this;
    }

    /**
     * Gets coin
     *
     * @return string
     */
    public function getCoin()
    {
        return $this->container['coin'];
    }

    /**
     * Sets coin
     *
     * @param string $coin coin
     *
     * @return self
     */
    public function setCoin($coin)
    {
        if (is_null($coin)) {
            throw new \InvalidArgumentException('non-nullable coin cannot be null');
        }
        $this->container['coin'] = $coin;

        return $this;
    }

    /**
     * Gets id
     *
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id id
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
     * Gets withdraw_order_id
     *
     * @return string
     */
    public function getWithdrawOrderId()
    {
        return $this->container['withdraw_order_id'];
    }

    /**
     * Sets withdraw_order_id
     *
     * @param string $withdraw_order_id will not be returned if there's no withdrawOrderId for this withdraw.
     *
     * @return self
     */
    public function setWithdrawOrderId($withdraw_order_id)
    {
        if (is_null($withdraw_order_id)) {
            throw new \InvalidArgumentException('non-nullable withdraw_order_id cannot be null');
        }
        $this->container['withdraw_order_id'] = $withdraw_order_id;

        return $this;
    }

    /**
     * Gets network
     *
     * @return string
     */
    public function getNetwork()
    {
        return $this->container['network'];
    }

    /**
     * Sets network
     *
     * @param string $network network
     *
     * @return self
     */
    public function setNetwork($network)
    {
        if (is_null($network)) {
            throw new \InvalidArgumentException('non-nullable network cannot be null');
        }
        $this->container['network'] = $network;

        return $this;
    }

    /**
     * Gets transfer_type
     *
     * @return int
     */
    public function getTransferType()
    {
        return $this->container['transfer_type'];
    }

    /**
     * Sets transfer_type
     *
     * @param int $transfer_type 1 for internal transfer, 0 for external transfer
     *
     * @return self
     */
    public function setTransferType($transfer_type)
    {
        if (is_null($transfer_type)) {
            throw new \InvalidArgumentException('non-nullable transfer_type cannot be null');
        }
        $this->container['transfer_type'] = $transfer_type;

        return $this;
    }

    /**
     * Gets status
     *
     * @return int
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param int $status status
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
     * Gets transaction_fee
     *
     * @return string
     */
    public function getTransactionFee()
    {
        return $this->container['transaction_fee'];
    }

    /**
     * Sets transaction_fee
     *
     * @param string $transaction_fee transaction_fee
     *
     * @return self
     */
    public function setTransactionFee($transaction_fee)
    {
        if (is_null($transaction_fee)) {
            throw new \InvalidArgumentException('non-nullable transaction_fee cannot be null');
        }
        $this->container['transaction_fee'] = $transaction_fee;

        return $this;
    }

    /**
     * Gets confirm_no
     *
     * @return int|null
     */
    public function getConfirmNo()
    {
        return $this->container['confirm_no'];
    }

    /**
     * Sets confirm_no
     *
     * @param int|null $confirm_no confirm_no
     *
     * @return self
     */
    public function setConfirmNo($confirm_no)
    {
        if (is_null($confirm_no)) {
            throw new \InvalidArgumentException('non-nullable confirm_no cannot be null');
        }
        $this->container['confirm_no'] = $confirm_no;

        return $this;
    }

    /**
     * Gets info
     *
     * @return string|null
     */
    public function getInfo()
    {
        return $this->container['info'];
    }

    /**
     * Sets info
     *
     * @param string|null $info Reason for withdrawal failure
     *
     * @return self
     */
    public function setInfo($info)
    {
        if (is_null($info)) {
            throw new \InvalidArgumentException('non-nullable info cannot be null');
        }
        $this->container['info'] = $info;

        return $this;
    }

    /**
     * Gets tx_id
     *
     * @return string
     */
    public function getTxId()
    {
        return $this->container['tx_id'];
    }

    /**
     * Sets tx_id
     *
     * @param string $tx_id tx_id
     *
     * @return self
     */
    public function setTxId($tx_id)
    {
        if (is_null($tx_id)) {
            throw new \InvalidArgumentException('non-nullable tx_id cannot be null');
        }
        $this->container['tx_id'] = $tx_id;

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


