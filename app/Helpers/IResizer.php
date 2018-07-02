<?php

namespace App\Helpers;

use Illuminate\Support\Facades\Input;
use Intervention\Image\Facades\Image;

class IResizer
{
    private static $size_settings;
    public static function resize()
    {
        $files = Input::allFiles();
        self::recursion($files);
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

    private static function imageHandle($file)
    {
        $directory = storage_path('app/public/images');

        if(!is_dir($directory)){
            \File::makeDirectory($directory,0775, true);
        }

        $image = Image::make($file->getRealPath());
        $image->resize(200, 200)->save($directory.'/200x201_image.jpg');
        dd($image->dirname.DIRECTORY_SEPARATOR.$image->basename);

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