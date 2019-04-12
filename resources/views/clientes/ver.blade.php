@extends('layout/plantilla')
@section('title','clientes')
@section('content')
@csrf
    <div>
        <a href="{{ url('clientes')}}" class="btn btn-info pull-right"> << Atrás </a>
        <h1>Ver cliente</h1>
    </div>
    <hr>
    <form class="form-horizontal">
        <div class="row">
            <div class="col-md-8">
                <div class="form-group">
                    <label for="id" class="col-sm-2 control-label">Numero Identificacion</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="id" placeholder="{{$cliente->cli_cedula}}" readonly>
                    </div>
                </div>
                <div class="form-group">
                    <label for="titulo" class="col-sm-2 control-label">Tipo documento</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="title" placeholder="{{$cliente->tdoc_codigo}}" readonly>
                    </div>
                </div>
                <div class="form-group">
                    <label for="director" class="col-sm-2 control-label">Nombre</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="director" placeholder="{{$cliente->cli_nombre}}" readonly>
                    </div>
                </div>
                <div class="form-group">
                    <label for="genero" class="col-sm-2 control-label">Direccion</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="genero" placeholder="{{$cliente->cli_direccion}}" readonly>
                    </div>
                </div>
                <div class="form-group">
                    <label for="fecha" class="col-sm-2 control-label">Telefono</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="fecha" placeholder="{{$cliente->cli_telefono}}" readonly>
                    </div>
                </div>
                <div class="form-group">
                    <label for="sinopsis" class="col-sm-2 control-label">Email</label>
                    <div class="col-sm-10">
                        <input class="form-control" id="sinopsis" style="resize: none; text-align:justify;" placeholder="{{$cliente->cli_mail}}" readonly></textarea>
                    </div>
                </div>
            </div>
        </div>
        <hr>
    </form>
@stop
