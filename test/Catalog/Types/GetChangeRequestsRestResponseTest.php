<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace LT\eBaySDK\Test\Catalog\Types;

use LT\eBaySDK\Catalog\Types\GetChangeRequestsRestResponse;

class GetChangeRequestsRestResponseTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new GetChangeRequestsRestResponse();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\LT\eBaySDK\Catalog\Types\GetChangeRequestsRestResponse', $this->obj);
    }

    public function testExtendsGetChangeRequestsResponse()
    {
        $this->assertInstanceOf('\LT\eBaySDK\Catalog\Types\GetChangeRequestsResponse', $this->obj);
    }
}
