<?php
/**
 * Lti13PlatformConfigurationSchema
 *
 * PHP version 5
 *
 * @category Class
 * @package  RusticiSoftware\Engine\V2
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Rustici Engine API
 *
 * Rustici Engine API
 *
 * OpenAPI spec version: 2.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.39
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace RusticiSoftware\Engine\V2\Model;

use \ArrayAccess;
use \RusticiSoftware\Engine\V2\ObjectSerializer;

/**
 * Lti13PlatformConfigurationSchema Class Doc Comment
 *
 * @category Class
 * @package  RusticiSoftware\Engine\V2
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Lti13PlatformConfigurationSchema implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Lti13PlatformConfigurationSchema';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'client_id' => 'string',
        'platform_issuer_identifier' => 'string',
        'deployment_id' => 'string',
        'oidc_authorization_endpoint' => 'string',
        'json_web_key_set_url' => 'string',
        'access_token_url' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'client_id' => null,
        'platform_issuer_identifier' => null,
        'deployment_id' => null,
        'oidc_authorization_endpoint' => null,
        'json_web_key_set_url' => null,
        'access_token_url' => null
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
        'client_id' => 'clientId',
        'platform_issuer_identifier' => 'platformIssuerIdentifier',
        'deployment_id' => 'deploymentId',
        'oidc_authorization_endpoint' => 'oidcAuthorizationEndpoint',
        'json_web_key_set_url' => 'jsonWebKeySetUrl',
        'access_token_url' => 'accessTokenUrl'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'client_id' => 'setClientId',
        'platform_issuer_identifier' => 'setPlatformIssuerIdentifier',
        'deployment_id' => 'setDeploymentId',
        'oidc_authorization_endpoint' => 'setOidcAuthorizationEndpoint',
        'json_web_key_set_url' => 'setJsonWebKeySetUrl',
        'access_token_url' => 'setAccessTokenUrl'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'client_id' => 'getClientId',
        'platform_issuer_identifier' => 'getPlatformIssuerIdentifier',
        'deployment_id' => 'getDeploymentId',
        'oidc_authorization_endpoint' => 'getOidcAuthorizationEndpoint',
        'json_web_key_set_url' => 'getJsonWebKeySetUrl',
        'access_token_url' => 'getAccessTokenUrl'
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
        $this->container['client_id'] = isset($data['client_id']) ? $data['client_id'] : null;
        $this->container['platform_issuer_identifier'] = isset($data['platform_issuer_identifier']) ? $data['platform_issuer_identifier'] : null;
        $this->container['deployment_id'] = isset($data['deployment_id']) ? $data['deployment_id'] : null;
        $this->container['oidc_authorization_endpoint'] = isset($data['oidc_authorization_endpoint']) ? $data['oidc_authorization_endpoint'] : null;
        $this->container['json_web_key_set_url'] = isset($data['json_web_key_set_url']) ? $data['json_web_key_set_url'] : null;
        $this->container['access_token_url'] = isset($data['access_token_url']) ? $data['access_token_url'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['client_id'] === null) {
            $invalidProperties[] = "'client_id' can't be null";
        }
        if ($this->container['platform_issuer_identifier'] === null) {
            $invalidProperties[] = "'platform_issuer_identifier' can't be null";
        }
        if ($this->container['deployment_id'] === null) {
            $invalidProperties[] = "'deployment_id' can't be null";
        }
        if ($this->container['oidc_authorization_endpoint'] === null) {
            $invalidProperties[] = "'oidc_authorization_endpoint' can't be null";
        }
        if ($this->container['json_web_key_set_url'] === null) {
            $invalidProperties[] = "'json_web_key_set_url' can't be null";
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
     * Gets client_id
     *
     * @return string
     */
    public function getClientId()
    {
        return $this->container['client_id'];
    }

    /**
     * Sets client_id
     *
     * @param string $client_id OAuth2 client Id for this tool
     *
     * @return $this
     */
    public function setClientId($client_id)
    {
        $this->container['client_id'] = $client_id;

        return $this;
    }

    /**
     * Gets platform_issuer_identifier
     *
     * @return string
     */
    public function getPlatformIssuerIdentifier()
    {
        return $this->container['platform_issuer_identifier'];
    }

    /**
     * Sets platform_issuer_identifier
     *
     * @param string $platform_issuer_identifier Issuer identifier identifying the learning platform
     *
     * @return $this
     */
    public function setPlatformIssuerIdentifier($platform_issuer_identifier)
    {
        $this->container['platform_issuer_identifier'] = $platform_issuer_identifier;

        return $this;
    }

    /**
     * Gets deployment_id
     *
     * @return string
     */
    public function getDeploymentId()
    {
        return $this->container['deployment_id'];
    }

    /**
     * Sets deployment_id
     *
     * @param string $deployment_id An unchanging identifier (locally unique within the platformIssuerIdentifier) for the platform-tool integration
     *
     * @return $this
     */
    public function setDeploymentId($deployment_id)
    {
        $this->container['deployment_id'] = $deployment_id;

        return $this;
    }

    /**
     * Gets oidc_authorization_endpoint
     *
     * @return string
     */
    public function getOidcAuthorizationEndpoint()
    {
        return $this->container['oidc_authorization_endpoint'];
    }

    /**
     * Sets oidc_authorization_endpoint
     *
     * @param string $oidc_authorization_endpoint Endpoint that will initiate the OIDC Authentication Request
     *
     * @return $this
     */
    public function setOidcAuthorizationEndpoint($oidc_authorization_endpoint)
    {
        $this->container['oidc_authorization_endpoint'] = $oidc_authorization_endpoint;

        return $this;
    }

    /**
     * Gets json_web_key_set_url
     *
     * @return string
     */
    public function getJsonWebKeySetUrl()
    {
        return $this->container['json_web_key_set_url'];
    }

    /**
     * Sets json_web_key_set_url
     *
     * @param string $json_web_key_set_url Path to the platform's JSON Web Key Set
     *
     * @return $this
     */
    public function setJsonWebKeySetUrl($json_web_key_set_url)
    {
        $this->container['json_web_key_set_url'] = $json_web_key_set_url;

        return $this;
    }

    /**
     * Gets access_token_url
     *
     * @return string
     */
    public function getAccessTokenUrl()
    {
        return $this->container['access_token_url'];
    }

    /**
     * Sets access_token_url
     *
     * @param string $access_token_url Endpoint that will return OAuth 2 access tokens for the platform
     *
     * @return $this
     */
    public function setAccessTokenUrl($access_token_url)
    {
        $this->container['access_token_url'] = $access_token_url;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
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


