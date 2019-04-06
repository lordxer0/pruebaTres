<?php

namespace App\Http\Controllers;

use App\tipo_usuarios;
use Illuminate\Http\Request;
use Validator;

class TipoUsuariosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $tipo_usuarios = tipo_usuarios::all();
        return view('tipo_usuarios.index', compact('tipo_usuarios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('tipo_usuarios.crear');
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
        $tipo_usuarios = $request->all();
        $validator = Validator::make($tipo_usuarios, [
            'tusu_nombre'  => 'required',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        } else {
            
            tipo_usuarios::create($tipo_usuarios);
            return redirect('tipo_usuarios');    
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\tipo_usuarios  $tipo_usuarios
     * @return \Illuminate\Http\Response
     */
    public function show(tipo_usuarios $tipo_usuario)
    {
        //
        $tipo_usuario = tipo_usuarios::find($tipo_usuario->tusu_codigo);
        return view('tipo_usuarios.ver', compact('tipo_usuario'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\tipo_usuarios  $tipo_usuarios
     * @return \Illuminate\Http\Response
     */
    public function edit(tipo_usuarios $tipo_usuario)
    {
        //
        $tipo_usuario = tipo_usuarios::find($tipo_usuario->tusu_codigo);
        return view('tipo_usuarios.editar', compact('tipo_usuario'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\tipo_usuarios  $tipo_usuarios
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, tipo_usuarios $tipo_usuarios)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\tipo_usuarios  $tipo_usuarios
     * @return \Illuminate\Http\Response
     */
    public function destroy(tipo_usuarios $tipo_usuarios)
    {
        //
    }
}
