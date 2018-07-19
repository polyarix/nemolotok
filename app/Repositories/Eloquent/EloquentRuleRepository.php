<?php

namespace App\Repositories\Eloquent;

use App\Contracts\RuleRepository;
use App\Models\Rule;
use App\Repositories\BaseRepository;
use Illuminate\Database\Eloquent\Model;

class EloquentRuleRepository extends BaseRepository implements RuleRepository
{
    private $model;

    public function setModel(Model $model)
    {
        $this->model = $model;
    }

    public function __construct(Rule $model)
    {
        $this->setModel($model);
    }

    public function all()
    {
        return $this->all();
    }

    public function create($data)
    {
        $rule = $this->model->create($data->only(['name', 'description']));
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
        $rule = $this->model->findOrFail($id);
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
        $rule = $this->model->findOrFail($id);
        $rule->delete();
        return true;
    }

    public function get($id)
    {
        return $this->model->with('permissions')->findOrFail($id);
    }
}