<?php

function conexionBD ()
{

    $archivoConfig = "configuracion.ini";
    $configuracion = parse_ini_file($archivoConfig, true);

    $host = $configuracion["host"];
    $usuario = $configuracion["usuario"];
    $pw = $configuracion["password"];
    $bd = $configuracion["bd"];

     return new mysqli($host, $usuario, $pw, $bd);

}

