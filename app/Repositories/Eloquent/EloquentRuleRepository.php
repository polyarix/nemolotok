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

    }

    public function update($id, $data)
    {

    }

    public function delete($id)
    {

    }

    public function get($id)
    {

    }
}