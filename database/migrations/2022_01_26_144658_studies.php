<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Studies extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Mala Practica crear entidades en plural (hechas en plural en base a la práctica)
        
        Schema::create('studies', function (Blueprint $table) {

            $table->engine = "InnoDB";
            $table->bigIncrements('id');
            $table->bigInteger('employeeId')->unsigned();
            //Es recomendable seguir patron del camel-case en los campos de la tabla(studiename-studyName)
            $table->string('studiename', 100);
            $table->timestamps();

            $table->foreign('employeeId')->references('id')->on('employees')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
