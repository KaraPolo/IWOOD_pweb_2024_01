<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sugestao extends Model
{
    use HasFactory;

    protected $table = "sugestaos";
    //app/Models/
    protected $fillable = [
        "nome",
        "avaliacao",
        "sugestao",
        "tiposugestao_id",
    ];

    protected $casts = [
        'tiposugestao_id'=>'integer'
    ];

    public function tiposugestao(){

        return $this->belongsTo(Tiposugestao::class, 'tiposugestao_id');
    }
}