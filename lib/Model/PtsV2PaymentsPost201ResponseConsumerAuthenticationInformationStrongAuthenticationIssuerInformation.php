<?php
/**
 * PtsV2PaymentsPost201ResponseConsumerAuthenticationInformationStrongAuthenticationIssuerInformation
 *
 * PHP version 5
 *
 * @category Class
 * @package  CyberSource
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * CyberSource Merged Spec
 *
 * All CyberSource API specs merged together. These are available at https://developer.cybersource.com/api/reference/api-reference.html
 *
 * OpenAPI spec version: 0.0.1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace CyberSource\Model;

use \ArrayAccess;

/**
 * PtsV2PaymentsPost201ResponseConsumerAuthenticationInformationStrongAuthenticationIssuerInformation Class Doc Comment
 *
 * @category    Class
 * @package     CyberSource
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class PtsV2PaymentsPost201ResponseConsumerAuthenticationInformationStrongAuthenticationIssuerInformation implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'ptsV2PaymentsPost201Response_consumerAuthenticationInformation_strongAuthentication_issuerInformation';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'riskAnalysisExemptionResult' => 'string',
        'trustedMerchantExemptionResult' => 'string',
        'lowValueExemptionResult' => 'string',
        'secureCorporatePaymentResult' => 'string',
        'transactionRiskAnalysisExemptionResult' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'riskAnalysisExemptionResult' => null,
        'trustedMerchantExemptionResult' => null,
        'lowValueExemptionResult' => null,
        'secureCorporatePaymentResult' => null,
        'transactionRiskAnalysisExemptionResult' => null
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'riskAnalysisExemptionResult' => 'riskAnalysisExemptionResult',
        'trustedMerchantExemptionResult' => 'trustedMerchantExemptionResult',
        'lowValueExemptionResult' => 'lowValueExemptionResult',
        'secureCorporatePaymentResult' => 'secureCorporatePaymentResult',
        'transactionRiskAnalysisExemptionResult' => 'transactionRiskAnalysisExemptionResult'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'riskAnalysisExemptionResult' => 'setRiskAnalysisExemptionResult',
        'trustedMerchantExemptionResult' => 'setTrustedMerchantExemptionResult',
        'lowValueExemptionResult' => 'setLowValueExemptionResult',
        'secureCorporatePaymentResult' => 'setSecureCorporatePaymentResult',
        'transactionRiskAnalysisExemptionResult' => 'setTransactionRiskAnalysisExemptionResult'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'riskAnalysisExemptionResult' => 'getRiskAnalysisExemptionResult',
        'trustedMerchantExemptionResult' => 'getTrustedMerchantExemptionResult',
        'lowValueExemptionResult' => 'getLowValueExemptionResult',
        'secureCorporatePaymentResult' => 'getSecureCorporatePaymentResult',
        'transactionRiskAnalysisExemptionResult' => 'getTransactionRiskAnalysisExemptionResult'
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
        $this->container['riskAnalysisExemptionResult'] = isset($data['riskAnalysisExemptionResult']) ? $data['riskAnalysisExemptionResult'] : null;
        $this->container['trustedMerchantExemptionResult'] = isset($data['trustedMerchantExemptionResult']) ? $data['trustedMerchantExemptionResult'] : null;
        $this->container['lowValueExemptionResult'] = isset($data['lowValueExemptionResult']) ? $data['lowValueExemptionResult'] : null;
        $this->container['secureCorporatePaymentResult'] = isset($data['secureCorporatePaymentResult']) ? $data['secureCorporatePaymentResult'] : null;
        $this->container['transactionRiskAnalysisExemptionResult'] = isset($data['transactionRiskAnalysisExemptionResult']) ? $data['transactionRiskAnalysisExemptionResult'] : null;
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
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        return true;
    }


    /**
     * Gets riskAnalysisExemptionResult
     * @return string
     */
    public function getRiskAnalysisExemptionResult()
    {
        return $this->container['riskAnalysisExemptionResult'];
    }

    /**
     * Sets riskAnalysisExemptionResult
     * @param string $riskAnalysisExemptionResult Possible values: Visa Platform Connect - `8401` Merchant not participating in Visa Trusted Listing Program. - `8402` Issuer not participating in Visa Trusted Listing Program. - `8403` Cardholder has not trusted the merchant (supplied by Visa Net). - `8404` Indeterminate or invalid issuer response. - `8473` Cardholder has not trusted the merchant (issuer-supplied). - `8474` Did not meet the exemption criteria (issuer-supplied).  Upto 20 Values may be received in a transaction.
     * @return $this
     */
    public function setRiskAnalysisExemptionResult($riskAnalysisExemptionResult)
    {

        $this->container['riskAnalysisExemptionResult'] = $riskAnalysisExemptionResult;

        return $this;
    }

    /**
     * Gets trustedMerchantExemptionResult
     * @return string
     */
    public function getTrustedMerchantExemptionResult()
    {
        return $this->container['trustedMerchantExemptionResult'];
    }

    /**
     * Sets trustedMerchantExemptionResult
     * @param string $trustedMerchantExemptionResult Possible values: Visa Platform Connect - `2` Trusted merchant exemption validated/honored. - `3` Trusted merchant exemption failed validation/not honored.
     * @return $this
     */
    public function setTrustedMerchantExemptionResult($trustedMerchantExemptionResult)
    {

        $this->container['trustedMerchantExemptionResult'] = $trustedMerchantExemptionResult;

        return $this;
    }

    /**
     * Gets lowValueExemptionResult
     * @return string
     */
    public function getLowValueExemptionResult()
    {
        return $this->container['lowValueExemptionResult'];
    }

    /**
     * Sets lowValueExemptionResult
     * @param string $lowValueExemptionResult This will be the value returned by Visanet when low value exemption has been requested.  Valid values: Visa Platform Connect - `2` Low value exemption validated/honored - `3` Low value exemption failed validation/not honored
     * @return $this
     */
    public function setLowValueExemptionResult($lowValueExemptionResult)
    {

        $this->container['lowValueExemptionResult'] = $lowValueExemptionResult;

        return $this;
    }

    /**
     * Gets secureCorporatePaymentResult
     * @return string
     */
    public function getSecureCorporatePaymentResult()
    {
        return $this->container['secureCorporatePaymentResult'];
    }

    /**
     * Sets secureCorporatePaymentResult
     * @param string $secureCorporatePaymentResult This will be the value returned by Visanet when secure corporate payment (scp) exemption has been requested.  Valid values: Visa Platform Connect - `2` Secure corporate payment exemption validated/honored - `3` Secure corporate payment exemption failed validation/not honored
     * @return $this
     */
    public function setSecureCorporatePaymentResult($secureCorporatePaymentResult)
    {

        $this->container['secureCorporatePaymentResult'] = $secureCorporatePaymentResult;

        return $this;
    }

    /**
     * Gets transactionRiskAnalysisExemptionResult
     * @return string
     */
    public function getTransactionRiskAnalysisExemptionResult()
    {
        return $this->container['transactionRiskAnalysisExemptionResult'];
    }

    /**
     * Sets transactionRiskAnalysisExemptionResult
     * @param string $transactionRiskAnalysisExemptionResult This will be the value returned by Visanet when transaction risk analysis (TRA) exemption has been requested.    Valid values: Visa Platform Connect   - `2` transaction risk analysis (TRA) exemption validated/honored   - `3` transaction risk analysis (TRA) exemption failed validation/not honored
     * @return $this
     */
    public function setTransactionRiskAnalysisExemptionResult($transactionRiskAnalysisExemptionResult)
    {

        $this->container['transactionRiskAnalysisExemptionResult'] = $transactionRiskAnalysisExemptionResult;

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
            return json_encode(\CyberSource\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\CyberSource\ObjectSerializer::sanitizeForSerialization($this));
    }
}

