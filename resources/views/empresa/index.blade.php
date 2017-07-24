@extends('base');

@section('title','Empresa | Visualizar')

@section('body')

    <div style="text-align: center; font-size: 60px; border: 1px solid #020000;">
        Visualizar
    </div>


    <table align="center" border="1">
        <thead>
        <tr>
            <th>ID</th>
            <th>Nombre empresa</th>
            <th>Nombre planta</th>
        </tr>
        </thead>
        <tbody>
            @foreach($empresas as $empresa)
                <tr>
                    <td>{{$empresa->id}}</td>
                    <td>{{$empresa->nombre}}</td>
                    <td>{{$empresa->planta}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <p align = "center"> <input type="button" onclick="javascript:history.back(-1);" value="Retroceder" /></p>

@endsection