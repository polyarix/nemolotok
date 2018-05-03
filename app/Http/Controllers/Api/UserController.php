<?php

namespace App\Http\Controllers\Api;

use App\Traits\UserSettings;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    use UserSettings;

    public function index()
    {
        return User::all();
    }

    public function show($id)
    {
        return User::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $validation = \Validator::make($request->all(), $this->rules);

        if($validation->fails()) {
            $errors = $validation->errors();
            $json = [
                'status' => 'error',
                'error' => $errors
            ];
            return \Response::json($json);
        } else {
            $user = User::findOrFail($id);
            $user->update($request->only(['name', 'email']));
            return $user;
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::where('id', $id)->delete();
        return 204;
    }
}
