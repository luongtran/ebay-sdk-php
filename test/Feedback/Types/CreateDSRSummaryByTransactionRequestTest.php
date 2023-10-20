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

use LT\eBaySDK\Feedback\Types\CreateDSRSummaryByTransactionRequest;

class CreateDSRSummaryByTransactionRequestTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new CreateDSRSummaryByTransactionRequest();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\LT\eBaySDK\Feedback\Types\CreateDSRSummaryByTransactionRequest', $this->obj);
    }

    public function testExtendsBaseServiceRequest()
    {
        $this->assertInstanceOf('\LT\eBaySDK\Feedback\Types\BaseServiceRequest', $this->obj);
    }
}
