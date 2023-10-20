<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace LT\eBaySDK\Test\Shopping\Types;

use LT\eBaySDK\Shopping\Types\FindPopularSearchesResponseType;

class FindPopularSearchesResponseTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new FindPopularSearchesResponseType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\LT\eBaySDK\Shopping\Types\FindPopularSearchesResponseType', $this->obj);
    }

    public function testExtendsAbstractResponseType()
    {
        $this->assertInstanceOf('\LT\eBaySDK\Shopping\Types\AbstractResponseType', $this->obj);
    }
}
