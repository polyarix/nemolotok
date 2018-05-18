<?php

namespace App\Traits;

use App\Services\RuleService;

trait RuleSettings
{
    protected $ruleService;

    public function __construct(RuleService $ruleService)
    {
        $this->ruleService = $ruleService;
    }
}