<?php

use App\Http\Controllers\AlumnoController;
use App\Http\Controllers\AuthenticatedSessionController;
use App\Http\Controllers\CalificacioneController;
use App\Http\Controllers\DocenteController;
use App\Http\Controllers\MateriaController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return to_route('alumnos.index');
})->middleware('auth');
Route::get('/home', function () {
    return to_route('alumnos.index');
})->middleware('auth');

Route::view('/login', 'auth.login') -> name('login') ->middleware('guest');
Route::post('/login', [AuthenticatedSessionController::class, 'store'])->name('login');
Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');

// index -> listado de recursos
// show -> detalle de algo
// create -> formulario
// store --> para almacenar los datos del formulario
// El orden de las rutas importa al final las rutas que reciben parametros
// Route::get('/alumnos', [AlumnoController::class, 'index']) -> name('alumnos.index');
// Route::get('/alumno/create', [AlumnoController::class, 'create'])->name('alumnos.create');
// Route::post('/alumno', [AlumnoController::class, 'store'])->name('alumnos.store');
// Route::get('/alumno/{alumno}', [AlumnoController::class, 'show'])->name('alumnos.show');
// Route::get('/alumno/{alumno}/edit', [AlumnoController::class, 'edit'])->name('alumnos.edit');
// Route::patch('/alumno/{alumno}', [AlumnoController::class, 'update'])->name('alumnos.update');
// Route::delete('/alumno/{alumno}', [AlumnoController::class, 'destroy'])->name('alumnos.destroy');
// put=>remplazar patch=>actualizar

// Protegiendo las rutas de usuarios no autenticados
// gracias al middleware que viene en laravel
// SIMPLIIFCANDO LAS RUTAS 
// ===Rutas ALumno===
Route::resource('alumno', AlumnoController::class, [
    // array de configuracion
    'names' => 'alumnos',
    // 'parameters =>' ['alumno' => 'alumnos']
])->middleware('auth')->middleware('auth.admin');
// ===Rutas Docentes===
Route::resource('docente', DocenteController::class, [
    // array de configuracion
    'names' => 'docentes',
    // 'parameters =>' ['docente' => 'docentes']
])->middleware('auth')->middleware('auth.admin');


Route::resource('calificaciones', CalificacioneController::class, [
    'names' => 'calificaciones'
])->middleware('auth');

Route::resource('materias', MateriaController::class, [
    'names' => 'materias'
])->middleware('auth');






