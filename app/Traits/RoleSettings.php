<?php

namespace App\Traits;

use App\Contracts\RoleRepository;

trait RoleSettings
{
    protected $roleRepsitory;

    public function __construct(RoleRepository $roleRepository)
    {
        $this->roleRepsitory = $roleRepository;
    }
}