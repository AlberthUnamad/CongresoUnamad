<h2 align="center"><?php echo $titulo; ?></h2>

<div class="panel__contenedor-boton">
    <a class="panel__boton" href="/admin/ponentes">
        <i class="fa-solid fa-circle-arrow-left"></i>
        Volver
    </a>
</div>

<div class="panel__formulario">
    <?php
        include_once(__DIR__ . '/../../templates/alertas.php');
?>

    <form method="POST" action="/admin/ponentes/crear" enctype="multipart/form-data" class="formulario">
        <?php include_once __DIR__ . '/formulario.php'; ?>

        <input class="formulario__submit formulario__submit--registrar" type="submit" value="Registrar Ponente">
    </form>
</div>