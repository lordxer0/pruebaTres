@extends('layout.plantilla')

@section('title','retiros')

@section('content')
    <div>
        <a href="{{ url('retiros')}}" class="btn btn-info pull-right"> << Atras </a>
        <h1>Crear Retiro</h1>
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

            {!! Form::open(['url' => 'retiros', 'files' => true]) !!}
            <div class="col">
                <div class="form-group">
                    {!! Form::label('Numero Cuenta', 'Numero Cuenta:') !!}
                    {!!Form::select('cue_numero',$cuentas,null, ['class' => 'form-control','placeholder' => 'seleccione la cuenta...'])!!}
                </div>
                <div class="form-group">
                    {!! Form::label('Documento Usuario', 'Documento Usuario:') !!}
                    {!!Form::select('usu_cedula',$usuarios,null, ['class' => 'form-control','placeholder' => 'seleccione quien hace la transaccion...'])!!}
                </div>
            <div class="form-group">
                {!! Form::label('Saldo a Agregar', 'Saldo a Retirar:') !!}
                {!! Form::number('ret_valor',null,['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('Fecha', 'Fecha:') !!}
                {!! Form::date('ret_fecha',null,['class' => 'form-control', 'required' => 'required']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('descripcion', 'descripcion:') !!}
                {!! Form::text('ret_descripcion',null,['class'=>'form-control']) !!}
            </div>
        </div>
        <div class="form-group">
            {!! Form::submit('Guardar', ['class' => 'btn btn-primary form-control']) !!}
        </div>
        {!! Form::close() !!}
    </div>
</center>
@stop
