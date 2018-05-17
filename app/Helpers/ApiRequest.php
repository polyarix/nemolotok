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

            if($request->allFiles()){
                $data_to_request['files'] = self::files($request->allFiles());
            }
        }
        $data_to_request['token'] = request()->cookie('token');

        return self::client()->request($method, $route, [RequestOptions::JSON => $data_to_request]);
    }

    public static function files($files)
    {
        $to_request_array = ['multipart' => []];
        for($i = 0; $i < count($files['file']); $i++){
            $to_request_array['multipart'][$i] = [
                'name' => 'file'.$i,
                'filename' => $files['file'][$i]->getClientOriginalName(),
                'Mime-Type' => $files['file'][$i]->getMimeType(),
                'contents' => fopen($files['file'][$i]->getPathname(), 'r'),
            ];
        }
        return \GuzzleHttp\json_decode((self::client()->request('POST', route('upload'), $to_request_array))->getBody());
    }

    protected static function client()
    {
        return new Client();
    }
}