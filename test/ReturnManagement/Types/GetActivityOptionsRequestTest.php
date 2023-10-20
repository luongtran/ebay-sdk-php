<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace LT\eBaySDK\Test\ReturnManagement\Types;

use LT\eBaySDK\ReturnManagement\Types\GetActivityOptionsRequest;

class GetActivityOptionsRequestTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new GetActivityOptionsRequest();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\LT\eBaySDK\ReturnManagement\Types\GetActivityOptionsRequest', $this->obj);
    }

    public function testExtendsBaseRequest()
    {
        $this->assertInstanceOf('\LT\eBaySDK\ReturnManagement\Types\BaseRequest', $this->obj);
    }
}
