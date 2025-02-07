<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace LT\eBaySDK\Test\RelatedItemsManagement\Types;

use LT\eBaySDK\RelatedItemsManagement\Types\GetBundlesResponse;

class GetBundlesResponseTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new GetBundlesResponse();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\LT\eBaySDK\RelatedItemsManagement\Types\GetBundlesResponse', $this->obj);
    }

    public function testExtendsBaseResponse()
    {
        $this->assertInstanceOf('\LT\eBaySDK\RelatedItemsManagement\Types\BaseResponse', $this->obj);
    }
}
