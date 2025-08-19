<?php
include_once __DIR__ . '/conferencias.php';
?>

<section class="resumen">
    <div class="resumen__grid">
        <div <?php aos_animacion(); ?> class="resumen__bloque">
            <p class="resumen__texto resumen__texto--numero"><?php echo $ponentes_total; ?></p>
            <p class="resumen__texto">Ponentes</p>
        </div>

        <div <?php aos_animacion(); ?> class="resumen__bloque">
            <p class="resumen__texto resumen__texto--numero"><?php echo $conferencias_total; ?></p>
            <p class="resumen__texto">Conferencias</p>
        </div>

        <div <?php aos_animacion(); ?> class="resumen__bloque">
            <p class="resumen__texto resumen__texto--numero"><?php echo $talleres_total; ?></p>
            <p class="resumen__texto">Talleres</p>
        </div>

        <div <?php aos_animacion(); ?> class="resumen__bloque">
            <p class="resumen__texto resumen__texto--numero">800</p>
            <p class="resumen__texto">Asistentes</p>
        </div>
    </div>
</section>

<section class="ponentes">
    <h2 class="ponentes__encabezado">ponentes</h2>
    <p class="ponentes__descripcion">Conoce a nuestros expertos de Desarrollo</p>

    <div class="ponentes__grid">
        <?php foreach ($ponentes as $ponente) { ?>
            <div <?php aos_animacion(); ?> class="ponente">
                <picture>
                    <source srcset="img/ponentesC/<?php echo $ponente->imagen; ?>.webp" type="image/webp">
                    <source srcset="img/ponentesC/<?php echo $ponente->imagen; ?>.png" type="image/png">
                    <img class="ponente__imagen" loading="lazy" width="200" height="300" src="img/ponentesC/<?php echo $ponente->imagen; ?>.png" alt="Imagen Ponente">
                </picture>

                <div class="ponente__informacion">
                    <h4 class="ponente__nombre">
                        <?php echo $ponente->nombre . ' ' . $ponente->apellido; ?>
                    </h4>

                    <p class="ponente__ubicacion">
                        <?php echo $ponente->ciudad . ', ' . $ponente->pais; ?>
                    </p>

                    <nav class="ponente-sociales">
                        <?php
                            $redes =  json_decode($ponente->redes);
            ?>
                        
                        <?php if (!empty($redes->facebook)) { ?>
                            <a class="ponente-sociales__enlace" rel="noopener noreferrer" target="_blank" href="<?php echo $redes->facebook; ?>">
                                <span class="ponente-sociales__ocultar">Facebook</span>
                            </a> 
                        <?php } ?>

                        <?php if (!empty($redes->twitter)) { ?>
                            <a class="ponente-sociales__enlace" rel="noopener noreferrer" target="_blank" href="<?php echo $redes->twitter; ?>">
                                <span class="ponente-sociales__ocultar">Twitter</span>
                            </a> 
                        <?php } ?> 

                        <?php if (!empty($redes->youtube)) { ?>
                            <a class="ponente-sociales__enlace" rel="noopener noreferrer" target="_blank" href="<?php echo $redes->youtube; ?>">
                                <span class="ponente-sociales__ocultar">YouTube</span>
                            </a> 
                        <?php } ?> 

                        <?php if (!empty($redes->instagram)) { ?>
                            <a class="ponente-sociales__enlace" rel="noopener noreferrer" target="_blank" href="<?php echo $redes->instagram; ?>">
                                <span class="ponente-sociales__ocultar">Instagram</span>
                            </a> 
                        <?php } ?> 

                        <?php if (!empty($redes->tiktok)) { ?>
                            <a class="ponente-sociales__enlace" rel="noopener noreferrer" target="_blank" href="<?php echo $redes->tiktok; ?>">
                                <span class="ponente-sociales__ocultar">Tiktok</span>
                            </a> 
                        <?php } ?> 

                        <?php if (!empty($redes->github)) { ?>
                            <a class="ponente-sociales__enlace" rel="noopener noreferrer" target="_blank" href="<?php echo $redes->github; ?>">
                                <span class="ponente-sociales__ocultar">Github</span>
                            </a>
                        <?php } ?> 
                    </nav>

                    <ul class="ponente__listado-skills">
                        <?php
                $tags = explode(',', $ponente->tags);
            foreach ($tags as $tag) {
                ?>
                            <li class="ponente__skill"><?php echo $tag; ?></li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
        <?php } ?>
    </div>
</section>

<div id="mapa" class="mapa"></div>

<section class="boletos">
    <h2 class="boletos__encabezado">Boletos & Precios</h2>
    <p class="boletos__descripcion">Precios para Congreso Unamad</p>

    <div class="boletos__grid">
        <div class="boleto boleto--presencial">
            <h4 class="boleto__logo">CongresoUnamad</h4>
            <p class="boleto__plan">Presencial</p>
            <p class="boleto__precio">S/.50</p>
        </div>

        <div class="boleto boleto--virtual">
            <h4 class="boleto__logo">CongresoUnamad</h4>
            <p class="boleto__plan">Virtual</p>
            <p class="boleto__precio">S/.30</p>
        </div>

        <div class="boleto boleto--gratis">
            <h4 class="boleto__logo">CongresoUnamad</h4>
            <p class="boleto__plan">Gratis</p>
            <p class="boleto__precio">Gratis - S/.0</p>
        </div>
    </div>

    <div class="boleto__enlace-contenedor">
        <a href="/paquetes" class="boleto__enlace">Ver Paquetes</a>
    </div>
</section>