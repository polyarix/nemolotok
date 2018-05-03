<?php

namespace App\Traits;

trait UserSettings
{
    public $rules = [
        'name' => 'required|min:3|max:50|string|unique:users',
        'email' => 'required|email|unique:users',
        'password' => 'required|confirmed|min:6'
    ];
}