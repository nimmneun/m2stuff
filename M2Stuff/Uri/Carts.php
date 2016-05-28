<?php

namespace M2Stuff\Uri;

class Carts
{
    /**
     * Uri to: Enables an administrative user to return information for a specified cart.
     * 
     * @param  int    $cartId
     * @return string
     */
    public function getByCartId($cartId)
    {
        return "/V1/carts/{$cartId}";
    }

    /**
     * Uri to: Assigns a specified customer to a specified shopping cart.
     * 
     * @param  int    $cartId
     * @return string
     */
    public function putByCartId($cartId)
    {
        return "/V1/carts/{$cartId}";
    }

    /**
     * Uri to: Enables administrative users to list carts that match specified search criteria.
     * 
     * @return string
     */
    public function getSearch()
    {
        return "/V1/carts/search";
    }

    /**
     * Uri to: Creates an empty cart and quote for a guest.
     * 
     * @return string
     */
    public function post()
    {
        return "/V1/carts/";
    }

    /**
     * Uri to: Creates an empty cart and quote for a specified customer.
     * 
     * @return string
     */
    public function postMine()
    {
        return "/V1/carts/mine";
    }

    /**
     * Uri to: Returns information for the cart for a specified customer.
     * 
     * @return string
     */
    public function getMine()
    {
        return "/V1/carts/mine";
    }

    /**
     * Uri to: Places an order for a specified cart.
     * 
     * @return string
     */
    public function putMineOrder()
    {
        return "/V1/carts/mine/order";
    }

    /**
     * Uri to: Places an order for a specified cart.
     * 
     * @param  int    $cartId
     * @return string
     */
    public function putOrderByCartId($cartId)
    {
        return "/V1/carts/{$cartId}/order";
    }

    /**
     * Uri to: Lists applicable shipping methods for a specified quote.
     * 
     * @param  int    $cartId
     * @return string
     */
    public function getShippingMethodsByCartId($cartId)
    {
        return "/V1/carts/{$cartId}/shipping-methods";
    }

    /**
     * Uri to: Lists applicable shipping methods for a specified quote.
     * 
     * @return string
     */
    public function getMineShippingMethods()
    {
        return "/V1/carts/mine/shipping-methods";
    }

    /**
     * Uri to: Estimate shipping.
     * 
     * @return string
     */
    public function postMineEstimateShippingMethods()
    {
        return "/V1/carts/mine/estimate-shipping-methods";
    }

    /**
     * Uri to: Estimate shipping.
     * 
     * @return string
     */
    public function postMineEstimateShippingMethodsByAddressId()
    {
        return "/V1/carts/mine/estimate-shipping-methods-by-address-id";
    }

    /**
     * Uri to: Lists items that are assigned to a specified cart.
     * 
     * @param  int    $cartId
     * @return string
     */
    public function getItemsByCartId($cartId)
    {
        return "/V1/carts/{$cartId}/items";
    }

    /**
     * Uri to: Adds the specified item to the specified cart.
     * 
     * @param  int    $cartId
     * @return string
     */
    public function postItemsByCartId($cartId)
    {
        return "/V1/carts/{$cartId}/items";
    }

    /**
     * Uri to: Adds the specified item to the specified cart.
     * 
     * @param  int    $cartId
     * @param  int    $itemId
     * @return string
     */
    public function putItemsByCartIdAndItemId($cartId, $itemId)
    {
        return "/V1/carts/{$cartId}/items/{$itemId}";
    }

    /**
     * Uri to: Removes the specified item from the specified cart.
     * 
     * @param  int    $cartId
     * @param  int    $itemId
     * @return string
     */
    public function deleteItemsByCartIdAndItemId($cartId, $itemId)
    {
        return "/V1/carts/{$cartId}/items/{$itemId}";
    }

    /**
     * Uri to: Lists items that are assigned to a specified cart.
     * 
     * @return string
     */
    public function getMineItems()
    {
        return "/V1/carts/mine/items";
    }

    /**
     * Uri to: Adds the specified item to the specified cart.
     * 
     * @return string
     */
    public function postMineItems()
    {
        return "/V1/carts/mine/items";
    }

