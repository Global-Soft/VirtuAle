@extends('layouts.app')

@section('titulo', 'Trabajos')

@section('content')
    <style>
        table tr td {
            padding-left:10px;
        }
        .center {
            text-align: center;
        }
        .orange {
            color: #b400ad;
        }
    </style>
    <div class="container">
        <div class="row">
            <div class="col-sm-10 col-sm-offset-1">

                <h1>Edición de trabajo</h1>
                <hr><br>
                {{ Form::open(['url' => 'trabajo/'.$trabajo->id]) }}
                    <div class="form-group">
                        {{ Form::label('nombre', 'Trabajo') }}
                        {{ Form::text('nombre', $trabajo->nombre, ['class' => 'form-control', 'placeholder' => 'Nombre...']) }}
                    </div>
                    <div class="form-group">
                        {{ Form::label('empresa', 'Empresa') }}
                        {{ Form::select('empresa', $empresas, $trabajo->id_empresa, ['class' => 'form-control']) }}
                    </div>
                    {{ Form::hidden('_method', 'PUT') }}
                    <br>
                    {{ Form::submit('Guardar cambios', ['class' => 'btn btn-success pull-right']) }}
                {{ Form::close() }}

            </div>
        </div>
    </div>
@endsection