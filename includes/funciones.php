<?php

/** Creacion de constantes **/
define('TEMPLATES_URL', __DIR__ . '/template');
define('FUNCIONES_URL', __DIR__ . 'funciones.php');

function incluirTemplate(string $nombre)
{
    include TEMPLATES_URL . "/{$nombre}.php";
}

//unicamente uso para visualizar las variables, arreglos, etc...
function debuguear($contenido)
{
    echo "<pre>";
    var_dump($contenido);
    echo "</pre>";
    exit;
}