    /**
     * Uri to: Adds the specified item to the specified cart.
     * 
     * @param  int    $itemId
     * @return string
     */
    public function putMineItemsByItemId($itemId)
    {
        return "/V1/carts/mine/items/{$itemId}";
    }

    /**
     * Uri to: Removes the specified item from the specified cart.
     * 
     * @param  int    $itemId
     * @return string
     */
    public function deleteMineItemsByItemId($itemId)
    {
        return "/V1/carts/mine/items/{$itemId}";
    }

    /**
     * Uri to: Returns the payment method for a specified shopping cart.
     * 
     * @param  int    $cartId
     * @return string
     */
    public function getSelectedPaymentMethodByCartId($cartId)
    {
        return "/V1/carts/{$cartId}/selected-payment-method";
    }

    /**
     * Uri to: Adds a specified payment method to a specified shopping cart.
     * 
     * @param  int    $cartId
     * @return string
     */
    public function putSelectedPaymentMethodByCartId($cartId)
    {
        return "/V1/carts/{$cartId}/selected-payment-method";
    }

    /**
     * Uri to: Lists available payment methods for a specified shopping cart.
     * 
     * @param  int    $cartId
     * @return string
     */
    public function getPaymentMethodsByCartId($cartId)
    {
        return "/V1/carts/{$cartId}/payment-methods";
    }

    /**
     * Uri to: Returns the payment method for a specified shopping cart.
     * 
     * @return string
     */
    public function getMineSelectedPaymentMethod()
    {
        return "/V1/carts/mine/selected-payment-method";
    }

    /**
     * Uri to: Adds a specified payment method to a specified shopping cart.
     * 
     * @return string
     */
    public function putMineSelectedPaymentMethod()
    {
        return "/V1/carts/mine/selected-payment-method";
    }

    /**
     * Uri to: Lists available payment methods for a specified shopping cart.
     * 
     * @return string
     */
    public function getMinePaymentMethods()
    {
        return "/V1/carts/mine/payment-methods";
    }

    /**
     * Uri to: Returns the billing address for a specified quote.
     * 
     * @param  int    $cartId
     * @return string
     */
    public function getBillingAddressByCartId($cartId)
    {
        return "/V1/carts/{$cartId}/billing-address";
    }

    /**
     * Uri to: Assigns a specified billing address to a specified cart.
     * 
     * @param  int    $cartId
     * @return string
     */
    public function postBillingAddressByCartId($cartId)
    {
        return "/V1/carts/{$cartId}/billing-address";
    }

    /**
     * Uri to: Returns the billing address for a specified quote.
     * 
     * @return string
     */
    public function getMineBillingAddress()
    {
        return "/V1/carts/mine/billing-address";
    }

    /**
     * Uri to: Assigns a specified billing address to a specified cart.
     * 
     * @return string
     */
    public function postMineBillingAddress()
    {
        return "/V1/carts/mine/billing-address";
    }

    /**
     * Uri to: Returns information for a coupon in a specified cart.
     * 
     * @param  int    $cartId
     * @return string
     */
    public function getCouponsByCartId($cartId)
    {
        return "/V1/carts/{$cartId}/coupons";
    }

    /**
     * Uri to: Deletes a coupon from a specified cart.
     * 
     * @param  int    $cartId
     * @return string
     */
    public function deleteCouponsByCartId($cartId)
    {
        return "/V1/carts/{$cartId}/coupons";
    }

    /**
     * Uri to: Adds a coupon by code to a specified cart.
     * 
     * @param  int    $cartId
     * @param  string $couponCode
     * @return string
     */
    public function putCouponsByCartIdAndCouponCode($cartId, $couponCode)
    {
        return "/V1/carts/{$cartId}/coupons/{$couponCode}";
    }

    /**
     * Uri to: Returns information for a coupon in a specified cart.
     * 
     * @return string
     */
    public function getMineCoupons()
    {
        return "/V1/carts/mine/coupons";
    }

    /**
     * Uri to: Deletes a coupon from a specified cart.
     * 
     * @return string
     */
    public function deleteMineCoupons()
    {
        return "/V1/carts/mine/coupons";
    }

    /**
     * Uri to: Adds a coupon by code to a specified cart.
     * 
     * @param  string $couponCode
     * @return string
     */
    public function putMineCouponsByCouponCode($couponCode)
    {
        return "/V1/carts/mine/coupons/{$couponCode}";
    }

