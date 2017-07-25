@extends('layouts.app')

@section('titulo', 'Documentos')

@section('content')
    <style>
        .left-margin {
            margin-left: 5px;
        }
    </style>
    <div class="container">
        <div class="row">
            <div class="col-sm-10 col-sm-offset-1">

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif

                <h1>Agregando nuevo documento</h1>
                <hr><br>
                {{ Form::open(['url' => 'documento/'.$id_padre.'/'.$tipo_padre.'/store', 'enctype' => 'multipart/form-data']) }}
                <div class="form-group">
                    {{ Form::label('titulo', 'Título') }}
                    {{ Form::text('titulo', '', ['class' => 'form-control', 'placeholder' => 'Título...']) }}
                </div>
                <div class="form-group">
                    {{ Form::label('descripcion', 'Descripción') }}
                    {{ Form::text('descripcion', '', ['class' => 'form-control', 'placeholder' => 'Descripción...']) }}
                </div>
                <div class="form-group">
                    {{ Form::label('archivo', 'Adjuntar archivo') }}
                    {{ Form::file('archivo') }}
                    <p class="help-block">Máximo 25 MB.</p>
                </div>
                <br>
                {{ Form::submit('Agregar documento', ['class' => 'btn btn-success pull-right left-margin']) }}
                <a href="{{ url($tipo_padre == 1 ? 'trabajo/' : 'personal/'.$id_padre) }}" role="button" class="btn-default btn pull-right">Volver</a>
                {{ Form::close() }}

            </div>
        </div>
    </div>
@endsection