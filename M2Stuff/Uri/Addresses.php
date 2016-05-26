<?php

namespace M2Stuff\Uri;

class Addresses
{
    /**
     * Uri to: Delete customer address by ID.
     * 
     * @param  int    $addressId
     * @return string
     */
    public function deleteByAddressId($addressId)
    {
        return "/V1/addresses/{$addressId}";
    }
}
