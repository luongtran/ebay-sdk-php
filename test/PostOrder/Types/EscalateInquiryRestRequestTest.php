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

use LT\eBaySDK\PostOrder\Types\EscalateInquiryRestRequest;

class EscalateInquiryRestRequestTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new EscalateInquiryRestRequest();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\LT\eBaySDK\PostOrder\Types\EscalateInquiryRestRequest', $this->obj);
    }

    public function testExtendsEscalateInquiryRequest()
    {
        $this->assertInstanceOf('\LT\eBaySDK\PostOrder\Types\EscalateInquiryRequest', $this->obj);
    }
}
