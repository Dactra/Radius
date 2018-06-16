<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use Session;
use Auth;

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
     * @return \Illuminate\Http\Response
     */
    public function ses(Request $request ){
        $name =Auth::user()->type;
         echo $name;
    }
    public function index()
    {
        return view('home');
    }
    public function business()
    {
        return view('dashboards.business');
    }
    public function supplier()
    {
        return view('home');
    }
    public function agent()
    {
        return view('home');
    }
    public function service_provider()
    {
        return view('home');
    }
}
