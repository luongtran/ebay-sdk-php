<?php
namespace LT\eBaySDK\Test\Mocks;

class RestService extends \LT\eBaySDK\Test\Mocks\BaseRestService
{
    protected static $operations =  [
        'foo' => [
            'method' => 'GET',
            'resource' => '',
            'responseClass' => '\LT\eBaySDK\Test\Mocks\ComplexClass',
            'params' => [
            ]
        ]
    ];

    public function __construct(array $config)
    {
        parent::__construct($config);
    }

    public function foo(\LT\eBaySDK\Test\Mocks\ComplexClass $request)
    {
        return $this->callOperationAsync('foo', $request)->wait();
    }
}
