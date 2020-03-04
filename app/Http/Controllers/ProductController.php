<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use Log;

class ProductController extends Controller
{
    public function detail(Request $request, $locale, $product_id) 
    {
        $product = Product::where('id', $product_id)->first();        
        return view('product.product-detail')
                ->with('product',$product);
    }
}
