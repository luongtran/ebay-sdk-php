<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace LT\eBaySDK\Test\Metadata\Types;

use LT\eBaySDK\Metadata\Types\GetPoliciesForReturnsRestResponse;

class GetPoliciesForReturnsRestResponseTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new GetPoliciesForReturnsRestResponse();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\LT\eBaySDK\Metadata\Types\GetPoliciesForReturnsRestResponse', $this->obj);
    }

    public function testExtendsReturnPolicyResponse()
    {
        $this->assertInstanceOf('\LT\eBaySDK\Metadata\Types\ReturnPolicyResponse', $this->obj);
    }
}
