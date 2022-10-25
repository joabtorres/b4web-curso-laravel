<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index()
    {
        //aquui eu poderia criar uma lógica
        //verificar se um usuário existe
        //buscar data de um usuários, etc...

        $nome = "Joab";
        $data = [
            'apelido_nome' => $nome,
            'html' => '<b style="color:red">Negrito</b>',
            'ingredientes' => [
                'farinha',
                'ovos',
                'farinha 2',
                'ovos 2'
            ]
        ];
        return view('bemvindo', $data);
    }
    public function sair()
    {
        return view('sair');
    }
    public function users(Request $r)
    {
        $data = [
            'quantidade' => $r->qnt
        ];
        return view('usuarios', $data);
    }

    public function atividade1()
    {
        $pessoas = [
            [
                'nome' => 'Joab Torre Alencar',
                'imagem' => 'https://i.pravatar.cc/150?img=' . rand(0, 50),
                'nascimento' => '15/08/1993',
                'idade' => 25
            ],
            [
                'nome' => 'Joab Torre Alencar',
                'imagem' => 'https://i.pravatar.cc/150?img=' . rand(0, 50),
                'nascimento' => '15/08/1993',
                'idade' => '90'
            ],
            [
                'nome' => 'Joab Torre Alencar',
                'imagem' => 'https://i.pravatar.cc/150?img=' . rand(0, 50),
                'nascimento' => '15/08/1993',
                'idade' => '90'
            ]

        ];

        $dados['pessoas'] = $pessoas;
        return view('listapessoas', $dados);
    }
    public function atividade2()
    {
        $numero = 1;
        $url = 'https://i.pravatar.cc/150?img=' . $numero;

        $dados['url'] = $url;

        return view('listafotos', $dados);
    }
    public function comentarios()
    {
        return view('comentarios');
    }
}
