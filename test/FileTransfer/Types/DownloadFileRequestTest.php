<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace LT\eBaySDK\Test\FileTransfer\Types;

use LT\eBaySDK\FileTransfer\Types\DownloadFileRequest;

class DownloadFileRequestTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new DownloadFileRequest();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\LT\eBaySDK\FileTransfer\Types\DownloadFileRequest', $this->obj);
    }

    public function testExtendsBaseServiceRequest()
    {
        $this->assertInstanceOf('\LT\eBaySDK\FileTransfer\Types\BaseServiceRequest', $this->obj);
    }
}
