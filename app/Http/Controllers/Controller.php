<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    protected $errors = false;

    public function response($route_name, $data = false, $id = false)
    {
        $data = json_decode($data->getBody());
        if(!empty($data->status) && $data->status == 'error'){
            return redirect()->back()->with('errors', $data->error);
        }

        return redirect()->route($route_name, $id)->with('success', 'Success');
    }
}
