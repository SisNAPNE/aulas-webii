<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Modelo extends Model
{
    use HasFactory;

    public function marca() {
        return $this->belongsTo('\App\Models\Marca');
    }

    public function veiculo() {
        return $this->hasMany('\App\Models\Veiculo');
    }
}
