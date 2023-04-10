<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\Models\Filme;

class cadastroFilme extends Controller
{
    //construimos o CRUD aqui

    public function buscaCadastroFilme(){
        return View('cadastroFilme');
    }
    public function cadastrarFilme(Request $request){
        $dadosfilme = $request->validate([
            'filme' => 'string|required',
            'ator' => 'string|required',
            'datalanca' => 'string|required',
            'sinopse' => 'string|required',
            'capa' => 'file|required',       
        ]);
       

        $file = $dadosfilme['capa'];
        $path = $file->store('capa', 'public');
        $dadosfilme['capa'] = $path;

        Filme::create($dadosfilme);

        return Redirect::route('cadastro-filme');
    }
    
}
