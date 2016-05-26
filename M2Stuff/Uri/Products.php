<?php

namespace M2Stuff\Uri;

class Products
{
    /**
     * Uri to: Get product list.
     * 
     * @return string
     */
    public function get()
    {
        return "/V1/products";
    }

    /**
     * Uri to: Get info about product by product SKU.
     * 
     * @param  string $sku
     * @return string
     */
    public function getBySku($sku)
    {
        return "/V1/products/{$sku}";
    }

    /**
     * Uri to: Retrieve list of product attribute types.
     * 
     * @return string
     */
    public function getAttributesTypes()
    {
        return "/V1/products/attributes/types";
    }

    /**
     * Uri to: Delete Attribute by id.
     * 
     * @param  string $attributeCode
     * @return string
     */
    public function deleteAttributesByAttributeCode($attributeCode)
    {
        return "/V1/products/attributes/{$attributeCode}";
    }

    /**
     * Uri to: Save attribute data.
     * 
     * @return string
     */
    public function postAttributes()
    {
        return "/V1/products/attributes";
    }

    /**
     * Uri to: Retrieve available product types.
     * 
     * @return string
     */
    public function getTypes()
    {
        return "/V1/products/types";
    }

    /**
     * Uri to: Retrieve list of Attribute Sets.
     * 
     * @return string
     */
    public function getAttributeSetsSetsList()
    {
        return "/V1/products/attribute-sets/sets/list";
    }

    /**
     * Uri to: Update attribute set data.
     * 
     * @param  int    $attributeSetId
     * @return string
     */
    public function putAttributeSetsByAttributeSetId($attributeSetId)
    {
        return "/V1/products/attribute-sets/{$attributeSetId}";
    }

    /**
     * Uri to: Create attribute set from data.
     * 
     * @return string
     */
    public function postAttributeSets()
    {
        return "/V1/products/attribute-sets";
    }

    /**
     * Uri to: Retrieve related attributes based on given attribute set ID.
     * 
     * @param  int    $attributeSetId
     * @return string
     */
    public function getAttributeSetsAttributesByAttributeSetId($attributeSetId)
    {
        return "/V1/products/attribute-sets/{$attributeSetId}/attributes";
    }

    /**
     * Uri to: Assign attribute to attribute set.
     * 
     * @return string
     */
    public function postAttributeSetsAttributes()
    {
        return "/V1/products/attribute-sets/attributes";
    }

    /**
     * Uri to: Remove attribute from attribute set.
     * 
     * @param  int    $attributeSetId
     * @param  string $attributeCode
     * @return string
     */
    public function deleteAttributeSetsAttributesByAttributeSetIdAndAttributeCode($attributeSetId, $attributeCode)
    {
        return "/V1/products/attribute-sets/{$attributeSetId}/attributes/{$attributeCode}";
    }

    /**
     * Uri to: Retrieve list of attribute groups.
     * 
     * @return string
     */
    public function getAttributeSetsGroupsList()
    {
        return "/V1/products/attribute-sets/groups/list";
    }

    /**
     * Uri to: Save attribute group.
     * 
     * @return string
     */
    public function postAttributeSetsGroups()
    {
        return "/V1/products/attribute-sets/groups";
    }

    /**
     * Uri to: Update attribute group.
     * 
     * @param  int    $attributeSetId
     * @return string
     */
    public function putAttributeSetsGroupsByAttributeSetId($attributeSetId)
    {
        return "/V1/products/attribute-sets/{$attributeSetId}/groups";
    }

    /**
     * Uri to: Remove attribute group by id.
     * 
     * @param  int    $groupId
     * @return string
     */
    public function deleteAttributeSetsGroupsByGroupId($groupId)
    {
        return "/V1/products/attribute-sets/groups/{$groupId}";
    }

    /**
     * Uri to: Add option to attribute.
     * 
     * @param  string $attributeCode
     * @return string
     */
    public function postAttributesOptionsByAttributeCode($attributeCode)
    {
        return "/V1/products/attributes/{$attributeCode}/options";
    }

    /**
     * Uri to: Delete option from attribute.
     * 
     * @param  string $attributeCode
     * @param  int    $optionId
     * @return string
     */
    public function deleteAttributesOptionsByAttributeCodeAndOptionId($attributeCode, $optionId)
    {
        return "/V1/products/attributes/{$attributeCode}/options/{$optionId}";
    }

    /**
     * Uri to: Retrieve the list of media attributes (fronted input type is media_image) assigned to the given attribute set.
     * 
     * @param  string $attributeSetName
     * @return string
     */
    public function getMediaTypesByAttributeSetName($attributeSetName)
    {
        return "/V1/products/media/types/{$attributeSetName}";
    }

    /**
     * Uri to: Remove gallery entry.
     * 
     * @param  string $sku
     * @param  int    $entryId
     * @return string
     */
    public function deleteMediaBySkuAndEntryId($sku, $entryId)
    {
        return "/V1/products/{$sku}/media/{$entryId}";
    }

    /**
     * Uri to: Retrieve the list of gallery entries associated with given product.
     * 
     * @param  string $sku
     * @return string
     */
    public function getMediaBySku($sku)
    {
        return "/V1/products/{$sku}/media";
    }

    /**
     * Uri to: Get tier price of product.
     * 
     * @param  string $sku
     * @param  int    $customerGroupId
     * @return string
     */
    public function getGroupPricesTiersBySkuAndCustomerGroupId($sku, $customerGroupId)
    {
        return "/V1/products/{$sku}/group-prices/{$customerGroupId}/tiers";
    }

