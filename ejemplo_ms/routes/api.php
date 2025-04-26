<?php

use Faker\Provider\ar_EG\Person;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonaController;

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

