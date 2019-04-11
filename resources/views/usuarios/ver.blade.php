@extends('layout/plantilla')
@section('title','Usuario')

@section('content')
    <div>
        <a href="{{ url('usuarios')}}" class="btn btn-info pull-right"> << Atrás </a>
        <h1>Ver usuarios</h1>
    </div>
    <hr>
    <form class="form-horizontal">
        <div class="row">
            <div class="col-md-8">
                <div class="form-group">
                    <label for="id" class="col-sm-2 control-label">Numero Identificacion</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="id" placeholder="{{$usuario->usu_cedula}}" readonly>
                    </div>
                </div>
                <div class="form-group">
                    <label for="titulo" class="col-sm-2 control-label">Tipo documento</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="title" placeholder="{{$usuario->tusu_codigo}}" readonly>
                    </div>
                </div>
                <div class="form-group">
                    <label for="director" class="col-sm-2 control-label">Nombre</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="director" placeholder="{{$usuario->usu_nombre}}" readonly>
                    </div>
                </div>
                <div class="form-group">
                    <label for="genero" class="col-sm-2 control-label">Nombre Usuario</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="genero" placeholder="{{$usuario->usu_login}}" readonly>
                    </div>
                </div>  
            </div>
        </div>
        <hr>
    </form>
@stop
