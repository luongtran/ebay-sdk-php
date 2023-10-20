<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace LT\eBaySDK\Test\Trading\Types;

use LT\eBaySDK\Trading\Types\FeedbackRequirementsType;

class FeedbackRequirementsTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new FeedbackRequirementsType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\LT\eBaySDK\Trading\Types\FeedbackRequirementsType', $this->obj);
    }

    public function testExtendsBooleanType()
    {
        $this->assertInstanceOf('\LT\eBaySDK\Types\BooleanType', $this->obj);
    }
}
