@extends('layouts.app')

@section('titulo', 'Personal')

@section('content')
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

                <h1>Modificando personal</h1>
                <hr><br>
                {{ Form::open(['url' => 'personal/'.$persona->id]) }}
                <div class="form-group">
                    {{ Form::label('rut', 'RUT') }}
                    {{ Form::text('rut', formatear_rut($persona->rut), ['class' => 'form-control', 'placeholder' => 'Ej. 1234567-5']) }}
                </div>
                <div class="form-group">
                    {{ Form::label('nombre', 'Nombre') }}
                    {{ Form::text('nombre', $persona->nombre, ['class' => 'form-control', 'placeholder' => 'Nombre...']) }}
                </div>
                <div class="form-group">
                    {{ Form::label('apellido_paterno', 'Apellido paterno') }}
                    {{ Form::text('apellido_paterno', $persona->apellido_paterno, ['class' => 'form-control', 'placeholder' => 'Apellido paterno...']) }}
                </div>
                <div class="form-group">
                    {{ Form::label('apellido_materno', 'Apellido Materno') }}
                    {{ Form::text('apellido_materno', $persona->apellido_materno, ['class' => 'form-control', 'placeholder' => 'Apellido materno...']) }}
                </div>
                <div class="form-group">
                    {{ Form::label('correo', 'Correo electrónico') }}
                    {{ Form::text('correo', $persona->correo, ['class' => 'form-control', 'placeholder' => 'Correo...']) }}
                </div>
                <div class="form-group">
                    {{ Form::label('telefono', 'Teléfono de contacto') }}
                    {{ Form::text('telefono', $persona->telefono, ['class' => 'form-control', 'placeholder' => 'Teléfono...']) }}
                </div>
                <br>
                {{ Form::hidden('_method', 'PUT') }}
                {{ Form::submit('Modificar personal', ['class' => 'btn btn-success pull-right']) }}
                {{ Form::close() }}

            </div>
        </div>
    </div>
@endsection