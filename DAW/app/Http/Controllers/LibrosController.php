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

}
