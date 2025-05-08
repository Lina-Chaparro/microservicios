<?php

use Faker\Provider\ar_EG\Person;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonaController;
use App\Http\Controllers\ProgramacionTemaController;

Route::controller(PersonaController::class)->group(function () {
    Route::get('personas', 'index'); //metodo para obtener todos los registros de la tabla personas
    //Define el controlador PersonaController y el metodo index
    Route::post('personas', 'store'); //metodo para guardar un nuevo registro en la tabla personas  
    //Define el controlador PersonaController y el metodo store
    Route::get('personas/{id}', 'show'); //metodo para obtener un registro de la tabla personas por id
    //Para registrar el registro es con get
    Route::put('personas/{id}', 'update'); //metodo para actualizar un registro de la tabla personas por id
    //Define el controlador PersonaController y el metodo update
    Route::delete('personas/{id}', 'destroy'); //metodo para eliminar un registro de la tabla personas por id
    //Define el controlador PersonaController y el metodo destroy
});

//concepto de programacion: REST
Route::controller(ProgramacionTemaController::class)->group(function () {
    Route::get('tema', 'index'); //metodo para obtener todos los registros de la tabla programacion_tem
    //Define el controlador ProgramacionTemaController y el metodo index
    Route::post('tema', 'store'); //metodo para guardar un nuevo registro en la tabla programacion_tem  
    //Define el controlador ProgramacionTemaController y el metodo store
    Route::get('tema/{id}', 'show'); //metodo para obtener un registro de la tabla programacion_tem por id
    //Para registrar el registro es con get
    Route::put('tema/{id}', 'update'); //metodo para actualizar un registro de la tabla programacion_tem por id
    //Define el controlador ProgramacionTemaController y el metodo update
    Route::delete('tema/{id}', 'destroy'); //metodo para eliminar un registro de la tabla programacion_tem por id
    //Define el controlador ProgramacionTemaController y el metodo destroy
});

