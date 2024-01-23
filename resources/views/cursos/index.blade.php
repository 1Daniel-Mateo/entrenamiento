@extends('layouts.plantilla')

@section('title', 'Index')

@section('content')
    <h1>Bienvenidos a cursos</h1>
    <a href="{{ route('principal') }}">Dash de laravel</a><br>
    <a href="{{ route('crear-curso') }}">Añadir curso</a><br>
      {{-- metodo que me imprime los datos --}}
        @foreach ($cursos as $curso)
            <li>{{ $curso->name}}</li>
            <a href="{{ route('curso-especifico', $curso->id) }}">entrar a curso</a>
        @endforeach

    {{-- boton para navegar entre la lista de datos por secciones --}}
    {{ $cursos->links()}}

    {{-- este enlace nos envia aun curso en especifico --}}
    {{-- <a href="{{ route('curso-especifico', $curso) }}">Curso</a><br> --}}

@endsection

