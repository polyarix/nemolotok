<?php
namespace App\Traits;

use App\Services\SettingsService;

trait SettingsSettings
{
    protected $settingsService;

    public function __construct(SettingsService $settingsService)
    {
        $this->settingsService = $settingsService;
    }
}