<?php
/**
 * SapiV1LoanRepayHistoryGet200ResponseRowsInner
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
 * SapiV1LoanRepayHistoryGet200ResponseRowsInner Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class SapiV1LoanRepayHistoryGet200ResponseRowsInner implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = '_sapi_v1_loan_repay_history_get_200_response_rows_inner';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'loan_coin' => 'string',
        'repay_amount' => 'string',
        'collateral_coin' => 'string',
        'collateral_used' => 'string',
        'collateral_return' => 'string',
        'repay_type' => 'string',
        'repay_status' => 'string',
        'repay_time' => 'int',
        'order_id' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'loan_coin' => null,
        'repay_amount' => null,
        'collateral_coin' => null,
        'collateral_used' => null,
        'collateral_return' => null,
        'repay_type' => null,
        'repay_status' => null,
        'repay_time' => 'int64',
        'order_id' => 'int64'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'loan_coin' => false,
		'repay_amount' => false,
		'collateral_coin' => false,
		'collateral_used' => false,
		'collateral_return' => false,
		'repay_type' => false,
		'repay_status' => false,
		'repay_time' => false,
		'order_id' => false
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
        'loan_coin' => 'loanCoin',
        'repay_amount' => 'repayAmount',
        'collateral_coin' => 'collateralCoin',
        'collateral_used' => 'collateralUsed',
        'collateral_return' => 'collateralReturn',
        'repay_type' => 'repayType',
        'repay_status' => 'repayStatus',
        'repay_time' => 'repayTime',
        'order_id' => 'orderId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'loan_coin' => 'setLoanCoin',
        'repay_amount' => 'setRepayAmount',
        'collateral_coin' => 'setCollateralCoin',
        'collateral_used' => 'setCollateralUsed',
        'collateral_return' => 'setCollateralReturn',
        'repay_type' => 'setRepayType',
        'repay_status' => 'setRepayStatus',
        'repay_time' => 'setRepayTime',
        'order_id' => 'setOrderId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'loan_coin' => 'getLoanCoin',
        'repay_amount' => 'getRepayAmount',
        'collateral_coin' => 'getCollateralCoin',
        'collateral_used' => 'getCollateralUsed',
        'collateral_return' => 'getCollateralReturn',
        'repay_type' => 'getRepayType',
        'repay_status' => 'getRepayStatus',
        'repay_time' => 'getRepayTime',
        'order_id' => 'getOrderId'
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
        $this->setIfExists('loan_coin', $data ?? [], null);
        $this->setIfExists('repay_amount', $data ?? [], null);
        $this->setIfExists('collateral_coin', $data ?? [], null);
        $this->setIfExists('collateral_used', $data ?? [], null);
        $this->setIfExists('collateral_return', $data ?? [], null);
        $this->setIfExists('repay_type', $data ?? [], null);
        $this->setIfExists('repay_status', $data ?? [], null);
        $this->setIfExists('repay_time', $data ?? [], null);
        $this->setIfExists('order_id', $data ?? [], null);
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

        if ($this->container['loan_coin'] === null) {
            $invalidProperties[] = "'loan_coin' can't be null";
        }
        if ($this->container['repay_amount'] === null) {
            $invalidProperties[] = "'repay_amount' can't be null";
        }
        if ($this->container['collateral_coin'] === null) {
            $invalidProperties[] = "'collateral_coin' can't be null";
        }
        if ($this->container['collateral_used'] === null) {
            $invalidProperties[] = "'collateral_used' can't be null";
        }
        if ($this->container['collateral_return'] === null) {
            $invalidProperties[] = "'collateral_return' can't be null";
        }
        if ($this->container['repay_type'] === null) {
            $invalidProperties[] = "'repay_type' can't be null";
        }
        if ($this->container['repay_status'] === null) {
            $invalidProperties[] = "'repay_status' can't be null";
        }
        if ($this->container['repay_time'] === null) {
            $invalidProperties[] = "'repay_time' can't be null";
        }
        if ($this->container['order_id'] === null) {
            $invalidProperties[] = "'order_id' can't be null";
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
     * Gets loan_coin
     *
     * @return string
     */
    public function getLoanCoin()
    {
        return $this->container['loan_coin'];
    }

    /**
     * Sets loan_coin
     *
     * @param string $loan_coin loan_coin
     *
     * @return self
     */
    public function setLoanCoin($loan_coin)
    {
        if (is_null($loan_coin)) {
            throw new \InvalidArgumentException('non-nullable loan_coin cannot be null');
        }
        $this->container['loan_coin'] = $loan_coin;

        return $this;
    }

    /**
     * Gets repay_amount
     *
     * @return string
     */
    public function getRepayAmount()
    {
        return $this->container['repay_amount'];
    }

    /**
     * Sets repay_amount
     *
     * @param string $repay_amount repay_amount
     *
     * @return self
     */
    public function setRepayAmount($repay_amount)
    {
        if (is_null($repay_amount)) {
            throw new \InvalidArgumentException('non-nullable repay_amount cannot be null');
        }
        $this->container['repay_amount'] = $repay_amount;

        return $this;
    }

    /**
     * Gets collateral_coin
     *
     * @return string
     */
    public function getCollateralCoin()
    {
        return $this->container['collateral_coin'];
    }

    /**
     * Sets collateral_coin
     *
     * @param string $collateral_coin collateral_coin
     *
     * @return self
     */
    public function setCollateralCoin($collateral_coin)
    {
        if (is_null($collateral_coin)) {
            throw new \InvalidArgumentException('non-nullable collateral_coin cannot be null');
        }
        $this->container['collateral_coin'] = $collateral_coin;

        return $this;
    }

    /**
     * Gets collateral_used
     *
     * @return string
     */
    public function getCollateralUsed()
    {
        return $this->container['collateral_used'];
    }

    /**
     * Sets collateral_used
     *
     * @param string $collateral_used collateral_used
     *
     * @return self
     */
    public function setCollateralUsed($collateral_used)
    {
        if (is_null($collateral_used)) {
            throw new \InvalidArgumentException('non-nullable collateral_used cannot be null');
        }
        $this->container['collateral_used'] = $collateral_used;

        return $this;
    }

    /**
     * Gets collateral_return
     *
     * @return string
     */
    public function getCollateralReturn()
    {
        return $this->container['collateral_return'];
    }

    /**
     * Sets collateral_return
     *
     * @param string $collateral_return collateral_return
     *
     * @return self
     */
    public function setCollateralReturn($collateral_return)
    {
        if (is_null($collateral_return)) {
            throw new \InvalidArgumentException('non-nullable collateral_return cannot be null');
        }
        $this->container['collateral_return'] = $collateral_return;

        return $this;
    }

    /**
     * Gets repay_type
     *
     * @return string
     */
    public function getRepayType()
    {
        return $this->container['repay_type'];
    }

    /**
     * Sets repay_type
     *
     * @param string $repay_type repay_type
     *
     * @return self
     */
    public function setRepayType($repay_type)
    {
        if (is_null($repay_type)) {
            throw new \InvalidArgumentException('non-nullable repay_type cannot be null');
        }
        $this->container['repay_type'] = $repay_type;

        return $this;
    }

    /**
     * Gets repay_status
     *
     * @return string
     */
    public function getRepayStatus()
    {
        return $this->container['repay_status'];
    }

    /**
     * Sets repay_status
     *
     * @param string $repay_status 'repayType': '1' // 1 for 'repay with borrowed coin', 2 for 'repay with collateral' 'repayStatus': 'Repaid' // Repaid, Repaying, Failed
     *
     * @return self
     */
    public function setRepayStatus($repay_status)
    {
        if (is_null($repay_status)) {
            throw new \InvalidArgumentException('non-nullable repay_status cannot be null');
        }
        $this->container['repay_status'] = $repay_status;

        return $this;
    }

    /**
     * Gets repay_time
     *
     * @return int
     */
    public function getRepayTime()
    {
        return $this->container['repay_time'];
    }

    /**
     * Sets repay_time
     *
     * @param int $repay_time repay_time
     *
     * @return self
     */
    public function setRepayTime($repay_time)
    {
        if (is_null($repay_time)) {
            throw new \InvalidArgumentException('non-nullable repay_time cannot be null');
        }
        $this->container['repay_time'] = $repay_time;

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

