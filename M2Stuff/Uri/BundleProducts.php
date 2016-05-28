<?php

namespace M2Stuff\Uri;

class BundleProducts
{
    /**
     * Uri to: Add child product to specified Bundle option by product sku.
     * 
     * @param  string $sku
     * @param  int    $optionId
     * @return string
     */
    public function postLinksBySkuAndOptionId($sku, $optionId)
    {
        return "/V1/bundle-products/{$sku}/links/{$optionId}";
    }

    /**
     * Uri to: No description yet.
     * 
     * @param  string $sku
     * @param  int    $id
     * @return string
     */
    public function putLinksBySkuAndId($sku, $id)
    {
        return "/V1/bundle-products/{$sku}/links/{$id}";
    }

    /**
     * Uri to: Get all children for Bundle product.
     * 
     * @param  string $productSku
     * @return string
     */
    public function getChildrenByProductSku($productSku)
    {
        return "/V1/bundle-products/{$productSku}/children";
    }

    /**
     * Uri to: Remove product from Bundle product option.
     * 
     * @param  string $sku
     * @param  int    $optionId
     * @param  string $childSku
     * @return string
     */
    public function deleteOptionsChildrenBySkuAndOptionIdAndChildSku($sku, $optionId, $childSku)
    {
        return "/V1/bundle-products/{$sku}/options/{$optionId}/children/{$childSku}";
    }

    /**
     * Uri to: Get all options for bundle product.
     * 
     * @param  string $sku
     * @return string
     */
    public function getOptionsAllBySku($sku)
    {
        return "/V1/bundle-products/{$sku}/options/all";
    }

    /**
     * Uri to: Get option for bundle product.
     * 
     * @param  string $sku
     * @param  int    $optionId
     * @return string
     */
    public function getOptionsBySkuAndOptionId($sku, $optionId)
    {
        return "/V1/bundle-products/{$sku}/options/{$optionId}";
    }

    /**
     * Uri to: Remove bundle option.
     * 
     * @param  string $sku
     * @param  int    $optionId
     * @return string
     */
    public function deleteOptionsBySkuAndOptionId($sku, $optionId)
    {
        return "/V1/bundle-products/{$sku}/options/{$optionId}";
    }

    /**
     * Uri to: Get all types for options for bundle products.
     * 
     * @return string
     */
    public function getOptionsTypes()
    {
        return "/V1/bundle-products/options/types";
    }

    /**
     * Uri to: Add new option for bundle product.
     * 
     * @return string
     */
    public function postOptionsAdd()
    {
        return "/V1/bundle-products/options/add";
    }

    /**
     * Uri to: Add new option for bundle product.
     * 
     * @param  int    $optionId
     * @return string
     */
    public function putOptionsByOptionId($optionId)
    {
        return "/V1/bundle-products/options/{$optionId}";
    }
}
