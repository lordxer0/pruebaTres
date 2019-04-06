@extends('layout/plantilla')
@section('titulo','clientes')
@section('content')
 <h1>Network Group Bank </h1>
 <a href="{{url('/consignaciones/create')}}" class="btn btn-info pull-right">Crear consignaciones</a>
 <hr>
 <table class="table table-striped table-bordered table-hover">
     <thead>
     <tr class="bg-info">
         <th>Codigo Consignacion</th>
         <th>Numero de Cuenta</th>
         <th>Documento Propietario</th>
         <th>Fecha Consignacion</th>
         <th>Descripcion</th>
         <th>Valor</th>
         <th colspan="3">Acciones</th>
     </tr>
     </thead>
     <tbody>
     @foreach ($consignaciones as $consignacion)
         <tr>
             <td>{{ $consignacion->con_codigo }}</td>
             <td>{{ $consignacion->cue_numero }}</td>
             <td>{{ $consignacion->usu_cedula }}</td>
             <td>{{ $consignacion->con_fecha }}</td>
             <td>{{ $consignacion->con_descripcion }}</td>
             <td>{{ $consignacion->con_valor }}</td>
             <td><a href="{{ url('consignaciones', $consignacion->con_codigo) }}" class="btn btn-primary">Ver</a></td>
             <td><a href="{{ route('consignaciones.edit', $consignacion->con_codigo) }}" class="btn btn-warning">Editar</a></td>
         </tr>
     @endforeach
     </tbody>
 </table>
@endsection
