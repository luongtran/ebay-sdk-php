<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace LT\eBaySDK\Test\ResolutionCaseManagement\Types;

use LT\eBaySDK\ResolutionCaseManagement\Types\EscalateToCustomerSupportRequest;

class EscalateToCustomerSupportRequestTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new EscalateToCustomerSupportRequest();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\LT\eBaySDK\ResolutionCaseManagement\Types\EscalateToCustomerSupportRequest', $this->obj);
    }

    public function testExtendsBaseRequest()
    {
        $this->assertInstanceOf('\LT\eBaySDK\ResolutionCaseManagement\Types\BaseRequest', $this->obj);
    }
}
