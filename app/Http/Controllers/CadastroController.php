<?php
namespace App\Http\Controllers;

use CompileError;
use Illuminate\Http\Request;

class CadastroController extends Controller
{
    public function index(Request $request)
    {
       
        return view("components.cadastro");
    }

}