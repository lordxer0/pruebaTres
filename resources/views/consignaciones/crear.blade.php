@extends('layout.plantilla')

@section('titulo','clientes')

@section('content')
    <div>
        <a href="{{ url('clientes')}}" class="btn btn-info pull-right"> << Atras </a>
        <h1>Crear Cliente</h1>
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

            {!! Form::open(['url' => 'clientes', 'files' => true]) !!}
            <div class="col">
                <div class="form-group">
                    {!! Form::label('Numero Documento', 'Numero Documento:') !!}
                    {!! Form::text('cli_cedula',null,['class' => 'form-control', 'required' => 'required']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('Tipo Documento', 'Tipo Documento:') !!}
                    {!!Form::select('tdoc_codigo',$tipo_documentos,null, ['class' => 'form-control','placeholder' => 'seleccione tipo...'])!!}
                </div>
            <div class="form-group">
                {!! Form::label('Nombre', 'Nombre:') !!}
                {!! Form::text('cli_nombre',null,['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('Direccion', 'Direccion:') !!}
                {!! Form::text('cli_direccion',null,['class' => 'form-control', 'required' => 'required']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('Telefono', 'Telefono:') !!}
                {!! Form::text('cli_telefono',null,['class'=>'form-control']) !!}
            </div>
        </div>
        <div class="col">
            <div class="form-group">
                {!! Form::label('Email', 'Email:') !!}
                {!! Form::Email('cli_mail',null,['class' => 'form-control', 'required' => 'required']) !!}
            </div>
        </div>
        <div class="form-group">
            {!! Form::submit('Guardar', ['class' => 'btn btn-primary form-control']) !!}
        </div>
        {!! Form::close() !!}
    </div>
</center>
@stop
