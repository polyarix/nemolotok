<?php

namespace App\Repositories\Eloquent;

use App\Contracts\UserRepository;
use App\Helpers\IResizer;
use App\Helpers\Uploader;
use App\Repositories\BaseRepository;
use App\User;
use Illuminate\Database\Eloquent\Model;

class EloquentUserRepository extends BaseRepository implements UserRepository
{
    public function __construct(User $model)
    {
        $this->setModel($model);
    }

    public function all()
    {
        return $this->model->all();
    }

    public function create($data)
    {
        $user = new $this->model();
        $user->email = $data->email;
        $user->name = $data->name;
        $user->role_id = (int)$data->role_id;
        $user->password = bcrypt($data->password);
        $user->save();

        if($data->allFiles() && $files = Uploader::upload($data->file('file'))){
           $user->images()->createMany($files);
        }

        return $user;
    }

    public function update($id, $data)
    {
        $user = $this->model->with('images')->findOrFail($id);
        $user->update($data->only(['name', 'email', 'role_id']));
        if($data->allFiles() && $files = Uploader::upload($data->file('file'))){
            $this->imagesRemoving($user);
            $user->images()->createMany($files);
        }
//        IResizer::resize($data->file('file'));

        return $user;
    }

    public function delete($id)
    {
        $user = $this->model->with('images')->findOrFail($id);
        $this->imagesRemoving($user);
        $user->delete();
        return true;
    }

    public function get($id)
    {
        return $this->model->with('role', 'images')->findOrFail($id);
    }

    protected function imagesRemoving($user)
    {
        foreach($user->images as $image){
            $image->delete();
        }
        return true;
    }
}