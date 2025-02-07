<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace LT\eBaySDK\ReturnManagement\Services;

class ReturnManagementService extends \LT\eBaySDK\ReturnManagement\Services\ReturnManagementBaseService
{
    const API_VERSION = '1.1.0';

    /**
     * @param array $config Configuration option values.
     */
    public function __construct(array $config = [])
    {
        parent::__construct($config);
    }

    /**
     * @param \LT\eBaySDK\ReturnManagement\Types\GetVersionRequest $request
     * @return \LT\eBaySDK\ReturnManagement\Types\GetVersionResponse
     */
    public function getVersion(\LT\eBaySDK\ReturnManagement\Types\GetVersionRequest $request)
    {
        return $this->getVersionAsync($request)->wait();
    }

    /**
     * @param \LT\eBaySDK\ReturnManagement\Types\GetVersionRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getVersionAsync(\LT\eBaySDK\ReturnManagement\Types\GetVersionRequest $request)
    {
        return $this->callOperationAsync(
            'getVersion',
            $request,
            '\LT\eBaySDK\ReturnManagement\Types\GetVersionResponse'
        );
    }

    /**
     * @param \LT\eBaySDK\ReturnManagement\Types\GetUserReturnsRequest $request
     * @return \LT\eBaySDK\ReturnManagement\Types\GetUserReturnsResponse
     */
    public function getUserReturns(\LT\eBaySDK\ReturnManagement\Types\GetUserReturnsRequest $request)
    {
        return $this->getUserReturnsAsync($request)->wait();
    }

    /**
     * @param \LT\eBaySDK\ReturnManagement\Types\GetUserReturnsRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getUserReturnsAsync(\LT\eBaySDK\ReturnManagement\Types\GetUserReturnsRequest $request)
    {
        return $this->callOperationAsync(
            'getUserReturns',
            $request,
            '\LT\eBaySDK\ReturnManagement\Types\GetUserReturnsResponse'
        );
    }

    /**
     * @param \LT\eBaySDK\ReturnManagement\Types\GetReturnDetailRequest $request
     * @return \LT\eBaySDK\ReturnManagement\Types\GetReturnDetailResponse
     */
    public function getReturnDetail(\LT\eBaySDK\ReturnManagement\Types\GetReturnDetailRequest $request)
    {
        return $this->getReturnDetailAsync($request)->wait();
    }

    /**
     * @param \LT\eBaySDK\ReturnManagement\Types\GetReturnDetailRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getReturnDetailAsync(\LT\eBaySDK\ReturnManagement\Types\GetReturnDetailRequest $request)
    {
        return $this->callOperationAsync(
            'getReturnDetail',
            $request,
            '\LT\eBaySDK\ReturnManagement\Types\GetReturnDetailResponse'
        );
    }

    /**
     * @param \LT\eBaySDK\ReturnManagement\Types\GetActivityOptionsRequest $request
     * @return \LT\eBaySDK\ReturnManagement\Types\GetActivityOptionsResponse
     */
    public function getActivityOptions(\LT\eBaySDK\ReturnManagement\Types\GetActivityOptionsRequest $request)
    {
        return $this->getActivityOptionsAsync($request)->wait();
    }

    /**
     * @param \LT\eBaySDK\ReturnManagement\Types\GetActivityOptionsRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getActivityOptionsAsync(\LT\eBaySDK\ReturnManagement\Types\GetActivityOptionsRequest $request)
    {
        return $this->callOperationAsync(
            'getActivityOptions',
            $request,
            '\LT\eBaySDK\ReturnManagement\Types\GetActivityOptionsResponse'
        );
    }

    /**
     * @param \LT\eBaySDK\ReturnManagement\Types\IssueRefundRequest $request
     * @return \LT\eBaySDK\ReturnManagement\Types\IssueRefundResponse
     */
    public function issueRefund(\LT\eBaySDK\ReturnManagement\Types\IssueRefundRequest $request)
    {
        return $this->issueRefundAsync($request)->wait();
    }

