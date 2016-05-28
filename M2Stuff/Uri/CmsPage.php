<?php

namespace M2Stuff\Uri;

class CmsPage
{
    /**
     * Uri to: Retrieve page.
     * 
     * @param  int    $pageId
     * @return string
     */
    public function getByPageId($pageId)
    {
        return "/V1/cmsPage/{$pageId}";
    }

    /**
     * Uri to: Delete page by ID.
     * 
     * @param  int    $pageId
     * @return string
     */
    public function deleteByPageId($pageId)
    {
        return "/V1/cmsPage/{$pageId}";
    }

    /**
     * Uri to: Retrieve pages matching the specified criteria.
     * 
     * @return string
     */
    public function getSearch()
    {
        return "/V1/cmsPage/search";
    }

    /**
     * Uri to: Save page.
     * 
     * @return string
     */
    public function post()
    {
        return "/V1/cmsPage";
    }

    /**
     * Uri to: Update page.
     * 
     * @param  int    $id
     * @return string
     */
    public function putById($id)
    {
        return "/V1/cmsPage/{$id}";
    }
}
