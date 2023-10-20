<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace LT\eBaySDK\Test\Trading\Types;

use LT\eBaySDK\Trading\Types\MemberMessageExchangeArrayType;

class MemberMessageExchangeArrayTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new MemberMessageExchangeArrayType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\LT\eBaySDK\Trading\Types\MemberMessageExchangeArrayType', $this->obj);
    }

    public function testExtendsBaseType()
    {
        $this->assertInstanceOf('\LT\eBaySDK\Types\BaseType', $this->obj);
    }
}
