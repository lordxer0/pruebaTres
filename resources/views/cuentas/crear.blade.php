@extends('layout.plantilla')

@section('titulo','cuentas')

@section('content')
    <div>
        <a href="{{ url('cuentas')}}" class="btn btn-info pull-right"> << Atras </a>
        <h1>Crear Cuenta</h1>
    </div>
    <center>
    <hr>
    <div class="container">
        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

            {!! Form::open(['url' => 'cuentas', 'files' => true]) !!}
            <div class="col">
                <div class="form-group">
                    {!! Form::label('Numero Documento', 'Numero Documento:') !!}
                    {!!Form::select('cli_cedula',$clientes,null, ['class' => 'form-control','placeholder' => 'seleccione la cedula del cliente...'])!!}
                </div>
                <div class="form-group">
                    {!! Form::label('Saldo', 'Saldo inicial:') !!}
                    {!! Form::text('cue_saldo',null,['class'=>'form-control']) !!}
                </div>
                <div class="col">
                    <div class="form-group">
                            {!! Form::label('Estado', 'Estado') !!}
                            <br>
                            {!! Form::label('Estado', 'activo:') !!}
                            {!! Form::radio('cue_activa','activa',['class' => 'form-control', 'required' => 'required']) !!}
                            {!! Form::label('Estado', 'inactivo:') !!}
                            {!! Form::radio('cue_activa','inactiva',['class' => 'form-control', 'required' => 'required']) !!}
                    </div>
                </div>
                <div class="form-group">
                    {!! Form::label('clave', 'Clave:') !!}
                    {!! Form::text('cue_clave',null,['class'=>'form-control','placeholder' => 'ingrese una contraseña a gusto']) !!}
                </div>
            </div>
        <div class="form-group">
            {!! Form::submit('Guardar', ['class' => 'btn btn-primary form-control']) !!}
        </div>
        {!! Form::close() !!}
    </div>
</center>
@stop
