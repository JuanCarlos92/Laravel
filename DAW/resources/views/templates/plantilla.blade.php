<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('titulo')</title>
</head>
<body>
    <nav>
        <ul>
            <li><a href={{route('home')}}>Home</a></li>
            <li><a href={{route('2DAW')}}>2DAW</a></li>
            <li><a href={{route('2DAW.profesor')}}>Profesor</a></li>
            <li><a href={{route('2DAW.modulo', ['modulo' => 'Lenguaje de Marcas'])}}>Modulo</a></li>
            <li><a href={{route('2DAW.alumno', ['modulo' => 'Programacion', 'alumno' => 'Juan', 'nota' => 9]) }}>Alumno con nota</a></li>
            <li><a href={{route('2DAW.alumno', ['modulo' => 'Lenguaje de Marcas', 'alumno' => 'Juan']) }}>Alumno sin nota</a></li>
            <li><a href={{route('2DAW.libros')}}>Libros</a></li>

        </ul>
    </nav>
    @yield('contenido')
</body>
</html>