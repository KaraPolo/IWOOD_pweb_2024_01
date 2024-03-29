<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servico extends Model
{
    use HasFactory;

    protected $table = "servicos";
    //app/Models/
    protected $fillable = [
        "nome",
        "contato",
        "email",
        "detalhamento",
        "valor_estimado",
    ];
}