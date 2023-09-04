<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function home(Request $request){
        return view("site.home");
    }

    public function catalogo(Request $request){
        return view("site.catalogo");
    }

    public function sobre(Request $request){
        return view("site.sobre");
    }
}
