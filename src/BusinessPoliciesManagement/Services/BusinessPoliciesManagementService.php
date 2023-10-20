<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace LT\eBaySDK\BusinessPoliciesManagement\Services;

class BusinessPoliciesManagementService extends \LT\eBaySDK\BusinessPoliciesManagement\Services\BusinessPoliciesManagementBaseService
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
     * @param \LT\eBaySDK\BusinessPoliciesManagement\Types\GetVersionRequest $request
     * @return \LT\eBaySDK\BusinessPoliciesManagement\Types\GetVersionResponse
     */
    public function getVersion(\LT\eBaySDK\BusinessPoliciesManagement\Types\GetVersionRequest $request)
    {
        return $this->getVersionAsync($request)->wait();
    }

    /**
     * @param \LT\eBaySDK\BusinessPoliciesManagement\Types\GetVersionRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getVersionAsync(\LT\eBaySDK\BusinessPoliciesManagement\Types\GetVersionRequest $request)
    {
        return $this->callOperationAsync(
            'getVersion',
            $request,
            '\LT\eBaySDK\BusinessPoliciesManagement\Types\GetVersionResponse'
        );
    }

    /**
     * @param \LT\eBaySDK\BusinessPoliciesManagement\Types\RemoveProfileRequest $request
     * @return \LT\eBaySDK\BusinessPoliciesManagement\Types\RemoveProfileResponse
     */
    public function removeProfile(\LT\eBaySDK\BusinessPoliciesManagement\Types\RemoveProfileRequest $request)
    {
        return $this->removeProfileAsync($request)->wait();
    }

    /**
     * @param \LT\eBaySDK\BusinessPoliciesManagement\Types\RemoveProfileRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function removeProfileAsync(\LT\eBaySDK\BusinessPoliciesManagement\Types\RemoveProfileRequest $request)
    {
        return $this->callOperationAsync(
            'removeProfile',
            $request,
            '\LT\eBaySDK\BusinessPoliciesManagement\Types\RemoveProfileResponse'
        );
    }

    /**
     * @param \LT\eBaySDK\BusinessPoliciesManagement\Types\AddSellerProfileRequest $request
     * @return \LT\eBaySDK\BusinessPoliciesManagement\Types\AddSellerProfileResponse
     */
    public function addSellerProfile(\LT\eBaySDK\BusinessPoliciesManagement\Types\AddSellerProfileRequest $request)
    {
        return $this->addSellerProfileAsync($request)->wait();
    }

    /**
     * @param \LT\eBaySDK\BusinessPoliciesManagement\Types\AddSellerProfileRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function addSellerProfileAsync(\LT\eBaySDK\BusinessPoliciesManagement\Types\AddSellerProfileRequest $request)
    {
        return $this->callOperationAsync(
            'addSellerProfile',
            $request,
            '\LT\eBaySDK\BusinessPoliciesManagement\Types\AddSellerProfileResponse'
        );
    }

    /**
     * @param \LT\eBaySDK\BusinessPoliciesManagement\Types\GetSellerProfilesRequest $request
     * @return \LT\eBaySDK\BusinessPoliciesManagement\Types\GetSellerProfilesResponse
     */
    public function getSellerProfiles(\LT\eBaySDK\BusinessPoliciesManagement\Types\GetSellerProfilesRequest $request)
    {
        return $this->getSellerProfilesAsync($request)->wait();
    }

    /**
     * @param \LT\eBaySDK\BusinessPoliciesManagement\Types\GetSellerProfilesRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getSellerProfilesAsync(\LT\eBaySDK\BusinessPoliciesManagement\Types\GetSellerProfilesRequest $request)
    {
        return $this->callOperationAsync(
            'getSellerProfiles',
            $request,
            '\LT\eBaySDK\BusinessPoliciesManagement\Types\GetSellerProfilesResponse'
        );
    }

    /**
     * @param \LT\eBaySDK\BusinessPoliciesManagement\Types\SetSellerProfileRequest $request
     * @return \LT\eBaySDK\BusinessPoliciesManagement\Types\SetSellerProfileResponse
     */
    public function setSellerProfile(\LT\eBaySDK\BusinessPoliciesManagement\Types\SetSellerProfileRequest $request)
    {
        return $this->setSellerProfileAsync($request)->wait();
    }

    /**
     * @param \LT\eBaySDK\BusinessPoliciesManagement\Types\SetSellerProfileRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function setSellerProfileAsync(\LT\eBaySDK\BusinessPoliciesManagement\Types\SetSellerProfileRequest $request)
    {
        return $this->callOperationAsync(
            'setSellerProfile',
            $request,
            '\LT\eBaySDK\BusinessPoliciesManagement\Types\SetSellerProfileResponse'
        );
    }

    /**
     * @param \LT\eBaySDK\BusinessPoliciesManagement\Types\RemoveSellerProfilesRequest $request
     * @return \LT\eBaySDK\BusinessPoliciesManagement\Types\RemoveSellerProfilesResponse
     */
    public function removeSellerProfiles(\LT\eBaySDK\BusinessPoliciesManagement\Types\RemoveSellerProfilesRequest $request)
    {
        return $this->removeSellerProfilesAsync($request)->wait();
    }

    /**
     * @param \LT\eBaySDK\BusinessPoliciesManagement\Types\RemoveSellerProfilesRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function removeSellerProfilesAsync(\LT\eBaySDK\BusinessPoliciesManagement\Types\RemoveSellerProfilesRequest $request)
    {
        return $this->callOperationAsync(
            'removeSellerProfiles',
            $request,
            '\LT\eBaySDK\BusinessPoliciesManagement\Types\RemoveSellerProfilesResponse'
        );
    }

    /**
     * @param \LT\eBaySDK\BusinessPoliciesManagement\Types\ConsolidateShippingProfilesRequest $request
     * @return \LT\eBaySDK\BusinessPoliciesManagement\Types\ConsolidateShippingProfilesResponse
     */
    public function consolidateShippingProfiles(\LT\eBaySDK\BusinessPoliciesManagement\Types\ConsolidateShippingProfilesRequest $request)
    {
        return $this->consolidateShippingProfilesAsync($request)->wait();
    }

    /**
     * @param \LT\eBaySDK\BusinessPoliciesManagement\Types\ConsolidateShippingProfilesRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function consolidateShippingProfilesAsync(\LT\eBaySDK\BusinessPoliciesManagement\Types\ConsolidateShippingProfilesRequest $request)
    {
        return $this->callOperationAsync(
            'consolidateShippingProfiles',
            $request,
            '\LT\eBaySDK\BusinessPoliciesManagement\Types\ConsolidateShippingProfilesResponse'
        );
    }

    /**
     * @param \LT\eBaySDK\BusinessPoliciesManagement\Types\GetConsolidationJobStatusRequest $request
     * @return \LT\eBaySDK\BusinessPoliciesManagement\Types\GetConsolidationJobStatusResponse
     */
    public function getConsolidationJobStatus(\LT\eBaySDK\BusinessPoliciesManagement\Types\GetConsolidationJobStatusRequest $request)
    {
        return $this->getConsolidationJobStatusAsync($request)->wait();
    }

    /**
     * @param \LT\eBaySDK\BusinessPoliciesManagement\Types\GetConsolidationJobStatusRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getConsolidationJobStatusAsync(\LT\eBaySDK\BusinessPoliciesManagement\Types\GetConsolidationJobStatusRequest $request)
    {
        return $this->callOperationAsync(
            'getConsolidationJobStatus',
            $request,
            '\LT\eBaySDK\BusinessPoliciesManagement\Types\GetConsolidationJobStatusResponse'
        );
    }

    /**
     * @param \LT\eBaySDK\BusinessPoliciesManagement\Types\RemoveOverridesRequest $request
     * @return \LT\eBaySDK\BusinessPoliciesManagement\Types\RemoveOverridesResponse
     */
    public function removeOverrides(\LT\eBaySDK\BusinessPoliciesManagement\Types\RemoveOverridesRequest $request)
    {
        return $this->removeOverridesAsync($request)->wait();
    }

    /**
     * @param \LT\eBaySDK\BusinessPoliciesManagement\Types\RemoveOverridesRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function removeOverridesAsync(\LT\eBaySDK\BusinessPoliciesManagement\Types\RemoveOverridesRequest $request)
    {
        return $this->callOperationAsync(
            'removeOverrides',
            $request,
            '\LT\eBaySDK\BusinessPoliciesManagement\Types\RemoveOverridesResponse'
        );
    }
}
