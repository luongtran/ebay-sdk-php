<?php
namespace LT\eBaySDK\Test\Mocks;

class BaseService extends \LT\eBaySDK\Services\BaseService
{
    public function __construct(array $config)
    {
        parent::__construct('http://production.com', 'http://sandbox.com', $config);
    }

    protected function getEbayHeaders($operationName)
    {
        return ['fooHdr' => $operationName];
    }
}
