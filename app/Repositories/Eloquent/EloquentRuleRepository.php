<?php

namespace App\Repositories\Eloquent;

use App\Contracts\RuleRepository;
use App\Models\Rule;

class EloquentRuleRepository implements RuleRepository
{
    public function all()
    {
        return Rule::all();
    }

    public function create($data)
    {
        $rule = Rule::create($data->only(['name', 'description']));
        if (is_string($data->get('permissions'))) {
            $permissions = explode(',', $data->get('permissions'));
        } else {
            $permissions = $data->get('permissions');
        }

        $rule->permissions()->attach($permissions);

        return $rule;
    }

    public function update($id, $data)
    {
        $rule = Rule::findOrFail($id);
        $rule->update($data->only(['name', 'description']));
        if(is_string($data->get('permissions'))){
            $permissions = explode(',', $data->get('permissions'));
        } else {
            $permissions = $data->get('permissions');
        }

        $rule->permissions()->sync($permissions);

        return $rule;
    }

    public function delete($id)
    {
        $rule = Rule::findOrFail($id);
        $rule->delete();
        return true;
    }

    public function get($id)
    {
        return Rule::with('permissions')->findOrFail($id);
    }
}