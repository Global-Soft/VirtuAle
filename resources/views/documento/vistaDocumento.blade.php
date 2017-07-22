<html>

<head>
    <title>Documento | Visualizar</title>
</head>

<div>

<div style="text-align: center; font-size: 60px; border: 1px solid #020000;">
    Documentos ingresados
</div>

<p align="center">Los documentos que no han sido ingresados muestran un vacio o un 0 en sus valores</p>

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
    </tr>
    @endforeach
</table>

    <p align = "center"> <input type="button" onclick="location.href='/principalDocumento';" value="Retroceder" /></p>

</body>
</html>