<?php

namespace App\Http\Controllers;

use App\clientes;
use App\cuentas;
use App\tipo_documentos;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;

class ClientesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $clientes = clientes::all();
        return view('clientes.index', compact('clientes'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $tipo_documentos = tipo_documentos::pluck('tdoc_nombre','tdoc_codigo');
        return view('clientes.crear',compact('tipo_documentos'));
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
        $clientes = $request->all();
        $validator = Validator::make($clientes, [
            'cli_cedula'    => 'required|max:50',
            'tdoc_codigo'  => 'required|max:50',
            'cli_nombre'    => 'max:20',
            'cli_direccion'     => 'required',
            'cli_telefono'    => 'required',
            'cli_mail'  => 'required'
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        } else {
            
            clientes::create($clientes);
            cuentas::create($clientes,$clientes);
            return redirect('clientes');    
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\clientes  $clientes
     * @return \Illuminate\Http\Response
     */
    public function show(clientes $cliente)
    {
        //
        $cliente = clientes::find($cliente->cli_cedula);
        return view('clientes.ver', compact('cliente'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\clientes  $clientes
     * @return \Illuminate\Http\Response
     */
    public function edit(clientes $cliente)
    {
        //
        $cliente = clientes::find($cliente->cli_cedula);
        return view('clientes.editar', compact('cliente'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\clientes  $clientes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, clientes $cliente)
    {
        //
        $nuevosDatosCliente = $request->all();
        $cliente = clientes::find($cliente->cli_cedula);

        $validator = Validator::make($nuevosDatosCliente, [
            'cli_cedula'    => 'required|max:50',
            'tdoc_codigo'  => 'required|max:50',
            'cli_nombre'    => 'max:20',
            'cli_direccion'     => 'required',
            'cli_telefono'    => 'required',
            'cli_mail'  => 'required'
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        } else {
           
            $cliente->update($nuevosDatosCliente);
            return redirect('clientes');
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\clientes  $clientes
     * @return \Illuminate\Http\Response
     */
    public function destroy(clientes $clientes)
    {
        //
        clientes::find($clientes->cli_cedula)->delete();
        return redirect('clientes');

    }
}
