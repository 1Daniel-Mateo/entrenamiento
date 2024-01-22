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
        Schema::create('users', function (Blueprint $table) {
            $table->id();//integer columna de id
            $table->string('name');//columna de nombre tipo varchar y usando la , le podemos asignar cuantos datos debe de almacenar
            // $table->text('description'); text es para especificar el uso de textos largos
            $table->string('email')->unique();//propiedad unique para evitar el registro de correos que sean similares
            $table->timestamp('email_verified_at')->nullable();//metodo timestamp para registrar la fecha en  que se hizo el movimiento y nullable se usa cuando creas datos vacios
            $table->string('password');//almacenamiento de contraseñas
            $table->rememberToken();//para el almecenamiento de tokens
            $table->timestamps();//genera dos columnas una de create_at para registrar fecha de creacion y update_at para registro de actualizaciones, mas ser un control de versiones capaz de revertir cambios
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
