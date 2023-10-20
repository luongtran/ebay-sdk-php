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
 * @property \LT\eBaySDK\PostOrder\Enums\CurrencyCodeEnum $convertedFromCurrency
 * @property double $convertedFromValue
 * @property \LT\eBaySDK\PostOrder\Enums\CurrencyCodeEnum $currency
 * @property double $value
 */
class Amount extends \LT\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'convertedFromCurrency' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'convertedFromCurrency'
        ],
        'convertedFromValue' => [
            'type' => 'double',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'convertedFromValue'
        ],
        'currency' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'currency'
        ],
        'value' => [
            'type' => 'double',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'value'
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
