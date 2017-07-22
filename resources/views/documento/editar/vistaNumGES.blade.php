<html>

<head>
    <title>Nº GES| Editar</title>
</head>

<body>
<form action = "/editarNumGES/<?php echo $documentos[0]->codigoDoc; ?>" method = "post">
    <input type = "hidden" name = "_token" value = "<?php echo csrf_token() ; ?>">

    <table>
        <tr>
            <td>Número GES</td>
            <td>
                <input type = 'text' name = 'nuevo'
                       value = '<?php echo$documentos[0]->numGES; ?>'/>
            </td>
        </tr>
        <tr>
            <td colspan = '2'>
                <input type = 'submit' value = "Actualizar Nº GES" />
            </td>
        </tr>
    </table>

</form>

</body>
</html>
