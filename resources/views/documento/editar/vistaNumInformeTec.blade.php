<html>

<head>
    <title>Nº Informe técnico| Editar</title>
</head>

<body>
<form action = "/editarNumInformeTec/<?php echo $documentos[0]->codigoDoc; ?>" method = "post">
    <input type = "hidden" name = "_token" value = "<?php echo csrf_token() ; ?>">

    <table>
        <tr>
            <td>Número informe técnico</td>
            <td>
                <input type = 'text' name = 'nuevo'
                       value = '<?php echo$documentos[0]->numInformeTec; ?>'/>
            </td>
        </tr>
        <tr>
            <td colspan = '2'>
                <input type = 'submit' value = "Actualizar Nº Informe técnico" />
            </td>
        </tr>
    </table>

</form>

</body>
</html>
