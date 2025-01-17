@extends('templates.plantilla')

@section('titulo')
    MiAppModulo
@endsection

@section('contenido')
    <h1>Hola Crack!. Bienvenido al módulo: <?php echo $modulo; ?></h1>
    <strong>trabajando desde las vistas.</strong>
@endsection
