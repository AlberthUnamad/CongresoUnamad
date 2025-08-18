<main class="agenda">
    <h2 class="agenda__encabezado">Talleres & Conferencias</h2>
    <p class="agenda__descripcion">Talleres y Conferencias dictados por expertos en desarrollo web</p>

    <div class="eventos">
        <h3 class="eventos__encabezado">Conferencias</h3>

        <p class="eventos__fecha">Jueves 7 de Diciembre</p>
        <div class="eventos__listado slider swiper">
            <div class="swiper-wrapper">
                <?php if (!empty($eventos['conferencias_j'])): ?>
                    <?php foreach ($eventos['conferencias_j'] as $evento): ?>
                        <?php include __DIR__ . '../../templates/evento.php'; ?>
                    <?php endforeach; ?>
                <?php else: ?>
                    <p>No hay conferencias para este día.</p>
                <?php endif; ?>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>

        <p class="eventos__fecha">Sábado 9 de Diciembre</p>
        <div class="eventos__listado slider swiper">
            <div class="swiper-wrapper">
                <?php if (!empty($eventos['conferencias_s'])): ?>
                    <?php foreach ($eventos['conferencias_s'] as $evento): ?>
                        <?php include __DIR__ . '../../templates/evento.php'; ?>
                    <?php endforeach; ?>
                <?php else: ?>
                    <p>No hay conferencias para este día.</p>
                <?php endif; ?>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </div>

    <div class="eventos eventos--talleres">
        <h3 class="eventos__encabezado">Talleres</h3>

        <p class="eventos__fecha">Jueves 7 de Diciembre</p>
        <div class="eventos__listado slider swiper">
            <div class="swiper-wrapper">
                <?php if (!empty($eventos['talleres_j'])): ?>
                    <?php foreach ($eventos['talleres_j'] as $evento): ?>
                        <?php include __DIR__ . '../../templates/evento.php'; ?>
                    <?php endforeach; ?>
                <?php else: ?>
                    <p>No hay talleres para este día.</p>
                <?php endif; ?>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>

        <p class="eventos__fecha">Sábado 9 de Diciembre</p>
        <div class="eventos__listado slider swiper">
            <div class="swiper-wrapper">
                <?php if (!empty($eventos['talleres_s'])): ?>
                    <?php foreach ($eventos['talleres_s'] as $evento): ?>
                        <?php include __DIR__ . '../../templates/evento.php'; ?>
                    <?php endforeach; ?>
                <?php else: ?>
                    <p>No hay talleres para este día.</p>
                <?php endif; ?>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </div>
</main>
