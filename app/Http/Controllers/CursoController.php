<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursoController extends Controller
{
    //metodos de redireccion
    //metodo de mustra de pagina principal
    public function index(){
        return view("cursos.index");
    }
    //metodo para redireccion de crear
    public function create(){
        return view("cursos.create");
    }
    //metodo show
    public function show($curso){
        //compact(curso) ayuda a mandar variables a la vista y hace la misma tarea de este arreglo ["curso"=>$curso]
        return view("cursos.show",compact("curso"));
    }
}
