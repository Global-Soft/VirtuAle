@extends('base');

@section('title','Empresa | Variables')

@section('body')

    <div style="text-align: center; font-size: 60px; border: 1px solid #020000;">
        Variables
    </div>


<table border = 1 align = "center" >
    <tr>

        @foreach ($empresas as $empresa)
        <td>Nombre empresa</td>
        <td>{{ $empresa->nombre }}</td>
        <td><a href = 'nombre/{{ $empresa->id }}'>Editar</a></td>
        @endforeach
    </tr>
    <tr>
        @foreach ($empresas as $empresa)
        <td>Nombre planta</td>
        <td>{{ $empresa->planta }}</td>
        <td><a href = 'planta/{{ $empresa->id }}'>Editar</a></td>
        @endforeach
    </tr>
</table>

    <p align = "center"> <input type="button" onclick="location.href='/empresa/modificar';" value="Retroceder" /></p>

@endsection