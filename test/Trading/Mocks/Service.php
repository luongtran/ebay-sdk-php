<?php
namespace LT\eBaySDK\Test\Trading\Mocks;

use LT\eBaySDK\Trading\Types\GeteBayOfficialTimeRequestType;

class Service extends \LT\eBaySDK\Trading\Services\TradingBaseService
{
    public function __construct(array $config)
    {
        parent::__construct($config);
    }

    public function testOperation()
    {
        return $this->callOperationAsync(
            'testOperation',
            new GeteBayOfficialTimeRequestType(),
            '\LT\eBaySDK\Test\Mocks\ComplexClass'
        )->wait();
    }
}
