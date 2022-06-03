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
            $table->string('dp_nombre', 100)->nullable();
            $table->string('dp_edad');
            $table->string('dp_whatsApp');
            $table->string('dp_email');
            $table->string('dp_facebook');
            $table->string('dp_domicilio');
            $table->string('data_carrera');
            $table->string('data_escuela');
            $table->string('data_horario');
            $table->text('data_razonIngreso');
            $table->string('ref_saberNosotros');
            $table->string('ref_nombreTutor');
            $table->string('ref_telefonoTutor');
            $table->foreignId('curso_id')->nullable()->references('id')->on('cursos')->onDelete('cascade')->onUpdate('cascade');
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
