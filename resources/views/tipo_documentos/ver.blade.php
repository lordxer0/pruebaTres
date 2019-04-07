@extends('layout/plantilla')
@section('title','Tipo Documentos')

@section('content')
    <div>
        <a href="{{ url('tipo_documentos')}}" class="btn btn-info pull-right"> << Atrás </a>
        <h1>Ver tipo_documentos</h1>
    </div>
    <hr>
    <form class="form-horizontal">
        <div class="row">
            <div class="col-md-8">
                <div class="form-group">
                    <label for="id" class="col-sm-2 control-label">Codigo Documento</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="id" placeholder="{{$tipo_documentos->tdoc_codigo}}" readonly>
                    </div>
                </div>
                <div class="form-group">
                    <label for="titulo" class="col-sm-2 control-label">Nombre documento</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="title" placeholder="{{$tipo_documentos->tdoc_nombre}}" readonly>
                    </div>
                </div>
                
            </div>
        </div>
        <hr>
    </form>
@stop
