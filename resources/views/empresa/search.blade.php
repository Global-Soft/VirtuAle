@extends('base');

@section('title','Empresa | Buscar')

@section('body')

    <div style="text-align: center; font-size: 60px; border: 1px solid #020000;">
        Buscar
    </div>

    <p align="center">Usted desea realizar la busqueda con:</p>

    {{Form::open(array('url' => 'empresa/buscar/nombre'))}}
    <div class="form-group">
        <label for="empresa">Nombre</label>
        <input type="text" class="form-control" name='nombre' placeholder="Nombre">
        {{Form::submit('Buscar', array('class' => 'btn btn-default'))}}
        {{Form::close()}}
    </div>

    {{Form::open(array('url' => 'empresa/buscar/planta'))}}
    <div class="form-group">
        <label for="empresa">Planta</label>
        <input type="text" class="form-control" name='planta' placeholder="Planta">
        {{Form::submit('Buscar', array('class' => 'btn btn-default'))}}
        {{Form::close()}}
    </div>


    <p align = "center"> <input type="button" onclick="location.href='/empresa';" value="Retroceder" /></p>

@endsection