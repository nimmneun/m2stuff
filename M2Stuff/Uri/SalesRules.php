<?php

namespace M2Stuff\Uri;

class SalesRules
{
    /**
     * Uri to: Get rule by ID.
     * 
     * @param  int    $ruleId
     * @return string
     */
    public function getByRuleId($ruleId)
    {
        return "/V1/salesRules/{$ruleId}";
    }

    /**
     * Uri to: Update sales rule.
     * 
     * @param  int    $ruleId
     * @return string
     */
    public function putByRuleId($ruleId)
    {
        return "/V1/salesRules/{$ruleId}";
    }

    /**
     * Uri to: Delete rule by ID.
     * 
     * @param  int    $ruleId
     * @return string
     */
    public function deleteByRuleId($ruleId)
    {
        return "/V1/salesRules/{$ruleId}";
    }

    /**
     * Uri to: Retrieve sales rules.
     * 
     * @return string
     */
    public function getSearch()
    {
        return "/V1/salesRules/search";
    }

    /**
     * Uri to: Save sales rule.
     * 
     * @return string
     */
    public function post()
    {
        return "/V1/salesRules";
    }
}
