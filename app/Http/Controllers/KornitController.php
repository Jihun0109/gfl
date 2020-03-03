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
}
