<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace LT\eBaySDK\Metadata\Types;

/**
 *
 * @property string $categoryId
 * @property string $categoryTreeId
 * @property \LT\eBaySDK\Metadata\Enums\CompatibilityTypeEnum $compatibilityBasedOn
 * @property \LT\eBaySDK\Metadata\Enums\CompatibleVehicleTypeEnum[] $compatibleVehicleTypes
 * @property integer $maxNumberOfCompatibleVehicles
 */
class AutomotivePartsCompatibilityPolicy extends \LT\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'categoryId' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'categoryId'
        ],
        'categoryTreeId' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'categoryTreeId'
        ],
        'compatibilityBasedOn' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'compatibilityBasedOn'
        ],
        'compatibleVehicleTypes' => [
            'type' => 'string',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'compatibleVehicleTypes'
        ],
        'maxNumberOfCompatibleVehicles' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'maxNumberOfCompatibleVehicles'
        ]
    ];

    /**
     * @param array $values Optional properties and values to assign to the object.
     */
    public function __construct(array $values = [])
    {
        list($parentValues, $childValues) = self::getParentValues(self::$propertyTypes, $values);

        parent::__construct($parentValues);

        if (!array_key_exists(__CLASS__, self::$properties)) {
            self::$properties[__CLASS__] = array_merge(self::$properties[get_parent_class()], self::$propertyTypes);
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
