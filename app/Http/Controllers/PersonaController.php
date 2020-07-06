<?php

namespace App\Http\Controllers;

use App\Persona;
use Illuminate\Http\Request;

class PersonaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Persona::all();
        
        return response()->json(array("status" => true, "objects" => $data));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $codigo = $request->input("codigo");
        $nombre = $request->input("nombre");
        $apellido = $request->input("apellido");
        $dni = $request->input("dni");
        $telefono = $request->input("telefono");
        $foto = $request->input("foto");
   
        $persona_object = new Persona;
        $persona_object->codigo = $codigo;
        $persona_object->nombre = $nombre;
        $persona_object->apellido = $apellido;
        $persona_object->dni = $dni;
        $persona_object->telefono = $telefono;
        $persona_object->foto = $foto;
        $persona_object->save();
 
        return response()->json([
            "status" => true,
            "object" => $persona_object
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Persona  $persona
     * @return \Illuminate\Http\Response
     */
    public function show(Persona $persona)
    {
        $data = Persona::find($persona);
        
        return response()->json([
            "status" => true, 
            "object" => $data[0]
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Persona  $persona
     * @return \Illuminate\Http\Response
     */
    public function edit(Persona $persona)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Persona  $persona
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Persona $persona)
    {
        //
        $persona->codigo = $request->input("codigo");
        $persona->nombre = $request->input("nombre");
        $persona->apellido = $request->input("apellido");
        $persona->dni = $request->input("dni");
        $persona->telefono = $request->input("telefono");
        $persona->foto = $request->input("foto");
        $persona->update();
        return response()->json(array("status" => true,
            "objects" => $persona));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Persona  $persona
     * @return \Illuminate\Http\Response
     */
    public function destroy(Persona $persona)
    {
        //
        $persona->delete();
    }
}
