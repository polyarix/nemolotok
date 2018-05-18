<?php

namespace App\Service;

use App\Contracts\RoleRepository;
use App\Contracts\UserRepository;

class UserService
{
    protected $validation_rules = [
        'name' => 'required|min:3|max:50|string|unique:users',
        'email' => 'required|email|unique:users',
        'password' => 'required|confirmed|min:6'
    ];

    protected $userRepository, $roleRepository;
    public function __construct(UserRepository $userRepository, RoleRepository $roleRepository)
    {
        $this->userRepository = $userRepository;
        $this->roleRepository = $roleRepository;
    }

    public function getAllUsers()
    {
        return $this->userRepository->all();
    }

    public function createUser($data)
    {
        if($errors = $this->hasErrors($data)){
            return $errors;
        }

        return $this->userRepository->create($data);
    }

    public function updateUser($data, $id)
    {
        if($errors = $this->hasErrors($data, $id)){
            return $errors;
        }

        return $this->userRepository->update($id, $data);
    }

    public function getUserById($id)
    {
        return $this->userRepository->get($id);
    }

    public function deleteUser($id)
    {
        return $this->userRepository->delete($id);
    }

    public function getAllRoles()
    {
        return $this->roleRepository->all();
    }

    public function hasErrors($data, $id = false)
    {
        $validation = \Validator::make($data->all(), $this->rules($id));

        if($validation->fails()) {
            return $data = [
                'status' => 'error',
                'error' => $validation->errors()
            ];
        }

        return false;
    }

    public function rules($id = false)
    {
        if($id){
            $this->validation_rules['name'] = $this->validation_rules['name'].',id,'.$id;
            $this->validation_rules['email'] = $this->validation_rules['email'].',id,'.$id;
        }

        return $this->validation_rules;
    }
}