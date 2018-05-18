<?php

namespace App\Traits;

use App\Service\UserService;

trait UserSettings
{
    protected $userService;
    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }
}