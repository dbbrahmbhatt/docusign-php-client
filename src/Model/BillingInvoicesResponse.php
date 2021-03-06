<?php
/**
 * BillingInvoicesResponse
 *
 * PHP version 5
 *
 * @category Class
 * @package  DocuSign\eSign
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * DocuSign REST API
 *
 * The DocuSign REST API provides you with a powerful, convenient, and simple Web services API for interacting with DocuSign.
 *
 * OpenAPI spec version: v2.1
 * Contact: devcenter@docusign.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace DocuSign\eSign\Model;

use \ArrayAccess;

/**
 * BillingInvoicesResponse Class Doc Comment
 *
 * @category    Class
 * @description Defines a billing invoice response object.
 * @package     DocuSign\eSign
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class BillingInvoicesResponse implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'billingInvoicesResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'billing_invoices' => '\DocuSign\eSign\Model\BillingInvoice[]',
        'next_uri' => 'string',
        'previous_uri' => 'string'
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'billing_invoices' => 'billingInvoices',
        'next_uri' => 'nextUri',
        'previous_uri' => 'previousUri'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'billing_invoices' => 'setBillingInvoices',
        'next_uri' => 'setNextUri',
        'previous_uri' => 'setPreviousUri'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'billing_invoices' => 'getBillingInvoices',
        'next_uri' => 'getNextUri',
        'previous_uri' => 'getPreviousUri'
    ];

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    public static function setters()
    {
        return self::$setters;
    }

    public static function getters()
    {
        return self::$getters;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['billing_invoices'] = isset($data['billing_invoices']) ? $data['billing_invoices'] : null;
        $this->container['next_uri'] = isset($data['next_uri']) ? $data['next_uri'] : null;
        $this->container['previous_uri'] = isset($data['previous_uri']) ? $data['previous_uri'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];
        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properteis are valid
     */
    public function valid()
    {
        return true;
    }


    /**
     * Gets billing_invoices
     * @return \DocuSign\eSign\Model\BillingInvoice[]
     */
    public function getBillingInvoices()
    {
        return $this->container['billing_invoices'];
    }

    /**
     * Sets billing_invoices
     * @param \DocuSign\eSign\Model\BillingInvoice[] $billing_invoices Reserved: TBD
     * @return $this
     */
    public function setBillingInvoices($billing_invoices)
    {
        $this->container['billing_invoices'] = $billing_invoices;

        return $this;
    }

    /**
     * Gets next_uri
     * @return string
     */
    public function getNextUri()
    {
        return $this->container['next_uri'];
    }

    /**
     * Sets next_uri
     * @param string $next_uri The URI to the next chunk of records based on the search request. If the endPosition is the entire results of the search, this is null.
     * @return $this
     */
    public function setNextUri($next_uri)
    {
        $this->container['next_uri'] = $next_uri;

        return $this;
    }

    /**
     * Gets previous_uri
     * @return string
     */
    public function getPreviousUri()
    {
        return $this->container['previous_uri'];
    }

    /**
     * Sets previous_uri
     * @param string $previous_uri The postal code for the billing address.
     * @return $this
     */
    public function setPreviousUri($previous_uri)
    {
        $this->container['previous_uri'] = $previous_uri;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
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
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\DocuSign\eSign\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\DocuSign\eSign\ObjectSerializer::sanitizeForSerialization($this));
    }
}


