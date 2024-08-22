<?php
namespace App\Http\Controllers;

use CompileError;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
    {
       
        return view("home.index");
    }

}