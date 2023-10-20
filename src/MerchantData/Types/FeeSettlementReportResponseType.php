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
 * @property string $InvoiceID
 * @property string $SellerID
 * @property string $AccountID
 * @property \DateTime $ReportStartTime
 * @property \DateTime $ReportEndTime
 * @property \DateTime $InvoiceProcessingTime
 * @property \DateTime $ReportProcessingTime
 * @property \LT\eBaySDK\MerchantData\Types\AmountType $FeeSettlementAmount
 * @property \LT\eBaySDK\MerchantData\Types\AmountType $LastInvoiceAmount
 * @property \LT\eBaySDK\MerchantData\Types\AmountType $FeeRoundingAdjustmentAmount
 * @property \LT\eBaySDK\MerchantData\Types\AmountType $FeeTotalUsageAdjustmentAmount
 * @property \LT\eBaySDK\MerchantData\Types\OrderDetailsType[] $OrderTransactionList
 * @property \LT\eBaySDK\MerchantData\Types\TransactionListType[] $ListingTransactionList
 * @property \LT\eBaySDK\MerchantData\Types\OrderDetailsType[] $OrderAdjustmentList
 * @property \LT\eBaySDK\MerchantData\Types\AccountTransactionType[] $AccountTransactionList
 * @property \LT\eBaySDK\MerchantData\Types\AccountTransactionType[] $DiscountTransactionList
 */
class FeeSettlementReportResponseType extends \LT\eBaySDK\MerchantData\Types\AbstractResponseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'InvoiceID' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'InvoiceID'
        ],
        'SellerID' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'SellerID'
        ],
        'AccountID' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'AccountID'
        ],
        'ReportStartTime' => [
            'type' => 'DateTime',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ReportStartTime'
        ],
        'ReportEndTime' => [
            'type' => 'DateTime',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ReportEndTime'
        ],
        'InvoiceProcessingTime' => [
            'type' => 'DateTime',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'InvoiceProcessingTime'
        ],
        'ReportProcessingTime' => [
            'type' => 'DateTime',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ReportProcessingTime'
        ],
        'FeeSettlementAmount' => [
            'type' => 'LT\eBaySDK\MerchantData\Types\AmountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'FeeSettlementAmount'
        ],
        'LastInvoiceAmount' => [
            'type' => 'LT\eBaySDK\MerchantData\Types\AmountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'LastInvoiceAmount'
        ],
        'FeeRoundingAdjustmentAmount' => [
            'type' => 'LT\eBaySDK\MerchantData\Types\AmountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'FeeRoundingAdjustmentAmount'
        ],
        'FeeTotalUsageAdjustmentAmount' => [
            'type' => 'LT\eBaySDK\MerchantData\Types\AmountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'FeeTotalUsageAdjustmentAmount'
        ],
        'OrderTransactionList' => [
            'type' => 'LT\eBaySDK\MerchantData\Types\OrderDetailsType',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'OrderTransactionList'
        ],
        'ListingTransactionList' => [
            'type' => 'LT\eBaySDK\MerchantData\Types\TransactionListType',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'ListingTransactionList'
        ],
        'OrderAdjustmentList' => [
            'type' => 'LT\eBaySDK\MerchantData\Types\OrderDetailsType',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'OrderAdjustmentList'
        ],
        'AccountTransactionList' => [
            'type' => 'LT\eBaySDK\MerchantData\Types\AccountTransactionType',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'AccountTransactionList'
        ],
        'DiscountTransactionList' => [
            'type' => 'LT\eBaySDK\MerchantData\Types\AccountTransactionType',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'DiscountTransactionList'
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

        if (!array_key_exists(__CLASS__, self::$requestXmlRootElementNames)) {
            self::$requestXmlRootElementNames[__CLASS__] = 'FeeSettlementReport';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
