<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orcamento extends Model
{
    use HasFactory;

    protected $table = "orcamentos";
    //app/Models/
    protected $fillable = [
        'cliente',
        'descricao',
        'valor',
        'prazo_entrega',
        'arquivos'
    ];
}