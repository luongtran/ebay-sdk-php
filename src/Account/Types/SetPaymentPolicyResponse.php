<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace LT\eBaySDK\Account\Types;

/**
 *
 * @property \LT\eBaySDK\Account\Types\CategoryType[] $categoryTypes
 * @property \LT\eBaySDK\Account\Types\Deposit $deposit
 * @property string $description
 * @property \LT\eBaySDK\Account\Types\TimeDuration $fullPaymentDueIn
 * @property boolean $immediatePay
 * @property \LT\eBaySDK\Account\Enums\MarketplaceIdEnum $marketplaceId
 * @property string $name
 * @property string $paymentInstructions
 * @property \LT\eBaySDK\Account\Types\PaymentMethod[] $paymentMethods
 * @property string $paymentPolicyId
 * @property \LT\eBaySDK\Account\Types\ErrorDetailV3[] $warnings
 */
class SetPaymentPolicyResponse extends \LT\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'categoryTypes' => [
            'type' => 'LT\eBaySDK\Account\Types\CategoryType',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'categoryTypes'
        ],
        'deposit' => [
            'type' => 'LT\eBaySDK\Account\Types\Deposit',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'deposit'
        ],
        'description' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'description'
        ],
        'fullPaymentDueIn' => [
            'type' => 'LT\eBaySDK\Account\Types\TimeDuration',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'fullPaymentDueIn'
        ],
        'immediatePay' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'immediatePay'
        ],
        'marketplaceId' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'marketplaceId'
        ],
        'name' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'name'
        ],
        'paymentInstructions' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'paymentInstructions'
        ],
        'paymentMethods' => [
            'type' => 'LT\eBaySDK\Account\Types\PaymentMethod',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'paymentMethods'
        ],
        'paymentPolicyId' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'paymentPolicyId'
        ],
        'warnings' => [
            'type' => 'LT\eBaySDK\Account\Types\ErrorDetailV3',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'warnings'
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
