<?php

declare(strict_types=1);

namespace AmazonPHP\SellingPartner\Model\Orders;

use AmazonPHP\SellingPartner\Exception\AssertionException;
use AmazonPHP\SellingPartner\ModelInterface;
use AmazonPHP\SellingPartner\ObjectSerializer;

/**
 * Selling Partner API for Orders.
 *
 * The Selling Partner API for Orders helps you programmatically retrieve order information. These APIs let you develop fast, flexible, custom applications in areas like order synchronization, order research, and demand-based decision support tools. The Orders API supports orders that are two years old or less. Orders more than two years old will not show in the API response.  **Note:** The Orders API supports orders from 2016 and after for the JP, AU, and SG marketplaces.
 *
 * The version of the OpenAPI document: v0
 *
 * This class was auto-generated by https://openapi-generator.tech
 * Do not change it, it will be overwritten with next execution of /bin/generate.sh
 *
 * @implements \ArrayAccess<TKey, TValue>
 *
 * @template TKey int|null
 * @template TValue mixed|null
 */
class AddressExtendedFields implements \ArrayAccess, \JsonSerializable, \Stringable, ModelInterface
{
    final public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     */
    protected static string $openAPIModelName = 'AddressExtendedFields';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static array $openAPITypes = [
        'street_name' => 'string',
        'street_number' => 'string',
        'complement' => 'string',
        'neighborhood' => 'string',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     *
     * @phpstan-var array<string, string|null>
     *
     * @psalm-var array<string, string|null>
     */
    protected static array $openAPIFormats = [
        'street_name' => null,
        'street_number' => null,
        'complement' => null,
        'neighborhood' => null,
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'street_name' => 'StreetName',
        'street_number' => 'StreetNumber',
        'complement' => 'Complement',
        'neighborhood' => 'Neighborhood',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static array $setters = [
        'street_name' => 'setStreetName',
        'street_number' => 'setStreetNumber',
        'complement' => 'setComplement',
        'neighborhood' => 'setNeighborhood',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static array $getters = [
        'street_name' => 'getStreetName',
        'street_number' => 'getStreetNumber',
        'complement' => 'getComplement',
        'neighborhood' => 'getNeighborhood',
    ];

    /**
     * Associative array for storing property values.
     *
     * @var mixed[]
     */
    protected array $container = [];

    /**
     * Constructor.
     *
     * @param null|mixed[] $data Associated array of property values
     *                           initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['street_name'] = $data['street_name'] ?? null;
        $this->container['street_number'] = $data['street_number'] ?? null;
        $this->container['complement'] = $data['complement'] ?? null;
        $this->container['neighborhood'] = $data['neighborhood'] ?? null;
    }

    /**
     * Array of property to type mappings. Used for (de)serialization.
     */
    public static function openAPITypes() : array
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization.
     */
    public static function openAPIFormats() : array
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     */
    public static function attributeMap() : array
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     */
    public static function setters() : array
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests).
     */
    public static function getters() : array
    {
        return self::$getters;
    }

    /**
     * Gets the string presentation of the object.
     */
    public function __toString() : string
    {
        return (string) \json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * The original name of the model.
     */
    public function getModelName() : string
    {
        return self::$openAPIModelName;
    }

    /**
     * Validate all properties.
     *
     * @throws AssertionException
     */
    public function validate() : void
    {
    }

    /**
     * Gets street_name.
     */
    public function getStreetName() : ?string
    {
        return $this->container['street_name'];
    }

    /**
     * Sets street_name.
     *
     * @param null|string $street_name the street name
     */
    public function setStreetName(?string $street_name) : self
    {
        $this->container['street_name'] = $street_name;

        return $this;
    }

    /**
     * Gets street_number.
     */
    public function getStreetNumber() : ?string
    {
        return $this->container['street_number'];
    }

    /**
     * Sets street_number.
     *
     * @param null|string $street_number the house number/building number/property number in the street
     */
    public function setStreetNumber(?string $street_number) : self
    {
        $this->container['street_number'] = $street_number;

        return $this;
    }

    /**
     * Gets complement.
     */
    public function getComplement() : ?string
    {
        return $this->container['complement'];
    }

    /**
     * Sets complement.
     *
     * @param null|string $complement the floor number/unit number in the building/private house number
     */
    public function setComplement(?string $complement) : self
    {
        $this->container['complement'] = $complement;

        return $this;
    }

    /**
     * Gets neighborhood.
     */
    public function getNeighborhood() : ?string
    {
        return $this->container['neighborhood'];
    }

    /**
     * Sets neighborhood.
     *
     * @param null|string $neighborhood The neighborhood. It's smaller than a region and an integral part of an address. It is used in some countries like Brazil.
     */
    public function setNeighborhood(?string $neighborhood) : self
    {
        $this->container['neighborhood'] = $neighborhood;

        return $this;
    }

    /**
     * Returns true if offset exists. False otherwise.
     */
    public function offsetExists($offset) : bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @return null|mixed
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset) : mixed
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     */
    public function offsetSet($offset, $value) : void
    {
        if (null === $offset) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     */
    public function offsetUnset($offset) : void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     *
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed returns data which can be serialized by json_encode(), which is a value
     *               of any type other than a resource
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize() : string
    {
        return \json_encode(ObjectSerializer::sanitizeForSerialization($this), JSON_THROW_ON_ERROR);
    }

    /**
     * Gets a header-safe presentation of the object.
     */
    public function toHeaderValue() : string
    {
        return \json_encode(ObjectSerializer::sanitizeForSerialization($this), JSON_THROW_ON_ERROR);
    }
}