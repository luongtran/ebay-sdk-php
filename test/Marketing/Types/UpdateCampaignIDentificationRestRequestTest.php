<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace LT\eBaySDK\Test\Marketing\Types;

use LT\eBaySDK\Marketing\Types\UpdateCampaignIDentificationRestRequest;

class UpdateCampaignIDentificationRestRequestTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new UpdateCampaignIDentificationRestRequest();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\LT\eBaySDK\Marketing\Types\UpdateCampaignIDentificationRestRequest', $this->obj);
    }

    public function testExtendsUpdateCampaignIdentificationRequest()
    {
        $this->assertInstanceOf('\LT\eBaySDK\Marketing\Types\UpdateCampaignIdentificationRequest', $this->obj);
    }
}
