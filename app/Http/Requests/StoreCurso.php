<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCurso extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        //Aqui es necesario que tu tengas que poner el retorno como verdadero para que ejecute bien la tarea
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            //Validacion de que los campos son requeridos
            'name' => ['required','string','min:5','max:30'],
            'descripcion'=> ['required'],
            'categoria'=> ['required','string','min:5','max:20']
        ];
    }

    public function messages():array{
        return [
            'name.required' =>'El nombre es obligatorio por favor diligenciar',
            'descripcion.required' => 'La descripcion es obligatoria por favor diligenciarla',
            'categoria.required' => 'La categoria es obligatoria por favor diligenciarla'

        ];
    }
}
