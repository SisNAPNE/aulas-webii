<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aluno extends Model {

    use HasFactory;

    public function disciplina() {
        return $this->belongsToMany('\App\Models\Disciplina', 'matriculas')
            ->withPivot('descricao');
    }
}
