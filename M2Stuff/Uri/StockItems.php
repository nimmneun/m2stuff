<?php

namespace M2Stuff\Uri;

class StockItems
{
    /**
     * Uri to: No description yet.
     * 
     * @param  string $productSku
     * @return string
     */
    public function getByProductSku($productSku)
    {
        return "/V1/stockItems/{$productSku}";
    }

    /**
     * Uri to: Retrieves a list of SKU's with low inventory qty.
     * 
     * @return string
     */
    public function getLowStock()
    {
        return "/V1/stockItems/lowStock/";
    }
}
