<?php

namespace App\Helpers;

use GuzzleHttp\Client;
use GuzzleHttp\RequestOptions;

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

        $data_to_request['token'] = request()->cookie('token');

        $client = new Client();
        $data = $client->request($method, $route, [RequestOptions::JSON => $data_to_request]);

        return $data;
    }

}