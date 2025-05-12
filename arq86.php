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
            <p>Sed assumenda harum maxime reprehenderit qui quia. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sed assumenda harum maxime reprehenderit qui quia.</p>
        </div>

        <div class="contenedor-imagen">
            <img class="imagen" src="/build/img/icons/cpu.svg" alt="Procesador">
        </div>

    </div>

</div>

<main>
    <h3 class="h3-arq">HISTORIA DE LOS PROCESADORES X86</h3>
    <div class="linea-tiempo">

        <div class="tiempo">
            <div class="contenido">
                <p>Nombre del chip</p>
                <p>año lanzado</p>
            </div>
            <p>Breve descripcion de esa fecha</p>
        </div> <!--.fin tiempo-->

        <div class="tiempo">
            <div class="contenido">
                <p>Nombre del chip</p>
                <p>año lanzado</p>
            </div>
            <p>Breve descripcion de esa fecha</p>
        </div> <!--.fin tiempo-->

        <div class="tiempo">
            <div class="contenido">
                <p>Nombre del chip</p>
                <p>año lanzado</p>
            </div>
            <p>Breve descripcion de esa fecha</p>
        </div> <!--.fin tiempo-->

        <div class="tiempo">
            <div class="contenido">
                <p>Nombre del chip</p>
                <p>año lanzado</p>
            </div>
            <p>Breve descripcion de esa fecha</p>
        </div> <!--.fin tiempo-->

        <div class="tiempo">
            <div class="contenido">
                <p>Nombre del chip</p>
                <p>año lanzado</p>
            </div>
            <p>Breve descripcion de esa fecha</p>
        </div> <!--.fin tiempo-->
    </div>
</main>

<section class="componentes-claves">
    <h3 class="h3-arq">COMPONENTES CLAVE</h3>

    <div class="contenedor-componentes">

        <div class="componente">
            <div class="icono">
                <img src="/build/img/icons/math.svg" alt="Icono">
            </div>
            <h4>Titulo componente</h4>
            <p>Breve descripcion del componente</p>
        </div>

        <div class="componente">
            <div class="icono">
                <img src="/build/img/icons/math.svg" alt="Icono">
            </div>
            <h4>Titulo componente</h4>
            <p>Breve descripcion del componente</p>
        </div>

        <div class="componente">
            <div class="icono">
                <img src="/build/img/icons/math.svg" alt="Icono">
            </div>
            <h4>Titulo componente</h4>
            <p>Breve descripcion del componente</p>
        </div>

        <div class="componente">
            <div class="icono">
                <img src="/build/img/icons/math.svg" alt="Icono">
            </div>
            <h4>Titulo componente</h4>
            <p>Breve descripcion del componente</p>
        </div>

    </div>
</section>

<section class="conclusiones">

    <div class="contenedor-modos-operacion">
        <h3 class="h3-arq">Modos de operación</h3>

        <div class="modos-operacion">
            <div class="modo">
                <h4>Titulo del modo</h4>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Deserunt aspernatur dignissimos distinctio nisi ipsam vel rem nulla nostrum id unde.</p>
            </div>

            <div class="modo">
                <h4>Titulo del modo</h4>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Deserunt aspernatur dignissimos distinctio nisi ipsam vel rem nulla nostrum id unde.</p>
            </div>
        </div>

    </div>

    <div class="contenedor-ventajas-desventajas">

        <h3 class="h3-arq">Ventajas y Desventajas</h3>

        <div class="ventajas-desventajas">
            <div class="ven-des">
                <h4>Ventajas mas importantes</h4>
                <ul>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                </ul>
            </div>

            <div class="ven-des">
                <h4>Desventajas mas importantes</h4>
                <ul>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                </ul>
            </div>
        </div>
    </div>

</section>

<?php incluirTemplate('footer'); ?>