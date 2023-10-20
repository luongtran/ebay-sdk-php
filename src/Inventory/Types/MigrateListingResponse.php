<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace LT\eBaySDK\Inventory\Types;

/**
 *
 * @property \LT\eBaySDK\Inventory\Types\ErrorDetailV3[] $errors
 * @property string $inventoryItemGroupKey
 * @property \LT\eBaySDK\Inventory\Types\InventoryItemListing[] $inventoryItems
 * @property string $listingId
 * @property \LT\eBaySDK\Inventory\Enums\MarketplaceEnum $marketplaceId
 * @property integer $statusCode
 * @property \LT\eBaySDK\Inventory\Types\ErrorDetailV3[] $warnings
 */
class MigrateListingResponse extends \LT\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'errors' => [
            'type' => 'LT\eBaySDK\Inventory\Types\ErrorDetailV3',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'errors'
        ],
        'inventoryItemGroupKey' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'inventoryItemGroupKey'
        ],
        'inventoryItems' => [
            'type' => 'LT\eBaySDK\Inventory\Types\InventoryItemListing',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'inventoryItems'
        ],
        'listingId' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'listingId'
        ],
        'marketplaceId' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'marketplaceId'
        ],
        'statusCode' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'statusCode'
        ],
        'warnings' => [
            'type' => 'LT\eBaySDK\Inventory\Types\ErrorDetailV3',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'warnings'
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
