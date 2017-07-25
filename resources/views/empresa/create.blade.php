@extends('layouts.app')

@section('titulo', 'Empresas')

@section('contenido')
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

                <h1>Creando nueva empresa</h1>
                <hr><br>
                {{ Form::open(['url' => 'empresa']) }}
                <div class="form-group">
                    {{ Form::label('rut', 'RUT') }}
                    {{ Form::text('rut', '', ['class' => 'form-control', 'placeholder' => 'Ej. 1234567-5']) }}
                </div>
                <div class="form-group">
                    {{ Form::label('nombre_empresa', 'Empresa') }}
                    {{ Form::text('nombre_empresa', '', ['class' => 'form-control', 'placeholder' => 'Nombre...']) }}
                </div>
                <div class="form-group">
                    {{ Form::label('nombre_planta', 'Planta') }}
                    {{ Form::text('nombre_planta', '', ['class' => 'form-control', 'placeholder' => 'Nombre...']) }}
                </div>
                <br>
                {{ Form::submit('Crear empresa', ['class' => 'btn btn-success pull-right']) }}
                {{ Form::close() }}

            </div>
        </div>
    </div>
@endsection