<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Services\Front\HomePageService;

class HomeController extends Controller
{
    protected $service;
    public function __construct(HomePageService $service)
    {
//        $this->middleware('auth');
        $this->service = $service;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $catalog_menu = $this->service->getCatalogMenu();
        return view('front.home.index', [
            'catalog_menu' => $catalog_menu
        ]);
    }
}
