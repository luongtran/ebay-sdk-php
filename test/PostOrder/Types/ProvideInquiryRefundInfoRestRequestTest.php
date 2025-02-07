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

use LT\eBaySDK\PostOrder\Types\ProvideInquiryRefundInfoRestRequest;

class ProvideInquiryRefundInfoRestRequestTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new ProvideInquiryRefundInfoRestRequest();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\LT\eBaySDK\PostOrder\Types\ProvideInquiryRefundInfoRestRequest', $this->obj);
    }

    public function testExtendsSellerProvideRefundInfoRequest()
    {
        $this->assertInstanceOf('\LT\eBaySDK\PostOrder\Types\SellerProvideRefundInfoRequest', $this->obj);
    }
}
