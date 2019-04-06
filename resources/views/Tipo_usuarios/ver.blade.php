@extends('layout/plantilla')
@section('content')
    <div>
        <a href="{{ url('tipo_usuarios')}}" class="btn btn-info pull-right"> << Atrás </a>
        <h1>Ver tipo_usuarios</h1>
    </div>
    <hr>
    <form class="form-horizontal">
        <div class="row">
            <div class="col-md-8">
                <div class="form-group">
                    <label for="id" class="col-sm-2 control-label">Codigo Tipo Usuario</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="id" placeholder="{{ $tipo_usuario->tusu_codigo }}" readonly>
                    </div>
                </div>
                <div class="form-group">
                    <label for="titulo" class="col-sm-2 control-label">Nombre Tipo Usuario</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="title" placeholder="{{ $tipo_usuario->tusu_nombre }}" readonly>
                    </div>
                </div>
                
            </div>
        </div>
        <hr>
    </form>
@stop
