<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace LT\eBaySDK\Shopping\Types;

/**
 *
 * @property \LT\eBaySDK\Shopping\Types\AmountType $ShippingInsuranceCost
 * @property string $ShippingServiceName
 * @property \LT\eBaySDK\Shopping\Types\AmountType $ShippingServiceCost
 * @property \LT\eBaySDK\Shopping\Types\AmountType $ShippingServiceAdditionalCost
 * @property integer $ShippingServicePriority
 * @property boolean $ExpeditedService
 * @property integer $ShippingTimeMin
 * @property integer $ShippingTimeMax
 * @property \LT\eBaySDK\Shopping\Types\AmountType $ShippingSurcharge
 * @property string[] $ShipsTo
 * @property \DateTime $EstimatedDeliveryMinTime
 * @property \DateTime $EstimatedDeliveryMaxTime
 * @property boolean $FastAndFree
 * @property \DateTime $ShippingServiceCutOffTime
 */
class ShippingServiceOptionType extends \LT\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'ShippingInsuranceCost' => [
            'type' => 'LT\eBaySDK\Shopping\Types\AmountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ShippingInsuranceCost'
        ],
        'ShippingServiceName' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ShippingServiceName'
        ],
        'ShippingServiceCost' => [
            'type' => 'LT\eBaySDK\Shopping\Types\AmountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ShippingServiceCost'
        ],
        'ShippingServiceAdditionalCost' => [
            'type' => 'LT\eBaySDK\Shopping\Types\AmountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ShippingServiceAdditionalCost'
        ],
        'ShippingServicePriority' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ShippingServicePriority'
        ],
        'ExpeditedService' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ExpeditedService'
        ],
        'ShippingTimeMin' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ShippingTimeMin'
        ],
        'ShippingTimeMax' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ShippingTimeMax'
        ],
        'ShippingSurcharge' => [
            'type' => 'LT\eBaySDK\Shopping\Types\AmountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ShippingSurcharge'
        ],
        'ShipsTo' => [
            'type' => 'string',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'ShipsTo'
        ],
        'EstimatedDeliveryMinTime' => [
            'type' => 'DateTime',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'EstimatedDeliveryMinTime'
        ],
        'EstimatedDeliveryMaxTime' => [
            'type' => 'DateTime',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'EstimatedDeliveryMaxTime'
        ],
        'FastAndFree' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'FastAndFree'
        ],
        'ShippingServiceCutOffTime' => [
            'type' => 'DateTime',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ShippingServiceCutOffTime'
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
