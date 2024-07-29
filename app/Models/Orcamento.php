<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Orcamento extends Model
{
    protected $table = "orcamentos";

    protected $fillable = [
        'nome',
        'contato',
        'endereco',
        'descricao_projeto',
        'tipo_madeira',
        'dimensoes_projeto',
        'quantidade_unidades',
        'observacao'
    ];
}