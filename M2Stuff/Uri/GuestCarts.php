<?php

namespace M2Stuff\Uri;

class GuestCarts
{
    /**
     * Uri to: Assign a specified customer to a specified shopping cart.
     * 
     * @param  int    $cartId
     * @return string
     */
    public function putByCartId($cartId)
    {
        return "/V1/guest-carts/{$cartId}";
    }

    /**
     * Uri to: Enable an customer or guest user to create an empty cart and quote for an anonymous customer.
     * 
     * @return string
     */
    public function post()
    {
        return "/V1/guest-carts";
    }

    /**
     * Uri to: Place an order for a specified cart.
     * 
     * @param  int    $cartId
     * @return string
     */
    public function putOrderByCartId($cartId)
    {
        return "/V1/guest-carts/{$cartId}/order";
    }

    /**
     * Uri to: List applicable shipping methods for a specified quote.
     * 
     * @param  int    $cartId
     * @return string
     */
    public function getShippingMethodsByCartId($cartId)
    {
        return "/V1/guest-carts/{$cartId}/shipping-methods";
    }

    /**
     * Uri to: Estimate shipping.
     * 
     * @param  int    $cartId
     * @return string
     */
    public function postEstimateShippingMethodsByCartId($cartId)
    {
        return "/V1/guest-carts/{$cartId}/estimate-shipping-methods";
    }

    /**
     * Uri to: Add the specified item to the specified cart.
     * 
     * @param  int    $cartId
     * @return string
     */
    public function postItemsByCartId($cartId)
    {
        return "/V1/guest-carts/{$cartId}/items";
    }

    /**
     * Uri to: Remove the specified item from the specified cart.
     * 
     * @param  int    $cartId
     * @param  int    $itemId
     * @return string
     */
    public function deleteItemsByCartIdAndItemId($cartId, $itemId)
    {
        return "/V1/guest-carts/{$cartId}/items/{$itemId}";
    }

    /**
     * Uri to: Add a specified payment method to a specified shopping cart.
     * 
     * @param  int    $cartId
     * @return string
     */
    public function putSelectedPaymentMethodByCartId($cartId)
    {
        return "/V1/guest-carts/{$cartId}/selected-payment-method";
    }

    /**
     * Uri to: List available payment methods for a specified shopping cart.
     * 
     * @param  int    $cartId
     * @return string
     */
    public function getPaymentMethodsByCartId($cartId)
    {
        return "/V1/guest-carts/{$cartId}/payment-methods";
    }

    /**
     * Uri to: Assign a specified billing address to a specified cart.
     * 
     * @param  int    $cartId
     * @return string
     */
    public function postBillingAddressByCartId($cartId)
    {
        return "/V1/guest-carts/{$cartId}/billing-address";
    }

    /**
     * Uri to: Delete a coupon from a specified cart.
     * 
     * @param  int    $cartId
     * @return string
     */
    public function deleteCouponsByCartId($cartId)
    {
        return "/V1/guest-carts/{$cartId}/coupons";
    }

    /**
     * Uri to: Add a coupon by code to a specified cart.
     * 
     * @param  int    $cartId
     * @param  string $couponCode
     * @return string
     */
    public function putCouponsByCartIdAndCouponCode($cartId, $couponCode)
    {
        return "/V1/guest-carts/{$cartId}/coupons/{$couponCode}";
    }

    /**
     * Uri to: Set shipping/billing methods and additional data for cart and collect totals for guest.
     * 
     * @param  int    $cartId
     * @return string
     */
    public function putCollectTotalsByCartId($cartId)
    {
        return "/V1/guest-carts/{$cartId}/collect-totals";
    }

    /**
     * Uri to: Return quote totals data for a specified cart.
     * 
     * @param  int    $cartId
     * @return string
     */
    public function getTotalsByCartId($cartId)
    {
        return "/V1/guest-carts/{$cartId}/totals";
    }

    /**
     * Uri to: No description yet.
     * 
     * @param  int    $cartId
     * @return string
     */
    public function postShippingInformationByCartId($cartId)
    {
        return "/V1/guest-carts/{$cartId}/shipping-information";
    }

    /**
     * Uri to: Calculate quote totals based on address and shipping method.
     * 
     * @param  int    $cartId
     * @return string
     */
    public function postTotalsInformationByCartId($cartId)
    {
        return "/V1/guest-carts/{$cartId}/totals-information";
    }

    /**
     * Uri to: Get payment information.
     * 
     * @param  int    $cartId
     * @return string
     */
    public function getPaymentInformationByCartId($cartId)
    {
        return "/V1/guest-carts/{$cartId}/payment-information";
    }

    /**
     * Uri to: Set payment information for a specified cart.
     * 
     * @param  int    $cartId
     * @return string
     */
    public function postSetPaymentInformationByCartId($cartId)
    {
        return "/V1/guest-carts/{$cartId}/set-payment-information";
    }

    /**
     * Uri to: Set the gift message for an entire order.
     * 
     * @param  int    $cartId
     * @return string
     */
    public function postGiftMessageByCartId($cartId)
    {
        return "/V1/guest-carts/{$cartId}/gift-message";
    }

    /**
     * Uri to: Set the gift message for a specified item in a specified shopping cart.
     * 
     * @param  int    $cartId
     * @param  int    $itemId
     * @return string
     */
    public function postGiftMessageByCartIdAndItemId($cartId, $itemId)
    {
        return "/V1/guest-carts/{$cartId}/gift-message/{$itemId}";
    }
}
