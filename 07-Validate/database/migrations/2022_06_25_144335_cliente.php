<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Cliente extends Migration {
    
    public function up() {

        Schema::create('clientes', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('telefone');
            $table->string('email')->unique();
            $table->unsignedBigInteger('endereco_id');
            $table->foreign('endereco_id')->references('id')->on('enderecos');
            $table->timestamps();
        });
    }

    public function down() {

        Schema::dropIfExists('clientes');
    }
}
