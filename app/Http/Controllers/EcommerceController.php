<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TblHomeSlide;

class EcommerceController extends Controller
{
    public function index()
    {
        $slides = TblHomeSlide::where(['status'=>'PUBLISHED', 'type'=>'ECOMMERCE'])->get();
        
        return view('solutions.ecommerce')->with('slides', $slides);
    }
}
