<?php
/**
 * SapiV1LendingProjectPositionListGet200ResponseInner
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
 * SapiV1LendingProjectPositionListGet200ResponseInner Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class SapiV1LendingProjectPositionListGet200ResponseInner implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = '_sapi_v1_lending_project_position_list_get_200_response_inner';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'asset' => 'string',
        'can_transfer' => 'bool',
        'create_timestamp' => 'int',
        'duration' => 'int',
        'end_time' => 'int',
        'interest' => 'string',
        'interest_rate' => 'string',
        'lot' => 'int',
        'position_id' => 'int',
        'principal' => 'string',
        'project_id' => 'string',
        'project_name' => 'string',
        'purchase_time' => 'int',
        'redeem_date' => '\DateTime',
        'start_time' => 'int',
        'status' => 'string',
        'type' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'asset' => null,
        'can_transfer' => null,
        'create_timestamp' => 'int64',
        'duration' => 'int64',
        'end_time' => 'int64',
        'interest' => null,
        'interest_rate' => null,
        'lot' => 'int64',
        'position_id' => 'int64',
        'principal' => null,
        'project_id' => null,
        'project_name' => null,
        'purchase_time' => 'int64',
        'redeem_date' => 'date',
        'start_time' => 'int64',
        'status' => null,
        'type' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'asset' => false,
		'can_transfer' => false,
		'create_timestamp' => false,
		'duration' => false,
		'end_time' => false,
		'interest' => false,
		'interest_rate' => false,
		'lot' => false,
		'position_id' => false,
		'principal' => false,
		'project_id' => false,
		'project_name' => false,
		'purchase_time' => false,
		'redeem_date' => false,
		'start_time' => false,
		'status' => false,
		'type' => false
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
        'asset' => 'asset',
        'can_transfer' => 'canTransfer',
        'create_timestamp' => 'createTimestamp',
        'duration' => 'duration',
        'end_time' => 'endTime',
        'interest' => 'interest',
        'interest_rate' => 'interestRate',
        'lot' => 'lot',
        'position_id' => 'positionId',
        'principal' => 'principal',
        'project_id' => 'projectId',
        'project_name' => 'projectName',
        'purchase_time' => 'purchaseTime',
        'redeem_date' => 'redeemDate',
        'start_time' => 'startTime',
        'status' => 'status',
        'type' => 'type'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'asset' => 'setAsset',
        'can_transfer' => 'setCanTransfer',
        'create_timestamp' => 'setCreateTimestamp',
        'duration' => 'setDuration',
        'end_time' => 'setEndTime',
        'interest' => 'setInterest',
        'interest_rate' => 'setInterestRate',
        'lot' => 'setLot',
        'position_id' => 'setPositionId',
        'principal' => 'setPrincipal',
        'project_id' => 'setProjectId',
        'project_name' => 'setProjectName',
        'purchase_time' => 'setPurchaseTime',
        'redeem_date' => 'setRedeemDate',
        'start_time' => 'setStartTime',
        'status' => 'setStatus',
        'type' => 'setType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'asset' => 'getAsset',
        'can_transfer' => 'getCanTransfer',
        'create_timestamp' => 'getCreateTimestamp',
        'duration' => 'getDuration',
        'end_time' => 'getEndTime',
        'interest' => 'getInterest',
        'interest_rate' => 'getInterestRate',
        'lot' => 'getLot',
        'position_id' => 'getPositionId',
        'principal' => 'getPrincipal',
        'project_id' => 'getProjectId',
        'project_name' => 'getProjectName',
        'purchase_time' => 'getPurchaseTime',
        'redeem_date' => 'getRedeemDate',
        'start_time' => 'getStartTime',
        'status' => 'getStatus',
        'type' => 'getType'
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
        $this->setIfExists('asset', $data ?? [], null);
        $this->setIfExists('can_transfer', $data ?? [], null);
        $this->setIfExists('create_timestamp', $data ?? [], null);
        $this->setIfExists('duration', $data ?? [], null);
        $this->setIfExists('end_time', $data ?? [], null);
        $this->setIfExists('interest', $data ?? [], null);
        $this->setIfExists('interest_rate', $data ?? [], null);
        $this->setIfExists('lot', $data ?? [], null);
        $this->setIfExists('position_id', $data ?? [], null);
        $this->setIfExists('principal', $data ?? [], null);
        $this->setIfExists('project_id', $data ?? [], null);
        $this->setIfExists('project_name', $data ?? [], null);
        $this->setIfExists('purchase_time', $data ?? [], null);
        $this->setIfExists('redeem_date', $data ?? [], null);
        $this->setIfExists('start_time', $data ?? [], null);
        $this->setIfExists('status', $data ?? [], null);
        $this->setIfExists('type', $data ?? [], null);
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

        if ($this->container['asset'] === null) {
            $invalidProperties[] = "'asset' can't be null";
        }
        if ($this->container['can_transfer'] === null) {
            $invalidProperties[] = "'can_transfer' can't be null";
        }
        if ($this->container['create_timestamp'] === null) {
            $invalidProperties[] = "'create_timestamp' can't be null";
        }
        if ($this->container['duration'] === null) {
            $invalidProperties[] = "'duration' can't be null";
        }
        if ($this->container['end_time'] === null) {
            $invalidProperties[] = "'end_time' can't be null";
        }
        if ($this->container['interest'] === null) {
            $invalidProperties[] = "'interest' can't be null";
        }
        if ($this->container['interest_rate'] === null) {
            $invalidProperties[] = "'interest_rate' can't be null";
        }
        if ($this->container['lot'] === null) {
            $invalidProperties[] = "'lot' can't be null";
        }
        if ($this->container['position_id'] === null) {
            $invalidProperties[] = "'position_id' can't be null";
        }
        if ($this->container['principal'] === null) {
            $invalidProperties[] = "'principal' can't be null";
        }
        if ($this->container['project_id'] === null) {
            $invalidProperties[] = "'project_id' can't be null";
        }
        if ($this->container['project_name'] === null) {
            $invalidProperties[] = "'project_name' can't be null";
        }
        if ($this->container['purchase_time'] === null) {
            $invalidProperties[] = "'purchase_time' can't be null";
        }
        if ($this->container['redeem_date'] === null) {
            $invalidProperties[] = "'redeem_date' can't be null";
        }
        if ($this->container['start_time'] === null) {
            $invalidProperties[] = "'start_time' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
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
     * Gets asset
     *
     * @return string
     */
    public function getAsset()
    {
        return $this->container['asset'];
    }

    /**
     * Sets asset
     *
     * @param string $asset asset
     *
     * @return self
     */
    public function setAsset($asset)
    {
        if (is_null($asset)) {
            throw new \InvalidArgumentException('non-nullable asset cannot be null');
        }
        $this->container['asset'] = $asset;

        return $this;
    }

    /**
     * Gets can_transfer
     *
     * @return bool
     */
    public function getCanTransfer()
    {
        return $this->container['can_transfer'];
    }

    /**
     * Sets can_transfer
     *
     * @param bool $can_transfer can_transfer
     *
     * @return self
     */
    public function setCanTransfer($can_transfer)
    {
        if (is_null($can_transfer)) {
            throw new \InvalidArgumentException('non-nullable can_transfer cannot be null');
        }
        $this->container['can_transfer'] = $can_transfer;

        return $this;
    }

    /**
     * Gets create_timestamp
     *
     * @return int
     */
    public function getCreateTimestamp()
    {
        return $this->container['create_timestamp'];
    }

    /**
     * Sets create_timestamp
     *
     * @param int $create_timestamp create_timestamp
     *
     * @return self
     */
    public function setCreateTimestamp($create_timestamp)
    {
        if (is_null($create_timestamp)) {
            throw new \InvalidArgumentException('non-nullable create_timestamp cannot be null');
        }
        $this->container['create_timestamp'] = $create_timestamp;

        return $this;
    }

    /**
     * Gets duration
     *
     * @return int
     */
    public function getDuration()
    {
        return $this->container['duration'];
    }

    /**
     * Sets duration
     *
     * @param int $duration duration
     *
     * @return self
     */
    public function setDuration($duration)
    {
        if (is_null($duration)) {
            throw new \InvalidArgumentException('non-nullable duration cannot be null');
        }
        $this->container['duration'] = $duration;

        return $this;
    }

    /**
     * Gets end_time
     *
     * @return int
     */
    public function getEndTime()
    {
        return $this->container['end_time'];
    }

    /**
     * Sets end_time
     *
     * @param int $end_time end_time
     *
     * @return self
     */
    public function setEndTime($end_time)
    {
        if (is_null($end_time)) {
            throw new \InvalidArgumentException('non-nullable end_time cannot be null');
        }
        $this->container['end_time'] = $end_time;

        return $this;
    }

    /**
     * Gets interest
     *
     * @return string
     */
    public function getInterest()
    {
        return $this->container['interest'];
    }

    /**
     * Sets interest
     *
     * @param string $interest interest
     *
     * @return self
     */
    public function setInterest($interest)
    {
        if (is_null($interest)) {
            throw new \InvalidArgumentException('non-nullable interest cannot be null');
        }
        $this->container['interest'] = $interest;

        return $this;
    }

    /**
     * Gets interest_rate
     *
     * @return string
     */
    public function getInterestRate()
    {
        return $this->container['interest_rate'];
    }

    /**
     * Sets interest_rate
     *
     * @param string $interest_rate interest_rate
     *
     * @return self
     */
    public function setInterestRate($interest_rate)
    {
        if (is_null($interest_rate)) {
            throw new \InvalidArgumentException('non-nullable interest_rate cannot be null');
        }
        $this->container['interest_rate'] = $interest_rate;

        return $this;
    }

    /**
     * Gets lot
     *
     * @return int
     */
    public function getLot()
    {
        return $this->container['lot'];
    }

    /**
     * Sets lot
     *
     * @param int $lot lot
     *
     * @return self
     */
    public function setLot($lot)
    {
        if (is_null($lot)) {
            throw new \InvalidArgumentException('non-nullable lot cannot be null');
        }
        $this->container['lot'] = $lot;

        return $this;
    }

    /**
     * Gets position_id
     *
     * @return int
     */
    public function getPositionId()
    {
        return $this->container['position_id'];
    }

    /**
     * Sets position_id
     *
     * @param int $position_id position_id
     *
     * @return self
     */
    public function setPositionId($position_id)
    {
        if (is_null($position_id)) {
            throw new \InvalidArgumentException('non-nullable position_id cannot be null');
        }
        $this->container['position_id'] = $position_id;

        return $this;
    }

    /**
     * Gets principal
     *
     * @return string
     */
    public function getPrincipal()
    {
        return $this->container['principal'];
    }

    /**
     * Sets principal
     *
     * @param string $principal principal
     *
     * @return self
     */
    public function setPrincipal($principal)
    {
        if (is_null($principal)) {
            throw new \InvalidArgumentException('non-nullable principal cannot be null');
        }
        $this->container['principal'] = $principal;

        return $this;
    }

    /**
     * Gets project_id
     *
     * @return string
     */
    public function getProjectId()
    {
        return $this->container['project_id'];
    }

    /**
     * Sets project_id
     *
     * @param string $project_id project_id
     *
     * @return self
     */
    public function setProjectId($project_id)
    {
        if (is_null($project_id)) {
            throw new \InvalidArgumentException('non-nullable project_id cannot be null');
        }
        $this->container['project_id'] = $project_id;

        return $this;
    }

    /**
     * Gets project_name
     *
     * @return string
     */
    public function getProjectName()
    {
        return $this->container['project_name'];
    }

    /**
     * Sets project_name
     *
     * @param string $project_name project_name
     *
     * @return self
     */
    public function setProjectName($project_name)
    {
        if (is_null($project_name)) {
            throw new \InvalidArgumentException('non-nullable project_name cannot be null');
        }
        $this->container['project_name'] = $project_name;

        return $this;
    }

    /**
     * Gets purchase_time
     *
     * @return int
     */
    public function getPurchaseTime()
    {
        return $this->container['purchase_time'];
    }

    /**
     * Sets purchase_time
     *
     * @param int $purchase_time purchase_time
     *
     * @return self
     */
    public function setPurchaseTime($purchase_time)
    {
        if (is_null($purchase_time)) {
            throw new \InvalidArgumentException('non-nullable purchase_time cannot be null');
        }
        $this->container['purchase_time'] = $purchase_time;

        return $this;
    }

    /**
     * Gets redeem_date
     *
     * @return \DateTime
     */
    public function getRedeemDate()
    {
        return $this->container['redeem_date'];
    }

    /**
     * Sets redeem_date
     *
     * @param \DateTime $redeem_date redeem_date
     *
     * @return self
     */
    public function setRedeemDate($redeem_date)
    {
        if (is_null($redeem_date)) {
            throw new \InvalidArgumentException('non-nullable redeem_date cannot be null');
        }
        $this->container['redeem_date'] = $redeem_date;

        return $this;
    }

    /**
     * Gets start_time
     *
     * @return int
     */
    public function getStartTime()
    {
        return $this->container['start_time'];
    }

    /**
     * Sets start_time
     *
     * @param int $start_time start_time
     *
     * @return self
     */
    public function setStartTime($start_time)
    {
        if (is_null($start_time)) {
            throw new \InvalidArgumentException('non-nullable start_time cannot be null');
        }
        $this->container['start_time'] = $start_time;

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


