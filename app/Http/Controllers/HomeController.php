<?php

namespace App\Http\Controllers;

use App\Services\MenuService;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(MenuService $service)
    {
        $restro_ids = [1];
        $categories = $service->getMenuWithCategory($restro_ids);
        return view('home', compact('categories'));
    }
}
