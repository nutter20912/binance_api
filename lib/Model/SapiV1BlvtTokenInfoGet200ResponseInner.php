<?php
/**
 * SapiV1BlvtTokenInfoGet200ResponseInner
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
 * SapiV1BlvtTokenInfoGet200ResponseInner Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class SapiV1BlvtTokenInfoGet200ResponseInner implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = '_sapi_v1_blvt_tokenInfo_get_200_response_inner';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'token_name' => 'string',
        'description' => 'string',
        'underlying' => 'string',
        'token_issued' => 'string',
        'basket' => 'string',
        'current_baskets' => '\OpenAPI\Client\Model\SapiV1BlvtTokenInfoGet200ResponseInnerCurrentBasketsInner[]',
        'nav' => 'string',
        'real_leverage' => 'string',
        'funding_rate' => 'string',
        'daily_management_fee' => 'string',
        'purchase_fee_pct' => 'string',
        'daily_purchase_limit' => 'string',
        'redeem_fee_pct' => 'string',
        'daily_redeem_limit' => 'string',
        'timestamp' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'token_name' => null,
        'description' => null,
        'underlying' => null,
        'token_issued' => null,
        'basket' => null,
        'current_baskets' => null,
        'nav' => null,
        'real_leverage' => null,
        'funding_rate' => null,
        'daily_management_fee' => null,
        'purchase_fee_pct' => null,
        'daily_purchase_limit' => null,
        'redeem_fee_pct' => null,
        'daily_redeem_limit' => null,
        'timestamp' => 'int64'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'token_name' => false,
		'description' => false,
		'underlying' => false,
		'token_issued' => false,
		'basket' => false,
		'current_baskets' => false,
		'nav' => false,
		'real_leverage' => false,
		'funding_rate' => false,
		'daily_management_fee' => false,
		'purchase_fee_pct' => false,
		'daily_purchase_limit' => false,
		'redeem_fee_pct' => false,
		'daily_redeem_limit' => false,
		'timestamp' => false
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
        'token_name' => 'tokenName',
        'description' => 'description',
        'underlying' => 'underlying',
        'token_issued' => 'tokenIssued',
        'basket' => 'basket',
        'current_baskets' => 'currentBaskets',
        'nav' => 'nav',
        'real_leverage' => 'realLeverage',
        'funding_rate' => 'fundingRate',
        'daily_management_fee' => 'dailyManagementFee',
        'purchase_fee_pct' => 'purchaseFeePct',
        'daily_purchase_limit' => 'dailyPurchaseLimit',
        'redeem_fee_pct' => 'redeemFeePct',
        'daily_redeem_limit' => 'dailyRedeemLimit',
        'timestamp' => 'timestamp'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'token_name' => 'setTokenName',
        'description' => 'setDescription',
        'underlying' => 'setUnderlying',
        'token_issued' => 'setTokenIssued',
        'basket' => 'setBasket',
        'current_baskets' => 'setCurrentBaskets',
        'nav' => 'setNav',
        'real_leverage' => 'setRealLeverage',
        'funding_rate' => 'setFundingRate',
        'daily_management_fee' => 'setDailyManagementFee',
        'purchase_fee_pct' => 'setPurchaseFeePct',
        'daily_purchase_limit' => 'setDailyPurchaseLimit',
        'redeem_fee_pct' => 'setRedeemFeePct',
        'daily_redeem_limit' => 'setDailyRedeemLimit',
        'timestamp' => 'setTimestamp'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'token_name' => 'getTokenName',
        'description' => 'getDescription',
        'underlying' => 'getUnderlying',
        'token_issued' => 'getTokenIssued',
        'basket' => 'getBasket',
        'current_baskets' => 'getCurrentBaskets',
        'nav' => 'getNav',
        'real_leverage' => 'getRealLeverage',
        'funding_rate' => 'getFundingRate',
        'daily_management_fee' => 'getDailyManagementFee',
        'purchase_fee_pct' => 'getPurchaseFeePct',
        'daily_purchase_limit' => 'getDailyPurchaseLimit',
        'redeem_fee_pct' => 'getRedeemFeePct',
        'daily_redeem_limit' => 'getDailyRedeemLimit',
        'timestamp' => 'getTimestamp'
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
        $this->setIfExists('token_name', $data ?? [], null);
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('underlying', $data ?? [], null);
        $this->setIfExists('token_issued', $data ?? [], null);
        $this->setIfExists('basket', $data ?? [], null);
        $this->setIfExists('current_baskets', $data ?? [], null);
        $this->setIfExists('nav', $data ?? [], null);
        $this->setIfExists('real_leverage', $data ?? [], null);
        $this->setIfExists('funding_rate', $data ?? [], null);
        $this->setIfExists('daily_management_fee', $data ?? [], null);
        $this->setIfExists('purchase_fee_pct', $data ?? [], null);
        $this->setIfExists('daily_purchase_limit', $data ?? [], null);
        $this->setIfExists('redeem_fee_pct', $data ?? [], null);
        $this->setIfExists('daily_redeem_limit', $data ?? [], null);
        $this->setIfExists('timestamp', $data ?? [], null);
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

        if ($this->container['token_name'] === null) {
            $invalidProperties[] = "'token_name' can't be null";
        }
        if ($this->container['description'] === null) {
            $invalidProperties[] = "'description' can't be null";
        }
        if ($this->container['underlying'] === null) {
            $invalidProperties[] = "'underlying' can't be null";
        }
        if ($this->container['token_issued'] === null) {
            $invalidProperties[] = "'token_issued' can't be null";
        }
        if ($this->container['basket'] === null) {
            $invalidProperties[] = "'basket' can't be null";
        }
        if ($this->container['current_baskets'] === null) {
            $invalidProperties[] = "'current_baskets' can't be null";
        }
        if ($this->container['nav'] === null) {
            $invalidProperties[] = "'nav' can't be null";
        }
        if ($this->container['real_leverage'] === null) {
            $invalidProperties[] = "'real_leverage' can't be null";
        }
        if ($this->container['funding_rate'] === null) {
            $invalidProperties[] = "'funding_rate' can't be null";
        }
        if ($this->container['daily_management_fee'] === null) {
            $invalidProperties[] = "'daily_management_fee' can't be null";
        }
        if ($this->container['purchase_fee_pct'] === null) {
            $invalidProperties[] = "'purchase_fee_pct' can't be null";
        }
        if ($this->container['daily_purchase_limit'] === null) {
            $invalidProperties[] = "'daily_purchase_limit' can't be null";
        }
        if ($this->container['redeem_fee_pct'] === null) {
            $invalidProperties[] = "'redeem_fee_pct' can't be null";
        }
        if ($this->container['daily_redeem_limit'] === null) {
            $invalidProperties[] = "'daily_redeem_limit' can't be null";
        }
        if ($this->container['timestamp'] === null) {
            $invalidProperties[] = "'timestamp' can't be null";
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
     * Gets token_name
     *
     * @return string
     */
    public function getTokenName()
    {
        return $this->container['token_name'];
    }

    /**
     * Sets token_name
     *
     * @param string $token_name token_name
     *
     * @return self
     */
    public function setTokenName($token_name)
    {
        if (is_null($token_name)) {
            throw new \InvalidArgumentException('non-nullable token_name cannot be null');
        }
        $this->container['token_name'] = $token_name;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string $description description
     *
     * @return self
     */
    public function setDescription($description)
    {
        if (is_null($description)) {
            throw new \InvalidArgumentException('non-nullable description cannot be null');
        }
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets underlying
     *
     * @return string
     */
    public function getUnderlying()
    {
        return $this->container['underlying'];
    }

    /**
     * Sets underlying
     *
     * @param string $underlying underlying
     *
     * @return self
     */
    public function setUnderlying($underlying)
    {
        if (is_null($underlying)) {
            throw new \InvalidArgumentException('non-nullable underlying cannot be null');
        }
        $this->container['underlying'] = $underlying;

        return $this;
    }

    /**
     * Gets token_issued
     *
     * @return string
     */
    public function getTokenIssued()
    {
        return $this->container['token_issued'];
    }

    /**
     * Sets token_issued
     *
     * @param string $token_issued token_issued
     *
     * @return self
     */
    public function setTokenIssued($token_issued)
    {
        if (is_null($token_issued)) {
            throw new \InvalidArgumentException('non-nullable token_issued cannot be null');
        }
        $this->container['token_issued'] = $token_issued;

        return $this;
    }

    /**
     * Gets basket
     *
     * @return string
     */
    public function getBasket()
    {
        return $this->container['basket'];
    }

    /**
     * Sets basket
     *
     * @param string $basket basket
     *
     * @return self
     */
    public function setBasket($basket)
    {
        if (is_null($basket)) {
            throw new \InvalidArgumentException('non-nullable basket cannot be null');
        }
        $this->container['basket'] = $basket;

        return $this;
    }

    /**
     * Gets current_baskets
     *
     * @return \OpenAPI\Client\Model\SapiV1BlvtTokenInfoGet200ResponseInnerCurrentBasketsInner[]
     */
    public function getCurrentBaskets()
    {
        return $this->container['current_baskets'];
    }

    /**
     * Sets current_baskets
     *
     * @param \OpenAPI\Client\Model\SapiV1BlvtTokenInfoGet200ResponseInnerCurrentBasketsInner[] $current_baskets current_baskets
     *
     * @return self
     */
    public function setCurrentBaskets($current_baskets)
    {
        if (is_null($current_baskets)) {
            throw new \InvalidArgumentException('non-nullable current_baskets cannot be null');
        }
        $this->container['current_baskets'] = $current_baskets;

        return $this;
    }

    /**
     * Gets nav
     *
     * @return string
     */
    public function getNav()
    {
        return $this->container['nav'];
    }

    /**
     * Sets nav
     *
     * @param string $nav nav
     *
     * @return self
     */
    public function setNav($nav)
    {
        if (is_null($nav)) {
            throw new \InvalidArgumentException('non-nullable nav cannot be null');
        }
        $this->container['nav'] = $nav;

        return $this;
    }

    /**
     * Gets real_leverage
     *
     * @return string
     */
    public function getRealLeverage()
    {
        return $this->container['real_leverage'];
    }

    /**
     * Sets real_leverage
     *
     * @param string $real_leverage real_leverage
     *
     * @return self
     */
    public function setRealLeverage($real_leverage)
    {
        if (is_null($real_leverage)) {
            throw new \InvalidArgumentException('non-nullable real_leverage cannot be null');
        }
        $this->container['real_leverage'] = $real_leverage;

        return $this;
    }

    /**
     * Gets funding_rate
     *
     * @return string
     */
    public function getFundingRate()
    {
        return $this->container['funding_rate'];
    }

    /**
     * Sets funding_rate
     *
     * @param string $funding_rate funding_rate
     *
     * @return self
     */
    public function setFundingRate($funding_rate)
    {
        if (is_null($funding_rate)) {
            throw new \InvalidArgumentException('non-nullable funding_rate cannot be null');
        }
        $this->container['funding_rate'] = $funding_rate;

        return $this;
    }

    /**
     * Gets daily_management_fee
     *
     * @return string
     */
    public function getDailyManagementFee()
    {
        return $this->container['daily_management_fee'];
    }

    /**
     * Sets daily_management_fee
     *
     * @param string $daily_management_fee daily_management_fee
     *
     * @return self
     */
    public function setDailyManagementFee($daily_management_fee)
    {
        if (is_null($daily_management_fee)) {
            throw new \InvalidArgumentException('non-nullable daily_management_fee cannot be null');
        }
        $this->container['daily_management_fee'] = $daily_management_fee;

        return $this;
    }

    /**
     * Gets purchase_fee_pct
     *
     * @return string
     */
    public function getPurchaseFeePct()
    {
        return $this->container['purchase_fee_pct'];
    }

    /**
     * Sets purchase_fee_pct
     *
     * @param string $purchase_fee_pct purchase_fee_pct
     *
     * @return self
     */
    public function setPurchaseFeePct($purchase_fee_pct)
    {
        if (is_null($purchase_fee_pct)) {
            throw new \InvalidArgumentException('non-nullable purchase_fee_pct cannot be null');
        }
        $this->container['purchase_fee_pct'] = $purchase_fee_pct;

        return $this;
    }

    /**
     * Gets daily_purchase_limit
     *
     * @return string
     */
    public function getDailyPurchaseLimit()
    {
        return $this->container['daily_purchase_limit'];
    }

    /**
     * Sets daily_purchase_limit
     *
     * @param string $daily_purchase_limit daily_purchase_limit
     *
     * @return self
     */
    public function setDailyPurchaseLimit($daily_purchase_limit)
    {
        if (is_null($daily_purchase_limit)) {
            throw new \InvalidArgumentException('non-nullable daily_purchase_limit cannot be null');
        }
        $this->container['daily_purchase_limit'] = $daily_purchase_limit;

        return $this;
    }

    /**
     * Gets redeem_fee_pct
     *
     * @return string
     */
    public function getRedeemFeePct()
    {
        return $this->container['redeem_fee_pct'];
    }

    /**
     * Sets redeem_fee_pct
     *
     * @param string $redeem_fee_pct redeem_fee_pct
     *
     * @return self
     */
    public function setRedeemFeePct($redeem_fee_pct)
    {
        if (is_null($redeem_fee_pct)) {
            throw new \InvalidArgumentException('non-nullable redeem_fee_pct cannot be null');
        }
        $this->container['redeem_fee_pct'] = $redeem_fee_pct;

        return $this;
    }

    /**
     * Gets daily_redeem_limit
     *
     * @return string
     */
    public function getDailyRedeemLimit()
    {
        return $this->container['daily_redeem_limit'];
    }

    /**
     * Sets daily_redeem_limit
     *
     * @param string $daily_redeem_limit daily_redeem_limit
     *
     * @return self
     */
    public function setDailyRedeemLimit($daily_redeem_limit)
    {
        if (is_null($daily_redeem_limit)) {
            throw new \InvalidArgumentException('non-nullable daily_redeem_limit cannot be null');
        }
        $this->container['daily_redeem_limit'] = $daily_redeem_limit;

        return $this;
    }

    /**
     * Gets timestamp
     *
     * @return int
     */
    public function getTimestamp()
    {
        return $this->container['timestamp'];
    }

    /**
     * Sets timestamp
     *
     * @param int $timestamp timestamp
     *
     * @return self
     */
    public function setTimestamp($timestamp)
    {
        if (is_null($timestamp)) {
            throw new \InvalidArgumentException('non-nullable timestamp cannot be null');
        }
        $this->container['timestamp'] = $timestamp;

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

