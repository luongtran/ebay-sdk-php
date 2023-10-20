<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace LT\eBaySDK\Test\Product\Types;

use LT\eBaySDK\Product\Types\GetProductCompatibilitiesRequest;

class GetProductCompatibilitiesRequestTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new GetProductCompatibilitiesRequest();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\LT\eBaySDK\Product\Types\GetProductCompatibilitiesRequest', $this->obj);
    }

    public function testExtendsBaseServiceRequest()
    {
        $this->assertInstanceOf('\LT\eBaySDK\Product\Types\BaseServiceRequest', $this->obj);
    }
}
