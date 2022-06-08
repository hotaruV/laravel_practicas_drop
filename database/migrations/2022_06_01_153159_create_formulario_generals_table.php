<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('formulario_generals', function (Blueprint $table) {
            $table->id();
            $table->foreignId('universidad_id')->references('id')->on('universidades')->onDelete('cascade')->onUpdate('cascade');
            $table->string('dp_nombre', 100);
            $table->string('dp_edad');
            $table->string('dp_whatsApp')->nullable();
            $table->string('dp_email');
            $table->string('dp_facebook')->nullable();
            $table->string('dp_domicilio')->nullable();
            $table->string('data_carrera')->nullable();
            $table->string('data_escuela')->nullable();
            $table->string('data_horario')->nullable();
            $table->text('data_razonIngreso')->nullable();
            $table->string('ref_saberNosotros')->nullable();
            $table->string('ref_nombreTutor')->nullable();
            $table->string('ref_telefonoTutor')->nullable();
            $table->foreignId('curso_id')->references('id')->on('cursos')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('formulario_generals');
    }
};
