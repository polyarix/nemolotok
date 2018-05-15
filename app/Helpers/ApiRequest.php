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

        return self::message($method, $route, $data_to_request);
    }

    public static function files($files)
    {
        $to_request_array = ['multipart' => []];
        $i = 0;
        foreach($files['file'] as $file) {

            $to_request_array['multipart'][$i] = [
                'name' => 'file'.$i,
                'filename' => $file->getClientOriginalName(),
                'Mime-Type' => $file->getMimeType(),
                'contents' => fopen($file->getPathname(), 'r'),
            ];
            $i++;
        }

        $client = new Client();
        $response = $client->request('POST', route('upload'), $to_request_array);
        return \GuzzleHttp\json_decode($response->getBody());
    }

    protected static function message($method, $route, $data)
    {
        $client = new Client();
        $data = $client->request($method, $route, [RequestOptions::JSON => $data]);
        return $data;
    }
}