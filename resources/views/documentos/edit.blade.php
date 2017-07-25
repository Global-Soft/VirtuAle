@extends('layouts.app')

@section('titulo', 'Documentos')

@section('contenido')
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

                <h1>Nodificando documento</h1>
                <hr><br>
                {{ Form::open(['url' => 'documento/'.$documento->id]) }}
                <div class="form-group">
                    {{ Form::label('titulo', 'Título') }}
                    {{ Form::text('titulo', $documento->titulo, ['class' => 'form-control', 'placeholder' => 'Título...']) }}
                </div>
                <div class="form-group">
                    {{ Form::label('descripcion', 'Descripción') }}
                    {{ Form::text('descripcion', $documento->descripcion, ['class' => 'form-control', 'placeholder' => 'Descripción...']) }}
                </div>
                <br>
                {{ Form::hidden('_method', 'PUT') }}
                {{ Form::hidden('id_trabajo', $id_trabajo) }}
                {{ Form::submit('Modificar documento', ['class' => 'btn btn-success pull-right left-margin left-margin']) }}
                <a href="{{ url('trabajo/'.$id_trabajo) }}" role="button" class="btn-default btn pull-right">Volver</a>
                {{ Form::close() }}

            </div>
        </div>
    </div>
@endsection