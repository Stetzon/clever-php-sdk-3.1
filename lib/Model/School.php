<?php
/**
 * School
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Data API
 *
 * Serves the Clever Data API
 *
 * The version of the OpenAPI document: 3.0.0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.1.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Model;

use \ArrayAccess;
use \OpenAPI\Client\ObjectSerializer;

/**
 * School Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class School implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'School';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'created' => 'string',
        'district' => 'string',
        'ext' => 'object',
        'high_grade' => 'string',
        'id' => 'string',
        'last_modified' => 'string',
        'location' => '\OpenAPI\Client\Model\Location',
        'low_grade' => 'string',
        'mdr_number' => 'string',
        'name' => 'string',
        'nces_id' => 'string',
        'phone' => 'string',
        'principal' => '\OpenAPI\Client\Model\Principal',
        'school_number' => 'string',
        'sis_id' => 'string',
        'state_id' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'created' => 'datetime',
        'district' => null,
        'ext' => null,
        'high_grade' => null,
        'id' => null,
        'last_modified' => 'datetime',
        'location' => null,
        'low_grade' => null,
        'mdr_number' => null,
        'name' => null,
        'nces_id' => null,
        'phone' => null,
        'principal' => null,
        'school_number' => null,
        'sis_id' => null,
        'state_id' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'created' => false,
		'district' => false,
		'ext' => false,
		'high_grade' => true,
		'id' => false,
		'last_modified' => false,
		'location' => false,
		'low_grade' => true,
		'mdr_number' => true,
		'name' => false,
		'nces_id' => true,
		'phone' => true,
		'principal' => false,
		'school_number' => false,
		'sis_id' => false,
		'state_id' => true
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
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
     * @var string[]
     */
    protected static $attributeMap = [
        'created' => 'created',
        'district' => 'district',
        'ext' => 'ext',
        'high_grade' => 'high_grade',
        'id' => 'id',
        'last_modified' => 'last_modified',
        'location' => 'location',
        'low_grade' => 'low_grade',
        'mdr_number' => 'mdr_number',
        'name' => 'name',
        'nces_id' => 'nces_id',
        'phone' => 'phone',
        'principal' => 'principal',
        'school_number' => 'school_number',
        'sis_id' => 'sis_id',
        'state_id' => 'state_id'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'created' => 'setCreated',
        'district' => 'setDistrict',
        'ext' => 'setExt',
        'high_grade' => 'setHighGrade',
        'id' => 'setId',
        'last_modified' => 'setLastModified',
        'location' => 'setLocation',
        'low_grade' => 'setLowGrade',
        'mdr_number' => 'setMdrNumber',
        'name' => 'setName',
        'nces_id' => 'setNcesId',
        'phone' => 'setPhone',
        'principal' => 'setPrincipal',
        'school_number' => 'setSchoolNumber',
        'sis_id' => 'setSisId',
        'state_id' => 'setStateId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'created' => 'getCreated',
        'district' => 'getDistrict',
        'ext' => 'getExt',
        'high_grade' => 'getHighGrade',
        'id' => 'getId',
        'last_modified' => 'getLastModified',
        'location' => 'getLocation',
        'low_grade' => 'getLowGrade',
        'mdr_number' => 'getMdrNumber',
        'name' => 'getName',
        'nces_id' => 'getNcesId',
        'phone' => 'getPhone',
        'principal' => 'getPrincipal',
        'school_number' => 'getSchoolNumber',
        'sis_id' => 'getSisId',
        'state_id' => 'getStateId'
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
        return self::$openAPIModelName;
    }

    public const HIGH_GRADE_INFANT_TODDLER = 'InfantToddler';
    public const HIGH_GRADE_PRESCHOOL = 'Preschool';
    public const HIGH_GRADE_PRE_KINDERGARTEN = 'PreKindergarten';
    public const HIGH_GRADE_TRANSITIONAL_KINDERGARTEN = 'TransitionalKindergarten';
    public const HIGH_GRADE_KINDERGARTEN = 'Kindergarten';
    public const HIGH_GRADE__1 = '1';
    public const HIGH_GRADE__2 = '2';
    public const HIGH_GRADE__3 = '3';
    public const HIGH_GRADE__4 = '4';
    public const HIGH_GRADE__5 = '5';
    public const HIGH_GRADE__6 = '6';
    public const HIGH_GRADE__7 = '7';
    public const HIGH_GRADE__8 = '8';
    public const HIGH_GRADE__9 = '9';
    public const HIGH_GRADE__10 = '10';
    public const HIGH_GRADE__11 = '11';
    public const HIGH_GRADE__12 = '12';
    public const HIGH_GRADE__13 = '13';
    public const HIGH_GRADE_POST_GRADUATE = 'PostGraduate';
    public const HIGH_GRADE_UNGRADED = 'Ungraded';
    public const HIGH_GRADE_OTHER = 'Other';
    public const HIGH_GRADE_EMPTY = '';
    public const LOW_GRADE_INFANT_TODDLER = 'InfantToddler';
    public const LOW_GRADE_PRESCHOOL = 'Preschool';
    public const LOW_GRADE_PRE_KINDERGARTEN = 'PreKindergarten';
    public const LOW_GRADE_TRANSITIONAL_KINDERGARTEN = 'TransitionalKindergarten';
    public const LOW_GRADE_KINDERGARTEN = 'Kindergarten';
    public const LOW_GRADE__1 = '1';
    public const LOW_GRADE__2 = '2';
    public const LOW_GRADE__3 = '3';
    public const LOW_GRADE__4 = '4';
    public const LOW_GRADE__5 = '5';
    public const LOW_GRADE__6 = '6';
    public const LOW_GRADE__7 = '7';
    public const LOW_GRADE__8 = '8';
    public const LOW_GRADE__9 = '9';
    public const LOW_GRADE__10 = '10';
    public const LOW_GRADE__11 = '11';
    public const LOW_GRADE__12 = '12';
    public const LOW_GRADE__13 = '13';
    public const LOW_GRADE_POST_GRADUATE = 'PostGraduate';
    public const LOW_GRADE_UNGRADED = 'Ungraded';
    public const LOW_GRADE_OTHER = 'Other';
    public const LOW_GRADE_EMPTY = '';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getHighGradeAllowableValues()
    {
        return [
            self::HIGH_GRADE_INFANT_TODDLER,
            self::HIGH_GRADE_PRESCHOOL,
            self::HIGH_GRADE_PRE_KINDERGARTEN,
            self::HIGH_GRADE_TRANSITIONAL_KINDERGARTEN,
            self::HIGH_GRADE_KINDERGARTEN,
            self::HIGH_GRADE__1,
            self::HIGH_GRADE__2,
            self::HIGH_GRADE__3,
            self::HIGH_GRADE__4,
            self::HIGH_GRADE__5,
            self::HIGH_GRADE__6,
            self::HIGH_GRADE__7,
            self::HIGH_GRADE__8,
            self::HIGH_GRADE__9,
            self::HIGH_GRADE__10,
            self::HIGH_GRADE__11,
            self::HIGH_GRADE__12,
            self::HIGH_GRADE__13,
            self::HIGH_GRADE_POST_GRADUATE,
            self::HIGH_GRADE_UNGRADED,
            self::HIGH_GRADE_OTHER,
            self::HIGH_GRADE_EMPTY,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getLowGradeAllowableValues()
    {
        return [
            self::LOW_GRADE_INFANT_TODDLER,
            self::LOW_GRADE_PRESCHOOL,
            self::LOW_GRADE_PRE_KINDERGARTEN,
            self::LOW_GRADE_TRANSITIONAL_KINDERGARTEN,
            self::LOW_GRADE_KINDERGARTEN,
            self::LOW_GRADE__1,
            self::LOW_GRADE__2,
            self::LOW_GRADE__3,
            self::LOW_GRADE__4,
            self::LOW_GRADE__5,
            self::LOW_GRADE__6,
            self::LOW_GRADE__7,
            self::LOW_GRADE__8,
            self::LOW_GRADE__9,
            self::LOW_GRADE__10,
            self::LOW_GRADE__11,
            self::LOW_GRADE__12,
            self::LOW_GRADE__13,
            self::LOW_GRADE_POST_GRADUATE,
            self::LOW_GRADE_UNGRADED,
            self::LOW_GRADE_OTHER,
            self::LOW_GRADE_EMPTY,
        ];
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
        $this->setIfExists('created', $data ?? [], null);
        $this->setIfExists('district', $data ?? [], null);
        $this->setIfExists('ext', $data ?? [], null);
        $this->setIfExists('high_grade', $data ?? [], null);
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('last_modified', $data ?? [], null);
        $this->setIfExists('location', $data ?? [], null);
        $this->setIfExists('low_grade', $data ?? [], null);
        $this->setIfExists('mdr_number', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('nces_id', $data ?? [], null);
        $this->setIfExists('phone', $data ?? [], null);
        $this->setIfExists('principal', $data ?? [], null);
        $this->setIfExists('school_number', $data ?? [], null);
        $this->setIfExists('sis_id', $data ?? [], null);
        $this->setIfExists('state_id', $data ?? [], null);
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
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getHighGradeAllowableValues();
        if (!is_null($this->container['high_grade']) && !in_array($this->container['high_grade'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'high_grade', must be one of '%s'",
                $this->container['high_grade'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getLowGradeAllowableValues();
        if (!is_null($this->container['low_grade']) && !in_array($this->container['low_grade'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'low_grade', must be one of '%s'",
                $this->container['low_grade'],
                implode("', '", $allowedValues)
            );
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
     * Gets created
     *
     * @return string|null
     */
    public function getCreated()
    {
        return $this->container['created'];
    }

    /**
     * Sets created
     *
     * @param string|null $created created
     *
     * @return self
     */
    public function setCreated($created)
    {

        if (is_null($created)) {
            throw new \InvalidArgumentException('non-nullable created cannot be null');
        }

        $this->container['created'] = $created;

        return $this;
    }

    /**
     * Gets district
     *
     * @return string|null
     */
    public function getDistrict()
    {
        return $this->container['district'];
    }

    /**
     * Sets district
     *
     * @param string|null $district district
     *
     * @return self
     */
    public function setDistrict($district)
    {

        if (is_null($district)) {
            throw new \InvalidArgumentException('non-nullable district cannot be null');
        }

        $this->container['district'] = $district;

        return $this;
    }

    /**
     * Gets ext
     *
     * @return object|null
     */
    public function getExt()
    {
        return $this->container['ext'];
    }

    /**
     * Sets ext
     *
     * @param object|null $ext ext
     *
     * @return self
     */
    public function setExt($ext)
    {

        if (is_null($ext)) {
            throw new \InvalidArgumentException('non-nullable ext cannot be null');
        }

        $this->container['ext'] = $ext;

        return $this;
    }

    /**
     * Gets high_grade
     *
     * @return string|null
     */
    public function getHighGrade()
    {
        return $this->container['high_grade'];
    }

    /**
     * Sets high_grade
     *
     * @param string|null $high_grade high_grade
     *
     * @return self
     */
    public function setHighGrade($high_grade)
    {
        $allowedValues = $this->getHighGradeAllowableValues();
        if (!is_null($high_grade) && !in_array($high_grade, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'high_grade', must be one of '%s'",
                    $high_grade,
                    implode("', '", $allowedValues)
                )
            );
        }

        if (is_null($high_grade)) {
            array_push($this->openAPINullablesSetToNull, 'high_grade');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('high_grade', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['high_grade'] = $high_grade;

        return $this;
    }

    /**
     * Gets id
     *
     * @return string|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string|null $id id
     *
     * @return self
     */
    public function setId($id)
    {

        if (is_null($id)) {
            throw new \InvalidArgumentException('non-nullable id cannot be null');
        }

        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets last_modified
     *
     * @return string|null
     */
    public function getLastModified()
    {
        return $this->container['last_modified'];
    }

    /**
     * Sets last_modified
     *
     * @param string|null $last_modified last_modified
     *
     * @return self
     */
    public function setLastModified($last_modified)
    {

        if (is_null($last_modified)) {
            throw new \InvalidArgumentException('non-nullable last_modified cannot be null');
        }

        $this->container['last_modified'] = $last_modified;

        return $this;
    }

    /**
     * Gets location
     *
     * @return \OpenAPI\Client\Model\Location|null
     */
    public function getLocation()
    {
        return $this->container['location'];
    }

    /**
     * Sets location
     *
     * @param \OpenAPI\Client\Model\Location|null $location location
     *
     * @return self
     */
    public function setLocation($location)
    {

        if (is_null($location)) {
            throw new \InvalidArgumentException('non-nullable location cannot be null');
        }

        $this->container['location'] = $location;

        return $this;
    }

    /**
     * Gets low_grade
     *
     * @return string|null
     */
    public function getLowGrade()
    {
        return $this->container['low_grade'];
    }

    /**
     * Sets low_grade
     *
     * @param string|null $low_grade low_grade
     *
     * @return self
     */
    public function setLowGrade($low_grade)
    {
        $allowedValues = $this->getLowGradeAllowableValues();
        if (!is_null($low_grade) && !in_array($low_grade, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'low_grade', must be one of '%s'",
                    $low_grade,
                    implode("', '", $allowedValues)
                )
            );
        }

        if (is_null($low_grade)) {
            array_push($this->openAPINullablesSetToNull, 'low_grade');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('low_grade', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['low_grade'] = $low_grade;

        return $this;
    }

    /**
     * Gets mdr_number
     *
     * @return string|null
     */
    public function getMdrNumber()
    {
        return $this->container['mdr_number'];
    }

    /**
     * Sets mdr_number
     *
     * @param string|null $mdr_number mdr_number
     *
     * @return self
     */
    public function setMdrNumber($mdr_number)
    {

        if (is_null($mdr_number)) {
            array_push($this->openAPINullablesSetToNull, 'mdr_number');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('mdr_number', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['mdr_number'] = $mdr_number;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name name
     *
     * @return self
     */
    public function setName($name)
    {

        if (is_null($name)) {
            throw new \InvalidArgumentException('non-nullable name cannot be null');
        }

        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets nces_id
     *
     * @return string|null
     */
    public function getNcesId()
    {
        return $this->container['nces_id'];
    }

    /**
     * Sets nces_id
     *
     * @param string|null $nces_id nces_id
     *
     * @return self
     */
    public function setNcesId($nces_id)
    {

        if (is_null($nces_id)) {
            array_push($this->openAPINullablesSetToNull, 'nces_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('nces_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['nces_id'] = $nces_id;

        return $this;
    }

    /**
     * Gets phone
     *
     * @return string|null
     */
    public function getPhone()
    {
        return $this->container['phone'];
    }

    /**
     * Sets phone
     *
     * @param string|null $phone phone
     *
     * @return self
     */
    public function setPhone($phone)
    {

        if (is_null($phone)) {
            array_push($this->openAPINullablesSetToNull, 'phone');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('phone', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['phone'] = $phone;

        return $this;
    }

    /**
     * Gets principal
     *
     * @return \OpenAPI\Client\Model\Principal|null
     */
    public function getPrincipal()
    {
        return $this->container['principal'];
    }

    /**
     * Sets principal
     *
     * @param \OpenAPI\Client\Model\Principal|null $principal principal
     *
     * @return self
     */
    public function setPrincipal($principal)
    {

        if (is_null($principal)) {
            throw new \InvalidArgumentException('non-nullable principal cannot be null');
        }

        $this->container['principal'] = $principal;

        return $this;
    }

    /**
     * Gets school_number
     *
     * @return string|null
     */
    public function getSchoolNumber()
    {
        return $this->container['school_number'];
    }

    /**
     * Sets school_number
     *
     * @param string|null $school_number school_number
     *
     * @return self
     */
    public function setSchoolNumber($school_number)
    {

        if (is_null($school_number)) {
            throw new \InvalidArgumentException('non-nullable school_number cannot be null');
        }

        $this->container['school_number'] = $school_number;

        return $this;
    }

    /**
     * Gets sis_id
     *
     * @return string|null
     */
    public function getSisId()
    {
        return $this->container['sis_id'];
    }

    /**
     * Sets sis_id
     *
     * @param string|null $sis_id sis_id
     *
     * @return self
     */
    public function setSisId($sis_id)
    {

        if (is_null($sis_id)) {
            throw new \InvalidArgumentException('non-nullable sis_id cannot be null');
        }

        $this->container['sis_id'] = $sis_id;

        return $this;
    }

    /**
     * Gets state_id
     *
     * @return string|null
     */
    public function getStateId()
    {
        return $this->container['state_id'];
    }

    /**
     * Sets state_id
     *
     * @param string|null $state_id state_id
     *
     * @return self
     */
    public function setStateId($state_id)
    {

        if (is_null($state_id)) {
            array_push($this->openAPINullablesSetToNull, 'state_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('state_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['state_id'] = $state_id;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
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
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
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
    public function offsetSet($offset, $value): void
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
    public function offsetUnset($offset): void
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
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
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
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


