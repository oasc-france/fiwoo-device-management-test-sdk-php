<?php
/**
 * DeviceAPI
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
 * Swagger Codegen version: 3.0.36
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
 * DeviceAPI Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DeviceAPI implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'DeviceAPI';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'AnyOfDeviceAPIId',
'name' => 'string',
'description' => 'string',
'organization' => 'AnyOfDeviceAPIOrganization',
'dataset' => 'AnyOfDeviceAPIDataset',
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
'service_id' => 'string',
'device_id' => 'string',
'owner' => 'AnyOfDeviceAPIOwner',
'created_at' => '\DateTime',
'updated_at' => '\DateTime',
'api_key' => 'string',
'subscriptions' => ''    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
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
'service_id' => null,
'device_id' => null,
'owner' => null,
'created_at' => 'date-time',
'updated_at' => 'date-time',
'api_key' => null,
'subscriptions' => null    ];

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
        'id' => 'id',
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
'service_id' => 'service_id',
'device_id' => 'device_id',
'owner' => 'owner',
'created_at' => 'createdAt',
'updated_at' => 'updatedAt',
'api_key' => 'api_key',
'subscriptions' => 'subscriptions'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
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
'service_id' => 'setServiceId',
'device_id' => 'setDeviceId',
'owner' => 'setOwner',
'created_at' => 'setCreatedAt',
'updated_at' => 'setUpdatedAt',
'api_key' => 'setApiKey',
'subscriptions' => 'setSubscriptions'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
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
'service_id' => 'getServiceId',
'device_id' => 'getDeviceId',
'owner' => 'getOwner',
'created_at' => 'getCreatedAt',
'updated_at' => 'getUpdatedAt',
'api_key' => 'getApiKey',
'subscriptions' => 'getSubscriptions'    ];

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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
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
        $this->container['service_id'] = isset($data['service_id']) ? $data['service_id'] : null;
        $this->container['device_id'] = isset($data['device_id']) ? $data['device_id'] : null;
        $this->container['owner'] = isset($data['owner']) ? $data['owner'] : null;
        $this->container['created_at'] = isset($data['created_at']) ? $data['created_at'] : null;
        $this->container['updated_at'] = isset($data['updated_at']) ? $data['updated_at'] : null;
        $this->container['api_key'] = isset($data['api_key']) ? $data['api_key'] : null;
        $this->container['subscriptions'] = isset($data['subscriptions']) ? $data['subscriptions'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
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
        if ($this->container['device_id'] === null) {
            $invalidProperties[] = "'device_id' can't be null";
        }
        if ($this->container['subscriptions'] === null) {
            $invalidProperties[] = "'subscriptions' can't be null";
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
     * Gets id
     *
     * @return AnyOfDeviceAPIId
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param AnyOfDeviceAPIId $id The identificator given to the entity entity in the platform
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
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
     * @return AnyOfDeviceAPIOrganization
     */
    public function getOrganization()
    {
        return $this->container['organization'];
    }

    /**
     * Sets organization
     *
     * @param AnyOfDeviceAPIOrganization $organization The Organization id that the device belong to
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
     * @return AnyOfDeviceAPIDataset
     */
    public function getDataset()
    {
        return $this->container['dataset'];
    }

    /**
     * Sets dataset
     *
     * @param AnyOfDeviceAPIDataset $dataset The Dataset id (under some Organization) that the device belong to
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
     * Gets service_id
     *
     * @return string
     */
    public function getServiceId()
    {
        return $this->container['service_id'];
    }

    /**
     * Sets service_id
     *
     * @param string $service_id The identificator of the service that the device belongs to
     *
     * @return $this
     */
    public function setServiceId($service_id)
    {
        $this->container['service_id'] = $service_id;

        return $this;
    }

    /**
     * Gets device_id
     *
     * @return string
     */
    public function getDeviceId()
    {
        return $this->container['device_id'];
    }

    /**
     * Sets device_id
     *
     * @param string $device_id The identificator provided by user to identify it when sending data to the platform
     *
     * @return $this
     */
    public function setDeviceId($device_id)
    {
        $this->container['device_id'] = $device_id;

        return $this;
    }

    /**
     * Gets owner
     *
     * @return AnyOfDeviceAPIOwner
     */
    public function getOwner()
    {
        return $this->container['owner'];
    }

    /**
     * Sets owner
     *
     * @param AnyOfDeviceAPIOwner $owner The entity's owner
     *
     * @return $this
     */
    public function setOwner($owner)
    {
        $this->container['owner'] = $owner;

        return $this;
    }

    /**
     * Gets created_at
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     *
     * @param \DateTime $created_at Entity creation date
     *
     * @return $this
     */
    public function setCreatedAt($created_at)
    {
        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets updated_at
     *
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->container['updated_at'];
    }

    /**
     * Sets updated_at
     *
     * @param \DateTime $updated_at Last entity modification date
     *
     * @return $this
     */
    public function setUpdatedAt($updated_at)
    {
        $this->container['updated_at'] = $updated_at;

        return $this;
    }

    /**
     * Gets api_key
     *
     * @return string
     */
    public function getApiKey()
    {
        return $this->container['api_key'];
    }

    /**
     * Sets api_key
     *
     * @param string $api_key The api key that identifies the data service. [More info](https://wiki.fiwoo.eu)
     *
     * @return $this
     */
    public function setApiKey($api_key)
    {
        $this->container['api_key'] = $api_key;

        return $this;
    }

    /**
     * Gets subscriptions
     *
     * @return 
     */
    public function getSubscriptions()
    {
        return $this->container['subscriptions'];
    }

    /**
     * Sets subscriptions
     *
     * @param  $subscriptions Id's from the generated Orion subscription for this entity
     *
     * @return $this
     */
    public function setSubscriptions($subscriptions)
    {
        $this->container['subscriptions'] = $subscriptions;

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
