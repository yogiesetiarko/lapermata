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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        return view('home');
        return view('dashboard.dashboard');
    }
    
    public function artikel()
    {
        return view('dashboard.artikel.adminartikel');
    }

    public function tambahartikel()
    {
        return view('dashboard.formadmin.formartikel');
    }
}
