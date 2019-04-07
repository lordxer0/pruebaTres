<?php

namespace App\Http\Controllers;

use App\retiros;
use App\cuentas;
use App\usuarios;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Arr;


class RetirosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $retiros = retiros::all();
        return view('retiros.index', compact('retiros'));
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
        $retiro = $request->all();

        $saldo = Arr::get($retiro,'ret_valor');

        $numeroCuenta = Arr::get($retiro,'cue_numero');
        
        $validator = Validator::make($retiro, [
            'cue_numero'    => 'required',
            'usu_cedula'  => 'required',
            'ret_valor'    => 'required',
            'ret_fecha'     => 'required|date',
            'ret_descripcion'    => 'required'
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        } else {

            retiros::create($retiro);

            DB::table('cuentas')
            ->where('cue_numero',$numeroCuenta)
            ->decrement('cue_saldo',$saldo);
            
            return redirect('retiros');    
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\retiros  $retiros
     * @return \Illuminate\Http\Response
     */
    public function show(retiros $retiros)
    {
        //
        $retiro = retiros::find($retiros->con_codigo);
        return view('retiros.ver', compact('retiro'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\retiros  $retiros
     * @return \Illuminate\Http\Response
     */
    public function edit(retiros $retiros)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\retiros  $retiros
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, retiros $retiros)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\retiros  $retiros
     * @return \Illuminate\Http\Response
     */
    public function destroy(retiros $retiros)
    {
        //
    }
}
