<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace LT\eBaySDK\Test\Inventory\Types;

use LT\eBaySDK\Inventory\Types\GetInventoryLocationRestResponse;

class GetInventoryLocationRestResponseTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new GetInventoryLocationRestResponse();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\LT\eBaySDK\Inventory\Types\GetInventoryLocationRestResponse', $this->obj);
    }

    public function testExtendsInventoryLocationResponse()
    {
        $this->assertInstanceOf('\LT\eBaySDK\Inventory\Types\InventoryLocationResponse', $this->obj);
    }
}
