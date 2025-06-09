<?php

/** Creación de constantes **/
define('TEMPLATES_URL', __DIR__ . '/template');
define('FUNCIONES_URL', __DIR__ . '/funciones.php'); // <- agregada la barra faltante

/**
 * Incluir un archivo de plantilla
 */
function incluirTemplate(string $nombre, bool $inicio = false)
{
    include TEMPLATES_URL . "/{$nombre}.php";
}

/**
 * Función para depurar cualquier variable o contenido
 */
function debuguear($contenido)
{
    echo "<pre>";
    var_dump($contenido);
    echo "</pre>";
    exit;
}

/**
 * Función para guardar una imagen en una subcarpeta dentro de /src/img/
 *
 * @param string $carpeta Nombre de la subcarpeta dentro de /src/img/ (ej. 'componentes')
 * @param array $imagen Datos del archivo $_FILES['imagen']
 * @return string Nombre único del archivo guardado
 */
function guardarImagen($carpeta, $imagen): string
{
    // Ruta absoluta hacia la carpeta de imágenes
    $carpetaImagenes = __DIR__ . "/src/img/{$carpeta}/";

    // Si no existe la carpeta, crearla con permisos adecuados
    if (!is_dir($carpetaImagenes)) {
        mkdir($carpetaImagenes, 0755, true); // true: crea carpetas recursivamente
    }

    // Validar el tipo de imagen permitida
    $tiposPermitidos = ['image/jpeg', 'image/png'];
    if (!in_array($imagen['type'], $tiposPermitidos)) {
        die('❌ Tipo de imagen no válido. Solo se permiten archivos JPG y PNG.');
    }

    // Validar tamaño máximo (5MB)
    $tamanioMaximo = 5 * 1024 * 1024;
    if ($imagen['size'] > $tamanioMaximo) {
        die('❌ La imagen supera el tamaño máximo de 5 MB.');
    }

    // Obtener la extensión original
    $extension = pathinfo($imagen['name'], PATHINFO_EXTENSION);

    // Generar nombre único
    $nombreImagen = md5(uniqid(rand(), true)) . '.' . $extension;

    // Mover el archivo a la carpeta final
    $rutaDestino = $carpetaImagenes . $nombreImagen;
    move_uploaded_file($imagen['tmp_name'], $rutaDestino);

    return $nombreImagen;
}
