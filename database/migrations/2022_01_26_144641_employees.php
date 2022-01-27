<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Employees extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Mala Practica crear entidades en plural (hechas en plural en base a la práctica)
        Schema::create('employees', function (Blueprint $table) {

            $table->engine = "InnoDB";
            $table->bigIncrements('id');
            $table->string('nombres', 100);
            $table->string('apellidos', 100);
            $table->bigInteger('deptoId')->unsigned();
            $table->boolean('sexo');
            $table->string('cedula', 14);
            $table->string('direccion', 200);
            //Es recomendable seguir patron del camel-case en los campos de la tabla(telcasa-telCasa)
            $table->string('telcasa', 12);
            //Es recomendable seguir patron del camel-case en los campos de la tabla(telmobil-telMobil)
            $table->string('telmobil', 12);
            //Es recomendable seguir patron del camel-case en los campos de la tabla(salariobase-salarioBase)
            $table->decimal('salariobase', 12, 2);
            $table->decimal('descuentos', 12, 2);
            //Es recomendable seguir patron del camel-case en los campos de la tabla(salarioneto-salarioNeto)
            $table->decimal('salarioneto', 12, 2);
            $table->timestamps();

            $table->foreign('deptoId')->references('id')->on('departments')->onDelete('cascade');
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
