<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\cadastroFilmeModel;

class cadastroFilme extends Controller
{
    //
    public function buscaCadastroFilme(){
        return View('cadastroFilme');
    }

    public function cadastrarFilme(Request $request){
        $dadosFilme = $request->validade([
            'filme' => 'string|required',
            'atores' => 'string|required',
            'data0Lancamento' => 'string|required',
            'sinopse' => 'string|required',
            'capa' => 'string|required'
        ]);

        cadastrarFilmeModel::create($dadosFilme);

        return Redirect::route('/home');

    }
}
