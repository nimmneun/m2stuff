<?php

namespace M2Stuff\Uri;

class TaxClasses
{
    /**
     * Uri to: Create a Tax Class.
     * 
     * @return string
     */
    public function post()
    {
        return "/V1/taxClasses";
    }

    /**
     * Uri to: Delete a tax class with the given tax class id.
     * 
     * @param  int    $taxClassId
     * @return string
     */
    public function deleteByTaxClassId($taxClassId)
    {
        return "/V1/taxClasses/{$taxClassId}";
    }

    /**
     * Uri to: Create a Tax Class.
     * 
     * @param  int    $classId
     * @return string
     */
    public function putByClassId($classId)
    {
        return "/V1/taxClasses/{$classId}";
    }

    /**
     * Uri to: Retrieve tax classes which match a specific criteria.
     * 
     * @return string
     */
    public function getSearch()
    {
        return "/V1/taxClasses/search";
    }
}
