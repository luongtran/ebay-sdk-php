<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace LT\eBaySDK\RelatedItemsManagement\Services;

class RelatedItemsManagementService extends \LT\eBaySDK\RelatedItemsManagement\Services\RelatedItemsManagementBaseService
{
    const API_VERSION = '1.0.0';

    /**
     * @param array $config Configuration option values.
     */
    public function __construct(array $config = [])
    {
        parent::__construct($config);
    }

    /**
     * @param \LT\eBaySDK\RelatedItemsManagement\Types\CreateBundlesRequest $request
     * @return \LT\eBaySDK\RelatedItemsManagement\Types\CreateBundlesResponse
     */
    public function createBundles(\LT\eBaySDK\RelatedItemsManagement\Types\CreateBundlesRequest $request)
    {
        return $this->createBundlesAsync($request)->wait();
    }

    /**
     * @param \LT\eBaySDK\RelatedItemsManagement\Types\CreateBundlesRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createBundlesAsync(\LT\eBaySDK\RelatedItemsManagement\Types\CreateBundlesRequest $request)
    {
        return $this->callOperationAsync(
            'createBundles',
            $request,
            '\LT\eBaySDK\RelatedItemsManagement\Types\CreateBundlesResponse'
        );
    }

    /**
     * @param \LT\eBaySDK\RelatedItemsManagement\Types\FindBundlesRequest $request
     * @return \LT\eBaySDK\RelatedItemsManagement\Types\FindBundlesResponse
     */
    public function findBundles(\LT\eBaySDK\RelatedItemsManagement\Types\FindBundlesRequest $request)
    {
        return $this->findBundlesAsync($request)->wait();
    }

    /**
     * @param \LT\eBaySDK\RelatedItemsManagement\Types\FindBundlesRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function findBundlesAsync(\LT\eBaySDK\RelatedItemsManagement\Types\FindBundlesRequest $request)
    {
        return $this->callOperationAsync(
            'findBundles',
            $request,
            '\LT\eBaySDK\RelatedItemsManagement\Types\FindBundlesResponse'
        );
    }

    /**
     * @param \LT\eBaySDK\RelatedItemsManagement\Types\GetBundlesRequest $request
     * @return \LT\eBaySDK\RelatedItemsManagement\Types\GetBundlesResponse
     */
    public function getBundles(\LT\eBaySDK\RelatedItemsManagement\Types\GetBundlesRequest $request)
    {
        return $this->getBundlesAsync($request)->wait();
    }

    /**
     * @param \LT\eBaySDK\RelatedItemsManagement\Types\GetBundlesRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getBundlesAsync(\LT\eBaySDK\RelatedItemsManagement\Types\GetBundlesRequest $request)
    {
        return $this->callOperationAsync(
            'getBundles',
            $request,
            '\LT\eBaySDK\RelatedItemsManagement\Types\GetBundlesResponse'
        );
    }

    /**
     * @param \LT\eBaySDK\RelatedItemsManagement\Types\UpdateBundlesRequest $request
     * @return \LT\eBaySDK\RelatedItemsManagement\Types\UpdateBundlesResponse
     */
    public function updateBundles(\LT\eBaySDK\RelatedItemsManagement\Types\UpdateBundlesRequest $request)
    {
        return $this->updateBundlesAsync($request)->wait();
    }

    /**
     * @param \LT\eBaySDK\RelatedItemsManagement\Types\UpdateBundlesRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateBundlesAsync(\LT\eBaySDK\RelatedItemsManagement\Types\UpdateBundlesRequest $request)
    {
        return $this->callOperationAsync(
            'updateBundles',
            $request,
            '\LT\eBaySDK\RelatedItemsManagement\Types\UpdateBundlesResponse'
        );
    }

    /**
     * @param \LT\eBaySDK\RelatedItemsManagement\Types\UpdateBundleStatusRequest $request
     * @return \LT\eBaySDK\RelatedItemsManagement\Types\UpdateBundleStatusResponse
     */
    public function updateBundleStatus(\LT\eBaySDK\RelatedItemsManagement\Types\UpdateBundleStatusRequest $request)
    {
        return $this->updateBundleStatusAsync($request)->wait();
    }

    /**
     * @param \LT\eBaySDK\RelatedItemsManagement\Types\UpdateBundleStatusRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateBundleStatusAsync(\LT\eBaySDK\RelatedItemsManagement\Types\UpdateBundleStatusRequest $request)
    {
        return $this->callOperationAsync(
            'updateBundleStatus',
            $request,
            '\LT\eBaySDK\RelatedItemsManagement\Types\UpdateBundleStatusResponse'
        );
    }

    /**
     * @param \LT\eBaySDK\RelatedItemsManagement\Types\DeleteBundlesRequest $request
     * @return \LT\eBaySDK\RelatedItemsManagement\Types\DeleteBundlesResponse
     */
    public function deleteBundles(\LT\eBaySDK\RelatedItemsManagement\Types\DeleteBundlesRequest $request)
    {
        return $this->deleteBundlesAsync($request)->wait();
    }

    /**
     * @param \LT\eBaySDK\RelatedItemsManagement\Types\DeleteBundlesRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteBundlesAsync(\LT\eBaySDK\RelatedItemsManagement\Types\DeleteBundlesRequest $request)
    {
        return $this->callOperationAsync(
            'deleteBundles',
            $request,
            '\LT\eBaySDK\RelatedItemsManagement\Types\DeleteBundlesResponse'
        );
    }

    /**
     * @param \LT\eBaySDK\RelatedItemsManagement\Types\GetVersionRequest $request
     * @return \LT\eBaySDK\RelatedItemsManagement\Types\GetVersionResponse
     */
    public function getVersion(\LT\eBaySDK\RelatedItemsManagement\Types\GetVersionRequest $request)
    {
        return $this->getVersionAsync($request)->wait();
    }

    /**
     * @param \LT\eBaySDK\RelatedItemsManagement\Types\GetVersionRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getVersionAsync(\LT\eBaySDK\RelatedItemsManagement\Types\GetVersionRequest $request)
    {
        return $this->callOperationAsync(
            'getVersion',
            $request,
            '\LT\eBaySDK\RelatedItemsManagement\Types\GetVersionResponse'
        );
    }
}
