<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tiposugestao extends Model
{
    use HasFactory;

    protected $table = "tiposugestaos";
    //app/Models/
    protected $fillable = [
        "nome",
    ];
}