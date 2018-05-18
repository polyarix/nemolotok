<?php

namespace App\Services;

use App\Contracts\RoleRepository;
use App\Contracts\RuleRepository;
use App\Traits\Validator;

class RoleService
{
    use Validator;
    protected $roleRepository, $ruleRepository;
    protected $validation_rules = [
        'name' => 'required|min:3|max:50|string|unique:roles'
    ];

    protected function rules($id = false)
    {
        if($id){
            $this->validation_rules['name'] = $this->validation_rules['name'].',id,'.$id;
        }
        return $this->validation_rules;
    }

    public function __construct(RoleRepository $roleRepository,RuleRepository $ruleRepository)
    {
        $this->roleRepository = $roleRepository;
        $this->ruleRepository = $ruleRepository;
    }

    public function getAllRoles()
    {
        return $this->roleRepository->all();
    }

    public function getAllRules()
    {
        return $this->ruleRepository->all();
    }

    public function createRole($data)
    {
        if($errors = $this->hasErrors($data)){
            return $errors;
        }

        return $this->roleRepository->create($data);
    }

    public function getRoleById($id)
    {
        return $this->roleRepository->get($id);
    }

    public function updateRole($id, $data)
    {
        if($errors = $this->hasErrors($data, $id)){
            return $errors;
        }

        return $this->roleRepository->update($id, $data);
    }

    public function deleteRole($id)
    {
        return $this->roleRepository->delete($id);
    }

}