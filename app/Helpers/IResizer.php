<?php

namespace App\Helpers;

use Intervention\Image\Facades\Image;

class IResizer
{
    private static $size_settings;

    public static function resize(String $original_file_url, array $image_sizes_settings)
    {
        self::setSizeSettings($image_sizes_settings);
        return self::imageHandle($original_file_url);
    }

    private static function recursion($data)
    {
        foreach($data as $item){
            if(is_array($item)){
                self::recursion($item);
            } else {
                self::imageHandle($item);
            }
        }
    }

    private static function imageHandle($original_file_url) : array
    {
        $image = Image::make(storage_path('app/public/'.$original_file_url));
        $directory = storage_path('app/public/');

        $result = [];
        if(!is_dir($directory.'images/')){
            \File::makeDirectory($directory.'images/',0775, true);
        }

        foreach(self::$size_settings as $setting){
            $image_copy = clone $image;
            $filename = 'images/'.$setting['height'].'x'.$setting['width'].'_'.$image->basename;
            $image_copy->resize($setting['height'], $setting['width'], function($constraint){
                $constraint->aspectRatio();
            })->save($directory.$filename, 100);

            $result[] = ['url' => $filename, 'tag' => $setting['tag'], 'size_description' => $setting['height'].'x'.$setting['width']];
            unset($filename);
            unset($image_copy);
        }

        return $result;
    }

    /**
     * @param array $size_settings [ 'height' => 'value', 'width' => 'value']
     *
     */
    public static function setSizeSettings(array $size_settings)
    {
        self::$size_settings = $size_settings;
    }
}