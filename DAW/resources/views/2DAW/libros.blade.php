@extends('templates.plantilla')

@section('titulo')
    MiApp
@endsection

@section('contenido')
<ul>
    @foreach($lista_de_libros as $libro)
    <li><a href="{{route('libro', $libro)}}">{{$libro->título}}</a></li>
    @endforeach
    {{$lista_de_libros->links()}}
</ul>
@endsection