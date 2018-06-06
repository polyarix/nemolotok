<?php

namespace App\Helpers;

use Illuminate\Support\Facades\Input;
use Intervention\Image\Facades\Image;

class IResizer
{
    public static function resize($file)
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
}