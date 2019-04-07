@extends('layout/plantilla')
@section('title','clientes')
@section('content')
 <h1>Network Group Bank </h1>
 <a href="{{url('/clientes/create')}}" class="btn btn-info pull-right">Crear Cliente</a>
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
     @foreach ($clientes as $cliente)
         <tr>
             <td>{{ $cliente->cli_cedula }}</td>
             <td>{{ $cliente->tdoc_codigo }}</td>
             <td>{{ $cliente->cli_nombre }}</td>
             <td>{{ $cliente->cli_direccion }}</td>
             <td>{{ $cliente->cli_telefono }}</td>
             <td>{{ $cliente->cli_mail }}</td>
             <td><a href="{{ url('clientes', $cliente->cli_cedula) }}" class="btn btn-primary">Ver</a></td>
             <td><a href="{{ route('clientes.edit', $cliente->cli_cedula) }}" class="btn btn-warning">Editar</a></td>
             <td>
             {!! Form::open(['method' => 'DELETE', 'route'=>['clientes.destroy', $cliente->cli_cedula]]) !!}
             {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
             {!! Form::close() !!}
             </td>
         </tr>
     @endforeach
     </tbody>
 </table>
@endsection
