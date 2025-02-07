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
 * @property boolean $ShowBidderNoticePreferences
 * @property boolean $ShowCombinedPaymentPreferences
 * @property boolean $ShowSellerPaymentPreferences
 * @property boolean $ShowEndOfAuctionEmailPreferences
 * @property boolean $ShowSellerFavoriteItemPreferences
 * @property boolean $ShowEmailShipmentTrackingNumberPreference
 * @property boolean $ShowRequiredShipPhoneNumberPreference
 * @property boolean $ShowSellerExcludeShipToLocationPreference
 * @property boolean $ShowUnpaidItemAssistancePreference
 * @property boolean $ShowPurchaseReminderEmailPreferences
 * @property boolean $ShowUnpaidItemAssistanceExclusionList
 * @property boolean $ShowSellerProfilePreferences
 * @property boolean $ShowSellerReturnPreferences
 * @property boolean $ShowGlobalShippingProgramPreference
 * @property boolean $ShowDispatchCutoffTimePreferences
 * @property boolean $ShowGlobalShippingProgramListingPreference
 * @property boolean $ShowOverrideGSPServiceWithIntlServicePreference
 * @property boolean $ShowPickupDropoffPreferences
 * @property boolean $ShowOutOfStockControlPreference
 * @property boolean $ShoweBayPLUSPreference
 */
class GetUserPreferencesRequestType extends \LT\eBaySDK\Trading\Types\AbstractRequestType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'ShowBidderNoticePreferences' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ShowBidderNoticePreferences'
        ],
        'ShowCombinedPaymentPreferences' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ShowCombinedPaymentPreferences'
        ],
        'ShowSellerPaymentPreferences' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ShowSellerPaymentPreferences'
        ],
        'ShowEndOfAuctionEmailPreferences' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ShowEndOfAuctionEmailPreferences'
        ],
        'ShowSellerFavoriteItemPreferences' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ShowSellerFavoriteItemPreferences'
        ],
        'ShowEmailShipmentTrackingNumberPreference' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ShowEmailShipmentTrackingNumberPreference'
        ],
        'ShowRequiredShipPhoneNumberPreference' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ShowRequiredShipPhoneNumberPreference'
        ],
        'ShowSellerExcludeShipToLocationPreference' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ShowSellerExcludeShipToLocationPreference'
        ],
        'ShowUnpaidItemAssistancePreference' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ShowUnpaidItemAssistancePreference'
        ],
        'ShowPurchaseReminderEmailPreferences' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ShowPurchaseReminderEmailPreferences'
        ],
        'ShowUnpaidItemAssistanceExclusionList' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ShowUnpaidItemAssistanceExclusionList'
        ],
        'ShowSellerProfilePreferences' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ShowSellerProfilePreferences'
        ],
        'ShowSellerReturnPreferences' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ShowSellerReturnPreferences'
        ],
        'ShowGlobalShippingProgramPreference' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ShowGlobalShippingProgramPreference'
        ],
        'ShowDispatchCutoffTimePreferences' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ShowDispatchCutoffTimePreferences'
        ],
        'ShowGlobalShippingProgramListingPreference' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ShowGlobalShippingProgramListingPreference'
        ],
        'ShowOverrideGSPServiceWithIntlServicePreference' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ShowOverrideGSPServiceWithIntlServicePreference'
        ],
        'ShowPickupDropoffPreferences' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ShowPickupDropoffPreferences'
        ],
        'ShowOutOfStockControlPreference' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ShowOutOfStockControlPreference'
        ],
        'ShoweBayPLUSPreference' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ShoweBayPLUSPreference'
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
            self::$requestXmlRootElementNames[__CLASS__] = 'GetUserPreferencesRequest';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
