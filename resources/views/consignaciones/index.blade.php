@extends('layout/plantilla')
@section('titulo','clientes')
@section('content')
 <h1>Network Group Bank </h1>
 <a href="{{url('/consignaciones/create')}}" class="btn btn-info pull-right">Crear consignaciones</a>
 <hr>
 <table class="table table-striped table-bordered table-hover">
     <thead>
     <tr class="bg-info">
         <th>Numero Cedula</th>
         <th>Tipo Documento</th>
         <th>Nombre</th>
         <th>Direccion</th>
         <th>Telefono</th>
         <th>Email</th>
         <th colspan="3">Acciones</th>
     </tr>
     </thead>
     <tbody>
     @foreach ($consignaciones as $consignacio)
         <tr>
             <td>{{ $consignacio->cli_cedula }}</td>
             <td>{{ $consignacio->tdoc_codigo }}</td>
             <td>{{ $consignacio->cli_nombre }}</td>
             <td>{{ $consignacio->cli_direccion }}</td>
             <td>{{ $consignacio->cli_telefono }}</td>
             <td>{{ $consignacio->cli_mail }}</td>
             <td><a href="{{ url('consignacioness', $consignaciones->cli_cedula) }}" class="btn btn-primary">Ver</a></td>
             <td><a href="{{ route('consignacioness.edit', $consignaciones->cli_cedula) }}" class="btn btn-warning">Editar</a></td>
             <td>
             {!! Form::open(['method' => 'DELETE', 'route'=>['consignacioness.destroy', $consignaciones->cli_cedula]]) !!}
             {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
             {!! Form::close() !!}
             </td>
         </tr>
     @endforeach
     </tbody>
 </table>
@endsection
