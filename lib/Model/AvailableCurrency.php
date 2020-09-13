<?php
/**
 * AvailableCurrency
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * currencyapi
 *
 * The currency APIs help you retrieve exchange rates and convert prices between currencies easily.
 *
 * OpenAPI spec version: v1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.3.1
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * AvailableCurrency Class Doc Comment
 *
 * @category Class
 * @description Details of a specific currency
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AvailableCurrency implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'AvailableCurrency';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'iso_currency_code' => 'string',
        'currency_symbol' => 'string',
        'currency_english_name' => 'string',
        'country_name' => 'string',
        'country_three_letter_code' => 'string',
        'country_iso_two_letter_code' => 'string',
        'is_european_union_member' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'iso_currency_code' => null,
        'currency_symbol' => null,
        'currency_english_name' => null,
        'country_name' => null,
        'country_three_letter_code' => null,
        'country_iso_two_letter_code' => null,
        'is_european_union_member' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'iso_currency_code' => 'ISOCurrencyCode',
        'currency_symbol' => 'CurrencySymbol',
        'currency_english_name' => 'CurrencyEnglishName',
        'country_name' => 'CountryName',
        'country_three_letter_code' => 'CountryThreeLetterCode',
        'country_iso_two_letter_code' => 'CountryISOTwoLetterCode',
        'is_european_union_member' => 'IsEuropeanUnionMember'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'iso_currency_code' => 'setIsoCurrencyCode',
        'currency_symbol' => 'setCurrencySymbol',
        'currency_english_name' => 'setCurrencyEnglishName',
        'country_name' => 'setCountryName',
        'country_three_letter_code' => 'setCountryThreeLetterCode',
        'country_iso_two_letter_code' => 'setCountryIsoTwoLetterCode',
        'is_european_union_member' => 'setIsEuropeanUnionMember'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'iso_currency_code' => 'getIsoCurrencyCode',
        'currency_symbol' => 'getCurrencySymbol',
        'currency_english_name' => 'getCurrencyEnglishName',
        'country_name' => 'getCountryName',
        'country_three_letter_code' => 'getCountryThreeLetterCode',
        'country_iso_two_letter_code' => 'getCountryIsoTwoLetterCode',
        'is_european_union_member' => 'getIsEuropeanUnionMember'
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
        return self::$swaggerModelName;
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
        $this->container['iso_currency_code'] = isset($data['iso_currency_code']) ? $data['iso_currency_code'] : null;
        $this->container['currency_symbol'] = isset($data['currency_symbol']) ? $data['currency_symbol'] : null;
        $this->container['currency_english_name'] = isset($data['currency_english_name']) ? $data['currency_english_name'] : null;
        $this->container['country_name'] = isset($data['country_name']) ? $data['country_name'] : null;
        $this->container['country_three_letter_code'] = isset($data['country_three_letter_code']) ? $data['country_three_letter_code'] : null;
        $this->container['country_iso_two_letter_code'] = isset($data['country_iso_two_letter_code']) ? $data['country_iso_two_letter_code'] : null;
        $this->container['is_european_union_member'] = isset($data['is_european_union_member']) ? $data['is_european_union_member'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

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

        return true;
    }


    /**
     * Gets iso_currency_code
     *
     * @return string
     */
    public function getIsoCurrencyCode()
    {
        return $this->container['iso_currency_code'];
    }

    /**
     * Sets iso_currency_code
     *
     * @param string $iso_currency_code ISO 4217 currency three-letter code associated with the country
     *
     * @return $this
     */
    public function setIsoCurrencyCode($iso_currency_code)
    {
        $this->container['iso_currency_code'] = $iso_currency_code;

        return $this;
    }

    /**
     * Gets currency_symbol
     *
     * @return string
     */
    public function getCurrencySymbol()
    {
        return $this->container['currency_symbol'];
    }

    /**
     * Sets currency_symbol
     *
     * @param string $currency_symbol Symbol associated with the currency
     *
     * @return $this
     */
    public function setCurrencySymbol($currency_symbol)
    {
        $this->container['currency_symbol'] = $currency_symbol;

        return $this;
    }

    /**
     * Gets currency_english_name
     *
     * @return string
     */
    public function getCurrencyEnglishName()
    {
        return $this->container['currency_english_name'];
    }

    /**
     * Sets currency_english_name
     *
     * @param string $currency_english_name Full name of the currency
     *
     * @return $this
     */
    public function setCurrencyEnglishName($currency_english_name)
    {
        $this->container['currency_english_name'] = $currency_english_name;

        return $this;
    }

    /**
     * Gets country_name
     *
     * @return string
     */
    public function getCountryName()
    {
        return $this->container['country_name'];
    }

    /**
     * Sets country_name
     *
     * @param string $country_name Name of the country
     *
     * @return $this
     */
    public function setCountryName($country_name)
    {
        $this->container['country_name'] = $country_name;

        return $this;
    }

    /**
     * Gets country_three_letter_code
     *
     * @return string
     */
    public function getCountryThreeLetterCode()
    {
        return $this->container['country_three_letter_code'];
    }

    /**
     * Sets country_three_letter_code
     *
     * @param string $country_three_letter_code Three-letter ISO 3166-1 country code
     *
     * @return $this
     */
    public function setCountryThreeLetterCode($country_three_letter_code)
    {
        $this->container['country_three_letter_code'] = $country_three_letter_code;

        return $this;
    }

    /**
     * Gets country_iso_two_letter_code
     *
     * @return string
     */
    public function getCountryIsoTwoLetterCode()
    {
        return $this->container['country_iso_two_letter_code'];
    }

    /**
     * Sets country_iso_two_letter_code
     *
     * @param string $country_iso_two_letter_code Two-letter ISO 3166-1 country code
     *
     * @return $this
     */
    public function setCountryIsoTwoLetterCode($country_iso_two_letter_code)
    {
        $this->container['country_iso_two_letter_code'] = $country_iso_two_letter_code;

        return $this;
    }

    /**
     * Gets is_european_union_member
     *
     * @return bool
     */
    public function getIsEuropeanUnionMember()
    {
        return $this->container['is_european_union_member'];
    }

    /**
     * Sets is_european_union_member
     *
     * @param bool $is_european_union_member True if this country is currently a member of the European Union (EU), false otherwise
     *
     * @return $this
     */
    public function setIsEuropeanUnionMember($is_european_union_member)
    {
        $this->container['is_european_union_member'] = $is_european_union_member;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
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
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}

