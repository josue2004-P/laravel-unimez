<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriaController; 
use App\Http\Controllers\ProductoController; 
use App\Http\Controllers\AuthController; 
use App\Http\Controllers\PedidoController;
use App\Http\Controllers\Api\MateriasController;
use App\Http\Controllers\Api\ParcialesController;
use App\Http\Controllers\Api\AlumnoController;
use App\Mail\EmergencyCallReceived;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\Api\TareaController;

//Maestro
use App\Http\Controllers\Api\MaestroController;



/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->group(function() {

    Route::get('/user', function (Request $request) {
        return $request->user();
    });

    Route::post('/logout', [AuthController::class, 'logout']);

    
    //Maestros API
    Route::controller(MaestroController::class)->group(function (){
    
    Route::get('/maestro/{id}', 'index');
    
    });


});

//Autentificacion

//Registrar Alumno
Route::post('/registroAlumno',[AuthController::class, 'registerAlumno']);

Route::post('/login',[AuthController::class, 'login']);

Route::controller(MateriasController::class)->group(function (){

    //Traer Materias
    Route::get('/materias', 'index');

    //Buscar Materias Asignadas del maestro
    Route::get('/materia/{id}', 'show');

    //Buscar Materias Por id
    Route::get('/materiaId/{id}', 'materiaId');

    //MATERIAS POR CUATRIMESTRE Y ALUMNO (USER:ALUMNO)
    Route::get('/materiasGrupo/{id}', 'materiasGrupo');


});

Route::controller(ParcialesController::class)->group(function (){
    Route::get('/parciales', 'index');
});

//Alumnos 
Route::controller(AlumnoController::class)->group(function (){
    //Alumno no entregado
    Route::get('/tareaNoSubida/{id}/{parcial}/{materia}', 'index');
    Route::get('/tareaSubida/{id}/{parcial}/{materia}', 'tareaSubida');
    Route::get('/tareaCalificada/{id}/{parcial}/{materia}', 'tareaCalificada');

    //Alumnos Totales
    Route::get('/totalAlumnos/{id}', 'totalAlumno');

    //Alumno por Grupo
    Route::get('/alumnoGrupo/{id}', 'alumnoGrupo');
    //Alumno Por Id
    Route::get('/alumnoId/{id}', 'alumnoId');

});

Route::controller(TareaController::class)->group(function (){
    Route::get('/tarea', 'index');
    Route::post('/tarea', 'store');
    Route::get('/tarea/{p}/{m}', 'show');

    //Obetener detalle tarea por id, parcial y materia
    Route::get('/tarea/{id}/{p}/{m}', 'tareaId');
});

