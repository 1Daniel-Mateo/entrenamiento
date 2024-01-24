<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCurso;
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

    public function store(StoreCurso $req){
        
        // $registro = new Curso();

        // $registro->name = $req->name;
        // $registro->descripcion = $req->descripcion;
        // $registro->categoria = $req->categoria;

        // $registro->save();

        //metodo create le indicamos que nos cree un nuevo curso que nos incluya todo, tambien se puede hacer un array siguiendo la conveccion anterior
        //Esta propiedad se le llama asignacion masiva
        $registro = Curso::create($req->all());
        
        return redirect()->route('cursos.show', $registro);
    }
    //metodo show
    public function show(Curso $curso){
         //compact(curso) ayuda a mandar variables a la vista y hace la misma tarea de este arreglo ["curso"=>$curso]
        return view("cursos.show",compact("curso"));
    }

    public function edit(Curso $curso){
        //compact(curso) ayuda a mandar variables a la vista y hace la misma tarea de este arreglo ["curso"=>$curso]
        return view("cursos.editar", compact("curso"));
    }

    public function update(StoreCurso $req,Curso $curso){
       
        // $curso->name = $req->name;
        // $curso->descripcion = $req->descripcion;
        // $curso->categoria = $req->categoria;

        // $curso->save();

        $curso->update($req->all());
        
        return redirect()->route("cursos.show", $curso)->with("success","actualizado");
    }

    public function destroy(Curso $curso){
        $curso->delete();
        return redirect()->route("cursos.index", $curso);
    }
}
