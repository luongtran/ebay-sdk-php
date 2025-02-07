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
 * @property integer $count
 * @property integer $countInTestMode
 * @property \LT\eBaySDK\PostOrder\Types\RuleActionDetailType $invalidAction
 * @property \LT\eBaySDK\PostOrder\Types\RuleConditionDetailType[] $invalidConditions
 * @property \DateTime $lastModifiedDate
 * @property integer $priority
 */
class RuleSummaryType extends \LT\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'count' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'count'
        ],
        'countInTestMode' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'countInTestMode'
        ],
        'invalidAction' => [
            'type' => 'LT\eBaySDK\PostOrder\Types\RuleActionDetailType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'invalidAction'
        ],
        'invalidConditions' => [
            'type' => 'LT\eBaySDK\PostOrder\Types\RuleConditionDetailType',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'invalidConditions'
        ],
        'lastModifiedDate' => [
            'type' => 'DateTime',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'lastModifiedDate'
        ],
        'priority' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'priority'
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
