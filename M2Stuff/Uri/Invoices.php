<?php

namespace M2Stuff\Uri;

class Invoices
{
    /**
     * Uri to: Loads a specified invoice.
     * 
     * @param  int    $id
     * @return string
     */
    public function getById($id)
    {
        return "/V1/invoices/{$id}";
    }

    /**
     * Uri to: Lists invoices that match specified search criteria.
     * 
     * @return string
     */
    public function get()
    {
        return "/V1/invoices";
    }

    /**
     * Uri to: Performs persist operations for a specified invoice.
     * 
     * @return string
     */
    public function post()
    {
        return "/V1/invoices/";
    }

    /**
     * Uri to: Lists comments for a specified invoice.
     * 
     * @param  int    $id
     * @return string
     */
    public function getCommentsById($id)
    {
        return "/V1/invoices/{$id}/comments";
    }

    /**
     * Uri to: Emails a user a specified invoice.
     * 
     * @param  int    $id
     * @return string
     */
    public function postEmailsById($id)
    {
        return "/V1/invoices/{$id}/emails";
    }

    /**
     * Uri to: Voids a specified invoice.
     * 
     * @param  int    $id
     * @return string
     */
    public function postVoidById($id)
    {
        return "/V1/invoices/{$id}/void";
    }

    /**
     * Uri to: Sets invoice capture.
     * 
     * @param  int    $id
     * @return string
     */
    public function postCaptureById($id)
    {
        return "/V1/invoices/{$id}/capture";
    }

    /**
     * Uri to: Performs persist operations for a specified invoice comment.
     * 
     * @return string
     */
    public function postComments()
    {
        return "/V1/invoices/comments";
    }
}
