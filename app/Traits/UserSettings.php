<?php

namespace App\Traits;

use App\Services\UserService;

trait UserSettings
{
    protected $userService;
    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }
}