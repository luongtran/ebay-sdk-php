<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace LT\eBaySDK\Test\Feedback\Types;

use LT\eBaySDK\Feedback\Types\CreateDSRSummaryResponse;

class CreateDSRSummaryResponseTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new CreateDSRSummaryResponse();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\LT\eBaySDK\Feedback\Types\CreateDSRSummaryResponse', $this->obj);
    }

    public function testExtendsBaseServiceResponse()
    {
        $this->assertInstanceOf('\LT\eBaySDK\Feedback\Types\BaseServiceResponse', $this->obj);
    }
}
