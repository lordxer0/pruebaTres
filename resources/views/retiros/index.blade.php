@extends('layout/plantilla')
@section('titulo','clientes')
@section('content')
 <h1>Network Group Bank </h1>
 <a href="{{url('/retiros/create')}}" class="btn btn-info pull-right">Crear Retiros</a>
 <hr>
 <table class="table table-striped table-bordered table-hover">
     <thead>
     <tr class="bg-info">
         <th>Codigo Retiros</th>
         <th>Numero de Cuenta</th>
         <th>Documento Propietario</th>
         <th>Fecha Retiro</th>
         <th>Descripcion</th>
         <th>Valor</th>
         <th colspan="3">Acciones</th>
     </tr>
     </thead>
     <tbody>
     @foreach ($retiros as $retiro)
         <tr>
             <td>{{ $retiro->ret_codigo }}</td>
             <td>{{ $retiro->cue_numero }}</td>
             <td>{{ $retiro->usu_cedula }}</td>
             <td>{{ $retiro->ret_fecha }}</td>
             <td>{{ $retiro->ret_descripcion }}</td>
             <td>{{ $retiro->ret_valor }}</td>
             <td><a href="{{ url('retiros', $retiro->ret_codigo) }}" class="btn btn-primary">Ver</a></td>
             <td><a href="{{ route('retiros.edit', $retiro->ret_codigo) }}" class="btn btn-warning">Editar</a></td>
         </tr>
     @endforeach
     </tbody>
 </table>
@endsection
