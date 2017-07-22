<html>

<head>
    <title>Solicitud de trabajo| Guardar</title>
</head>

<div style="text-align: center; font-size: 60px; border: 1px solid #020000;">
    Almacenar documento
</div>

<body>

<p align="center">En esta sección usted podrá almacenar su documento.</p>


<?php
echo Form::open(array('url' => '/subirSolicitudTrabajo','files'=>'true') );
echo 'Selecciona la solicitud de trabajo';
echo Form::file('image') ;
echo Form::submit('Guardar') ;
echo Form::close() ;
?>


</body>

</html>