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

    //php artisan make:migration create_cursos_table ya agrega con la clase esquema 
    //php artisan make:migration add_avatar_to_users_table 
    public function up()
    {
        Schema::create('cursos', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->text("descripcion");
            $table->text("categoria");

            $table->timestamps();
        });
        // php artisan migrate:fresh = recorrera todas las tablas y las volvera a migrar, ya con sus cambios
        // solo se ejecutan en la fase de desarrollo ya que puedo borrar todos los registros
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //metodo que si existe una tabla con el nombre similar la eliminara
        Schema::dropIfExists('cursos');
        //php artisan migrate:rollback comando para eliminar las ultimas tablas de la base de datos
    }
};
