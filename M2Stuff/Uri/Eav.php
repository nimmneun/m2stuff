<?php

namespace M2Stuff\Uri;

class Eav
{
    /**
     * Uri to: Retrieve list of Attribute Sets.
     * 
     * @return string
     */
    public function getAttributeSetsList()
    {
        return "/V1/eav/attribute-sets/list";
    }

    /**
     * Uri to: Retrieve attribute set information based on given ID.
     * 
     * @param  int    $attributeSetId
     * @return string
     */
    public function getAttributeSetsByAttributeSetId($attributeSetId)
    {
        return "/V1/eav/attribute-sets/{$attributeSetId}";
    }

    /**
     * Uri to: Remove attribute set by given ID.
     * 
     * @param  int    $attributeSetId
     * @return string
     */
    public function deleteAttributeSetsByAttributeSetId($attributeSetId)
    {
        return "/V1/eav/attribute-sets/{$attributeSetId}";
    }

    /**
     * Uri to: Update attribute set data.
     * 
     * @param  int    $attributeSetId
     * @return string
     */
    public function putAttributeSetsByAttributeSetId($attributeSetId)
    {
        return "/V1/eav/attribute-sets/{$attributeSetId}";
    }

    /**
     * Uri to: Create attribute set from data.
     * 
     * @return string
     */
    public function postAttributeSets()
    {
        return "/V1/eav/attribute-sets";
    }
}
