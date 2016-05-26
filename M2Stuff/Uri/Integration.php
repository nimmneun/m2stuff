<?php

namespace M2Stuff\Uri;

class Integration
{
    /**
     * Uri to: Create access token for admin given the admin credentials.
     * 
     * @return string
     */
    public function postAdminToken()
    {
        return "/V1/integration/admin/token";
    }

    /**
     * Uri to: Create access token for admin given the customer credentials.
     * 
     * @return string
     */
    public function postCustomerToken()
    {
        return "/V1/integration/customer/token";
    }
}
