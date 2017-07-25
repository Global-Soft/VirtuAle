@extends('layouts.app')

@section('titulo', 'Personal')

@section('content')
    <style>
        table tr td,
        table tr th {
            padding-left:10px;
            font-size: 15px;
            height: 30px;
        }
        .center {
            text-align: center;
        }
        form {
            display: inline-block;
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

                <h1>Lista de personal <a href="{{ url('personal/create') }}" role="button" class="btn btn-success pull-right">Agregar</a></h1>
                <hr>
                <table class="table-bordered table-hover col-sm-12">
                    <thead>
                    <tr>
                        <th>RUT</th>
                        <th>Nombre</th>
                        <th>Correo</th>
                        <th>Teléfono</th>
                        <th class="center">Opciones</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($personal as $persona)
                        <tr>
                            <td>{{ formatear_rut($persona->rut) }}</td>
                            <td>{{ formatear_nombre($persona) }}</td>
                            <td>{{ $persona->correo }}</td>
                            <td>{{ formatear_telefono($persona->telefono) }}</td>
                            <td class="center">
                                <a href="{{ url('personal/'.$persona->id) }}" role="button" class="btn btn-xs btn-default">Detalles</a>
                                <a href="{{ url('personal/'.$persona->id.'/edit') }}" role="button" class="btn btn-xs btn-warning">Modificar</a>
                                {{ Form::open(['url' => 'personal/'.$persona->id, 'onsubmit' => "return confirm('¿Seguro que deseas eliminar a la persona? Esta acción es IRREVERSIBLE!');"]) }}
                                {{ Form::submit('Eliminar', ['name' => 'eliminar', 'class' => 'btn btn-xs btn-danger eliminar']) }}
                                {{ Form::hidden('_method', 'DELETE') }}
                                {{ Form::close() }}
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
