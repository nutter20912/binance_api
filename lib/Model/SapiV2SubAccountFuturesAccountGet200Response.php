<?php
/**
 * SapiV2SubAccountFuturesAccountGet200Response
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
 * SapiV2SubAccountFuturesAccountGet200Response Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class SapiV2SubAccountFuturesAccountGet200Response implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = '_sapi_v2_sub_account_futures_account_get_200_response';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'future_account_resp' => '\OpenAPI\Client\Model\SubAccountUSDTFuturesDetailsFutureAccountResp',
        'email' => 'string',
        'assets' => '\OpenAPI\Client\Model\SubAccountCOINFuturesDetailsAssetsInner[]',
        'can_deposit' => 'bool',
        'can_trade' => 'bool',
        'can_withdraw' => 'bool',
        'fee_tier' => 'int',
        'update_time' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'future_account_resp' => null,
        'email' => null,
        'assets' => null,
        'can_deposit' => null,
        'can_trade' => null,
        'can_withdraw' => null,
        'fee_tier' => 'int64',
        'update_time' => 'int64'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'future_account_resp' => false,
		'email' => false,
		'assets' => false,
		'can_deposit' => false,
		'can_trade' => false,
		'can_withdraw' => false,
		'fee_tier' => false,
		'update_time' => false
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
        'future_account_resp' => 'futureAccountResp',
        'email' => 'email',
        'assets' => 'assets',
        'can_deposit' => 'canDeposit',
        'can_trade' => 'canTrade',
        'can_withdraw' => 'canWithdraw',
        'fee_tier' => 'feeTier',
        'update_time' => 'updateTime'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'future_account_resp' => 'setFutureAccountResp',
        'email' => 'setEmail',
        'assets' => 'setAssets',
        'can_deposit' => 'setCanDeposit',
        'can_trade' => 'setCanTrade',
        'can_withdraw' => 'setCanWithdraw',
        'fee_tier' => 'setFeeTier',
        'update_time' => 'setUpdateTime'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'future_account_resp' => 'getFutureAccountResp',
        'email' => 'getEmail',
        'assets' => 'getAssets',
        'can_deposit' => 'getCanDeposit',
        'can_trade' => 'getCanTrade',
        'can_withdraw' => 'getCanWithdraw',
        'fee_tier' => 'getFeeTier',
        'update_time' => 'getUpdateTime'
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
        $this->setIfExists('future_account_resp', $data ?? [], null);
        $this->setIfExists('email', $data ?? [], null);
        $this->setIfExists('assets', $data ?? [], null);
        $this->setIfExists('can_deposit', $data ?? [], null);
        $this->setIfExists('can_trade', $data ?? [], null);
        $this->setIfExists('can_withdraw', $data ?? [], null);
        $this->setIfExists('fee_tier', $data ?? [], null);
        $this->setIfExists('update_time', $data ?? [], null);
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

        if ($this->container['future_account_resp'] === null) {
            $invalidProperties[] = "'future_account_resp' can't be null";
        }
        if ($this->container['email'] === null) {
            $invalidProperties[] = "'email' can't be null";
        }
        if ($this->container['assets'] === null) {
            $invalidProperties[] = "'assets' can't be null";
        }
        if ($this->container['can_deposit'] === null) {
            $invalidProperties[] = "'can_deposit' can't be null";
        }
        if ($this->container['can_trade'] === null) {
            $invalidProperties[] = "'can_trade' can't be null";
        }
        if ($this->container['can_withdraw'] === null) {
            $invalidProperties[] = "'can_withdraw' can't be null";
        }
        if ($this->container['fee_tier'] === null) {
            $invalidProperties[] = "'fee_tier' can't be null";
        }
        if ($this->container['update_time'] === null) {
            $invalidProperties[] = "'update_time' can't be null";
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
     * Gets future_account_resp
     *
     * @return \OpenAPI\Client\Model\SubAccountUSDTFuturesDetailsFutureAccountResp
     */
    public function getFutureAccountResp()
    {
        return $this->container['future_account_resp'];
    }

    /**
     * Sets future_account_resp
     *
     * @param \OpenAPI\Client\Model\SubAccountUSDTFuturesDetailsFutureAccountResp $future_account_resp future_account_resp
     *
     * @return self
     */
    public function setFutureAccountResp($future_account_resp)
    {
        if (is_null($future_account_resp)) {
            throw new \InvalidArgumentException('non-nullable future_account_resp cannot be null');
        }
        $this->container['future_account_resp'] = $future_account_resp;

        return $this;
    }

    /**
     * Gets email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string $email email
     *
     * @return self
     */
    public function setEmail($email)
    {
        if (is_null($email)) {
            throw new \InvalidArgumentException('non-nullable email cannot be null');
        }
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets assets
     *
     * @return \OpenAPI\Client\Model\SubAccountCOINFuturesDetailsAssetsInner[]
     */
    public function getAssets()
    {
        return $this->container['assets'];
    }

    /**
     * Sets assets
     *
     * @param \OpenAPI\Client\Model\SubAccountCOINFuturesDetailsAssetsInner[] $assets assets
     *
     * @return self
     */
    public function setAssets($assets)
    {
        if (is_null($assets)) {
            throw new \InvalidArgumentException('non-nullable assets cannot be null');
        }
        $this->container['assets'] = $assets;

        return $this;
    }

    /**
     * Gets can_deposit
     *
     * @return bool
     */
    public function getCanDeposit()
    {
        return $this->container['can_deposit'];
    }

    /**
     * Sets can_deposit
     *
     * @param bool $can_deposit can_deposit
     *
     * @return self
     */
    public function setCanDeposit($can_deposit)
    {
        if (is_null($can_deposit)) {
            throw new \InvalidArgumentException('non-nullable can_deposit cannot be null');
        }
        $this->container['can_deposit'] = $can_deposit;

        return $this;
    }

    /**
     * Gets can_trade
     *
     * @return bool
     */
    public function getCanTrade()
    {
        return $this->container['can_trade'];
    }

    /**
     * Sets can_trade
     *
     * @param bool $can_trade can_trade
     *
     * @return self
     */
    public function setCanTrade($can_trade)
    {
        if (is_null($can_trade)) {
            throw new \InvalidArgumentException('non-nullable can_trade cannot be null');
        }
        $this->container['can_trade'] = $can_trade;

        return $this;
    }

    /**
     * Gets can_withdraw
     *
     * @return bool
     */
    public function getCanWithdraw()
    {
        return $this->container['can_withdraw'];
    }

    /**
     * Sets can_withdraw
     *
     * @param bool $can_withdraw can_withdraw
     *
     * @return self
     */
    public function setCanWithdraw($can_withdraw)
    {
        if (is_null($can_withdraw)) {
            throw new \InvalidArgumentException('non-nullable can_withdraw cannot be null');
        }
        $this->container['can_withdraw'] = $can_withdraw;

        return $this;
    }

    /**
     * Gets fee_tier
     *
     * @return int
     */
    public function getFeeTier()
    {
        return $this->container['fee_tier'];
    }

    /**
     * Sets fee_tier
     *
     * @param int $fee_tier fee_tier
     *
     * @return self
     */
    public function setFeeTier($fee_tier)
    {
        if (is_null($fee_tier)) {
            throw new \InvalidArgumentException('non-nullable fee_tier cannot be null');
        }
        $this->container['fee_tier'] = $fee_tier;

        return $this;
    }

    /**
     * Gets update_time
     *
     * @return int
     */
    public function getUpdateTime()
    {
        return $this->container['update_time'];
    }

    /**
     * Sets update_time
     *
     * @param int $update_time update_time
     *
     * @return self
     */
    public function setUpdateTime($update_time)
    {
        if (is_null($update_time)) {
            throw new \InvalidArgumentException('non-nullable update_time cannot be null');
        }
        $this->container['update_time'] = $update_time;

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

