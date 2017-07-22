<html>

<head>
    <title>Nº Adjudicación| Editar</title>
</head>

<body>
<form action = "/editarNumAdjudicacion/<?php echo $documentos[0]->codigoDoc; ?>" method = "post">
    <input type = "hidden" name = "_token" value = "<?php echo csrf_token() ; ?>">

    <table>
        <tr>
            <td>Número adjudicación</td>
            <td>
                <input type = 'text' name = 'nuevo'
                       value = '<?php echo$documentos[0]->numAdjudicacion; ?>'/>
            </td>
        </tr>
        <tr>
            <td colspan = '2'>
                <input type = 'submit' value = "Actualizar Nº Adjudicacion" />
            </td>
        </tr>
    </table>

</form>

</body>
</html>
