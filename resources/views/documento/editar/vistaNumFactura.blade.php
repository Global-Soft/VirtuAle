<html>

<head>
    <title>Nº Factura| Editar</title>
</head>

<body>
<form action = "/editarNumFactura/<?php echo $documentos[0]->codigoDoc; ?>" method = "post">
    <input type = "hidden" name = "_token" value = "<?php echo csrf_token() ; ?>">

    <table>
        <tr>
            <td>Número factura</td>
            <td>
                <input type = 'text' name = 'nuevo'
                       value = '<?php echo$documentos[0]->numFactura; ?>'/>
            </td>
        </tr>
        <tr>
            <td colspan = '2'>
                <input type = 'submit' value = "Actualizar Nº Factura" />
            </td>
        </tr>
    </table>

</form>

</body>
</html>
