<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace LT\eBaySDK\BusinessPoliciesManagement\Types;

/**
 *
 * @property string $description
 * @property string $refundOption
 * @property string $shippingCostPaidByOption
 * @property string $returnsWithinOption
 * @property string $returnsAcceptedOption
 * @property string $warrantyOfferedOption
 * @property string $warrantyTypeOption
 * @property string $warrantyDurationOption
 * @property string $restockingFeeValue
 * @property string $holidayReturns
 */
class ReturnPolicyInfo extends \LT\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'description' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'description'
        ],
        'refundOption' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'refundOption'
        ],
        'shippingCostPaidByOption' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'shippingCostPaidByOption'
        ],
        'returnsWithinOption' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'returnsWithinOption'
        ],
        'returnsAcceptedOption' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'returnsAcceptedOption'
        ],
        'warrantyOfferedOption' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'warrantyOfferedOption'
        ],
        'warrantyTypeOption' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'warrantyTypeOption'
        ],
        'warrantyDurationOption' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'warrantyDurationOption'
        ],
        'restockingFeeValue' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'restockingFeeValue'
        ],
        'holidayReturns' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'holidayReturns'
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
            self::$xmlNamespaces[__CLASS__] = 'xmlns="http://www.ebay.com/marketplace/selling/v1/services"';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
