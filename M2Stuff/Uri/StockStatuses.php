<?php

namespace M2Stuff\Uri;

class StockStatuses
{
    /**
     * Uri to: No description yet.
     * 
     * @param  string $productSku
     * @return string
     */
    public function getByProductSku($productSku)
    {
        return "/V1/stockStatuses/{$productSku}";
    }
}
