<?php

namespace App\Repositories\Eloquent;

use App\Contracts\SettingsRepository;
use App\Models\Setting;
use App\Repositories\BaseRepository;
use Illuminate\Database\Eloquent\Model;

class EloquentSettingsRepository extends BaseRepository implements SettingsRepository
{
    public function __construct(Setting $model)
    {
        $this->setModel($model);
    }

    public function all()
    {
       return $this->model->all();
    }

    public function update($request)
    {
        $this->model->updateOrCreate(['id' => 1], $request->get('settings'));
    }

    public function productImageSizes() : array
    {
        $settings = $this->model->firstOrFail();
        return [
            ['height' => $settings->product_image_big_height, 'width' => $settings->product_image_big_width, 'tag' => 'big'],
            ['height' => $settings->product_image_list_height, 'width' => $settings->product_image_list_width, 'tag' => 'list']
        ];
    }

    public function productCategoryImageSizes(): array
    {
        $settings = $this->model->firstOrFail();
        return [
            ['height' => $settings->product_category_image_list_height, 'width' => $settings->product_category_image_list_width, 'tag' => 'list']
        ];
    }

}