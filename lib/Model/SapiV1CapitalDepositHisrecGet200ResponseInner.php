<?php
/**
 * SapiV1CapitalDepositHisrecGet200ResponseInner
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
 * SapiV1CapitalDepositHisrecGet200ResponseInner Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class SapiV1CapitalDepositHisrecGet200ResponseInner implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = '_sapi_v1_capital_deposit_hisrec_get_200_response_inner';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'amount' => 'string',
        'coin' => 'string',
        'network' => 'string',
        'status' => 'int',
        'address' => 'string',
        'address_tag' => 'string',
        'tx_id' => 'string',
        'insert_time' => 'int',
        'transfer_type' => 'int',
        'unlock_confirm' => 'string',
        'confirm_times' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'amount' => null,
        'coin' => null,
        'network' => null,
        'status' => 'int32',
        'address' => null,
        'address_tag' => null,
        'tx_id' => null,
        'insert_time' => 'int64',
        'transfer_type' => 'int32',
        'unlock_confirm' => null,
        'confirm_times' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'amount' => false,
		'coin' => false,
		'network' => false,
		'status' => false,
		'address' => false,
		'address_tag' => false,
		'tx_id' => false,
		'insert_time' => false,
		'transfer_type' => false,
		'unlock_confirm' => false,
		'confirm_times' => false
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
        'amount' => 'amount',
        'coin' => 'coin',
        'network' => 'network',
        'status' => 'status',
        'address' => 'address',
        'address_tag' => 'addressTag',
        'tx_id' => 'txId',
        'insert_time' => 'insertTime',
        'transfer_type' => 'transferType',
        'unlock_confirm' => 'unlockConfirm',
        'confirm_times' => 'confirmTimes'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'amount' => 'setAmount',
        'coin' => 'setCoin',
        'network' => 'setNetwork',
        'status' => 'setStatus',
        'address' => 'setAddress',
        'address_tag' => 'setAddressTag',
        'tx_id' => 'setTxId',
        'insert_time' => 'setInsertTime',
        'transfer_type' => 'setTransferType',
        'unlock_confirm' => 'setUnlockConfirm',
        'confirm_times' => 'setConfirmTimes'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'amount' => 'getAmount',
        'coin' => 'getCoin',
        'network' => 'getNetwork',
        'status' => 'getStatus',
        'address' => 'getAddress',
        'address_tag' => 'getAddressTag',
        'tx_id' => 'getTxId',
        'insert_time' => 'getInsertTime',
        'transfer_type' => 'getTransferType',
        'unlock_confirm' => 'getUnlockConfirm',
        'confirm_times' => 'getConfirmTimes'
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
        $this->setIfExists('amount', $data ?? [], null);
        $this->setIfExists('coin', $data ?? [], null);
        $this->setIfExists('network', $data ?? [], null);
        $this->setIfExists('status', $data ?? [], null);
        $this->setIfExists('address', $data ?? [], null);
        $this->setIfExists('address_tag', $data ?? [], null);
        $this->setIfExists('tx_id', $data ?? [], null);
        $this->setIfExists('insert_time', $data ?? [], null);
        $this->setIfExists('transfer_type', $data ?? [], null);
        $this->setIfExists('unlock_confirm', $data ?? [], null);
        $this->setIfExists('confirm_times', $data ?? [], null);
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

        if ($this->container['amount'] === null) {
            $invalidProperties[] = "'amount' can't be null";
        }
        if ($this->container['coin'] === null) {
            $invalidProperties[] = "'coin' can't be null";
        }
        if ($this->container['network'] === null) {
            $invalidProperties[] = "'network' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        if ($this->container['address'] === null) {
            $invalidProperties[] = "'address' can't be null";
        }
        if ($this->container['address_tag'] === null) {
            $invalidProperties[] = "'address_tag' can't be null";
        }
        if ($this->container['tx_id'] === null) {
            $invalidProperties[] = "'tx_id' can't be null";
        }
        if ($this->container['insert_time'] === null) {
            $invalidProperties[] = "'insert_time' can't be null";
        }
        if ($this->container['transfer_type'] === null) {
            $invalidProperties[] = "'transfer_type' can't be null";
        }
        if ($this->container['unlock_confirm'] === null) {
            $invalidProperties[] = "'unlock_confirm' can't be null";
        }
        if ($this->container['confirm_times'] === null) {
            $invalidProperties[] = "'confirm_times' can't be null";
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
     * Gets address_tag
     *
     * @return string
     */
    public function getAddressTag()
    {
        return $this->container['address_tag'];
    }

    /**
     * Sets address_tag
     *
     * @param string $address_tag address_tag
     *
     * @return self
     */
    public function setAddressTag($address_tag)
    {
        if (is_null($address_tag)) {
            throw new \InvalidArgumentException('non-nullable address_tag cannot be null');
        }
        $this->container['address_tag'] = $address_tag;

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
     * Gets insert_time
     *
     * @return int
     */
    public function getInsertTime()
    {
        return $this->container['insert_time'];
    }

    /**
     * Sets insert_time
     *
     * @param int $insert_time insert_time
     *
     * @return self
     */
    public function setInsertTime($insert_time)
    {
        if (is_null($insert_time)) {
            throw new \InvalidArgumentException('non-nullable insert_time cannot be null');
        }
        $this->container['insert_time'] = $insert_time;

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
     * @param int $transfer_type transfer_type
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
     * Gets unlock_confirm
     *
     * @return string
     */
    public function getUnlockConfirm()
    {
        return $this->container['unlock_confirm'];
    }

    /**
     * Sets unlock_confirm
     *
     * @param string $unlock_confirm confirm times for unlocking
     *
     * @return self
     */
    public function setUnlockConfirm($unlock_confirm)
    {
        if (is_null($unlock_confirm)) {
            throw new \InvalidArgumentException('non-nullable unlock_confirm cannot be null');
        }
        $this->container['unlock_confirm'] = $unlock_confirm;

        return $this;
    }

    /**
     * Gets confirm_times
     *
     * @return string
     */
    public function getConfirmTimes()
    {
        return $this->container['confirm_times'];
    }

    /**
     * Sets confirm_times
     *
     * @param string $confirm_times confirm_times
     *
     * @return self
     */
    public function setConfirmTimes($confirm_times)
    {
        if (is_null($confirm_times)) {
            throw new \InvalidArgumentException('non-nullable confirm_times cannot be null');
        }
        $this->container['confirm_times'] = $confirm_times;

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


