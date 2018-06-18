<?php

namespace App\Http\Controllers\Admin;

use App\Traits\SettingsSettings;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SettingsViewController extends Controller
{
    use SettingsSettings;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = $this->settingsService->all();
        return view('admin.settings.index', $data->first());
    }

    public function save(Request $request)
    {
        $data = $this->settingsService->save($request);
        return $this->response('admin.settings.index', $data);
    }
}
