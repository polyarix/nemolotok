<?php

namespace App\Traits;

use App\Contracts\RoleRepository;
use App\Contracts\UserRepository;

trait UserSettings
{
    protected $userRepository, $roleRepository;
    public function __construct(UserRepository $userRepository, RoleRepository $roleRepository)
    {
        $this->userRepository = $userRepository;
        $this->roleRepository = $roleRepository;
    }

    public $rules = [
        'name' => 'required|min:3|max:50|string|unique:users',
        'email' => 'required|email|unique:users',
        'password' => 'required|confirmed|min:6'
    ];

    public function rules($id = false)
    {
        if($id){
            $this->rules['name'] = $this->rules['name'].',id,'.$id;
            $this->rules['email'] = $this->rules['email'].',id,'.$id;
        }

        return $this->rules;
    }
}