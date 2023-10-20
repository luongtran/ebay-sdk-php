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
 * @property string[] $shipToLocation
 * @property string $shippingService
 * @property integer $sortOrderId
 * @property boolean $freeShipping
 * @property \LT\eBaySDK\BusinessPoliciesManagement\Types\Amount $codFee
 * @property boolean $fastShipping
 * @property \LT\eBaySDK\BusinessPoliciesManagement\Types\Amount $shippingServiceAdditionalCost
 * @property \LT\eBaySDK\BusinessPoliciesManagement\Types\Amount $shippingServiceCost
 * @property \LT\eBaySDK\BusinessPoliciesManagement\Types\Amount $shippingSurcharge
 * @property boolean $buyerResponsibleForShipping
 * @property boolean $buyerResponsibleForPickup
 */
class ShippingPolicyInfoService extends \LT\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'shipToLocation' => [
            'type' => 'string',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'shipToLocation'
        ],
        'shippingService' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'shippingService'
        ],
        'sortOrderId' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'sortOrderId'
        ],
        'freeShipping' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'freeShipping'
        ],
        'codFee' => [
            'type' => 'LT\eBaySDK\BusinessPoliciesManagement\Types\Amount',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'codFee'
        ],
        'fastShipping' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'fastShipping'
        ],
        'shippingServiceAdditionalCost' => [
            'type' => 'LT\eBaySDK\BusinessPoliciesManagement\Types\Amount',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'shippingServiceAdditionalCost'
        ],
        'shippingServiceCost' => [
            'type' => 'LT\eBaySDK\BusinessPoliciesManagement\Types\Amount',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'shippingServiceCost'
        ],
        'shippingSurcharge' => [
            'type' => 'LT\eBaySDK\BusinessPoliciesManagement\Types\Amount',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'shippingSurcharge'
        ],
        'buyerResponsibleForShipping' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'buyerResponsibleForShipping'
        ],
        'buyerResponsibleForPickup' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'buyerResponsibleForPickup'
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
