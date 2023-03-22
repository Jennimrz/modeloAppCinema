<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\cadastroFuncionarioModel;

class cadastroFuncionario extends Controller
{
    public function buscaCadastroFuncionario(){
        return View('cadastroFuncionario');
    }
    public function cadastrarFuncionarioModel(Request $request){
        $dadosFuncionario = $request->validade([
            'nome' => 'string|required',
            'email' => 'string|required',
            'whatsapp' => 'string|required',
            'cpf' => 'string|required',
            'senha'=> 'string|required'
        ]);

        cadastrarFuncionarioModel::create($dadosFuncionario);

        return Redirect::route('/home');

    }
}
