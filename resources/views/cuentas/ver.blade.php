@extends('layout/plantilla')
@section('content')
    <div>
        <a href="{{ url('cuentas')}}" class="btn btn-info pull-right"> << Atrás </a>
        <h1>Ver Cuentas</h1>
    </div>
    <hr>
    <form class="form-horizontal">
        <div class="container">
            <div class="col-md-8">
                <div class="form-group">
                    <label for="id" class="col-sm-2 control-label">Numero cuenta</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="id" placeholder="{{$cuenta->cue_numero}}" readonly>
                    </div>
                </div>
                <div class="form-group">
                    <label for="titulo" class="col-sm-2 control-label">Documento Cliente</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="title" placeholder="{{$cuenta->cli_cedula}}" readonly>
                    </div>
                </div>
                <div class="form-group">
                    <label for="director" class="col-sm-2 control-label">Saldo</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="director" placeholder="{{$cuenta->cue_saldo}}" readonly>
                    </div>
                </div>
                <div class="form-group">
                    <label for="genero" class="col-sm-2 control-label">Estado</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="genero" placeholder="{{$cuenta->cue_activa}}" readonly>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    
    <hr>
    </form>
@stop
