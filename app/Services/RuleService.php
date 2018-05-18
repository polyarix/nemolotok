<?php

namespace App\Services;

use App\Contracts\PermissionRepository;
use App\Contracts\RuleRepository;
use App\Traits\Validator;

class RuleService
{
    use Validator;
    protected $ruleRepository, $permissionRepository;
    protected $validation_rules = [
        'name' => 'required|min:3|max:50|string|unique:rules'
    ];

    protected function rules($id = false)
    {
        if($id){
            $this->validation_rules['name'] = $this->validation_rules['name'].',id,'.$id;
        }
        return $this->validation_rules;
    }

    public function __construct(RuleRepository $ruleRepository, PermissionRepository $permissionRepository)
    {
        $this->ruleRepository = $ruleRepository;
        $this->permissionRepository = $permissionRepository;
    }

    public function getAllRules()
    {
        return $this->ruleRepository->all();
    }

    public function getAllPermissions()
    {
        return $this->permissionRepository->all();
    }

    public function createRule($data)
    {
        if($errors = $this->hasErrors($data)){
            return $errors;
        }
        return $this->ruleRepository->create($data);
    }

    public function getRuleById($id)
    {
        return $this->ruleRepository->get($id);
    }

    public function updateRule($id, $data)
    {
        if($errors = $this->hasErrors($data, $id)){
            return $errors;
        }
        return $this->ruleRepository->update($id, $data);
    }

    public function deleteRule($id)
    {
        return $this->ruleRepository->delete($id);
    }
}