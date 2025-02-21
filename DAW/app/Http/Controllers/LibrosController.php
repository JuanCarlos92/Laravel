<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Libro;

class LibrosController extends Controller
{
    public function index(){
        $libros = Libro::paginate();
        return view('2DAW.libros', ['lista_de_libros' => $libros]);
    }
    public function libro(Libro $libro)
    {
        return view('2DAW.libro', ['libro' => $libro]);
    }
    public function editar(Libro $libro){
        return view('2DAW.editar', ['libro' => $libro]);
    }
    public function actualizar(Libro $libro, Request $datosRecibidos){
        $libro->título = $datosRecibidos->titulo;
        $libro->isbn = $datosRecibidos->isbn;
        $libro->autor = $datosRecibidos->autor;
        $libro->editorial = $datosRecibidos->editorial;
        $libro->num_páginas = $datosRecibidos->npaginas;
        $libro->pvp = $datosRecibidos->pvp;
        $libro->categoría = $datosRecibidos->categoria;
    
        $libro->save();
    
        return redirect()->route('libro', $libro);
    }
    public function eliminar(Libro $libro){
        $libro->delete();
        return redirect()->route('libros');
    }  

}
