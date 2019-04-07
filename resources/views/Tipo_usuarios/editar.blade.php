@extends('layout.plantilla')
@section('title','Tipo usuario')

@section('content')
    <div>
        <a href="{{ url('tipo_usuarios')}}" class="btn btn-info pull-right"> << Atras </a>
        <h1>Editar Tipo Usuarios</h1>
    </div>
    <hr>
    <div class="row">
        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        {!! Form::model($tipo_usuario, ['method' => 'PATCH', 'route' => ['tipo_usuarios.update', $tipo_usuario->tusu_codigo ], 'files' => true ]) !!}
        <div class="col">
            <div class="form-group">
                    {!! Form::label('Nombre Documento', 'Nombre Documento:') !!}
                    {!! Form::text('tusu_nombre',null,['class' => 'form-control', 'required' => 'required']) !!}
            </div>            
        </div>
        <div class="form-group">
            {!! Form::submit('Guardar', ['class' => 'btn btn-primary form-control']) !!}
        </div>
        {!! Form::close() !!}
    </div>
@stop
