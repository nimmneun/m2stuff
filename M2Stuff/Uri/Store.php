<?php

namespace M2Stuff\Uri;

class Store
{
    /**
     * Uri to: Retrieve list of all stores.
     * 
     * @return string
     */
    public function getStoreViews()
    {
        return "/V1/store/storeViews";
    }

    /**
     * Uri to: Retrieve list of all groups.
     * 
     * @return string
     */
    public function getStoreGroups()
    {
        return "/V1/store/storeGroups";
    }

    /**
     * Uri to: Retrieve list of all websites.
     * 
     * @return string
     */
    public function getWebsites()
    {
        return "/V1/store/websites";
    }

    /**
     * Uri to: No description yet.
     * 
     * @return string
     */
    public function getStoreConfigs()
    {
        return "/V1/store/storeConfigs";
    }
}
