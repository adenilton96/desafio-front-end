<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ApiController extends Controller
{
    private $url;
    private $tokenLogin;
    private $tokenSession;

    public function __construct()
    {
        $this->url = "https://southti.com.br/desafio-front-end";
        $this->tokenLogin = "8A9B362F-E744-4BEE-8031-39A23FA67E63";
        $this->tokenSession = session('token');
    }

    // metodo para chamar api
    private function sendRequest($method, $endpoint, $data = [], $headers = [])
    {
        $response = Http::withHeaders($headers)
            ->withoutVerifying() // Ignora a verificação do certificado SSL
            ->$method($this->url . $endpoint, $data);

        if ($response->successful()) {
            return $response->json();
        } else {
            return false;
        }
    }

    public function getToken($email, $password)
    {
        $endpoint = '/user/auth';
        $headers = [
            "Authorization" => $this->tokenLogin,
            "Content-Type" => "application/json",
        ];
        $data = [
            "email" => $email,
            "password" => $password
        ];

        return $this->sendRequest('post', $endpoint, $data, $headers);
    }

    public function getLitagen()
    {
        $endpoint = '/transaction/list';
        $headers = [
            "Authorization" => $this->tokenSession,

        ];

        return $this->sendRequest('get', $endpoint, [], $headers);
    }

    public function cadastrarTransacao($valor, $descricao)
    {
        $endpoint = '/transaction/create';
        $headers = [
            "Authorization" => $this->tokenSession,
            "Content-Type" => "application/json",
        ];
        $data = [
            "value" => $valor,
            "description" => $descricao
        ];

        return $this->sendRequest('post', $endpoint, $data, $headers);
    }
}
