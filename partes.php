<?php
require 'includes/app.php';

incluirTemplate('inicio');
incluirTemplate('header');
?>

<?php incluirTemplate('bkCuadro') ?>
<div class="separar-cuerpo no-index partes-compu">

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
                        <img src="/build/img/pc/cascos.png" alt="tarjeta madre" class="imagen-elemento">
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

            </ul>

            <div class="swiper-pagination"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>

        </div>

    </div>
</div>

<?php incluirTemplate('footer'); ?>