<?php

namespace App\Http\Controllers\Api;

use App\Models\Rule;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RulesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Rule::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($rule = Rule::create($request->only(['name', 'description']))){
            if(is_string($request->get('permissions'))){
                $permissions = explode(',', $request->get('permissions'));
            } else {
                $permissions = $request->get('permissions');
            }

            $rule->permissions()->attach($permissions);
        }

        return $rule;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Rule::with('permissions')->where('id', $id)->firstOrFail();
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
        $rule = Rule::findOrFail($id);
        $rule->update($request->only(['name', 'description']));

        if(is_string($request->get('permissions'))){
            $permissions = explode(',', $request->get('permissions'));
        } else {
            $permissions = $request->get('permissions');
        }

        $rule->permissions()->sync($permissions);

        return $rule;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $rule = Rule::findOrFail($id);
        $rule->delete();
        return 204;
    }
}
