<?php
require 'includes/app.php';
$db = conectarDB();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // debuguear($_FILES);
    // Obtener los valores del POST y escapar las cadenas de texto para evitar inyecciones sql
    $nombre = mysqli_real_escape_string($db, $_POST['txtNombre']);
    $componente = mysqli_real_escape_string($db, $_POST['txtComponente']);
    $descripcion = mysqli_real_escape_string($db, $_POST['descripcion']);

    // asignacion de atributos de la variable $_FILES
    $imagen = $_FILES['imagen'];

    // si un campo esta vacio, mandar error
    if (!$nombre || !$componente || !$descripcion) {
        $errores[] = "Favor rellene todos los campos y con su formato correspondiente";
    }

    // validar que se suba una imagen
    if (!$imagen['name'] || $imagen['error']) {
        $errores[] = "La imagen es obligatoria";
    }

    //validar el tamaño de la imagen (1mb max)
    if ($imagen['size'] > (1000 * 1000)) {
        $errores[] = "La imagen es muy pesada";
    }

    // si no hay errores hacer el proceso de insercion
    if (empty($errores)) {


        $nombre_imagen = guardarImagen('componentes', $imagen); // guardar imagen (ver funcion en 'funciones.php')

        //consulta para insertar el query (modificar segun como esta en bd)
        $insertar_producto = "INSERT INTO Componente (nombre, componente, descripcion, imagen) VALUES ('$nombre', '$componente', '$descripcion', '$nombre_imagen');";
        $resultado_insertar = mysqli_query($db, $insertar_producto); // insertar consulta en bd
    }
}
incluirTemplate('inicio');
?>

<main>
    <form method="POST" class="formulario" enctype="multipart/form-data">
        <fieldset>
            <legend>Agregar Info computadora</legend>

            <label for="txtNombre">Nombre del componente</label>
            <input type="text" name="txtNombre" autocomplete="off" placeholder="Nombre de usuario" id="txtNombre" value="<?php echo $nombre; ?>">

            <label for="txtComponente">Tipo (Componente/periferico)</label>
            <input type="text" name="txtApellido" autocomplete="off" placeholder="Nombre de usuario" id="txtApellido" value="<?php echo $apellido; ?>">

            <label for="imagen">Imagen:</label>
            <input type="file" autocomplete="off" name="imagen" id="imagen" accept="image/jpeg, image/png">

            <label for="descripcion">Descripción :</label>
            <textarea type="text" id="descripcion" name="descripcion"></textarea>

        </fieldset>

        <div class="alinear-derecha">

            <a class="btn-cancelar" href="/">
                <span>Cancelar</span>
            </a>

            <input type="submit" value="Agregar" class="btn-cancelar">

        </div>

    </form>
</main>

<?php incluirTemplate('footer'); ?>