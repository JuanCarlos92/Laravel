@extends('templates.plantilla')

@section('titulo')
    MiAppProfesor
@endsection

@section('contenido')
    <h1>Hola usuario <?php echo $alumno; ?>, bienvenido al módulo <?php echo $modulo; ?>.</h1>
@endsection
