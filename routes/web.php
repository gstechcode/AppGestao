<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::middleware("LoggedUserSite")->prefix("/")->group(function () {
    Route::get("/", [App\Http\Controllers\SiteController::class,"home"]);
    Route::get("/catalogo", [App\Http\Controllers\SiteController::class,"catalogo"]);
    Route::redirect("/cliente","/cliente/login");
    Route::get("/cliente/login", [App\Http\Controllers\UsuarioController::class,"login"]);
    Route::get("/cliente/registro", [App\Http\Controllers\UsuarioController::class,"registro"]);
    Route::get("/sobre", [App\Http\Controllers\SiteController::class,"sobre"]);

    Route::post("/cliente/login",[App\Http\Controllers\UsuarioController::class,"login"])->name("usuario.login");
    Route::post("/cliente/registro",[App\Http\Controllers\UsuarioController::class,"registro"])->name("usuario.registro");
});

Route::middleware("LoggedUserApp")->prefix("/app")->group(function () {
    Route::get("/", [App\Http\Controllers\AppController::class,"home"]);
    Route::get("/cliente", [App\Http\Controllers\AppController::class,"cliente"]);
    Route::get("/fornecedor", [App\Http\Controllers\AppController::class,"fornecedor"]);
    Route::get("/produto", [App\Http\Controllers\AppController::class,"produto"]);
    Route::get("/sair", [App\Http\Controllers\AppController::class,"sair"]);
});

Route::fallback(function(){
    return view("site.404");
});
