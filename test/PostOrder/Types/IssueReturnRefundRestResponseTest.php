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

use LT\eBaySDK\PostOrder\Types\IssueReturnRefundRestResponse;

class IssueReturnRefundRestResponseTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new IssueReturnRefundRestResponse();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\LT\eBaySDK\PostOrder\Types\IssueReturnRefundRestResponse', $this->obj);
    }

    public function testExtendsIssueRefundResponse()
    {
        $this->assertInstanceOf('\LT\eBaySDK\PostOrder\Types\IssueRefundResponse', $this->obj);
    }
}
