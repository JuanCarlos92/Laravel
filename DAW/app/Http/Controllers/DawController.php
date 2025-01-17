<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DawController extends Controller
{
    public function index()
    {
        return view('2DAW.daw');
    }

    public function alumno($modulo, $alumno, $nota = null)
    {
        if (empty($nota)) {
            return view('2DAW.alumno', ['modulo' => $modulo, 'alumno' => $alumno]);
        } else {
            return "El usuario <h1>$alumno</h1> ha sacado un $nota en el módulo $modulo.";
        }
    }


    public function modulo($modulo)
    {
        return view('2DAW.modulo', ['modulo' => $modulo]);
    }

    public function profesor()
    {
        return view('2DAW.profesor');
    }
}
