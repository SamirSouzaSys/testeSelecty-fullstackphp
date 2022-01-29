<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormacaoAcademica extends Model
{
    use HasFactory;

    protected $fillable = [
        'instituicao',
        'grau',
        'inicio',
        'fim',
        'descricao_richtext',
        'usuario_id'
    ];
}
