<h2 class="pagina__encabezado" style="margin: 50px 0;"><?php echo $titulo; ?></h2>
<p class="pagina__descripcion" style="margin: 50px 0;">Elije hasta 5 eventos para asistir de forma Presencial</p>

<div class="eventos-registro">
    <main class="eventos-registro__listado">
        <h3 class="eventos-registro__encabezado--conferencias">Conferencias</h3>
        <p class="eventos-registro__fecha">Jueves 7 de Diciembre</p>

        <div class="eventos-registro__grid">
            <?php foreach($eventos['conferencias_j'] as $evento ) { ?>
                <?php include __DIR__ . '/evento.php'; ?>
            <?php } ?>
        </div>

        <p class="eventos-registro__fecha">Sábado 9 de Diciembre</p>
        <div class="eventos-registro__grid">
            <?php foreach($eventos['conferencias_s'] as $evento ) { ?>
                <?php include __DIR__ . '/evento.php'; ?>
            <?php } ?>
        </div>

        <h3 class="eventos-registro__encabezado--talleres">Talleres</h3>
        <p class="eventos-registro__fecha">Jueves 7 de Diciembre</p>

        <div class="eventos-registro__grid eventos--talleres">
            <?php foreach($eventos['talleres_j'] as $evento ) { ?>
                <?php include __DIR__ . '/evento.php'; ?>
            <?php } ?>
        </div>

        <p class="eventos-registro__fecha">Sábado 9 de Diciembre</p>
        <div class="eventos-registro__grid eventos--talleres">
            <?php foreach($eventos['talleres_s'] as $evento ) { ?>
                <?php include __DIR__ . '/evento.php'; ?>
            <?php } ?>
        </div>

    </main>

    <aside class="registro">
        <h2 class="registro__encabezado">Tu Registro</h2>

        <div id="registro-resumen" class="registro__resumen"></div>

        <div class="registro__regalo">
            <label for="regalo" class="registro__label">Selecciona un regalo</label>
            <select id="regalo" class="registro__select">
                <option value="">-- Selecciona tu regalo --</option>
                <?php foreach($regalos as $regalo) { ?>
                    <option value="<?php echo $regalo->id; ?>"><?php echo $regalo->nombre; ?></option>
                <?php } ?>
            </select>
        </div>

        <form id="registro" class="formulario">
            <div class="formulario__campo">
                <input type="submit" class="formulario__submit formulario__submit--full" value="Registrarme">
            </div>
        </form>
    </aside>
</div>