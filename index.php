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
                    <p>Ofrecemos contenido técnico claro y accesible sobre arquitectura de sistemas, ideal para estudiantes y entusiastas del hardware.</p>
                </div>
            </div> <!--.info-->

            <div class="info">
                <div class="contendor-imagen">
                    <img src="/build/img/icons/star2.svg" alt="icono">
                </div>
                <div class="contenido-info">
                    <h3>Conciso</h3>
                    <p>Toda la información presentada de forma directa y resumida para que entiendas los conceptos sin rodeos ni tecnicismos innecesarios.</p>
                </div>
            </div> <!--.info-->

            <div class="info">
                <div class="contendor-imagen">
                    <img src="/build/img/icons/rank2.svg" alt="icono">
                </div>
                <div class="contenido-info">
                    <h3>Calidad</h3>
                    <p>Creamos contenido confiable y bien estructurado para que aprendas con seguridad y claridad en cada paso.</p>
                </div>
            </div> <!--.info-->
        </div><!--.informacion sobre la pagina-->
        
    </div>

</section><!--.seccion menu y titulos-->

<section class="sobre-nosotros" id='nosotros'>

    <?php incluirTemplate('bkCuadro'); ?>

    <div class="informacion-sobre-nosotros">
        <h2>TUS<span> GUIAS</span> EN <span>ARQUITECTURA</span> DE <span>SISTEMAS</span></h2>
        <p>La arquitectura de sistemas es la base que define la estructura, comportamiento y más aspectos de un sistema informático. Ya seas estudiante, entusiasta o desarrollador, aquí encontrarás recursos útiles para fortalecer tu conocimiento en esta área fundamental de la informática.</p>
        <p>Explora nuestras secciones para aprender sobre tipos de arquitecturas, partes esenciales de una computadora, herramientas utilizadas por profesionales y mucho más.</p>
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
                <p>Permite medir voltaje, corriente y resistencia para diagnosticar fallos en circuitos y fuentes de poder.</p>
            </div>
        </div> <!--.contenedor de informacion de la herramienta-->

        <div class="sub-contenedor-herramienta">
            <div class="imagen-herramienta">
                <img src="/build/img/herramientas/dest.jpg" alt="">
            </div>
            <div class="informacion-herramientas">
                <h3>Destornilladores de precisión</h3>
                <p>Ideales para desmontar equipos electrónicos sin dañar tornillos ni componentes sensibles.</p>
            </div>
        </div> <!--.contenedor de informacion de la herramienta-->

        <div class="sub-contenedor-herramienta">
            <div class="imagen-herramienta">
                <img src="/build/img/herramientas/pulseraanti.jpg" alt="">
            </div>
            <div class="informacion-herramientas">
                <h3>Pulsera Antiestática</h3>
                <p>Protege los componentes electrónicos contra descargas electrostáticas durante su manipulación.</p>
            </div>
        </div> <!--.contenedor de informacion de la herramienta-->

        <div class="sub-contenedor-herramienta">
            <div class="imagen-herramienta">
                <img src="/build/img/herramientas/amperimetro.jpg" alt="">
            </div>
            <div class="informacion-herramientas">
                <h3>Amperímetro</h3>
                <p>Mide la corriente eléctrica que circula en un circuito. Es útil para verificar el consumo y detectar sobrecargas.</p>
            </div>
        </div> <!--.contenedor de informacion de la herramienta-->
        <div class="sub-contenedor-herramienta">
            <div class="imagen-herramienta">
                <img src="/build/img/herramientas/kitsol.jpg" alt="">
            </div>
            <div class="informacion-herramientas">
                <h3>Kit de soldadura</h3>
                <p>Permite realizar reparaciones en placas electrónicas, como la sustitución de componentes dañados o la reconexión de pistas. Es especialmente útil en tareas de mantenimiento avanzado.</p>
            </div>
        </div> <!--.contenedor de informacion de la herramienta-->
        <div class="sub-contenedor-herramienta">
            <div class="imagen-herramienta">
                <img src="/build/img/herramientas/blower.jpeg" alt="">
            </div>
            <div class="informacion-herramientas">
                <h3>Estación de calor</h3>
                <p>Se utiliza para soldar o desoldar componentes SMD en placas electrónicas. Es una herramienta avanzada que permite reparaciones precisas en microcomponentes.</p>
            </div>
         </div> <!--.contenedor de informacion de la herramienta-->
        <div class="sub-contenedor-herramienta">
            <div class="imagen-herramienta">
                <img src="/build/img/herramientas/pasta.webp" alt="">
            </div>
            <div class="informacion-herramientas">
                <h3>Pasta térmica</h3>
                <p>Se aplica entre el procesador y el disipador. Mejora la transferencia de calor y previene el sobrecalentamiento.</p>
            </div>
             </div> <!--.contenedor de informacion de la herramienta-->
        <div class="sub-contenedor-herramienta">
            <div class="imagen-herramienta">
                <img src="/build/img/herramientas/aire.jpg" alt="">
            </div>
            <div class="informacion-herramientas">
                <h3>Aire comprimido</h3>
                <p>Sirve para limpiar polvo de componentes sin contacto físico. Ideal para mantener ventiladores y placas libres de suciedad.</p>
            </div> 
            
    </div>

</section><!--.informacion extra (ya en temas de clase)-->
<?php incluirTemplate('footer'); ?>