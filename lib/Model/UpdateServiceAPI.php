<?php
/**
 * UpdateServiceAPI
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * FiwooDeviceManagement
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: 0.0.0-development
 * Contact: info@fiwoo.eu
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.40
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
 * UpdateServiceAPI Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class UpdateServiceAPI implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'UpdateServiceAPI';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'name' => 'string',
'description' => 'string',
'organization' => 'AnyOfUpdateServiceAPIOrganization',
'dataset' => 'AnyOfUpdateServiceAPIDataset',
'permissions_policy' => '\Swagger\Client\Model\PolicyAPI',
'fiware' => '\Swagger\Client\Model\FiwareAPI',
'entity_type' => 'string',
'categories' => '\Swagger\Client\Model\EntityCategory[]',
'transport' => '\Swagger\Client\Model\IotTransport',
'attributes' => '\Swagger\Client\Model\KeyAttributeAPI[]',
'lazy_attributes' => '\Swagger\Client\Model\KeyAttributeAPI[]',
'command_attributes' => '\Swagger\Client\Model\CommandAttributeAPI[]',
'static_attributes' => '\Swagger\Client\Model\StaticAttributeAPI[]',
'internal_attributes' => '',
'protocol' => '\Swagger\Client\Model\IotProtocol',
'template_id' => 'string',
'resource' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'name' => null,
'description' => null,
'organization' => null,
'dataset' => null,
'permissions_policy' => null,
'fiware' => null,
'entity_type' => null,
'categories' => null,
'transport' => null,
'attributes' => null,
'lazy_attributes' => null,
'command_attributes' => null,
'static_attributes' => null,
'internal_attributes' => null,
'protocol' => null,
'template_id' => null,
'resource' => null    ];

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
        'name' => 'name',
'description' => 'description',
'organization' => 'organization',
'dataset' => 'dataset',
'permissions_policy' => 'permissions_policy',
'fiware' => 'fiware',
'entity_type' => 'entity_type',
'categories' => 'categories',
'transport' => 'transport',
'attributes' => 'attributes',
'lazy_attributes' => 'lazy_attributes',
'command_attributes' => 'command_attributes',
'static_attributes' => 'static_attributes',
'internal_attributes' => 'internal_attributes',
'protocol' => 'protocol',
'template_id' => 'template_id',
'resource' => 'resource'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
'description' => 'setDescription',
'organization' => 'setOrganization',
'dataset' => 'setDataset',
'permissions_policy' => 'setPermissionsPolicy',
'fiware' => 'setFiware',
'entity_type' => 'setEntityType',
'categories' => 'setCategories',
'transport' => 'setTransport',
'attributes' => 'setAttributes',
'lazy_attributes' => 'setLazyAttributes',
'command_attributes' => 'setCommandAttributes',
'static_attributes' => 'setStaticAttributes',
'internal_attributes' => 'setInternalAttributes',
'protocol' => 'setProtocol',
'template_id' => 'setTemplateId',
'resource' => 'setResource'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
'description' => 'getDescription',
'organization' => 'getOrganization',
'dataset' => 'getDataset',
'permissions_policy' => 'getPermissionsPolicy',
'fiware' => 'getFiware',
'entity_type' => 'getEntityType',
'categories' => 'getCategories',
'transport' => 'getTransport',
'attributes' => 'getAttributes',
'lazy_attributes' => 'getLazyAttributes',
'command_attributes' => 'getCommandAttributes',
'static_attributes' => 'getStaticAttributes',
'internal_attributes' => 'getInternalAttributes',
'protocol' => 'getProtocol',
'template_id' => 'getTemplateId',
'resource' => 'getResource'    ];

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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['organization'] = isset($data['organization']) ? $data['organization'] : null;
        $this->container['dataset'] = isset($data['dataset']) ? $data['dataset'] : null;
        $this->container['permissions_policy'] = isset($data['permissions_policy']) ? $data['permissions_policy'] : null;
        $this->container['fiware'] = isset($data['fiware']) ? $data['fiware'] : null;
        $this->container['entity_type'] = isset($data['entity_type']) ? $data['entity_type'] : null;
        $this->container['categories'] = isset($data['categories']) ? $data['categories'] : null;
        $this->container['transport'] = isset($data['transport']) ? $data['transport'] : null;
        $this->container['attributes'] = isset($data['attributes']) ? $data['attributes'] : null;
        $this->container['lazy_attributes'] = isset($data['lazy_attributes']) ? $data['lazy_attributes'] : null;
        $this->container['command_attributes'] = isset($data['command_attributes']) ? $data['command_attributes'] : null;
        $this->container['static_attributes'] = isset($data['static_attributes']) ? $data['static_attributes'] : null;
        $this->container['internal_attributes'] = isset($data['internal_attributes']) ? $data['internal_attributes'] : null;
        $this->container['protocol'] = isset($data['protocol']) ? $data['protocol'] : null;
        $this->container['template_id'] = isset($data['template_id']) ? $data['template_id'] : null;
        $this->container['resource'] = isset($data['resource']) ? $data['resource'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['permissions_policy'] === null) {
            $invalidProperties[] = "'permissions_policy' can't be null";
        }
        if ($this->container['fiware'] === null) {
            $invalidProperties[] = "'fiware' can't be null";
        }
        if ($this->container['entity_type'] === null) {
            $invalidProperties[] = "'entity_type' can't be null";
        }
        if ($this->container['categories'] === null) {
            $invalidProperties[] = "'categories' can't be null";
        }
        if ($this->container['transport'] === null) {
            $invalidProperties[] = "'transport' can't be null";
        }
        if ($this->container['attributes'] === null) {
            $invalidProperties[] = "'attributes' can't be null";
        }
        if ($this->container['lazy_attributes'] === null) {
            $invalidProperties[] = "'lazy_attributes' can't be null";
        }
        if ($this->container['command_attributes'] === null) {
            $invalidProperties[] = "'command_attributes' can't be null";
        }
        if ($this->container['static_attributes'] === null) {
            $invalidProperties[] = "'static_attributes' can't be null";
        }
        if ($this->container['internal_attributes'] === null) {
            $invalidProperties[] = "'internal_attributes' can't be null";
        }
        if ($this->container['protocol'] === null) {
            $invalidProperties[] = "'protocol' can't be null";
        }
        if ($this->container['resource'] === null) {
            $invalidProperties[] = "'resource' can't be null";
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
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name A meaningful name provided by user
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string $description Description about the entity
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets organization
     *
     * @return AnyOfUpdateServiceAPIOrganization
     */
    public function getOrganization()
    {
        return $this->container['organization'];
    }

    /**
     * Sets organization
     *
     * @param AnyOfUpdateServiceAPIOrganization $organization The Organization id that the device belong to
     *
     * @return $this
     */
    public function setOrganization($organization)
    {
        $this->container['organization'] = $organization;

        return $this;
    }

    /**
     * Gets dataset
     *
     * @return AnyOfUpdateServiceAPIDataset
     */
    public function getDataset()
    {
        return $this->container['dataset'];
    }

    /**
     * Sets dataset
     *
     * @param AnyOfUpdateServiceAPIDataset $dataset The Dataset id (under some Organization) that the device belong to
     *
     * @return $this
     */
    public function setDataset($dataset)
    {
        $this->container['dataset'] = $dataset;

        return $this;
    }

    /**
     * Gets permissions_policy
     *
     * @return \Swagger\Client\Model\PolicyAPI
     */
    public function getPermissionsPolicy()
    {
        return $this->container['permissions_policy'];
    }

    /**
     * Sets permissions_policy
     *
     * @param \Swagger\Client\Model\PolicyAPI $permissions_policy permissions_policy
     *
     * @return $this
     */
    public function setPermissionsPolicy($permissions_policy)
    {
        $this->container['permissions_policy'] = $permissions_policy;

        return $this;
    }

    /**
     * Gets fiware
     *
     * @return \Swagger\Client\Model\FiwareAPI
     */
    public function getFiware()
    {
        return $this->container['fiware'];
    }

    /**
     * Sets fiware
     *
     * @param \Swagger\Client\Model\FiwareAPI $fiware fiware
     *
     * @return $this
     */
    public function setFiware($fiware)
    {
        $this->container['fiware'] = $fiware;

        return $this;
    }

    /**
     * Gets entity_type
     *
     * @return string
     */
    public function getEntityType()
    {
        return $this->container['entity_type'];
    }

    /**
     * Sets entity_type
     *
     * @param string $entity_type The entity type
     *
     * @return $this
     */
    public function setEntityType($entity_type)
    {
        $this->container['entity_type'] = $entity_type;

        return $this;
    }

    /**
     * Gets categories
     *
     * @return \Swagger\Client\Model\EntityCategory[]
     */
    public function getCategories()
    {
        return $this->container['categories'];
    }

    /**
     * Sets categories
     *
     * @param \Swagger\Client\Model\EntityCategory[] $categories Device's Categories
     *
     * @return $this
     */
    public function setCategories($categories)
    {
        $this->container['categories'] = $categories;

        return $this;
    }

    /**
     * Gets transport
     *
     * @return \Swagger\Client\Model\IotTransport
     */
    public function getTransport()
    {
        return $this->container['transport'];
    }

    /**
     * Sets transport
     *
     * @param \Swagger\Client\Model\IotTransport $transport transport
     *
     * @return $this
     */
    public function setTransport($transport)
    {
        $this->container['transport'] = $transport;

        return $this;
    }

    /**
     * Gets attributes
     *
     * @return \Swagger\Client\Model\KeyAttributeAPI[]
     */
    public function getAttributes()
    {
        return $this->container['attributes'];
    }

    /**
     * Sets attributes
     *
     * @param \Swagger\Client\Model\KeyAttributeAPI[] $attributes Device's attributes
     *
     * @return $this
     */
    public function setAttributes($attributes)
    {
        $this->container['attributes'] = $attributes;

        return $this;
    }

    /**
     * Gets lazy_attributes
     *
     * @return \Swagger\Client\Model\KeyAttributeAPI[]
     */
    public function getLazyAttributes()
    {
        return $this->container['lazy_attributes'];
    }

    /**
     * Sets lazy_attributes
     *
     * @param \Swagger\Client\Model\KeyAttributeAPI[] $lazy_attributes Device's lazy attributes
     *
     * @return $this
     */
    public function setLazyAttributes($lazy_attributes)
    {
        $this->container['lazy_attributes'] = $lazy_attributes;

        return $this;
    }

    /**
     * Gets command_attributes
     *
     * @return \Swagger\Client\Model\CommandAttributeAPI[]
     */
    public function getCommandAttributes()
    {
        return $this->container['command_attributes'];
    }

    /**
     * Sets command_attributes
     *
     * @param \Swagger\Client\Model\CommandAttributeAPI[] $command_attributes Device's command attributes
     *
     * @return $this
     */
    public function setCommandAttributes($command_attributes)
    {
        $this->container['command_attributes'] = $command_attributes;

        return $this;
    }

    /**
     * Gets static_attributes
     *
     * @return \Swagger\Client\Model\StaticAttributeAPI[]
     */
    public function getStaticAttributes()
    {
        return $this->container['static_attributes'];
    }

    /**
     * Sets static_attributes
     *
     * @param \Swagger\Client\Model\StaticAttributeAPI[] $static_attributes Device's static attributes
     *
     * @return $this
     */
    public function setStaticAttributes($static_attributes)
    {
        $this->container['static_attributes'] = $static_attributes;

        return $this;
    }

    /**
     * Gets internal_attributes
     *
     * @return 
     */
    public function getInternalAttributes()
    {
        return $this->container['internal_attributes'];
    }

    /**
     * Sets internal_attributes
     *
     * @param  $internal_attributes Device's internal attributes
     *
     * @return $this
     */
    public function setInternalAttributes($internal_attributes)
    {
        $this->container['internal_attributes'] = $internal_attributes;

        return $this;
    }

    /**
     * Gets protocol
     *
     * @return \Swagger\Client\Model\IotProtocol
     */
    public function getProtocol()
    {
        return $this->container['protocol'];
    }

    /**
     * Sets protocol
     *
     * @param \Swagger\Client\Model\IotProtocol $protocol protocol
     *
     * @return $this
     */
    public function setProtocol($protocol)
    {
        $this->container['protocol'] = $protocol;

        return $this;
    }

    /**
     * Gets template_id
     *
     * @return string
     */
    public function getTemplateId()
    {
        return $this->container['template_id'];
    }

    /**
     * Sets template_id
     *
     * @param string $template_id The identificator of the template used to create the device
     *
     * @return $this
     */
    public function setTemplateId($template_id)
    {
        $this->container['template_id'] = $template_id;

        return $this;
    }

    /**
     * Gets resource
     *
     * @return string
     */
    public function getResource()
    {
        return $this->container['resource'];
    }

    /**
     * Sets resource
     *
     * @param string $resource TODO: describe this The resource
     *
     * @return $this
     */
    public function setResource($resource)
    {
        $this->container['resource'] = $resource;

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
