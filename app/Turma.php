<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Turma extends Model
{
    protected $table = 'turmas';

    protected $fillable = [
        'id', 'nome', 'codigo', 'intituicao_id'
    ];

    public function instituicao() {
        return $this->belongsTo(Instituicao::class);
    }
}
