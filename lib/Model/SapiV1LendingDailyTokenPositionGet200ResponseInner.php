<?php
/**
 * SapiV1LendingDailyTokenPositionGet200ResponseInner
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
 * SapiV1LendingDailyTokenPositionGet200ResponseInner Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class SapiV1LendingDailyTokenPositionGet200ResponseInner implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = '_sapi_v1_lending_daily_token_position_get_200_response_inner';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'annual_interest_rate' => 'string',
        'asset' => 'string',
        'avg_annual_interest_rate' => 'string',
        'can_redeem' => 'bool',
        'daily_interest_rate' => 'string',
        'free_amount' => 'string',
        'freeze_amount' => 'string',
        'locked_amount' => 'string',
        'product_id' => 'string',
        'product_name' => 'string',
        'redeeming_amount' => 'string',
        'today_purchased_amount' => 'string',
        'total_amount' => 'string',
        'total_interest' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'annual_interest_rate' => null,
        'asset' => null,
        'avg_annual_interest_rate' => null,
        'can_redeem' => null,
        'daily_interest_rate' => null,
        'free_amount' => null,
        'freeze_amount' => null,
        'locked_amount' => null,
        'product_id' => null,
        'product_name' => null,
        'redeeming_amount' => null,
        'today_purchased_amount' => null,
        'total_amount' => null,
        'total_interest' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'annual_interest_rate' => false,
		'asset' => false,
		'avg_annual_interest_rate' => false,
		'can_redeem' => false,
		'daily_interest_rate' => false,
		'free_amount' => false,
		'freeze_amount' => false,
		'locked_amount' => false,
		'product_id' => false,
		'product_name' => false,
		'redeeming_amount' => false,
		'today_purchased_amount' => false,
		'total_amount' => false,
		'total_interest' => false
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
        'annual_interest_rate' => 'annualInterestRate',
        'asset' => 'asset',
        'avg_annual_interest_rate' => 'avgAnnualInterestRate',
        'can_redeem' => 'canRedeem',
        'daily_interest_rate' => 'dailyInterestRate',
        'free_amount' => 'freeAmount',
        'freeze_amount' => 'freezeAmount',
        'locked_amount' => 'lockedAmount',
        'product_id' => 'productId',
        'product_name' => 'productName',
        'redeeming_amount' => 'redeemingAmount',
        'today_purchased_amount' => 'todayPurchasedAmount',
        'total_amount' => 'totalAmount',
        'total_interest' => 'totalInterest'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'annual_interest_rate' => 'setAnnualInterestRate',
        'asset' => 'setAsset',
        'avg_annual_interest_rate' => 'setAvgAnnualInterestRate',
        'can_redeem' => 'setCanRedeem',
        'daily_interest_rate' => 'setDailyInterestRate',
        'free_amount' => 'setFreeAmount',
        'freeze_amount' => 'setFreezeAmount',
        'locked_amount' => 'setLockedAmount',
        'product_id' => 'setProductId',
        'product_name' => 'setProductName',
        'redeeming_amount' => 'setRedeemingAmount',
        'today_purchased_amount' => 'setTodayPurchasedAmount',
        'total_amount' => 'setTotalAmount',
        'total_interest' => 'setTotalInterest'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'annual_interest_rate' => 'getAnnualInterestRate',
        'asset' => 'getAsset',
        'avg_annual_interest_rate' => 'getAvgAnnualInterestRate',
        'can_redeem' => 'getCanRedeem',
        'daily_interest_rate' => 'getDailyInterestRate',
        'free_amount' => 'getFreeAmount',
        'freeze_amount' => 'getFreezeAmount',
        'locked_amount' => 'getLockedAmount',
        'product_id' => 'getProductId',
        'product_name' => 'getProductName',
        'redeeming_amount' => 'getRedeemingAmount',
        'today_purchased_amount' => 'getTodayPurchasedAmount',
        'total_amount' => 'getTotalAmount',
        'total_interest' => 'getTotalInterest'
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
        $this->setIfExists('annual_interest_rate', $data ?? [], null);
        $this->setIfExists('asset', $data ?? [], null);
        $this->setIfExists('avg_annual_interest_rate', $data ?? [], null);
        $this->setIfExists('can_redeem', $data ?? [], null);
        $this->setIfExists('daily_interest_rate', $data ?? [], null);
        $this->setIfExists('free_amount', $data ?? [], null);
        $this->setIfExists('freeze_amount', $data ?? [], null);
        $this->setIfExists('locked_amount', $data ?? [], null);
        $this->setIfExists('product_id', $data ?? [], null);
        $this->setIfExists('product_name', $data ?? [], null);
        $this->setIfExists('redeeming_amount', $data ?? [], null);
        $this->setIfExists('today_purchased_amount', $data ?? [], null);
        $this->setIfExists('total_amount', $data ?? [], null);
        $this->setIfExists('total_interest', $data ?? [], null);
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

        if ($this->container['annual_interest_rate'] === null) {
            $invalidProperties[] = "'annual_interest_rate' can't be null";
        }
        if ($this->container['asset'] === null) {
            $invalidProperties[] = "'asset' can't be null";
        }
        if ($this->container['avg_annual_interest_rate'] === null) {
            $invalidProperties[] = "'avg_annual_interest_rate' can't be null";
        }
        if ($this->container['can_redeem'] === null) {
            $invalidProperties[] = "'can_redeem' can't be null";
        }
        if ($this->container['daily_interest_rate'] === null) {
            $invalidProperties[] = "'daily_interest_rate' can't be null";
        }
        if ($this->container['free_amount'] === null) {
            $invalidProperties[] = "'free_amount' can't be null";
        }
        if ($this->container['freeze_amount'] === null) {
            $invalidProperties[] = "'freeze_amount' can't be null";
        }
        if ($this->container['locked_amount'] === null) {
            $invalidProperties[] = "'locked_amount' can't be null";
        }
        if ($this->container['product_id'] === null) {
            $invalidProperties[] = "'product_id' can't be null";
        }
        if ($this->container['product_name'] === null) {
            $invalidProperties[] = "'product_name' can't be null";
        }
        if ($this->container['redeeming_amount'] === null) {
            $invalidProperties[] = "'redeeming_amount' can't be null";
        }
        if ($this->container['today_purchased_amount'] === null) {
            $invalidProperties[] = "'today_purchased_amount' can't be null";
        }
        if ($this->container['total_amount'] === null) {
            $invalidProperties[] = "'total_amount' can't be null";
        }
        if ($this->container['total_interest'] === null) {
            $invalidProperties[] = "'total_interest' can't be null";
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
     * Gets annual_interest_rate
     *
     * @return string
     */
    public function getAnnualInterestRate()
    {
        return $this->container['annual_interest_rate'];
    }

    /**
     * Sets annual_interest_rate
     *
     * @param string $annual_interest_rate annual_interest_rate
     *
     * @return self
     */
    public function setAnnualInterestRate($annual_interest_rate)
    {
        if (is_null($annual_interest_rate)) {
            throw new \InvalidArgumentException('non-nullable annual_interest_rate cannot be null');
        }
        $this->container['annual_interest_rate'] = $annual_interest_rate;

        return $this;
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
     * Gets avg_annual_interest_rate
     *
     * @return string
     */
    public function getAvgAnnualInterestRate()
    {
        return $this->container['avg_annual_interest_rate'];
    }

    /**
     * Sets avg_annual_interest_rate
     *
     * @param string $avg_annual_interest_rate avg_annual_interest_rate
     *
     * @return self
     */
    public function setAvgAnnualInterestRate($avg_annual_interest_rate)
    {
        if (is_null($avg_annual_interest_rate)) {
            throw new \InvalidArgumentException('non-nullable avg_annual_interest_rate cannot be null');
        }
        $this->container['avg_annual_interest_rate'] = $avg_annual_interest_rate;

        return $this;
    }

    /**
     * Gets can_redeem
     *
     * @return bool
     */
    public function getCanRedeem()
    {
        return $this->container['can_redeem'];
    }

    /**
     * Sets can_redeem
     *
     * @param bool $can_redeem can_redeem
     *
     * @return self
     */
    public function setCanRedeem($can_redeem)
    {
        if (is_null($can_redeem)) {
            throw new \InvalidArgumentException('non-nullable can_redeem cannot be null');
        }
        $this->container['can_redeem'] = $can_redeem;

        return $this;
    }

    /**
     * Gets daily_interest_rate
     *
     * @return string
     */
    public function getDailyInterestRate()
    {
        return $this->container['daily_interest_rate'];
    }

    /**
     * Sets daily_interest_rate
     *
     * @param string $daily_interest_rate daily_interest_rate
     *
     * @return self
     */
    public function setDailyInterestRate($daily_interest_rate)
    {
        if (is_null($daily_interest_rate)) {
            throw new \InvalidArgumentException('non-nullable daily_interest_rate cannot be null');
        }
        $this->container['daily_interest_rate'] = $daily_interest_rate;

        return $this;
    }

    /**
     * Gets free_amount
     *
     * @return string
     */
    public function getFreeAmount()
    {
        return $this->container['free_amount'];
    }

    /**
     * Sets free_amount
     *
     * @param string $free_amount free_amount
     *
     * @return self
     */
    public function setFreeAmount($free_amount)
    {
        if (is_null($free_amount)) {
            throw new \InvalidArgumentException('non-nullable free_amount cannot be null');
        }
        $this->container['free_amount'] = $free_amount;

        return $this;
    }

    /**
     * Gets freeze_amount
     *
     * @return string
     */
    public function getFreezeAmount()
    {
        return $this->container['freeze_amount'];
    }

    /**
     * Sets freeze_amount
     *
     * @param string $freeze_amount freeze_amount
     *
     * @return self
     */
    public function setFreezeAmount($freeze_amount)
    {
        if (is_null($freeze_amount)) {
            throw new \InvalidArgumentException('non-nullable freeze_amount cannot be null');
        }
        $this->container['freeze_amount'] = $freeze_amount;

        return $this;
    }

    /**
     * Gets locked_amount
     *
     * @return string
     */
    public function getLockedAmount()
    {
        return $this->container['locked_amount'];
    }

    /**
     * Sets locked_amount
     *
     * @param string $locked_amount locked_amount
     *
     * @return self
     */
    public function setLockedAmount($locked_amount)
    {
        if (is_null($locked_amount)) {
            throw new \InvalidArgumentException('non-nullable locked_amount cannot be null');
        }
        $this->container['locked_amount'] = $locked_amount;

        return $this;
    }

    /**
     * Gets product_id
     *
     * @return string
     */
    public function getProductId()
    {
        return $this->container['product_id'];
    }

    /**
     * Sets product_id
     *
     * @param string $product_id product_id
     *
     * @return self
     */
    public function setProductId($product_id)
    {
        if (is_null($product_id)) {
            throw new \InvalidArgumentException('non-nullable product_id cannot be null');
        }
        $this->container['product_id'] = $product_id;

        return $this;
    }

    /**
     * Gets product_name
     *
     * @return string
     */
    public function getProductName()
    {
        return $this->container['product_name'];
    }

    /**
     * Sets product_name
     *
     * @param string $product_name product_name
     *
     * @return self
     */
    public function setProductName($product_name)
    {
        if (is_null($product_name)) {
            throw new \InvalidArgumentException('non-nullable product_name cannot be null');
        }
        $this->container['product_name'] = $product_name;

        return $this;
    }

    /**
     * Gets redeeming_amount
     *
     * @return string
     */
    public function getRedeemingAmount()
    {
        return $this->container['redeeming_amount'];
    }

    /**
     * Sets redeeming_amount
     *
     * @param string $redeeming_amount redeeming_amount
     *
     * @return self
     */
    public function setRedeemingAmount($redeeming_amount)
    {
        if (is_null($redeeming_amount)) {
            throw new \InvalidArgumentException('non-nullable redeeming_amount cannot be null');
        }
        $this->container['redeeming_amount'] = $redeeming_amount;

        return $this;
    }

    /**
     * Gets today_purchased_amount
     *
     * @return string
     */
    public function getTodayPurchasedAmount()
    {
        return $this->container['today_purchased_amount'];
    }

    /**
     * Sets today_purchased_amount
     *
     * @param string $today_purchased_amount today_purchased_amount
     *
     * @return self
     */
    public function setTodayPurchasedAmount($today_purchased_amount)
    {
        if (is_null($today_purchased_amount)) {
            throw new \InvalidArgumentException('non-nullable today_purchased_amount cannot be null');
        }
        $this->container['today_purchased_amount'] = $today_purchased_amount;

        return $this;
    }

    /**
     * Gets total_amount
     *
     * @return string
     */
    public function getTotalAmount()
    {
        return $this->container['total_amount'];
    }

    /**
     * Sets total_amount
     *
     * @param string $total_amount total_amount
     *
     * @return self
     */
    public function setTotalAmount($total_amount)
    {
        if (is_null($total_amount)) {
            throw new \InvalidArgumentException('non-nullable total_amount cannot be null');
        }
        $this->container['total_amount'] = $total_amount;

        return $this;
    }

    /**
     * Gets total_interest
     *
     * @return string
     */
    public function getTotalInterest()
    {
        return $this->container['total_interest'];
    }

    /**
     * Sets total_interest
     *
     * @param string $total_interest total_interest
     *
     * @return self
     */
    public function setTotalInterest($total_interest)
    {
        if (is_null($total_interest)) {
            throw new \InvalidArgumentException('non-nullable total_interest cannot be null');
        }
        $this->container['total_interest'] = $total_interest;

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

