<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace LT\eBaySDK\Test\PostOrder\Types;

use LT\eBaySDK\PostOrder\Types\CarrierShippingCostInfoType;

class CarrierShippingCostInfoTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new CarrierShippingCostInfoType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\LT\eBaySDK\PostOrder\Types\CarrierShippingCostInfoType', $this->obj);
    }

    public function testExtendsBaseType()
    {
        $this->assertInstanceOf('\LT\eBaySDK\Types\BaseType', $this->obj);
    }
}
