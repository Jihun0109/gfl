<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Log;
use App\TblHomeSlide;
use App\Product;

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

    public function translations()
    {        
        return view('vendor/translation-manager');
    }

    public function root()
    {
        return redirect(app()->getLocale());
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $slides = TblHomeSlide::where(['status'=>'PUBLISHED', 'type'=>'HOME'])->get();
        
        $garments = Product::whereCategory('GARMENT')->orderBy('index','DESC')->select('id','name','image')->take(3)->get();
        $fabrics = Product::whereCategory('FABRIC')->orderBy('index','DESC')->select('id','name','image')->take(3)->get();
        $embroideries = Product::whereCategory('EMBROIDERY')->orderBy('index','DESC')->select('id','name','image')->take(3)->get();
        $pads = Product::whereCategory('PAD')->orderBy('index','DESC')->select('id','name','image')->take(3)->get();
        Log::info($garments);
        return view('home')->with([
                'slides'=> $slides,
                'garments'=>$garments,
                'fabrics'=>$fabrics,
                'embroideries'=>$embroideries,
                'pads'=>$pads,
                ]);
    }
}
