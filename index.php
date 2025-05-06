<?php
require 'includes/app.php';
incluirTemplate('inicio');
?>

<section class="imagen-fondo-principal">
    <div class="separar-cuerpo">

        <?php incluirTemplate('header'); ?>

        <main class="contenido seccion">
            <div class="titulo-pagina">
                <div class="titulos">
                    <h1>Arquitecturas de Máquinas I</h1>
                    <h2>ArchMachine</h2>
                </div>
                <div></div>
            </div>
        </main><!--.main-->
    </div>

</section><!--.seccion menu y titulos-->

<section class="sobre-nosotros">

    <div class="informacion-sobre-nosotros">
        <h2>TUS<span> GUIAS</span> EN <span>ARQUITECTURA</span> DE <span>SISTEMAS</span></h2>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Iusto suscipit impedit ut assumenda sit provident dignissimos optio ea, odio, iste veniam perspiciatis? Vel accusantium quo sed quis numquam neque incidunt. Lorem ipsum dolor sit amet consectetur adipisicing elit. Error aperiam quam repellendus laboriosam architecto molestias. Ratione, incidunt ullam quae recusandae eius corporis quasi explicabo, illo, dolorem adipisci animi sequi est.</p>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Iusto suscipit impedit ut assumenda sit provident dignissimos optio ea, odio, iste veniam perspiciatis? Vel accusantium quo sed quis numquam neque incidunt.</p>
    </div>

    <div class="imagen-sobre-nosotros">
        <img src="/build/img/nosotros.jpg" alt="Imagen sobre nosotros">
    </div>

</section>

<section class="informacion-secundaria">
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

    </div>

    <!-- <div class="background-animado">
        <div class="cajas">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div> -->


</section>

<?php incluirTemplate('footer'); ?>