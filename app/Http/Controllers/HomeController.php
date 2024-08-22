<?php
namespace App\Http\Controllers;

use CompileError;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        if (!session('token') || session('token') == '') {
            return redirect()->route('login');
        }
        return view("home.index");
    }


}

