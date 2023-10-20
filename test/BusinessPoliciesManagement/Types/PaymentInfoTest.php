<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace LT\eBaySDK\Test\BusinessPoliciesManagement\Types;

use LT\eBaySDK\BusinessPoliciesManagement\Types\PaymentInfo;

class PaymentInfoTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new PaymentInfo();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\LT\eBaySDK\BusinessPoliciesManagement\Types\PaymentInfo', $this->obj);
    }

    public function testExtendsBaseType()
    {
        $this->assertInstanceOf('\LT\eBaySDK\Types\BaseType', $this->obj);
    }
}
