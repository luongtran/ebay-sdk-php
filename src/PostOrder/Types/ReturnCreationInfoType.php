<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace LT\eBaySDK\PostOrder\Types;

/**
 *
 * @property \LT\eBaySDK\PostOrder\Types\Text $comments
 * @property \LT\eBaySDK\PostOrder\Types\DateTime $creationDate
 * @property \LT\eBaySDK\PostOrder\Types\ReturnItemType $item
 * @property \LT\eBaySDK\PostOrder\Enums\ReturnReasonEnum $reason
 * @property \LT\eBaySDK\PostOrder\Enums\ReturnTypeEnum $type
 */
class ReturnCreationInfoType extends \LT\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'comments' => [
            'type' => 'LT\eBaySDK\PostOrder\Types\Text',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'comments'
        ],
        'creationDate' => [
            'type' => 'LT\eBaySDK\PostOrder\Types\DateTime',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'creationDate'
        ],
        'item' => [
            'type' => 'LT\eBaySDK\PostOrder\Types\ReturnItemType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'item'
        ],
        'reason' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'reason'
        ],
        'type' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'type'
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
