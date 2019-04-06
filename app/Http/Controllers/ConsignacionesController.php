<?php

namespace App\Http\Controllers;

use App\consignaciones;
use App\cuentas;
use App\usuarios;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Arr;
use Validator;

class ConsignacionesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $consignaciones = consignaciones::all();
        return view('consignaciones.index', compact('consignaciones'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $cuentas = cuentas::pluck('cue_numero','cue_numero');
        $usuarios = usuarios::pluck('usu_nombre','usu_cedula');
        return view('consignaciones.crear',compact('cuentas','usuarios'));
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
        $consignacion = $request->all();

        $saldo = Arr::get($consignacion,'con_valor');
        $numeroCuenta = Arr::get($consignacion,'cue_numero');
        
        $validator = Validator::make($consignacion, [
            'cue_numero'    => 'required',
            'usu_cedula'  => 'required',
            'con_valor'    => 'required',
            'con_fecha'     => 'required|date',
            'con_descripcion'    => 'required'
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        } else {

            consignaciones::create($consignacion);

            if($saldo >99999){
                
                DB::table('cuentas')
                    ->where('cue_numero',$numeroCuenta)
                    ->increment('cue_saldo',$saldo)
                    ->update(
                        [
                            'cue_activa' => 'activa'
                        ]
                    );
            }else{
                    
                    DB::table('cuentas')
                        ->where('cue_numero',$numeroCuenta)
                        ->increment('cue_saldo',$saldo);

            }
            
            return redirect('consignaciones');    
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\consignaciones  $consignaciones
     * @return \Illuminate\Http\Response
     */
    public function show(consignaciones $consignaciones)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\consignaciones  $consignaciones
     * @return \Illuminate\Http\Response
     */
    public function edit(consignaciones $consignaciones)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\consignaciones  $consignaciones
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, consignaciones $consignaciones)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\consignaciones  $consignaciones
     * @return \Illuminate\Http\Response
     */
    public function destroy(consignaciones $consignaciones)
    {
        //
    }
}
