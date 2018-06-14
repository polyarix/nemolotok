<?php

namespace App\Repositories\Eloquent;

use App\Contracts\SettingsRepository;
use App\Models\Setting;

class EloquentSettingsRepository implements SettingsRepository
{
    public function all()
    {
       return Setting::all();
    }

    public function create($data)
    {

    }

    public function update($id, $data)
    {

    }

    public function delete($id)
    {

    }

    public function get($id)
    {

    }
}