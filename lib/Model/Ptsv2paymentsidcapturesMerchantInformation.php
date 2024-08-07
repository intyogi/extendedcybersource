<?php
/**
 * Ptsv2paymentsidcapturesMerchantInformation
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
 * Ptsv2paymentsidcapturesMerchantInformation Class Doc Comment
 *
 * @category    Class
 * @package     CyberSource
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Ptsv2paymentsidcapturesMerchantInformation implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'ptsv2paymentsidcaptures_merchantInformation';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'merchantDescriptor' => '\CyberSource\Model\Ptsv2paymentsMerchantInformationMerchantDescriptor',
        'cardAcceptorReferenceNumber' => 'string',
        'categoryCode' => 'int',
        'vatRegistrationNumber' => 'string',
        'serviceFeeDescriptor' => '\CyberSource\Model\Ptsv2paymentsMerchantInformationServiceFeeDescriptor',
        'taxId' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'merchantDescriptor' => null,
        'cardAcceptorReferenceNumber' => null,
        'categoryCode' => null,
        'vatRegistrationNumber' => null,
        'serviceFeeDescriptor' => null,
        'taxId' => null
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
        'merchantDescriptor' => 'merchantDescriptor',
        'cardAcceptorReferenceNumber' => 'cardAcceptorReferenceNumber',
        'categoryCode' => 'categoryCode',
        'vatRegistrationNumber' => 'vatRegistrationNumber',
        'serviceFeeDescriptor' => 'serviceFeeDescriptor',
        'taxId' => 'taxId'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'merchantDescriptor' => 'setMerchantDescriptor',
        'cardAcceptorReferenceNumber' => 'setCardAcceptorReferenceNumber',
        'categoryCode' => 'setCategoryCode',
        'vatRegistrationNumber' => 'setVatRegistrationNumber',
        'serviceFeeDescriptor' => 'setServiceFeeDescriptor',
        'taxId' => 'setTaxId'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'merchantDescriptor' => 'getMerchantDescriptor',
        'cardAcceptorReferenceNumber' => 'getCardAcceptorReferenceNumber',
        'categoryCode' => 'getCategoryCode',
        'vatRegistrationNumber' => 'getVatRegistrationNumber',
        'serviceFeeDescriptor' => 'getServiceFeeDescriptor',
        'taxId' => 'getTaxId'
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
        $this->container['merchantDescriptor'] = isset($data['merchantDescriptor']) ? $data['merchantDescriptor'] : null;
        $this->container['cardAcceptorReferenceNumber'] = isset($data['cardAcceptorReferenceNumber']) ? $data['cardAcceptorReferenceNumber'] : null;
        $this->container['categoryCode'] = isset($data['categoryCode']) ? $data['categoryCode'] : null;
        $this->container['vatRegistrationNumber'] = isset($data['vatRegistrationNumber']) ? $data['vatRegistrationNumber'] : null;
        $this->container['serviceFeeDescriptor'] = isset($data['serviceFeeDescriptor']) ? $data['serviceFeeDescriptor'] : null;
        $this->container['taxId'] = isset($data['taxId']) ? $data['taxId'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if (!is_null($this->container['categoryCode']) && ($this->container['categoryCode'] > 9999)) {
            $invalid_properties[] = "invalid value for 'categoryCode', must be smaller than or equal to 9999.";
        }

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

        if ($this->container['categoryCode'] > 9999) {
            return false;
        }
        return true;
    }


    /**
     * Gets merchantDescriptor
     * @return \CyberSource\Model\Ptsv2paymentsMerchantInformationMerchantDescriptor
     */
    public function getMerchantDescriptor()
    {
        return $this->container['merchantDescriptor'];
    }

    /**
     * Sets merchantDescriptor
     * @param \CyberSource\Model\Ptsv2paymentsMerchantInformationMerchantDescriptor $merchantDescriptor
     * @return $this
     */
    public function setMerchantDescriptor($merchantDescriptor)
    {
        $this->container['merchantDescriptor'] = $merchantDescriptor;

        return $this;
    }

    /**
     * Gets cardAcceptorReferenceNumber
     * @return string
     */
    public function getCardAcceptorReferenceNumber()
    {
        return $this->container['cardAcceptorReferenceNumber'];
    }

    /**
     * Sets cardAcceptorReferenceNumber
     * @param string $cardAcceptorReferenceNumber Reference number that facilitates card acceptor/corporation communication and record keeping.  For processor-specific information, see the `card_acceptor_ref_number` field description in [Level II and Level III Processing Using the SCMP API.](http://apps.cybersource.com/library/documentation/dev_guides/Level_2_3_SCMP_API/html)
     * @return $this
     */
    public function setCardAcceptorReferenceNumber($cardAcceptorReferenceNumber)
    {

        $this->container['cardAcceptorReferenceNumber'] = $cardAcceptorReferenceNumber;

        return $this;
    }

    /**
     * Gets categoryCode
     * @return int
     */
    public function getCategoryCode()
    {
        return $this->container['categoryCode'];
    }

    /**
     * Sets categoryCode
     * @param int $categoryCode The value for this field is a four-digit number that the payment card industry uses to classify merchants into market segments. A payment card company assigned one or more of these values to your business when you started accepting the payment card company’s cards. When you do not include this field in your request, CyberSource uses the value in your CyberSource account.  For processor-specific information, see the `merchant_category_code` field description in [Credit Card Services Using the SCMP API.](http://apps.cybersource.com/library/documentation/dev_guides/CC_Svcs_SCMP_API/html)  #### CyberSource through VisaNet The value for this field corresponds to the following data in the TC 33 capture file5: - Record: CP01 TCR4 - Position: 150-153 - Field: Merchant Category Code
     * @return $this
     */
    public function setCategoryCode($categoryCode)
    {
        if (!is_null($categoryCode) && ($categoryCode > 9999)) {
            throw new \InvalidArgumentException('invalid value for $categoryCode when calling Ptsv2paymentsidcapturesMerchantInformation., must be smaller than or equal to 9999.');
        }

        $this->container['categoryCode'] = $categoryCode;

        return $this;
    }

    /**
     * Gets vatRegistrationNumber
     * @return string
     */
    public function getVatRegistrationNumber()
    {
        return $this->container['vatRegistrationNumber'];
    }

    /**
     * Sets vatRegistrationNumber
     * @param string $vatRegistrationNumber Your government-assigned tax identification number.  #### Tax Calculation Required field for value added tax only. Not applicable to U.S. and Canadian taxes.  #### CyberSource through VisaNet For CtV processors, the maximum length is 20.  For other processor-specific information, see the `merchant_vat_registration_number` field description in [Level II and Level III Processing Using the SCMP API.](http://apps.cybersource.com/library/documentation/dev_guides/Level_2_3_SCMP_API/html)
     * @return $this
     */
    public function setVatRegistrationNumber($vatRegistrationNumber)
    {

        $this->container['vatRegistrationNumber'] = $vatRegistrationNumber;

        return $this;
    }

    /**
     * Gets serviceFeeDescriptor
     * @return \CyberSource\Model\Ptsv2paymentsMerchantInformationServiceFeeDescriptor
     */
    public function getServiceFeeDescriptor()
    {
        return $this->container['serviceFeeDescriptor'];
    }

    /**
     * Sets serviceFeeDescriptor
     * @param \CyberSource\Model\Ptsv2paymentsMerchantInformationServiceFeeDescriptor $serviceFeeDescriptor
     * @return $this
     */
    public function setServiceFeeDescriptor($serviceFeeDescriptor)
    {
        $this->container['serviceFeeDescriptor'] = $serviceFeeDescriptor;

        return $this;
    }

    /**
     * Gets taxId
     * @return string
     */
    public function getTaxId()
    {
        return $this->container['taxId'];
    }

    /**
     * Sets taxId
     * @param string $taxId Your Cadastro Nacional da Pessoa Jurídica (CNPJ) number.  This field is supported only for BNDES transactions on CyberSource through VisaNet.  The value for this field corresponds to the following data in the TC 33 capture file5: - Record: CP07 TCR6 - Position: 40-59 - Field: BNDES Reference Field 1  For details, see `bill_merchant_tax_id` field description in the [Credit Card Services Using the SCMP API.](https://apps.cybersource.com/library/documentation/dev_guides/CC_Svcs_SCMP_API/html/)
     * @return $this
     */
    public function setTaxId($taxId)
    {

        $this->container['taxId'] = $taxId;

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


