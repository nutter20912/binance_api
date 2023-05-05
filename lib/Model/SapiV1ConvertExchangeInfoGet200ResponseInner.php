<?php
/**
 * SapiV1ConvertExchangeInfoGet200ResponseInner
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
 * SapiV1ConvertExchangeInfoGet200ResponseInner Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class SapiV1ConvertExchangeInfoGet200ResponseInner implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = '_sapi_v1_convert_exchangeInfo_get_200_response_inner';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'from_asset' => 'string',
        'to_asset' => 'string',
        'from_asset_min_amount' => 'string',
        'from_asset_max_amount' => 'string',
        'to_asset_min_amount' => 'string',
        'to_asset_max_amount' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'from_asset' => null,
        'to_asset' => null,
        'from_asset_min_amount' => null,
        'from_asset_max_amount' => null,
        'to_asset_min_amount' => null,
        'to_asset_max_amount' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'from_asset' => false,
		'to_asset' => false,
		'from_asset_min_amount' => false,
		'from_asset_max_amount' => false,
		'to_asset_min_amount' => false,
		'to_asset_max_amount' => false
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
        'from_asset' => 'fromAsset',
        'to_asset' => 'toAsset',
        'from_asset_min_amount' => 'fromAssetMinAmount',
        'from_asset_max_amount' => 'fromAssetMaxAmount',
        'to_asset_min_amount' => 'toAssetMinAmount',
        'to_asset_max_amount' => 'toAssetMaxAmount'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'from_asset' => 'setFromAsset',
        'to_asset' => 'setToAsset',
        'from_asset_min_amount' => 'setFromAssetMinAmount',
        'from_asset_max_amount' => 'setFromAssetMaxAmount',
        'to_asset_min_amount' => 'setToAssetMinAmount',
        'to_asset_max_amount' => 'setToAssetMaxAmount'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'from_asset' => 'getFromAsset',
        'to_asset' => 'getToAsset',
        'from_asset_min_amount' => 'getFromAssetMinAmount',
        'from_asset_max_amount' => 'getFromAssetMaxAmount',
        'to_asset_min_amount' => 'getToAssetMinAmount',
        'to_asset_max_amount' => 'getToAssetMaxAmount'
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
        $this->setIfExists('from_asset', $data ?? [], null);
        $this->setIfExists('to_asset', $data ?? [], null);
        $this->setIfExists('from_asset_min_amount', $data ?? [], null);
        $this->setIfExists('from_asset_max_amount', $data ?? [], null);
        $this->setIfExists('to_asset_min_amount', $data ?? [], null);
        $this->setIfExists('to_asset_max_amount', $data ?? [], null);
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

        if ($this->container['from_asset'] === null) {
            $invalidProperties[] = "'from_asset' can't be null";
        }
        if ($this->container['to_asset'] === null) {
            $invalidProperties[] = "'to_asset' can't be null";
        }
        if ($this->container['from_asset_min_amount'] === null) {
            $invalidProperties[] = "'from_asset_min_amount' can't be null";
        }
        if ($this->container['from_asset_max_amount'] === null) {
            $invalidProperties[] = "'from_asset_max_amount' can't be null";
        }
        if ($this->container['to_asset_min_amount'] === null) {
            $invalidProperties[] = "'to_asset_min_amount' can't be null";
        }
        if ($this->container['to_asset_max_amount'] === null) {
            $invalidProperties[] = "'to_asset_max_amount' can't be null";
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
     * Gets from_asset
     *
     * @return string
     */
    public function getFromAsset()
    {
        return $this->container['from_asset'];
    }

    /**
     * Sets from_asset
     *
     * @param string $from_asset from_asset
     *
     * @return self
     */
    public function setFromAsset($from_asset)
    {
        if (is_null($from_asset)) {
            throw new \InvalidArgumentException('non-nullable from_asset cannot be null');
        }
        $this->container['from_asset'] = $from_asset;

        return $this;
    }

    /**
     * Gets to_asset
     *
     * @return string
     */
    public function getToAsset()
    {
        return $this->container['to_asset'];
    }

    /**
     * Sets to_asset
     *
     * @param string $to_asset to_asset
     *
     * @return self
     */
    public function setToAsset($to_asset)
    {
        if (is_null($to_asset)) {
            throw new \InvalidArgumentException('non-nullable to_asset cannot be null');
        }
        $this->container['to_asset'] = $to_asset;

        return $this;
    }

    /**
     * Gets from_asset_min_amount
     *
     * @return string
     */
    public function getFromAssetMinAmount()
    {
        return $this->container['from_asset_min_amount'];
    }

    /**
     * Sets from_asset_min_amount
     *
     * @param string $from_asset_min_amount from_asset_min_amount
     *
     * @return self
     */
    public function setFromAssetMinAmount($from_asset_min_amount)
    {
        if (is_null($from_asset_min_amount)) {
            throw new \InvalidArgumentException('non-nullable from_asset_min_amount cannot be null');
        }
        $this->container['from_asset_min_amount'] = $from_asset_min_amount;

        return $this;
    }

    /**
     * Gets from_asset_max_amount
     *
     * @return string
     */
    public function getFromAssetMaxAmount()
    {
        return $this->container['from_asset_max_amount'];
    }

    /**
     * Sets from_asset_max_amount
     *
     * @param string $from_asset_max_amount from_asset_max_amount
     *
     * @return self
     */
    public function setFromAssetMaxAmount($from_asset_max_amount)
    {
        if (is_null($from_asset_max_amount)) {
            throw new \InvalidArgumentException('non-nullable from_asset_max_amount cannot be null');
        }
        $this->container['from_asset_max_amount'] = $from_asset_max_amount;

        return $this;
    }

    /**
     * Gets to_asset_min_amount
     *
     * @return string
     */
    public function getToAssetMinAmount()
    {
        return $this->container['to_asset_min_amount'];
    }

    /**
     * Sets to_asset_min_amount
     *
     * @param string $to_asset_min_amount to_asset_min_amount
     *
     * @return self
     */
    public function setToAssetMinAmount($to_asset_min_amount)
    {
        if (is_null($to_asset_min_amount)) {
            throw new \InvalidArgumentException('non-nullable to_asset_min_amount cannot be null');
        }
        $this->container['to_asset_min_amount'] = $to_asset_min_amount;

        return $this;
    }

    /**
     * Gets to_asset_max_amount
     *
     * @return string
     */
    public function getToAssetMaxAmount()
    {
        return $this->container['to_asset_max_amount'];
    }

    /**
     * Sets to_asset_max_amount
     *
     * @param string $to_asset_max_amount to_asset_max_amount
     *
     * @return self
     */
    public function setToAssetMaxAmount($to_asset_max_amount)
    {
        if (is_null($to_asset_max_amount)) {
            throw new \InvalidArgumentException('non-nullable to_asset_max_amount cannot be null');
        }
        $this->container['to_asset_max_amount'] = $to_asset_max_amount;

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


