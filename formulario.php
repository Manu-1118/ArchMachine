<?php
require 'includes/app.php';

$db = conectarDB();

$errores = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $nombre = mysqli_real_escape_string($db, $_POST['txtNombre'] ?? '');
    $componente = mysqli_real_escape_string($db, $_POST['txtComponente'] ?? '');
    $descripcion = mysqli_real_escape_string($db, $_POST['descripcion'] ?? '');
    $imagen = $_FILES['imagen'] ?? null;

    // Validaciones
    if (!$nombre || !$componente || !$descripcion) {
        $errores[] = "❌ Favor rellene todos los campos.";
    }

    if (!$imagen || !$imagen['name'] || $imagen['error']) {
        $errores[] = "❌ La imagen es obligatoria.";
    }

    if ($imagen && $imagen['size'] > (5 * 1024 * 1024)) { // 5MB
        $errores[] = "❌ La imagen es muy pesada. Máximo 5MB.";
    }

    if (empty($errores)) {
        // Guardar imagen en /src/img/componentes/
        $nombre_imagen = guardarImagen('componentes', $imagen);

        // Insertar en base de datos
        $query = "INSERT INTO Componente (nombre, componente, descripcion, imagen) 
                  VALUES ('$nombre', '$componente', '$descripcion', '$nombre_imagen')";

        $resultado_insertar = mysqli_query($db, $query);

        if ($resultado_insertar) {
            echo "<p>✅ Registro agregado correctamente.</p>";
        } else {
            echo "<p>❌ Error al insertar: " . mysqli_error($db) . "</p>";
        }
    }
}

incluirTemplate('inicio');
?>

<main>
    <?php if (!empty($errores)) : ?>
        <div class="errores">
            <?php foreach ($errores as $error) : ?>
                <p><?php echo $error; ?></p>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>

    <form method="POST" class="formulario" enctype="multipart/form-data">
        <fieldset>
            <legend>Agregar Info computadora</legend>

            <label for="txtNombre">Nombre del componente</label>
            <input
                type="text"
                name="txtNombre"
                id="txtNombre"
                autocomplete="off"
                placeholder="Nombre del componente"
                required>

            <label for="txtComponente">Tipo (Componente/periférico)</label>
            <select name="txtComponente" id="txtComponente" required>
                <option value="" disabled selected>-- Seleccione --</option>
                <option value="Componente">Componente</option>
                <option value="Periferico">Periférico</option>
            </select>

            <label for="imagen">Imagen:</label>
            <input
                type="file"
                name="imagen"
                id="imagen"
                accept="image/jpeg, image/png"
                required>

            <label for="descripcion">Descripción:</label>
            <textarea id="descripcion" name="descripcion" required></textarea>
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
