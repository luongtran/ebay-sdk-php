<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace LT\eBaySDK\Test\Account\Types;

use LT\eBaySDK\Account\Types\UpdateAFulfillmentPolicyRestRequest;

class UpdateAFulfillmentPolicyRestRequestTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new UpdateAFulfillmentPolicyRestRequest();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\LT\eBaySDK\Account\Types\UpdateAFulfillmentPolicyRestRequest', $this->obj);
    }

    public function testExtendsFulfillmentPolicyRequest()
    {
        $this->assertInstanceOf('\LT\eBaySDK\Account\Types\FulfillmentPolicyRequest', $this->obj);
    }
}
