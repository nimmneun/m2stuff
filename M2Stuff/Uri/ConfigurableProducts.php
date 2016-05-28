<?php

namespace M2Stuff\Uri;

class ConfigurableProducts
{
    /**
     * Uri to: Get all children for Bundle product.
     * 
     * @param  string $sku
     * @return string
     */
    public function getChildrenBySku($sku)
    {
        return "/V1/configurable-products/{$sku}/children";
    }

    /**
     * Uri to: Remove configurable product option.
     * 
     * @param  string $sku
     * @param  string $childSku
     * @return string
     */
    public function deleteChildrenBySkuAndChildSku($sku, $childSku)
    {
        return "/V1/configurable-products/{$sku}/children/{$childSku}";
    }

    /**
     * Uri to: No description yet.
     * 
     * @param  string $sku
     * @return string
     */
    public function postChildBySku($sku)
    {
        return "/V1/configurable-products/{$sku}/child";
    }

    /**
     * Uri to: Generate variation based on same product.
     * 
     * @return string
     */
    public function putVariation()
    {
        return "/V1/configurable-products/variation";
    }

    /**
     * Uri to: Get option for configurable product.
     * 
     * @param  string $sku
     * @param  int    $id
     * @return string
     */
    public function getOptionsBySkuAndId($sku, $id)
    {
        return "/V1/configurable-products/{$sku}/options/{$id}";
    }

    /**
     * Uri to: Update option.
     * 
     * @param  string $sku
     * @param  int    $id
     * @return string
     */
    public function putOptionsBySkuAndId($sku, $id)
    {
        return "/V1/configurable-products/{$sku}/options/{$id}";
    }

    /**
     * Uri to: Remove option from configurable product.
     * 
     * @param  string $sku
     * @param  int    $id
     * @return string
     */
    public function deleteOptionsBySkuAndId($sku, $id)
    {
        return "/V1/configurable-products/{$sku}/options/{$id}";
    }

    /**
     * Uri to: Get all options for configurable product.
     * 
     * @param  string $sku
     * @return string
     */
    public function getOptionsAllBySku($sku)
    {
        return "/V1/configurable-products/{$sku}/options/all";
    }

    /**
     * Uri to: Save option.
     * 
     * @param  string $sku
     * @return string
     */
    public function postOptionsBySku($sku)
    {
        return "/V1/configurable-products/{$sku}/options";
    }
}
