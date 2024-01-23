<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CursoController;

Route::get('/', HomeController::class);

/*
Aqui se definen un grupo de rutas, 
para facilitar el llamdo del buscador y 
   que estan almacenadas en una funcion anonima
*/
Route::controller(CursoController::class)->group(function () {
    //le asignas un nombre para que te enrute a la vista que deseas
    Route::get('cursos', 'index')->name('home');
    Route::get('cursos/crear', 'create')->name('crear-curso');
    Route::get('cursos/{id}', 'show')->name('curso-especifico');
});





// Route::get('curso/{curso}/{categoria?}', function ($curso,$categoria = null) {

//     if ($categoria) {
//         return "binevenido al curso $curso, de la categoria $categoria";
//     } else {
//         return "binevenido al curso $curso";
//     }
    
    
// });
