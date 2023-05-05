<?php
/**
 * SapiV1LoanBorrowHistoryGet200ResponseRowsInner
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
 * SapiV1LoanBorrowHistoryGet200ResponseRowsInner Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class SapiV1LoanBorrowHistoryGet200ResponseRowsInner implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = '_sapi_v1_loan_borrow_history_get_200_response_rows_inner';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'order_id' => 'int',
        'loan_coin' => 'string',
        'initial_loan_amount' => 'string',
        'hourly_interest_rate' => 'string',
        'loan_term' => 'string',
        'collateral_coin' => 'string',
        'initial_collateral_amount' => 'string',
        'borrow_time' => 'int',
        'status' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'order_id' => 'int64',
        'loan_coin' => null,
        'initial_loan_amount' => null,
        'hourly_interest_rate' => null,
        'loan_term' => null,
        'collateral_coin' => null,
        'initial_collateral_amount' => null,
        'borrow_time' => 'int64',
        'status' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'order_id' => false,
		'loan_coin' => false,
		'initial_loan_amount' => false,
		'hourly_interest_rate' => false,
		'loan_term' => false,
		'collateral_coin' => false,
		'initial_collateral_amount' => false,
		'borrow_time' => false,
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
        'order_id' => 'orderId',
        'loan_coin' => 'loanCoin',
        'initial_loan_amount' => 'initialLoanAmount',
        'hourly_interest_rate' => 'hourlyInterestRate',
        'loan_term' => 'loanTerm',
        'collateral_coin' => 'collateralCoin',
        'initial_collateral_amount' => 'initialCollateralAmount',
        'borrow_time' => 'borrowTime',
        'status' => 'status'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'order_id' => 'setOrderId',
        'loan_coin' => 'setLoanCoin',
        'initial_loan_amount' => 'setInitialLoanAmount',
        'hourly_interest_rate' => 'setHourlyInterestRate',
        'loan_term' => 'setLoanTerm',
        'collateral_coin' => 'setCollateralCoin',
        'initial_collateral_amount' => 'setInitialCollateralAmount',
        'borrow_time' => 'setBorrowTime',
        'status' => 'setStatus'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'order_id' => 'getOrderId',
        'loan_coin' => 'getLoanCoin',
        'initial_loan_amount' => 'getInitialLoanAmount',
        'hourly_interest_rate' => 'getHourlyInterestRate',
        'loan_term' => 'getLoanTerm',
        'collateral_coin' => 'getCollateralCoin',
        'initial_collateral_amount' => 'getInitialCollateralAmount',
        'borrow_time' => 'getBorrowTime',
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
        $this->setIfExists('order_id', $data ?? [], null);
        $this->setIfExists('loan_coin', $data ?? [], null);
        $this->setIfExists('initial_loan_amount', $data ?? [], null);
        $this->setIfExists('hourly_interest_rate', $data ?? [], null);
        $this->setIfExists('loan_term', $data ?? [], null);
        $this->setIfExists('collateral_coin', $data ?? [], null);
        $this->setIfExists('initial_collateral_amount', $data ?? [], null);
        $this->setIfExists('borrow_time', $data ?? [], null);
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

        if ($this->container['order_id'] === null) {
            $invalidProperties[] = "'order_id' can't be null";
        }
        if ($this->container['loan_coin'] === null) {
            $invalidProperties[] = "'loan_coin' can't be null";
        }
        if ($this->container['initial_loan_amount'] === null) {
            $invalidProperties[] = "'initial_loan_amount' can't be null";
        }
        if ($this->container['hourly_interest_rate'] === null) {
            $invalidProperties[] = "'hourly_interest_rate' can't be null";
        }
        if ($this->container['loan_term'] === null) {
            $invalidProperties[] = "'loan_term' can't be null";
        }
        if ($this->container['collateral_coin'] === null) {
            $invalidProperties[] = "'collateral_coin' can't be null";
        }
        if ($this->container['initial_collateral_amount'] === null) {
            $invalidProperties[] = "'initial_collateral_amount' can't be null";
        }
        if ($this->container['borrow_time'] === null) {
            $invalidProperties[] = "'borrow_time' can't be null";
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
     * Gets initial_loan_amount
     *
     * @return string
     */
    public function getInitialLoanAmount()
    {
        return $this->container['initial_loan_amount'];
    }

    /**
     * Sets initial_loan_amount
     *
     * @param string $initial_loan_amount initial_loan_amount
     *
     * @return self
     */
    public function setInitialLoanAmount($initial_loan_amount)
    {
        if (is_null($initial_loan_amount)) {
            throw new \InvalidArgumentException('non-nullable initial_loan_amount cannot be null');
        }
        $this->container['initial_loan_amount'] = $initial_loan_amount;

        return $this;
    }

    /**
     * Gets hourly_interest_rate
     *
     * @return string
     */
    public function getHourlyInterestRate()
    {
        return $this->container['hourly_interest_rate'];
    }

    /**
     * Sets hourly_interest_rate
     *
     * @param string $hourly_interest_rate hourly_interest_rate
     *
     * @return self
     */
    public function setHourlyInterestRate($hourly_interest_rate)
    {
        if (is_null($hourly_interest_rate)) {
            throw new \InvalidArgumentException('non-nullable hourly_interest_rate cannot be null');
        }
        $this->container['hourly_interest_rate'] = $hourly_interest_rate;

        return $this;
    }

    /**
     * Gets loan_term
     *
     * @return string
     */
    public function getLoanTerm()
    {
        return $this->container['loan_term'];
    }

    /**
     * Sets loan_term
     *
     * @param string $loan_term loan_term
     *
     * @return self
     */
    public function setLoanTerm($loan_term)
    {
        if (is_null($loan_term)) {
            throw new \InvalidArgumentException('non-nullable loan_term cannot be null');
        }
        $this->container['loan_term'] = $loan_term;

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
     * Gets initial_collateral_amount
     *
     * @return string
     */
    public function getInitialCollateralAmount()
    {
        return $this->container['initial_collateral_amount'];
    }

    /**
     * Sets initial_collateral_amount
     *
     * @param string $initial_collateral_amount initial_collateral_amount
     *
     * @return self
     */
    public function setInitialCollateralAmount($initial_collateral_amount)
    {
        if (is_null($initial_collateral_amount)) {
            throw new \InvalidArgumentException('non-nullable initial_collateral_amount cannot be null');
        }
        $this->container['initial_collateral_amount'] = $initial_collateral_amount;

        return $this;
    }

    /**
     * Gets borrow_time
     *
     * @return int
     */
    public function getBorrowTime()
    {
        return $this->container['borrow_time'];
    }

    /**
     * Sets borrow_time
     *
     * @param int $borrow_time borrow_time
     *
     * @return self
     */
    public function setBorrowTime($borrow_time)
    {
        if (is_null($borrow_time)) {
            throw new \InvalidArgumentException('non-nullable borrow_time cannot be null');
        }
        $this->container['borrow_time'] = $borrow_time;

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


