@extends('layouts.plantilla')

@section('title','Crear')

@section('content')
    <h1>Bienvenido a crear curso</h1>
    
    <form action="{{ route('agregar') }}" method="POST">

        @csrf

        <label for="name">Nombre</label><br>
        <input type="text" name="name" value="{{ old('name') }}">
        {{-- estos son los mensajes de validacion que conectan con el controlador --}}
        @error('name')
           <span>{{ $message }}</span>
        @enderror
        <br>
        
        <label for="descripcion">Descripcion</label><br>
        <textarea name="descripcion" rows="10">{{ old('descripcion') }}</textarea>
        @error('descripcion')
            <span>{{ $message }}</span>
        @enderror
        <br>
        <br>
        
        <label for="categoria">Categoria</label><br>
        <input type="text" name="categoria" value="{{ old('categoria') }}">
        @error('categoria')
            <span>{{ $message }}</span>
        @enderror
        <br>
        <br>
        <button type="submit">Agregar</button>


    </form>
@endsection
    