    /**
     * @param \LT\eBaySDK\ReturnManagement\Types\IssueRefundRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function issueRefundAsync(\LT\eBaySDK\ReturnManagement\Types\IssueRefundRequest $request)
    {
        return $this->callOperationAsync(
            'issueRefund',
            $request,
            '\LT\eBaySDK\ReturnManagement\Types\IssueRefundResponse'
        );
    }

    /**
     * @param \LT\eBaySDK\ReturnManagement\Types\ProvideSellerInfoRequest $request
     * @return \LT\eBaySDK\ReturnManagement\Types\ProvideSellerInfoResponse
     */
    public function provideSellerInfo(\LT\eBaySDK\ReturnManagement\Types\ProvideSellerInfoRequest $request)
    {
        return $this->provideSellerInfoAsync($request)->wait();
    }

    /**
     * @param \LT\eBaySDK\ReturnManagement\Types\ProvideSellerInfoRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function provideSellerInfoAsync(\LT\eBaySDK\ReturnManagement\Types\ProvideSellerInfoRequest $request)
    {
        return $this->callOperationAsync(
            'provideSellerInfo',
            $request,
            '\LT\eBaySDK\ReturnManagement\Types\ProvideSellerInfoResponse'
        );
    }

    /**
     * @param \LT\eBaySDK\ReturnManagement\Types\GetReturnMetadataRequest $request
     * @return \LT\eBaySDK\ReturnManagement\Types\GetReturnMetadataResponse
     */
    public function getReturnMetadata(\LT\eBaySDK\ReturnManagement\Types\GetReturnMetadataRequest $request)
    {
        return $this->getReturnMetadataAsync($request)->wait();
    }

    /**
     * @param \LT\eBaySDK\ReturnManagement\Types\GetReturnMetadataRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getReturnMetadataAsync(\LT\eBaySDK\ReturnManagement\Types\GetReturnMetadataRequest $request)
    {
        return $this->callOperationAsync(
            'getReturnMetadata',
            $request,
            '\LT\eBaySDK\ReturnManagement\Types\GetReturnMetadataResponse'
        );
    }

    /**
     * @param \LT\eBaySDK\ReturnManagement\Types\ProvideTrackingInfoRequest $request
     * @return \LT\eBaySDK\ReturnManagement\Types\ProvideTrackingInfoResponse
     */
    public function provideTrackingInfo(\LT\eBaySDK\ReturnManagement\Types\ProvideTrackingInfoRequest $request)
    {
        return $this->provideTrackingInfoAsync($request)->wait();
    }

    /**
     * @param \LT\eBaySDK\ReturnManagement\Types\ProvideTrackingInfoRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function provideTrackingInfoAsync(\LT\eBaySDK\ReturnManagement\Types\ProvideTrackingInfoRequest $request)
    {
        return $this->callOperationAsync(
            'provideTrackingInfo',
            $request,
            '\LT\eBaySDK\ReturnManagement\Types\ProvideTrackingInfoResponse'
        );
    }

    /**
     * @param \LT\eBaySDK\ReturnManagement\Types\SetItemAsReceivedRequest $request
     * @return \LT\eBaySDK\ReturnManagement\Types\SetItemAsReceivedResponse
     */
    public function setItemAsReceived(\LT\eBaySDK\ReturnManagement\Types\SetItemAsReceivedRequest $request)
    {
        return $this->setItemAsReceivedAsync($request)->wait();
    }

    /**
     * @param \LT\eBaySDK\ReturnManagement\Types\SetItemAsReceivedRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function setItemAsReceivedAsync(\LT\eBaySDK\ReturnManagement\Types\SetItemAsReceivedRequest $request)
    {
        return $this->callOperationAsync(
            'setItemAsReceived',
            $request,
            '\LT\eBaySDK\ReturnManagement\Types\SetItemAsReceivedResponse'
        );
    }
}
