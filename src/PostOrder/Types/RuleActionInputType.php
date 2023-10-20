<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace LT\eBaySDK\PostOrder\Types;

/**
 *
 * @property \LT\eBaySDK\PostOrder\Types\RuleActionDataDetailType[] $actionData
 * @property \LT\eBaySDK\PostOrder\Types\RuleActionDataType $actionDataType
 */
class RuleActionInputType extends \LT\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'actionData' => [
            'type' => 'LT\eBaySDK\PostOrder\Types\RuleActionDataDetailType',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'actionData'
        ],
        'actionDataType' => [
            'type' => 'LT\eBaySDK\PostOrder\Types\RuleActionDataType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'actionDataType'
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
