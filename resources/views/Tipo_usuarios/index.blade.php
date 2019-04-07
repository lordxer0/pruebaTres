@extends('layout/plantilla')
@section('title','Tipo usuario')
@section('content')
 <h1>Network Group Bank </h1>
 <a href="{{url('/tipo_usuarios/create')}}" class="btn btn-info pull-right">Crear Tipo Documentos</a>
 <hr>
 <table class="table table-striped table-bordered table-hover">
     <thead>
     <tr class="bg-info">
         <th>Codigo tipo Usuario</th>
         <th>Tipo usuario</th>
         <th colspan="3">Acciones</th>
     </tr>
     </thead>
     <tbody>
     @foreach ($tipo_usuarios as $tipo_usuario)
         <tr>
             <td>{{ $tipo_usuario->tusu_codigo }}</td>
             <td>{{ $tipo_usuario->tusu_nombre }}</td>
             <td><a href="{{ url('tipo_usuarios', $tipo_usuario->tusu_codigo) }}" class="btn btn-primary">Ver</a></td>
             <td><a href="{{ route('tipo_usuarios.edit', $tipo_usuario->tusu_codigo) }}" class="btn btn-warning">Editar</a></td>
         </tr>
     @endforeach
     </tbody>
 </table>
@endsection
