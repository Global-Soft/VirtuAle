<?php

function formatear_fecha ($fecha)
{
    $fecha_array = explode('-', $fecha);
    return $fecha_array[2] . ' de ' . obtener_mes_string($fecha_array[1]) . ' de ' . $fecha_array[0];
}

function obtener_mes_string ($mes_numero)
{
    switch ($mes_numero) {
        case 1: return 'enero';
        case 2: return 'febrero';
        case 3: return 'marzo';
        case 4: return 'abril';
        case 5: return 'mayo';
        case 6: return 'junio';
        case 7: return 'julio';
        case 8: return 'agosto';
        case 9: return 'septiembre';
        case 10: return 'octubre';
        case 11: return 'noviembre';
        case 12: return 'diciembre';
    }
    return null;
}

function calcular_dv($numero)
{
    $i = 2;
    $suma = 0;
    foreach(array_reverse(str_split($numero)) as $v)
    {
        if($i==8)
            $i = 2;
        $suma += $v * $i;
        ++$i;
    }
    $dvr = 11 - ($suma % 11);
    if($dvr == 11) $dvr = 0;
    if($dvr == 10) $dvr = 'K';
    return $dvr;
}

function formatear_rut ($number) {
    return strrev(join('.', str_split(strrev($number), 3))) . '-' . calcular_dv($number);
}

function formatear_correlativo ($numero, $largo)
{
    while (strlen($numero) < $largo) {
        $numero = '0' . $numero;
    }
    return $numero;
}

function formatear_bytes($size, $precision = 2) {
    $base = log($size, 1024);
    $suffixes = array('', 'KB', 'MB', 'GB', 'TB');

    return round(pow(1024, $base - floor($base)), $precision) .' '. $suffixes[floor($base)];
}

function formatear_nombre($persona)
{
    return trim($persona->nombre . ' ' . $persona->apellido_paterno . ' ' . $persona->apellido_materno);
}

function formatear_telefono($numero)
{
    return '+56' . strrev(join(' ', str_split(strrev($numero), 4)));
}