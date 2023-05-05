<?php
/**
 * SapiV1AccountApiRestrictionsGet200Response
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
 * SapiV1AccountApiRestrictionsGet200Response Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class SapiV1AccountApiRestrictionsGet200Response implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = '_sapi_v1_account_apiRestrictions_get_200_response';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'ip_restrict' => 'bool',
        'create_time' => 'int',
        'enable_withdrawals' => 'bool',
        'enable_internal_transfer' => 'bool',
        'permits_universal_transfer' => 'bool',
        'enable_vanilla_options' => 'bool',
        'enable_reading' => 'bool',
        'enable_futures' => 'bool',
        'enable_margin' => 'bool',
        'enable_spot_and_margin_trading' => 'bool',
        'trading_authority_expiration_time' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'ip_restrict' => null,
        'create_time' => 'int64',
        'enable_withdrawals' => null,
        'enable_internal_transfer' => null,
        'permits_universal_transfer' => null,
        'enable_vanilla_options' => null,
        'enable_reading' => null,
        'enable_futures' => null,
        'enable_margin' => null,
        'enable_spot_and_margin_trading' => null,
        'trading_authority_expiration_time' => 'int64'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'ip_restrict' => false,
		'create_time' => false,
		'enable_withdrawals' => false,
		'enable_internal_transfer' => false,
		'permits_universal_transfer' => false,
		'enable_vanilla_options' => false,
		'enable_reading' => false,
		'enable_futures' => false,
		'enable_margin' => false,
		'enable_spot_and_margin_trading' => false,
		'trading_authority_expiration_time' => false
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
        'ip_restrict' => 'ipRestrict',
        'create_time' => 'createTime',
        'enable_withdrawals' => 'enableWithdrawals',
        'enable_internal_transfer' => 'enableInternalTransfer',
        'permits_universal_transfer' => 'permitsUniversalTransfer',
        'enable_vanilla_options' => 'enableVanillaOptions',
        'enable_reading' => 'enableReading',
        'enable_futures' => 'enableFutures',
        'enable_margin' => 'enableMargin',
        'enable_spot_and_margin_trading' => 'enableSpotAndMarginTrading',
        'trading_authority_expiration_time' => 'tradingAuthorityExpirationTime'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'ip_restrict' => 'setIpRestrict',
        'create_time' => 'setCreateTime',
        'enable_withdrawals' => 'setEnableWithdrawals',
        'enable_internal_transfer' => 'setEnableInternalTransfer',
        'permits_universal_transfer' => 'setPermitsUniversalTransfer',
        'enable_vanilla_options' => 'setEnableVanillaOptions',
        'enable_reading' => 'setEnableReading',
        'enable_futures' => 'setEnableFutures',
        'enable_margin' => 'setEnableMargin',
        'enable_spot_and_margin_trading' => 'setEnableSpotAndMarginTrading',
        'trading_authority_expiration_time' => 'setTradingAuthorityExpirationTime'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'ip_restrict' => 'getIpRestrict',
        'create_time' => 'getCreateTime',
        'enable_withdrawals' => 'getEnableWithdrawals',
        'enable_internal_transfer' => 'getEnableInternalTransfer',
        'permits_universal_transfer' => 'getPermitsUniversalTransfer',
        'enable_vanilla_options' => 'getEnableVanillaOptions',
        'enable_reading' => 'getEnableReading',
        'enable_futures' => 'getEnableFutures',
        'enable_margin' => 'getEnableMargin',
        'enable_spot_and_margin_trading' => 'getEnableSpotAndMarginTrading',
        'trading_authority_expiration_time' => 'getTradingAuthorityExpirationTime'
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
        $this->setIfExists('ip_restrict', $data ?? [], null);
        $this->setIfExists('create_time', $data ?? [], null);
        $this->setIfExists('enable_withdrawals', $data ?? [], null);
        $this->setIfExists('enable_internal_transfer', $data ?? [], null);
        $this->setIfExists('permits_universal_transfer', $data ?? [], null);
        $this->setIfExists('enable_vanilla_options', $data ?? [], null);
        $this->setIfExists('enable_reading', $data ?? [], null);
        $this->setIfExists('enable_futures', $data ?? [], null);
        $this->setIfExists('enable_margin', $data ?? [], null);
        $this->setIfExists('enable_spot_and_margin_trading', $data ?? [], null);
        $this->setIfExists('trading_authority_expiration_time', $data ?? [], null);
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

        if ($this->container['ip_restrict'] === null) {
            $invalidProperties[] = "'ip_restrict' can't be null";
        }
        if ($this->container['create_time'] === null) {
            $invalidProperties[] = "'create_time' can't be null";
        }
        if ($this->container['enable_withdrawals'] === null) {
            $invalidProperties[] = "'enable_withdrawals' can't be null";
        }
        if ($this->container['enable_internal_transfer'] === null) {
            $invalidProperties[] = "'enable_internal_transfer' can't be null";
        }
        if ($this->container['permits_universal_transfer'] === null) {
            $invalidProperties[] = "'permits_universal_transfer' can't be null";
        }
        if ($this->container['enable_vanilla_options'] === null) {
            $invalidProperties[] = "'enable_vanilla_options' can't be null";
        }
        if ($this->container['enable_reading'] === null) {
            $invalidProperties[] = "'enable_reading' can't be null";
        }
        if ($this->container['enable_futures'] === null) {
            $invalidProperties[] = "'enable_futures' can't be null";
        }
        if ($this->container['enable_margin'] === null) {
            $invalidProperties[] = "'enable_margin' can't be null";
        }
        if ($this->container['enable_spot_and_margin_trading'] === null) {
            $invalidProperties[] = "'enable_spot_and_margin_trading' can't be null";
        }
        if ($this->container['trading_authority_expiration_time'] === null) {
            $invalidProperties[] = "'trading_authority_expiration_time' can't be null";
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
     * Gets ip_restrict
     *
     * @return bool
     */
    public function getIpRestrict()
    {
        return $this->container['ip_restrict'];
    }

    /**
     * Sets ip_restrict
     *
     * @param bool $ip_restrict ip_restrict
     *
     * @return self
     */
    public function setIpRestrict($ip_restrict)
    {
        if (is_null($ip_restrict)) {
            throw new \InvalidArgumentException('non-nullable ip_restrict cannot be null');
        }
        $this->container['ip_restrict'] = $ip_restrict;

        return $this;
    }

    /**
     * Gets create_time
     *
     * @return int
     */
    public function getCreateTime()
    {
        return $this->container['create_time'];
    }

    /**
     * Sets create_time
     *
     * @param int $create_time create_time
     *
     * @return self
     */
    public function setCreateTime($create_time)
    {
        if (is_null($create_time)) {
            throw new \InvalidArgumentException('non-nullable create_time cannot be null');
        }
        $this->container['create_time'] = $create_time;

        return $this;
    }

    /**
     * Gets enable_withdrawals
     *
     * @return bool
     */
    public function getEnableWithdrawals()
    {
        return $this->container['enable_withdrawals'];
    }

    /**
     * Sets enable_withdrawals
     *
     * @param bool $enable_withdrawals This option allows you to withdraw via API. You must apply the IP Access Restriction filter in order to enable withdrawals
     *
     * @return self
     */
    public function setEnableWithdrawals($enable_withdrawals)
    {
        if (is_null($enable_withdrawals)) {
            throw new \InvalidArgumentException('non-nullable enable_withdrawals cannot be null');
        }
        $this->container['enable_withdrawals'] = $enable_withdrawals;

        return $this;
    }

    /**
     * Gets enable_internal_transfer
     *
     * @return bool
     */
    public function getEnableInternalTransfer()
    {
        return $this->container['enable_internal_transfer'];
    }

    /**
     * Sets enable_internal_transfer
     *
     * @param bool $enable_internal_transfer This option authorizes this key to transfer funds between your master account and your sub account instantly
     *
     * @return self
     */
    public function setEnableInternalTransfer($enable_internal_transfer)
    {
        if (is_null($enable_internal_transfer)) {
            throw new \InvalidArgumentException('non-nullable enable_internal_transfer cannot be null');
        }
        $this->container['enable_internal_transfer'] = $enable_internal_transfer;

        return $this;
    }

    /**
     * Gets permits_universal_transfer
     *
     * @return bool
     */
    public function getPermitsUniversalTransfer()
    {
        return $this->container['permits_universal_transfer'];
    }

    /**
     * Sets permits_universal_transfer
     *
     * @param bool $permits_universal_transfer Authorizes this key to be used for a dedicated universal transfer API to transfer multiple supported currencies. Each business's own transfer API rights are not affected by this authorization
     *
     * @return self
     */
    public function setPermitsUniversalTransfer($permits_universal_transfer)
    {
        if (is_null($permits_universal_transfer)) {
            throw new \InvalidArgumentException('non-nullable permits_universal_transfer cannot be null');
        }
        $this->container['permits_universal_transfer'] = $permits_universal_transfer;

        return $this;
    }

    /**
     * Gets enable_vanilla_options
     *
     * @return bool
     */
    public function getEnableVanillaOptions()
    {
        return $this->container['enable_vanilla_options'];
    }

    /**
     * Sets enable_vanilla_options
     *
     * @param bool $enable_vanilla_options Authorizes this key to Vanilla options trading
     *
     * @return self
     */
    public function setEnableVanillaOptions($enable_vanilla_options)
    {
        if (is_null($enable_vanilla_options)) {
            throw new \InvalidArgumentException('non-nullable enable_vanilla_options cannot be null');
        }
        $this->container['enable_vanilla_options'] = $enable_vanilla_options;

        return $this;
    }

    /**
     * Gets enable_reading
     *
     * @return bool
     */
    public function getEnableReading()
    {
        return $this->container['enable_reading'];
    }

    /**
     * Sets enable_reading
     *
     * @param bool $enable_reading enable_reading
     *
     * @return self
     */
    public function setEnableReading($enable_reading)
    {
        if (is_null($enable_reading)) {
            throw new \InvalidArgumentException('non-nullable enable_reading cannot be null');
        }
        $this->container['enable_reading'] = $enable_reading;

        return $this;
    }

    /**
     * Gets enable_futures
     *
     * @return bool
     */
    public function getEnableFutures()
    {
        return $this->container['enable_futures'];
    }

    /**
     * Sets enable_futures
     *
     * @param bool $enable_futures API Key created before your futures account opened does not support futures API service
     *
     * @return self
     */
    public function setEnableFutures($enable_futures)
    {
        if (is_null($enable_futures)) {
            throw new \InvalidArgumentException('non-nullable enable_futures cannot be null');
        }
        $this->container['enable_futures'] = $enable_futures;

        return $this;
    }

    /**
     * Gets enable_margin
     *
     * @return bool
     */
    public function getEnableMargin()
    {
        return $this->container['enable_margin'];
    }

    /**
     * Sets enable_margin
     *
     * @param bool $enable_margin This option can be adjusted after the Cross Margin account transfer is completed
     *
     * @return self
     */
    public function setEnableMargin($enable_margin)
    {
        if (is_null($enable_margin)) {
            throw new \InvalidArgumentException('non-nullable enable_margin cannot be null');
        }
        $this->container['enable_margin'] = $enable_margin;

        return $this;
    }

    /**
     * Gets enable_spot_and_margin_trading
     *
     * @return bool
     */
    public function getEnableSpotAndMarginTrading()
    {
        return $this->container['enable_spot_and_margin_trading'];
    }

    /**
     * Sets enable_spot_and_margin_trading
     *
     * @param bool $enable_spot_and_margin_trading enable_spot_and_margin_trading
     *
     * @return self
     */
    public function setEnableSpotAndMarginTrading($enable_spot_and_margin_trading)
    {
        if (is_null($enable_spot_and_margin_trading)) {
            throw new \InvalidArgumentException('non-nullable enable_spot_and_margin_trading cannot be null');
        }
        $this->container['enable_spot_and_margin_trading'] = $enable_spot_and_margin_trading;

        return $this;
    }

    /**
     * Gets trading_authority_expiration_time
     *
     * @return int
     */
    public function getTradingAuthorityExpirationTime()
    {
        return $this->container['trading_authority_expiration_time'];
    }

    /**
     * Sets trading_authority_expiration_time
     *
     * @param int $trading_authority_expiration_time Expiration time for spot and margin trading permission
     *
     * @return self
     */
    public function setTradingAuthorityExpirationTime($trading_authority_expiration_time)
    {
        if (is_null($trading_authority_expiration_time)) {
            throw new \InvalidArgumentException('non-nullable trading_authority_expiration_time cannot be null');
        }
        $this->container['trading_authority_expiration_time'] = $trading_authority_expiration_time;

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


