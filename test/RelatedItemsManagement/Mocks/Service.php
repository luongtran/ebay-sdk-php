<?php
namespace LT\eBaySDK\Test\RelatedItemsManagement\Mocks;

use LT\eBaySDK\Test\Mocks\ComplexClass;

class Service extends \LT\eBaySDK\RelatedItemsManagement\Services\RelatedItemsManagementBaseService
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
