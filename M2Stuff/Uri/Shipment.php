<?php

namespace M2Stuff\Uri;

class Shipment
{
    /**
     * Uri to: Loads a specified shipment.
     * 
     * @param  int    $id
     * @return string
     */
    public function getById($id)
    {
        return "/V1/shipment/{$id}";
    }

    /**
     * Uri to: Performs persist operations for a specified shipment.
     * 
     * @return string
     */
    public function post()
    {
        return "/V1/shipment/";
    }

    /**
     * Uri to: Lists comments for a specified shipment.
     * 
     * @param  int    $id
     * @return string
     */
    public function getCommentsById($id)
    {
        return "/V1/shipment/{$id}/comments";
    }

    /**
     * Uri to: Performs persist operations for a specified shipment comment.
     * 
     * @param  int    $id
     * @return string
     */
    public function postCommentsById($id)
    {
        return "/V1/shipment/{$id}/comments";
    }

    /**
     * Uri to: Emails user a specified shipment.
     * 
     * @param  int    $id
     * @return string
     */
    public function postEmailsById($id)
    {
        return "/V1/shipment/{$id}/emails";
    }

    /**
     * Uri to: Gets a specified shipment label.
     * 
     * @param  int    $id
     * @return string
     */
    public function getLabelById($id)
    {
        return "/V1/shipment/{$id}/label";
    }

    /**
     * Uri to: Performs persist operations for a specified shipment track.
     * 
     * @return string
     */
    public function postTrack()
    {
        return "/V1/shipment/track";
    }

    /**
     * Uri to: Deletes a specified shipment track by ID.
     * 
     * @param  int    $id
     * @return string
     */
    public function deleteTrackById($id)
    {
        return "/V1/shipment/track/{$id}";
    }
}
