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

    public function single()
    {
        $slides = TblHomeSlide::where(['status'=>'PUBLISHED', 'type'=>'HOME'])->get();       
        
        return view('partners.melco-single')->with('slides', $slides);
    }

    public function multi()
    {
        $slides = TblHomeSlide::where(['status'=>'PUBLISHED', 'type'=>'HOME'])->get();       
        
        return view('partners.melco-multi')->with('slides', $slides);
    }

    public function accessories()
    {
        $slides = TblHomeSlide::where(['status'=>'PUBLISHED', 'type'=>'HOME'])->get();       
        
        return view('partners.melco-accessories')->with('slides', $slides);
    }


}
