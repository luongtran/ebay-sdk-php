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

use LT\eBaySDK\Marketing\Types\GetAdsByInventoryReferenceRestResponse;

class GetAdsByInventoryReferenceRestResponseTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new GetAdsByInventoryReferenceRestResponse();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\LT\eBaySDK\Marketing\Types\GetAdsByInventoryReferenceRestResponse', $this->obj);
    }

    public function testExtendsAds()
    {
        $this->assertInstanceOf('\LT\eBaySDK\Marketing\Types\Ads', $this->obj);
    }
}
