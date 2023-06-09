<?php
/**
 * SapiV1LoanCollateralDataGet200ResponseRowsInner
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
 * SapiV1LoanCollateralDataGet200ResponseRowsInner Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class SapiV1LoanCollateralDataGet200ResponseRowsInner implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = '_sapi_v1_loan_collateral_data_get_200_response_rows_inner';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'collateral_coin' => 'string',
        'initial_ltv' => 'string',
        'margin_call_ltv' => 'string',
        'liquidation_ltv' => 'string',
        'max_limit' => 'string',
        'vip_level' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'collateral_coin' => null,
        'initial_ltv' => null,
        'margin_call_ltv' => null,
        'liquidation_ltv' => null,
        'max_limit' => null,
        'vip_level' => 'int32'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'collateral_coin' => false,
		'initial_ltv' => false,
		'margin_call_ltv' => false,
		'liquidation_ltv' => false,
		'max_limit' => false,
		'vip_level' => false
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
        'collateral_coin' => 'collateralCoin',
        'initial_ltv' => 'initialLTV',
        'margin_call_ltv' => 'marginCallLTV',
        'liquidation_ltv' => 'liquidationLTV',
        'max_limit' => 'maxLimit',
        'vip_level' => 'vipLevel'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'collateral_coin' => 'setCollateralCoin',
        'initial_ltv' => 'setInitialLtv',
        'margin_call_ltv' => 'setMarginCallLtv',
        'liquidation_ltv' => 'setLiquidationLtv',
        'max_limit' => 'setMaxLimit',
        'vip_level' => 'setVipLevel'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'collateral_coin' => 'getCollateralCoin',
        'initial_ltv' => 'getInitialLtv',
        'margin_call_ltv' => 'getMarginCallLtv',
        'liquidation_ltv' => 'getLiquidationLtv',
        'max_limit' => 'getMaxLimit',
        'vip_level' => 'getVipLevel'
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
        $this->setIfExists('collateral_coin', $data ?? [], null);
        $this->setIfExists('initial_ltv', $data ?? [], null);
        $this->setIfExists('margin_call_ltv', $data ?? [], null);
        $this->setIfExists('liquidation_ltv', $data ?? [], null);
        $this->setIfExists('max_limit', $data ?? [], null);
        $this->setIfExists('vip_level', $data ?? [], null);
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

        if ($this->container['collateral_coin'] === null) {
            $invalidProperties[] = "'collateral_coin' can't be null";
        }
        if ($this->container['initial_ltv'] === null) {
            $invalidProperties[] = "'initial_ltv' can't be null";
        }
        if ($this->container['margin_call_ltv'] === null) {
            $invalidProperties[] = "'margin_call_ltv' can't be null";
        }
        if ($this->container['liquidation_ltv'] === null) {
            $invalidProperties[] = "'liquidation_ltv' can't be null";
        }
        if ($this->container['max_limit'] === null) {
            $invalidProperties[] = "'max_limit' can't be null";
        }
        if ($this->container['vip_level'] === null) {
            $invalidProperties[] = "'vip_level' can't be null";
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
     * Gets initial_ltv
     *
     * @return string
     */
    public function getInitialLtv()
    {
        return $this->container['initial_ltv'];
    }

    /**
     * Sets initial_ltv
     *
     * @param string $initial_ltv initial_ltv
     *
     * @return self
     */
    public function setInitialLtv($initial_ltv)
    {
        if (is_null($initial_ltv)) {
            throw new \InvalidArgumentException('non-nullable initial_ltv cannot be null');
        }
        $this->container['initial_ltv'] = $initial_ltv;

        return $this;
    }

    /**
     * Gets margin_call_ltv
     *
     * @return string
     */
    public function getMarginCallLtv()
    {
        return $this->container['margin_call_ltv'];
    }

    /**
     * Sets margin_call_ltv
     *
     * @param string $margin_call_ltv margin_call_ltv
     *
     * @return self
     */
    public function setMarginCallLtv($margin_call_ltv)
    {
        if (is_null($margin_call_ltv)) {
            throw new \InvalidArgumentException('non-nullable margin_call_ltv cannot be null');
        }
        $this->container['margin_call_ltv'] = $margin_call_ltv;

        return $this;
    }

    /**
     * Gets liquidation_ltv
     *
     * @return string
     */
    public function getLiquidationLtv()
    {
        return $this->container['liquidation_ltv'];
    }

    /**
     * Sets liquidation_ltv
     *
     * @param string $liquidation_ltv liquidation_ltv
     *
     * @return self
     */
    public function setLiquidationLtv($liquidation_ltv)
    {
        if (is_null($liquidation_ltv)) {
            throw new \InvalidArgumentException('non-nullable liquidation_ltv cannot be null');
        }
        $this->container['liquidation_ltv'] = $liquidation_ltv;

        return $this;
    }

    /**
     * Gets max_limit
     *
     * @return string
     */
    public function getMaxLimit()
    {
        return $this->container['max_limit'];
    }

    /**
     * Sets max_limit
     *
     * @param string $max_limit max_limit
     *
     * @return self
     */
    public function setMaxLimit($max_limit)
    {
        if (is_null($max_limit)) {
            throw new \InvalidArgumentException('non-nullable max_limit cannot be null');
        }
        $this->container['max_limit'] = $max_limit;

        return $this;
    }

    /**
     * Gets vip_level
     *
     * @return int
     */
    public function getVipLevel()
    {
        return $this->container['vip_level'];
    }

    /**
     * Sets vip_level
     *
     * @param int $vip_level vip_level
     *
     * @return self
     */
    public function setVipLevel($vip_level)
    {
        if (is_null($vip_level)) {
            throw new \InvalidArgumentException('non-nullable vip_level cannot be null');
        }
        $this->container['vip_level'] = $vip_level;

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


