<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace LT\eBaySDK\Test\BulkDataExchange\Types;

use LT\eBaySDK\BulkDataExchange\Types\StartUploadJobResponse;

class StartUploadJobResponseTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new StartUploadJobResponse();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\LT\eBaySDK\BulkDataExchange\Types\StartUploadJobResponse', $this->obj);
    }

    public function testExtendsBaseServiceResponse()
    {
        $this->assertInstanceOf('\LT\eBaySDK\BulkDataExchange\Types\BaseServiceResponse', $this->obj);
    }
}
