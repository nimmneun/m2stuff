<?php

namespace M2Stuff\Uri;

class CmsBlock
{
    /**
     * Uri to: Delete block by ID.
     * 
     * @param  int    $blockId
     * @return string
     */
    public function deleteByBlockId($blockId)
    {
        return "/V1/cmsBlock/{$blockId}";
    }

    /**
     * Uri to: Retrieve blocks matching the specified criteria.
     * 
     * @return string
     */
    public function getSearch()
    {
        return "/V1/cmsBlock/search";
    }

    /**
     * Uri to: Save block.
     * 
     * @return string
     */
    public function post()
    {
        return "/V1/cmsBlock";
    }

    /**
     * Uri to: Update block.
     * 
     * @param  int    $id
     * @return string
     */
    public function putById($id)
    {
        return "/V1/cmsBlock/{$id}";
    }
}
