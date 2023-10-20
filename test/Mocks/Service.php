<?php
namespace LT\eBaySDK\Test\Mocks;

class Service extends \LT\eBaySDK\Test\Mocks\BaseService
{
    public function __construct(array $config)
    {
        parent::__construct(
            $config + [
                'credentials' => [
                    'appId' => '',
                    'certId' => '',
                    'devId' => ''
                ]
            ]
        );
    }

    public function foo(\LT\eBaySDK\Test\Mocks\ComplexClass $request)
    {
        return $this->callOperationAsync(
            'foo',
            $request,
            '\LT\eBaySDK\Test\Mocks\ComplexClass'
        )->wait();
    }

    public function bar(\LT\eBaySDK\Test\Mocks\ComplexClass $request)
    {
        return $this->callOperationAsync(
            'foo',
            $request,
            '\LT\eBaySDK\Test\Mocks\ComplexClass'
        )->wait();
    }
}
