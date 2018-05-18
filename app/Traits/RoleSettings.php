<?php

namespace App\Traits;

use App\Services\RoleService;

trait RoleSettings
{
    protected $roleService;

    public function __construct(RoleService $roleService)
    {
        $this->roleService = $roleService;
    }
}