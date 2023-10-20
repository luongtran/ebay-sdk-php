<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace LT\eBaySDK\Test\MerchantData\Types;

use LT\eBaySDK\MerchantData\Types\ReviseInventoryStatusRequestType;

class ReviseInventoryStatusRequestTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new ReviseInventoryStatusRequestType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\LT\eBaySDK\MerchantData\Types\ReviseInventoryStatusRequestType', $this->obj);
    }

    public function testExtendsAbstractRequestType()
    {
        $this->assertInstanceOf('\LT\eBaySDK\MerchantData\Types\AbstractRequestType', $this->obj);
    }
}
