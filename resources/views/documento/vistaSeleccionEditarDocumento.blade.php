<html>

<head>
    <title>Documento | Seleccionar</title>
</head>

<div>

<div style="text-align: center; font-size: 60px; border: 1px solid #020000;">
    Selección para editar un documento
</div>

<p align="center">Para editar un documento haga clic en "Hazme clic"</p>

<table border = 1 align = "center" style="width:100%">
    <tr>
        <td>Codigo</td>
        <td>Descripción</td>
        <td>Nº Solicitud de trabajo</td>
        <td>Nº Cotización</td>
        <td>Nº Adjudicación</td>
        <td>Nº Informe técnico</td>
        <td>Nº GES</td>
        <td>Nº Factura</td>
        <td>Editar fila</td>
    </tr>
    @foreach ($documentos as $documento)
    <tr>
        <td>{{ $documento->codigoDoc }}</td>
        <td>{{ $documento->descripcion }}</td>
        <td>{{ $documento->numSolicitudTrab }}</td>
        <td>{{ $documento->numCotizacion }}</td>
        <td>{{ $documento->numAdjudicacion }}</td>
        <td>{{ $documento->numInformeTec }}</td>
        <td>{{ $documento->numGES }}</td>
        <td>{{ $documento->numFactura }}</td>
        <td><a href = 'seleccionarVariableEditar/{{ $documento->codigoDoc }}'>Hazme clic</a></td>
    </tr>
    @endforeach
</table>

    <p align = "center"> <input type="button" onclick="location.href='/principalDocumento';" value="Retroceder" /></p>

</body>
</html>