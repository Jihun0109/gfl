<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TblHomeSlide;

class MelcoController extends Controller
{
    public function index()
    {
        $slides = TblHomeSlide::where(['status'=>'PUBLISHED', 'type'=>'HOME'])->get();       
        
        return view('partners.melco-intro')->with('slides', $slides);
    }
}
