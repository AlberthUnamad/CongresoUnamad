<main class="congreso">
    <h2 class="congreso__encabezado"><?php echo $titulo; ?></h2>
    <p class="congreso__descripcion">Conoce la conferencia más importante de Perú</p>

    <div class="congreso__grid">
        <div <?php aos_animacion(); ?> class="congreso__imagen">
            <picture>
                <source srcset="build/img/sobre_congreso.avif" type="image/avif">
                <source srcset="build/img/sobre_congreso.webp" type="image/webp">
                <img loading="lazy" width="200" height="300" src="build/img/sobre_congreso.jpg" alt="Imagen congreso">
            </picture>
        </div>

        <div class="congreso__contenido">
            <p <?php aos_animacion(); ?> class="congreso__texto">La Universidad Nacional Amazónica de Madre de Dios (UNAMAD) es una de las universidades más importantes de Perú. Cada año, la UNAMAD organiza una conferencia que reúne a expertos de todo el país y el mundo para discutir temas de actualidad.

            En 2023, la UNAMAD celebró su conferencia más importante, con el tema "Innovación y desarrollo sostenible en la Amazonia". La conferencia contó con la participación de más de 500 asistentes, incluyendo estudiantes, académicos, investigadores y profesionales de la región </p>
            
            <p <?php aos_animacion(); ?> class="congreso__texto">La conferencia se dividió en dos partes. La primera parte se centró en las últimas tendencias en innovación y desarrollo sostenible. La segunda parte se centró en los desafíos y oportunidades que enfrenta la Amazonia.</p>
        </div>
    </div>
</main>