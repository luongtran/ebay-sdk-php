<?php
namespace LT\eBaySDK\Types\Test;

use LT\eBaySDK\Types\DoubleType;

class DoubleTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new DoubleType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\LT\eBaySDK\Types\DoubleType', $this->obj);
    }

    public function testExtendsBaseType()
    {
        $this->assertInstanceOf('\LT\eBaySDK\Types\BaseType', $this->obj);
    }

    public function testHasValueProperty()
    {
        $this->obj->value = 123.45;
        $this->assertEquals(123.45, $this->obj->value);
        $this->assertInternalType('float', $this->obj->value);
    }
}
