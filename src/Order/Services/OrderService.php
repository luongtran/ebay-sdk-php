<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace LT\eBaySDK\Order\Services;

class OrderService extends \LT\eBaySDK\Order\Services\OrderBaseService
{
    const API_VERSION = 'v1';

    /**
     * @property array $operations Associative array of operations provided by the service.
     */
    protected static $operations = [
        'GetCheckoutSession' => [
            'method' => 'GET',
            'resource' => 'checkout_session/{checkoutSessionId}',
            'responseClass' => '\LT\eBaySDK\Order\Types\GetCheckoutSessionRestResponse',
            'params' => [
                'checkoutSessionId' => [
                    'valid' => ['string'],
                    'required' => true
                ]
            ]
        ],
        'InitiateCheckoutSession' => [
            'method' => 'POST',
            'resource' => 'checkout_session/initiate',
            'responseClass' => '\LT\eBaySDK\Order\Types\InitiateCheckoutSessionRestResponse',
            'params' => [
            ]
        ],
        'PlaceOrder' => [
            'method' => 'POST',
            'resource' => 'checkout_session/{checkoutSessionId}/place_order',
            'responseClass' => '\LT\eBaySDK\Order\Types\PlaceOrderRestResponse',
            'params' => [
                'checkoutSessionId' => [
                    'valid' => ['string'],
                    'required' => true
                ]
            ]
        ],
        'UpdatePaymentInfo' => [
            'method' => 'POST',
            'resource' => 'checkout_session/{checkoutSessionId}/update_payment_info',
            'responseClass' => '\LT\eBaySDK\Order\Types\UpdatePaymentInfoRestResponse',
            'params' => [
                'checkoutSessionId' => [
                    'valid' => ['string'],
                    'required' => true
                ]
            ]
        ],
        'UpdateQuantityForLineItem' => [
            'method' => 'POST',
            'resource' => 'checkout_session/{checkoutSessionId}/update_quantity',
            'responseClass' => '\LT\eBaySDK\Order\Types\UpdateQuantityForLineItemRestResponse',
            'params' => [
                'checkoutSessionId' => [
                    'valid' => ['string'],
                    'required' => true
                ]
            ]
        ],
        'UpdateShippingAddress' => [
            'method' => 'POST',
            'resource' => '_session/{checkoutSessionId}/update_shipping_address',
            'responseClass' => '\LT\eBaySDK\Order\Types\UpdateShippingAddressRestResponse',
            'params' => [
                'checkoutSessionId' => [
                    'valid' => ['string'],
                    'required' => true
                ]
            ]
        ],
        'UpdateShippingOption' => [
            'method' => 'POST',
            'resource' => 'checkout_session/{checkoutSessionId}/update_shipping_option',
            'responseClass' => '\LT\eBaySDK\Order\Types\UpdateShippingOptionRestResponse',
            'params' => [
                'checkoutSessionId' => [
                    'valid' => ['string'],
                    'required' => true
                ]
            ]
        ],
        'GetGuestCheckoutSession' => [
            'method' => 'GET',
            'resource' => 'guest_checkout_session/{checkoutSessionId}',
            'responseClass' => '\LT\eBaySDK\Order\Types\GetGuestCheckoutSessionRestResponse',
            'params' => [
                'checkoutSessionId' => [
                    'valid' => ['string'],
                    'required' => true
                ]
            ]
        ],
        'InitiateGuestCheckoutSession' => [
            'method' => 'POST',
            'resource' => 'guest_checkout_session/initiate',
            'responseClass' => '\LT\eBaySDK\Order\Types\InitiateGuestCheckoutSessionRestResponse',
            'params' => [
            ]
        ],
        'PlaceGuestOrder' => [
            'method' => 'POST',
            'resource' => 'guest_checkout_session/{checkoutSessionId}/place_order',
            'responseClass' => '\LT\eBaySDK\Order\Types\PlaceGuestOrderRestResponse',
            'params' => [
                'checkoutSessionId' => [
                    'valid' => ['string'],
                    'required' => true
                ]
            ]
        ],
        'UpdateGuestLineItemQuantity' => [
            'method' => 'POST',
            'resource' => 'guest_checkout_session/{checkoutSessionId}/update_quantity',
            'responseClass' => '\LT\eBaySDK\Order\Types\UpdateGuestLineItemQuantityRestResponse',
            'params' => [
                'checkoutSessionId' => [
                    'valid' => ['string'],
                    'required' => true
                ]
            ]
        ],
        'UpdateGuestLineItemShippingAddress' => [
            'method' => 'POST',
            'resource' => 'guest_checkout_session/{checkoutSessionId}/update_shipping_address',
            'responseClass' => '\LT\eBaySDK\Order\Types\UpdateGuestLineItemShippingAddressRestResponse',
            'params' => [
                'checkoutSessionId' => [
                    'valid' => ['string'],
                    'required' => true
                ]
            ]
        ],
        'UpdateGuestPaymentInfo' => [
            'method' => 'POST',
            'resource' => 'guest_checkout_session/{checkoutSessionId}/update_payment_info',
            'responseClass' => '\LT\eBaySDK\Order\Types\UpdateGuestPaymentInfoRestResponse',
            'params' => [
                'checkoutSessionId' => [
                    'valid' => ['string'],
                    'required' => true
                ]
            ]
        ],
        'UpdateGuestShippingOption' => [
            'method' => 'POST',
            'resource' => 'guest_checkout_session/{checkoutSessionId}/update_shipping_option',
            'responseClass' => '\LT\eBaySDK\Order\Types\UpdateGuestShippingOptionRestResponse',
            'params' => [
                'checkoutSessionId' => [
                    'valid' => ['string'],
                    'required' => true
                ]
            ]
        ],
        'GetGuestPurchaseOrder' => [
            'method' => 'GET',
            'resource' => 'guest_purchase_order/{purchaseOrderId}',
            'responseClass' => '\LT\eBaySDK\Order\Types\GetGuestPurchaseOrderRestResponse',
            'params' => [
                'purchaseOrderId' => [
                    'valid' => ['string'],
                    'required' => true
                ]
            ]
        ],
        'GetPurchaseOrder' => [
            'method' => 'GET',
            'resource' => 'purchase_order/{purchaseOrderId}',
            'responseClass' => '\LT\eBaySDK\Order\Types\GetPurchaseOrderRestResponse',
            'params' => [
                'purchaseOrderId' => [
                    'valid' => ['string'],
                    'required' => true
                ]
            ]
        ]
    ];

