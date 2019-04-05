<?php

namespace App\Http\Controllers;

use App\tipo_documentos;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;

class TipoDocumentosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $tipo_documentos = tipo_documentos::all();
        return view('tipo_documentos.index', compact('tipo_documentos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('tipo_documentos.crear');
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
        $tipo_documentos = $request->all();
        $validator = Validator::make($tipo_documentos, [
            'tdoc_nombre'  => 'required|max:50',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        } else {
            
            tipo_documentos::create($tipo_documentos);
            return redirect('tipo_documentos');    
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\tipo_documentos  $tipo_documentos
     * @return \Illuminate\Http\Response
     */
    public function show(tipo_documentos $tipo_documento)
    {
        //
        $tipo_documentos = tipo_documentos::find($tipo_documento->tdoc_codigo);
        return view('tipo_documentos.ver', compact('tipo_documentos'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\tipo_documentos  $tipo_documentos
     * @return \Illuminate\Http\Response
     */
    public function edit(tipo_documentos $tipo_documento)
    {
        //
        $tipo_documentos = tipo_documentos::find($tipo_documento->tdoc_codigo);
        return view('tipo_documentos.editar', compact('tipo_documentos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\tipo_documentos  $tipo_documentos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, tipo_documentos $tipo_documento)
    {
        //
        $nuevosDatosTipoDocumentos = $request->all();
        $tipo_documentos = tipo_documentos::find($tipo_documento->tdoc_codigo);

        $validator = Validator::make($nuevosDatosTipoDocumentos, [
            'tdoc_nombre'  => 'required',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        } else {
           
            $tipo_documentos->update($nuevosDatosTipoDocumentos);
            return redirect('tipo_documentos');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\tipo_documentos  $tipo_documentos
     * @return \Illuminate\Http\Response
     */
    public function destroy(tipo_documentos $tipo_documentos)
    {
        //
    }
}
