<?php
/**
 * SapiV1MiningHashTransferConfigDetailsListGet200ResponseDataConfigDetailsInner
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
 * SapiV1MiningHashTransferConfigDetailsListGet200ResponseDataConfigDetailsInner Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class SapiV1MiningHashTransferConfigDetailsListGet200ResponseDataConfigDetailsInner implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = '_sapi_v1_mining_hash_transfer_config_details_list_get_200_response_data_configDetails_inner';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'config_id' => 'int',
        'pool_username' => 'string',
        'to_pool_username' => 'string',
        'algo_name' => 'string',
        'hash_rate' => 'int',
        'start_day' => 'int',
        'end_day' => 'int',
        'status' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'config_id' => 'int64',
        'pool_username' => null,
        'to_pool_username' => null,
        'algo_name' => null,
        'hash_rate' => 'int64',
        'start_day' => 'int64',
        'end_day' => 'int64',
        'status' => 'int32'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'config_id' => false,
		'pool_username' => false,
		'to_pool_username' => false,
		'algo_name' => false,
		'hash_rate' => false,
		'start_day' => false,
		'end_day' => false,
		'status' => false
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
        'config_id' => 'configId',
        'pool_username' => 'poolUsername',
        'to_pool_username' => 'toPoolUsername',
        'algo_name' => 'algoName',
        'hash_rate' => 'hashRate',
        'start_day' => 'startDay',
        'end_day' => 'endDay',
        'status' => 'status'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'config_id' => 'setConfigId',
        'pool_username' => 'setPoolUsername',
        'to_pool_username' => 'setToPoolUsername',
        'algo_name' => 'setAlgoName',
        'hash_rate' => 'setHashRate',
        'start_day' => 'setStartDay',
        'end_day' => 'setEndDay',
        'status' => 'setStatus'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'config_id' => 'getConfigId',
        'pool_username' => 'getPoolUsername',
        'to_pool_username' => 'getToPoolUsername',
        'algo_name' => 'getAlgoName',
        'hash_rate' => 'getHashRate',
        'start_day' => 'getStartDay',
        'end_day' => 'getEndDay',
        'status' => 'getStatus'
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
        $this->setIfExists('config_id', $data ?? [], null);
        $this->setIfExists('pool_username', $data ?? [], null);
        $this->setIfExists('to_pool_username', $data ?? [], null);
        $this->setIfExists('algo_name', $data ?? [], null);
        $this->setIfExists('hash_rate', $data ?? [], null);
        $this->setIfExists('start_day', $data ?? [], null);
        $this->setIfExists('end_day', $data ?? [], null);
        $this->setIfExists('status', $data ?? [], null);
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

        if ($this->container['config_id'] === null) {
            $invalidProperties[] = "'config_id' can't be null";
        }
        if ($this->container['pool_username'] === null) {
            $invalidProperties[] = "'pool_username' can't be null";
        }
        if ($this->container['to_pool_username'] === null) {
            $invalidProperties[] = "'to_pool_username' can't be null";
        }
        if ($this->container['algo_name'] === null) {
            $invalidProperties[] = "'algo_name' can't be null";
        }
        if ($this->container['hash_rate'] === null) {
            $invalidProperties[] = "'hash_rate' can't be null";
        }
        if ($this->container['start_day'] === null) {
            $invalidProperties[] = "'start_day' can't be null";
        }
        if ($this->container['end_day'] === null) {
            $invalidProperties[] = "'end_day' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
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
     * Gets config_id
     *
     * @return int
     */
    public function getConfigId()
    {
        return $this->container['config_id'];
    }

    /**
     * Sets config_id
     *
     * @param int $config_id Mining ID
     *
     * @return self
     */
    public function setConfigId($config_id)
    {
        if (is_null($config_id)) {
            throw new \InvalidArgumentException('non-nullable config_id cannot be null');
        }
        $this->container['config_id'] = $config_id;

        return $this;
    }

    /**
     * Gets pool_username
     *
     * @return string
     */
    public function getPoolUsername()
    {
        return $this->container['pool_username'];
    }

    /**
     * Sets pool_username
     *
     * @param string $pool_username Transfer out of subaccount
     *
     * @return self
     */
    public function setPoolUsername($pool_username)
    {
        if (is_null($pool_username)) {
            throw new \InvalidArgumentException('non-nullable pool_username cannot be null');
        }
        $this->container['pool_username'] = $pool_username;

        return $this;
    }

    /**
     * Gets to_pool_username
     *
     * @return string
     */
    public function getToPoolUsername()
    {
        return $this->container['to_pool_username'];
    }

    /**
     * Sets to_pool_username
     *
     * @param string $to_pool_username Transfer into subaccount
     *
     * @return self
     */
    public function setToPoolUsername($to_pool_username)
    {
        if (is_null($to_pool_username)) {
            throw new \InvalidArgumentException('non-nullable to_pool_username cannot be null');
        }
        $this->container['to_pool_username'] = $to_pool_username;

        return $this;
    }

    /**
     * Gets algo_name
     *
     * @return string
     */
    public function getAlgoName()
    {
        return $this->container['algo_name'];
    }

    /**
     * Sets algo_name
     *
     * @param string $algo_name Transfer algorithm
     *
     * @return self
     */
    public function setAlgoName($algo_name)
    {
        if (is_null($algo_name)) {
            throw new \InvalidArgumentException('non-nullable algo_name cannot be null');
        }
        $this->container['algo_name'] = $algo_name;

        return $this;
    }

    /**
     * Gets hash_rate
     *
     * @return int
     */
    public function getHashRate()
    {
        return $this->container['hash_rate'];
    }

    /**
     * Sets hash_rate
     *
     * @param int $hash_rate Transferred Hashrate quantity
     *
     * @return self
     */
    public function setHashRate($hash_rate)
    {
        if (is_null($hash_rate)) {
            throw new \InvalidArgumentException('non-nullable hash_rate cannot be null');
        }
        $this->container['hash_rate'] = $hash_rate;

        return $this;
    }

    /**
     * Gets start_day
     *
     * @return int
     */
    public function getStartDay()
    {
        return $this->container['start_day'];
    }

    /**
     * Sets start_day
     *
     * @param int $start_day Start date
     *
     * @return self
     */
    public function setStartDay($start_day)
    {
        if (is_null($start_day)) {
            throw new \InvalidArgumentException('non-nullable start_day cannot be null');
        }
        $this->container['start_day'] = $start_day;

        return $this;
    }

    /**
     * Gets end_day
     *
     * @return int
     */
    public function getEndDay()
    {
        return $this->container['end_day'];
    }

    /**
     * Sets end_day
     *
     * @param int $end_day End date
     *
     * @return self
     */
    public function setEndDay($end_day)
    {
        if (is_null($end_day)) {
            throw new \InvalidArgumentException('non-nullable end_day cannot be null');
        }
        $this->container['end_day'] = $end_day;

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
     * @param int $status 0 Processing, 1：Cancelled, 2：Terminated
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

