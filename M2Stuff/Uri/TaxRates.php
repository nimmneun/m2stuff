<?php

namespace M2Stuff\Uri;

class TaxRates
{
    /**
     * Uri to: Create or update tax rate.
     * 
     * @return string
     */
    public function post()
    {
        return "/V1/taxRates";
    }

    /**
     * Uri to: Create or update tax rate.
     * 
     * @return string
     */
    public function put()
    {
        return "/V1/taxRates";
    }

    /**
     * Uri to: Get tax rate.
     * 
     * @param  int    $rateId
     * @return string
     */
    public function getByRateId($rateId)
    {
        return "/V1/taxRates/{$rateId}";
    }

    /**
     * Uri to: Delete tax rate.
     * 
     * @param  int    $rateId
     * @return string
     */
    public function deleteByRateId($rateId)
    {
        return "/V1/taxRates/{$rateId}";
    }

    /**
     * Uri to: Search TaxRates.
     * 
     * @return string
     */
    public function getSearch()
    {
        return "/V1/taxRates/search";
    }
}
