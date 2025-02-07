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
 * @property \LT\eBaySDK\Trading\Types\BidderNoticePreferencesType $BidderNoticePreferences
 * @property \LT\eBaySDK\Trading\Types\CombinedPaymentPreferencesType $CombinedPaymentPreferences
 * @property \LT\eBaySDK\Trading\Types\SellerPaymentPreferencesType $SellerPaymentPreferences
 * @property \LT\eBaySDK\Trading\Types\SellerFavoriteItemPreferencesType $SellerFavoriteItemPreferences
 * @property \LT\eBaySDK\Trading\Types\EndOfAuctionEmailPreferencesType $EndOfAuctionEmailPreferences
 * @property boolean $EmailShipmentTrackingNumberPreference
 * @property boolean $RequiredShipPhoneNumberPreference
 * @property \LT\eBaySDK\Trading\Types\UnpaidItemAssistancePreferencesType $UnpaidItemAssistancePreferences
 * @property \LT\eBaySDK\Trading\Types\SellerExcludeShipToLocationPreferencesType $SellerExcludeShipToLocationPreferences
 * @property \LT\eBaySDK\Trading\Types\PurchaseReminderEmailPreferencesType $PurchaseReminderEmailPreferences
 * @property \LT\eBaySDK\Trading\Types\SellerProfilePreferencesType $SellerProfilePreferences
 * @property \LT\eBaySDK\Trading\Types\SellerReturnPreferencesType $SellerReturnPreferences
 * @property boolean $OfferGlobalShippingProgramPreference
 * @property \LT\eBaySDK\Trading\Types\DispatchCutoffTimePreferencesType $DispatchCutoffTimePreference
 * @property boolean $GlobalShippingProgramListingPreference
 * @property boolean $OverrideGSPServiceWithIntlServicePreference
 * @property boolean $PickupDropoffSellerPreference
 * @property boolean $OutOfStockControlPreference
 * @property \LT\eBaySDK\Trading\Types\EBayPLUSPreferenceType[] $eBayPLUSPreference
 */
class GetUserPreferencesResponseType extends \LT\eBaySDK\Trading\Types\AbstractResponseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'BidderNoticePreferences' => [
            'type' => 'LT\eBaySDK\Trading\Types\BidderNoticePreferencesType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'BidderNoticePreferences'
        ],
        'CombinedPaymentPreferences' => [
            'type' => 'LT\eBaySDK\Trading\Types\CombinedPaymentPreferencesType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'CombinedPaymentPreferences'
        ],
        'SellerPaymentPreferences' => [
            'type' => 'LT\eBaySDK\Trading\Types\SellerPaymentPreferencesType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'SellerPaymentPreferences'
        ],
        'SellerFavoriteItemPreferences' => [
            'type' => 'LT\eBaySDK\Trading\Types\SellerFavoriteItemPreferencesType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'SellerFavoriteItemPreferences'
        ],
        'EndOfAuctionEmailPreferences' => [
            'type' => 'LT\eBaySDK\Trading\Types\EndOfAuctionEmailPreferencesType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'EndOfAuctionEmailPreferences'
        ],
        'EmailShipmentTrackingNumberPreference' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'EmailShipmentTrackingNumberPreference'
        ],
        'RequiredShipPhoneNumberPreference' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'RequiredShipPhoneNumberPreference'
        ],
        'UnpaidItemAssistancePreferences' => [
            'type' => 'LT\eBaySDK\Trading\Types\UnpaidItemAssistancePreferencesType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'UnpaidItemAssistancePreferences'
        ],
        'SellerExcludeShipToLocationPreferences' => [
            'type' => 'LT\eBaySDK\Trading\Types\SellerExcludeShipToLocationPreferencesType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'SellerExcludeShipToLocationPreferences'
        ],
        'PurchaseReminderEmailPreferences' => [
            'type' => 'LT\eBaySDK\Trading\Types\PurchaseReminderEmailPreferencesType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'PurchaseReminderEmailPreferences'
        ],
        'SellerProfilePreferences' => [
            'type' => 'LT\eBaySDK\Trading\Types\SellerProfilePreferencesType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'SellerProfilePreferences'
        ],
        'SellerReturnPreferences' => [
            'type' => 'LT\eBaySDK\Trading\Types\SellerReturnPreferencesType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'SellerReturnPreferences'
        ],
        'OfferGlobalShippingProgramPreference' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'OfferGlobalShippingProgramPreference'
        ],
        'DispatchCutoffTimePreference' => [
            'type' => 'LT\eBaySDK\Trading\Types\DispatchCutoffTimePreferencesType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'DispatchCutoffTimePreference'
        ],
        'GlobalShippingProgramListingPreference' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'GlobalShippingProgramListingPreference'
        ],
        'OverrideGSPServiceWithIntlServicePreference' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'OverrideGSPServiceWithIntlServicePreference'
        ],
        'PickupDropoffSellerPreference' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'PickupDropoffSellerPreference'
        ],
        'OutOfStockControlPreference' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'OutOfStockControlPreference'
        ],
        'eBayPLUSPreference' => [
            'type' => 'LT\eBaySDK\Trading\Types\EBayPLUSPreferenceType',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'eBayPLUSPreference'
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
