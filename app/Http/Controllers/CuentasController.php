<?php

namespace App\Http\Controllers;

use App\cuentas;
use App\clientes;
use Illuminate\Http\Request;

class CuentasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $cuentas = cuentas::all();
        return view('cuentas.index', compact('cuentas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $clientes = clientes::pluck('cli_cedula');
        return view('cuentas.crear',compact('clientes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,clientes $clientes)
    {
        //
        if($clientes){
            DB::table('cuentas')->insert(
                [
                    'cli_cedula' => $clientes->cli_cedula,
                    'cue_clave' => substr($clientes->cli_cedula, -4,4),
                    'cue_saldo' => 0,
                    'cue_activa' => 'inactiva'
                ]
            );
        }else
            {
                $cuentas = $request->all();
                $validator = Validator::make($cuentas, [
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
                    
                    cuentas::create($cuentas);
                    return redirect('cuentas');    
                }
            }
        }

    /**
     * Display the specified resource.
     *
     * @param  \App\cuentas  $cuentas
     * @return \Illuminate\Http\Response
     */
    public function show(cuentas $cuentas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\cuentas  $cuentas
     * @return \Illuminate\Http\Response
     */
    public function edit(cuentas $cuentas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\cuentas  $cuentas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, cuentas $cuentas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\cuentas  $cuentas
     * @return \Illuminate\Http\Response
     */
    public function destroy(cuentas $cuentas)
    {
        //
    }
}
