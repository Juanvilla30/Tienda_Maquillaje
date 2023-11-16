<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('about');
    }

    public function home()
    {
        return view('welcome');
    }
    
    public function products()
    {
        return view('products');
    }


    public function store()
    {
        return view('store');
    }

   
}
