<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace LT\eBaySDK\Fulfillment\Types;

/**
 *
 * @property \LT\eBaySDK\Fulfillment\Types\Buyer $buyer
 * @property string $buyerCheckoutNotes
 * @property \LT\eBaySDK\Fulfillment\Types\CancelStatus $cancelStatus
 * @property string $creationDate
 * @property string[] $fulfillmentHrefs
 * @property \LT\eBaySDK\Fulfillment\Types\FulfillmentStartInstruction[] $fulfillmentStartInstructions
 * @property string $lastModifiedDate
 * @property \LT\eBaySDK\Fulfillment\Types\LineItem[] $lineItems
 * @property \LT\eBaySDK\Fulfillment\Enums\OrderFulfillmentStatus $orderFulfillmentStatus
 * @property string $orderId
 * @property \LT\eBaySDK\Fulfillment\Enums\OrderPaymentStatusEnum $orderPaymentStatus
 * @property \LT\eBaySDK\Fulfillment\Types\PaymentSummary $paymentSummary
 * @property \LT\eBaySDK\Fulfillment\Types\PricingSummary $pricingSummary
 * @property string $sellerId
 */
class Order extends \LT\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'buyer' => [
            'type' => 'LT\eBaySDK\Fulfillment\Types\Buyer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'buyer'
        ],
        'buyerCheckoutNotes' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'buyerCheckoutNotes'
        ],
        'cancelStatus' => [
            'type' => 'LT\eBaySDK\Fulfillment\Types\CancelStatus',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'cancelStatus'
        ],
        'creationDate' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'creationDate'
        ],
        'fulfillmentHrefs' => [
            'type' => 'string',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'fulfillmentHrefs'
        ],
        'fulfillmentStartInstructions' => [
            'type' => 'LT\eBaySDK\Fulfillment\Types\FulfillmentStartInstruction',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'fulfillmentStartInstructions'
        ],
        'lastModifiedDate' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'lastModifiedDate'
        ],
        'lineItems' => [
            'type' => 'LT\eBaySDK\Fulfillment\Types\LineItem',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'lineItems'
        ],
        'orderFulfillmentStatus' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'orderFulfillmentStatus'
        ],
        'orderId' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'orderId'
        ],
        'orderPaymentStatus' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'orderPaymentStatus'
        ],
        'paymentSummary' => [
            'type' => 'LT\eBaySDK\Fulfillment\Types\PaymentSummary',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'paymentSummary'
        ],
        'pricingSummary' => [
            'type' => 'LT\eBaySDK\Fulfillment\Types\PricingSummary',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'pricingSummary'
        ],
        'sellerId' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'sellerId'
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
