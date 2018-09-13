<?php

namespace App\Http\Controllers;

use App\Providers\PostCreatedMailSent;
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
//        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function long()
    {
        event(new PostCreatedMailSent());
        return '5sec';
    }
}
