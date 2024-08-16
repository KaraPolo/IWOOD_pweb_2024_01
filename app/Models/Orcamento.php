<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orcamento extends Model
{
    use HasFactory;

    protected $table = "orcamentos";
    protected $fillable = [
        'nome',
        'contato',
        'endereco',
        'descricao_projeto',
        'tipo_madeira',
        'quantidade_unidades',
        'observacao',
        'imagem_projeto',
    ];
}