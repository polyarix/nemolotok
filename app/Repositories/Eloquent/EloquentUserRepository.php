<?php

namespace App\Repositories\Eloquent;

use App\Contracts\UserRepository;
use App\Helpers\IResizer;
use App\Helpers\Uploader;
use App\User;

class EloquentUserRepository implements UserRepository
{
    public function all()
    {
        return User::all();
    }

    public function create($data)
    {
        $user = new User();
        $user->email = $data->email;
        $user->name = $data->name;
        $user->role_id = (int)$data->role_id;
        $user->password = bcrypt($data->password);
        $user->save();

//        if($data->allFiles() && $files = Uploader::upload($data->file('file'))){
//           $user->images()->createMany($files);
//        }
        IResizer::resize();

        return $user;
    }

    public function update($id, $data)
    {
        $user = User::with('images')->findOrFail($id);
        $user->update($data->only(['name', 'email', 'role_id']));
//        if($data->allFiles() && $files = Uploader::upload($data->file('file'))){
//            $this->imagesRemoving($user);
//            $user->images()->createMany($files);
//        }
        IResizer::resize($data->file('file'));

        return $user;
    }

    public function delete($id)
    {
        $user = User::with('images')->findOrFail($id);
        $this->imagesRemoving($user);
        $user->delete();
        return true;
    }

    public function get($id)
    {
        return User::with('role', 'images')->findOrFail($id);
    }

    protected function imagesRemoving($user)
    {
        foreach($user->images as $image){
            $image->delete();
        }
        return true;
    }
}