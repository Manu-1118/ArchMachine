<?php
require 'includes/app.php';
incluirTemplate('inicio');
?>

<section class="imagen-fondo-principal">
    <div class="separar-cuerpo">

        <?php incluirTemplate('header', true); ?>

        <main class="contenido seccion">
            <div class="titulo-pagina">
                <div class="titulos">
                    <h1>Arquitecturas de Máquinas I</h1>
                    <h2>ArchMachine</h2>
                </div>
            </div>
        </main><!--.main-->

        <div class="info-destacada">

            <div class="info">
                <div class="contendor-imagen">
                    <img src="/build/img/icons/info3.svg" alt="icono">
                </div>
                <div class="contenido-info">
                    <h3>Informativo</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                </div>
            </div> <!--.info-->

            <div class="info">
                <div class="contendor-imagen">
                    <img src="/build/img/icons/star2.svg" alt="icono">
                </div>
                <div class="contenido-info">
                    <h3>Conciso</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                </div>
            </div> <!--.info-->

            <div class="info">
                <div class="contendor-imagen">
                    <img src="/build/img/icons/rank2.svg" alt="icono">
                </div>
                <div class="contenido-info">
                    <h3>Calidad</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                </div>
            </div> <!--.info-->
        </div><!--.informacion sobre la pagina-->
        
    </div>

</section><!--.seccion menu y titulos-->

<section class="sobre-nosotros" id='nosotros'>

    <?php incluirTemplate('bkCuadro'); ?>

    <div class="informacion-sobre-nosotros">
        <h2>TUS<span> GUIAS</span> EN <span>ARQUITECTURA</span> DE <span>SISTEMAS</span></h2>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Iusto suscipit impedit ut assumenda sit provident dignissimos optio ea, odio, iste veniam perspiciatis? Vel accusantium quo sed quis numquam neque incidunt. Lorem ipsum dolor sit amet consectetur adipisicing elit. Error aperiam quam repellendus laboriosam architecto molestias. Ratione, incidunt ullam quae recusandae eius corporis quasi explicabo, illo, dolorem adipisci animi sequi est.</p>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Iusto suscipit impedit ut assumenda sit provident dignissimos optio ea, odio, iste veniam perspiciatis? Vel accusantium quo sed quis numquam neque incidunt.</p>
    </div>

    <div class="imagen-sobre-nosotros">
        <img src="/build/img/nosotros.jpg" alt="Imagen sobre nosotros">
    </div>

</section><!--.informacion sobre la pagina-->

<section class="sobre-arquitecturas" id="arquitecturas">

    <h2>ARQUITECTURAS DE <span>COMPUTADORAS</span></h2>

    <div class="contenedor-arquitecturas">

        <a href="/arq86.php" class="arquitectura">
            <div class="contenido-arq">
                <h3 class="titulo">X86</h3>
            </div>
        </a><!--.Arquitectura-->


        <a href="/arq64.php" class="arquitectura">
            <div class="contenido-arq">
                <h3 class="titulo">X64</h3>
                <!--<img class="imagen-arquitectura" src="/build/img/arquitecturas/ARM.jpg" alt="Arquitectura"> -->
            </div>
        </a><!--.Arquitectura-->

        <a href="/arqarm.php" class="arquitectura">
            <div class="contenido-arq">
                <h3 class="titulo">ARM</h3>
            </div>
        </a><!--.Arquitectura-->

    </div>
</section><!--.seccion de arquitecturas -->

<section class="informacion-secundaria" id="herramientas">
    <?php incluirTemplate('bkCuadro'); ?>

    <h2>HERRAMIENTAS <span>ESENCIALES</span></h2>

    <div class="contenedor-herramientas">

        <div class="sub-contenedor-herramienta">
            <div class="imagen-herramienta">
                <img src="/build/img/herramientas/multimetro.jpg" alt="">
            </div>
            <div class="informacion-herramientas">
                <h3>Multímetro</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque soluta est doloribus beatae repellendus, vero ipsum in facere vel voluptate laudantium cumque laborum error at similique voluptatibus eveniet amet pariatur!</p>
            </div>
        </div> <!--.contenedor de informacion de la herramienta-->

        <div class="sub-contenedor-herramienta">
            <div class="imagen-herramienta">
                <img src="/build/img/herramientas/multimetro.jpg" alt="">
            </div>
            <div class="informacion-herramientas">
                <h3>Multímetro</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque soluta est doloribus beatae repellendus, vero ipsum in facere vel voluptate laudantium cumque laborum error at similique voluptatibus eveniet amet pariatur!</p>
            </div>
        </div> <!--.contenedor de informacion de la herramienta-->

        <div class="sub-contenedor-herramienta">
            <div class="imagen-herramienta">
                <img src="/build/img/herramientas/multimetro.jpg" alt="">
            </div>
            <div class="informacion-herramientas">
                <h3>Multímetro</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque soluta est doloribus beatae repellendus, vero ipsum in facere vel voluptate laudantium cumque laborum error at similique voluptatibus eveniet amet pariatur!</p>
            </div>
        </div> <!--.contenedor de informacion de la herramienta-->

        <div class="sub-contenedor-herramienta">
            <div class="imagen-herramienta">
                <img src="/build/img/herramientas/multimetro.jpg" alt="">
            </div>
            <div class="informacion-herramientas">
                <h3>Multímetro</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque soluta est doloribus beatae repellendus, vero ipsum in facere vel voluptate laudantium cumque laborum error at similique voluptatibus eveniet amet pariatur!</p>
            </div>
        </div> <!--.contenedor de informacion de la herramienta-->
    </div>

</section><!--.informacion extra (ya en temas de clase)-->
<?php incluirTemplate('footer'); ?>