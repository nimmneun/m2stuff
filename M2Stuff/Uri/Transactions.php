<?php

namespace M2Stuff\Uri;

class Transactions
{
    /**
     * Uri to: Loads a specified transaction.
     * 
     * @param  int    $id
     * @return string
     */
    public function getById($id)
    {
        return "/V1/transactions/{$id}";
    }

    /**
     * Uri to: Lists transactions that match specified search criteria.
     * 
     * @return string
     */
    public function get()
    {
        return "/V1/transactions";
    }
}
