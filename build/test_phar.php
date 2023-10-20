<?php
require __DIR__ . '/artifacts/ebay-sdk-php.phar';

$sdk = new \LT\eBaySDK\Sdk();

$trading = new \LT\eBaySDK\Trading\Services\TradingService([
    'siteId'      => 0,
    'credentials' => [
        'appId'  => 'secret',
        'certId' => 'secret',
        'devId'  => 'secret'
    ]
]);

echo 'Version=' . \LT\eBaySDK\Sdk::VERSION;
