<header class="encabezado">
    <div class="encabezado__contenedor">
        <nav class="encabezado__navegacion">

        <?php if(is_auth()) { ?>
                <a href="<?php echo is_admin() ? '/admin/dashboard' : '/finalizar-registro'; ?>" class="encabezado__enlace encabezado__boton">Administrar</a>
                <form method="POST" action="/logout" class="encabezado__form">
                    <input type="submit" value="Cerrar Sesión" class="encabezado__submit encabezado__boton">
                </form>
            <?php } else { ?> 
            <a href="/registro" class="encabezado__enlace encabezado__boton">Registro</a>
            <a href="/login" class="encabezado__enlace encabezado__boton">Iniciar Sesión</a>
        <?php } ?>
        </nav>

        <div class="encabezado__contenido">
            <a href="/">
                <h1 class="encabezado__logo">
                Congreso Unamad
                </h1>
            </a>

            <p class="encabezado__texto">Noviembre 14-17 -2025</p>
            <p class="encabezado__texto">Modalidades:</p>
            <p class="encabezado__texto encabezado__texto--modalidad">En Línea - Presencial</p>

            <a href="/registro" class="encabezado__boton">Inscribirse</a>
        </div>
    </div>
</header>
<div class="nav">
    <div class="nav__contenido">
        <a href="/">
        <h2 class="nav__logo" >Congreso Unamad</h2>
        </a>
        <nav class="navegacion">
            <a href="/congreso" class="navegacion__enlace <?php echo pagina_actual('/congreso') ? 'navegacion__enlace--actual' : ''; ?>">Evento</a>
            <a href="/paquetes" class="navegacion__enlace <?php echo pagina_actual('/paquetes') ? 'navegacion__enlace--actual' : ''; ?>">Paquetes</a>
            <a href="/congreso-conferencias" class="navegacion__enlace <?php echo pagina_actual('/congreso-conferencias') ? 'navegacion__enlace--actual' : ''; ?>">Talleres / Conferencias</a>
            <a href="/registro" class="navegacion__enlace <?php echo pagina_actual('/registro') ? 'navegacion__enlace--actual' : ''; ?>">Inscripción</a>
        </nav>
    </div>
</div>