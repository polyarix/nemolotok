<?php

namespace App\Services;

use App\Contracts\SettingsRepository;
use App\Models\Setting;

class SettingsService
{
    private $settings_repository;

    public function __construct(SettingsRepository $settingsRepository)
    {
        $this->settings_repository = $settingsRepository;
    }

    public function all()
    {
        return $this->settings_repository->all();
    }

    public function save($request)
    {
        return $this->settings_repository->update($request);
    }
}