<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace LT\eBaySDK\Test\PostOrder\Types;

use LT\eBaySDK\PostOrder\Types\GetReturnRestResponse;

class GetReturnRestResponseTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new GetReturnRestResponse();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\LT\eBaySDK\PostOrder\Types\GetReturnRestResponse', $this->obj);
    }

    public function testExtendsGetDetailResponse()
    {
        $this->assertInstanceOf('\LT\eBaySDK\PostOrder\Types\GetDetailResponse', $this->obj);
    }
}
