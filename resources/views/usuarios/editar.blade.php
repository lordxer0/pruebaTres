@extends('layout.plantilla')
@section('title','Usuario')

@section('content')
    <div>
        <a href="{{ url('usuarios')}}" class="btn btn-info pull-right"> << Atras </a>
        <h1>Editar usuarios</h1>
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
        {!! Form::model($usuario, ['method' => 'PATCH', 'route' => ['usuarios.update', $usuario->usu_cedula], 'files' => true ]) !!}
        <div class="col">
            <div class="form-group">
                    {!! Form::label('Numero Documento', 'Numero Documento:') !!}
                    {!! Form::text('usu_cedula',null,['class' => 'form-control', 'required' => 'required']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('Tipo Usuario', 'Tipo Usuario:') !!}
                {!!Form::select('tusu_codigo',$tipo_usuarios,null, ['class' => 'form-control','required' => 'required','placeholder' => 'seleccione tipo...'])!!}
            </div>
            <div class="row">
                <div class="form-group">
                        {!! Form::label('Nombre', 'Nombre:') !!}
                        {!! Form::text('usu_nombre',null,['class'=>'form-control']) !!}
                </div>
                <div class="col">
                    <div class="form-group">
                            {!! Form::label('Nombre Usuario', 'Nombre Usuario:') !!}
                            {!! Form::text('usu_login',null,['class' => 'form-control', 'required' => 'required']) !!}
                    </div>
                </div>
                <div class="form-group">
                        {!! Form::label('Clave', 'Clave:') !!}
                        {!! Form::text('usu_clave',null,['class'=>'form-control']) !!}
                </div>
            </div>
        </div>
        <div class="form-group">
            {!! Form::submit('Guardar', ['class' => 'btn btn-primary form-control']) !!}
        </div>
        {!! Form::close() !!}
    </div>
@stop
