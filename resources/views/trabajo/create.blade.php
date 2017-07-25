@extends('layouts.app')

@section('titulo', 'Trabajos')

@section('contenido')
    <div class="container">
        <div class="row">
            <div class="col-sm-10 col-sm-offset-1">

                <h1>Creando nuevo trabajo</h1>
                <hr><br>
                {{ Form::open(['url' => 'trabajo']) }}
                <div class="form-group">
                    {{ Form::label('nombre', 'Trabajo') }}
                    {{ Form::text('nombre', '', ['class' => 'form-control', 'placeholder' => 'Nombre...']) }}
                </div>
                <div class="form-group">
                    {{ Form::label('empresa', 'Empresa') }}
                    {{ Form::select('empresa', $empresas, false, ['class' => 'form-control']) }}
                </div>
                <br>
                {{ Form::submit('Crear trabajo', ['class' => 'btn btn-success pull-right']) }}
                {{ Form::close() }}

            </div>
        </div>
    </div>
@endsection