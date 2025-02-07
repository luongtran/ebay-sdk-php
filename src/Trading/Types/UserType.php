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
 * @property boolean $AboutMePage
 * @property string $EIASToken
 * @property string $Email
 * @property integer $FeedbackScore
 * @property integer $UniqueNegativeFeedbackCount
 * @property integer $UniquePositiveFeedbackCount
 * @property double $PositiveFeedbackPercent
 * @property boolean $FeedbackPrivate
 * @property \LT\eBaySDK\Trading\Enums\FeedbackRatingStarCodeType $FeedbackRatingStar
 * @property boolean $IDVerified
 * @property boolean $eBayGoodStanding
 * @property boolean $NewUser
 * @property \LT\eBaySDK\Trading\Types\AddressType $RegistrationAddress
 * @property \DateTime $RegistrationDate
 * @property \LT\eBaySDK\Trading\Enums\SiteCodeType $Site
 * @property \LT\eBaySDK\Trading\Enums\UserStatusCodeType $Status
 * @property string $UserID
 * @property boolean $UserIDChanged
 * @property \DateTime $UserIDLastChanged
 * @property \LT\eBaySDK\Trading\Enums\VATStatusCodeType $VATStatus
 * @property \LT\eBaySDK\Trading\Types\BuyerType $BuyerInfo
 * @property \LT\eBaySDK\Trading\Types\SellerType $SellerInfo
 * @property \LT\eBaySDK\Trading\Enums\BusinessRoleType $BusinessRole
 * @property \LT\eBaySDK\Trading\Enums\PayPalAccountLevelCodeType $PayPalAccountLevel
 * @property \LT\eBaySDK\Trading\Enums\PayPalAccountTypeCodeType $PayPalAccountType
 * @property \LT\eBaySDK\Trading\Enums\PayPalAccountStatusCodeType $PayPalAccountStatus
 * @property \LT\eBaySDK\Trading\Enums\EBaySubscriptionTypeCodeType[] $UserSubscription
 * @property boolean $eBayWikiReadOnly
 * @property integer $TUVLevel
 * @property string $VATID
 * @property boolean $MotorsDealer
 * @property \LT\eBaySDK\Trading\Types\BiddingSummaryType $BiddingSummary
 * @property boolean $UserAnonymized
 * @property integer $UniqueNeutralFeedbackCount
 * @property boolean $EnterpriseSeller
 * @property string $BillingEmail
 * @property boolean $QualifiesForSelling
 * @property string $StaticAlias
 * @property \LT\eBaySDK\Trading\Types\AddressType $ShippingAddress
 * @property \LT\eBaySDK\Trading\Types\MembershipDetailsType $Membership
 * @property string $UserFirstName
 * @property string $UserLastName
 */
class UserType extends \LT\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'AboutMePage' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'AboutMePage'
        ],
        'EIASToken' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'EIASToken'
        ],
        'Email' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'Email'
        ],
        'FeedbackScore' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'FeedbackScore'
        ],
        'UniqueNegativeFeedbackCount' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'UniqueNegativeFeedbackCount'
        ],
        'UniquePositiveFeedbackCount' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'UniquePositiveFeedbackCount'
        ],
        'PositiveFeedbackPercent' => [
            'type' => 'double',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'PositiveFeedbackPercent'
        ],
        'FeedbackPrivate' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'FeedbackPrivate'
        ],
        'FeedbackRatingStar' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'FeedbackRatingStar'
        ],
        'IDVerified' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'IDVerified'
        ],
        'eBayGoodStanding' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'eBayGoodStanding'
        ],
        'NewUser' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'NewUser'
        ],
        'RegistrationAddress' => [
            'type' => 'LT\eBaySDK\Trading\Types\AddressType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'RegistrationAddress'
        ],
        'RegistrationDate' => [
            'type' => 'DateTime',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'RegistrationDate'
        ],
        'Site' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'Site'
        ],
        'Status' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'Status'
        ],
        'UserID' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'UserID'
        ],
        'UserIDChanged' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'UserIDChanged'
        ],
        'UserIDLastChanged' => [
            'type' => 'DateTime',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'UserIDLastChanged'
        ],
        'VATStatus' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'VATStatus'
        ],
        'BuyerInfo' => [
            'type' => 'LT\eBaySDK\Trading\Types\BuyerType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'BuyerInfo'
        ],
        'SellerInfo' => [
            'type' => 'LT\eBaySDK\Trading\Types\SellerType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'SellerInfo'
        ],
        'BusinessRole' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'BusinessRole'
        ],
        'PayPalAccountLevel' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'PayPalAccountLevel'
        ],
        'PayPalAccountType' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'PayPalAccountType'
        ],
        'PayPalAccountStatus' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'PayPalAccountStatus'
        ],
        'UserSubscription' => [
            'type' => 'string',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'UserSubscription'
        ],
        'eBayWikiReadOnly' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'eBayWikiReadOnly'
        ],
        'TUVLevel' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'TUVLevel'
        ],
        'VATID' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'VATID'
        ],
        'MotorsDealer' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'MotorsDealer'
        ],
        'BiddingSummary' => [
            'type' => 'LT\eBaySDK\Trading\Types\BiddingSummaryType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'BiddingSummary'
        ],
        'UserAnonymized' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'UserAnonymized'
        ],
        'UniqueNeutralFeedbackCount' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'UniqueNeutralFeedbackCount'
        ],
        'EnterpriseSeller' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'EnterpriseSeller'
        ],
        'BillingEmail' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'BillingEmail'
        ],
        'QualifiesForSelling' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'QualifiesForSelling'
        ],
        'StaticAlias' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'StaticAlias'
        ],
        'ShippingAddress' => [
            'type' => 'LT\eBaySDK\Trading\Types\AddressType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ShippingAddress'
        ],
        'Membership' => [
            'type' => 'LT\eBaySDK\Trading\Types\MembershipDetailsType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'Membership'
        ],
        'UserFirstName' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'UserFirstName'
        ],
        'UserLastName' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'UserLastName'
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
