<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace LT\eBaySDK\Test\Account\Types;

use LT\eBaySDK\Account\Types\GetAReturnPolicyByIDRestResponse;

class GetAReturnPolicyByIDRestResponseTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new GetAReturnPolicyByIDRestResponse();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\LT\eBaySDK\Account\Types\GetAReturnPolicyByIDRestResponse', $this->obj);
    }

    public function testExtendsReturnPolicy()
    {
        $this->assertInstanceOf('\LT\eBaySDK\Account\Types\ReturnPolicy', $this->obj);
    }
}
