<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TblHomeSlide;

class StartupController extends Controller
{
    public function index()
    {
        $slides = TblHomeSlide::where(['status'=>'PUBLISHED', 'type'=>'STARTUP'])->get();
        
        return view('solutions.startups')->with('slides', $slides);
    }
    
}
