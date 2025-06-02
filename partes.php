<?php
require 'includes/app.php';

incluirTemplate('inicio');
// incluirTemplate('header');
?>

<?php incluirTemplate('bkCuadro') ?>
<div class="separar-cuerpo no-index partes-compu">

    <div class="btn-home">
        <a href="/"><button class="btn">Volver al inicio</button></a>
    </div>
    <h2>PARTES <span>DE </span>LA <span>COMPUTADORA</span></h2>

    <div class="contenedor-partes-pc swiper">
        <?php incluirTemplate('bkCuadro') ?>

        <div class="carta-elementos">
            <ul class="lista-cartas swiper-wrapper">

                <li class="elemento-carta swiper-slide">
                    <a href="#" class="enlace">
                        <img src="/build/img/pc/placa_madre.jpg" alt="tarjeta madre" class="imagen-elemento">
                        <p class="categoria">Componente</p>
                        <h2 class="titulo-elemento">Tarjeta Madre / Motherboard</h2>
                        <button class="boton-carta material-symbols-rounded">arrow_forward</button>
                    </a>
                </li><!--.fin ficha elemento-->

                <li class="elemento-carta swiper-slide">
                    <a href="#" class="enlace">
                        <img src="/build/img/pc/RAM.jpg" alt="tarjeta madre" class="imagen-elemento">
                        <p class="categoria">Componente</p>
                        <h2 class="titulo-elemento">Memorias RAM</h2>
                        <button class="boton-carta material-symbols-rounded">arrow_forward</button>
                    </a>
                </li><!--.fin ficha elemento-->

                <li class="elemento-carta swiper-slide">
                    <a href="#" class="enlace">
                        <img src="/build/img/pc/cascos.png" alt="cascos" class="imagen-elemento">
                        <p class="categoria">Periférico</p>
                        <h2 class="titulo-elemento">Audífonos / Cascos</h2>
                        <button class="boton-carta material-symbols-rounded">arrow_forward</button>
                    </a>
                </li><!--.fin ficha elemento-->

                <li class="elemento-carta swiper-slide">
                    <a href="#" class="enlace">
                        <img src="/build/img/pc/RAM.jpg" alt="tarjeta madre" class="imagen-elemento">
                        <p class="categoria">Componente</p>
                        <h2 class="titulo-elemento">Memorias RAM</h2>
                        <button class="boton-carta material-symbols-rounded">arrow_forward</button>
                    </a>
                </li><!--.fin ficha elemento-->

                <li class="elemento-carta swiper-slide">
                    <a href="#" class="enlace">
                        <img src="/build/img/pc/placa_madre.jpg" alt="tarjeta madre" class="imagen-elemento">
                        <p class="categoria">Componente</p>
                        <h2 class="titulo-elemento">Tarjeta Madre / Motherboard</h2>
                        <button class="boton-carta material-symbols-rounded">arrow_forward</button>
                    </a>
                </li><!--.fin ficha elemento-->

                   <li class="elemento-carta swiper-slide">
                    <a href="#" class="enlace">
                        <img src="/build/img/pc/cpu1.jpg" alt="procesador" class="imagen-elemento">
                        <p class="categoria">Componente</p>
                        <h2 class="titulo-elemento">Procesador</h2>
                        <button class="boton-carta material-symbols-rounded">arrow_forward</button>
                    </a>
                </li><!--.fin ficha elemento-->

                   <li class="elemento-carta swiper-slide">
                    <a href="#" class="enlace">
                        <img src="/build/img/pc/fuente.jpg" alt="Fuente de poder" class="imagen-elemento">
                        <p class="categoria">Componente</p>
                        <h2 class="titulo-elemento">Fuente de Poder</h2>
                        <button class="boton-carta material-symbols-rounded">arrow_forward</button>
                    </a>
                </li><!--.fin ficha elemento-->

                   <li class="elemento-carta swiper-slide">
                    <a href="#" class="enlace">
                        <img src="/build/img/pc/ssd.jpg" alt="ssd" class="imagen-elemento">
                        <p class="categoria">Componente</p>
                        <h2 class="titulo-elemento">SSD/Solid State Drive</h2>
                        <button class="boton-carta material-symbols-rounded">arrow_forward</button>
                    </a>
                </li><!--.fin ficha elemento-->

                   <li class="elemento-carta swiper-slide">
                    <a href="#" class="enlace">
                        <img src="/build/img/pc/gpu.png" alt="GPU" class="imagen-elemento">
                        <p class="categoria">Componente</p>
                        <h2 class="titulo-elemento">Tarjeta Gráfica</h2>
                        <button class="boton-carta material-symbols-rounded">arrow_forward</button>
                    </a>
                </li><!--.fin ficha elemento-->
            </ul>

            <div class="swiper-pagination"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>

        </div>

    </div>
</div>

<?php incluirTemplate('footer'); ?>