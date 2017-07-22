<html>

<head>
    <title>Nº Solicitud de trabajo| Editar</title>
</head>

<body>
<form action = "/editarNumSolicitudTrab/<?php echo $documentos[0]->codigoDoc; ?>" method = "post">
    <input type = "hidden" name = "_token" value = "<?php echo csrf_token() ; ?>">

    <table>
        <tr>
            <td>Número solicitud de trabajo</td>
            <td>
                <input type = 'text' name = 'nuevo'
                       value = '<?php echo$documentos[0]->numSolicitudTrab; ?>'/>
            </td>
        </tr>
        <tr>
            <td colspan = '2'>
                <input type = 'submit' value = "Actualizar Nº Solicitud de trabajo" />
            </td>
        </tr>
    </table>

</form>

</body>
</html>
