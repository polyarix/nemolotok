<?php

namespace App\Services;

use App\Contracts\ImageSettingsRepository;
use App\Traits\SettingsSettings;

class SettingsService
{
    private $image_settings_repository;
    public function __construct(ImageSettingsRepository $imageSettingsRepository)
    {
        $this->image_settings_repository = $imageSettingsRepository;
    }
}