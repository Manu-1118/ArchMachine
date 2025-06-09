<?php
function conectarDB(): mysqli
{
    $host = 'mainline.proxy.rlwy.net';
    $puerto = 38320;
    $usuario = 'root';
    $contrasena = 'ERzEuAjmWDfPLVLabgUNnSqMqMzlYsKa';
    $base_de_datos = 'railway';

    $db = mysqli_connect($host, $usuario, $contrasena, $base_de_datos, $puerto);

    if (!$db) {
        echo 'Error: [No se pudo conectar con la base de datos]';
        exit;
    }   

    return $db;
}
