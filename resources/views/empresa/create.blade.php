@extends('base');

@section('title','Crear')

@section('body')

    <div style="text-align: center; font-size: 60px; border: 1px solid #020000;">
        Crear
    </div>

    {{Form::open(array('url' => 'empresa/guardar'))}}
    <div class="form-group">
        <label for="empresa">Nombre empresa</label>
        <input type="text" class="form-control" name='empresa' placeholder="Empresa">
    </div>
    <div class="form-group">
        <label for="planta">Nombre planta</label>
        <input type="text" class="form-control" name='planta' placeholder="Planta">
    </div>
    {{Form::submit('Guardar', array('class' => 'btn btn-default'))}}

    {{Form::close()}}

    <p align = "center"> <input type="button" onclick="location.href='/empresa';" value="Retroceder" /></p>

@endsection