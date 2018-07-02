<?php

namespace App\Repositories\Eloquent;

use App\Contracts\FilesRepository;
use App\Helpers\IResizer;
use App\Helpers\Uploader;
use App\Models\File;

class EloquentFilesRepository implements FilesRepository
{
    private $uploader, $resizer;

    public function __construct(Uploader $uploader, IResizer $resizer)
    {
        $this->uploader = $uploader;
        $this->resizer = $resizer;
    }

    public function all()
    {
        return File::all();
    }

    public function create($data, $settings = false)
    {
        $files = $this->uploader->upload($data);
        dd($files);
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

    /**
     * @param array $files
     * @return array
     */
    public function upload(array $files = []) : array
    {
        // TODO: Implement upload() method.
        return $this->uploader->upload($files);

    }

    /**
     * @param String $original_file_url
     * @param array $image_sizes_settings ['height' => value, 'width' => value]
     */
    public function resize(String $original_file_url, array $image_sizes_settings)
    {
        foreach($image_sizes_settings as $value){
        }
    }

    public function remove()
    {
        // TODO: Implement remove() method.
    }

    public function createImage($data, array $settings)
    {
        $originals = $this->upload($data);
        foreach($originals as $original){
            $resized = $this->resize($original['url'], $settings);
        }
    }
}