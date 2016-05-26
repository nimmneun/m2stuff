<?php

namespace M2Stuff\Uri;

class Modules
{
    /**
     * Uri to: Returns an array of enabled modules.
     * 
     * @return string
     */
    public function get()
    {
        return "/V1/modules";
    }
}
