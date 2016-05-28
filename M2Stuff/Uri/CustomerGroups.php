<?php

namespace M2Stuff\Uri;

class CustomerGroups
{
    /**
     * Uri to: Get customer group by group ID.
     * 
     * @param  int    $id
     * @return string
     */
    public function getById($id)
    {
        return "/V1/customerGroups/{$id}";
    }

    /**
     * Uri to: Update customer group.
     * 
     * @param  int    $id
     * @return string
     */
    public function putById($id)
    {
        return "/V1/customerGroups/{$id}";
    }

    /**
     * Uri to: Delete customer group by ID.
     * 
     * @param  int    $id
     * @return string
     */
    public function deleteById($id)
    {
        return "/V1/customerGroups/{$id}";
    }

    /**
     * Uri to: Retrieve customer groups. The list of groups can be filtered to exclude the NOT_LOGGED_IN group using the first parameter and/or it can be filtered by tax class.
     * 
     * @return string
     */
    public function getSearch()
    {
        return "/V1/customerGroups/search";
    }

    /**
     * Uri to: Save customer group.
     * 
     * @return string
     */
    public function post()
    {
        return "/V1/customerGroups";
    }

    /**
     * Uri to: Get default customer group.
     * 
     * @param  int    $storeId
     * @return string
     */
    public function getDefaultByStoreId($storeId)
    {
        return "/V1/customerGroups/default/{$storeId}";
    }

    /**
     * Uri to: Get default customer group.
     * 
     * @return string
     */
    public function getDefault()
    {
        return "/V1/customerGroups/default";
    }

    /**
     * Uri to: Check if customer group can be deleted.
     * 
     * @param  int    $id
     * @return string
     */
    public function getPermissionsById($id)
    {
        return "/V1/customerGroups/{$id}/permissions";
    }
}
