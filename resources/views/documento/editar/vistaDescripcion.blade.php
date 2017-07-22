<html>

<head>
    <title>Descripción | Editar</title>
</head>

<body>
<form action = "/editarDescripcion/<?php echo $documentos[0]->codigoDoc; ?>" method = "post">
    <input type = "hidden" name = "_token" value = "<?php echo csrf_token() ; ?>">

    <table>
        <tr>
            <td>Descrición</td>
            <td>
                <input type = 'text' name = 'nuevo'
                       value = '<?php echo$documentos[0]->descripcion; ?>'/>
            </td>
        </tr>
        <tr>
            <td colspan = '2'>
                <input type = 'submit' value = "Actualizar descripción" />
            </td>
        </tr>
    </table>

</form>

</body>
</html>
