<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace LT\eBaySDK\Test\Fulfillment\Enums;

use LT\eBaySDK\Fulfillment\Enums\AcknowledgeStatusEnum;

class AcknowledgeStatusEnumTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new AcknowledgeStatusEnum();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\LT\eBaySDK\Fulfillment\Enums\AcknowledgeStatusEnum', $this->obj);
    }
}
