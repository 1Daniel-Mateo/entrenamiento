<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    //metodos de redireccion
    //metodo de mustra de pagina principal y los cursos que hay almacenados
    public function index(){
        //puedes usar el metodo $cursos = Curso::all(); para mostrasr todos los cursos
        //Tambien puedes utilizar  paginate() en el cual puedes definir el numero de datos que se deben mostrar
        $cursos = Curso::paginate(10);

        return view("cursos.index",compact('cursos'));
    }
    //metodo para redireccion de crear
    public function create(){
        return view("cursos.create");
    }
    //metodo show
    public function show($id){

        $curso = Curso::find($id);
        //compact(curso) ayuda a mandar variables a la vista y hace la misma tarea de este arreglo ["curso"=>$curso]
        return view("cursos.show",compact("curso"));
    }
}
