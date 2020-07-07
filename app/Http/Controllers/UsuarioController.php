<?php

namespace App\Http\Controllers;

use App\Usuariorol;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return response()->json(
            array("status" => true, "objects" => User::all())
        );
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
        //
        $user_object = new User;
        $user_object->name = $request->input("name");
        $user_object->email = $request->input("email");
        $user_object->password = bcrypt('password');
        $user_object->save();
        
        return response()->json(
            array("status" => true, "object" => $user_object)
        );
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        Log::channel('stderr')->info('test >'.$id);
        $u = User::find($id);

        $usuarioroles = Usuariorol::where("user_id", $u->id)->get();

        $usuarioroles_data = array();

        foreach($usuarioroles as $rol) {
            array_push($usuarioroles_data, Rol::find($rol->rol_id));
        }

        $data = array("user" => $u, "rols" => $usuarioroles_data);

        return response()->json(
            array("status" => true, "object" => $data)
        );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function edit(Usuario $usuario)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Usuario $usuario)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function destroy(Usuario $usuario)
    {
        //
    }
}
