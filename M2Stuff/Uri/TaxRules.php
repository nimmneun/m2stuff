<?php

namespace M2Stuff\Uri;

class TaxRules
{
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
