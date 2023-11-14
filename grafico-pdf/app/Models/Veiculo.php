<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Veiculo extends Model {

    use HasFactory;

    public function modelo() {
        return $this->belongsTo('\App\Models\Modelo');
    }

    public function cor() {
        return $this->belongsTo('\App\Models\Cor');
    }
}
