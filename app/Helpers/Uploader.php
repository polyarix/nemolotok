<?php

namespace App\Helpers;
use Carbon\Carbon;

class Uploader
{
    public static function upload($request) : array
    {
        $response = [];
        foreach ($request as $file){
            $response[] =  self::fileHandle($file);
        }
        return $response;
    }

    public static function fileHandle($file)
    {
        // Creating a new time instance, we'll use it to name our file and declare the path
        $time = Carbon::now();
        // Requesting the file from the form
        $image = $file;
        // Getting the extension of the file
        $extension = $image->getClientOriginalExtension();
        // Creating the directory, for example, if the date = 18/10/2017, the directory will be 2017/10/
        $directory = 'files/'.date_format($time, 'Y') . '/' . date_format($time, 'm');
        // Creating the file name: random string followed by the day, random number and the hour
        $filename = str_random(5).date_format($time,'d').rand(1,9).date_format($time,'h').".".$extension;

        // This is our upload main function, storing the image in the storage that named 'public'
        $upload_success = $image->storeAs($directory, $filename, 'public');

        if($upload_success){
            return ['url' => $upload_success];
        } else {
            return 400;
        }
    }
}