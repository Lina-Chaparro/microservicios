<?php

namespace App\Http\Controllers;
use App\Models\Persona;
use Illuminate\Http\Request;

class PersonaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $rows =Persona::all(); //esto es para obtener todos los registros de la tabla personas
       return response()->json(['data'=>$rows], 200); //Guardar en el array data el resultado de la consulta $rows a la base de datos, codigo de estado 200=respuesta satisfactoria.
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();//traer todos los datos del request
        $newPersona = new Persona(); //crear un nuevo objeto de la clase Persona
        $newPersona->nombre = $data['name']; //asignar el valor del campo nombre al objeto
        $newPersona->email = $data['email']; //asignar el valor del campo email al objeto   
        $newPersona->edad = $data['age']; //asignar el valor del campo edad al objeto
        $newPersona->save(); //guardar el objeto en la base de datos
        return response()->json(['data'=>'Datos guardados'], 201); //devolver el objeto guardado en la base de datos
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $rows = Persona::find($id); //esto es para obtener un registro de la tabla personas
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
        $rows = Persona::find($id); //esto es para obtener un registro de la tabla personas
        if (empty($rows)) {
            return response()->json(['data' => 'No existe el registro'], 404); //si no existe el registro, devolver un error 404
        } 
        $data = $request->all(); //traer todos los datos del request
        $rows->nombre = $data['name']; //asignar el valor del campo nombre al objeto
        $rows->email = $data['email']; //asignar el valor del campo email al objeto   
        $rows->edad = $data['age']; //asignar el valor del campo edad al objeto
        $rows->save(); //guardar el objeto en la base de datos
        return response()->json(['data' => 'Datos actualizados'], 200); //devolver el objeto guardado en la base de datos
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $rows = Persona::find($id); //esto es para obtener un registro de la tabla personas
        if (empty($rows)) {
            return response()->json(['data' => 'No existe el registro'], 404); //si no existe el registro, devolver un error 404
        } 
        $rows->delete(); //eliminar el objeto de la base de datos
        return response()->json(['data' => 'Registro eliminado'], 200); //devolver el objeto guardado en la base de datos
    }
}