    /**
     * @param array $config Configuration option values.
     */
    public function __construct(array $config = [])
    {
        parent::__construct($config);
    }

    /**
     * @param \LT\eBaySDK\Order\Types\GetCheckoutSessionRestRequest $request
     * @return \LT\eBaySDK\Order\Types\GetCheckoutSessionRestResponse
     */
    public function getCheckoutSession(\LT\eBaySDK\Order\Types\GetCheckoutSessionRestRequest $request)
    {
        return $this->getCheckoutSessionAsync($request)->wait();
    }

    /**
     * @param \LT\eBaySDK\Order\Types\GetCheckoutSessionRestRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getCheckoutSessionAsync(\LT\eBaySDK\Order\Types\GetCheckoutSessionRestRequest $request)
    {
        return $this->callOperationAsync('GetCheckoutSession', $request);
    }

    /**
     * @param \LT\eBaySDK\Order\Types\InitiateCheckoutSessionRestRequest $request
     * @return \LT\eBaySDK\Order\Types\InitiateCheckoutSessionRestResponse
     */
    public function initiateCheckoutSession(\LT\eBaySDK\Order\Types\InitiateCheckoutSessionRestRequest $request)
    {
        return $this->initiateCheckoutSessionAsync($request)->wait();
    }

    /**
     * @param \LT\eBaySDK\Order\Types\InitiateCheckoutSessionRestRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function initiateCheckoutSessionAsync(\LT\eBaySDK\Order\Types\InitiateCheckoutSessionRestRequest $request)
    {
        return $this->callOperationAsync('InitiateCheckoutSession', $request);
    }

    /**
     * @param \LT\eBaySDK\Order\Types\PlaceOrderRestRequest $request
     * @return \LT\eBaySDK\Order\Types\PlaceOrderRestResponse
     */
    public function placeOrder(\LT\eBaySDK\Order\Types\PlaceOrderRestRequest $request)
    {
        return $this->placeOrderAsync($request)->wait();
    }

    /**
     * @param \LT\eBaySDK\Order\Types\PlaceOrderRestRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function placeOrderAsync(\LT\eBaySDK\Order\Types\PlaceOrderRestRequest $request)
    {
        return $this->callOperationAsync('PlaceOrder', $request);
    }

    /**
     * @param \LT\eBaySDK\Order\Types\UpdatePaymentInfoRestRequest $request
     * @return \LT\eBaySDK\Order\Types\UpdatePaymentInfoRestResponse
     */
    public function updatePaymentInfo(\LT\eBaySDK\Order\Types\UpdatePaymentInfoRestRequest $request)
    {
        return $this->updatePaymentInfoAsync($request)->wait();
    }

