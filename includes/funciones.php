<?php

/** Creacion de constantes **/
define('TEMPLATES_URL', __DIR__ . '/template');
define('FUNCIONES_URL', __DIR__ . 'funciones.php');

function incluirTemplate(string $nombre, bool $inicio = false)
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

// funcion para obtener la imagen subida y moverla a la carpeta indicada en el servidor
function guardarImagen($carpeta, $imagen): string
{
    // si la carpeta donde se guardara la imagen no existe, que se cree
    $carpetaImagenes = '/' . $carpeta . '/'; // ruta de la carpeta(raiz)

    // si no existe crear
    if (!is_dir($carpetaImagenes)) {
        mkdir($carpetaImagenes);
    }

    // generar nombre unico para cada imagen
    $nombreImagen = md5(uniqid(rand(), true)) . '.jpg';

    // guardar la imagen cargada en el servidor
    move_uploaded_file($imagen['tmp_name'], $carpetaImagenes . $nombreImagen);

    return $nombreImagen; //retornar nombre para usarlo en la insercion del query
}
