<?php

namespace App\Repositories\Eloquent;

use App\Contracts\FilesRepository;
use App\Helpers\IResizer;
use App\Helpers\Uploader;
use App\Models\File;
use App\Repositories\BaseRepository;
use Illuminate\Database\Eloquent\Model;

class EloquentFilesRepository extends BaseRepository implements FilesRepository
{
    private $uploader, $resizer;
    protected $model;


    public function setModel(Model $model)
    {
        $this->model = $model;
    }

    public function __construct(Uploader $uploader, IResizer $resizer, File $model)
    {
        $this->uploader = $uploader;
        $this->resizer = $resizer;
        $this->setModel($model);
    }

    public function all()
    {
        return File::all();
    }

    public function create($data, $settings = false)
    {
        $files = $this->uploader->upload($data);
        return $files;
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
    public function upload(array $files = []): array
    {
        // TODO: Implement upload() method.
        return $this->uploader->upload($files);

    }

    public function resize(String $original_file_url, array $image_sizes_settings)
    {
        return $this->resizer->resize($original_file_url, $image_sizes_settings);
    }

    public function remove()
    {
        // TODO: Implement remove() method.
    }

    public function createImage($data, array $settings)
    {
        $originals = $this->upload($data);
        $result = [];
        foreach ($originals as $original) {
            $resized = $this->resize($original['url'], $settings);
            $result[] = [
                'original' => $original,
                'resized' => $resized
            ];
        }

        return $result;
    }
}