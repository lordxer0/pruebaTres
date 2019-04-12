@extends('layout.plantilla')
@section('title','cliente')
@section('content')
@csrf
    <div>
        <a href="{{ url('clientes')}}" class="btn btn-info pull-right"> << Atras </a>
        <h1>Editar Cliente</h1>
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
        {!! Form::model($cliente, ['method' => 'PATCH', 'route' => ['clientes.update', $cliente->cli_cedula], 'files' => true ]) !!}
        <div class="col">
            <div class="form-group">
                    {!! Form::label('Numero Documento', 'Numero Documento:') !!}
                    {!! Form::text('cli_cedula',null,['class' => 'form-control', 'required' => 'required']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('Tipo Documento', 'Tipo Documento:') !!}
                {!! Form::text('tdoc_codigo',null,['class' => 'form-control', 'required' => 'required']) !!}
            </div>
            <div class="row">
                <div class="form-group">
                        {!! Form::label('Nombre', 'Nombre:') !!}
                        {!! Form::text('cli_nombre',null,['class'=>'form-control']) !!}
                </div>
                <div class="col">
                    <div class="form-group">
                            {!! Form::label('Direccion', 'Direccion:') !!}
                            {!! Form::text('cli_direccion',null,['class' => 'form-control', 'required' => 'required']) !!}
                    </div>
                </div>
                <div class="form-group">
                        {!! Form::label('Telefono', 'Telefono:') !!}
                        {!! Form::text('cli_telefono',null,['class'=>'form-control']) !!}
                </div>
            </div>
            
        </div>
        <div class="col">
                <div class="form-group">
                        {!! Form::label('Email', 'Email:') !!}
                        {!! Form::text('cli_mail',null,['class' => 'form-control', 'required' => 'required']) !!}
                </div>
        </div>
        <div class="form-group">
            {!! Form::submit('Guardar', ['class' => 'btn btn-primary form-control']) !!}
        </div>
        {!! Form::close() !!}
    </div>
@stop
