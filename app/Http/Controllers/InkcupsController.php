<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TblHomeSlide;

class InkcupsController extends Controller
{
    public function index()
    {
        $slides = TblHomeSlide::where(['status'=>'PUBLISHED', 'type'=>'HOME'])->get();
        
        return view('partners.inkcups-intro')->with('slides', $slides);
    }
}
