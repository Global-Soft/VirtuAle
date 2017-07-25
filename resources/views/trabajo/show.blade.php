@extends('layouts.app')

@section('titulo', 'Trabajos')

@section('content')
    <style>
        table tr td,
        table tr th {
            padding-left:10px;
            padding-right:10px;
            font-size: 15px;
            height: 30px;
        }
        .orange {
            color: #b400ad;
        }
        .center {
            text-align: center;
        }
        .left-margin {
            margin-left: 5px;
        }
        form {
            display: inline-block;
        }
    </style>
    <script src="http://bootboxjs.com/bootbox.js"></script>
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

                <h1>Detalles del trabajo
                    <a href="{{ url('trabajo/'.$trabajo->id.'/edit') }}" role="button" class="btn btn-primary pull-right left-margin">Modificar</a>
                    <a href="{{ url('home') }}" role="button" class="btn btn-default pull-right">Volver</a>
                </h1>
                <hr><br>
                <h1 class="orange">#{{ formatear_correlativo($trabajo->id, 5) }}</h1>
                <h2>{{ ucfirst($trabajo->nombre) }}</h2>
                <h4>{{ $trabajo->nombre_empresa . ' - ' . $trabajo->nombre_planta }}</h4>
                <h4>Iniciado el <span class="orange">{{ formatear_fecha($trabajo->fecha_inicio) }}</span></h4>
                <br><br>

                <h2>Documentos del trabajo <a href="{{ url('documento/'.$trabajo->id.'/1/create') }}" role="button" class="btn btn-success pull-right">Agregar documento</a></h2>
                <table class="table-bordered table-hover col-sm-12">
                    <thead>
                    <tr>
                        <th>Título</th>
                        <th>Descripción</th>
                        <th>Peso</th>
                        <th class="center">Opciones</th>
                    </tr>
                    </thead>
                    <tbody>
                    @if (count($documentos) > 0)
                        @foreach($documentos as $documento)
                        <tr>
                            <td>{{ $documento->titulo }}</td>
                            <td>{{ $documento->descripcion }}</td>
                            <td>{{ formatear_bytes($documento->peso) }}</td>
                            <td class="center">
                                <a href="{{ url('documento/'.$trabajo->id.'/'.$documento->id.'/edit') }}" role="button" class="btn btn-xs btn-default">Modificar</a>&nbsp;
                                <a href="{{ url('documento/'.$trabajo->id.'/'.$documento->id.'/'.$documento->tipo_padre.'/download') }}" role="button" class="btn btn-xs btn-success">Descargar</a>&nbsp;
                                {{ Form::open(['url' => 'documento/'.$documento->id.'/1', 'onsubmit' => "return confirm('¿Seguro que deseas eliminar el archivo? Esta acción es irreversible!');"]) }}
                                {{ Form::submit('Eliminar', ['name' => 'eliminar', 'class' => 'btn btn-xs btn-danger eliminar']) }}
                                {{ Form::hidden('_method', 'DELETE') }}
                                {{ Form::close() }}
                            </td>
                        </tr>
                        @endforeach
                    @else
                        <tr>
                            <td></td>
                            <td>No se encontraron documentos para este trabajo</td>
                            <td></td>
                            <td></td>
                        </tr>
                    @endif
                    </tbody>
                </table>

                    <script>
                        function preguntar(form) {
                             return confirm('Do you really want to submit the form?');
                        }
                    </script>

            </div>
        </div>
    </div>
@endsection