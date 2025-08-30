<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClienteController extends Controller
{
    private $mensagem = " ola";
    public function index()
    {

        return view ('clientes.index');
        
    }

  

    public function recebeDados(Request $req)
    {
        echo $req -> input ('email');
    }

    $validador = $req->validate([
        'nome' => 'required|min:3',
        'cpf' => 'required'
    ],
    [
           'nome.required' => "o campo nome é obrigatorio",
           'nome.min' => "o nome precisa possuir no minimo 3 caracters."
    ]

    echo $req->input('nome');

    return redirect()->route("cliente")
                ->with('success','Cliente incluido com sucesso');
    );




    // echo $req -> input(key:'email')
}
