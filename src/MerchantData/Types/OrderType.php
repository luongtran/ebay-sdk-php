<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace LT\eBaySDK\MerchantData\Types;

/**
 *
 * @property string $OrderID
 * @property \LT\eBaySDK\MerchantData\Enums\OrderStatusCodeType $OrderStatus
 * @property \LT\eBaySDK\MerchantData\Types\AmountType $AdjustmentAmount
 * @property \LT\eBaySDK\MerchantData\Types\AmountType $AmountPaid
 * @property \LT\eBaySDK\MerchantData\Types\AmountType $AmountSaved
 * @property \LT\eBaySDK\MerchantData\Types\CheckoutStatusType $CheckoutStatus
 * @property \LT\eBaySDK\MerchantData\Types\ShippingDetailsType $ShippingDetails
 * @property \LT\eBaySDK\MerchantData\Enums\TradingRoleCodeType $CreatingUserRole
 * @property \DateTime $CreatedTime
 * @property \LT\eBaySDK\MerchantData\Enums\BuyerPaymentMethodCodeType[] $PaymentMethods
 * @property string $SellerEmail
 * @property \LT\eBaySDK\MerchantData\Types\AddressType $ShippingAddress
 * @property \LT\eBaySDK\MerchantData\Types\ShippingServiceOptionsType $ShippingServiceSelected
 * @property \LT\eBaySDK\MerchantData\Types\AmountType $Subtotal
 * @property \LT\eBaySDK\MerchantData\Types\AmountType $Total
 * @property \LT\eBaySDK\MerchantData\Types\ExternalTransactionType[] $ExternalTransaction
 * @property \LT\eBaySDK\MerchantData\Types\TransactionArrayType $TransactionArray
 * @property string $BuyerUserID
 * @property \DateTime $PaidTime
 * @property \DateTime $ShippedTime
 * @property boolean $IntegratedMerchantCreditCardEnabled
 * @property string $BuyerCheckoutMessage
 * @property string $EIASToken
 * @property \LT\eBaySDK\MerchantData\Enums\PaymentHoldStatusCodeType $PaymentHoldStatus
 * @property \LT\eBaySDK\MerchantData\Types\PaymentHoldDetailType $PaymentHoldDetails
 * @property \LT\eBaySDK\MerchantData\Types\AmountType $RefundAmount
 * @property string $RefundStatus
 * @property \LT\eBaySDK\MerchantData\Types\RefundArrayType $RefundArray
 * @property boolean $IsMultiLegShipping
 * @property \LT\eBaySDK\MerchantData\Types\MultiLegShippingDetailsType $MultiLegShippingDetails
 * @property \LT\eBaySDK\MerchantData\Types\PaymentsInformationType $MonetaryDetails
 * @property \LT\eBaySDK\MerchantData\Types\PickupDetailsType $PickupDetails
 * @property \LT\eBaySDK\MerchantData\Types\PickupMethodSelectedType $PickupMethodSelected
 * @property string $SellerUserID
 * @property string $SellerEIASToken
 * @property string $CancelReason
 * @property \LT\eBaySDK\MerchantData\Enums\CancelStatusCodeType $CancelStatus
 * @property string $CancelReasonDetails
 * @property \LT\eBaySDK\MerchantData\Types\AmountType $ShippingConvenienceCharge
 * @property \LT\eBaySDK\MerchantData\Types\CancelDetailType[] $CancelDetail
 * @property string $LogisticsPlanType
 * @property \LT\eBaySDK\MerchantData\Types\TaxIdentifierType[] $BuyerTaxIdentifier
 * @property \LT\eBaySDK\MerchantData\Types\BuyerPackageEnclosuresType $BuyerPackageEnclosures
 * @property string $ExtendedOrderID
 * @property boolean $ContainseBayPlusTransaction
 */
