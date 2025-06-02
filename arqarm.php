<?php
require 'includes/app.php';

incluirTemplate('inicio');
// incluirTemplate('header');
?>
<div class="separar-cuerpo no-index arquitecturas">

    <div class="btn-home">
        <a href="/"><button class="btn">Volver al inicio</button></a>
    </div>

    <div class="titulo-arquitectura">

        <div class="contenedor-titulo">
            <h2>AQUITECTURA ARM <span>LA BASE </span>DE LOS <span>DISPOSITIVOS</span> MÓVILES</h2>
            <p>Una mirada a la arquitectura ARM, su evolución, componentes clave, modos de operación, ventajas y desventajas.</p>
        </div>

        <div class="contenedor-imagen">
            <p>ARM</p>
            <img class="imagen" src="/build/img/icons/cpu.svg" alt="Procesador">
        </div>

    </div>

</div>

<main>
    <h3 class="h3-arq">HISTORIA DE LOS <span>PROCESADORES ARM</span></h3>
    <div class="linea-tiempo">

        <div class="tiempo">
            <div class="contenido">
                <h3>ARM1</h3>
                <p>1985</p>
            </div>
            <p>Primer prototipo funcional de ARM, desarrollado por Acorn Computers. Muy eficiente para su época</p>
        </div> <!--.fin tiempo-->   

        <div class="tiempo">
            <div class="contenido">
                <h3>ARM7TDMI</h3>
                <p>1994</p>
            </div>
            <p>Uno de los chips ARM más utilizados en dispositivos embebidos. Compatible con Thumb (16 bits)</p>
        </div> <!--.fin tiempo-->

        <div class="tiempo">
            <div class="contenido">
                <h3>ARM Cortex-A8</h3>
                <p>2005</p>
            </div>
            <p> Parte de la serie Cortex-A, usado en smartphones y tablets. Mejoró rendimiento y multimedia</p>
        </div> <!--.fin tiempo-->

        <div class="tiempo">
            <div class="contenido">
                <h3>Apple A7</h3>
                <p>2013</p>
            </div>
            <p>Primer procesador ARM de 64 bits para móviles. Usado en el iPhone 5s, marcó un antes y un después</p>
        </div> <!--.fin tiempo-->

        <div class="tiempo">
            <div class="contenido">
                <h3>Apple M1</h3>
                <p>2020</p>
            </div>
            <p>Chip ARM para computadoras Mac. Alto rendimiento y eficiencia energética, rompió con Intel en Macs</p>
        </div> <!--.fin tiempo-->
    </div>
</main>

<section class="componentes-claves">
    <h3 class="h3-arq">COMPONENTES <span>CLAVE</span></h3>

    <div class="contenedor-componentes">

        <div class="componente">
            <div class="icono">
                <img src="/build/img/icons/math.svg" alt="Icono">
            </div>
            <h4>Unidad de Control</h4>
            <p>Dirige la ejecución de instrucciones con un diseño eficiente y simplificado, ideal para bajo consumo energético</p>
        </div>

        <div class="componente">
            <div class="icono">
                <img src="/build/img/icons/math.svg" alt="Icono">
            </div>
            <h4> Unidad Aritmético-Lógica</h4>
            <p>Realiza operaciones básicas de cálculo y lógica, optimizada para velocidad y eficiencia</p>
        </div>

        <div class="componente">
            <div class="icono">
                <img src="/build/img/icons/math.svg" alt="Icono">
            </div>
            <h4>Registros de Propósito General</h4>
            <p>Conjunto de 16 a 32 registro, todos de propósito general, lo que simplifica la arquitectura y mejora la velocidad.</p>
        </div>

        <div class="componente">
            <div class="icono">
                <img src="/build/img/icons/math.svg" alt="Icono">
            </div>
            <h4>Bus de Datos y Direcciones</h4>
            <p>Permite el intercambio de datos entre la CPU, la memoria y periféricos</p>
        </div>

    </div>
</section>

<section class="conclusiones">

    <div class="contenedor-modos-operacion">
        <h3 class="h3-arq">Modos de operación</h3>

        <div class="modos-operacion">
            <div class="modo">
                <h4>Modo Usuario</h4>
                <p>Modo normal de ejecución de aplicaciones, sin privilegios sobre el hardware</p>
            </div>

            <div class="modo">
                <h4>Modo Supervisor</h4>
                <p>Se accede a este modo mediante llamadas al sistema; permite control del hardware con privilegios elevados</p>
            </div>
        </div>

    </div>

    <div class="contenedor-ventajas-desventajas">

        <h3 class="h3-arq">Ventajas y Desventajas</h3>

        <div class="ventajas-desventajas">
            <div class="ven-des">
                <h4>Ventajas mas importantes</h4>
                <ul>
                    <li>Bajo consumo de energía, ideal para dispositivos móviles y embebidos</li>
                    <li>Arquitectura RISC: instrucciones simples y rápidas</li>
                    <li>Escalable para múltiples núcleos y configuraciones</li>
                    <li>Gran adopción en el mercado móvil y IoT</li>
                </ul>
            </div>

            <div class="ven-des">
                <h4>Desventajas mas importantes</h4>
                <ul>
                    <li>Menor compatibilidad con software de escritorio tradicional</li>
                    <li>Peor rendimiento en cargas de trabajo pesadas como servidores</li>
                    <li>Fragmentación entre fabricantes y versiones</li>
                    <li>Optimización necesaria en compilación específica para obtener el mejor rendimiento</li>
                </ul>
            </div>
        </div>
    </div>

</section>

<?php incluirTemplate('footer'); ?>