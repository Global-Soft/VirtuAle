@extends('layouts.app')

@section('titulo', 'Empresas')

@section('content)
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

                <h1>Lista de empresas y plantas <a href="{{ url('empresa/create') }}" role="button" class="btn btn-success pull-right">Nueva</a></h1>
                <hr>
                <table class="table-bordered table-hover col-sm-12">
                    <thead>
                    <tr>
                        <th>RUT</th>
                        <th>Empresa</th>
                        <th>Planta</th>
                        <th class="center">Opciones</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($empresas as $empresa)
                        <tr>
                            <td>{{ formatear_rut($empresa->rut) }}</td>
                            <td>{{ $empresa->nombre_empresa }}</td>
                            <td>{{ $empresa->nombre_planta }}</td>
                            <td class="center"><a href="{{ url('empresa/'.$empresa->id.'/edit') }}" role="button" class="btn btn-xs btn-warning">Modificar</a></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
