<?php

namespace App\Traits;

trait UserSettings
{
    public $rules = [
        'name' => 'required|min:3|max:50|string|unique:users',
        'email' => 'required|email|unique:users',
        'password' => 'required|confirmed|min:6'
    ];

    public function rules($user = false)
    {
        if($user){
            $this->rules['name'] = $this->rules['name'].',id,'.$user->id;
            $this->rules['email'] = $this->rules['email'].',id,'.$user->id;
        }

        return $this->rules;
    }
}