<?php

namespace App\Repositories\Eloquent;

use App\Contracts\SettingsRepository;
use App\Models\Setting;

class EloquentSettingsRepository implements SettingsRepository
{
    public function all()
    {
       return Setting::get();
    }

    public function update($request)
    {
        Setting::updateOrCreate(['id' => 1], $request->get('settings'));
    }

}