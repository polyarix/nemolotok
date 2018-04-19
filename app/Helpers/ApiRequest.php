<?php

namespace App\Helpers;

use GuzzleHttp\Client;
use GuzzleHttp\RequestOptions;
use Illuminate\Support\Facades\App;
class ApiRequest
{

    public static function request($method, $route, $request = false)
    {
        $data_to_request = [];

        if($request) {
            foreach($request->all() as $key => $item) {
                $data_to_request[$key] = $item;
            }
        }

        $data_to_request['api_token'] = \Auth::user()->api_token;

        $client = new Client();
        $data = $client->request($method, $route, [RequestOptions::JSON => $data_to_request]);
        return $data;
    }
}