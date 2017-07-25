@extends('base');

@section('title','Empresa | Nombre')

@section('body')

    <h1>Nombre empresa</h1>

<form action = "<?php echo $empresas[0]->id; ?>" method = "post">
    <input type = "hidden" name = "_token" value = "<?php echo csrf_token() ; ?>">

    <table>
        <tr>
            <td>Nombre empresa</td>
            <td>
                <input type = 'text' name = 'nuevo'
                       value = '<?php echo$empresas[0]->nombre; ?>'/>
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