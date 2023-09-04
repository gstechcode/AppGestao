<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class UserLoggedMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        session_start();
        if(isset($_SESSION["usuario"])){
            return $next($request);
        }else{
            return redirect("/cliente/login")->with(["msg" => "Você deve logar-se primeiro!"]);
        }
    }
}
