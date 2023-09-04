<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;

class UsuarioController extends Controller
{
    public function login(Request $request){
        if($request->all() != []){
            $params= $request->all();
            $usuario= Usuario::where("usuario",$params["usuario"])->where("password",$params["password"])->get()->toArray();

            if($usuario != []){
                if(!(isset($_SESSION))){
                    session_start();
                }
                $_SESSION["usuario"] = $usuario;

                return redirect("/app");
            }

            return view("site.cliente", ["action" => "login", "msg" => "Usuário ou Senha incorretos!"]);

        }

        return view("site.cliente", ["action" => "login"]);
    }

    public function registro(Request $request){
        if($request->all() != []){
            $rules = [
                "usuario" => "required|min:15|max:30|unique:usuarios",
                "email" => "required|min:15|max:30|unique:usuarios",
                "password" => "required|min:8|max:30"
            ];

            $feedbacks= [
                "required" => "O campo :attribute é obrigatório.",
                "min" => "O campo :attribute deve ter no mínimo :min caracteres.",
                "max" => "O campo :attribute deve ter no máximo :max caracteres.",
                "unique" => "O :attribute já está em uso."
            ];

            $request->validate($rules,$feedbacks);

            Usuario::create($request->all());
        }

        return view("site.cliente", ["action" => "registro"]);
    }
}
