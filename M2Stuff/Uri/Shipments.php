<?php

namespace M2Stuff\Uri;

class Shipments
{
    /**
     * Uri to: Lists shipments that match specified search criteria.
     * 
     * @return string
     */
    public function get()
    {
        return "/V1/shipments";
    }
}
