<?php

namespace M2Stuff\Uri;

class TaxRules
{
    /**
     * Uri to: Save TaxRule.
     * 
     * @return string
     */
    public function post()
    {
        return "/V1/taxRules";
    }

    /**
     * Uri to: Update TaxRule.
     * 
     * @return string
     */
    public function put()
    {
        return "/V1/taxRules";
    }

    /**
     * Uri to: Delete TaxRule.
     * 
     * @param  int    $ruleId
     * @return string
     */
    public function deleteByRuleId($ruleId)
    {
        return "/V1/taxRules/{$ruleId}";
    }

    /**
     * Uri to: Get TaxRule.
     * 
     * @param  int    $ruleId
     * @return string
     */
    public function getByRuleId($ruleId)
    {
        return "/V1/taxRules/{$ruleId}";
    }

    /**
     * Uri to: Search TaxRules.
     * 
     * @return string
     */
    public function getSearch()
    {
        return "/V1/taxRules/search";
    }
}
