<?php
namespace App\Http\Controllers;

use CompileError;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        if (!$this->hasValidSession()) {
            return redirect()->route('login');
        }

        return view("home.index");
    }

    //verifica ser ja esta logado
    private function hasValidSession()
    {
        $token = session('token');
        return $token && $token !== '';
    }

}