    /**
     * Uri to: Returns quote totals data for a specified cart.
     * 
     * @param  int    $cartId
     * @return string
     */
    public function getTotalsByCartId($cartId)
    {
        return "/V1/carts/{$cartId}/totals";
    }

    /**
     * Uri to: Returns quote totals data for a specified cart.
     * 
     * @return string
     */
    public function getMineTotals()
    {
        return "/V1/carts/mine/totals";
    }

    /**
     * Uri to: Set shipping/billing methods and additional data for cart and collect totals.
     * 
     * @return string
     */
    public function putMineCollectTotals()
    {
        return "/V1/carts/mine/collect-totals";
    }

    /**
     * Uri to: Lists active checkout agreements.
     * 
     * @return string
     */
    public function getLicence()
    {
        return "/V1/carts/licence";
    }

    /**
     * Uri to: No description yet.
     * 
     * @return string
     */
    public function postMineShippingInformation()
    {
        return "/V1/carts/mine/shipping-information";
    }

    /**
     * Uri to: No description yet.
     * 
     * @param  int    $cartId
     * @return string
     */
    public function postShippingInformationByCartId($cartId)
    {
        return "/V1/carts/{$cartId}/shipping-information";
    }

    /**
     * Uri to: Calculate quote totals based on address and shipping method.
     * 
     * @param  int    $cartId
     * @return string
     */
    public function postTotalsInformationByCartId($cartId)
    {
        return "/V1/carts/{$cartId}/totals-information";
    }

    /**
     * Uri to: Calculate quote totals based on address and shipping method.
     * 
     * @return string
     */
    public function postMineTotalsInformation()
    {
        return "/V1/carts/mine/totals-information";
    }

    /**
     * Uri to: Set payment information and place order for a specified cart.
     * 
     * @return string
     */
    public function postMinePaymentInformation()
    {
        return "/V1/carts/mine/payment-information";
    }

    /**
     * Uri to: Get payment information.
     * 
     * @return string
     */
    public function getMinePaymentInformation()
    {
        return "/V1/carts/mine/payment-information";
    }

    /**
     * Uri to: Set payment information for a specified cart.
     * 
     * @return string
     */
    public function postMineSetPaymentInformation()
    {
        return "/V1/carts/mine/set-payment-information";
    }

    /**
     * Uri to: Return the gift message for a specified order.
     * 
     * @param  int    $cartId
     * @return string
     */
    public function getGiftMessageByCartId($cartId)
    {
        return "/V1/carts/{$cartId}/gift-message";
    }

    /**
     * Uri to: Set the gift message for an entire order.
     * 
     * @param  int    $cartId
     * @return string
     */
    public function postGiftMessageByCartId($cartId)
    {
        return "/V1/carts/{$cartId}/gift-message";
    }

    /**
     * Uri to: Return the gift message for a specified order.
     * 
     * @return string
     */
    public function getMineGiftMessage()
    {
        return "/V1/carts/mine/gift-message";
    }

    /**
     * Uri to: Set the gift message for an entire order.
     * 
     * @return string
     */
    public function postMineGiftMessage()
    {
        return "/V1/carts/mine/gift-message";
    }

    /**
     * Uri to: Return the gift message for a specified item in a specified shopping cart.
     * 
     * @param  int    $cartId
     * @param  int    $itemId
     * @return string
     */
    public function getGiftMessageByCartIdAndItemId($cartId, $itemId)
    {
        return "/V1/carts/{$cartId}/gift-message/{$itemId}";
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
        return "/V1/carts/{$cartId}/gift-message/{$itemId}";
    }

    /**
     * Uri to: Return the gift message for a specified item in a specified shopping cart.
     * 
     * @param  int    $itemId
     * @return string
     */
    public function getMineGiftMessageByItemId($itemId)
    {
        return "/V1/carts/mine/gift-message/{$itemId}";
    }

    /**
     * Uri to: Set the gift message for a specified item in a specified shopping cart.
     * 
     * @param  int    $itemId
     * @return string
     */
    public function postMineGiftMessageByItemId($itemId)
    {
        return "/V1/carts/mine/gift-message/{$itemId}";
    }
}
