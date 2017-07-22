<html>

<head>
    <title>Documento | Variables</title>
</head>

<div>

<div style="text-align: center; font-size: 60px; border: 1px solid #020000;">
    Variables del documento
</div>

<p align="center">Para editar un documento haga clic en "Editar"</p>

<table border = 1 align = "center">
    <tr>

        @foreach ($documentos as $documento)
        <td>Descripción</td>
        <td>{{ $documento->descripcion }}</td>
        <td><a href = '/editarDescripcion/{{ $documento->codigoDoc }}'>Editar</a></td>
        @endforeach
    </tr>
    <tr>
        @foreach ($documentos as $documento)
        <td>Nº Solicitud de trabajo</td>
        <td>{{ $documento->numSolicitudTrab }}</td>
        <td><a href = '/editarNumSolicitudTrab/{{ $documento->codigoDoc }}'>Editar</a></td>
        @endforeach
    </tr>
    <tr>
        @foreach ($documentos as $documento)
        <td>Nº Cotización</td>
        <td>{{ $documento->numCotizacion }}</td>
        <td><a href = '/editarNumCotizacion/{{ $documento->codigoDoc }}'>Editar</a></td>
        @endforeach
    </tr>
    <tr>
        @foreach ($documentos as $documento)
        <td>Nº Adjudicación</td>
        <td>{{ $documento->numAdjudicacion }}</td>
        <td><a href = '/editarNumAdjudicacion/{{ $documento->codigoDoc }}'>Editar</a></td>
        @endforeach
    </tr>
    <tr>
        @foreach ($documentos as $documento)
        <td>Nº Informe técnico</td>
        <td>{{ $documento->numInformeTec }}</td>
        <td><a href = '/editarNumInformeTec/{{ $documento->codigoDoc }}'>Editar</a></td>
        @endforeach
    </tr>
    <tr>
        @foreach ($documentos as $documento)
        <td>Nº GES</td>
        <td>{{ $documento->numGES }}</td>
        <td><a href = '/editarNumGES/{{ $documento->codigoDoc }}'>Editar</a></td>
        @endforeach
    </tr>
    <tr>
        @foreach ($documentos as $documento)
        <td>Nº Factura</td>
        <td>{{ $documento->numFactura }}</td>
        <td><a href = '/editarNumFactura/{{ $documento->codigoDoc }}'>Editar</a></td>
        @endforeach
    </tr>
</table>

    <p align = "center"> <input type="button" onclick="location.href='/seleccionarEditarDocumento';" value="Retroceder" /></p>

</body>
</html>