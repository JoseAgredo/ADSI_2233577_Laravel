<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notes', function (Blueprint $table) {
            $table->id();
            $table->string('Nombre', 125);
            $table->float('Parcial 1')->length(5);
            $table->float('Parcial 2')->length(5);
            $table->float('Final')->length(5);
            $table->date('Fecha');
            $table->unsignedBigInteger('id_Estudiante')->nullable();
            $table->foreign('id_Estudiante')->references('id')->on('students')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('notes');
    }
}
