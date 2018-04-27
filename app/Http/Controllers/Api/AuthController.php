<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterFormRequest;
use App\User;
use Illuminate\Http\Request;
use Tymon\JWTAuth\Facades\JWTAuth;

class AuthController extends Controller
{
    /**
     * Display a listing of the register method
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Post(
     *     path="/api/signup",
     *     description="Register a new user",
     *     operationId="api.register",
     *     produces={"application/json"},
     *     tags={"Auth controller"},
     *     @SWG\Parameter(
     *     name="name",
     *     in="formData",
     *     description="user name",
     *     required=true,
     *     type="string"
     *   ),
     *   @SWG\Parameter(
     *     name="email",
     *     in="formData",
     *     description="user email",
     *     required=true,
     *     type="string",
     *     format="email"
     *   ),
     *   @SWG\Parameter(
     *     name="password",
     *     in="formData",
     *     description="password",
     *     required=true,
     *     type="string",
     *   ),
     *   @SWG\Parameter(
     *     name="password_confirmation",
     *     in="formData",
     *     description="password_confirmation",
     *     required=true,
     *     type="string",
     *   ),
     *   @SWG\Response(response=200, description="successful operation"),
     *   @SWG\Response(response=406, description="not acceptable"),
     *   @SWG\Response(response=500, description="internal server error")
     * )
     */
    public function register(RegisterFormRequest $request)
    {
        $user = new User();
        $user->email = $request->email;
        $user->name = $request->name;
        $user->password = bcrypt($request->password);
        $user->save();
        return response([
            'status' => 'success',
            'data' => $user
        ], 200);
    }


    /**
     * Display a listing of the loginApi method
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Post(
     *     path="/api/login",
     *     description="Login",
     *     operationId="api.loginApi",
     *     produces={"application/json"},
     *     tags={"Auth controller"},
     *   @SWG\Parameter(
     *     name="email",
     *     in="formData",
     *     description="user email",
     *     required=true,
     *     type="string",
     *     format="email"
     *   ),
     *   @SWG\Parameter(
     *     name="password",
     *     in="formData",
     *     description="password",
     *     required=true,
     *     type="string"
     *   ),
     *   @SWG\Response(response=200, description="successful operation"),
     *   @SWG\Response(response=406, description="not acceptable"),
     *   @SWG\Response(response=500, description="internal server error")
     * )
     */
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');
        if(!$token = JWTAuth::attempt($credentials)) {
            return response([
                'status' => 'error',
                'error' => 'invalid.credentials',
                'msg' => 'Invalid Credentials.'
            ], 400);
        }

        return response([
            'status' => 'success',
            'token' => $token
        ]);
    }

    /**
     * Display a listing of the loginApi method
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/auth/user",
     *     description="Login",
     *     operationId="api.auth.user",
     *     produces={"application/json"},
     *     tags={"Auth controller"},
     *     @SWG\Parameter(
     *      name="token",
     *      in="query",
     *      description="token",
     *      required=true,
     *      type="string"
     *     ),
     *   @SWG\Response(response=200, description="successful operation"),
     *   @SWG\Response(response=406, description="not acceptable"),
     *   @SWG\Response(response=500, description="internal server error")
     * )
     */
    public function user(Request $request)
    {
        $user = User::find(\Auth::user()->id);
        return response([
            'status' => 'success',
            'data' => $user
        ]);
    }

    /**
     * Display a listing of the loginApi method
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Post(
     *     path="/api/auth/logout",
     *     description="Logout",
     *     operationId="api.loginApi",
     *     produces={"application/json"},
     *     tags={"Auth controller"},
     *     @SWG\Parameter(
     *     name="token",
     *     in="query",
     *     description="token",
     *     required=true,
     *     type="string"
     *   ),
     *   @SWG\Response(response=200, description="successful operation"),
     *   @SWG\Response(response=406, description="not acceptable"),
     *   @SWG\Response(response=500, description="internal server error")
     * )
     */
    public function logout()
    {
        JWTAuth::invalidate();
        return response([
            'status' => 'success',
            'msg' => 'Logged out Successfully'
        ], 200);
    }

    /**
     * Display a listing of the loginApi method
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/token/refresh",
     *     description="Refresh jwt token",
     *     operationId="api.loginApi",
     *     produces={"application/json"},
     *     tags={"Auth controller"},
     *     @SWG\Parameter(
     *     name="token",
     *     in="query",
     *     description="token",
     *     required=true,
     *     type="string"
     *   ),
     *   @SWG\Response(response=200, description="successful operation"),
     *   @SWG\Response(response=406, description="not acceptable"),
     *   @SWG\Response(response=500, description="internal server error")
     * )
     */
    public function refresh()
    {
        return response([
            'status' => 'success'
        ]);
    }
}
