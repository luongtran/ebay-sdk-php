<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace LT\eBaySDK\Test\ProductMetadata\Types;

use LT\eBaySDK\ProductMetadata\Types\GetProductSearchValuesBaseRequest;

class GetProductSearchValuesBaseRequestTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new GetProductSearchValuesBaseRequest();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\LT\eBaySDK\ProductMetadata\Types\GetProductSearchValuesBaseRequest', $this->obj);
    }

    public function testExtendsBaseServiceRequest()
    {
        $this->assertInstanceOf('\LT\eBaySDK\ProductMetadata\Types\BaseServiceRequest', $this->obj);
    }
}
