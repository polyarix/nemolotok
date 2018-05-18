<?php

namespace App\Http\Controllers\Api;

use App\Models\Rule;
use App\Traits\RuleSettings;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RulesController extends Controller
{
    use RuleSettings;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return $this->ruleService->getAllRules();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|bool
     */
    public function store(Request $request)
    {
        return $this->ruleService->createRule($request);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return $this->ruleService->getRuleById($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return array|bool
     */
    public function update(Request $request, $id)
    {
        return $this->ruleService->updateRule($id, $request);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $rule = $this->ruleService->deleteRule($id);
        return 204;
    }
}
