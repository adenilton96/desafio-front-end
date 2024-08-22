<?php

use App\Http\Controllers\CadastroController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[LoginController::class,'index']);

Route::get('/login', [LoginController::class,'index']);

Route::get('/home',[HomeController::class,'index']);

Route::get('/cadastro',[CadastroController::class,'index']);

Route::get('/construcao', function () {
    return view('components.msgPaginaEmCostução');
});
Route::post('login/authorizationLogin', [LoginController::class,'authorizationLogin']);
