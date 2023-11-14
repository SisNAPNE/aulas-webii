<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cor extends Model
{
    use HasFactory;

    protected $table = 'cores';

    public function veiculo() {
        return $this->hasMany('\App\Models\Veiculo');
    }
}
