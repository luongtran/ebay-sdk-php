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
 * @property string $UserID
 * @property boolean $FeedbackPrivate
 * @property \LT\eBaySDK\Shopping\Enums\FeedbackRatingStarCodeType $FeedbackRatingStar
 * @property integer $FeedbackScore
 * @property boolean $UserAnonymized
 * @property boolean $NewUser
 * @property \DateTime $RegistrationDate
 * @property \LT\eBaySDK\Shopping\Enums\SiteCodeType $RegistrationSite
 * @property \LT\eBaySDK\Shopping\Enums\UserStatusCodeType $Status
 * @property \LT\eBaySDK\Shopping\Enums\SellerBusinessCodeType $SellerBusinessType
 * @property string $StoreURL
 * @property string $StoreName
 * @property string $SellerItemsURL
 * @property string $AboutMeURL
 * @property string $MyWorldURL
 * @property string $MyWorldSmallImage
 * @property string $MyWorldLargeImage
 * @property string $ReviewsAndGuidesURL
 * @property string $FeedbackDetailsURL
 * @property double $PositiveFeedbackPercent
 * @property \LT\eBaySDK\Shopping\Enums\SellerLevelCodeType $SellerLevel
 * @property boolean $TopRatedSeller
 */
class SimpleUserType extends \LT\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'UserID' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'UserID'
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
        'FeedbackScore' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'FeedbackScore'
        ],
        'UserAnonymized' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'UserAnonymized'
        ],
        'NewUser' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'NewUser'
        ],
        'RegistrationDate' => [
            'type' => 'DateTime',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'RegistrationDate'
        ],
        'RegistrationSite' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'RegistrationSite'
        ],
        'Status' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'Status'
        ],
        'SellerBusinessType' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'SellerBusinessType'
        ],
        'StoreURL' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'StoreURL'
        ],
        'StoreName' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'StoreName'
        ],
        'SellerItemsURL' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'SellerItemsURL'
        ],
        'AboutMeURL' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'AboutMeURL'
        ],
        'MyWorldURL' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'MyWorldURL'
        ],
        'MyWorldSmallImage' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'MyWorldSmallImage'
        ],
        'MyWorldLargeImage' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'MyWorldLargeImage'
        ],
        'ReviewsAndGuidesURL' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ReviewsAndGuidesURL'
        ],
        'FeedbackDetailsURL' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'FeedbackDetailsURL'
        ],
        'PositiveFeedbackPercent' => [
            'type' => 'double',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'PositiveFeedbackPercent'
        ],
        'SellerLevel' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'SellerLevel'
        ],
        'TopRatedSeller' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'TopRatedSeller'
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
