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
            <h2>AQUITECTURA X86 <span>LA BASE </span>DE LA <span>COMPUTADORA</span> MODERNA</h2>
            <p>Una mirada a la arquitectura x86, su evolución, componentes clave, modos de operación, ventajas y desventajas.</p>
        </div>

        <div class="contenedor-imagen">
            <p>X86</p>
            <img class="imagen" src="/build/img/icons/cpu.svg" alt="Procesador">
        </div>

    </div>

</div>

<main>
    <h3 class="h3-arq">HISTORIA DE LOS <span>PROCESADORES X86</span></h3>
    <div class="linea-tiempo">

        <div class="tiempo">
            <div class="contenido">
                <h3> Intel 8086</h3>
                <p>1978</p>
            </div>
            <p> Primer procesador de 16 bits de Intel, base de la arquitectura x86</p>
        </div> <!--.fin tiempo-->   

        <div class="tiempo">
            <div class="contenido">
                <h3>Intel 80286</h3>
                <p>1982</p>
            </div>
            <p>Introdujo el modo protegido, permitiendo mejor manejo de memoria y multitarea</p>
        </div> <!--.fin tiempo-->

        <div class="tiempo">
            <div class="contenido">
                <h3>Intel 80386</h3>
                <p>1985</p>
            </div>
            <p>Primer x86 de 32 bits. Agregó paginación de memoria y multitarea avanzada</p>
        </div> <!--.fin tiempo-->

        <div class="tiempo">
            <div class="contenido">
                <h3>Intel Pentium</h3>
                <p>1993</p>
            </div>
            <p>Introdujo arquitectura superescalar, permitiendo ejecutar varias instrucciones por ciclo</p>
        </div> <!--.fin tiempo-->

        <div class="tiempo">
            <div class="contenido">
                <h3>Intel Core i7</h3>
                <p>2008</p>
            </div>
            <p>Integró controlador de memoria y tecnología HyperThreading mejorada. Modernizó x86-64</p>
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
            <h4>Unidad Aritmético-Lógica</h4>
            <p>Realiza operaciones matemáticas y lógicas básicas sobre los datos</p>
        </div>

        <div class="componente">
            <div class="icono">
                <img src="/build/img/icons/math.svg" alt="Icono">
            </div>
            <h4>Registros</h4>
            <p>Es la memoria interna del procesador utilizada para almacenar datos y direcciones temporalmente</p>
        </div>

        <div class="componente">
            <div class="icono">
                <img src="/build/img/icons/math.svg" alt="Icono">
            </div>
            <h4>Bus de datos y direcciones</h4>
            <p>Transporta datos e instrucciones entre el procesador, la memoria y otros componentes.</p>
        </div>

        <div class="componente">
            <div class="icono">
                <img src="/build/img/icons/math.svg" alt="Icono">
            </div>
            <h4>Unidad de Control</h4>
            <p>Realiza operaciones matemáticas y lógicas sobre los datos</p>
        </div>

    </div>
</section>

<section class="conclusiones">

    <div class="contenedor-modos-operacion">
        <h3 class="h3-arq">Modos de operación</h3>

        <div class="modos-operacion">
            <div class="modo">
                <h4>Modo Real</h4>
                <p>Permite acceso directo a memoria y dispositivos, sin protección. Utilizado en los primeros PCs</p>
            </div>

            <div class="modo">
                <h4>Modo Protegido</h4>
                <p>Introducido con el 80286. Permite multitarea, protección de memoria y segmentación avanzada</p>
            </div>
        </div>

    </div>

    <div class="contenedor-ventajas-desventajas">

        <h3 class="h3-arq">Ventajas y Desventajas</h3>

        <div class="ventajas-desventajas">
            <div class="ven-des">
                <h4>Ventajas más importantes</h4>
                <ul>
                    <li>Gran compatibilidad con software heredado</li>
                    <li>Arquitectura ampliamente adoptada</li>
                    <li>Soporte para múltiples modos de operación</li>
                    <li>Alto rendimiento en entornos de escritorio y servidores</li>
                </ul>
            </div>

            <div class="ven-des">
                <h4>Desventajas más importantes</h4>
                <ul>
                    <li>Más complejidad que arquitecturas RISC</li>
                    <li>Mayor consumo de energía</li>
                    <li>Difícil de escalar para sistemas embebidos pequeños</li>
                    <li>Ciclos de instrucción más largos en comparación con ARM</li>
                </ul>
            </div>
        </div>
    </div>

</section>

<?php incluirTemplate('footer'); ?>