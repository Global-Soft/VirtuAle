@extends('base');

@section('title','Empresa')

@section('body')
    <div style="text-align: center; font-size: 60px; border: 1px solid #020000;">
        Empresa
    </div>
    <!--<form action = "/principalDocumento" method = "post">-->
    <p align="center">En esta sección usted podrá acceder a distintas opciones relacionadas con las empresas.</p>

    <p align = "center"> <input type="button" onclick="location.href='/empresa/crear';" value="Crear nueva empresa" /></p>

    <p align = "center"> <input type="button" onclick="location.href='/empresa/modificar';" value="Modificar empresa" /></p>

    <p align = "center"> <input type="button" onclick="location.href='/empresa/buscar';" value="Buscar empresa" /></p>

    <p align = "center"> <input type="button" onclick="location.href='/empresa/todas';" value="Visualizar empresa" /></p>


    </form>
@endsection