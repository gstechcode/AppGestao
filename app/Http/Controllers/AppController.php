<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppController extends Controller
{
    public function home(Request $request){
        return view("app.home");
    }

    public function cliente(Request $request){
        return view("app.cliente");
    }

    public function fornecedor(Request $request){
        return view("app.fornecedor");
    }

    public function produto(Request $request){
        return view("app.produto");
    }

    public function sair(Request $request){
        session_destroy();

        return redirect("/");
    }
}
