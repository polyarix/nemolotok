<?php

namespace App\Http\Controllers\Api;

use App\Contracts\UserRepository;
use App\Traits\UserSettings;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    use UserSettings;

    protected $userRepository;
    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function index()
    {
        return $this->userRepository->all();
    }

    public function show($id)
    {
        return $this->userRepository->get($id);
    }

    public function update(Request $request, $id)
    {
        $validation = \Validator::make($request->all(), $this->rules($id));
        if($validation->fails()) {
            $errors = $validation->errors();
            $json = [
                'status' => 'error',
                'error' => $errors
            ];
            return \Response::json($json);
        } else {
            $user = $this->userRepository->update($id, $request);
            return $user;
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return int
     */
    public function destroy($id)
    {
        $this->userRepository->delete($id);
        return 204;
    }
}
