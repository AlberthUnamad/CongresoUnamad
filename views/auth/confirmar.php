<main class="auth panel__contenedor">
    <h2 class="auth__encabezado"><?php echo $titulo; ?></h2>
    <p class="auth__texto">Tu Cuenta Congreso Unamad</p> 
    
    <?php 
        require_once __DIR__ . '/../templates/alertas.php';
    ?>

    <?php if(isset($alertas['exito'])) { ?>
        <div class="acciones--centrar">
            <a href="/login" class="acciones__enlace encabezado__boton" >Iniciar Sesión</a>
        </div>
    <?php } ?>

</main>