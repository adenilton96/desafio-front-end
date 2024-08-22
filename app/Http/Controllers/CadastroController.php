<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CadastroController extends Controller
{
    protected $apiController;

    public function __construct(ApiController $apiController)
    {
        $this->apiController = $apiController;
    }

    public function index(Request $request)
    {
        if (!$this->hasValidSession()) {
            return redirect()->route('login');
        }

        $resposta = $this->apiController->getLitagen();
        $resposta = $this->formatResponseValues($resposta);

        return view("components.cadastro", ['listaResumo' => $resposta]);
    }

    private function hasValidSession()
    {
        $token = session('token');
        return $token && $token !== '';
    }

    private function formatResponseValues($resposta)
    {
        foreach ($resposta as &$valor) {
            $valorFormatado = number_format($valor["value"], 2, ',', '.');
            $valor["value"] = ($valor["active"] == 1 ? "+R$ " : "-R$ ") . $valorFormatado;
            $valor["active"] = $valor["active"] == 1 ? 'positive' : 'negative';
        }
        return $resposta;
    }

    public function fomatavalor($valor)
    {
        $valor = str_replace(['R$', '.', ','], ['', '', '.'], $valor);
        return (float) $valor;
    }

    public function cadastrarTransacao(Request $request)
    {
        $valor = $this->fomatavalor($request->input('valor'));
        $descricao = $request->input('descricao');

        $resposta = $this->apiController->cadastrarTransacao($valor, $descricao);
        return redirect()->route('cadastro')->with('listaResumo', $resposta);
    }
}
