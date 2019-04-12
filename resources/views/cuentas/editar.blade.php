@extends('layout.plantilla')
@section('title','cuentas')
@section('content')
@csrf
    <div>
        <a href="{{ url('cuentas')}}" class="btn btn-info pull-right"> << Atras </a>
        <h1>Editar Cuenta</h1>
    </div>
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

        {!! Form::model($cuenta , ['method' => 'PATCH', 'route' => ['cuentas.update', $cuenta->cue_numero ], 'files' => true ]) !!}
        <div class="col">
            <div class="form-group">
                    {!! Form::label('Numero Cuenta', 'Numero Cuenta:') !!}
                    {!! Form::text('cue_numero',null,['class' => 'form-control', 'required' => 'required']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('Documento Cliente', 'Documento Cliente:') !!}
                {!! Form::text('cli_cedula',null,['class' => 'form-control', 'required' => 'required']) !!}
            </div>
            
            <div class="form-group">
                    {!! Form::label('Saldo', 'Saldo:') !!}
                    {!! Form::text('cue_saldo',null,['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('clave', 'Clave:') !!}
                {!! Form::text('cue_clave',null,['class'=>'form-control', 'placeholder' => 'cambie la contraseña a gusto']) !!}
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
                
            
            
        </div>
        
        <div class="form-group">
            {!! Form::submit('Guardar', ['class' => 'btn btn-primary form-control']) !!}
        </div>
        {!! Form::close() !!}
    </div>
@stop
