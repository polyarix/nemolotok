<?php

namespace App\Http\Controllers\Admin;

use App\Traits\RuleSettings;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RulesViewController extends Controller
{
    use RuleSettings;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.rules.index', [
            'rules' => $this->ruleService->getAllRules()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.rules.create', [
            'permissions' => $this->ruleService->getAllPermissions()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return $this->response('admin.rules.index', $this->ruleService->createRule($request));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('admin.rules.show', [
            'rule' => $this->ruleService->getRuleById($id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('admin.rules.edit', [
            'rule' => $this->ruleService->getRuleById($id),
            'permissions' => $this->ruleService->getAllPermissions()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $this->ruleService->updateRule($id, $request);
        return $this->response('admin.rules.index', $data, $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return int
     */
    public function destroy($id)
    {
        $this->ruleService->deleteRule($id);
        return 200;
    }
}
