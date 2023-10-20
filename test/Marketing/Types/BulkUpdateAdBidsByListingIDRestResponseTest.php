<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace LT\eBaySDK\Test\Marketing\Types;

use LT\eBaySDK\Marketing\Types\BulkUpdateAdBidsByListingIDRestResponse;

class BulkUpdateAdBidsByListingIDRestResponseTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new BulkUpdateAdBidsByListingIDRestResponse();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\LT\eBaySDK\Marketing\Types\BulkUpdateAdBidsByListingIDRestResponse', $this->obj);
    }

    public function testExtendsBulkAdResponse()
    {
        $this->assertInstanceOf('\LT\eBaySDK\Marketing\Types\BulkAdResponse', $this->obj);
    }
}
