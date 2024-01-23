@extends('layouts.plantilla')

@section('title', $curso->name)
    
@section('content')
    <h1>Bienvenido al curso de {{ $curso->name }}</h1>
    <a href="{{ route('home') }}">Regresar a home</a>
    <a href="{{ route('modificar', $curso->id) }}">editar</a>
    <p>Descripcion: {{ $curso->descripcion }}</p>
    <p>Categoria: {{ $curso->categoria }}</p>
    <p>Creado: {{ $curso->created_at }}</p>
    
@endsection
        
    