class OrderType extends \LT\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'OrderID' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'OrderID'
        ],
        'OrderStatus' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'OrderStatus'
        ],
        'AdjustmentAmount' => [
            'type' => 'LT\eBaySDK\MerchantData\Types\AmountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'AdjustmentAmount'
        ],
        'AmountPaid' => [
            'type' => 'LT\eBaySDK\MerchantData\Types\AmountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'AmountPaid'
        ],
        'AmountSaved' => [
            'type' => 'LT\eBaySDK\MerchantData\Types\AmountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'AmountSaved'
        ],
        'CheckoutStatus' => [
            'type' => 'LT\eBaySDK\MerchantData\Types\CheckoutStatusType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'CheckoutStatus'
        ],
        'ShippingDetails' => [
            'type' => 'LT\eBaySDK\MerchantData\Types\ShippingDetailsType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ShippingDetails'
        ],
        'CreatingUserRole' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'CreatingUserRole'
        ],
        'CreatedTime' => [
            'type' => 'DateTime',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'CreatedTime'
        ],
        'PaymentMethods' => [
            'type' => 'string',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'PaymentMethods'
        ],
        'SellerEmail' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'SellerEmail'
        ],
        'ShippingAddress' => [
            'type' => 'LT\eBaySDK\MerchantData\Types\AddressType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ShippingAddress'
        ],
        'ShippingServiceSelected' => [
            'type' => 'LT\eBaySDK\MerchantData\Types\ShippingServiceOptionsType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ShippingServiceSelected'
        ],
        'Subtotal' => [
            'type' => 'LT\eBaySDK\MerchantData\Types\AmountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'Subtotal'
        ],
        'Total' => [
            'type' => 'LT\eBaySDK\MerchantData\Types\AmountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'Total'
        ],
        'ExternalTransaction' => [
            'type' => 'LT\eBaySDK\MerchantData\Types\ExternalTransactionType',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'ExternalTransaction'
        ],
        'TransactionArray' => [
            'type' => 'LT\eBaySDK\MerchantData\Types\TransactionArrayType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'TransactionArray'
        ],
        'BuyerUserID' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'BuyerUserID'
        ],
        'PaidTime' => [
            'type' => 'DateTime',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'PaidTime'
        ],
        'ShippedTime' => [
            'type' => 'DateTime',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ShippedTime'
        ],
        'IntegratedMerchantCreditCardEnabled' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'IntegratedMerchantCreditCardEnabled'
        ],
        'BuyerCheckoutMessage' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'BuyerCheckoutMessage'
        ],
        'EIASToken' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'EIASToken'
        ],
        'PaymentHoldStatus' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'PaymentHoldStatus'
        ],
        'PaymentHoldDetails' => [
            'type' => 'LT\eBaySDK\MerchantData\Types\PaymentHoldDetailType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'PaymentHoldDetails'
        ],
        'RefundAmount' => [
            'type' => 'LT\eBaySDK\MerchantData\Types\AmountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'RefundAmount'
        ],
        'RefundStatus' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'RefundStatus'
        ],
        'RefundArray' => [
            'type' => 'LT\eBaySDK\MerchantData\Types\RefundArrayType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'RefundArray'
        ],
        'IsMultiLegShipping' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'IsMultiLegShipping'
        ],
        'MultiLegShippingDetails' => [
            'type' => 'LT\eBaySDK\MerchantData\Types\MultiLegShippingDetailsType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'MultiLegShippingDetails'
        ],
        'MonetaryDetails' => [
            'type' => 'LT\eBaySDK\MerchantData\Types\PaymentsInformationType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'MonetaryDetails'
        ],
        'PickupDetails' => [
            'type' => 'LT\eBaySDK\MerchantData\Types\PickupDetailsType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'PickupDetails'
        ],
        'PickupMethodSelected' => [
            'type' => 'LT\eBaySDK\MerchantData\Types\PickupMethodSelectedType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'PickupMethodSelected'
        ],
        'SellerUserID' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'SellerUserID'
        ],
        'SellerEIASToken' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'SellerEIASToken'
        ],
        'CancelReason' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'CancelReason'
        ],
        'CancelStatus' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'CancelStatus'
        ],
        'CancelReasonDetails' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'CancelReasonDetails'
        ],
        'ShippingConvenienceCharge' => [
            'type' => 'LT\eBaySDK\MerchantData\Types\AmountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ShippingConvenienceCharge'
        ],
        'CancelDetail' => [
            'type' => 'LT\eBaySDK\MerchantData\Types\CancelDetailType',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'CancelDetail'
        ],
        'LogisticsPlanType' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'LogisticsPlanType'
        ],
        'BuyerTaxIdentifier' => [
            'type' => 'LT\eBaySDK\MerchantData\Types\TaxIdentifierType',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'BuyerTaxIdentifier'
        ],
        'BuyerPackageEnclosures' => [
            'type' => 'LT\eBaySDK\MerchantData\Types\BuyerPackageEnclosuresType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'BuyerPackageEnclosures'
        ],
        'ExtendedOrderID' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ExtendedOrderID'
        ],
        'ContainseBayPlusTransaction' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ContainseBayPlusTransaction'
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
