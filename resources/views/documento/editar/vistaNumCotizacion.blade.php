<html>

<head>
    <title>Cotización | Editar</title>
</head>

<body>
<form action = "/editarNumCotizacion/<?php echo $documentos[0]->codigoDoc; ?>" method = "post">
    <input type = "hidden" name = "_token" value = "<?php echo csrf_token() ; ?>">

    <table>
        <tr>
            <td>Cotización</td>
            <td>
                <input type = 'text' name = 'nuevo'
                       value = '<?php echo$documentos[0]->numCotizacion; ?>'/>
            </td>
        </tr>
        <tr>
            <td colspan = '2'>
                <input type = 'submit' value = "Actualizar Nº Cotización" />
            </td>
        </tr>
    </table>

</form>

</body>
</html>
