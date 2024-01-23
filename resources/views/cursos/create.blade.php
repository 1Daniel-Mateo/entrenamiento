@extends('layouts.plantilla')

@section('title','Crear')

@section('content')
    <h1>Bienvenido a crear curso</h1>
    
    <form action="{{ route('agregar') }}" method="POST">

        @csrf

        <label for="name">Nombre</label><br>
        <input type="text" name="name"><br>
        
        <label for="descripcion">Descripcion</label><br>
        <textarea name="descripcion" rows="10"></textarea><br>
        
        <label for="categoria">Categoria</label><br>
        <input type="text" name="categoria"><br>
        <br>
        <button type="submit">Agregar</button>


    </form>
@endsection
    
