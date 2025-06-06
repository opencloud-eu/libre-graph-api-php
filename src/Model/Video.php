<?php
/**
 * Video
 *
 * PHP version 8.1
 *
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Libre Graph API
 *
 * Libre Graph is a free API for cloud collaboration inspired by the MS Graph API.
 *
 * The version of the OpenAPI document: v1.0.8
 * @generated Generated by: https://openapi-generator.tech
 * Generator version: 7.13.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Model;

use ArrayAccess;
use JsonSerializable;
use InvalidArgumentException;
use ReturnTypeWillChange;
use OpenAPI\Client\ObjectSerializer;

/**
 * Video Class Doc Comment
 *
 * @description The video resource groups video-related data items into a single structure.  If a driveItem has a non-null video facet, the item represents a video file. The properties of the video resource are populated by extracting metadata from the file.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class Video implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'video';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'audio_bits_per_sample' => 'int',
        'audio_channels' => 'int',
        'audio_format' => 'string',
        'audio_samples_per_second' => 'int',
        'bitrate' => 'int',
        'duration' => 'int',
        'four_cc' => 'string',
        'frame_rate' => 'float',
        'height' => 'int',
        'width' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'audio_bits_per_sample' => 'int32',
        'audio_channels' => 'int32',
        'audio_format' => null,
        'audio_samples_per_second' => 'int32',
        'bitrate' => 'int32',
        'duration' => 'int64',
        'four_cc' => null,
        'frame_rate' => 'double',
        'height' => 'int32',
        'width' => 'int32'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var array<string, bool>
      */
    protected static array $openAPINullables = [
        'audio_bits_per_sample' => false,
        'audio_channels' => false,
        'audio_format' => false,
        'audio_samples_per_second' => false,
        'bitrate' => false,
        'duration' => false,
        'four_cc' => false,
        'frame_rate' => false,
        'height' => false,
        'width' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var array<string, bool>
      */
    protected array $openAPINullablesSetToNull = [];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array<string, string>
     */
    public static function openAPITypes(): array
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array<string, string>
     */
    public static function openAPIFormats(): array
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of nullable properties
     *
     * @return array<string, bool>
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return array<string, bool>
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param array<string, bool> $openAPINullablesSetToNull
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
     * @var array<string, string>
     */
    protected static array $attributeMap = [
        'audio_bits_per_sample' => 'audioBitsPerSample',
        'audio_channels' => 'audioChannels',
        'audio_format' => 'audioFormat',
        'audio_samples_per_second' => 'audioSamplesPerSecond',
        'bitrate' => 'bitrate',
        'duration' => 'duration',
        'four_cc' => 'fourCC',
        'frame_rate' => 'frameRate',
        'height' => 'height',
        'width' => 'width'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var array<string, string>
     */
    protected static array $setters = [
        'audio_bits_per_sample' => 'setAudioBitsPerSample',
        'audio_channels' => 'setAudioChannels',
        'audio_format' => 'setAudioFormat',
        'audio_samples_per_second' => 'setAudioSamplesPerSecond',
        'bitrate' => 'setBitrate',
        'duration' => 'setDuration',
        'four_cc' => 'setFourCc',
        'frame_rate' => 'setFrameRate',
        'height' => 'setHeight',
        'width' => 'setWidth'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var array<string, string>
     */
    protected static array $getters = [
        'audio_bits_per_sample' => 'getAudioBitsPerSample',
        'audio_channels' => 'getAudioChannels',
        'audio_format' => 'getAudioFormat',
        'audio_samples_per_second' => 'getAudioSamplesPerSecond',
        'bitrate' => 'getBitrate',
        'duration' => 'getDuration',
        'four_cc' => 'getFourCc',
        'frame_rate' => 'getFrameRate',
        'height' => 'getHeight',
        'width' => 'getWidth'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array<string, string>
     */
    public static function attributeMap(): array
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array<string, string>
     */
    public static function setters(): array
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array<string, string>
     */
    public static function getters(): array
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName(): string
    {
        return self::$openAPIModelName;
    }


    /**
     * Associative array for storing property values
     *
     * @var array
     */
    protected array $container = [];

    /**
     * Constructor
     *
     * @param array $data Associated array of property values initializing the model
     */
    public function __construct(?array $data = null)
    {
        $this->setIfExists('audio_bits_per_sample', $data ?? [], null);
        $this->setIfExists('audio_channels', $data ?? [], null);
        $this->setIfExists('audio_format', $data ?? [], null);
        $this->setIfExists('audio_samples_per_second', $data ?? [], null);
        $this->setIfExists('bitrate', $data ?? [], null);
        $this->setIfExists('duration', $data ?? [], null);
        $this->setIfExists('four_cc', $data ?? [], null);
        $this->setIfExists('frame_rate', $data ?? [], null);
        $this->setIfExists('height', $data ?? [], null);
        $this->setIfExists('width', $data ?? [], null);
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
    private function setIfExists(string $variableName, array $fields, mixed $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return string[] invalid properties with reasons
     */
    public function listInvalidProperties(): array
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
    public function valid(): bool
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets audio_bits_per_sample
     *
     * @return int|null
     */
    public function getAudioBitsPerSample(): ?int
    {
        return $this->container['audio_bits_per_sample'];
    }

    /**
     * Sets audio_bits_per_sample
     *
     * @param int|null $audio_bits_per_sample Number of audio bits per sample.
     *
     * @return $this
     */
    public function setAudioBitsPerSample(?int $audio_bits_per_sample): static
    {
        if (is_null($audio_bits_per_sample)) {
            throw new InvalidArgumentException('non-nullable audio_bits_per_sample cannot be null');
        }
        $this->container['audio_bits_per_sample'] = $audio_bits_per_sample;

        return $this;
    }

    /**
     * Gets audio_channels
     *
     * @return int|null
     */
    public function getAudioChannels(): ?int
    {
        return $this->container['audio_channels'];
    }

    /**
     * Sets audio_channels
     *
     * @param int|null $audio_channels Number of audio channels.
     *
     * @return $this
     */
    public function setAudioChannels(?int $audio_channels): static
    {
        if (is_null($audio_channels)) {
            throw new InvalidArgumentException('non-nullable audio_channels cannot be null');
        }
        $this->container['audio_channels'] = $audio_channels;

        return $this;
    }

    /**
     * Gets audio_format
     *
     * @return string|null
     */
    public function getAudioFormat(): ?string
    {
        return $this->container['audio_format'];
    }

    /**
     * Sets audio_format
     *
     * @param string|null $audio_format Name of the audio format (AAC, MP3, etc.).
     *
     * @return $this
     */
    public function setAudioFormat(?string $audio_format): static
    {
        if (is_null($audio_format)) {
            throw new InvalidArgumentException('non-nullable audio_format cannot be null');
        }
        $this->container['audio_format'] = $audio_format;

        return $this;
    }

    /**
     * Gets audio_samples_per_second
     *
     * @return int|null
     */
    public function getAudioSamplesPerSecond(): ?int
    {
        return $this->container['audio_samples_per_second'];
    }

    /**
     * Sets audio_samples_per_second
     *
     * @param int|null $audio_samples_per_second Number of audio samples per second.
     *
     * @return $this
     */
    public function setAudioSamplesPerSecond(?int $audio_samples_per_second): static
    {
        if (is_null($audio_samples_per_second)) {
            throw new InvalidArgumentException('non-nullable audio_samples_per_second cannot be null');
        }
        $this->container['audio_samples_per_second'] = $audio_samples_per_second;

        return $this;
    }

    /**
     * Gets bitrate
     *
     * @return int|null
     */
    public function getBitrate(): ?int
    {
        return $this->container['bitrate'];
    }

    /**
     * Sets bitrate
     *
     * @param int|null $bitrate Bit rate of the video in bits per second.
     *
     * @return $this
     */
    public function setBitrate(?int $bitrate): static
    {
        if (is_null($bitrate)) {
            throw new InvalidArgumentException('non-nullable bitrate cannot be null');
        }
        $this->container['bitrate'] = $bitrate;

        return $this;
    }

    /**
     * Gets duration
     *
     * @return int|null
     */
    public function getDuration(): ?int
    {
        return $this->container['duration'];
    }

    /**
     * Sets duration
     *
     * @param int|null $duration Duration of the file in milliseconds.
     *
     * @return $this
     */
    public function setDuration(?int $duration): static
    {
        if (is_null($duration)) {
            throw new InvalidArgumentException('non-nullable duration cannot be null');
        }
        $this->container['duration'] = $duration;

        return $this;
    }

    /**
     * Gets four_cc
     *
     * @return string|null
     */
    public function getFourCc(): ?string
    {
        return $this->container['four_cc'];
    }

    /**
     * Sets four_cc
     *
     * @param string|null $four_cc \\\"Four character code\\\" name of the video format.
     *
     * @return $this
     */
    public function setFourCc(?string $four_cc): static
    {
        if (is_null($four_cc)) {
            throw new InvalidArgumentException('non-nullable four_cc cannot be null');
        }
        $this->container['four_cc'] = $four_cc;

        return $this;
    }

    /**
     * Gets frame_rate
     *
     * @return float|null
     */
    public function getFrameRate(): ?float
    {
        return $this->container['frame_rate'];
    }

    /**
     * Sets frame_rate
     *
     * @param float|null $frame_rate Frame rate of the video.
     *
     * @return $this
     */
    public function setFrameRate(?float $frame_rate): static
    {
        if (is_null($frame_rate)) {
            throw new InvalidArgumentException('non-nullable frame_rate cannot be null');
        }
        $this->container['frame_rate'] = $frame_rate;

        return $this;
    }

    /**
     * Gets height
     *
     * @return int|null
     */
    public function getHeight(): ?int
    {
        return $this->container['height'];
    }

    /**
     * Sets height
     *
     * @param int|null $height Height of the video, in pixels.
     *
     * @return $this
     */
    public function setHeight(?int $height): static
    {
        if (is_null($height)) {
            throw new InvalidArgumentException('non-nullable height cannot be null');
        }
        $this->container['height'] = $height;

        return $this;
    }

    /**
     * Gets width
     *
     * @return int|null
     */
    public function getWidth(): ?int
    {
        return $this->container['width'];
    }

    /**
     * Sets width
     *
     * @param int|null $width Width of the video, in pixels.
     *
     * @return $this
     */
    public function setWidth(?int $width): static
    {
        if (is_null($width)) {
            throw new InvalidArgumentException('non-nullable width cannot be null');
        }
        $this->container['width'] = $width;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists(mixed $offset): bool
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
    #[ReturnTypeWillChange]
    public function offsetGet(mixed $offset): mixed
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
    public function offsetSet(mixed $offset, mixed $value): void
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
    public function offsetUnset(mixed $offset): void
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
    #[ReturnTypeWillChange]
    public function jsonSerialize(): mixed
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString(): string
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
    public function toHeaderValue(): string
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


