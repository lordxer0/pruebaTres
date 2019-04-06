<?php

namespace App\Http\Controllers;

use App\cuentas;
use App\clientes;
use App\Http\Controllers\DB;
use Illuminate\Http\Request;
use Validator;

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
    public function store(Request $request)
    {
        //
        
        
            $cuentas = $request->all();
            $validator = Validator::make($cuentas, [
                
            'cli_cedula'  => 'required',
            'cue_saldo'    => 'required',
            'cue_activa'     => 'required',
            'cue_clave'    => 'required'

            ]);
            
            if ($validator->fails()) {
                return back()->withErrors($validator)->withInput();
            } else {
                
                cuentas::create($cuentas);
                return redirect('cuentas');    
            }

        }

    /**
     * Display the specified resource.
     *
     * @param  \App\cuentas  $cuentas
     * @return \Illuminate\Http\Response
     */
    public function show(cuentas $cuenta)
    {
        //
        $cuenta = cuentas::find($cuenta->cue_numero);
        return view('cuentas.ver', compact('cuenta'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\cuentas  $cuentas
     * @return \Illuminate\Http\Response
     */
    public function edit(cuentas $cuenta)
    {
        //
        $cuenta = cuentas::find($cuenta->cue_numero);
        return view('cuentas.editar', compact('cuenta'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\cuentas  $cuentas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, cuentas $cuenta)
    {
        //
        $nuevosDatosCuenta = $request->all();
        $cuenta = cuentas::find($cuenta->cue_numero);

        $validator = Validator::make($nuevosDatosCuenta, [
            'cli_cedula'  => 'required',
            'cue_saldo'    => 'required',
            'cue_activa'     => 'required'
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        } else {
           
            $cuenta->update($nuevosDatosCuenta);
            
            return redirect('cuentas');
        }

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

     
    public function autocrear(clientes $clientes){

        /*
        aqui es donde se auto crea la cuenta de ahorro de la persona en cuestion cuando se crea el usuaro
        esta funcion no se uso debido a falta de tiempo, y comprencion del laravel pero la idea es usarla
        evitando asi hacerlo directamente y que se vea veo en el codigo 

        */
        
        DB::table('cuentas')->insert(
            [
                'cli_cedula' => $clientes->cli_cedula,
                'cue_saldo' => 0,
                'cue_activa' => 'inactiva',
                'cue_clave' => substr($clientes->cli_cedula, -4,4),
            ]
        );

    }

}
