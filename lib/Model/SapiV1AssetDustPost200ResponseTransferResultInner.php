<?php
/**
 * SapiV1AssetDustPost200ResponseTransferResultInner
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
 * SapiV1AssetDustPost200ResponseTransferResultInner Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class SapiV1AssetDustPost200ResponseTransferResultInner implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = '_sapi_v1_asset_dust_post_200_response_transferResult_inner';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'amount' => 'string',
        'from_asset' => 'string',
        'operate_time' => 'int',
        'service_charge_amount' => 'string',
        'tran_id' => 'int',
        'transfered_amount' => 'string'
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
        'from_asset' => null,
        'operate_time' => 'int64',
        'service_charge_amount' => null,
        'tran_id' => 'int64',
        'transfered_amount' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'amount' => false,
		'from_asset' => false,
		'operate_time' => false,
		'service_charge_amount' => false,
		'tran_id' => false,
		'transfered_amount' => false
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
        'from_asset' => 'fromAsset',
        'operate_time' => 'operateTime',
        'service_charge_amount' => 'serviceChargeAmount',
        'tran_id' => 'tranId',
        'transfered_amount' => 'transferedAmount'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'amount' => 'setAmount',
        'from_asset' => 'setFromAsset',
        'operate_time' => 'setOperateTime',
        'service_charge_amount' => 'setServiceChargeAmount',
        'tran_id' => 'setTranId',
        'transfered_amount' => 'setTransferedAmount'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'amount' => 'getAmount',
        'from_asset' => 'getFromAsset',
        'operate_time' => 'getOperateTime',
        'service_charge_amount' => 'getServiceChargeAmount',
        'tran_id' => 'getTranId',
        'transfered_amount' => 'getTransferedAmount'
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
        $this->setIfExists('from_asset', $data ?? [], null);
        $this->setIfExists('operate_time', $data ?? [], null);
        $this->setIfExists('service_charge_amount', $data ?? [], null);
        $this->setIfExists('tran_id', $data ?? [], null);
        $this->setIfExists('transfered_amount', $data ?? [], null);
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
        if ($this->container['from_asset'] === null) {
            $invalidProperties[] = "'from_asset' can't be null";
        }
        if ($this->container['operate_time'] === null) {
            $invalidProperties[] = "'operate_time' can't be null";
        }
        if ($this->container['service_charge_amount'] === null) {
            $invalidProperties[] = "'service_charge_amount' can't be null";
        }
        if ($this->container['tran_id'] === null) {
            $invalidProperties[] = "'tran_id' can't be null";
        }
        if ($this->container['transfered_amount'] === null) {
            $invalidProperties[] = "'transfered_amount' can't be null";
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
     * Gets from_asset
     *
     * @return string
     */
    public function getFromAsset()
    {
        return $this->container['from_asset'];
    }

    /**
     * Sets from_asset
     *
     * @param string $from_asset from_asset
     *
     * @return self
     */
    public function setFromAsset($from_asset)
    {
        if (is_null($from_asset)) {
            throw new \InvalidArgumentException('non-nullable from_asset cannot be null');
        }
        $this->container['from_asset'] = $from_asset;

        return $this;
    }

    /**
     * Gets operate_time
     *
     * @return int
     */
    public function getOperateTime()
    {
        return $this->container['operate_time'];
    }

    /**
     * Sets operate_time
     *
     * @param int $operate_time operate_time
     *
     * @return self
     */
    public function setOperateTime($operate_time)
    {
        if (is_null($operate_time)) {
            throw new \InvalidArgumentException('non-nullable operate_time cannot be null');
        }
        $this->container['operate_time'] = $operate_time;

        return $this;
    }

    /**
     * Gets service_charge_amount
     *
     * @return string
     */
    public function getServiceChargeAmount()
    {
        return $this->container['service_charge_amount'];
    }

    /**
     * Sets service_charge_amount
     *
     * @param string $service_charge_amount service_charge_amount
     *
     * @return self
     */
    public function setServiceChargeAmount($service_charge_amount)
    {
        if (is_null($service_charge_amount)) {
            throw new \InvalidArgumentException('non-nullable service_charge_amount cannot be null');
        }
        $this->container['service_charge_amount'] = $service_charge_amount;

        return $this;
    }

    /**
     * Gets tran_id
     *
     * @return int
     */
    public function getTranId()
    {
        return $this->container['tran_id'];
    }

    /**
     * Sets tran_id
     *
     * @param int $tran_id tran_id
     *
     * @return self
     */
    public function setTranId($tran_id)
    {
        if (is_null($tran_id)) {
            throw new \InvalidArgumentException('non-nullable tran_id cannot be null');
        }
        $this->container['tran_id'] = $tran_id;

        return $this;
    }

    /**
     * Gets transfered_amount
     *
     * @return string
     */
    public function getTransferedAmount()
    {
        return $this->container['transfered_amount'];
    }

    /**
     * Sets transfered_amount
     *
     * @param string $transfered_amount transfered_amount
     *
     * @return self
     */
    public function setTransferedAmount($transfered_amount)
    {
        if (is_null($transfered_amount)) {
            throw new \InvalidArgumentException('non-nullable transfered_amount cannot be null');
        }
        $this->container['transfered_amount'] = $transfered_amount;

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

