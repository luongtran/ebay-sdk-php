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

use LT\eBaySDK\Inventory\Types\UpdateOfferRestResponse;

class UpdateOfferRestResponseTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new UpdateOfferRestResponse();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\LT\eBaySDK\Inventory\Types\UpdateOfferRestResponse', $this->obj);
    }

    public function testExtendsOfferResponse()
    {
        $this->assertInstanceOf('\LT\eBaySDK\Inventory\Types\OfferResponse', $this->obj);
    }
}
