<?php

namespace M2Stuff\Uri;

class Creditmemo
{
    /**
     * Uri to: Lists comments for a specified credit memo.
     * 
     * @param  int    $id
     * @return string
     */
    public function getCommentsById($id)
    {
        return "/V1/creditmemo/{$id}/comments";
    }

    /**
     * Uri to: Performs persist operations for a specified entity.
     * 
     * @param  int    $id
     * @return string
     */
    public function postCommentsById($id)
    {
        return "/V1/creditmemo/{$id}/comments";
    }

    /**
     * Uri to: Cancels a specified credit memo.
     * 
     * @param  int    $id
     * @return string
     */
    public function putById($id)
    {
        return "/V1/creditmemo/{$id}";
    }

    /**
     * Uri to: Loads a specified credit memo.
     * 
     * @param  int    $id
     * @return string
     */
    public function getById($id)
    {
        return "/V1/creditmemo/{$id}";
    }

    /**
     * Uri to: Emails a user a specified credit memo.
     * 
     * @param  int    $id
     * @return string
     */
    public function postEmailsById($id)
    {
        return "/V1/creditmemo/{$id}/emails";
    }

    /**
     * Uri to: Performs persist operations for a specified credit memo.
     * 
     * @return string
     */
    public function post()
    {
        return "/V1/creditmemo";
    }
}
