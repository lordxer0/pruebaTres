<?php

namespace App\Http\Controllers;

use App\tipo_usuarios;
use Illuminate\Http\Request;

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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\tipo_usuarios  $tipo_usuarios
     * @return \Illuminate\Http\Response
     */
    public function show(tipo_usuarios $tipo_usuarios)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\tipo_usuarios  $tipo_usuarios
     * @return \Illuminate\Http\Response
     */
    public function edit(tipo_usuarios $tipo_usuarios)
    {
        //
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
