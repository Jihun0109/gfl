<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Log;
use App\TblHomeSlide;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $slides = TblHomeSlide::where('status','PUBLISHED')->get();
        Log::info($slides);
        return view('home')->with('slides', $slides);
    }
}
