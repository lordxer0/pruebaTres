@extends('layout/plantilla')
@section('title','cuentas')
@section('content')
@csrf
 <h1>Network Group Bank </h1>
 <a href="{{url('/cuentas/create')}}" class="btn btn-info pull-right">Crear Cuenta</a>
 <hr>
 <table class="table table-striped table-bordered table-hover">
     <thead>
     <tr class="bg-info">
         <th>Numero cuenta</th>
         <th>Documento Cliente</th>
         <th>Saldo</th>
         <th>Estado</th>
         <th colspan="3">Acciones</th>
     </tr>
     </thead>
     <tbody>
     @foreach ($cuentas as $cuenta)
         <tr>
             <td>{{ $cuenta->cue_numero }}</td>
             <td>{{ $cuenta->cli_cedula }}</td>
             <td>{{ $cuenta->cue_saldo }}</td>
             <td>{{ $cuenta->cue_activa }}</td>
             <td><a href="{{ url('cuentas', $cuenta->cue_numero) }}" class="btn btn-primary">Ver</a></td>
             <td><a href="{{ route('cuentas.edit', $cuenta->cue_numero) }}" class="btn btn-warning">Editar</a></td>
         </tr>
     @endforeach
     </tbody>
 </table>
@endsection
