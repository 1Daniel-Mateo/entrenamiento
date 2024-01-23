@extends('layouts.plantilla')

@section('title','Actualizar')

@section('content')
    <h1>Bienvenido a editar</h1>
    
    <form action="{{ route('cambio',$curso) }}" method="POST">

        @csrf

        {{-- directiva para que laravel entienda que es una actualizacion --}}
        @method('put')

        <label for="name">Nombre</label><br>
        <input type="text" name="name" value="{{ $curso->name }}"><br>
        
        <label for="descripcion">Descripcion</label><br>
        <textarea name="descripcion" rows="10">{{ $curso->descripcion }}</textarea><br>
        
        <label for="categoria">Categoria</label><br>
        <input type="text" name="categoria" value="{{ $curso->categoria }}"><br>
        <br>
        <button type="submit">Modificar</button>


    </form>
@endsection