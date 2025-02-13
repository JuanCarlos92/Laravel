<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DawController;
use App\Http\Controllers\LibrosController;

Route::get('/', HomeController::class)->name('home');
Route::get('2DAW', [DawController::class, 'index'])->name('2DAW');
Route::get('2DAW/profesor', [DawController::class, 'profesor'])->name('2DAW.profesor');
Route::get('2DAW/libros', [LibrosController::class,'index']) -> name('2DAW.libros');
Route::get('2DAW/libros/{libro}', [LibrosController::class, 'libro'])->name('libro');
Route::get('2DAW/{modulo}', [DawController::class, 'modulo'])->name('2DAW.modulo');
Route::get('2DAW/{modulo}/{alumno}/{nota?}', [DawController::class, 'alumno'])->name('2DAW.alumno');


// Route::get('/', function () {
//     return "<h1>Hola Crack,</h1><br> bienvenido a Laravel!!";
// });
// Route::get('2DAW', function(){
//     return "Estás en Desarrollo Web de Aplicaciones, concretamente en el segundo curso";
// });
// Route::get('2DAW/{modulo}', function($modulo){
//     return "Hola Crack!. Bienvenido al módulo: ".$modulo;
// });

// Route::get('2DAW/DWESProfesor', function () {
//     return "<h1>El profesor de 2ºDAW</h1> en IES Trafalgar en el curso 23/24 es Teo";
// });

// Route::get('2DAW/{modulo}', function ($modulo) {
//     return "Hola Crack!. Bienvenido al módulo: ".$modulo;
// });
// Route::get('2DAW/{modulo}/{alumno}/{nota}', function ($modulo, $alumno, $nota) {
//     return "El alumno: $alumno, ha sacado un $nota en el módulo $modulo";
// });
// Route::get('2DAW/{modulo}/{alumno}/{nota?}', function ($modulo, $alumno, $nota=null) {
//     if(empty($nota)) return "Hola usuario <h1>$alumno.</h1>";
//     else return "El usuario <h1>$alumno</h1> ha sacado un $nota en el módulo $modulo.";
// });
