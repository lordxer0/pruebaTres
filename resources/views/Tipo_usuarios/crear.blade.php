@extends('layout.plantilla')
@section('titulo','Tipo Usuario')
@section('content')
    <div>
        <a href="{{ url('tipo_usuario')}}" class="btn btn-info pull-right"> << Atras </a>
        <h1>Crear Tipo Usuario</h1>
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

            {!! Form::open(['url' => 'tipo_usuarios', 'files' => true]) !!}
            <div class="col">
                <div class="form-group">
                    {!! Form::label('Tipo de Usuario', 'Tipo de Usuario:') !!}
                    {!! Form::text('tusu_nombre',null,['class' => 'form-control', 'required' => 'required']) !!}
                </div>
                
        <div class="form-group">
            {!! Form::submit('Guardar', ['class' => 'btn btn-primary form-control']) !!}
        </div>
        {!! Form::close() !!}
    </div>
</center>
@stop
