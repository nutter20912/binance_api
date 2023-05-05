<?php
/**
 * SapiV1MiningStatisticsUserStatusGet200ResponseData
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
 * SapiV1MiningStatisticsUserStatusGet200ResponseData Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class SapiV1MiningStatisticsUserStatusGet200ResponseData implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = '_sapi_v1_mining_statistics_user_status_get_200_response_data';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'fifteen_min_hash_rate' => 'string',
        'day_hash_rate' => 'string',
        'valid_num' => 'int',
        'invalid_num' => 'int',
        'profit_today' => '\OpenAPI\Client\Model\SapiV1MiningStatisticsUserStatusGet200ResponseDataProfitToday',
        'profit_yesterday' => '\OpenAPI\Client\Model\SapiV1MiningStatisticsUserStatusGet200ResponseDataProfitToday',
        'user_name' => 'string',
        'unit' => 'string',
        'algo' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'fifteen_min_hash_rate' => null,
        'day_hash_rate' => null,
        'valid_num' => 'int64',
        'invalid_num' => 'int64',
        'profit_today' => null,
        'profit_yesterday' => null,
        'user_name' => null,
        'unit' => null,
        'algo' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'fifteen_min_hash_rate' => false,
		'day_hash_rate' => false,
		'valid_num' => false,
		'invalid_num' => false,
		'profit_today' => false,
		'profit_yesterday' => false,
		'user_name' => false,
		'unit' => false,
		'algo' => false
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
        'fifteen_min_hash_rate' => 'fifteenMinHashRate',
        'day_hash_rate' => 'dayHashRate',
        'valid_num' => 'validNum',
        'invalid_num' => 'invalidNum',
        'profit_today' => 'profitToday',
        'profit_yesterday' => 'profitYesterday',
        'user_name' => 'userName',
        'unit' => 'unit',
        'algo' => 'algo'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'fifteen_min_hash_rate' => 'setFifteenMinHashRate',
        'day_hash_rate' => 'setDayHashRate',
        'valid_num' => 'setValidNum',
        'invalid_num' => 'setInvalidNum',
        'profit_today' => 'setProfitToday',
        'profit_yesterday' => 'setProfitYesterday',
        'user_name' => 'setUserName',
        'unit' => 'setUnit',
        'algo' => 'setAlgo'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'fifteen_min_hash_rate' => 'getFifteenMinHashRate',
        'day_hash_rate' => 'getDayHashRate',
        'valid_num' => 'getValidNum',
        'invalid_num' => 'getInvalidNum',
        'profit_today' => 'getProfitToday',
        'profit_yesterday' => 'getProfitYesterday',
        'user_name' => 'getUserName',
        'unit' => 'getUnit',
        'algo' => 'getAlgo'
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
        $this->setIfExists('fifteen_min_hash_rate', $data ?? [], null);
        $this->setIfExists('day_hash_rate', $data ?? [], null);
        $this->setIfExists('valid_num', $data ?? [], null);
        $this->setIfExists('invalid_num', $data ?? [], null);
        $this->setIfExists('profit_today', $data ?? [], null);
        $this->setIfExists('profit_yesterday', $data ?? [], null);
        $this->setIfExists('user_name', $data ?? [], null);
        $this->setIfExists('unit', $data ?? [], null);
        $this->setIfExists('algo', $data ?? [], null);
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

        if ($this->container['fifteen_min_hash_rate'] === null) {
            $invalidProperties[] = "'fifteen_min_hash_rate' can't be null";
        }
        if ($this->container['day_hash_rate'] === null) {
            $invalidProperties[] = "'day_hash_rate' can't be null";
        }
        if ($this->container['valid_num'] === null) {
            $invalidProperties[] = "'valid_num' can't be null";
        }
        if ($this->container['invalid_num'] === null) {
            $invalidProperties[] = "'invalid_num' can't be null";
        }
        if ($this->container['profit_today'] === null) {
            $invalidProperties[] = "'profit_today' can't be null";
        }
        if ($this->container['profit_yesterday'] === null) {
            $invalidProperties[] = "'profit_yesterday' can't be null";
        }
        if ($this->container['user_name'] === null) {
            $invalidProperties[] = "'user_name' can't be null";
        }
        if ($this->container['unit'] === null) {
            $invalidProperties[] = "'unit' can't be null";
        }
        if ($this->container['algo'] === null) {
            $invalidProperties[] = "'algo' can't be null";
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
     * Gets fifteen_min_hash_rate
     *
     * @return string
     */
    public function getFifteenMinHashRate()
    {
        return $this->container['fifteen_min_hash_rate'];
    }

    /**
     * Sets fifteen_min_hash_rate
     *
     * @param string $fifteen_min_hash_rate fifteen_min_hash_rate
     *
     * @return self
     */
    public function setFifteenMinHashRate($fifteen_min_hash_rate)
    {
        if (is_null($fifteen_min_hash_rate)) {
            throw new \InvalidArgumentException('non-nullable fifteen_min_hash_rate cannot be null');
        }
        $this->container['fifteen_min_hash_rate'] = $fifteen_min_hash_rate;

        return $this;
    }

    /**
     * Gets day_hash_rate
     *
     * @return string
     */
    public function getDayHashRate()
    {
        return $this->container['day_hash_rate'];
    }

    /**
     * Sets day_hash_rate
     *
     * @param string $day_hash_rate day_hash_rate
     *
     * @return self
     */
    public function setDayHashRate($day_hash_rate)
    {
        if (is_null($day_hash_rate)) {
            throw new \InvalidArgumentException('non-nullable day_hash_rate cannot be null');
        }
        $this->container['day_hash_rate'] = $day_hash_rate;

        return $this;
    }

    /**
     * Gets valid_num
     *
     * @return int
     */
    public function getValidNum()
    {
        return $this->container['valid_num'];
    }

    /**
     * Sets valid_num
     *
     * @param int $valid_num valid_num
     *
     * @return self
     */
    public function setValidNum($valid_num)
    {
        if (is_null($valid_num)) {
            throw new \InvalidArgumentException('non-nullable valid_num cannot be null');
        }
        $this->container['valid_num'] = $valid_num;

        return $this;
    }

    /**
     * Gets invalid_num
     *
     * @return int
     */
    public function getInvalidNum()
    {
        return $this->container['invalid_num'];
    }

    /**
     * Sets invalid_num
     *
     * @param int $invalid_num invalid_num
     *
     * @return self
     */
    public function setInvalidNum($invalid_num)
    {
        if (is_null($invalid_num)) {
            throw new \InvalidArgumentException('non-nullable invalid_num cannot be null');
        }
        $this->container['invalid_num'] = $invalid_num;

        return $this;
    }

    /**
     * Gets profit_today
     *
     * @return \OpenAPI\Client\Model\SapiV1MiningStatisticsUserStatusGet200ResponseDataProfitToday
     */
    public function getProfitToday()
    {
        return $this->container['profit_today'];
    }

    /**
     * Sets profit_today
     *
     * @param \OpenAPI\Client\Model\SapiV1MiningStatisticsUserStatusGet200ResponseDataProfitToday $profit_today profit_today
     *
     * @return self
     */
    public function setProfitToday($profit_today)
    {
        if (is_null($profit_today)) {
            throw new \InvalidArgumentException('non-nullable profit_today cannot be null');
        }
        $this->container['profit_today'] = $profit_today;

        return $this;
    }

    /**
     * Gets profit_yesterday
     *
     * @return \OpenAPI\Client\Model\SapiV1MiningStatisticsUserStatusGet200ResponseDataProfitToday
     */
    public function getProfitYesterday()
    {
        return $this->container['profit_yesterday'];
    }

    /**
     * Sets profit_yesterday
     *
     * @param \OpenAPI\Client\Model\SapiV1MiningStatisticsUserStatusGet200ResponseDataProfitToday $profit_yesterday profit_yesterday
     *
     * @return self
     */
    public function setProfitYesterday($profit_yesterday)
    {
        if (is_null($profit_yesterday)) {
            throw new \InvalidArgumentException('non-nullable profit_yesterday cannot be null');
        }
        $this->container['profit_yesterday'] = $profit_yesterday;

        return $this;
    }

    /**
     * Gets user_name
     *
     * @return string
     */
    public function getUserName()
    {
        return $this->container['user_name'];
    }

    /**
     * Sets user_name
     *
     * @param string $user_name user_name
     *
     * @return self
     */
    public function setUserName($user_name)
    {
        if (is_null($user_name)) {
            throw new \InvalidArgumentException('non-nullable user_name cannot be null');
        }
        $this->container['user_name'] = $user_name;

        return $this;
    }

    /**
     * Gets unit
     *
     * @return string
     */
    public function getUnit()
    {
        return $this->container['unit'];
    }

    /**
     * Sets unit
     *
     * @param string $unit unit
     *
     * @return self
     */
    public function setUnit($unit)
    {
        if (is_null($unit)) {
            throw new \InvalidArgumentException('non-nullable unit cannot be null');
        }
        $this->container['unit'] = $unit;

        return $this;
    }

    /**
     * Gets algo
     *
     * @return string
     */
    public function getAlgo()
    {
        return $this->container['algo'];
    }

    /**
     * Sets algo
     *
     * @param string $algo algo
     *
     * @return self
     */
    public function setAlgo($algo)
    {
        if (is_null($algo)) {
            throw new \InvalidArgumentException('non-nullable algo cannot be null');
        }
        $this->container['algo'] = $algo;

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


