<?php

namespace M2Stuff\Uri;

class Directory
{
    /**
     * Uri to: Get currency information for the store.
     * 
     * @return string
     */
    public function getCurrency()
    {
        return "/V1/directory/currency";
    }

    /**
     * Uri to: Get all countries and regions information for the store.
     * 
     * @return string
     */
    public function getCountries()
    {
        return "/V1/directory/countries";
    }

    /**
     * Uri to: Get country and region information for the store.
     * 
     * @param  int    $countryId
     * @return string
     */
    public function getCountriesByCountryId($countryId)
    {
        return "/V1/directory/countries/{$countryId}";
    }
}
