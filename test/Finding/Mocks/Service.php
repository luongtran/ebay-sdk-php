<?php
namespace LT\eBaySDK\Test\Finding\Mocks;

use LT\eBaySDK\Test\Mocks\ComplexClass;

class Service extends \LT\eBaySDK\Finding\Services\FindingBaseService
{
    public function __construct(array $config)
    {
        parent::__construct($config);
    }

    public function testOperation()
    {
        return $this->callOperationAsync(
            'testOperation',
            new ComplexClass(),
            '\LT\eBaySDK\Test\Mocks\ComplexClass'
        )->wait();
    }
}
