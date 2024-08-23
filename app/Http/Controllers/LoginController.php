<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class LoginController extends Controller
{
    protected $apiController;

    public function __construct(ApiController $apiController)
    {
        $this->apiController = $apiController;
    }
        public function index(Request $request)
    {
        if ($this->hasValidSession()) {
            return redirect()->route('home');
        }

        return view('login.index');
    }

    //verifica ser ja esta logado
    private function hasValidSession()
    {
        $token = session('token');
        return !empty($token);
    }

    public function authorizationLogin(Request $request)
    {
        $email = $request->input('username');
        $password = $request->input('password');

        $resposta = $this->apiController->getToken($email, $password);

        if ($resposta) {
            session(['token' => $resposta['token']]);
            return redirect()->route('home')->with('animacaoInicial', true);
        } else {
            return redirect()->route('login')->with('erro', true);
        }
    }

    public function logout()
    {
        session()->forget('token');
        return redirect()->route('login');
    }
}
