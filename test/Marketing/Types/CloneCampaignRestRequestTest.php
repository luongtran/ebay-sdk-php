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

use LT\eBaySDK\Marketing\Types\CloneCampaignRestRequest;

class CloneCampaignRestRequestTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new CloneCampaignRestRequest();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\LT\eBaySDK\Marketing\Types\CloneCampaignRestRequest', $this->obj);
    }

    public function testExtendsCloneCampaignRequest()
    {
        $this->assertInstanceOf('\LT\eBaySDK\Marketing\Types\CloneCampaignRequest', $this->obj);
    }
}
