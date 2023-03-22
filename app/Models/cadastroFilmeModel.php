<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cadastroFilmeModel extends Model
{
    use HasFactory;
    protected $fillable =[
        'nome_filme', 'atores_fime', 'datalancamento_filme', 'sinopse
        _filme', 'capa_filme'
    ];
}
