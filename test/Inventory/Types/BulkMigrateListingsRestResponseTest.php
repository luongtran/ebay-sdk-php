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

use LT\eBaySDK\Inventory\Types\BulkMigrateListingsRestResponse;

class BulkMigrateListingsRestResponseTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new BulkMigrateListingsRestResponse();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\LT\eBaySDK\Inventory\Types\BulkMigrateListingsRestResponse', $this->obj);
    }

    public function testExtendsBulkMigrateListingResponse()
    {
        $this->assertInstanceOf('\LT\eBaySDK\Inventory\Types\BulkMigrateListingResponse', $this->obj);
    }
}
