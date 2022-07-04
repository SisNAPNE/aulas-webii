<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Endereco extends Migration {

    public function up() {
        Schema::create('enderecos', function (Blueprint $table) {
            $table->id();
            $table->string('rua');
            $table->integer('numero');
            $table->integer('cep');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('enderecos');
    }
}
