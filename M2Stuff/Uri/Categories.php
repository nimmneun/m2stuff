<?php

namespace M2Stuff\Uri;

class Categories
{
    /**
     * Uri to: Retrieve specific attribute.
     * 
     * @param  string $attributeCode
     * @return string
     */
    public function getAttributesByAttributeCode($attributeCode)
    {
        return "/V1/categories/attributes/{$attributeCode}";
    }

    /**
     * Uri to: Retrieve all attributes for entity type.
     * 
     * @return string
     */
    public function getAttributes()
    {
        return "/V1/categories/attributes";
    }

    /**
     * Uri to: Retrieve list of attribute options.
     * 
     * @param  string $attributeCode
     * @return string
     */
    public function getAttributesOptionsByAttributeCode($attributeCode)
    {
        return "/V1/categories/attributes/{$attributeCode}/options";
    }

    /**
     * Uri to: Delete category by identifier.
     * 
     * @param  int    $categoryId
     * @return string
     */
    public function deleteByCategoryId($categoryId)
    {
        return "/V1/categories/{$categoryId}";
    }

    /**
     * Uri to: Get info about category by category id.
     * 
     * @param  int    $categoryId
     * @return string
     */
    public function getByCategoryId($categoryId)
    {
        return "/V1/categories/{$categoryId}";
    }

    /**
     * Uri to: Create category service.
     * 
     * @return string
     */
    public function post()
    {
        return "/V1/categories";
    }

    /**
     * Uri to: Retrieve list of categories.
     * 
     * @return string
     */
    public function get()
    {
        return "/V1/categories";
    }

    /**
     * Uri to: Create category service.
     * 
     * @param  int    $id
     * @return string
     */
    public function putById($id)
    {
        return "/V1/categories/{$id}";
    }

    /**
     * Uri to: Move category.
     * 
     * @param  int    $categoryId
     * @return string
     */
    public function putMoveByCategoryId($categoryId)
    {
        return "/V1/categories/{$categoryId}/move";
    }

    /**
     * Uri to: Get products assigned to category.
     * 
     * @param  int    $categoryId
     * @return string
     */
    public function getProductsByCategoryId($categoryId)
    {
        return "/V1/categories/{$categoryId}/products";
    }

    /**
     * Uri to: Assign a product to the required category.
     * 
     * @param  int    $categoryId
     * @return string
     */
    public function postProductsByCategoryId($categoryId)
    {
        return "/V1/categories/{$categoryId}/products";
    }

    /**
     * Uri to: Assign a product to the required category.
     * 
     * @param  int    $categoryId
     * @return string
     */
    public function putProductsByCategoryId($categoryId)
    {
        return "/V1/categories/{$categoryId}/products";
    }

    /**
     * Uri to: Remove the product assignment from the category by category id and sku.
     * 
     * @param  int    $categoryId
     * @param  string $sku
     * @return string
     */
    public function deleteProductsByCategoryIdAndSku($categoryId, $sku)
    {
        return "/V1/categories/{$categoryId}/products/{$sku}";
    }
}
