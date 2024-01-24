<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CursoController;

Route::get('/', HomeController::class)->name('principal');

/*
Aqui se definen un grupo de rutas, 
para facilitar el llamdo del buscador y 
   que estan almacenadas en una funcion anonima
*/
// Route::controller(CursoController::class)->group(function () {
//     //le asignas un nombre para que te enrute a la vista que deseas
//     Route::get('cursos', 'index')->name('home');
//     Route::get('cursos/crear', 'create')->name('crear-curso');
//     //Ruta que envia los datos al regisPOSTtro, ruta tipo 
//     Route::post('registrado', 'registro')->name('agregar');

//     Route::get('cursos/{curso}', 'show')->name('curso-especifico');
//     Route::get('actualizar/{curso}/modificar', 'editar')->name('modificar');
//     Route::put('modificado/{curso}', 'actualizar')->name('cambio');
//     Route::delete('borrado/{curso}', 'eliminar')->name('eliminado');

// });


/*Usando Resource podemos simplificar el uso de las rutas
, pero para esto se siempre se sugiere usar las convecciones sugeridas por el framework y ahorraras codigo
esto simplifica las rutas
*/
Route::resource('cursos', CursoController::class)->parameters('curso')->names('cursos');



