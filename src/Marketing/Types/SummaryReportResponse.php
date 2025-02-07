<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace LT\eBaySDK\Marketing\Types;

/**
 *
 * @property \LT\eBaySDK\Marketing\Types\Amount $baseSale
 * @property string $lastUpdated
 * @property string $percentageSalesLift
 * @property \LT\eBaySDK\Marketing\Types\Amount $promotionSale
 * @property \LT\eBaySDK\Marketing\Types\Amount $totalSale
 */
class SummaryReportResponse extends \LT\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'baseSale' => [
            'type' => 'LT\eBaySDK\Marketing\Types\Amount',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'baseSale'
        ],
        'lastUpdated' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'lastUpdated'
        ],
        'percentageSalesLift' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'percentageSalesLift'
        ],
        'promotionSale' => [
            'type' => 'LT\eBaySDK\Marketing\Types\Amount',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'promotionSale'
        ],
        'totalSale' => [
            'type' => 'LT\eBaySDK\Marketing\Types\Amount',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'totalSale'
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
