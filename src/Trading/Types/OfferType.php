<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace LT\eBaySDK\Trading\Types;

/**
 *
 * @property \LT\eBaySDK\Trading\Enums\BidActionCodeType $Action
 * @property \LT\eBaySDK\Trading\Enums\CurrencyCodeType $Currency
 * @property \LT\eBaySDK\Trading\Types\AmountType $MaxBid
 * @property integer $Quantity
 * @property boolean $SecondChanceEnabled
 * @property \LT\eBaySDK\Trading\Enums\CurrencyCodeType $SiteCurrency
 * @property \DateTime $TimeBid
 * @property \LT\eBaySDK\Trading\Types\AmountType $HighestBid
 * @property \LT\eBaySDK\Trading\Types\AmountType $ConvertedPrice
 * @property \LT\eBaySDK\Trading\Types\UserType $User
 * @property boolean $UserConsent
 * @property string $Message
 * @property string $BestOfferID
 * @property \LT\eBaySDK\Trading\Types\AmountType $MyMaxBid
 */
class OfferType extends \LT\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'Action' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'Action'
        ],
        'Currency' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'Currency'
        ],
        'MaxBid' => [
            'type' => 'LT\eBaySDK\Trading\Types\AmountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'MaxBid'
        ],
        'Quantity' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'Quantity'
        ],
        'SecondChanceEnabled' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'SecondChanceEnabled'
        ],
        'SiteCurrency' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'SiteCurrency'
        ],
        'TimeBid' => [
            'type' => 'DateTime',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'TimeBid'
        ],
        'HighestBid' => [
            'type' => 'LT\eBaySDK\Trading\Types\AmountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'HighestBid'
        ],
        'ConvertedPrice' => [
            'type' => 'LT\eBaySDK\Trading\Types\AmountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ConvertedPrice'
        ],
        'User' => [
            'type' => 'LT\eBaySDK\Trading\Types\UserType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'User'
        ],
        'UserConsent' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'UserConsent'
        ],
        'Message' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'Message'
        ],
        'BestOfferID' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'BestOfferID'
        ],
        'MyMaxBid' => [
            'type' => 'LT\eBaySDK\Trading\Types\AmountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'MyMaxBid'
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
