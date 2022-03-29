<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHorarioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('horario', function (Blueprint $table) {
            $table->id();
            $table->date('data');
            $table->time('inicio');
            $table->time('fim')->nullable();
            $table->string('description',45);
            $table->double('total_horas',7,2);
            $table->foreignId('user_id')->constrained()->onDelete('cascade');           
            $table->foreignId('instituicao_id')->constrained()->onDelete('cascade');
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
        Schema::dropIfExists('horario');
    }
}
