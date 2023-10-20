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
 * @property string $PictureName
 * @property \LT\eBaySDK\MerchantData\Enums\PictureSetCodeType $PictureSet
 * @property \LT\eBaySDK\MerchantData\Enums\PictureFormatCodeType $PictureFormat
 * @property string $FullURL
 * @property string $BaseURL
 * @property \LT\eBaySDK\MerchantData\Types\PictureSetMemberType[] $PictureSetMember
 * @property string $ExternalPictureURL
 * @property \DateTime $UseByDate
 */
class SiteHostedPictureDetailsType extends \LT\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'PictureName' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'PictureName'
        ],
        'PictureSet' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'PictureSet'
        ],
        'PictureFormat' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'PictureFormat'
        ],
        'FullURL' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'FullURL'
        ],
        'BaseURL' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'BaseURL'
        ],
        'PictureSetMember' => [
            'type' => 'LT\eBaySDK\MerchantData\Types\PictureSetMemberType',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'PictureSetMember'
        ],
        'ExternalPictureURL' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ExternalPictureURL'
        ],
        'UseByDate' => [
            'type' => 'DateTime',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'UseByDate'
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
