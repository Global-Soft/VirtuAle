<!DOCTYPE html>

<html>

<head>
    <title>Documento | Crear</title>
</head>

<body>
<div style="text-align: center; font-size: 60px; border: 1px solid #020000;">
    Ingreso de documento
</div>
<form action = "/crearDocumento" method = "post">
    <p align="center">Al añadir el documento usted crea un nuevo documento</p>
    <input type = "hidden" name = "_token" value = "<?php echo csrf_token() ; ?>">

    <table>
        <tr>
            <td>Descripción</td>
            <td><input type='text' name='desc' /></td>
        </tr>
        <tr>
            <td>Número solicitud de trabajo</td>
            <td><input type='text' name='nSolT' /></td>
        </tr>
        <!--<tr>
            <form_action = "uploading" method = "post" enctype = "multipart/form-data">
            //{{csrf_field()}}
            <td>Archivo relacionado</td>
            <td><input type= "file" name="archivoSolT" id= "archivoSolT"/></td>
        </tr>-->
        <tr>
            <td colspan = '3'>
                <input type = 'submit' value = "Añadir documento"/>
            </td>
        </tr>
    </table>

    <p align = "center"> <input type="button" onclick="location.href='/principalDocumento';" value="Retroceder" /></p>

</form>

</body>
</html>