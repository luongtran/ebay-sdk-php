<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace LT\eBaySDK\Test\Trading\Types;

use LT\eBaySDK\Trading\Types\GetPromotionalSaleDetailsRequestType;

class GetPromotionalSaleDetailsRequestTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new GetPromotionalSaleDetailsRequestType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\LT\eBaySDK\Trading\Types\GetPromotionalSaleDetailsRequestType', $this->obj);
    }

    public function testExtendsAbstractRequestType()
    {
        $this->assertInstanceOf('\LT\eBaySDK\Trading\Types\AbstractRequestType', $this->obj);
    }
}
