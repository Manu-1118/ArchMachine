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
            <h2>AQUITECTURA X64 <span>POTENCIA </span>PARA LA <span>INFORMÁTICA</span> MODERNA</h2>
            <p>Una mirada a la arquitectura x64, su evolución, componentes clave, modos de operación, ventajas y desventajas.</p>
        </div>

        <div class="contenedor-imagen">
            <p>X64</p>
            <img class="imagen" src="/build/img/icons/cpu.svg" alt="Procesador">
        </div>

    </div>

</div>

<main>
    <h3 class="h3-arq">HISTORIA DE LOS <span>PROCESADORES X64</span></h3>
    <div class="linea-tiempo">

        <div class="tiempo">
            <div class="contenido">
                <h3>AMD Athlon 64</h3>
                <p>2003</p>
            </div>
            <p>Primer procesador 64 bits compatible con x86. Introdujo la arquitectura AMD64</p>
        </div> <!--.fin tiempo-->   

        <div class="tiempo">
            <div class="contenido">
                <h3>Intel Pentium 4</h3>
                <p>2004</p>
            </div>
            <p>Primer CPU Intel en soportar x86-64 bajo el nombre EM64T</p>
        </div> <!--.fin tiempo-->

        <div class="tiempo">
            <div class="contenido">
                <h3>AMD Opteron</h3>
                <p>2003</p>
            </div>
            <p>Versión para servidores basada en AMD64. Alta eficiencia y soporte para más memoria RAM</p>
        </div> <!--.fin tiempo-->

        <div class="tiempo">
            <div class="contenido">
                <h3>Intel Core 2 Duo</h3>
                <p>2006</p>
            </div>
            <p>Popularizó el uso de 64 bits en computadoras personales con mejor rendimiento por watt</p>
        </div> <!--.fin tiempo-->

        <div class="tiempo">
            <div class="contenido">
                <h3>AMD Ryzen</h3>
                <p>2017</p>
            </div>
            <p>Redefinió el rendimiento multinúcleo en x64, ofreciendo gran potencia a precios competitivos</p>
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
            <p>Administra y coordina el flujo de instrucciones y datos dentro del procesado</p>
        </div>

        <div class="componente">
            <div class="icono">
                <img src="/build/img/icons/math.svg" alt="Icono">
            </div>
            <h4>Unidad Aritmético-Lógica</h4>
            <p>Ejecuta operaciones matemáticas, lógicas y de comparación sobre datos de 64 bits</p>
        </div>

        <div class="componente">
            <div class="icono">
                <img src="/build/img/icons/math.svg" alt="Icono">
            </div>
            <h4>Registros de Propósito General</h4>
            <p>Registros extendidos como RAX, RBX permiten operaciones más rápidas y complejas</p>
        </div>

        <div class="componente">
            <div class="icono">
                <img src="/build/img/icons/math.svg" alt="Icono">
            </div>
            <h4>bus de datos y direcciones</h4>
            <p>Transporta datos e instrucciones entre CPU, RAM y dispositivos, capaz de direccionar hasta 256 TB</p>
        </div>

    </div>
</section>

<section class="conclusiones">

    <div class="contenedor-modos-operacion">
        <h3 class="h3-arq">Modos de operación</h3>

        <div class="modos-operacion">
            <div class="modo">
                <h4>Modo de Compatibilidad</h4>
                <p>Permite ejecutar software de 32 bits dentro de un sistema operativo de 64 bits</p>
            </div>

            <div class="modo">
                <h4>Modo Largo</h4>
                <p>Modo principal de 64 bits. Ofrece acceso a registros extendidos y direccionamiento de memoria mucho más amplio</p>
            </div>
        </div>

    </div>

    <div class="contenedor-ventajas-desventajas">

        <h3 class="h3-arq">Ventajas y Desventajas</h3>

        <div class="ventajas-desventajas">
            <div class="ven-des">
                <h4>Ventajas mas importantes</h4>
                <ul>
                    <li>Acceso a más de 4 GB de RAM</li>
                    <li>Mayor cantidad y tamaño de registros</li>
                    <li>Mejor rendimiento en aplicaciones intensivas</li>
                    <li>Ejecución de código x86 más optimizada</li>
                </ul>
            </div>

            <div class="ven-des">
                <h4>Desventajas mas importantes</h4>
                <ul>
                    <li>Mayor consumo de memoria por instrucciones más grandes</li>
                    <li>No compatible con software antiguo de 16 bits</li>
                    <li>Algunos sistemas embebidos no aprovechan sus beneficios</li>
                    <li>Mayor complejidad en diseño de sistemas operativos y compiladores
                    </li>
                </ul>
            </div>
        </div>
    </div>

</section>

<?php incluirTemplate('footer'); ?>