<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $table = "blogs";

    protected $fillable = [
        "titulo",
        "conteudo",
        "data_publicacao",
    ];

    protected $casts = [
        'data_publicacao' => 'datetime',
    ];
}