@extends('base');

@section('title','Modificar | Modificar')

@section('body')

    <div style="text-align: center; font-size: 60px; border: 1px solid #020000;">
        Modificar
    </div>


    <table align="center" border="1">
        <thead>
        <tr>
            <th>ID</th>
            <th>Nombre empresa</th>
            <th>Nombre planta</th>
            <th> </th>
        </tr>
        </thead>
        <tbody>
            @foreach($empresas as $empresa)
                <tr>
                    <td>{{$empresa->id}}</td>
                    <td>{{$empresa->nombre}}</td>
                    <td>{{$empresa->planta}}</td>
                    <td><a href = 'modificar/variables/{{ $empresa->id }}'>Modificar</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <p align = "center"> <input type="button" onclick="location.href='/empresa';" value="Retroceder" /></p>

@endsection