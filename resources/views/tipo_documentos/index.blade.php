@extends('layout/plantilla')
@section('titulo','Tipo Documentos')
@section('content')
 <h1>Network Group Bank </h1>
 <a href="{{url('/tipo_documentos/create')}}" class="btn btn-info pull-right">Crear Tipo Documentos</a>
 <hr>
 <table class="table table-striped table-bordered table-hover">
     <thead>
     <tr class="bg-info">
         <th>Codigo Documento</th>
         <th>Nombre Documento</th>
         <th colspan="3">Acciones</th>
     </tr>
     </thead>
     <tbody>
     @foreach ($tipo_documentos as $tipo_documento)
         <tr>
             <td>{{ $tipo_documento->tdoc_codigo }}</td>
             <td>{{ $tipo_documento->tdoc_nombre }}</td>
             <td><a href="{{ url('tipo_documentos', $tipo_documento->tdoc_codigo) }}" class="btn btn-primary">Ver</a></td>
             <td><a href="{{ route('tipo_documentos.edit', $tipo_documento->tdoc_codigo) }}" class="btn btn-warning">Editar</a></td>
         </tr>
     @endforeach
     </tbody>
 </table>
@endsection
