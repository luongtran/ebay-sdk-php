<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace LT\eBaySDK\Finding\Types;

/**
 *
 * @property \LT\eBaySDK\Finding\Types\Amount $currentPrice
 * @property \LT\eBaySDK\Finding\Types\Amount $convertedCurrentPrice
 * @property integer $bidCount
 * @property string $sellingState
 * @property string $timeLeft
 */
class SellingStatus extends \LT\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'currentPrice' => [
            'type' => 'LT\eBaySDK\Finding\Types\Amount',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'currentPrice'
        ],
        'convertedCurrentPrice' => [
            'type' => 'LT\eBaySDK\Finding\Types\Amount',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'convertedCurrentPrice'
        ],
        'bidCount' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'bidCount'
        ],
        'sellingState' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'sellingState'
        ],
        'timeLeft' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'timeLeft'
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
            self::$xmlNamespaces[__CLASS__] = 'xmlns="http://www.ebay.com/marketplace/search/v1/services"';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
