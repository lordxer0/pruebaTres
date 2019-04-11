@extends('layout.plantilla')

@section('title','Usuarios')

@section('content')
    <div>
        <a href="{{ url('usuarios')}}" class="btn btn-info pull-right"> << Atras </a>
        <h1>Crear Usuarios</h1>
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

            {!! Form::open(['url' => 'usuarios', 'files' => true]) !!}
            <div class="col">
                <div class="form-group">
                    {!! Form::label('Numero Documento', 'Numero Documento:') !!}
                    {!! Form::text('usu_cedula',null,['class' => 'form-control', 'required' => 'required']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('Tipo Usuario', 'Tipo Usuario:') !!}
                    {!!Form::select('tusu_codigo',$tipo_usuarios,null, ['class' => 'form-control','placeholder' => 'seleccione tipo...'])!!}
                </div>
            <div class="form-group">
                {!! Form::label('Nombre', 'Nombre:') !!}
                {!! Form::text('usu_nombre',null,['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('Nombre Usuario', 'Nombre Usuario:') !!}
                {!! Form::text('usu_login',null,['class' => 'form-control', 'required' => 'required']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('Contraseña', 'Contraseña:') !!}
                {!! Form::password('usu_clave',['class'=>'form-control']) !!}
            </div>
        </div>
        
        <div class="form-group">
            {!! Form::submit('Guardar', ['class' => 'btn btn-primary form-control']) !!}
        </div>
        {!! Form::close() !!}
    </div>
</center>
@stop