    /**
     * @param \LT\eBaySDK\Order\Types\UpdatePaymentInfoRestRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updatePaymentInfoAsync(\LT\eBaySDK\Order\Types\UpdatePaymentInfoRestRequest $request)
    {
        return $this->callOperationAsync('UpdatePaymentInfo', $request);
    }

    /**
     * @param \LT\eBaySDK\Order\Types\UpdateQuantityForLineItemRestRequest $request
     * @return \LT\eBaySDK\Order\Types\UpdateQuantityForLineItemRestResponse
     */
    public function updateQuantityForLineItem(\LT\eBaySDK\Order\Types\UpdateQuantityForLineItemRestRequest $request)
    {
        return $this->updateQuantityForLineItemAsync($request)->wait();
    }

    /**
     * @param \LT\eBaySDK\Order\Types\UpdateQuantityForLineItemRestRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateQuantityForLineItemAsync(\LT\eBaySDK\Order\Types\UpdateQuantityForLineItemRestRequest $request)
    {
        return $this->callOperationAsync('UpdateQuantityForLineItem', $request);
    }

    /**
     * @param \LT\eBaySDK\Order\Types\UpdateShippingAddressRestRequest $request
     * @return \LT\eBaySDK\Order\Types\UpdateShippingAddressRestResponse
     */
    public function updateShippingAddress(\LT\eBaySDK\Order\Types\UpdateShippingAddressRestRequest $request)
    {
        return $this->updateShippingAddressAsync($request)->wait();
    }

    /**
     * @param \LT\eBaySDK\Order\Types\UpdateShippingAddressRestRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateShippingAddressAsync(\LT\eBaySDK\Order\Types\UpdateShippingAddressRestRequest $request)
    {
        return $this->callOperationAsync('UpdateShippingAddress', $request);
    }

    /**
     * @param \LT\eBaySDK\Order\Types\UpdateShippingOptionRestRequest $request
     * @return \LT\eBaySDK\Order\Types\UpdateShippingOptionRestResponse
     */
    public function updateShippingOption(\LT\eBaySDK\Order\Types\UpdateShippingOptionRestRequest $request)
    {
        return $this->updateShippingOptionAsync($request)->wait();
    }

    /**
     * @param \LT\eBaySDK\Order\Types\UpdateShippingOptionRestRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateShippingOptionAsync(\LT\eBaySDK\Order\Types\UpdateShippingOptionRestRequest $request)
    {
        return $this->callOperationAsync('UpdateShippingOption', $request);
    }

    /**
     * @param \LT\eBaySDK\Order\Types\GetGuestCheckoutSessionRestRequest $request
     * @return \LT\eBaySDK\Order\Types\GetGuestCheckoutSessionRestResponse
     */
    public function getGuestCheckoutSession(\LT\eBaySDK\Order\Types\GetGuestCheckoutSessionRestRequest $request)
    {
        return $this->getGuestCheckoutSessionAsync($request)->wait();
    }

    /**
     * @param \LT\eBaySDK\Order\Types\GetGuestCheckoutSessionRestRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getGuestCheckoutSessionAsync(\LT\eBaySDK\Order\Types\GetGuestCheckoutSessionRestRequest $request)
    {
        return $this->callOperationAsync('GetGuestCheckoutSession', $request);
    }

    /**
     * @param \LT\eBaySDK\Order\Types\InitiateGuestCheckoutSessionRestRequest $request
     * @return \LT\eBaySDK\Order\Types\InitiateGuestCheckoutSessionRestResponse
     */
    public function initiateGuestCheckoutSession(\LT\eBaySDK\Order\Types\InitiateGuestCheckoutSessionRestRequest $request)
    {
        return $this->initiateGuestCheckoutSessionAsync($request)->wait();
    }

    /**
     * @param \LT\eBaySDK\Order\Types\InitiateGuestCheckoutSessionRestRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function initiateGuestCheckoutSessionAsync(\LT\eBaySDK\Order\Types\InitiateGuestCheckoutSessionRestRequest $request)
    {
        return $this->callOperationAsync('InitiateGuestCheckoutSession', $request);
    }

    /**
     * @param \LT\eBaySDK\Order\Types\PlaceGuestOrderRestRequest $request
     * @return \LT\eBaySDK\Order\Types\PlaceGuestOrderRestResponse
     */
    public function placeGuestOrder(\LT\eBaySDK\Order\Types\PlaceGuestOrderRestRequest $request)
    {
        return $this->placeGuestOrderAsync($request)->wait();
    }

