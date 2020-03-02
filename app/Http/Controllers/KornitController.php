<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KornitController extends Controller
{
    public function index()
    {
        return view('partners.kornit-intro');
    }
}
