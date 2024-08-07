<?php
/**
 * Ptsv2paymentsidreversalsClientReferenceInformationPartner
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
 * Ptsv2paymentsidreversalsClientReferenceInformationPartner Class Doc Comment
 *
 * @category    Class
 * @package     CyberSource
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Ptsv2paymentsidreversalsClientReferenceInformationPartner implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'ptsv2paymentsidreversals_clientReferenceInformation_partner';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'developerId' => 'string',
        'solutionId' => 'string',
        'thirdPartyCertificationNumber' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'developerId' => null,
        'solutionId' => null,
        'thirdPartyCertificationNumber' => null
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
        'developerId' => 'developerId',
        'solutionId' => 'solutionId',
        'thirdPartyCertificationNumber' => 'thirdPartyCertificationNumber'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'developerId' => 'setDeveloperId',
        'solutionId' => 'setSolutionId',
        'thirdPartyCertificationNumber' => 'setThirdPartyCertificationNumber'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'developerId' => 'getDeveloperId',
        'solutionId' => 'getSolutionId',
        'thirdPartyCertificationNumber' => 'getThirdPartyCertificationNumber'
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
        $this->container['developerId'] = isset($data['developerId']) ? $data['developerId'] : null;
        $this->container['solutionId'] = isset($data['solutionId']) ? $data['solutionId'] : null;
        $this->container['thirdPartyCertificationNumber'] = isset($data['thirdPartyCertificationNumber']) ? $data['thirdPartyCertificationNumber'] : null;
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
     * Gets developerId
     * @return string
     */
    public function getDeveloperId()
    {
        return $this->container['developerId'];
    }

    /**
     * Sets developerId
     * @param string $developerId Identifier for the developer that helped integrate a partner solution to CyberSource.  Send this value in all requests that are sent through the partner solutions built by that developer. CyberSource assigns the ID to the developer.  **Note** When you see a developer ID of 999 in reports, the developer ID that was submitted is incorrect.
     * @return $this
     */
    public function setDeveloperId($developerId)
    {

        $this->container['developerId'] = $developerId;

        return $this;
    }

    /**
     * Gets solutionId
     * @return string
     */
    public function getSolutionId()
    {
        return $this->container['solutionId'];
    }

    /**
     * Sets solutionId
     * @param string $solutionId Identifier for the partner that is integrated to CyberSource.  Send this value in all requests that are sent through the partner solution. CyberSource assigns the ID to the partner.  **Note** When you see a solutionId of 999 in reports, the solutionId that was submitted is incorrect.
     * @return $this
     */
    public function setSolutionId($solutionId)
    {

        $this->container['solutionId'] = $solutionId;

        return $this;
    }

    /**
     * Gets thirdPartyCertificationNumber
     * @return string
     */
    public function getThirdPartyCertificationNumber()
    {
        return $this->container['thirdPartyCertificationNumber'];
    }

    /**
     * Sets thirdPartyCertificationNumber
     * @param string $thirdPartyCertificationNumber Value that identifies the application vendor and application version for a third party gateway. CyberSource provides you with this value during testing and validation. This field is supported only on CyberSource through VisaNet.  #### Used by **Authorization, Authorization Reversal, Capture, Credit, Incremental Authorization, and Void** Optional field.  #### PIN debit Required field for PIN debit credit, PIN debit purchase, or PIN debit reversal request.
     * @return $this
     */
    public function setThirdPartyCertificationNumber($thirdPartyCertificationNumber)
    {

        $this->container['thirdPartyCertificationNumber'] = $thirdPartyCertificationNumber;

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


