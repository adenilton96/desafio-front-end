<?php

use App\Http\Controllers\CadastroController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;

Route::GET('/', [LoginController::class, 'index']);
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::GET('/home', [HomeController::class, 'index'])->name('home');
Route::GET('/cadastro', [CadastroController::class, 'index'])->name("cadastro");
Route::GET('login/authorizationLogin', [LoginController::class, 'authorizationLogin']);
Route::GET('logout', [LoginController::class, 'logout']);
Route::GET('cadastro/transacao', [CadastroController::class, 'cadastrarTransacao']);


Route::GET('/construcao', function () {
    if (!session('token') || session('token') == '') {
        return redirect()->route('login');
    }
    return view('components.msgPaginaEmCostução');
});
