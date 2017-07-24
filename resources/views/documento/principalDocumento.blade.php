@extends('base')

@section('title','Documento')
@section('body')

<!--<html>

<head>
    <title>Documento | Principal</title>
</head>


<body>-->
<div style="text-align: center; font-size: 60px; border: 1px solid #020000;">
    Documentos
</div>
<!--<form action = "/principalDocumento" method = "post">-->
    <p align="center">En esta sección usted podrá acceder a distintas opciones relacionadas con los documentos.</p>

    <p align = "center"> <input type="button" onclick="location.href='/insertarDocumento';" value="Crear nuevo documento" /></p>

    <p align = "center"> <input type="button" onclick="location.href='/vistaDocumentos';" value="Vizualizar documentos" /></p>

    <p align = "center"> <input type="button" onclick="location.href='/seleccionarEditarDocumento';" value="Modificar/Actualizar documentos" /></p>


</form>
@endsection

<!--</body>

</html>-->