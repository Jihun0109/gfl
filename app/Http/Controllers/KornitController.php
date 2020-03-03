<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TblHomeSlide;

class KornitController extends Controller
{
    public function index()
    {
        $slides = TblHomeSlide::where(['status'=>'PUBLISHED', 'type'=>'HOME'])->get();       
        
        return view('partners.kornit-intro')->with('slides', $slides);
    }

    public function dtg()
    {
        $slides = TblHomeSlide::where(['status'=>'PUBLISHED', 'type'=>'HOME'])->get();       
        
        return view('partners.kornit-dtg')->with('slides', $slides);
    }
    public function dtf()
    {
        $slides = TblHomeSlide::where(['status'=>'PUBLISHED', 'type'=>'HOME'])->get();       
        
        return view('partners.kornit-dtf')->with('slides', $slides);
    }

    public function usedmachine()
    {
        $slides = TblHomeSlide::where(['status'=>'PUBLISHED', 'type'=>'HOME'])->get();       
        
        return view('partners.kornit-usedmachine')->with('slides', $slides);
    }

    public function accessories()
    {
        $slides = TblHomeSlide::where(['status'=>'PUBLISHED', 'type'=>'HOME'])->get();       
        
        return view('partners.kornit-accessories')->with('slides', $slides);
    }
    
}
