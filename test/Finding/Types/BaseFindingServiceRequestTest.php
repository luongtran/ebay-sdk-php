<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace LT\eBaySDK\Test\Finding\Types;

use LT\eBaySDK\Finding\Types\BaseFindingServiceRequest;

class BaseFindingServiceRequestTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new BaseFindingServiceRequest();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\LT\eBaySDK\Finding\Types\BaseFindingServiceRequest', $this->obj);
    }

    public function testExtendsBestMatchFindingServiceRequest()
    {
        $this->assertInstanceOf('\LT\eBaySDK\Finding\Types\BestMatchFindingServiceRequest', $this->obj);
    }
}
