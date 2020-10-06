<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Certidoes extends Model
{
    protected $fillable = [
        'tipo_certidao', 'nome_envolvido_1', 'nome_envolvido_2', 'data_certidao', 'nome_tabeliao'
        ];
}
