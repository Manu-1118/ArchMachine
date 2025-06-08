<?php

function conectarDB(): mysqli
{
    $db =   mysqli_connect('localhost', 'root', 'root', 'nombre de la base de datos');

    if (!$db) {
        echo 'Error: [No se pudo conectar con la base de datos]';
        exit;
    }

    return $db;
}
