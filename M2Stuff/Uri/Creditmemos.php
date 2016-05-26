<?php

namespace M2Stuff\Uri;

class Creditmemos
{
    /**
     * Uri to: Lists credit memos that match specified search criteria.
     * 
     * @return string
     */
    public function get()
    {
        return "/V1/creditmemos";
    }
}
