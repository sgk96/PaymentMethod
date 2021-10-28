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
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('datatable');
    }
     public function index1()
    {
        return view('jsdemo');
    }
     public function register()
    {
        return view('registration1');
    }
    public function login()
    {
        return view('login');
    }
    
}
