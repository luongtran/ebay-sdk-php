<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace LT\eBaySDK\Trading\Types;

/**
 *
 * @property string $CallName
 * @property boolean $CountsTowardAggregate
 * @property integer $DailyHardLimit
 * @property integer $DailySoftLimit
 * @property integer $DailyUsage
 * @property integer $HourlyHardLimit
 * @property integer $HourlySoftLimit
 * @property integer $HourlyUsage
 * @property integer $Period
 * @property integer $PeriodicHardLimit
 * @property integer $PeriodicSoftLimit
 * @property integer $PeriodicUsage
 * @property \DateTime $PeriodicStartDate
 * @property \DateTime $ModTime
 * @property \LT\eBaySDK\Trading\Enums\AccessRuleCurrentStatusCodeType $RuleCurrentStatus
 * @property \LT\eBaySDK\Trading\Enums\AccessRuleStatusCodeType $RuleStatus
 */
class ApiAccessRuleType extends \LT\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'CallName' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'CallName'
        ],
        'CountsTowardAggregate' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'CountsTowardAggregate'
        ],
        'DailyHardLimit' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'DailyHardLimit'
        ],
        'DailySoftLimit' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'DailySoftLimit'
        ],
        'DailyUsage' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'DailyUsage'
        ],
        'HourlyHardLimit' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'HourlyHardLimit'
        ],
        'HourlySoftLimit' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'HourlySoftLimit'
        ],
        'HourlyUsage' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'HourlyUsage'
        ],
        'Period' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'Period'
        ],
        'PeriodicHardLimit' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'PeriodicHardLimit'
        ],
        'PeriodicSoftLimit' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'PeriodicSoftLimit'
        ],
        'PeriodicUsage' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'PeriodicUsage'
        ],
        'PeriodicStartDate' => [
            'type' => 'DateTime',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'PeriodicStartDate'
        ],
        'ModTime' => [
            'type' => 'DateTime',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ModTime'
        ],
        'RuleCurrentStatus' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'RuleCurrentStatus'
        ],
        'RuleStatus' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'RuleStatus'
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

        if (!array_key_exists(__CLASS__, self::$xmlNamespaces)) {
            self::$xmlNamespaces[__CLASS__] = 'xmlns="urn:ebay:apis:eBLBaseComponents"';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
