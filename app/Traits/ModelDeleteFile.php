<?php

namespace App\Traits;

trait ModelDeleteFile
{
    public function delete()
    {
        $files = $this->files()->get();
        $files->each(function($item, $key){
            $img = $item->images()->get();

            $img->each(function($image, $key){
                $image->removeFile();
            });

            $item->removeFile();
        });
        return parent::delete(); // TODO: Change the autogenerated stub
    }
}