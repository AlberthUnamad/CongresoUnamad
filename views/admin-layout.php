<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Congreso Unamad - <?php echo $titulo; ?></title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="/build/css/app.css">
</head>
<body class="panel">
        <?php
            include_once __DIR__ .'/templates/admin-encabezado.php';
    ?>
        <div class="panel__grid">
            <?php
            include_once __DIR__ .'/templates/admin-sidebar.php';
    ?>

            <main class="panel__contenido">
                <?php
            echo $contenido;
    ?> 
            </main>
        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.9.1/chart.min.js" integrity="sha512-ElRFoEQdI5Ht6kZvyzXhYG9NqjtkmlkfYk0wr6wHxU9JEHakS7UJZNeml5ALk+8IKlU6jDgMabC3vkumRokgJA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    
<!-- Reproductor de música -->
    <script>
        const audio = document.getElementById('musica');
        audio.volume = 0.5; // Ajusta el volumen al 50%
        audio.play().catch(err => {
            console.log("No se pudo reproducir la música:", err);
        });
    </script>    
<div style="position:fixed; bottom:20px; right:20px; z-index:1000; text-align:center;">
  <!-- Botón para mostrar / ocultar el reproductor -->
  <button onclick="togglePlayer()" style="background:#fff; border:none; padding:10px 15px; border-radius:50px; box-shadow:0 0 10px rgba(0,0,0,0.2); cursor:pointer; font-size:18px;">
    🎵 Música
  </button>

  <!-- Reproductor oculto inicialmente -->
  <div id="playerContainer" style="display:none; margin-top:10px; background:#fff; padding:15px; border-radius:15px; box-shadow:0 0 10px rgba(0,0,0,0.2); width:250px;">
    <p id="trackName" style="margin:0 0 10px; font-weight:bold;">Canción 1</p>
    <audio id="musica" controls loop style="width:100%;">
      <source src="/musica/fondo.mp3" type="audio/mpeg">
    </audio>
    <br>
    <button onclick="prevSong()" style="margin:5px;">⏮️</button>
    <button onclick="nextSong()" style="margin:5px;">⏭️</button>
  </div>
</div>

<script>
const tracks = [
  { name: "MONTAGEM XONADA(MP3_320K)", src: "/musica/fondo.mp3" },
  { name: "DIA DELÍCIA (Slowed)(MP3_160K)", src: "/musica/extra.mp3" }
];

let currentTrack = 0;
const audio = document.getElementById('musica');
const trackName = document.getElementById('trackName');

// Cambiar canción
function loadTrack(index) {
  if (index < 0) index = tracks.length - 1;
  if (index >= tracks.length) index = 0;
  currentTrack = index;
  audio.src = tracks[currentTrack].src;
  trackName.textContent = tracks[currentTrack].name;
  audio.play().catch(err => console.log("No se pudo reproducir:", err));
}

function prevSong() {
  loadTrack(currentTrack - 1);
}

function nextSong() {
  loadTrack(currentTrack + 1);
}

// Mostrar / ocultar reproductor
function togglePlayer() {
  const container = document.getElementById('playerContainer');
  container.style.display = (container.style.display === "none") ? "block" : "none";
}
</script>

        <script src="/build/js/main.min.js" defer></script>
</body>
</html>