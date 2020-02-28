<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TblHomeSlide;

class IndustrialController extends Controller
{
    public function index()
    {
        $slides = TblHomeSlide::where(['status'=>'PUBLISHED', 'type'=>'INDUSTRIAL'])->get();
        
        return view('solutions.industrials')->with('slides', $slides);
    }
}
