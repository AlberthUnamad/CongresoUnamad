<aside class="panel__sidebar">
    <nav class="panel__menu">
        <a href="/admin/dashboard" class="panel__enlace <?php echo pagina_actual('/dashboard') ? 'panel__enlace--actual' : ''; ?> ">
            <i class="fa-solid fa-house panel__icono"></i>
            <span class="panel__menu-texto">
                Inicio
            </span>    
        </a>

        <a href="/admin/ponentes" class="panel__enlace <?php echo pagina_actual('/ponentes') ? 'panel__enlace--actual' : ''; ?> ">
            <i class="fa-solid fa-microphone panel__icono"></i>
            <span class="panel__menu-texto">
                Ponentes
            </span>    
        </a>

        <a href="/admin/eventos" class="panel__enlace <?php echo pagina_actual('/eventos') ? 'panel__enlace--actual' : ''; ?> ">
            <i class="fa-solid fa-calendar panel__icono"></i>
            <span class="panel__menu-texto">
                Eventos
            </span>    
        </a>

        <a href="/admin/registrados" class="panel__enlace <?php echo pagina_actual('/registrados') ? 'panel__enlace--actual' : ''; ?> ">
            <i class="fa-solid fa-users panel__icono"></i>
            <span class="panel__menu-texto">
                Registrados
            </span>    
        </a>
        <a href="/admin/regalos" class="panel__enlace <?php echo pagina_actual('/regalos') ? 'panel__enlace--actual' : ''; ?> ">
            <i class="fa-solid fa-gift panel__icono"></i>
            <span class="panel__menu-texto">
                Regalos
            </span>    
        </a>
    </nav>
</aside>