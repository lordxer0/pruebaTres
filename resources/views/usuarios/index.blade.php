@extends('layout/plantilla')
@section('titulo','Usuario')
@section('content')
 <h1>Network Group Bank </h1>
 <a href="{{url('/usuarios/create')}}" class="btn btn-info pull-right">Crear Usuario</a>
 <hr>
 <table class="table table-striped table-bordered table-hover">
     <thead>
     <tr class="bg-info">
         <th>Numero Documento</th>
         <th>Codigo Tipo Usuario</th>
         <th>Nombre Usuario</th>
         <th>Usuario</th>
         <th colspan="3">Acciones</th>
     </tr>
     </thead>
     <tbody>
     @foreach ($usuarios as $usuario)
         <tr>
             <td>{{ $usuario->usu_cedula }}</td>
             <td>{{ $usuario->tusu_codigo }}</td>
             <td>{{ $usuario->usu_nombre }}</td>
             <td>{{ $usuario->usu_login }}</td>
             <td><a href="{{ url('usuarios', $usuario->usu_cedula) }}" class="btn btn-primary">Ver</a></td>
             <td><a href="{{ route('usuarios.edit', $usuario->usu_cedula) }}" class="btn btn-warning">Editar</a></td>
         </tr>
     @endforeach
     </tbody>
 </table>
@endsection
