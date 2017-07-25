@extends('base');

@section('title','Empresa | Planta ')

@section('body')

    <h1>Nombre planta</h1>

<form action = "<?php echo $empresas[0]->id; ?>" method = "post">
    <input type = "hidden" name = "_token" value = "<?php echo csrf_token() ; ?>">

    <table>
        <tr>
            <td>Nombre planta</td>
            <td>
                <input type = 'text' name = 'nuevo'
                       value = '<?php echo$empresas[0]->planta; ?>'/>
            </td>
        </tr>
        <tr>
            <td colspan = '2'>
                <input type = 'submit' value = "Actualizar" />
            </td>
        </tr>
    </table>

</form>

@endsection