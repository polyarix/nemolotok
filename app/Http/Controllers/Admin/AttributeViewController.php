<?php

namespace App\Http\Controllers\Admin;

use App\Services\AttributeService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AttributeViewController extends Controller
{
    private $service;

    public function __construct(AttributeService $service)
    {
        $this->service = $service;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.attributes.index', [
            'attributes' => $this->service->getAllAttributes()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.attributes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $this->service->createAttribute($request);
        return $this->response('admin.attributes.index', \GuzzleHttp\json_encode($data));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('admin.attributes.show', [
            'attribute' => $this->service->getAttributeById($id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('admin.attributes.edit', [
            'attribute' => $this->service->getAttributeById($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $this->service->updateAttribute($id, $request);
        return $this->response('admin.attributes.index', \GuzzleHttp\json_encode($data));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if($this->service->deleteAttribute($id)){
            return 200;
        }
        return 404;
    }
}