    /**
     * @param \LT\eBaySDK\Order\Types\PlaceGuestOrderRestRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function placeGuestOrderAsync(\LT\eBaySDK\Order\Types\PlaceGuestOrderRestRequest $request)
    {
        return $this->callOperationAsync('PlaceGuestOrder', $request);
    }

    /**
     * @param \LT\eBaySDK\Order\Types\UpdateGuestLineItemQuantityRestRequest $request
     * @return \LT\eBaySDK\Order\Types\UpdateGuestLineItemQuantityRestResponse
     */
    public function updateGuestLineItemQuantity(\LT\eBaySDK\Order\Types\UpdateGuestLineItemQuantityRestRequest $request)
    {
        return $this->updateGuestLineItemQuantityAsync($request)->wait();
    }

    /**
     * @param \LT\eBaySDK\Order\Types\UpdateGuestLineItemQuantityRestRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateGuestLineItemQuantityAsync(\LT\eBaySDK\Order\Types\UpdateGuestLineItemQuantityRestRequest $request)
    {
        return $this->callOperationAsync('UpdateGuestLineItemQuantity', $request);
    }

    /**
     * @param \LT\eBaySDK\Order\Types\UpdateGuestLineItemShippingAddressRestRequest $request
     * @return \LT\eBaySDK\Order\Types\UpdateGuestLineItemShippingAddressRestResponse
     */
    public function updateGuestLineItemShippingAddress(\LT\eBaySDK\Order\Types\UpdateGuestLineItemShippingAddressRestRequest $request)
    {
        return $this->updateGuestLineItemShippingAddressAsync($request)->wait();
    }

    /**
     * @param \LT\eBaySDK\Order\Types\UpdateGuestLineItemShippingAddressRestRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateGuestLineItemShippingAddressAsync(\LT\eBaySDK\Order\Types\UpdateGuestLineItemShippingAddressRestRequest $request)
    {
        return $this->callOperationAsync('UpdateGuestLineItemShippingAddress', $request);
    }

    /**
     * @param \LT\eBaySDK\Order\Types\UpdateGuestPaymentInfoRestRequest $request
     * @return \LT\eBaySDK\Order\Types\UpdateGuestPaymentInfoRestResponse
     */
    public function updateGuestPaymentInfo(\LT\eBaySDK\Order\Types\UpdateGuestPaymentInfoRestRequest $request)
    {
        return $this->updateGuestPaymentInfoAsync($request)->wait();
    }

    /**
     * @param \LT\eBaySDK\Order\Types\UpdateGuestPaymentInfoRestRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateGuestPaymentInfoAsync(\LT\eBaySDK\Order\Types\UpdateGuestPaymentInfoRestRequest $request)
    {
        return $this->callOperationAsync('UpdateGuestPaymentInfo', $request);
    }

    /**
     * @param \LT\eBaySDK\Order\Types\UpdateGuestShippingOptionRestRequest $request
     * @return \LT\eBaySDK\Order\Types\UpdateGuestShippingOptionRestResponse
     */
    public function updateGuestShippingOption(\LT\eBaySDK\Order\Types\UpdateGuestShippingOptionRestRequest $request)
    {
        return $this->updateGuestShippingOptionAsync($request)->wait();
    }

    /**
     * @param \LT\eBaySDK\Order\Types\UpdateGuestShippingOptionRestRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateGuestShippingOptionAsync(\LT\eBaySDK\Order\Types\UpdateGuestShippingOptionRestRequest $request)
    {
        return $this->callOperationAsync('UpdateGuestShippingOption', $request);
    }

    /**
     * @param \LT\eBaySDK\Order\Types\GetGuestPurchaseOrderRestRequest $request
     * @return \LT\eBaySDK\Order\Types\GetGuestPurchaseOrderRestResponse
     */
    public function getGuestPurchaseOrder(\LT\eBaySDK\Order\Types\GetGuestPurchaseOrderRestRequest $request)
    {
        return $this->getGuestPurchaseOrderAsync($request)->wait();
    }

    /**
     * @param \LT\eBaySDK\Order\Types\GetGuestPurchaseOrderRestRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getGuestPurchaseOrderAsync(\LT\eBaySDK\Order\Types\GetGuestPurchaseOrderRestRequest $request)
    {
        return $this->callOperationAsync('GetGuestPurchaseOrder', $request);
    }

    /**
     * @param \LT\eBaySDK\Order\Types\GetPurchaseOrderRestRequest $request
     * @return \LT\eBaySDK\Order\Types\GetPurchaseOrderRestResponse
     */
    public function getPurchaseOrder(\LT\eBaySDK\Order\Types\GetPurchaseOrderRestRequest $request)
    {
        return $this->getPurchaseOrderAsync($request)->wait();
    }

    /**
     * @param \LT\eBaySDK\Order\Types\GetPurchaseOrderRestRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getPurchaseOrderAsync(\LT\eBaySDK\Order\Types\GetPurchaseOrderRestRequest $request)
    {
        return $this->callOperationAsync('GetPurchaseOrder', $request);
    }
}
