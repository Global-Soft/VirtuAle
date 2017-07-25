@extends('layouts.app')

@section('titulo', 'Inicio')

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

            <h1>Lista de trabajos <a href="{{ url('trabajo/create') }}" role="button" class="btn btn-success pull-right">Nuevo</a></h1>
            <hr>
            <table class="table-bordered table-hover col-sm-12">
                <thead>
                <tr>
                    <th>Número</th>
                    <th>Empresa y planta</th>
                    <th>Trabajo en ejecución</th>
                    <th>Fecha de inicio</th>
                    <th class="center">Opciones</th>
                </tr>
                </thead>
                <tbody>
                @foreach($trabajos as $trabajo)
                    <tr>
                        <td>{{ formatear_correlativo($trabajo->id, 5) }}</td>
                        <td>{{ $trabajo->nombre_empresa . ' - ' . $trabajo->nombre_planta }}</td>
                        <td>{{ $trabajo->nombre }}</td>
                        <td>{{ $trabajo->fecha_inicio }}</td>
                        <td class="center"><a href="{{ url('trabajo/'.$trabajo->id) }}" role="button" class="btn btn-xs btn-default">Detalles</a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
