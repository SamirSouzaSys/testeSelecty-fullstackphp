<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExperienciaProfissional extends Model
{
    use HasFactory;

    protected $fillable = [
        'instituicao',
        'cargo',
        'inicio',
        'fim',
        'descricao_richtext',
        'usuario_id'
    ];
}