    /**
     * Uri to: Create tier price for product.
     * 
     * @param  string $sku
     * @param  int    $customerGroupId
     * @param  string $qty
     * @param  string $price
     * @return string
     */
    public function postGroupPricesTiersPriceBySkuAndCustomerGroupIdAndQtyAndPrice($sku, $customerGroupId, $qty, $price)
    {
        return "/V1/products/{$sku}/group-prices/{$customerGroupId}/tiers/{$qty}/price/{$price}";
    }

    /**
     * Uri to: Remove tier price from product.
     * 
     * @param  string $sku
     * @param  int    $customerGroupId
     * @param  string $qty
     * @return string
     */
    public function deleteGroupPricesTiersBySkuAndCustomerGroupIdAndQty($sku, $customerGroupId, $qty)
    {
        return "/V1/products/{$sku}/group-prices/{$customerGroupId}/tiers/{$qty}";
    }

    /**
     * Uri to: Get custom option types.
     * 
     * @return string
     */
    public function getOptionsTypes()
    {
        return "/V1/products/options/types";
    }

    /**
     * Uri to: Get the list of custom options for a specific product.
     * 
     * @param  string $sku
     * @return string
     */
    public function getOptionsBySku($sku)
    {
        return "/V1/products/{$sku}/options";
    }

    /**
     * Uri to: No description yet.
     * 
     * @param  string $sku
     * @param  int    $optionId
     * @return string
     */
    public function deleteOptionsBySkuAndOptionId($sku, $optionId)
    {
        return "/V1/products/{$sku}/options/{$optionId}";
    }

    /**
     * Uri to: Save custom option.
     * 
     * @return string
     */
    public function postOptions()
    {
        return "/V1/products/options";
    }

    /**
     * Uri to: Update custom option.
     * 
     * @param  int    $optionId
     * @return string
     */
    public function putOptionsByOptionId($optionId)
    {
        return "/V1/products/options/{$optionId}";
    }

    /**
     * Uri to: Retrieve information about available product link types.
     * 
     * @return string
     */
    public function getLinksTypes()
    {
        return "/V1/products/links/types";
    }

    /**
     * Uri to: Provide a list of the product link type attributes.
     * 
     * @param  string $type
     * @return string
     */
    public function getLinksAttributesByType($type)
    {
        return "/V1/products/links/{$type}/attributes";
    }

    /**
     * Uri to: Provide the list of links for a specific product.
     * 
     * @param  string $sku
     * @param  string $type
     * @return string
     */
    public function getLinksBySkuAndType($sku, $type)
    {
        return "/V1/products/{$sku}/links/{$type}";
    }

    /**
     * Uri to: Update product link.
     * 
     * @param  string $sku
     * @return string
     */
    public function putLinksBySku($sku)
    {
        return "/V1/products/{$sku}/links";
    }

    /**
     * Uri to: No description yet.
     * 
     * @param  string $sku
     * @param  string $type
     * @param  string $linkedProductSku
     * @return string
     */
    public function deleteLinksBySkuAndTypeAndLinkedProductSku($sku, $type, $linkedProductSku)
    {
        return "/V1/products/{$sku}/links/{$type}/{$linkedProductSku}";
    }

    /**
     * Uri to: Assign a product to the website.
     * 
     * @param  string $sku
     * @return string
     */
    public function putWebsitesBySku($sku)
    {
        return "/V1/products/{$sku}/websites";
    }

    /**
     * Uri to: Remove the website assignment from the product by product sku.
     * 
     * @param  string $sku
     * @param  int    $websiteId
     * @return string
     */
    public function deleteWebsitesBySkuAndWebsiteId($sku, $websiteId)
    {
        return "/V1/products/{$sku}/websites/{$websiteId}";
    }

    /**
     * Uri to: Update downloadable link of the given product (link type and its resources cannot be changed).
     * 
     * @param  string $sku
     * @return string
     */
    public function postDownloadableLinksBySku($sku)
    {
        return "/V1/products/{$sku}/downloadable-links";
    }

    /**
     * Uri to: Update downloadable link of the given product (link type and its resources cannot be changed).
     * 
     * @param  string $sku
     * @param  int    $id
     * @return string
     */
    public function putDownloadableLinksBySkuAndId($sku, $id)
    {
        return "/V1/products/{$sku}/downloadable-links/{$id}";
    }

    /**
     * Uri to: Delete downloadable link.
     * 
     * @param  int    $id
     * @return string
     */
    public function deleteDownloadableLinksById($id)
    {
        return "/V1/products/downloadable-links/{$id}";
    }

    /**
     * Uri to: Update downloadable sample of the given product.
     * 
     * @param  string $sku
     * @return string
     */
    public function postDownloadableLinksSamplesBySku($sku)
    {
        return "/V1/products/{$sku}/downloadable-links/samples";
    }

    /**
     * Uri to: Update downloadable sample of the given product.
     * 
     * @param  string $sku
     * @param  int    $id
     * @return string
     */
    public function putDownloadableLinksSamplesBySkuAndId($sku, $id)
    {
        return "/V1/products/{$sku}/downloadable-links/samples/{$id}";
    }

    /**
     * Uri to: Delete downloadable sample.
     * 
     * @param  int    $id
     * @return string
     */
    public function deleteDownloadableLinksSamplesById($id)
    {
        return "/V1/products/downloadable-links/samples/{$id}";
    }

    /**
     * Uri to: No description yet.
     * 
     * @param  string $productSku
     * @param  int    $itemId
     * @return string
     */
    public function putStockItemsByProductSkuAndItemId($productSku, $itemId)
    {
        return "/V1/products/{$productSku}/stockItems/{$itemId}";
    }
}
