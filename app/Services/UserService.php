<?php

namespace App\Services;

use App\Contracts\RoleRepository;
use App\Contracts\UserRepository;
use App\Traits\Validator;

class UserService
{
    use Validator;
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
}