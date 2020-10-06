<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contratos extends Model
{
    protected $fillable = [
        'tipo_contrato', 'nome_envolvido_1', 'nome_envolvido_2', 'data_contrato', 'valor','nome_tabeliao'
        ];
}


