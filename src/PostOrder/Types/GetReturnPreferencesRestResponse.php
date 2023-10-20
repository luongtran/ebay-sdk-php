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

use LT\eBaySDK\StatusCodeTrait;
use LT\eBaySDK\HttpHeadersTrait;

/**
 *
 * @property \LT\eBaySDK\PostOrder\Types\Error[] $error
 * @property \LT\eBaySDK\PostOrder\Types\ErrorDetailV3[] $errors
 * @property \LT\eBaySDK\PostOrder\Types\ErrorDetailV3[] $warnings
 */
class GetReturnPreferencesRestResponse extends \LT\eBaySDK\PostOrder\Types\GetSellerReturnPreferenceResponse
{
    use StatusCodeTrait;
    use HttpHeadersTrait;

    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'error' => [
            'type' => 'LT\eBaySDK\PostOrder\Types\Error',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'error'
        ],
        'errors' => [
            'type' => 'LT\eBaySDK\PostOrder\Types\ErrorDetailV3',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'errors'
        ],
        'warnings' => [
            'type' => 'LT\eBaySDK\PostOrder\Types\ErrorDetailV3',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'warnings'
        ]
    ];

    /**
     * @param array $values Optional properties and values to assign to the object.
     * @param int $statusCode Status code
     * @param array $headers HTTP Response headers.
     */
    public function __construct(array $values = [], $statusCode = 200, array $headers = [])
    {
        list($parentValues, $childValues) = self::getParentValues(self::$propertyTypes, $values);

        parent::__construct($parentValues);

        if (!array_key_exists(__CLASS__, self::$properties)) {
            self::$properties[__CLASS__] = array_merge(self::$properties[get_parent_class()], self::$propertyTypes);
        }

        $this->setValues(__CLASS__, $childValues);

        $this->statusCode = (int)$statusCode;

        $this->setHeaders($headers);
    }
}
