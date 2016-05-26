<?php

namespace M2Stuff\Uri;

class Orders
{
    /**
     * Uri to: Loads a specified order.
     * 
     * @param  int    $id
     * @return string
     */
    public function getById($id)
    {
        return "/V1/orders/{$id}";
    }

    /**
     * Uri to: Lists orders that match specified search criteria.
     * 
     * @return string
     */
    public function get()
    {
        return "/V1/orders";
    }

    /**
     * Uri to: Gets the status for a specified order.
     * 
     * @param  int    $id
     * @return string
     */
    public function getStatusesById($id)
    {
        return "/V1/orders/{$id}/statuses";
    }

    /**
     * Uri to: Cancels a specified order.
     * 
     * @param  int    $id
     * @return string
     */
    public function postCancelById($id)
    {
        return "/V1/orders/{$id}/cancel";
    }

    /**
     * Uri to: Emails a user a specified order.
     * 
     * @param  int    $id
     * @return string
     */
    public function postEmailsById($id)
    {
        return "/V1/orders/{$id}/emails";
    }

    /**
     * Uri to: Holds a specified order.
     * 
     * @param  int    $id
     * @return string
     */
    public function postHoldById($id)
    {
        return "/V1/orders/{$id}/hold";
    }

    /**
     * Uri to: Releases a specified order from hold status.
     * 
     * @param  int    $id
     * @return string
     */
    public function postUnholdById($id)
    {
        return "/V1/orders/{$id}/unhold";
    }

    /**
     * Uri to: Lists comments for a specified order.
     * 
     * @param  int    $id
     * @return string
     */
    public function getCommentsById($id)
    {
        return "/V1/orders/{$id}/comments";
    }

    /**
     * Uri to: Performs persist operations for a specified order address.
     * 
     * @param  int    $parentId
     * @return string
     */
    public function putByParentId($parentId)
    {
        return "/V1/orders/{parent_id}";
    }

    /**
     * Uri to: Loads a specified order item.
     * 
     * @param  int    $id
     * @return string
     */
    public function getItemsById($id)
    {
        return "/V1/orders/items/{$id}";
    }

    /**
     * Uri to: Lists order items that match specified search criteria.
     * 
     * @return string
     */
    public function getItems()
    {
        return "/V1/orders/items";
    }
}
