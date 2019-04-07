@extends('layout/plantilla')
@section('title','consignaciones')
@section('content')
    <div>
        <a href="{{ url('retiros')}}" class="btn btn-info pull-right"> << Atrás </a>
        <h1>Ver retiro</h1>
    </div>
    <hr>
    <form class="form-horizontal">
        <div class="row">
            <div class="col-md-8">
                <div class="form-group">
                    <label for="id" class="col-sm-2 control-label">Codigo Consignacion</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="id" placeholder="{{$retiro->con_codigo}}" readonly>
                    </div>
                </div>
                <div class="form-group">
                    <label for="titulo" class="col-sm-2 control-label">Numero de Cuenta</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="title" placeholder="{{$retiro->cue_numero}}" readonly>
                    </div>
                </div>
                <div class="form-group">
                    <label for="director" class="col-sm-2 control-label">Documento quien genero</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="director" placeholder="{{$retiro->usu_cedula}}" readonly>
                    </div>
                </div>
                <div class="form-group">
                    <label for="genero" class="col-sm-2 control-label">Fecha Consignacion</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="genero" placeholder="{{$retiro->con_fecha}}" readonly>
                    </div>
                </div>
                <div class="form-group">
                    <label for="fecha" class="col-sm-2 control-label">Descripcion</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="fecha" placeholder="{{$retiro->con_descripcion}}" readonly>
                    </div>
                </div>
                <div class="form-group">
                    <label for="sinopsis" class="col-sm-2 control-label"> 	Valor</label>
                    <div class="col-sm-10">
                        <input class="form-control" id="sinopsis" style="resize: none; text-align:justify;" placeholder="{{$retiro->con_valor}}" readonly></textarea>
                    </div>
                </div>
            </div>
        </div>
        <hr>
    </form>
@stop
