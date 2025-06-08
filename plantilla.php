<?php
require 'includes/app.php';

incluirTemplate('inicio');
// incluirTemplate('header');
// incluirTemplate('bkCuadro');
?>

<main>
    <div class="separar-cuerpo no-index partes-compu">

        <div class="btn-home">
            <a href="partes.php"><button class="btn">Volver a las partes</button></a>
        </div>

        <div class="contenedor-componente">
            <div class="encabezado-componente">

                <div class="titulo">
                    <h2>Unidad Gráfica de Procesamiento [GPU]</h2>
                    <p>Encargado de procesar todo lo que tenga que ver con gráficos o dibujitos</p>
                </div>

                <div class="imagen-componente">
                    <img src="/build/img/pc/gpu.png" alt="img-componente">
                </div>
            </div> <!--.encabezado-componente-->

            <div class="funcionalidad-componente">
                <!-- titulo -->
                <h3>Para que sirve la <span>GPU</span></h3>
                <!-- definicion -->
                <p>La GPU (Graphics Processing Unit), o Unidad de Procesamiento Gráfico, es un circuito electrónico especializado diseñado para manipular y alterar la memoria rápidamente con el fin de acelerar la creación de imágenes en un búfer de cuadros, que se enviarán a una pantalla. En pocas palabras, si la CPU es el "cerebro" que piensa en todas las tareas, la GPU es el "artista visual" o el "pintor rápido" de tu computadora, encargado de dibujar y renderizar todo lo que ves en tu monitor. Su rol es crucial para la experiencia gráfica, desde la interfaz de tu sistema operativo hasta los complejos mundos de los videojuegos y las visualizaciones científicas</p>
                <!-- analogia -->
                <p>La importancia de la GPU en una computadora moderna va mucho más allá de simplemente "mostrar imágenes". Se ha convertido en un componente vital para una amplia gama de aplicaciones, desde el entretenimiento hasta la investigación científica y la inteligencia artificial.</p>

                <h3>Cómo trabaja la <span>GPU</span></h3>
                <p>La función principal de la GPU es el renderizado de gráficos. Esto implica tomar datos crudos (como modelos 3D, texturas, información de iluminación) y transformarlos en los píxeles que componen la imagen final en tu pantalla. </p>

            </div><!--.funcionalidad-componente-->

            <div class="historia">
                <h3>Historia y <span>Evolución</span></h3>
                <ul>
                    <li><span>Años 80:</span> Las primeras tarjetas gráficas solo procesaban texto y gráficos 2D muy básicos.</li>
                    <li><span>Años 90:</span> Surgieron los primeros aceleradores 2D/3D que añadían funcionalidad de hardware para tareas como el sombreado y la textura. </li>
                    <li><span>Finales de los 90 - Principios de los 2000:</span> NVIDIA (con la GeForce 256 en 1999) acuñó el término "GPU" y se enfocó en integrar todos los procesadores gráficos en un solo chip. Esto marcó el comienzo de la era moderna de las GPUs programables.</li>
                    <li><span>Años 2000 en adelante:</span> Las GPUs continuaron evolucionando, añadiendo soporte para shaders programables (lo que permitió gráficos más complejos y realistas), computación de propósito general (GPGPU, que abrió la puerta a la IA y la computación científica), y tecnologías como el Ray Tracing en tiempo real. La integración de la GPU en la CPU (gráficos integrados) también se volvió común para computadoras más básicas.</li>
                </ul>
            </div><!--.historia-->

            <div class="contendor-tipos">
                <h3>Tipos de <span>GPU</span></h3>

                <div class="tipos">

                    <div class="tipo">
                        <h4>GPU-integrada</h4>
                        <p>Son parte del mismo chip que la CPU. Comparten la RAM del sistema con la CPU. Comunes en laptops, ultrabooks, PCs de oficina y sistemas de bajo costo. Son suficientes para tareas diarias, navegación web, reproducción de video y juegos ligeros.</p>
                    </div>

                    <div class="tipo">
                        <h4>GPU-dedicada</h4>
                        <p>Son una tarjeta de expansión independiente que se conecta a la placa madre. Tienen su propia VRAM dedicada. Esenciales para gaming de alto rendimiento, diseño gráfico profesional, edición de video 4K, modelado 3D, machine learning y otras tareas computacionalmente intensivas.</p>
                    </div>
                </div>
            </div>

            <div class="contenedor-fabricantes">
                <h3>Fabricantes de la <span>GPU</span></h3>
                <div class="fabricantes">

                    <div class="fabricante">
                        <img src="/build/img/intel.png" alt="">
                        <h4>Intel</h4>
                    </div>

                    <div class="fabricante">
                        <img src="/build/img/AMD.png" alt="">
                        <h4>AMD</h4>
                    </div>

                    <div class="fabricante">
                        <img src="/build/img/Nvidia.png" alt="">
                        <h4>Nvidia</h4>
                    </div>
                </div>
            </div>

        </div><!--.contenedor-componente-->

    </div>
</main>

<?php incluirTemplate('footer'); ?>