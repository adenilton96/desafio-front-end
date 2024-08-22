<?php 
namespace App\Http\Controllers;

use CompileError;
use Illuminate\Http\Request;
use Psy\Readline\Hoa\Console;

class LoginController extends Controller{
    public function index( Request $request){
        return view("login.index");
    }

    public function authorizationLogin( Request $request){
        return view("home.index");
    }

}