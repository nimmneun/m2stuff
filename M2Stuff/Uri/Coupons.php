<?php

namespace M2Stuff\Uri;

class Coupons
{
    /**
     * Uri to: Delete coupon by coupon id.
     * 
     * @param  int    $couponId
     * @return string
     */
    public function deleteByCouponId($couponId)
    {
        return "/V1/coupons/{$couponId}";
    }

    /**
     * Uri to: Retrieve coupon.
     * 
     * @return string
     */
    public function getSearch()
    {
        return "/V1/coupons/search";
    }

    /**
     * Uri to: Save coupon.
     * 
     * @return string
     */
    public function post()
    {
        return "/V1/coupons";
    }

    /**
     * Uri to: Generate coupon for a rule.
     * 
     * @return string
     */
    public function postGenerate()
    {
        return "/V1/coupons/generate";
    }

    /**
     * Uri to: Delete coupon by coupon ids.
     * 
     * @return string
     */
    public function postDeleteByIds()
    {
        return "/V1/coupons/deleteByIds";
    }

    /**
     * Uri to: Delete coupon by coupon codes.
     * 
     * @return string
     */
    public function postDeleteByCodes()
    {
        return "/V1/coupons/deleteByCodes";
    }
}
