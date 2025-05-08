<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProgramacionTem; //esto es para importar el modelo ProgramacionTem

class ProgramacionTemaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rows = ProgramacionTem::all(); //esto es para obtener todos los registros de la tabla programacion_tem
        return response()->json(['data' => $rows], 200); //Guardar en el array data el resultado de la consulta $rows a la base de datos, codigo de estado 200=respuesta satisfactoria.
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all(); //traer todos los datos del request
        $newProgramacionTem = new ProgramacionTem(); //crear un nuevo objeto de la clase ProgramacionTem
        $newProgramacionTem->id = $data['id']; //asignar el valor del campo nombre al objeto
        $newProgramacionTem->name = $data['name']; //asignar el valor del campo email al objeto   
        $newProgramacionTem->code = $data['code']; //asignar el valor del campo edad al objeto
        $newProgramacionTem->save(); //guardar el objeto en la base de datos
        return response()->json(['data' => $newProgramacionTem], 201); //devolver el objeto guardado en la base de datos
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $rows = ProgramacionTem::find($id); //esto es para obtener un registro de la tabla programacion_tem
        if (empty($rows)) {
            return response()->json(['data' => 'No existe el registro'], 404); //si no existe el registro, devolver un error 404
        } else {
            return response()->json(['data' => $rows], 200); //si existe el registro, devolverlo
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->all(); //traer todos los datos del request
        $rows = ProgramacionTem::find($id); //esto es para obtener un registro de la tabla programacion_tem
        if (empty($rows)) {
            return response()->json(['data' => 'No existe el registro'], 404); //si no existe el registro, devolver un error 404
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $rows = ProgramacionTem::find($id); //esto es para obtener un registro de la tabla programacion_tem
        if (empty($rows)) {
            return response()->json(['data' => 'No existe el registro'], 404); //si no existe el registro, devolver un error 404
        } else {
            $rows->delete(); //eliminar el objeto en la base de datos
            return response()->json(['data' => 'Registro eliminado'], 200); //devolver el objeto guardado en la base de datos
        }
    }
}
