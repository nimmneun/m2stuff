<?php

namespace M2Stuff\Uri;

class AttributeMetadata
{
    /**
     * Uri to: Retrieve attribute metadata.
     * 
     * @param  string $attributeCode
     * @return string
     */
    public function getCustomerAttributeByAttributeCode($attributeCode)
    {
        return "/V1/attributeMetadata/customer/attribute/{$attributeCode}";
    }

    /**
     * Uri to: Retrieve all attributes filtered by form code.
     * 
     * @param  string $formCode
     * @return string
     */
    public function getCustomerFormByFormCode($formCode)
    {
        return "/V1/attributeMetadata/customer/form/{$formCode}";
    }

    /**
     * Uri to: Get all attribute metadata.
     * 
     * @return string
     */
    public function getCustomer()
    {
        return "/V1/attributeMetadata/customer";
    }

    /**
     * Uri to: Get custom attributes metadata for the given data interface.
     * 
     * @return string
     */
    public function getCustomerCustom()
    {
        return "/V1/attributeMetadata/customer/custom";
    }

    /**
     * Uri to: Retrieve attribute metadata.
     * 
     * @param  string $attributeCode
     * @return string
     */
    public function getCustomerAddressAttributeByAttributeCode($attributeCode)
    {
        return "/V1/attributeMetadata/customerAddress/attribute/{$attributeCode}";
    }

    /**
     * Uri to: Retrieve all attributes filtered by form code.
     * 
     * @param  string $formCode
     * @return string
     */
    public function getCustomerAddressFormByFormCode($formCode)
    {
        return "/V1/attributeMetadata/customerAddress/form/{$formCode}";
    }

    /**
     * Uri to: Get all attribute metadata.
     * 
     * @return string
     */
    public function getCustomerAddress()
    {
        return "/V1/attributeMetadata/customerAddress";
    }

    /**
     * Uri to: Get custom attributes metadata for the given data interface.
     * 
     * @return string
     */
    public function getCustomerAddressCustom()
    {
        return "/V1/attributeMetadata/customerAddress/custom";
    }
}
