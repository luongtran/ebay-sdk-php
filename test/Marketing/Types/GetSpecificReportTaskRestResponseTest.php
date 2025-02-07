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

use LT\eBaySDK\Marketing\Types\GetSpecificReportTaskRestResponse;

class GetSpecificReportTaskRestResponseTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new GetSpecificReportTaskRestResponse();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\LT\eBaySDK\Marketing\Types\GetSpecificReportTaskRestResponse', $this->obj);
    }

    public function testExtendsReportTask()
    {
        $this->assertInstanceOf('\LT\eBaySDK\Marketing\Types\ReportTask', $this->obj);
    }
}
