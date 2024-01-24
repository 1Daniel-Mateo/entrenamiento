@extends('layouts.plantilla')

@section('title','Actualizar')

@section('content')
    <h1>Bienvenido a editar</h1>
    
    <form action="{{ route('cursos.update',$curso) }}" method="POST">

        @csrf

        {{-- directiva para que laravel entienda que es una actualizacion --}}
        @method('put')

        <label for="name">Nombre</label><br>
        <input type="text" name="name" value="{{ old( 'name', $curso->name)  }}">
        {{-- este es el mensaje de validacion que se conecta con el controlador para generar validaciones --}}
        @error('name')
           <span>{{ $message }}</span>
        @enderror
        <br>
        <label for="descripcion">Descripcion</label><br>
        <textarea name="descripcion" rows="10">{{ old('descripcion', $curso->descripcion) }}</textarea>
        @error('descripcion')
           <span>{{ $message }}</span>
        @enderror
        <br>
        
        <label for="categoria">Categoria</label><br>
        <input type="text" name="categoria" value="{{ old('categoria', $curso->categoria) }}">
        @error('categoria')
           <span>{{ $message }}</span>
        @enderror
        <br>
        <br>
        <button type="submit">Modificar</button>


    </form>
@endsection