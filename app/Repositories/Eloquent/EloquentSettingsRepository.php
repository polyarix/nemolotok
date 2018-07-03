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

    public function update($request)
    {
        Setting::updateOrCreate(['id' => 1], $request->get('settings'));
    }

    public function productImageSizes() : array
    {
        $settings = Setting::firstOrFail();
        return [
            ['height' => $settings->product_image_big_height, 'width' => $settings->product_image_big_width, 'tag' => 'big'],
            ['height' => $settings->product_image_list_height, 'width' => $settings->product_image_list_width, 'tag' => 'list']
        ];
    }

}