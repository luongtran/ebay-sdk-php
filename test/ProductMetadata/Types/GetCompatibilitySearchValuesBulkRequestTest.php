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

use LT\eBaySDK\ProductMetadata\Types\GetCompatibilitySearchValuesBulkRequest;

class GetCompatibilitySearchValuesBulkRequestTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new GetCompatibilitySearchValuesBulkRequest();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\LT\eBaySDK\ProductMetadata\Types\GetCompatibilitySearchValuesBulkRequest', $this->obj);
    }

    public function testExtendsGetProductSearchValuesBaseRequest()
    {
        $this->assertInstanceOf('\LT\eBaySDK\ProductMetadata\Types\GetProductSearchValuesBaseRequest', $this->obj);
    }
}
