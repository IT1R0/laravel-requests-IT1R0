<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function create()
    {
        return view('cadastro');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|min:3',
            'email' => 'required|email|unique:users,email',
            'celular' => 'required|numeric',
            'senha' => 'required|min:6|confirmed',
        ]);

        // Salvar os dados do usuário no banco de dados

        return 'Cadastrado com sucesso!';
    }
}
