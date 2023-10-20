<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace LT\eBaySDK\Test\MerchantData\Types;

use LT\eBaySDK\MerchantData\Types\Base64BinaryType;

class Base64BinaryTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new Base64BinaryType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\LT\eBaySDK\MerchantData\Types\Base64BinaryType', $this->obj);
    }

    public function testExtendsBase64BinaryType()
    {
        $this->assertInstanceOf('\LT\eBaySDK\Types\Base64BinaryType', $this->obj);
    }
}
